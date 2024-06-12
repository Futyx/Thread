<?php

namespace App\Filament\Resources\MessageReactionResource\Pages;

use App\Filament\Resources\MessageReactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMessageReactions extends ListRecords
{
    protected static string $resource = MessageReactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
