<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SetoranResource\Pages;
use App\Filament\Resources\SetoranResource\RelationManagers;
use App\Models\Setoran;
use App\Models\Cabang;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SetoranResource extends Resource
{
    protected static ?string $model = Setoran::class;

    protected static ?string $navigationIcon = 'fas-money-bill-wave-alt';
    protected static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}

protected static ?string $navigationLabel = 'Setoran';
protected static ?string $title = 'Custom Page Title';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
        ->schema([
            TextInput::make('nama')->required(),
            Select::make('cabang')->required()
            ->options(Cabang::all()->pluck('cabang', 'cabang')),
            TextInput::make('nominal')->required()
            ->mask(fn (TextInput\Mask $mask) => $mask->money(prefix: 'Rp ', thousandsSeparator: ',', decimalPlaces: 2)),
            Toggle::make('acc')
            ->label('Status')
            ->onColor('success')
            ->offColor('danger'),
            FileUpload::make('gambar')
            ->enableDownload()
            ->enableOpen()
            ->required(),
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama'),
                TextColumn::make('cabang'),
                TextColumn::make('nominal')->money($symbol = 'idr', $decimalSeparator = '.', $thousandsSeparator = ',', $decimals = 2),
                BadgeColumn::make('acc')
                ->enum([
                    '1' => 'Diterima',
                    '0' => 'Dicek',
                ])
                ->colors([
                    'primary',
                    'success' => 'Diterima',
                    'danger' => 'Dicek',
                ]),
                ImageColumn::make('gambar')->circular(),
                TextColumn::make('created_at')->dateTime()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            Tables\Actions\ViewAction::make(),
            Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSetorans::route('/'),
            'create' => Pages\CreateSetoran::route('/create'),
            'edit' => Pages\EditSetoran::route('/{record}/edit'),
        ];
    }
}
