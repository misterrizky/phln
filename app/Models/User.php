<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'hrm.users';
    public $timestamps = false;
    public function province(){
        return $this->belongsTo(Province::class,'province_id','id');
    }
    public function sektor(){
        return $this->belongsTo(Sektor::class,'sektor_id','id');
    }
}
