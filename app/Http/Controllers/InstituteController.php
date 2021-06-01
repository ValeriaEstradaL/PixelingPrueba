<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insitute;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  $institute= Institute::all();
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
            //Es válido con o sin indicador(suponemos que está en Colombia)
            'phone' => 'required|min:10|max:13',
            'email'=> 'required|email|unique',
        ]);
        $institute= new Institute;

        $institute->name= $request->name;
        $institute->phone= $request->phone;
        $institute->email= $request->email;

       $res= $institute->save();
       if ($res) {
        return response()->json(['message' => 'Institute create succesfully'], 201);
    }
    return response()->json(['message' => 'Error to create institute'], 500);/*  */

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
            //Es válido con o sin indicador(suponemos que está en Colombia)
            'phone' => 'required|min:10|max:13',
            'email'=> 'required|email|unique',
        ]);
        $institute=Institute::find($id);
        $institute->name = $request->name;
        $institute->phone = $request->phone;
        $institute->email = $request->email;


        $res = $institute->save();

        if ($res) {
            return response()->json(['message' => 'Institute update succesfully']);
        }

        return response()->json(['message' => 'Error to update Institute'], 500);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Insitute::destroy($id);
    }
}
