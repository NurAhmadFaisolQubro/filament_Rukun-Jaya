<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StokResource\Pages;
use App\Filament\Resources\StokResource\Widgets\StokStatsOverview;
// use App\Filament\Widgets\StokStatsOverview;
use App\Filament\Resources\StokResource\RelationManagers;
use App\Models\Stok;
use App\Models\Cabang;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StokResource extends Resource
{
    protected static ?string $model = Stok::class;
    protected static ?string $navigationGroup = 'Stok Management';
    protected static ?string $navigationLabel = 'Stok';
    protected static ?string $navigationIcon = 'heroicon-o-scale';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
        ->schema([
                Select::make('cabang')->required()
                ->options(Cabang::all()->pluck('cabang', 'cabang')),
                TextInput::make('total_stok')->required(),
             ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('cabang'),
                TextColumn::make('total_stok')->formatStateUsing(fn (string $state): string => __("{$state} Bal")),
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
            'index' => Pages\ListStoks::route('/'),
            'create' => Pages\CreateStok::route('/create'),
            'edit' => Pages\EditStok::route('/{record}/edit'),
        ];
    }    
}
