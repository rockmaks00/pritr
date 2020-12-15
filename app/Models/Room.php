<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function project() {
        return $this->belongsTo('App\Project');
    }
    public function wall() {
        return $this->hasOne('App\Wall');
    }
    public function floor() {
        return $this->hasOne('App\Floor');
    }
    public function ceiling() {
        return $this->hasOne('App\Ceiling');
    }
}
