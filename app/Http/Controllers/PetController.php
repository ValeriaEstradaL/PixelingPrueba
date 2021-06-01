<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use Illuminate\Support\Facades\Validator;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min5|max:120',
            'species' => 'in:dog,cat',
            'birth'=> 'required|date_format:m/Y',
            'image'=> 'mimes:jpg,bmp,png|max:1000',
            'institute_id' => 'required'

        ]);
        $pet= new Pet;

        $pet->name= $request->name;
        $pet->species= $request->species;
        $pet->birth= $request->birth;
        $pet->image= $request->file('image');
        $pet->institute_id= $request->institute_id;
        $pet->birth= $request->birth;
        if($archivo=$request->file('file')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('images',$nombre);
            $pet['image']=$nombre;

        }

       $res= $institute->save();
       if ($res) {
        return response()->json(['message' => 'Pet create succesfully'], 201);
    }
    return response()->json(['message' => 'Error to create pet'], 500);/*  */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min5|max:120',
            'species' => 'in:dog,cat',
            'birth'=> 'required|date_format:m/Y',
            'image'=> 'mimes:jpg,bmp,png|max:1000',
            'institute_id' => 'required'

        ]);
       $pet=Pet::find($id);

        $pet->name= $request->name;
        $pet->species= $request->species;
        $pet->birth= $request->birth;
        $pet->image= $request->file('image');
        $pet->institute_id= $request->institute_id;
        $pet->birth= $request->birth;
        if($archivo=$request->file('file')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('images',$nombre);
            $pet['image']=$nombre;

        }

       $res= $institute->save();
       if ($res) {
        return response()->json(['message' => 'Pet create succesfully'], 201);
    }
    return response()->json(['message' => 'Error to create pet'], 500);/*  */

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pet::destroy($id);
    }
}
