<?php

namespace App\Http\Controllers;

use App\Http\Resources\CatResource;
use App\Models\Cat;
use Illuminate\Http\Request;

class ApiCatController extends Controller
{
    public function index()
    {
        //عملت باجنيت عشان يظهر 2 بس ف api
        $cats = Cat::paginate(2);

        // $cats = Cat::all();
        return CatResource::collection($cats);
    }
    public function show($id)
    {
        $cat = Cat::find($id);

        if ($cat == null) {
            return  response()->json([
                'msg' => '404 Not found',
            ], 404);
        }
        // return new CatResource($cats);ف حالة صف واحد
        return new CatResource($cat);
    }
}
