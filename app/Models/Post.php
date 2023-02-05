<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use softDeletes;
    use HasFactory;

    protected $dates = ['deleted_at'];
    protected  $fillable = ['title','body'];


    public function comments(){
        return $this->hasMany(Comment::class);
//            ->whereNull('parent_id');

    }

//
//  for each comment get the replies
// return view html taple have posts detiesl and the tittle
// when clicking on posts see the whole post and the commints with replies


}
