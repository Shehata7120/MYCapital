<?php

namespace App\Http\Controllers;

use App\Http\Resources\InstitutionTypeResource;
use App\Models\InstitutionType;
use Illuminate\Http\Request;

class InstitutionsTypeController extends Controller
{

    public function index(){

            $type = InstitutionType::all();
            $typeResource = InstitutionTypeResource::collection($type);
            return response()->json($typeResource);
    }
}
