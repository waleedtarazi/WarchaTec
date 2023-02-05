<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
//    we but each column that i can write/update on them.
//by default each column can just be read
    protected $fillable = [
        'name',
    ];

    public function permissions(){
        $this->belongsToMany(Permission::Class,'role_permissions','role_id','permission_id');
    }

}
