<?php

namespace Core;

class Math
{
    private string $user = 'Elmar';
    private string $pwd = '123456';
    private string $from = 'Elmardan mesaj';

    /**
     * @param int|float $a
     * @param int|float $b
     * @return float|int
     */
    public function multiplication(int|float $a, int|float $b): float|int
    {
        return $a * $b;
    }

    /**
     * @param int|float $a
     * @param int|float $b
     * @return float|int
     */
    public function addition(int|float $a, int|float $b): float|int
    {
        return $a + $b;
    }

    /**
     * @param string $phone
     * @param string $text
     * @return void
     */
    public function sendMessage(string $phone, string $text): void
    {
        $ch = curl_init('https://api.msm.az/sendsms');

        $xml  = '<?xml version="1.0" encoding="utf-8"?>';
        $xml .= '<SMS-InsRequest>';
        $xml .= '<CLIENT user="' . $this->user . '" pwd="' . $this->pwd . '" from="' . $this->from . '"/>';
        $xml .= '<INSERTMSG text="' . $text . '">';
        $xml .= '<TO>' . $phone . '</TO>';
        $xml .= '</INSERTMSG>';
        $xml .= '</SMS-InsRequest>';

        curl_setopt_array($ch, [
            CURLOPT_POSTFIELDS => $xml,
            CURLOPT_HTTPHEADER =>  ['Content-Type: application/xml'],
            CURLOPT_RETURNTRANSFER => true
        ]);
        curl_exec($ch);
        curl_close($ch);
    }
}