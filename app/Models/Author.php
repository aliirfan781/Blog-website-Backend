<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Author extends User
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'address'
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

}