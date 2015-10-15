<?php

namespace App\Repositories;

use App\Post;

class PostRepository implements PostRepositoryInterface
{

    public function all(){

        return Post::all(['title','description']);
    }

    public function save($input){
        Post::create($input);
    }

    public function findById($id){

        return Post::findOrFail($id);
    }

    public function update($id,$input){
        $title = $input['title'];
        $description = $input['description'];

        $post =  $this->findById($id);
        $post->title = $title;
        $post->description = $description;
        $post->save();
    }

    public function delete($id){

        $post =  $this->findById($id);
        $post->delete();
    }






}