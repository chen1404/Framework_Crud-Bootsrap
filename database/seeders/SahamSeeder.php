<?php

namespace Database\Seeders;

use App\Models\Saham;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SahamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $saham = [
            [

                "Kode_Saham" => "BBCA",
                "Nama" => "Bank Central Asia Tbk.",
                "Saham" => "122.042.299.500",
                "Papan_Pencatatan" => "Utama",

            ],
            [

                "Kode_Saham" => "BBRI",
                "Nama" => "Bank Rakyat Indonesia (Persero)",
                "Saham" => "150.043.411.587	",
                "Papan_Pencatatan" => "Utama",

            ],
            [

                "Kode_Saham" => "AGRO",
                "Nama" => "Bank Raya Indonesia Tbk.",
                "Saham" => "22.520.433.863",
                "Papan_Pencatatan" => "Utama",

            ],
            [

                "Kode_Saham" => "NETV",
                "Nama" => "Net Visi Media Tbk.",
                "Saham" => "23.453.177.240",
                "Papan_Pencatatan" => "Pengembangan",

            ],
            [

                "Kode_Saham" => "BATA",
                "Nama" => "Sepatu Bata Tbk.",
                "Saham" => "1.300.000.000	",
                "Papan_Pencatatan" => "Utama",

            ],
            [

                "Kode_Saham" => "ARTO",
                "Nama" => "Bank Jago Tbk.",
                "Saham" => "13.717.687.500",
                "Papan_Pencatatan" => "Utama",

            ],
            [

                "Kode_Saham" => "AMAR",
                "Nama" => "Bank Amar Indonesia Tbk.",
                "Saham" => "13.646.222.000",
                "Papan_Pencatatan" => "Pengembangan",

            ],
            [

                "Kode_Saham" => "BUKA",
                "Nama" => "Bukalapak.com Tbk.",
                "Saham" => "103.062.019.354",
                "Papan_Pencatatan" => "Pengembangan",

            ]
        ];
        foreach ($saham as $sh) {
            Saham::firstOrCreate($sh);
        }
    }
}
