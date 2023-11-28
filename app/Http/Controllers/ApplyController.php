<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apply;
use Illuminate\Support\Facades\Validator;
use App\Models\Person;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $rules = [
        'type' => 'not_in:9999',
        'number' => 'required',
        'region' => 'not_in:9999',
        'province' => 'not_in:9999',
        'district'=> 'not_in:9999',
        'email' => 'required',
        'smartphone' => 'required',
        'description' => 'required',
        'dependency' => 'not_in:9999',
        'information' => 'not_in:9999',
    ];
    private $message = [
        'number.required'=>'Ingrese Numero',
        'type.not_in'=>'Seleccione un tipo de Documento',
        'region.not_in'=>'Seleccione una region',
        'province.not_in'=>'Seleccione una Provincia',
        'district.not_in'=>'Seleccione una Distrito',
        'email.required'=>'Ingrese correo',
        'smartphone.required' => 'Ingrese su Numero de Celular',
        'description.required' => 'Ingrese Descripcion',
        'dependency.not_in' => 'Seleccione oficina',
        'information.not_in' => 'Ingrese medio de entrega de informacion',
    ];
   
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_person($array)
    {
        try {
            $id_persona = Person::get()->count()+1;
            $user = new Person;
            $user->id_person  = $id_persona;
            $user->numero  = $array['number'];
            $user->email  = $array['email'];
            $user->phone  = $array['phone'];
            $user->name  = $array['nombre'];
            $user->lastname = $array['lastname'];
            $user->id_region  = $array['region'];
            $user->id_province = $array['province'];
            $user->id_district = $array['district'];
            $user->save();
            return array("success" => true ,"codigo" => $id_persona);     
        } catch (\Throwable $th) {
            return $th;
        }
    }
    public function create_apply($array)
    {
        try {
            $apply = new Apply;
            $user->id_person  = $id_persona;
            $user->numero  = $array['number'];
            $user->email  = $array['email'];
            $user->phone  = $array['phone'];
            $user->name  = $array['nombre'];
            $user->lastname = $array['lastname'];
            $user->id_region  = $array['region'];
            $user->id_province = $array['province'];
            $user->id_district = $array['district'];
            $user->save();
            return array("success" => true ,"codigo" => $id_persona);     
        } catch (\Throwable $th) {
            return $th;
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /*$validations = Validator::make($request->all(),$this->rules,$this->message);
        if($validations->fails())return $validations->errors();  */
       $person = self::create_person($request->all());
       if($person->success){
            

       }
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
