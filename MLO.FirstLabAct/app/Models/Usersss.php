<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 


class Usersss extends Model{ 
protected $table = 'users'; 
// column sa table 
protected $fillable = [ 
'username', 'password' 
]; } 