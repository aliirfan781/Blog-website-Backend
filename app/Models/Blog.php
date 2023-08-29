<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Fields\BelongsTo;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'thumbnail',
        'publish_at'
    ];

    protected $casts = [
        'publish_at' => 'datetime',
    ];

    public function user()
    {
        return $this->BelongsTo(User::class);

    }
}