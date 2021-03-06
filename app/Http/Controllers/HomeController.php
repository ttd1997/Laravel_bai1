<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App;
class HomeController extends Controller
{
    
    public function __construct() {
    	// $this->middleware('auth');
    }

    public function getIndex() {

        $time = $_SERVER['REQUEST_TIME'];
        $timeout_duration = 1;
        if (isset($_SESSION['LAST_ACTIVITY']) && 
        ($time > $_SESSION['LAST_ACTIVITY']) ) {
            session_unset();
            session_destroy();
        }
        $_SESSION['LAST_ACTIVITY'] = 5;
        session_start();
        $posts = App\Post::all();
        if (isset($_SESSION['password'])) return view('admin.home',['posts'=>($posts)]);
    	else return view('visitor.home',['posts'=>($posts)]);
    }

    public function showId($id){
        return $id;
    }
}