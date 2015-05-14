<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AboutController extends Controller {
public function index(){
    $friends=['prabhat','samika','pramika'];
   //$friends=[];
    return view('forum.about',compact('friends'));
}
	//

}
