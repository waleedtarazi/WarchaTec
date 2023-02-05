<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = 'permissions';
//    we but each column that i can write/update on them.
//by default each column can just be read
    protected $fillable = [
        'name',
    ];


   public function roles(){
       $this->belongsToMany(Role::Class,'role_permissions','permission_id','role_id');
}



}
