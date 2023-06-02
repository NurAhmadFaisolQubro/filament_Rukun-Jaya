<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use App\Models\Cabang;
use Filament\Forms;
use Spatie\Permission\Models\Role;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationGroup = 'Setting';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
        ->schema([
            Select::make('name')
            ->label('posisi')
    ->options([
        'Admin Pusat' => 'Admin Pusat',
        'Admin Cabang' => 'Admin Cabang',
    ])
            ->label('Posisi'),
            Select::make('cabang')->required()
            ->options(Cabang::all()->pluck('cabang', 'cabang')),
            TextInput::make('email')
            ->label('Email Address')
            ->email()
            ->maxLength(255)
            ->required(),
            TextInput::make('password')
            ->password()
            ->minLength(8)
            ->dehydrated(fn ($state) => filled($state))
            ->dehydrateStateUsing(fn ($state) => Hash::make($state)),
            Select::make('roles')->required()
            ->options(Role::query()->pluck('name')),
    //         Select::make('roles')
    //         ->multiple()
    //         ->relationship('roles','name')
    // ->preload()
                ])
            ]);
        }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('name'),
                TextColumn::make('cabang'),
                // TextColumn::make('role'),
                TextColumn::make('email'),
                // TextColumn::make('roles.name'),
                BadgeColumn::make('name')
                ->label('Roles')
    ->colors([
        'primary',
        'success' => 'Admin Pusat',
        'danger' => 'Admin Cabang',
        // 'success' => 'published',
        // 'danger' => 'rejected',
    ]),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }    
}
