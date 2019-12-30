<?php


namespace App\Services;


use App\Models\Sms;

class SmsService
{
    public function create($message, $titre = null)
    {
        $sms = new Sms();
        $sms->contenu = $message;
        $sms->save();

        return $sms;
    }

    public function setDestinataires($destinataire)
    {
        return false;
    }

    public function send()
    {
        return false;
    }
}
