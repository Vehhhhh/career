<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestoController extends Controller{
    function index(){
        return view('home');
    }
    function list(){
        return view('list');
    }
}