<?php

namespace App\Controllers;

class Home extends BaseController
{
    //Home
    public function index()
    {
        // return view('welcome_message');
        $data['page'] = 'index';
        echo view('template/header',$data);
        echo view('template/navbar');
        echo view('pages/index');
        echo view('template/footer');
    }
    //About
    public function about()
    {
        $data['page'] = 'about';
        echo view('template/header', $data);
        echo view('template/navbar');
        echo view('pages/about');
        echo view('template/footer');
    }
    //Blog
    public function blog()
    {
        $data['page'] = 'blog';
        echo view('template/header', $data);
        echo view('template/navbar');
        echo view('pages/blog');
        echo view('template/footer');
    }
    //Services
    public function services()
    {
        $data['page'] = 'services';
        echo view('template/header', $data);
        echo view('template/navbar');
        echo view('pages/services');
        echo view('template/footer');
    }
    //Contact
    public function contact()
    {
        $data['page'] = 'contact';
        echo view('template/header', $data);
        echo view('template/navbar');
        echo view('pages/contact');
        echo view('template/footer');
    }
}
