<?php

namespace App\Http\Controllers;

use App\forseo;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests;

class ForseoController extends Controller
{
    protected $forseos;
    public function index() {
        $alert = "";
        return view('mosti');
    }
    public function store(Request $request) {
        $success = 1;
        $this->validate($request, [
            'staffid' => 'required|unique:forseos',
            'authornames' => 'required',
            'forarea' => 'required'
        ]);

        $forseo = new Forseo;
        $forseo->staffid = $request->staffid;
        $forseo->authornames = $request->authornames;
        $forseo->forarea = $request->forarea;
        $forseo->seo = $request->seo;
        $forseo->comments = $request->comments;
        $forseo->save();
        $alert = "Your response has been successfully captured! Thanks";
        return view('mosti', compact('success'));
    }
    public function all() {
        $forseos = Forseo::all();
        return view('viewall',compact('forseos'));
    }
    public function edit($id) {
        $forseo = Forseo::findOrFail($id);
        return view('update', compact('forseo'));
    }
    public function update($id, UpdateUserRequest $request) {
        $forseo = Forseo::findOrFail($id);
        $forseo->update($request->all());
        return redirect('viewall');
    }
    public function show($id) {
        $forseo = Forseo::findOrFail($id);
       return view('show', compact('forseo'));

    }
}
