<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extradition extends Model
{
    use HasFactory;
    protected $fillable = ['ima','surname','name','issue_id','timebooking','timeend'];

    public function Issue(){
        return $this->belongsTo(Issue::class);
    }
}
