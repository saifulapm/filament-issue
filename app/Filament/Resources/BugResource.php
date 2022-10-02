<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BugResource\Pages;
use App\Filament\Resources\BugResource\RelationManagers;
use App\Models\Bug;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BugResource extends Resource
{
    protected static ?string $model = Bug::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('client_id')
                    ->options([1 => 'Saiful', 2 => 'Bug', '3' => 'Filament'])
                    ->lazy()
                    ->searchable(),

                Forms\Components\Select::make('staff')
                    ->disabled(fn (callable $get) => $get('client_id') === null)
                    ->lazy()
                    ->searchable()
                    ->options(function ($get) {
                        return [];
                    }),
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
            'index' => Pages\ListBugs::route('/'),
            'create' => Pages\CreateBug::route('/create'),
            'edit' => Pages\EditBug::route('/{record}/edit'),
        ];
    }
}
