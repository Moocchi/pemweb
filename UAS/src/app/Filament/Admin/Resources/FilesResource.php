<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\FilesResource\Pages;
use App\Filament\Admin\Resources\FilesResource\RelationManagers;
use App\Models\Files;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FilesResource extends Resource
{
    protected static ?string $model = Files::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\FileUpload::make('path')
                    ->label('Upload File')
                    ->required()
                    ->disk('public')
                    ->directory('files')
                    ->preserveFilenames()
                    ->getUploadedFileNameForStorageUsing(function ($file) {
                        return time() . '_' . $file->getClientOriginalName();
                    })
                    ->reactive()
                    ->afterStateUpdated(function (\Filament\Forms\Set $set, $state) {
                        if ($state) {
                            $disk = \Storage::disk('public');
                            if ($disk->exists($state)) {
                                $fullPath = $disk->path($state);
                                $set('type', mime_content_type($fullPath));
                                $set('size', $disk->size($state));
                            }
                        }
                    }),

                Forms\Components\TextInput::make('type')
                    ->label('File Type')
                    ->disabled()
                    ->reactive()
                    ->afterStateHydrated(function (\Filament\Forms\Set $set, $state, $record) {
                        if ($record && $record->path) {
                            $disk = \Storage::disk('public');
                            if ($disk->exists($record->path)) {
                                $fullPath = $disk->path($record->path);
                                $set('type', mime_content_type($fullPath));
                            }
                        }
                    }),

                Forms\Components\TextInput::make('size')
                    ->label('File Size (Bytes)')
                    ->disabled()
                    ->numeric()
                    ->reactive()
                    ->afterStateHydrated(function (\Filament\Forms\Set $set, $state, $record) {
                        if ($record && $record->path) {
                            $disk = \Storage::disk('public');
                            if ($disk->exists($record->path)) {
                                $set('size', $disk->size($record->path));
                            }
                        }
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('path')
                    ->label('File Name')
                    ->getStateUsing(fn ($record) => basename($record->path))
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('size')
                    ->label('Size (Bytes)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFiles::route('/'),
            'create' => Pages\CreateFiles::route('/create'),
            'edit' => Pages\EditFiles::route('/{record}/edit'),
        ];
    }
}
