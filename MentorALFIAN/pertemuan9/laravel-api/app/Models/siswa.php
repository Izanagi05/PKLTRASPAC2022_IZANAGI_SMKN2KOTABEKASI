<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $fillable =['nama', 'kelas', 'alamat'];
    public function SiswaPelajaran(){
        return  $this->hasMany(siswapelajaran::class);
    }

}
