<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

  public function about() {
    // $data = [];
    // $data['first_name'] = "Hanako";
    // $data['last_name'] = "Yamada";
    // return view('pages.about', $data);

    $first_name = "Hanako";
    $last_name = "Yamada";
    return view('pages.about', compact('first_name', 'last_name'));

  }

  public function contact() {
    return view('contact');
  }

}
