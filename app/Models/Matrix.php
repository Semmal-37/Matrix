<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matrix extends Model
{
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
    protected $table='matrix';
    protected $primaryKey = 'Pe_id';

    protected $fillable = ['name', 'sponsor_id', 'level_1', 'level_2', 'level_3', 'level_4', 'level_5', 'level_6', 'level_7', 'level_8', 'level_9', 'level_10'];
}
