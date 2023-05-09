<?php 

 namespace App;

use Illuminate\Database\Eloquent\Model;

class LaravelCrud extends Model
{
    protected $table = 'laravel_crud';

    protected $fillable = ['id', 'name'];
}
