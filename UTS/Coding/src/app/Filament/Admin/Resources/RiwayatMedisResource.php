<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\RiwayatMedisResource\Pages;
use App\Filament\Admin\Resources\RiwayatMedisResource\RelationManagers;
use App\Models\RiwayatMedis;
use App\Models\Pasien;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RiwayatMedisResource extends Resource
{
    protected static ?string $model = RiwayatMedis::class;

    protected static ?string $navigationGroup = 'Riwayat Medis';

    protected static ?string $navigationLabel = 'Riwayat Medis';
    
    protected static ?int $navigationSort = -1;
    
    protected static ?string $navigationIcon = 'heroicon-o-clock';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kunjungan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('ID Pasien')
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
                    ->dehydrated(false),
                Forms\Components\Textarea::make('diagnosa')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('resep')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('saran')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kunjungan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diagnosa')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('resep')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('saran')
                    ->searchable()
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
            'index' => Pages\ListRiwayatMedis::route('/'),
            'create' => Pages\CreateRiwayatMedis::route('/create'),
            'edit' => Pages\EditRiwayatMedis::route('/{record}/edit'),
        ];
    }
}
