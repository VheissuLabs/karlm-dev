<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    /** @var list<string> */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    /** @var list<string> */
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function responsibilities(): HasMany
    {
        return $this->hasMany(Responsibility::class)
            ->orderBy('sort_order', 'asc');
    }
}
