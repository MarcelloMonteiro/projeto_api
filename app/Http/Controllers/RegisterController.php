<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Register;

class RegisterController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function upload(Request $request)
    {
        // $validated = $request->validated();
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string',
            'email' => 'required|string',
            'senha' =>  'required|string',
            'foto' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);
        if ($validator->fails()) {

            return response()->json(['error' => $validator->errors()], 401);
        }
        if ($request->hasFile('foto') && $request->foto->isValid()) {
            $nome = $request->input('nome');
            $email = $request->input('email');
            $senha = $request->input('senha');
            $foto = $request->file('foto')->store('img', 'public');

            $img = new Register();
            $img->nome = $nome;
            $img->email = $email;
            $img->senha = $senha;
            $img->foto = $foto;
            $img->save();

            return response()->json([
                "success" => true,
                "message" => "File successfully uploaded",
                "nome" => $nome,
                "email" => $email,
                "conteudo" => $senha,
                "foto" => $foto
            ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($email)
    {
        $register = Register::find($email);
        // $register = Register::get()->toJson(JSON_PRETTY_PRINT);
        return response($register, 200);
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
