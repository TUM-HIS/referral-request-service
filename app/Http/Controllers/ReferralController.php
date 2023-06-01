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

        $returnResponse = $receivedRequest;

        //$returnResponse['id'] = Str::uuid()->toString();

        $returnResponse['referralId'] = Str::uuid()->toString();


        return response()->json([
            'referralRes' => $returnResponse
        ], 201);


    }

}
