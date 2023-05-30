<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengirimanResource\Pages;
use App\Filament\Resources\PengirimanResource\RelationManagers;
use App\Filament\Resources\PengirimanResource\Widgets\StokStatsOverview;
use App\Models\Pengiriman;
use App\Models\Cabang;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengirimanResource extends Resource
{
    protected static ?string $model = Pengiriman::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected static ?string $navigationLabel = 'Pengiriman';
    protected static ?string $title = 'Pengiriman';
    protected static ?string $navigationGroup = 'Stok Management';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
        ->schema([
                Select::make('cabang')->required()
            ->options(Cabang::all()->pluck('cabang', 'cabang')),
            TextInput::make('pengiriman')->required()
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('cabang'),
                TextColumn::make('pengiriman')->formatStateUsing(fn (string $state): string => __("{$state} Bal")),
                TextColumn::make('created_at')->dateTime()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPengirimen::route('/'),
            'create' => Pages\CreatePengiriman::route('/create'),
            'edit' => Pages\EditPengiriman::route('/{record}/edit'),
        ];
    }    
}
