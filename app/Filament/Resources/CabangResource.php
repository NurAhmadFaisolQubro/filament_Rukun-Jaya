<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CabangResource\Pages;
use App\Filament\Resources\CabangResource\RelationManagers;
use App\Models\Cabang;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;

class CabangResource extends Resource
{
    protected static ?string $model = Cabang::class;
    protected static ?string $navigationLabel = 'Cabang';
    protected static ?string $navigationIcon = 'vaadin-factory';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
                Card::make()
            ->schema([
                TextInput::make('cabang')->required(),
                TextInput::make('kepala_cabang')->required(),
                TextInput::make('no_tlp')->required(),
                TextArea::make('alamat')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('cabang'),
                TextColumn::make('kepala_cabang'),
                TextColumn::make('no_tlp'),
                TextColumn::make('alamat'),
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
            'index' => Pages\ListCabangs::route('/'),
            'create' => Pages\CreateCabang::route('/create'),
            'edit' => Pages\EditCabang::route('/{record}/edit'),
        ];
    }    
}
