<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galery extends Model
{
    use SoftDeletes;
    protected $table = 'galery';
    protected $fillable = [
        'is_show',
        'file_id',
        'seo',
        'category',
        'title'
    ];

    public function thumbnail(): BelongsTo
    {
        return $this->belongsTo(File::class, 'file_id');
    }
}
