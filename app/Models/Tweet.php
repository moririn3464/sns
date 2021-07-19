<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Tweet extends Model
{
    // use HasFactory;
    protected $table = 'tweets';

    protected $fillable = [
      'id', 'tweet', 
    ];

    public function getFormattedDateAttribute()
    {
      return Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['created_at'])->format('Y/m/d');
    }

}