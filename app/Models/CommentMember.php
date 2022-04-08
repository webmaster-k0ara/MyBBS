<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentMember extends Model
{
    use HasFactory;
    protected $fillable = [
        'member_id',
        'body',
    ];

    public function member()
    {
        return  $this->belongsTo(Member::class);
    }

}
