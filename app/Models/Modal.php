<?php

namespace App\Models;

trait Modal{

    public $openFormModal = false;

    public function showModal(){
        return $this->openFormModal = true;
    }


    public function closeModal(){
        return $this->openFormModal = false;
    }

 }
