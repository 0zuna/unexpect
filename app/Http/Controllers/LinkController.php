<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Link;

class LinkController extends Controller
{
    public function index()
    {
        //
	return Link::all();

    }

    public function store(Request $request)
    {
	//
	$link=new Link();
	$link->mensaje=$request->mensaje;
	$link->celular=$request->celular;
	$link->latitud=$request->celular;
	$link->longitud=$request->celular;
	if(Auth::check())
		$link->user_id=Aut::user()->id;
	$link->save();
	return $link;
    }

    public function show($id)
    {
        //
	return Link::find($id);
    }

    public function update(Request $request, $id)
    {
	//
	$link = Link::findOrFail($id);
	$link->update($request->all());
	return $link;
    }

    public function destroy($id)
    {
	//
	Link::destroy($id);
	return 204;
    }
    public function copy($id)
    {
	//
	$link = Link::findOrFail($id);
	$link->copy+=1;
	$link->save();
	return $link;
    }
}
