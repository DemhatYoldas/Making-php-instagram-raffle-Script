<?php

class defaultController extends mainController
{

    public function index()
    {
        $data = [];
        $indexModel=new defaultModel();
        $data['instagram']=$indexModel->instagram();
        $this->callLayout("frontend", "main", "default", "index", $data);
    }











}