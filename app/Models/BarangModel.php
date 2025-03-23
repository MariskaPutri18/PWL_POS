<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'barang_id';

    protected $fillable = ['kategori_id', 'barang_kode', 'barang_nama', 'harga_beli', 'harga_jual'];
}
