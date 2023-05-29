<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvertisesResource\Pages;
use App\Filament\Resources\AdvertisesResource\RelationManagers;
use App\Models\Advertise;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdvertisesResource extends Resource
{
    protected static ?string $model = Advertise::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\FileUpload::make('image')
                ->imagePreviewHeight('550')
                ->loadingIndicatorPosition('left')
                ->panelAspectRatio('2:1')
                ->panelLayout('integrated')
                ->removeUploadedFileButtonPosition('right')
                ->uploadButtonPosition('left')
                ->uploadProgressIndicatorPosition('left'),
                Forms\Components\MarkdownEditor::make('body'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('image'),
                Tables\Columns\TextColumn::make('body'),
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
            'index' => Pages\ListAdvertises::route('/'),
            'create' => Pages\CreateAdvertises::route('/create'),
            'edit' => Pages\EditAdvertises::route('/{record}/edit'),
        ];
    }    
}
