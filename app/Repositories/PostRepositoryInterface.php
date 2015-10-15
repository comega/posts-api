<?php

namespace App\Repositories;

interface PostRepositoryInterface

{
    public function all();
    public function save($input);
    public function findById($id);
    public function update($id,$input);
    public function delete($id);

}