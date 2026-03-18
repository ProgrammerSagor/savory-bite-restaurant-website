<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingsResource\Pages;
use App\Filament\Resources\SettingsResource\RelationManagers;
use App\Models\Settings;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Nette\Utils\Image;

class SettingsResource extends Resource
{
    protected static ?string $model = Settings::class;

    protected static ?string $navigationIcon = 'heroicon-s-cog-8-tooth';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Brand Setting')
                    ->description('Manage your brand identity elements')
                    ->schema([
                        TextInput::make('brand_name')->label('Brand Name')->required(),
                        TextInput::make('bio')->label('Bio')->required(),
                        FileUpload::make('logo_dark')
                            ->image()
                            ->directory('settings')
                            ->disk('public')
                            ->label('Logo Dark')
                            ->nullable()
                            ->deleteUploadedFileUsing(fn($file) => Storage::disk('public')->delete($file)),

                        FileUpload::make('brand_light')
                            ->image()
                            ->directory('settings')
                            ->disk('public')
                            ->label('Logo Light')
                            ->nullable()
                            ->deleteUploadedFileUsing(fn($file) => Storage::disk('public')->delete($file)),

                        FileUpload::make('fav_icon')
                            ->image()
                            ->directory('settings')
                            ->disk('public')
                            ->label('Fav Icon')
                            ->nullable()
                            ->deleteUploadedFileUsing(fn($file) => Storage::disk('public')->delete($file)),

                    ])
                    ->columns(2),

                Section::make('Contact Info')
                    ->schema([
                        TextInput::make('email')->email(),
                        TextInput::make('phone'),
                        TextInput::make('address'),
                        RichEditor::make('opening_hours')->label('Opening Hours'),
                    ])
                    ->columns(2),


                Section::make('Social Links')
                    ->schema([
                        TextInput::make('facebook'),
                        TextInput::make('instagram'),
                        TextInput::make('youtube'),
                        TextInput::make('twitter'),
                        TextInput::make('linkedin'),
                        TextInput::make('pinterest'),
                        TextInput::make('whats_app')->label('WhatsApp'),
                    ])
                    ->columns(3),


                Section::make('Policy Pages')
                    ->schema([
                        RichEditor::make('privacy_policy')->label('Privacy Policy'),
                        RichEditor::make('terms_conditions')->label('Terms & Conditions'),
                        RichEditor::make('refund_policy')->label('Refund Policy'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('brand_name'),
                ImageColumn::make('logo_dark')->label('Logo')->disk('public')->width(50)->height(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
            // ->bulkActions([
            //     Tables\Actions\BulkActionGroup::make([
            //         Tables\Actions\DeleteBulkAction::make(),
            //     ]),
            // ]);
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
            'index' => Pages\ListSettings::route('/'),
            // 'create' => Pages\CreateSettings::route('/create'),
            'edit' => Pages\EditSettings::route('/{record}/edit'),
        ];
    }
}
