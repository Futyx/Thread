<?php

namespace App\Filament\Resources\MessageReactionResource\Pages;

use App\Filament\Resources\MessageReactionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMessageReaction extends EditRecord
{
    protected static string $resource = MessageReactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
