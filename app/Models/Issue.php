<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    public function scooter(){
        return $this->hasMany(Scooter::class);
    }

    public function otchet(){
        return $this->hasMany(Otchet::class);
    }
    public function extradition(){
        return $this->hasMany(Extradition::class);
    }

    public function order(){
        return $this->hasMany(Order::class);
    }

    public function booking(){
        return $this->hasMany(Booking::class);
    }
}
