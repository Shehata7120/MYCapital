<?php

namespace App\Trait;

use App\Models\InstitutionType;

trait InstitutionTypeTrait
{

    /**
     * @return array<string, mixed>
     */
    public function institutionType()
    {
        return InstitutionType::get(['id', 'name']);
    }
}
