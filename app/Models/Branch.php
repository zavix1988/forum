<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations;

class Branch extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = false;

    public function children(): Relations\HasMany
    {
        return $this->hasMany(Branch::class, 'parent_id', 'id');
    }

    public function parent(): Relations\BelongsTo
    {
        return $this->belongsTo(Branch::class, 'parent_id', 'id');
    }
}
