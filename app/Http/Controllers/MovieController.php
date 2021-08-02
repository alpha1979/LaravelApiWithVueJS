<?php

namespace App\Http\Controllers;

use App\Http\Resources\MovieResource;
use App\Http\Resources\MovieCollection;
use App\Models\Movie;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = Movie::orderBy('upvote','desc')->paginate(10);
        return response()->json(new MovieCollection($movie),Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie=Movie::create($request->only([
            'title','quote'
        ]));
        return new MovieResource($movie);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return response()->json(New MovieResource($movie));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
        
        if($request->type == 'downvote' ){
            $movie->downvote +=1;
            
        }else{
            $movie->upvote +=1;
           
        }
        $movie->update();
        return new MovieResource($movie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
         $movie->delete();
         return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    // public function getUpvote(Request $request)
    // {
    //     $movie = Movie::find($request->movie);
    //     return response()->json([
    //         'movie'=>$movie,
    //     ]);
    // }
 
    // public function upvote(Request $request)
    // {
    //     $movie = Movie::find($request->movie);
    //     $value = $movie->upvote;
    //     $movie->upvote = $value+1;
    //     $movie->save();
    //     return response()->json([
    //         'message'=>'Thanks',
    //     ]);
    // }    
 
    // public function getDownvote(Request $request)
    // {
    //     $movie = Movie::find($request->movie);
    //     return response()->json([
    //         'movie'=>$movie,
    //     ]);
    // }
 
    // public function downvote(Request $request)
    // {
    //     $movie = Movie::find($request->movie);
    //     $value = $movie->downvote;
    //     $movie->downvote = $value+1;
    //     $movie->save();
    //     return response()->json([
    //         'message'=>'Thanks',
    //     ]);
    // }
    
}