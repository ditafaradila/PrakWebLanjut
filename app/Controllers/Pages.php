<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view(('pages/' . $page), $data);
    }
    public function home()
    {
        $data['title'] = 'Home';
        return view('pages/home', $data);
    }
    public function about()
    {
        $data['title'] = 'About';
        return view('pages/about', $data);
    }
    public function mahasiswa()
    {
        $mahasiswaModel = new Mahasiswa();
        $mahasiswa = $mahasiswaModel->findAll();
        $data = ['title' => 'Mahasiswa', 
        'mahasiswa' => $mahasiswa
    ];
        return view('pages/mahasiswa', $data);
    }
    public function test(){
        dd('test');
    }
}