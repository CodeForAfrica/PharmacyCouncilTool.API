<?php

use Illuminate\Database\Seeder;

use App\Region;
use App\District;
use App\Ward;

class TopologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Region::truncate();
        District::truncate();
        Ward::truncate();

        // Arusha Region
        Region::create([
            'name' => "Arusha",
            'capital' => "Arusha",
            'districts' => 7,
            'keycode' => "02",
            'area' => "37,576 Km Square",
            'population' => '1,694,310',
            'postcode' => '23xxx',
            'zone' => 'Northen'
        ]);

        // Arusha Districts
        // Arusha City - District
        District::create(['region_id' => 1,'name' => "Arusha City",'capital' => 'Arusha','area' => '93 Km Square','population' => '416,122']);

        // Arusha City Wards:
        $district_id = 1;
        Ward::create(['district_id' => $district_id,'name' => "Baraa"]);
        Ward::create(['district_id' => $district_id,'name' => "Daraja Mbili"]);
        Ward::create(['district_id' => $district_id,'name' => "Elerai"]);
        Ward::create(['district_id' => $district_id,'name' => "Engutoto"]);
        Ward::create(['district_id' => $district_id,'name' => "Kaloleni"]);
        Ward::create(['district_id' => $district_id,'name' => "Kati"]);
        Ward::create(['district_id' => $district_id,'name' => "Kimandolu"]);
        Ward::create(['district_id' => $district_id,'name' => "Lemara"]);
        Ward::create(['district_id' => $district_id,'name' => "Levolosi"]);
        Ward::create(['district_id' => $district_id,'name' => "Moshono"]);
        Ward::create(['district_id' => $district_id,'name' => "Ngarenaro"]);
        Ward::create(['district_id' => $district_id,'name' => "Oloirien"]);
        Ward::create(['district_id' => $district_id,'name' => "Sekei"]);
        Ward::create(['district_id' => $district_id,'name' => "Sokon I"]);
        Ward::create(['district_id' => $district_id,'name' => "Sombetini"]);
        Ward::create(['district_id' => $district_id,'name' => "Terrat"]);
        Ward::create(['district_id' => $district_id,'name' => "Themi"]);
        Ward::create(['district_id' => $district_id,'name' => "Unga L.T.D"]);

        // Arusha Rural - District
        District::create(['region_id' => 1,'name' => "Arusha Rural",'capital' => 'Arusha','area' => '1,547.6 Km Square','population' => '323,198']);

         // Arusha Rural Wards:
         $district_id = 2;
         Ward::create(['district_id' => $district_id,'name' => "Bangata"]);
         Ward::create(['district_id' => $district_id,'name' => "Bwawani"]);
         Ward::create(['district_id' => $district_id,'name' => "Ilkidin'ga"]);
         Ward::create(['district_id' => $district_id,'name' => "Oldonyomaasi"]);
         Ward::create(['district_id' => $district_id,'name' => "Kiranyi"]);
         Ward::create(['district_id' => $district_id,'name' => "Kisongo"]);
         Ward::create(['district_id' => $district_id,'name' => "Mateves"]);
         Ward::create(['district_id' => $district_id,'name' => "Mlangarini"]);
         Ward::create(['district_id' => $district_id,'name' => "Moivo"]);
         Ward::create(['district_id' => $district_id,'name' => "Musa"]);
         Ward::create(['district_id' => $district_id,'name' => "Lemanyata"]);
         Ward::create(['district_id' => $district_id,'name' => "Mwandeti"]);
         Ward::create(['district_id' => $district_id,'name' => "Nduruma"]);
         Ward::create(['district_id' => $district_id,'name' => "Oldonyosambu"]);
         Ward::create(['district_id' => $district_id,'name' => "Oljoro"]);
         Ward::create(['district_id' => $district_id,'name' => "Laroi"]);
         Ward::create(['district_id' => $district_id,'name' => "Timbolo"]);
         Ward::create(['district_id' => $district_id,'name' => "Kiutu"]);
         Ward::create(['district_id' => $district_id,'name' => "Ilboru"]);
         Ward::create(['district_id' => $district_id,'name' => "Olmotonyi"]);
         Ward::create(['district_id' => $district_id,'name' => "Olorieni"]);
         Ward::create(['district_id' => $district_id,'name' => "Oltoroto"]);
         Ward::create(['district_id' => $district_id,'name' => "Oltrumet"]);
         Ward::create(['district_id' => $district_id,'name' => "Sambasha"]);
         Ward::create(['district_id' => $district_id,'name' => "Sokon II"]);
         Ward::create(['district_id' => $district_id,'name' => "Oldadai"]);
         Ward::create(['district_id' => $district_id,'name' => "Tarakwa"]);
    }
}
