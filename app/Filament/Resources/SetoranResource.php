<?php

namespace App\Filament\Resources;


use App\Filament\Resources\SetoranResource\Pages;
use App\Filament\Resources\SetoranResource\RelationManagers;
use App\Models\Setoran;
use App\Models\Stok;
use App\Models\Cabang;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Closure;
use Illuminate\Support\Str;

class SetoranResource extends Resource
{
    protected static ?string $model = Setoran::class;

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
                Select::make('nama')
                ->label('nama')
                ->options(Stok::query()->pluck('nama', 'id'))
                ->reactive()
                ->afterStateUpdated(fn ($state, callable $set) => $set('total_tagihan', Stok::find($state)?->total_tagihan ?? 0)),
            Select::make('cabang')
            ->options(Cabang::all()->pluck('cabang', 'cabang')),
            TextInput::make('total_tagihan')
            ->numeric()
            ->disabled(),
            // ->required(),
            Toggle::make('acc')
            ->label('Status')
            ->onColor('success')
            ->offColor('danger'),
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
            'index' => Pages\ListSetorans::route('/'),
            'create' => Pages\CreateSetoran::route('/create'),
            'edit' => Pages\EditSetoran::route('/{record}/edit'),
        ];
    }
}
