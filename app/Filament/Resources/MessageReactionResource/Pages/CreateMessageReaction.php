<?php

namespace App\Filament\Resources\MessageReactionResource\Pages;

use App\Filament\Resources\MessageReactionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMessageReaction extends CreateRecord
{
    protected static string $resource = MessageReactionResource::class;
}
