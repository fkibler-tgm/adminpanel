<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function home()
    {
        //return 'home';
        return view('pages.home');
    }

    public function search()
    {
        //return 'home';
        return view('pages.search');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function upload()
    {
        return view('pages.buchhochladen');
    }

    public function edit()
    {
        return view('pages.buchbearbeiten');
    }

    public function show()
    {
        return view('pages.buchanzeigen');
    }

    public function profile()
    {
        return view('pages.profile');
    }

}
