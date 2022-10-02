<?php

namespace App\Filament\Resources\BugResource\Pages;

use App\Filament\Resources\BugResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBug extends EditRecord
{
    protected static string $resource = BugResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
