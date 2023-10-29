<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratkeluar extends Model
{
    use HasFactory;
    //kita panggil ini karena tabelnya gak plural maksudnya gak ada tambahan s (suratkeluars).
    protected $table = 'suratkeluar';

    //kita panggil ini karena akan mengijinkan semua kolom diisi data
    protected $guarded = [];

    //paham kan?
}
