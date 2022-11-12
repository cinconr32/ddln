<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jualsatuan()
    {
        return $this->hasMany(JualSatuan::class);
    }

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }
}
