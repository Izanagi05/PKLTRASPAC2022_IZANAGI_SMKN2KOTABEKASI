<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelajaran extends Model
{
    use HasFactory;

    public function SiswaPelajaran(){
        return  $this->hasMany(siswapelajaran::class);
    }
}
