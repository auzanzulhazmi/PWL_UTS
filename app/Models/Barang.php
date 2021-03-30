<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Barang as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Barang extends Model
{
    protected $table ="barang"; // Eloquent membuat model barang menyimpan record di tabel barang
    public $timestamps = false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
    /**
    * The attributes that are mass assignable.
    * 
    * @var array
    */
    protected $fillable = [
        'Id',
        'Kode',
        'Nama',
        'Kategori',
        'Harga',
        'Qty',
    ];
}
