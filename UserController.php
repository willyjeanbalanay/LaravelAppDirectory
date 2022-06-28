<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function user_enter()
    {
        return view('user_enter');
    }

    public function user_reg()
    {
        return view('user_reg');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function home_page()
    {
        return view('home_page');
    }

    public function fetch_record()
    {
        return view('fetch_record');
    }

    public function delete_record()
    {
        return view('delete_record');
    }

    public function delete()
    {
        return view('delete');
    }

    public function update_record()
    {
        return view('update_record');
    }

    public function update()
    {
        return view('update');
    }

    public function updated()
    {
        return view('updated');
    }

    public function style()
    {
        return view('style');
    }
}
