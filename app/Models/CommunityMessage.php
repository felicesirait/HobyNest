<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CommunityMessage extends Model
{
    protected $fillable = ['community_id', 'user_id', 'message'];

    public function community()
    {
        return $this->belongsTo(Community::class);
    }

    // app/Models/CommunityMessage.php
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function messages()
{
    return $this->hasMany(CommunityMessage::class);
}

}
