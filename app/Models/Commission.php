<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    protected $table='commision';
    protected $primaryKey = 'id';

    protected $fillable = ['sponsor',  'lvl_1', 'lvl_2', 'lvl_3', 'lvl_4', 'lvl_5', 'lvl_6', 'lvl_7', 'lvl_8', 'lvl_9', 'lvl_10'];
}


