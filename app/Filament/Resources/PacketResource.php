<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PacketResource\Pages;
use App\Filament\Resources\PacketResource\RelationManagers;
use App\Models\Packet;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
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

class PacketResource extends Resource
{
    protected static ?string $model = Packet::class;

    protected static ?string $navigationLabel = 'Paket';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Paket';
    public static function getNavigationBadge(): ?string
    {
        return static::$model::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // TextInput::make('name')->required(),
                // TextInput::make('price')->numeric(),
                // FileUpload::make('image')
                // ->required()
                // ->image()
                // ->imageEditor(),
                // RichEditor::make('description')
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
            'index' => Pages\ListPackets::route('/'),
            // 'create' => Pages\CreatePacket::route('/create'),
            // 'edit' => Pages\EditPacket::route('/{record}/edit'),
        ];
    }
}
