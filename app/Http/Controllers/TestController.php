<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::all();

        return view('tests.index', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'f_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'position' => 'required'
        ]);
//dd($request);
        //cv
        $cv = $request->file('cv');
        $new_name="";
        if($cv){
        $new_name = rand() +time(). '.' . $cv->getClientOriginalExtension();
        $cv->move(public_path('images'), $new_name);
        }

//        dd(public_path('files'));
        $certificates = $request->file('certificates');
        $new_certificates="";
        if($certificates){
        $new_certificates = rand()+time() . '.' . $certificates->getClientOriginalExtension();

            $certificates->move(public_path('files'), $new_certificates);
        }
        $test = new Test([
            'f_name' => $request->get('f_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'position' => $request->get('position'),
            'information' => $request->get('information'),
            'cv' => $new_name,
            'certificates' => $new_certificates,
        ]);
        $test->save();
        return redirect('/tests')->with('success', 'Test has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
//    {
//        $test = Test::find($id);
//
//        return view('tests.edit', compact('test'));
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//        $request->validate([
//            'share_name'=>'required',
//            'share_price'=> 'required|integer',
//            'share_qty' => 'required|integer'
//        ]);
//
//        $share = Share::find($id);
//        $share->share_name = $request->get('share_name');
//        $share->share_price = $request->get('share_price');
//        $share->share_qty = $request->get('share_qty');
//        $share->save();
//
//        return redirect('/tests')->with('success', 'Stock has been updated');
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
//    public function destroy($id)
//    {
//        $share = Share::find($id);
//        $share->delete();
//
//        return redirect('/tests')->with('success', 'Stock has been deleted Successfully');
//    }
}
