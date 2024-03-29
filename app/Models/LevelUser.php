<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelUser extends Model
{
  use HasFactory;
 
  protected $table = 'level_user';
  protected $primaryKey = 'kode_level';
  public $timestamps = false;
  public $incrementing = false;
  protected $keyType = 'string';
  protected $fillable = ['kode_level', 'nama_level', 'keterangan'];

}
