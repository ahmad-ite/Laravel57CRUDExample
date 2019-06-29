<?php
namespace App\Http\Controllers;

use App\Test;

class TestRESTAPIController extends Controller
{
public function index()
{
return Test::all()->toJson();
}
}
