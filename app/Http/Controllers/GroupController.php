<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;

class GroupController extends Controller
{
    public function create(Request $request){
        $group = Group::create([
            "name" => $request->name
        ]);
        return response(
            [
                
                'data' => $group
            ],
            HttpResponse::HTTP_OK
        );
    }
}
