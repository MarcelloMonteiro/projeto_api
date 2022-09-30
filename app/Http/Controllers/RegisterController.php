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
        // return view('create');
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Post(
     *     path="api/projeto/register",
     *     summary="Cadastrar usuario",
     *     tags={"Register"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=false,
     *         @OA\Schema(type="int")
     *     ),
     *     @OA\Parameter(
     *         in="path",
     *         name="Nome",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         in="path",
     *         name="Email",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *       @OA\Parameter(
     *         in="path",
     *         name="Senha",
     *         required=true,
     *         @OA\Schema(type="password")
     *     ),
     *       @OA\Parameter(
     *         in="path",
     *         name="Foto",
     *         required=true,
     *         @OA\Schema(type="file")
     *     ),
     *     @OA\Parameter(
     *         in="path",
     *         name="created_at",
     *         required=false,
     *         @OA\Schema(type="date")
     *     ),
     *     @OA\Parameter(
     *         in="path",
     *         name="updated_at",
     *         required=false,
     *         @OA\Schema(type="date")
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 example={{"success":true,"message":"File successfully uploaded","nome":"marcelo","email":"marcelo@monteiro.com","conteudo":"1231231","foto":"img\/QvKzQRQCH5aHbkpL8YLecUqEMIM4o5Zceq3RRYkZ.jpg"}  }
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     ),
     * )
     */


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

            return redirect('api/projeto/error');
            // return response()->json(['error' => $validator->errors()], 401);
        }
        if ($request->hasFile('foto') && $request->foto->isValid()) {
            $nome = $request->input('nome');
            $email = $request->input('email');
            $senha = $request->input('senha');
            $foto = $request->file('foto')->store('img', 'public');

            $img = new Register();
            $img->nome = $nome;
            $img->email = $email;
            $img->senha = bcrypt($img->senha);
            $img->foto = $foto;
            $img->save();

            return redirect('api/projeto/success');
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="api/projeto/seach",
     *     summary="buscar usuario",
     *     tags={"Register"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=false,
     *         @OA\Schema(type="int")
     *     ),
     *     @OA\Parameter(
     *         in="path",
     *         name="Email",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 example={{"id":"1","nome":"Teste","email":"teste@teste.com","senha":"1231231","foto":"img\/AZLBFwqGlUQ5apVFuILMdjQT2zOO19aSrxm2Wrm8.jpg","created_at":"2022-09-29T21:07:16.000000Z","updated_at":"2022-09-29T21:07:16.000000Z", "first_page_url":"http:\/\/127.0.0.1:8000\/api\/projeto\/seach?page=1","from":1,"last_page":1,"last_page_url":"http:\/\/127.0.0.1:8000\/api\/projeto\/seach?page=1","url":null,"label":"&laquo; Previous","active":false,"url":"http:\/\/127.0.0.1:8000\/api\/projeto\/seach?page=1","label":"1","active":true,"url":null,"label":"Next &raquo;","active":false, "next_page_url":null,"path":"http:\/\/127.0.0.1:8000\/api\/projeto\/seach","per_page":15,"prev_page_url":null,"to":1,"total":1 }}
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     ),
     * )
     */
    public function show($email)
    { }

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
