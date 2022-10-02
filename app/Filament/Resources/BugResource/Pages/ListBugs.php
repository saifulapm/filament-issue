<?php

namespace App\Filament\Resources\BugResource\Pages;

use App\Filament\Resources\BugResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBugs extends ListRecords
{
    protected static string $resource = BugResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
