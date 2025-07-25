<?php

declare(strict_types=1);

namespace Relaticle\CustomFields\Filament\Infolists;

use Filament\Infolists\Components\Entry;
use Relaticle\CustomFields\Models\CustomField;

interface FieldInfolistsComponentInterface
{
    public function make(CustomField $customField): Entry;
}
