<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manajer extends Model
{
    use HasFactory;
    protected $table = 'manajer';
    protected $fillable = ['nama_menu','harga','deskripsi','ketersediaan'];
    public function kasir(){
        return $this->hasmany(Kasir::class);
    }
}
