<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //kasih tau nama tabel
    protected $table = 'customer';

    //laravel default id
    protected $primaryKey = 'customer_id';

    public $timestamps = false;
    //yang kedua atributnya
    protected $fillable = [
        'customer_id',
        'name',
        'address'
    ];

}
