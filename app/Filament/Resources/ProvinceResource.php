<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProvinceResource\Pages;
use App\Filament\Resources\ProvinceResource\RelationManagers;
use App\Models\Province;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProvinceResource extends Resource
{
    protected static ?string $model = Province::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-americas';

    protected static ?string $label = 'Province';

    protected static ?string $navigationGroup = 'Geo Locations';

    protected static ?int $navigationSort = 5;

    // ---Global Search Results Start---
    protected static ?string $recordTitleAttribute = 'name_en';

    public static function getGlobalSearchResultTitle(Model $record): string | Htmlable
    {
        return $record->name_en . ' | ' . $record->name_si . ' | ' . $record->name_ta;
    }
    // ---Global Search Results End---

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('name_en')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('name_si')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('name_ta')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                //Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListProvinces::route('/'),
            // 'create' => Pages\CreateProvince::route('/create'),
            // 'edit' => Pages\EditProvince::route('/{record}/edit'),
        ];
    }
}
