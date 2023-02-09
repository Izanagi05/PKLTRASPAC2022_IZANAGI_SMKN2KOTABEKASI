<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabelmurid extends Model
{
        use HasFactory;
        protected $table = 'tabelmurids';
    protected $guarded = ['id'];


    public function kelass()
    {
        return  $this->belongsTo(kelas::class, 'kelas_id');
    }
}
