<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profile',
    ];

    public function commentsmember()
    {
        return $this->hasMany(CommentMember::class);
    }
}
