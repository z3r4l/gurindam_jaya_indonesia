<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OuterCityResource\Pages;
use App\Filament\Resources\OuterCityResource\RelationManagers;
use App\Models\OuterCity;
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

class OuterCityResource extends Resource
{
    protected static ?string $model = OuterCity::class;
    protected static ?string $navigationLabel = 'Transportasi Antar Kota';
    protected static ?string $navigationIcon = 'heroicon-o-map-pin';
    protected static ?string $navigationGroup = 'Transportasi';
    public static function getNavigationBadge(): ?string
    {
        return static::$model::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Content')
                ->schema([
                    TextInput::make('name')->required(),
                    TextInput::make('price')->numeric(),
                    RichEditor::make('description')->columnSpanFull()
                    ->toolbarButtons([
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ]),
                ])
                ->columnSpan(1)
                ->columns(2),
            Section::make('Image')
                ->schema([
                    FileUpload::make('image')
                        ->required()
                        ->image()
                        ->imageEditor()
                        ->columnSpanFull(),
                ])
                ->columnSpan(1)
                ->columns(2)
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('name')
                ->label('name')
                ->sortable()
                ->searchable()
                ->toggleable(),
            TextColumn::make('price')
                ->label('price')
                ->sortable()
                ->searchable()
                ->toggleable(),
            ImageColumn::make('image')
                ->label('image')
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListOuterCities::route('/'),
            // 'create' => Pages\CreateOuterCity::route('/create'),
            // 'edit' => Pages\EditOuterCity::route('/{record}/edit'),
        ];
    }
}
