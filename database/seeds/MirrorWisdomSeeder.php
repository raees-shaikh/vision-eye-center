<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MirrorWisdomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $iframesrc=[
            'https://www.youtube.com/embed/7Gr3tBuoElc', 'https://www.youtube.com/embed/DxwyrPxtVZ8',
            'https://www.youtube.com/embed/BwbG4Jg4xoE', 'https://www.youtube.com/embed/U2sFef2YaZ0',
            'https://www.youtube.com/embed/LXvab3L6yMo', 'https://www.youtube.com/embed/kBjkQa6WUn0',
            'https://www.youtube.com/embed/AkGOB8PL_do', 'https://www.youtube.com/embed/sRlE0zPhkOI',
            'https://www.youtube.com/embed/-WAzeBbKZH8', 'https://www.youtube.com/embed/pfCfmH5cxIA',
            'https://www.youtube.com/embed/fXf1uAxblsw', 'https://www.youtube.com/embed/-7BpSljM5jI',
            'https://www.youtube.com/embed/o5teKvDntJk', 'https://www.youtube.com/embed/NJ1NN5bSSL8',
            'https://www.youtube.com/embed/U3pq3WHht-A', 'https://www.youtube.com/embed/ne7LIK5RgUo',
            'https://www.youtube.com/embed/l_xzJ4iLZO8', 'https://www.youtube.com/embed/NQ_JP0NuKak',
            'https://www.youtube.com/embed/vpvY1YcYZ1w', 'https://www.youtube.com/embed/Kbj06Zi3-As',
            'https://www.youtube.com/embed/gbekxlrvOf4', 'https://www.youtube.com/embed/xOEyzMxG3X8',
            'https://www.youtube.com/embed/wR8nq8qr8M0', 'https://www.youtube.com/embed/uKGPDJR5mEc',
            'https://www.youtube.com/embed/qlBj9UoOWZw', 'https://www.youtube.com/embed/nwgQIklNs9E',
            'https://www.youtube.com/embed/a6IF_nkEd2s', 'https://www.youtube.com/embed/pgVtaowoAyo',
            'https://www.youtube.com/embed/KwulQdopEYM', 'https://www.youtube.com/embed/J1MgdtQb1Ks',
            'https://www.youtube.com/embed/rs5K6axo8oc', 'https://www.youtube.com/embed/L9scCaE_SLo',
            'https://www.youtube.com/embed/oisVafnMzkc', 'https://www.youtube.com/embed/SQYCR7mlcXs',
            'https://www.youtube.com/embed/aFMAC_nOMdE', 'https://www.youtube.com/embed/czm1IuOwbdo',
            'https://www.youtube.com/embed/uTT5AveMUhY', 'https://www.youtube.com/embed/RVxxEj_do4k',
            'https://www.youtube.com/embed/q7xm335VtR8', 'https://www.youtube.com/embed/2XnMZps5hq8',
            'https://www.youtube.com/embed/sLR5H0XHp9A', 'https://www.youtube.com/embed/u5kKDwHfnlY',
            'https://www.youtube.com/embed/bHrLbEFPOWQ', 'https://www.youtube.com/embed/yBzOolGKY5E',
            'https://www.youtube.com/embed/JX9fIQrw4Dc', 'https://www.youtube.com/embed/aFMAC_nOMdE',
            'https://www.youtube.com/embed/TfHT0BAvnEQ', 'https://www.youtube.com/embed/wXOSPuhPkOM',
            'https://www.youtube.com/embed/V8VYW1U0UQA', 'https://www.youtube.com/embed/2rJtgtCktjo',
            'https://www.youtube.com/embed/hCBbZYuS3Uc', 'https://www.youtube.com/embed/C7HPq7FwQe0',
            'https://www.youtube.com/embed/_cvho4Dv9gg', 'https://www.youtube.com/embed/_ZyRRO8vwQo'
        ];

        foreach($iframesrc as $src){
            DB::table('mirrorwisdoms')->insert([
                'link' => $src,
                "created_at" => now(),
                "updated_at" => now()
            ]);
        }
    }
}
