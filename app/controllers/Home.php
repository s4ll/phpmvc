<?php

class Home extends Controller{
    public function index()
    {
        $data['judul'] = 'Home' ;
        $this->view('templates/header' , $data) ;
        $this->view('home/index' , $data) ;
        $this->view('templates/footer') ;
    }
    
    public function page()
    {
        $data['judul'] = 'page' ;
        $data['gambar'] = 'asahi.jpg' ;
        $data['nama'] = 'Asahi' ;
        $data['pekerjaan'] = 'Idol (Treasure)' ;
        $this->view('templates/header' , $data) ;
        $this->view('home/page' , $data) ;
        $this->view('templates/footer') ;
    }
}