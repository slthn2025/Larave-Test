<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data extends Model
{
    use SoftDeletes;
    protected $table='datas';
    protected $fillable =['nama','Tlp','email','Alamat'];

}
