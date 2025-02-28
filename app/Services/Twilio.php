<?php

namespace App\Services;

use Twilio\Rest\Client;

class Twilio
{
    public function send($user, $message)
    {
        //$message = "Hi $user->name! Your OTP is: $user->otp";
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_TOKEN');
        $client = new Client($sid, $token);

        try{
            $client->messages->create(
                $user->phone,
                [
                    'from' => env('TWILIO_FROM'),
                    'body' => $message,
                ]
            );
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
