<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\KunjunganResource\Pages;
use App\Filament\Admin\Resources\KunjunganResource\RelationManagers;
use App\Models\Kunjungan;
use App\Models\Pasien;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KunjunganResource extends Resource
{
    protected static ?string $model = Kunjungan::class;

    protected static ?string $navigationGroup = 'Kunjungan';

    protected static ?string $navigationLabel = 'Kunjungan';

    protected static ?int $navigationSort = -2;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left';

public static function form(Form $form): Form
{
    return $form
        ->schema([
                Forms\Components\TextInput::make('pasien_id')
                    ->label('ID Pasien')
                    ->numeric()
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $pasien = Pasien::find($state);
                        $set('Nama Pasien', $pasien?->nama ?? 'ID tidak ditemukan');
                    }),
                Forms\Components\TextInput::make('Nama Pasien')
                    ->label('Nama Pasien')
                    ->disabled()
                    ->dehydrated(),
                Forms\Components\DateTimePicker::make('tanggal')
                    ->required()
                    ->disabled()
                    ->dehydrated()
                    ->default(now()),
                Forms\Components\Textarea::make('keluhan')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('tindakan')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pasien_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Nama Pasien')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keluhan')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('tindakan')
                    ->searchable()
                    ->limit(50),
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
            'index' => Pages\ListKunjungans::route('/'),
            'create' => Pages\CreateKunjungan::route('/create'),
            'edit' => Pages\EditKunjungan::route('/{record}/edit'),
        ];
    }
}
