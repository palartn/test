<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
public function index()
{
    $te='this is test title';
    return view('TestView',compact('te'));
}
public function form1submit(Request $request)
{
    for ($i=0; $i < count($request->name) ; $i++) {
       Test::create([
        'name' => $request->name[$i],
        'mail' => $request->mail[$i],
        'mobile' => $request->mobile[$i],
       ]);
    }
    return redirect()->back();

}
}
