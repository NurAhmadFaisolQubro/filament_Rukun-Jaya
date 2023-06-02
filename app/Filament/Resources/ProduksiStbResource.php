<?php

namespace App\Filament\Resources;

use App\Models\Cabang;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\ProduksiStbResource\Pages;
use App\Filament\Resources\ProduksiStbResource\RelationManagers;
use App\Models\ProduksiStb;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProduksiStbResource extends Resource
{
    protected static ?string $model = ProduksiStb::class;
    protected static ?string $navigationLabel = 'Produksi';
    protected static ?string $navigationGroup = 'Stok Management';
    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('produksi')->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('produksi')->formatStateUsing(fn (string $state): string => __("{$state} Bal")),
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
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProduksiStbs::route('/'),
            'create' => Pages\CreateProduksiStb::route('/create'),
            'edit' => Pages\EditProduksiStb::route('/{record}/edit'),
        ];
    }    
}
