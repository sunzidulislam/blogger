<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $fillable = [
        'fb_url',
        'tw_url',
        'li_url',
        'be_url',
        'in_url',
        'mode',
    ];

    public function user(){
        return $this->hasOne( User::class, 'author_id');
    }
}
