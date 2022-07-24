<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class CarrierController extends Controller
{
  public function index()
  {
    $data = Helper::getContents(app()->getLocale(), 'carrier');

    return view('pages.carrier.index', compact('data'));
  }

  public function test()
  {
    $data = Helper::getContents(app()->getLocale(), 'carrier.test');

    return view('pages.carrier.test', compact('data'));
  }
}