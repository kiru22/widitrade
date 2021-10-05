<?php

namespace App\Http\Controllers;

use App\DTO\AffiliatesCreateDTO;
use App\Models\Affiliates;
use App\Repository\AffiliatesRepository;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AffiliatesController extends Controller
{
    public function create(Request $request, AffiliatesRepository $affiliatesRepository)
    {
        $validator = Validator::make($request->all(), [
            "email" => "unique:affiliates",
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 409);
        }

//        $affiliatesDTO = new AffiliatesCreateDTO($request->get("name"), $request->get("surname"), $request->get("email"));
        $affiliatesDTO = AffiliatesCreateDTO::fromArray($request->all());
        $affiliates = $affiliatesRepository->create($affiliatesDTO);

        return response()->json(compact('affiliates'));
    }

    public function __invoke(Request $request, AffiliatesRepository $affiliatesRepository)
    {
        $validator = Validator::make($request->all(), [
            "email" => "unique:affiliates",
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 409);
        }

//        $affiliatesDTO = new AffiliatesCreateDTO($request->get("name"), $request->get("surname"), $request->get("email"));
        $affiliatesDTO = AffiliatesCreateDTO::fromArray($request->all());
        $affiliates = $affiliatesRepository($affiliatesDTO);

        return response()->json(compact('affiliates'));
    }
}
