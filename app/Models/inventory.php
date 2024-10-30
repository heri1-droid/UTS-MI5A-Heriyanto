<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    
    
    
    use HasFactory, HasUuids;

    protected $fillable = ['namaBarang', 'jumlah', 'kategori', 'harga', 'statusBarang', 'stokBarang'];
}
