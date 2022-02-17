<?php

namespace App\Controller;

use App\Model\NoteModel;

class NoteController
{
    public $noteModel;
    public function __construct()
    {
        $this->noteModel = new NoteModel;
    }
    public function showAllNote(){
        $notes = $this->noteModel->getAll();
        include "App/View/note/list.php";
    }
    public function showFormCreate(){
        include "App/View/note/create.php";

    }
    public function createNote($request){
        $this->noteModel->create($request);
        header("location:index.php?page=note-list");
    }

    public function deleteNote($id)
    {
        $this->noteModel->deleteById($id);
        header("location:index.php?page=note-list");
    }
}