<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $table = 'master.donor';
    public $timestamps = false;
    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }
}
