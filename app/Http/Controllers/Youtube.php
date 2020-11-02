<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

/**
 *
 */
class Youtube extends Controller
{

  public function index(){

    $data = User::all();

    return $data;
  }

}



 ?>
