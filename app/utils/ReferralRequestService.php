<?php

namespace App\utils;

class ReferralRequestService
{

    public function PushReferralRequest(): void
    {

        $curl = curl_init();

        $url = 'http://example.com/api/endpoint';


        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer {your_token}',
        ];
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);


        $data = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
        ];

        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

        curl_setopt($curl, CURLOPT_URL, $url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);

        if ($response === false) {
            $error = curl_error($curl);
            // Handle the error
        } else {
            // Process the response
            // $response contains the response body

            echo $response;

            $info = curl_getinfo($curl);

            // Display the response details
            echo "HTTP Code: " . $info['http_code'] . "\n";
            echo "Response Body: " . $response . "\n";
        }

        // Close the cURL handle
        curl_close($curl);



    }

}
