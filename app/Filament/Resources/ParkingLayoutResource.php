<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ParkingLayoutResource\Pages;
use App\Filament\Resources\ParkingLayoutResource\RelationManagers;
use App\Models\ParkingLayout;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ParkingLayoutResource extends Resource
{
    protected static ?string $model = ParkingLayout::class;

    protected static ?string $navigationIcon = 'heroicon-o-table-cells';

    protected static ?string $label = 'Parking Layout';

    protected static ?string $navigationGroup = 'Location Management';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListParkingLayouts::route('/'),
            'create' => Pages\CreateParkingLayout::route('/create'),
            'edit' => Pages\EditParkingLayout::route('/{record}/edit'),
        ];
    }
}
