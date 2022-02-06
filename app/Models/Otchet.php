<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otchet extends Model
{
    use HasFactory;
    protected $fillable = ['ima','surname','name','issue_id','timestart','timeend','price','manager'];

    public function Issue(){
        return $this->belongsTo(Issue::class);
    }
}
