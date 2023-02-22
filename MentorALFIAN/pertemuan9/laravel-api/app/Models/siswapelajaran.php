<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswapelajaran extends Model
{
    use HasFactory;
    protected $fillable =['siswa_id', 'pelajaran_id'];


    public function Siswa(){
        return  $this->belongsTo(siswa::class, 'siswa_id');
    }
    public function Pelajaran(){
        return  $this->belongsTo(pelajaran::class, 'pelajaran_id');
    }
}
