<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DietariesResource\Pages;
use App\Filament\Resources\DietariesResource\RelationManagers;
use App\Models\Dietaries;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DietariesResource extends Resource
{
    protected static ?string $model = Dietaries::class;

    protected static ?string $navigationIcon = 'heroicon-s-banknotes';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->placeholder('Vegetarian'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
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
            'index' => Pages\ListDietaries::route('/'),
            'create' => Pages\CreateDietaries::route('/create'),
            'edit' => Pages\EditDietaries::route('/{record}/edit'),
        ];
    }
}
