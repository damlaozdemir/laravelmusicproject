<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
Class Album extends Model{
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function addcomment(Comment $comment){
        return $this->comments()->save($comment);
    }

}

 ?>
