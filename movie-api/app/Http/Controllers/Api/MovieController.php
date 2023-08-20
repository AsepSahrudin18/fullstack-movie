<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::latest()->get();

        if($movies){

            $data = [
                "message" => "Get All Resource",
                "data" => $movies
            ];

            return response()->json($data, 200);

        } else {

            $data = [
                "message" => "Resource Not Found"
            ];

            return response()->json($data, 404);
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
        $input = [
            'title' => $request->title,
            'description' => $request->description,
            'release_at' => $request->release_at,
            'category_id' => $request->category_id,
        ];

        $movies = Movie::create($input);

        $data = [
            "message"=>"Movie is Created!",
            "data" => $movies,
        ];

        return response()->json($data, 201);
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
