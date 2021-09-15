<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IraqController extends Controller
{
    public function index() {
        return view('iraq.index');
    }
    public function details() {
        return view('iraq.details');
    }
    public function intities() {
        return view('iraq.intities');
    }
    public function search_Intities() {
        return view('iraq.search_Intities');
    }
    public function about() {
        return view('iraq.about');
    }
    public function register_type() {
        return view('iraq.register_type');
    }
    public function doLogin() {
        return view('iraq.login_page');
    }
    public function register_intities() {
        return view('iraq.register_intities');
    }
    public function register_user() {
        return view('iraq.register_user');
    }
    public function logout() {
        return view('iraq.logout');
    }

}
