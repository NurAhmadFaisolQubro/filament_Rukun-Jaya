<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StokJbrResource\Pages;
use App\Filament\Resources\StokJbrResource\RelationManagers;
use App\Models\StokJbr;
use App\Filament\Resources\StokJbrResource\Widgets\StokStatsOverview;
use App\Models\Cabang;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StokJbrResource extends Resource
{
    protected static ?string $model = StokJbr::class;
    protected static ?string $navigationGroup = 'Stok Management';
    protected static ?string $navigationLabel = 'Stok';
    protected static ?string $navigationIcon = 'heroicon-o-scale';
    // public static function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             //
    //         ]);
    // }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('cabang'),
                TextColumn::make('total_stok')->formatStateUsing(fn (string $state): string => __("{$state} Bal")),
                TextColumn::make('total_produksi')->formatStateUsing(fn (string $state): string => __("{$state} Bal")),
                TextColumn::make('harga_per_Bal')->money($symbol = 'idr', $decimalSeparator = '.', $thousandsSeparator = ',', $decimals = 0),
                TextColumn::make('total_tagihan')->money($symbol = 'idr', $decimalSeparator = '.', $thousandsSeparator = ',', $decimals = 0),
                // TextColumn::make('created_at')->dateTime()
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    public static function getWidgets(): array
    {
        return [
            StokStatsOverview::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStokJbrs::route('/'),
            // 'create' => Pages\CreateStokJbr::route('/create'),
            // 'edit' => Pages\EditStokJbr::route('/{record}/edit'),
        ];
    }    
}
