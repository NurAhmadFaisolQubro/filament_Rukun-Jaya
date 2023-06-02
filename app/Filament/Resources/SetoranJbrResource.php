<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SetoranJbrResource\Pages;
use App\Filament\Resources\SetoranJbrResource\RelationManagers;
use App\Models\SetoranJbr;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use App\Models\StokJbr;
use App\Models\Cabang;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SetoranJbrResource extends Resource
{
    protected static ?string $model = SetoranJbr::class;
    protected static ?string $navigationIcon = 'fas-money-bill-wave-alt';
    protected static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}

protected static ?string $navigationGroup = 'Income Management';
protected static ?string $navigationLabel = 'Setoran';
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
            ->schema([
                Select::make('cabang1')
                // ->placeholder('pak Budi')
                ->label('nama')
                ->options(StokJbr::query()->pluck('cabang1', 'id'))
                ->reactive()
                ->afterStateUpdated(fn ($state, callable $set) => $set('total_tagihan', StokJbr::find($state)?->total_tagihan ?? 0)),
            // Select::make('cabang')
            // ->options(Cabang::all()->pluck('cabang', 'cabang')),
            TextInput::make('total_tagihan')
            ->numeric()
            ->disabled(),
            // ->required(),
            // Toggle::make('acc')
            // ->label('Status')
            // ->onColor('success')
            // ->offColor('danger'),
            TextInput::make('nominal')
            ->label('Pembayaran')
            ->mask(fn (TextInput\Mask $mask) => $mask->money(prefix: 'Rp ', thousandsSeparator: ',', decimalPlaces: 2)),
            FileUpload::make('gambar')
            ->enableDownload()
            ->enableOpen(),
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('cabang'),
                TextColumn::make('total_tagihan')->money($symbol = 'idr', $decimalSeparator = '.', $thousandsSeparator = ',', $decimals = 2),
                TextColumn::make('nominal')
                ->label('Pembayaran')
                ->money($symbol = 'idr', $decimalSeparator = '.', $thousandsSeparator = ',', $decimals = 2),
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
            'index' => Pages\ListSetoranJbrs::route('/'),
            'create' => Pages\CreateSetoranJbr::route('/create'),
            'edit' => Pages\EditSetoranJbr::route('/{record}/edit'),
        ];
    }    
}
