<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FoodProductResource\Pages;
use App\Filament\Resources\FoodProductResource\RelationManagers;
use App\Models\Food_product;
use App\Models\FoodProduct;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FoodProductResource extends Resource
{
    protected static ?string $model = Food_product::class;

    protected static ?string $navigationIcon = 'heroicon-s-cake';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->placeholder('Select Category')
                    ->preload()
                    ->required(),
                Select::make('dietary_id')
                    ->relationship('dietary', 'name')
                    ->searchable()
                    ->placeholder('Select Dietary')
                    ->preload()
                    ->required(),
               

                TextInput::make('title')
                    ->placeholder('Delicious Pasta')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', \Illuminate\Support\Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->placeholder('delicious-pasta')
                    ->maxLength(255),



                FileUpload::make('food_image')
                    ->image()
                    ->directory('food_images')
                    ->placeholder('Upload Food Image')
                    ->required(),
                TextInput::make('chef_title')
                    ->placeholder('Chef\'s Special Pasta')
                    ->maxLength(255)
                    ->required(),
                Textarea::make('chef_notes')
                    ->placeholder('A delightful blend of flavors...')
                    ->required(),
                RichEditor::make('description')
                    ->placeholder('Detailed description of the food product...')
                    ->columnSpanFull(),
                RichEditor::make('ingredients')
                    ->label('Ingredients')
                    ->columnSpanFull(),

                RichEditor::make('nutrition')
                    ->label('Nutrition')
                    ->columnSpanFull(),

                TextInput::make('discount_percent')
                    ->label('Discount (%)')
                    ->prefix('%')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100)
                    ->nullable(),
                TextInput::make('price')
                    ->label('Price')
                    ->numeric()
                    ->prefix('$')
                    ->minValue(0)
                    ->nullable(),
                TextInput::make('discount_price')
                    ->label('Discount Price')
                    ->numeric()
                    ->prefix('$')
                    ->minValue(0)
                    ->nullable(),


            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('title')->searchable()->sortable(),
                ImageColumn::make('food_image')->label('Image')->width(50)->height(50),
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
            'index' => Pages\ListFoodProducts::route('/'),
            'create' => Pages\CreateFoodProduct::route('/create'),
            'edit' => Pages\EditFoodProduct::route('/{record}/edit'),
        ];
    }
}
