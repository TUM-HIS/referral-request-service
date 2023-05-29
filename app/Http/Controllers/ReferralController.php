<?php

namespace App\Http\Controllers;

use App\utils\ReferralRequestService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReferralController extends Controller
{

    public function index()
    {

        return response()->json([
            'testing' => "tested-006"
        ], 200);


    }

    public function pushReferralRequest(){
        $referralRequestService = new ReferralRequestService();

        return $referralRequestService->pushReferralRequest();

    }


    public function receiveReferralRequest(Request $request)
    {

        $receivedRequest = $request->json()->all();

        $returnResponse = json_decode(json_encode($receivedRequest), true);

        $returnResponse['id'] = Str::uuid()->toString();


        return response()->json([
            'id' => $returnResponse['id']
        ], 201);


    }

}
