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
        
        // Karatu - District
        District::create(['region_id' => 1,'name' => "Karatu",'capital' => 'Karatu','area' => '','population' => '178,434']);

            // Karatu Wards:
            $district_id = 3;
            Ward::create(['district_id' => $district_id,'name' => "Baray"]);
            Ward::create(['district_id' => $district_id,'name' => "Burger"]);
            Ward::create(['district_id' => $district_id,'name' => "Daa"]);
            Ward::create(['district_id' => $district_id,'name' => "Endabash"]);
            Ward::create(['district_id' => $district_id,'name' => "Endamarariek"]);
            Ward::create(['district_id' => $district_id,'name' => "Kansay"]);
            Ward::create(['district_id' => $district_id,'name' => "Karatu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mang'ola"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbulumbulu"]);
            Ward::create(['district_id' => $district_id,'name' => "Oldeani"]);
            Ward::create(['district_id' => $district_id,'name' => "Qurus"]);
            Ward::create(['district_id' => $district_id,'name' => "Rhotia"]);

        // Longido - District
        District::create(['region_id' => 1,'name' => "Longido",'capital' => 'Longido','area' => '','population' => '']);

            // Longido Wards:
            $district_id = 4;
            Ward::create(['district_id' => $district_id,'name' => "Elang'atadapash"]);
            Ward::create(['district_id' => $district_id,'name' => "Engarenaibo"]);
            Ward::create(['district_id' => $district_id,'name' => "Engikaret"]);
            Ward::create(['district_id' => $district_id,'name' => "Gelai Lumbwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Gelai Meingoi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilorienito"]);
            Ward::create(['district_id' => $district_id,'name' => "Kamwanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Ketumbeine"]);
            Ward::create(['district_id' => $district_id,'name' => "Kimokouwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Longido"]);
            Ward::create(['district_id' => $district_id,'name' => "Matale"]);
            Ward::create(['district_id' => $district_id,'name' => "Mundarara"]);
            Ward::create(['district_id' => $district_id,'name' => "Namanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Ol-mologr"]);
            Ward::create(['district_id' => $district_id,'name' => "Orbomba"]);
            Ward::create(['district_id' => $district_id,'name' => "Tingatinga"]);

        // Meru - District
        District::create(['region_id' => 1,'name' => "Meru",'capital' => '','area' => '','population' => '516,814']);

            // Meru Wards:
            $district_id = 5;
            Ward::create(['district_id' => $district_id,'name' => "Akheri"]);
            Ward::create(['district_id' => $district_id,'name' => "Bangata"]);
            Ward::create(['district_id' => $district_id,'name' => "Bwawani"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilkiding'a"]);
            Ward::create(['district_id' => $district_id,'name' => "Kikatiti"]);
            Ward::create(['district_id' => $district_id,'name' => "Kikwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Kimnyaki"]);
            Ward::create(['district_id' => $district_id,'name' => "King'ori"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiranyi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Leguruki"]);
            Ward::create(['district_id' => $district_id,'name' => "Makiba"]);
            Ward::create(['district_id' => $district_id,'name' => "Maji ya Chai"]);
            Ward::create(['district_id' => $district_id,'name' => "Mororoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mateves"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbunguni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlangarini"]);
            Ward::create(['district_id' => $district_id,'name' => "Moivo"]);
            Ward::create(['district_id' => $district_id,'name' => "Moshono"]);
            Ward::create(['district_id' => $district_id,'name' => "Murieti"]);
            Ward::create(['district_id' => $district_id,'name' => "Musa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwandeti"]);
            Ward::create(['district_id' => $district_id,'name' => "Nduruma"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngarenanyuki"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkoanrua"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkoaranga"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkoarisambu"]);
            Ward::create(['district_id' => $district_id,'name' => "Oldonyosambu"]);
            Ward::create(['district_id' => $district_id,'name' => "Oljoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Olkokola"]);
            Ward::create(['district_id' => $district_id,'name' => "Oltroto"]);
            Ward::create(['district_id' => $district_id,'name' => "Oltrumet"]);
            Ward::create(['district_id' => $district_id,'name' => "Poli"]);
            Ward::create(['district_id' => $district_id,'name' => "Singisi"]);
            Ward::create(['district_id' => $district_id,'name' => "Sokoni II"]);
            Ward::create(['district_id' => $district_id,'name' => "Songoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Usa River"]);

        // Monduli - District
        District::create(['region_id' => 1,'name' => "Monduli",'capital' => 'Monduli Mjini','area' => '','population' => '185,237']);

            // Monduli Wards:
            $district_id = 6;
            Ward::create(['district_id' => $district_id,'name' => "Engarenaibor"]);
            Ward::create(['district_id' => $district_id,'name' => "Engaruka"]);
            Ward::create(['district_id' => $district_id,'name' => "Engutoto"]);
            Ward::create(['district_id' => $district_id,'name' => "Esilalei"]);
            Ward::create(['district_id' => $district_id,'name' => "Gelai Lumbwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Gelai Meirugoi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitumbeine"]);
            Ward::create(['district_id' => $district_id,'name' => "Lolkisale"]);
            Ward::create(['district_id' => $district_id,'name' => "Longido"]);
            Ward::create(['district_id' => $district_id,'name' => "Makuyuni"]);
            Ward::create(['district_id' => $district_id,'name' => "Matale"]);
            Ward::create(['district_id' => $district_id,'name' => "Moita"]);
            Ward::create(['district_id' => $district_id,'name' => "Monduli Juu"]);
            Ward::create(['district_id' => $district_id,'name' => "Monduli Mjini"]);
            Ward::create(['district_id' => $district_id,'name' => "Mto wa Mbu"]);
            Ward::create(['district_id' => $district_id,'name' => "Ol-molog"]);
            Ward::create(['district_id' => $district_id,'name' => "Selela"]);
            Ward::create(['district_id' => $district_id,'name' => "Sepeko"]);
            Ward::create(['district_id' => $district_id,'name' => "Tingatinga"]);

        // Ngorongoro - District
        District::create(['region_id' => 1,'name' => "Ngorongoro",'capital' => 'Ngorongoro','area' => '','population' => '129,776']);

            // Monduli Wards:
            $district_id = 7;
            Ward::create(['district_id' => $district_id,'name' => "Arash"]);
            Ward::create(['district_id' => $district_id,'name' => "Digodigo"]);
            Ward::create(['district_id' => $district_id,'name' => "Enduleni"]);
            Ward::create(['district_id' => $district_id,'name' => "Kakesio"]);
            Ward::create(['district_id' => $district_id,'name' => "Malambo"]);
            Ward::create(['district_id' => $district_id,'name' => "Nainokanoka"]);
            Ward::create(['district_id' => $district_id,'name' => "Nayobi"]);
            Ward::create(['district_id' => $district_id,'name' => "Olbalbal"]);
            Ward::create(['district_id' => $district_id,'name' => "Oldonyo-Sambu"]);
            Ward::create(['district_id' => $district_id,'name' => "Orgosorok"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngorongoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Pinyinyi"]);
            Ward::create(['district_id' => $district_id,'name' => "Sale"]);
            Ward::create(['district_id' => $district_id,'name' => "Soit Sambu"]);
            Ward::create(['district_id' => $district_id,'name' => "Ololosokwan"]);
            Ward::create(['district_id' => $district_id,'name' => "Oloipiri"]);
            Ward::create(['district_id' => $district_id,'name' => "Enguserosambu"]);
            Ward::create(['district_id' => $district_id,'name' => "Orgosorok"]);
            Ward::create(['district_id' => $district_id,'name' => "Nayobi"]);

        
        // Dar es Salaam Region
        Region::create([
            'name' => "Dar es Salaam",
            'capital' => "Dar es Salaam",
            'districts' => 5,
            'keycode' => "07",
            'area' => "1,393 Km Square",
            'population' => '4,364,541',
            'postcode' => '11xxx',
            'zone' => 'Coastal'
        ]);

        // Dar es Salaam Districts
        // Ilala - District
        District::create(['region_id' => 2,'name' => "Ilala",'capital' => 'Ilala','area' => '210 Km Square','population' => '1,220,611']);

            // Ilala Wards:
            $district_id = 8;
            Ward::create(['district_id' => $district_id,'name' => "Buguruni"]);
            Ward::create(['district_id' => $district_id,'name' => "Chanika"]);
            Ward::create(['district_id' => $district_id,'name' => "Gerezani"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilala"]);
            Ward::create(['district_id' => $district_id,'name' => "Jangwani"]);
            Ward::create(['district_id' => $district_id,'name' => "Kariakoo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kinyerezi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kipawa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitunda"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisutu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kivukoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiwalani"]);
            Ward::create(['district_id' => $district_id,'name' => "Mchafukoge"]);
            Ward::create(['district_id' => $district_id,'name' => "Mchikichini"]);
            Ward::create(['district_id' => $district_id,'name' => "Msongola"]);
            Ward::create(['district_id' => $district_id,'name' => "Pugu"]);
            Ward::create(['district_id' => $district_id,'name' => "Segerea"]);
            Ward::create(['district_id' => $district_id,'name' => "Tabata"]);
            Ward::create(['district_id' => $district_id,'name' => "Ukonga"]);
            Ward::create(['district_id' => $district_id,'name' => "Upanga East"]);
            Ward::create(['district_id' => $district_id,'name' => "Upanga West"]);
            Ward::create(['district_id' => $district_id,'name' => "Vingunguti"]);

        // Kinondoni - District
        District::create(['region_id' => 2,'name' => "Kinondoni",'capital' => 'Kinondoni','area' => '527 Km Square','population' => '1,775,049']);

            // Kinondoni Wards:
            $district_id = 9;
            Ward::create(['district_id' => $district_id,'name' => "Bunju"]);
            Ward::create(['district_id' => $district_id,'name' => "Goba"]);
            Ward::create(['district_id' => $district_id,'name' => "Hananasif"]);
            Ward::create(['district_id' => $district_id,'name' => "Kawe"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibamba"]);
            Ward::create(['district_id' => $district_id,'name' => "Kigogo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kijitonyama"]);
            Ward::create(['district_id' => $district_id,'name' => "Kimara"]);
            Ward::create(['district_id' => $district_id,'name' => "Kinondoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Kunduchi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mabibo"]);
            Ward::create(['district_id' => $district_id,'name' => "Magomeni"]);
            Ward::create(['district_id' => $district_id,'name' => "Makuburi"]);
            Ward::create(['district_id' => $district_id,'name' => "Makumbusho"]);
            Ward::create(['district_id' => $district_id,'name' => "Makurumula"]);
            Ward::create(['district_id' => $district_id,'name' => "Manzese"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbezi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mburahati"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbweni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mikocheni"]);
            Ward::create(['district_id' => $district_id,'name' => "Msasani"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwananyamala"]);
            Ward::create(['district_id' => $district_id,'name' => "Mzimuni"]);
            Ward::create(['district_id' => $district_id,'name' => "Ndugumbi"]);
            Ward::create(['district_id' => $district_id,'name' => "Sinza"]);
            Ward::create(['district_id' => $district_id,'name' => "Tandale"]);
            Ward::create(['district_id' => $district_id,'name' => "Ubungo"]);
        
        // Temeke - District
        District::create(['region_id' => 2,'name' => "Temeke",'capital' => 'Temeke','area' => '656 Km Square','population' => '1,368,881']);

            // Temeke Wards:
            $district_id = 10;
            Ward::create(['district_id' => $district_id,'name' => "Azimio"]);
            Ward::create(['district_id' => $district_id,'name' => "Chamazi"]);
            Ward::create(['district_id' => $district_id,'name' => "Chang'ombe"]);
            Ward::create(['district_id' => $district_id,'name' => "Charambe"]);
            Ward::create(['district_id' => $district_id,'name' => "Keko"]);
            Ward::create(['district_id' => $district_id,'name' => "Kigamboni"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibada"]);
            Ward::create(['district_id' => $district_id,'name' => "Kimbiji"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisarawe II"]);
            Ward::create(['district_id' => $district_id,'name' => "Kurasini"]);
            Ward::create(['district_id' => $district_id,'name' => "Makangarawe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbagala"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbagala Kuu"]);
            Ward::create(['district_id' => $district_id,'name' => "Miburani"]);
            Ward::create(['district_id' => $district_id,'name' => "Mjimwema"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Pemba Mnazi"]);
            Ward::create(['district_id' => $district_id,'name' => "Sandali"]);
            Ward::create(['district_id' => $district_id,'name' => "Somangira"]);
            Ward::create(['district_id' => $district_id,'name' => "Tandika"]);
            Ward::create(['district_id' => $district_id,'name' => "Temeke"]);
            Ward::create(['district_id' => $district_id,'name' => "Toangoma"]);
            Ward::create(['district_id' => $district_id,'name' => "Vijibweni"]);
            Ward::create(['district_id' => $district_id,'name' => "Yombo Vituka"]);

        // Kigamboni - District
        District::create(['region_id' => 2,'name' => "Kigamboni",'capital' => 'Kigamboni','area' => '','population' => '']);

            // Kigamboni Wards:
            $district_id = 11;
            Ward::create(['district_id' => $district_id,'name' => "Kigamboni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbagala"]);

        // Ubungo - District
        District::create(['region_id' => 2,'name' => "Ubungo",'capital' => 'Ubungo','area' => '','population' => '']);

            // Ubungo Wards:
            $district_id = 12;
            Ward::create(['district_id' => $district_id,'name' => "Ubungo"]);

        // Dodoma Region
        Region::create([
            'name' => "Dodoma",
            'capital' => "Dodoma",
            'districts' => 7,
            'keycode' => "01",
            'area' => "41,311 Km Square",
            'population' => '2,083,588',
            'postcode' => '41xxx',
            'zone' => 'Central'
        ]);

        // Dodoma Districts
        // Bahi - District
        District::create(['region_id' => 3,'name' => "Bahi",'capital' => 'Bahi','area' => '','population' => '221,645']);

            // Bahi Wards:
            $district_id = 13;
            Ward::create(['district_id' => $district_id,'name' => "Babayu"]);
            Ward::create(['district_id' => $district_id,'name' => "Bahi"]);
            Ward::create(['district_id' => $district_id,'name' => "Chali"]);
            Ward::create(['district_id' => $district_id,'name' => "Chibela"]);
            Ward::create(['district_id' => $district_id,'name' => "Chikola"]);
            Ward::create(['district_id' => $district_id,'name' => "Chipanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Ibihwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Ibugule"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilindi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kigwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Lamaiti"]);
            Ward::create(['district_id' => $district_id,'name' => "Makanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpalanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpamantwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Msisi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtitaa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mundemu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwitikira"]);
            Ward::create(['district_id' => $district_id,'name' => "Nondwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Zanka"]);

         // Chamwino - District
         District::create(['region_id' => 3,'name' => "Chamwino",'capital' => 'Chamwino','area' => '','population' => '330,543']);

         // Chamwino Wards:
         $district_id = 14;
         Ward::create(['district_id' => $district_id,'name' => "Buigiri"]);
         Ward::create(['district_id' => $district_id,'name' => "Chiboli"]);
         Ward::create(['district_id' => $district_id,'name' => "Chilonwa"]);
         Ward::create(['district_id' => $district_id,'name' => "Chinugulu"]);
         Ward::create(['district_id' => $district_id,'name' => "Dabalo"]);
         Ward::create(['district_id' => $district_id,'name' => "Fufu"]);
         Ward::create(['district_id' => $district_id,'name' => "Handali"]);
         Ward::create(['district_id' => $district_id,'name' => "Haneti"]);
         Ward::create(['district_id' => $district_id,'name' => "Huzi"]);
         Ward::create(['district_id' => $district_id,'name' => "Idifu"]);
         Ward::create(['district_id' => $district_id,'name' => "Igandu"]);
         Ward::create(['district_id' => $district_id,'name' => "Ikowa"]);
         Ward::create(['district_id' => $district_id,'name' => "Iringamvumi"]);
         Ward::create(['district_id' => $district_id,'name' => "Itiso"]);
         Ward::create(['district_id' => $district_id,'name' => "Loje"]);
         Ward::create(['district_id' => $district_id,'name' => "Majeleko"]);
         Ward::create(['district_id' => $district_id,'name' => "Makang'wa"]);
         Ward::create(['district_id' => $district_id,'name' => "Manchali"]);
         Ward::create(['district_id' => $district_id,'name' => "Manda"]);
         Ward::create(['district_id' => $district_id,'name' => "Manzase"]);
         Ward::create(['district_id' => $district_id,'name' => "Membe"]);
         Ward::create(['district_id' => $district_id,'name' => "Mlowa Bwawani"]);
         Ward::create(['district_id' => $district_id,'name' => "Mpwayungu"]);
         Ward::create(['district_id' => $district_id,'name' => "Msamalo"]);
         Ward::create(['district_id' => $district_id,'name' => "Msanga"]);
         Ward::create(['district_id' => $district_id,'name' => "Muungano"]);
         Ward::create(['district_id' => $district_id,'name' => "Mvumi Makulu"]);
         Ward::create(['district_id' => $district_id,'name' => "Mvumi Mission"]);
         Ward::create(['district_id' => $district_id,'name' => "Nghambaku"]);
         Ward::create(['district_id' => $district_id,'name' => "Nhinhi"]);
         Ward::create(['district_id' => $district_id,'name' => "Segala"]);
         Ward::create(['district_id' => $district_id,'name' => "Zajilwa"]);
        
        // Chemba - District
        District::create(['region_id' => 3,'name' => "Chemba",'capital' => 'Chemba','area' => '','population' => '235,711']);

            // Chemba Wards:
            $district_id = 15;
            Ward::create(['district_id' => $district_id,'name' => "Chandama"]);
            Ward::create(['district_id' => $district_id,'name' => "Chemba"]);
            Ward::create(['district_id' => $district_id,'name' => "Churuku"]);
            Ward::create(['district_id' => $district_id,'name' => "Dalali"]);
            Ward::create(['district_id' => $district_id,'name' => "Farkwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Goima"]);
            Ward::create(['district_id' => $district_id,'name' => "Gwandi"]);
            Ward::create(['district_id' => $district_id,'name' => "Jangalo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kimaha"]);
            Ward::create(['district_id' => $district_id,'name' => "Kwamtoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Lalta"]);
            Ward::create(['district_id' => $district_id,'name' => "Makorongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpendo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mrijo"]);
            Ward::create(['district_id' => $district_id,'name' => "Msaada"]);
            Ward::create(['district_id' => $district_id,'name' => "Ovada"]);
            Ward::create(['district_id' => $district_id,'name' => "Paranga"]);
            Ward::create(['district_id' => $district_id,'name' => "Sanzawa"]);
            Ward::create(['district_id' => $district_id,'name' => "Songoro"]);

        // Dodoma - District
        District::create(['region_id' => 3,'name' => "Dodoma",'capital' => 'Dodoma','area' => '2,576 Km Square','population' => '410,956']);

            // Dodoma Wards:
            $district_id = 16;
            Ward::create(['district_id' => $district_id,'name' => "Chahwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Chamwino"]);
            Ward::create(['district_id' => $district_id,'name' => "Chang'ombe"]);
            Ward::create(['district_id' => $district_id,'name' => "Chigongwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Chihanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Dodoma Makulu"]);
            Ward::create(['district_id' => $district_id,'name' => "Hazina"]);
            Ward::create(['district_id' => $district_id,'name' => "Hombolo"]);
            Ward::create(['district_id' => $district_id,'name' => "Hombolo Bwawani"]);
            Ward::create(['district_id' => $district_id,'name' => "Ihumwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Ipagala"]);
            Ward::create(['district_id' => $district_id,'name' => "Ipala"]);
            Ward::create(['district_id' => $district_id,'name' => "Iyumbu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kikombo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kikuyu Kaskazini"]);
            Ward::create(['district_id' => $district_id,'name' => "Kikuyu Kusini"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilimani"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiwanja cha ndege"]);
            Ward::create(['district_id' => $district_id,'name' => "Kizota"]);
            Ward::create(['district_id' => $district_id,'name' => "Madukani"]);
            Ward::create(['district_id' => $district_id,'name' => "Majengo"]);
            Ward::create(['district_id' => $district_id,'name' => "Makole"]);
            Ward::create(['district_id' => $district_id,'name' => "Makutupura"]);
            Ward::create(['district_id' => $district_id,'name' => "Matumbulu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbabala"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbalawala"]);
            Ward::create(['district_id' => $district_id,'name' => "Miyuji"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkonze"]);
            Ward::create(['district_id' => $district_id,'name' => "Mnadani"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpunguzi"]);
            Ward::create(['district_id' => $district_id,'name' => "Msalato"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtumba"]);
            Ward::create(['district_id' => $district_id,'name' => "Nala"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngh'ongh'onha"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkuhungu"]);
            Ward::create(['district_id' => $district_id,'name' => "Ntyuka"]);
            Ward::create(['district_id' => $district_id,'name' => "Nzunguni"]);
            Ward::create(['district_id' => $district_id,'name' => "Tambuka"]);
            Ward::create(['district_id' => $district_id,'name' => "Uhuru"]);
            Ward::create(['district_id' => $district_id,'name' => "Viwanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Zuzu"]);
        
        // Kondoa - District
        District::create(['region_id' => 3,'name' => "Kondoa",'capital' => 'Kondoa','area' => '13,210 Km Square','population' => '269,704']);

            // Kondoa Wards:
            $district_id = 17;
            Ward::create(['district_id' => $district_id,'name' => "Bereko"]);
            Ward::create(['district_id' => $district_id,'name' => "Bolisa"]);
            Ward::create(['district_id' => $district_id,'name' => "Bumbuta"]);
            Ward::create(['district_id' => $district_id,'name' => "Busi"]);
            Ward::create(['district_id' => $district_id,'name' => "Changaa"]);
            Ward::create(['district_id' => $district_id,'name' => "Chemchem"]);
            Ward::create(['district_id' => $district_id,'name' => "Haubi"]);
            Ward::create(['district_id' => $district_id,'name' => "Hondo Mairo"]);
            Ward::create(['district_id' => $district_id,'name' => "Itaswi"]);
            Ward::create(['district_id' => $district_id,'name' => "Itololo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kalamba"]);
            Ward::create(['district_id' => $district_id,'name' => "Kikilo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kikore"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilimani"]);
            Ward::create(['district_id' => $district_id,'name' => "Kingale"]);
            Ward::create(['district_id' => $district_id,'name' => "Kinyasi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisese"]);
            Ward::create(['district_id' => $district_id,'name' => "Kolo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kondoa Mjini"]);
            Ward::create(['district_id' => $district_id,'name' => "Kwadelo"]);
            Ward::create(['district_id' => $district_id,'name' => "Masange"]);
            Ward::create(['district_id' => $district_id,'name' => "Mnemia"]);
            Ward::create(['district_id' => $district_id,'name' => "Pahi"]);
            Ward::create(['district_id' => $district_id,'name' => "Salanka"]);
            Ward::create(['district_id' => $district_id,'name' => "Serya"]);
            Ward::create(['district_id' => $district_id,'name' => "Soera"]);
            Ward::create(['district_id' => $district_id,'name' => "Suruke"]);
            Ward::create(['district_id' => $district_id,'name' => "Thawi"]);

        // Kongwa - District
        District::create(['region_id' => 3,'name' => "Kongwa",'capital' => 'Kondoa','area' => '4,041 Km Square','population' => '309,973']);

            // Kongwa Wards:
            $district_id = 18;
            Ward::create(['district_id' => $district_id,'name' => "Chamkoroma"]);
            Ward::create(['district_id' => $district_id,'name' => "Chitego"]);
            Ward::create(['district_id' => $district_id,'name' => "Chiwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Hogoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Iduo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibaigwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kongwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Lenjulu"]);
            Ward::create(['district_id' => $district_id,'name' => "Makawa"]);
            Ward::create(['district_id' => $district_id,'name' => "Matongoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkoka"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlali"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtanana"]);
            Ward::create(['district_id' => $district_id,'name' => "Nghumbi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngomai"]);
            Ward::create(['district_id' => $district_id,'name' => "Njoge"]);
            Ward::create(['district_id' => $district_id,'name' => "Pandambili"]);
            Ward::create(['district_id' => $district_id,'name' => "Sagara"]);
            Ward::create(['district_id' => $district_id,'name' => "Sejeli"]);
            Ward::create(['district_id' => $district_id,'name' => "Songambele"]);
            Ward::create(['district_id' => $district_id,'name' => "Ugogoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Zoissa"]);

        // Mpwapwa - District
        District::create(['region_id' => 3,'name' => "Mpwapwa",'capital' => 'Mpwapwa','area' => '7,479 Km Square','population' => '305,056']);

            // Kongwa Wards:
            $district_id = 19;
            Ward::create(['district_id' => $district_id,'name' => "Berege"]);
            Ward::create(['district_id' => $district_id,'name' => "Chipogoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Chitemo"]);
            Ward::create(['district_id' => $district_id,'name' => "Chunyu"]);
            Ward::create(['district_id' => $district_id,'name' => "Galigali"]);
            Ward::create(['district_id' => $district_id,'name' => "Godegode"]);
            Ward::create(['district_id' => $district_id,'name' => "Gulwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ipera"]);
            Ward::create(['district_id' => $district_id,'name' => "Iwondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibakwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Kimagai"]);
            Ward::create(['district_id' => $district_id,'name' => "Kingiti"]);
            Ward::create(['district_id' => $district_id,'name' => "Lufu"]);
            Ward::create(['district_id' => $district_id,'name' => "Luhundwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Lumuma"]);
            Ward::create(['district_id' => $district_id,'name' => "Lupeta"]);
            Ward::create(['district_id' => $district_id,'name' => "Malolo"]);
            Ward::create(['district_id' => $district_id,'name' => "Masasa"]);
            Ward::create(['district_id' => $district_id,'name' => "Matomondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mazae"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbuga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mima"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlunduzi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpwapwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtera"]);
            Ward::create(['district_id' => $district_id,'name' => "Nghambi"]);
            Ward::create(['district_id' => $district_id,'name' => "Pwaga"]);
            Ward::create(['district_id' => $district_id,'name' => "Rudi"]);
            Ward::create(['district_id' => $district_id,'name' => "Vingh'awe"]);
            Ward::create(['district_id' => $district_id,'name' => "Wotta"]);
        
        // Geita Region
        Region::create([
            'name' => "Geita",
            'capital' => "Geita",
            'districts' => 5,
            'keycode' => "25",
            'area' => "20,054 Km Square",
            'population' => '1,739,530',
            'postcode' => '30xxx',
            'zone' => 'Lake'
        ]);

        // Geita Districts
        // Bukombe - District
        District::create(['region_id' => 4,'name' => "Bukombe",'capital' => 'Bukombe','area' => '','population' => '224,542']);

            // Bukombe Wards:
            $district_id = 20;
            Ward::create(['district_id' => $district_id,'name' => "Bugelenga"]);
            Ward::create(['district_id' => $district_id,'name' => "Bukombe"]);
            Ward::create(['district_id' => $district_id,'name' => "Busonzo"]);
            Ward::create(['district_id' => $district_id,'name' => "Butinzya"]);
            Ward::create(['district_id' => $district_id,'name' => "Igulwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Iyogelo"]);
            Ward::create(['district_id' => $district_id,'name' => "Lyambamgongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Namonge"]);
            Ward::create(['district_id' => $district_id,'name' => "Ng'anzo"]);
            Ward::create(['district_id' => $district_id,'name' => "Runzewe Mashariki"]);
            Ward::create(['district_id' => $district_id,'name' => "Runzewe Magharibi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ushirombo"]);
            Ward::create(['district_id' => $district_id,'name' => "Uyovu"]);
        
        // Chato - District
        District::create(['region_id' => 4,'name' => "Chato",'capital' => 'Chato','area' => '','population' => '365,127']);

            // Chato Wards:
            $district_id = 21;
            Ward::create(['district_id' => $district_id,'name' => "Bukombe"]);
            Ward::create(['district_id' => $district_id,'name' => "Buseresere"]);
            Ward::create(['district_id' => $district_id,'name' => "Butengorumasa"]);
            Ward::create(['district_id' => $district_id,'name' => "Buziku"]);
            Ward::create(['district_id' => $district_id,'name' => "Bwanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Bwera"]);
            Ward::create(['district_id' => $district_id,'name' => "Bwina"]);
            Ward::create(['district_id' => $district_id,'name' => "Bwongera"]);
            Ward::create(['district_id' => $district_id,'name' => "Chato"]);
            Ward::create(['district_id' => $district_id,'name' => "Minkoto"]);
            Ward::create(['district_id' => $district_id,'name' => "Ichwankima"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilemela"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilyamchele"]);
            Ward::create(['district_id' => $district_id,'name' => "Iparamasa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kachwamba"]);
            Ward::create(['district_id' => $district_id,'name' => "Kasenga"]);
            Ward::create(['district_id' => $district_id,'name' => "Katende"]);
            Ward::create(['district_id' => $district_id,'name' => "Kigongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Makurugusi"]);
            Ward::create(['district_id' => $district_id,'name' => "Muganza"]);
            Ward::create(['district_id' => $district_id,'name' => "Muungano"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamirembe"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyarutembo"]);

        // Geita - District
        District::create(['region_id' => 4,'name' => "Geita",'capital' => 'Geita','area' => '','population' => '807,619']);

            // Geita Wards:
            $district_id = 22;
            Ward::create(['district_id' => $district_id,'name' => "Bugalama"]);
            Ward::create(['district_id' => $district_id,'name' => "Bugulula"]);
            Ward::create(['district_id' => $district_id,'name' => "Bujula"]);
            Ward::create(['district_id' => $district_id,'name' => "Bukoli"]);
            Ward::create(['district_id' => $district_id,'name' => "Bukondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Bulela"]);
            Ward::create(['district_id' => $district_id,'name' => "Bung'wangoko"]);
            Ward::create(['district_id' => $district_id,'name' => "Busanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Butobela"]);
            Ward::create(['district_id' => $district_id,'name' => "Chigunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Ihanamilo"]);
            Ward::create(['district_id' => $district_id,'name' => "Isulwabutundwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Kagu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kakubilo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kalangalala"]);
            Ward::create(['district_id' => $district_id,'name' => "Kamena"]);
            Ward::create(['district_id' => $district_id,'name' => "Kamhanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kasamwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kaseme"]);
            Ward::create(['district_id' => $district_id,'name' => "Katoma"]);
            Ward::create(['district_id' => $district_id,'name' => "Katoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Lubanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Lwamgasa"]);
            Ward::create(['district_id' => $district_id,'name' => "Lwezera"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtakuja"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkome"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyachiluluma"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakagomba"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakamwaga"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamalimbe"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamigota"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyanguku"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyarugusu"]);
            Ward::create(['district_id' => $district_id,'name' => "Nzera"]);
            Ward::create(['district_id' => $district_id,'name' => "Senga"]);

        // Mbogwe - District
        District::create(['region_id' => 4,'name' => "Mbogwe",'capital' => 'Mbogwe','area' => '','population' => '193,922']);

            // Mbogwe Wards:
            $district_id = 23;
            Ward::create(['district_id' => $district_id,'name' => "Bukandwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikobe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikunguigazi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilolangulu"]);
            Ward::create(['district_id' => $district_id,'name' => "Iponya"]);
            Ward::create(['district_id' => $district_id,'name' => "Isebya"]);
            Ward::create(['district_id' => $district_id,'name' => "Lugunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Lulembela"]);
            Ward::create(['district_id' => $district_id,'name' => "Masumbwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbogwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mgemo"]);
            Ward::create(['district_id' => $district_id,'name' => "Nanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Ng'homolwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakafulu"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyasato"]);
            Ward::create(['district_id' => $district_id,'name' => "Ushirika"]);
        
        // Nyang'hwale - District
        District::create(['region_id' => 4,'name' => "Nyang'hwale",'capital' => "Nyang'hwale",'area' => '','population' => '193,922']);

            // Nyang'hwale Wards:
            $district_id = 24;
            Ward::create(['district_id' => $district_id,'name' => "Bukwimba"]);
            Ward::create(['district_id' => $district_id,'name' => "Busolwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Izunya"]);
            Ward::create(['district_id' => $district_id,'name' => "Kafita"]);
            Ward::create(['district_id' => $district_id,'name' => "Kakura"]);
            Ward::create(['district_id' => $district_id,'name' => "Kharumwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwingiro"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyabulanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyang'hwale"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyijundu"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyugwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Shabaka"]);
        
        // Iringa Region
        Region::create([
            'name' => "Iringa",
            'capital' => "Iringa",
            'districts' => 5,
            'keycode' => "11",
            'area' => "35,503 Km Square",
            'population' => '941,238',
            'postcode' => '51xxx',
            'zone' => 'Lake'
        ]);

        // Iringa - District
        District::create(['region_id' => 5,'name' => "Iringa Urban",'capital' => "Iringa",'area' => '','population' => '254,032']);

            // Iringa Wards:
            $district_id = 25;
            Ward::create(['district_id' => $district_id,'name' => "Gangilonga"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilala"]);
            Ward::create(['district_id' => $district_id,'name' => "Isakalilo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kihesa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitanzini"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitwiru"]);
            Ward::create(['district_id' => $district_id,'name' => "Kwakilosa"]);
            Ward::create(['district_id' => $district_id,'name' => "Makongoroni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mivinjeni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkwawa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlandege"]);
            Ward::create(['district_id' => $district_id,'name' => "Mshindo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtwivila"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwangata"]);
            Ward::create(['district_id' => $district_id,'name' => "Nduli"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruaha"]);
        
        // Kilolo - District
        District::create(['region_id' => 5,'name' => "Kilolo",'capital' => "Kilolo",'area' => '','population' => '218,130']);

            // Kilolo Wards:
            $district_id = 26;
            Ward::create(['district_id' => $district_id,'name' => "Bomalang'ombe"]);
            Ward::create(['district_id' => $district_id,'name' => "Dabaga"]);
            Ward::create(['district_id' => $district_id,'name' => "Idete"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilula"]);
            Ward::create(['district_id' => $district_id,'name' => "Image"]);
            Ward::create(['district_id' => $district_id,'name' => "Irole"]);
            Ward::create(['district_id' => $district_id,'name' => "Mahenge"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtitu"]);
            Ward::create(['district_id' => $district_id,'name' => "Udekwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Uhambingeto"]);
            Ward::create(['district_id' => $district_id,'name' => "Ukumbi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ukwega"]);
            Ward::create(['district_id' => $district_id,'name' => "Ibumu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlafu"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyalumbu"]);
            Ward::create(['district_id' => $district_id,'name' => "Ng'ang'ange"]);
            Ward::create(['district_id' => $district_id,'name' => "Masisiwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruaha Mbuyuni"]);
            Ward::create(['district_id' => $district_id,'name' => "Kising'a"]);
            Ward::create(['district_id' => $district_id,'name' => "Kimala"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyanzwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Ihimbo"]);
            Ward::create(['district_id' => $district_id,'name' => "Ng'uruhe"]);
            Ward::create(['district_id' => $district_id,'name' => "Lugalo"]);

        // Mufindi - District
        District::create(['region_id' => 5,'name' => "Mufindi",'capital' => "Mufindi",'area' => '','population' => '265,829']);

            // Mufindi Wards:
            $district_id = 27;
            Ward::create(['district_id' => $district_id,'name' => "Bumilayinga"]);
            Ward::create(['district_id' => $district_id,'name' => "Ifunda"]);
            Ward::create(['district_id' => $district_id,'name' => "Ifwagi"]);
            Ward::create(['district_id' => $district_id,'name' => "Igombavanu"]);
            Ward::create(['district_id' => $district_id,'name' => "Igowole"]);
            Ward::create(['district_id' => $district_id,'name' => "Ihalimba"]);
            Ward::create(['district_id' => $district_id,'name' => "Ihanu"]);
            Ward::create(['district_id' => $district_id,'name' => "Ihowanza"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikweha"]);
            Ward::create(['district_id' => $district_id,'name' => "Isalavanu"]);
            Ward::create(['district_id' => $district_id,'name' => "Itandula"]);
            Ward::create(['district_id' => $district_id,'name' => "Kasanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibengu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiyowela"]);
            Ward::create(['district_id' => $district_id,'name' => "Luhunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mafinga"]);
            Ward::create(['district_id' => $district_id,'name' => "Makungu"]);
            Ward::create(['district_id' => $district_id,'name' => "Malangali"]);
            Ward::create(['district_id' => $district_id,'name' => "Mapanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbalamaziwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mdabulo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mninga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpanga TAZARA"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtambula"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtwango"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyololo"]);
            Ward::create(['district_id' => $district_id,'name' => "Rungemba"]);
            Ward::create(['district_id' => $district_id,'name' => "Sadani"]);

        // Iringa Rural - District
        District::create(['region_id' => 5,'name' => "iringa Rural",'capital' => "Iringa",'area' => '','population' => '151,345']);

            // Iringa  Rural Wards:
            $district_id = 27;
            Ward::create(['district_id' => $district_id,'name' => "Idodi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ifunda"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilolompya"]);
            Ward::create(['district_id' => $district_id,'name' => "Itunundu"]);
            Ward::create(['district_id' => $district_id,'name' => "Izazi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kalenga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kihorogota"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiwere"]);
            Ward::create(['district_id' => $district_id,'name' => "Lumuli"]);
            Ward::create(['district_id' => $district_id,'name' => "Maboga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mahuninga"]);
            Ward::create(['district_id' => $district_id,'name' => "Magulilwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Malengamakali"]);
            Ward::create(['district_id' => $district_id,'name' => "Mgama"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlowa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mseke"]);
            Ward::create(['district_id' => $district_id,'name' => "Nduli"]);
            Ward::create(['district_id' => $district_id,'name' => "Nzihi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ulanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Wasa"]);
        
        // Kagera Region
        Region::create([
            'name' => "Kagera",
            'capital' => "Bukoba",
            'districts' => 8,
            'keycode' => "18",
            'area' => "25,265 Km Square",
            'population' => '2,458,023',
            'postcode' => '35xxx',
            'zone' => 'Lake'
        ]);

        // Biharamulo - District
        District::create(['region_id' => 6,'name' => "Biharamulo",'capital' => "Biharamulo",'area' => '5,627 Km Square','population' => '323,486']);

            // Biharamulo Wards:
            $district_id = 28;
            Ward::create(['district_id' => $district_id,'name' => "Biharamulo Urban"]);
            Ward::create(['district_id' => $district_id,'name' => "Bisibo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kabindi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kalenge"]);
            Ward::create(['district_id' => $district_id,'name' => "Kaniha"]);
            Ward::create(['district_id' => $district_id,'name' => "Lusahunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Nemba"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyabusozi"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamahanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamigogo"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyantakara"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyarubungo"]);
            Ward::create(['district_id' => $district_id,'name' => "Runazi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruziba"]);
        
        // Bukoba Rural - District
        District::create(['region_id' => 6,'name' => "Bukoba Rural",'capital' => "Bukoba",'area' => '','population' => '289,697']);

            // Bukoba Rural Wards:
            $district_id = 29;
            Ward::create(['district_id' => $district_id,'name' => "Buhendangabo"]);
            Ward::create(['district_id' => $district_id,'name' => "Bujugo"]);
            Ward::create(['district_id' => $district_id,'name' => "Butelankuzi"]);
            Ward::create(['district_id' => $district_id,'name' => "Butulage"]);
            Ward::create(['district_id' => $district_id,'name' => "Ibwera"]);
            Ward::create(['district_id' => $district_id,'name' => "Izimbya"]);
            Ward::create(['district_id' => $district_id,'name' => "Kaagya"]);
            Ward::create(['district_id' => $district_id,'name' => "Kaibanja"]);
            Ward::create(['district_id' => $district_id,'name' => "Kanyangereko"]);
            Ward::create(['district_id' => $district_id,'name' => "Karabagaine"]);
            Ward::create(['district_id' => $district_id,'name' => "Kasharu"]);
            Ward::create(['district_id' => $district_id,'name' => "Katerero"]);
            Ward::create(['district_id' => $district_id,'name' => "Katoma"]);
            Ward::create(['district_id' => $district_id,'name' => "Katoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Kemondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibirizi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kikomero"]);
            Ward::create(['district_id' => $district_id,'name' => "Kishanje"]);
            Ward::create(['district_id' => $district_id,'name' => "Kishogo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kyamulaile"]);
            Ward::create(['district_id' => $district_id,'name' => "Maruku"]);
            Ward::create(['district_id' => $district_id,'name' => "Mikoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mugajwale"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakato"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakibimbili"]);
            Ward::create(['district_id' => $district_id,'name' => "Rubafu"]);
            Ward::create(['district_id' => $district_id,'name' => "Rubale"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruhunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Rukoma"]);
        
        // Bukoba Urban - District
        District::create(['region_id' => 6,'name' => "Bukoba Urban",'capital' => "Bukoba",'area' => '','population' => '128,796']);

            // Bukoba Urban Wards:
            $district_id = 30;
            Ward::create(['district_id' => $district_id,'name' => "Bukoba"]);
            Ward::create(['district_id' => $district_id,'name' => "Bilele"]);
            Ward::create(['district_id' => $district_id,'name' => "Buhemba"]);
            Ward::create(['district_id' => $district_id,'name' => "Hamugembe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ijuganyondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kagondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kahororo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kashai"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibeta"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitendaguro"]);
            Ward::create(['district_id' => $district_id,'name' => "Miembeni"]);
            Ward::create(['district_id' => $district_id,'name' => "Nshambya"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Rwamishenye"]);

        // Karagwe - District
        District::create(['region_id' => 6,'name' => "Karagwe",'capital' => "Karagwe",'area' => '7,716 Km Square','population' => '332,020']);

            // Karagwe Wards:
            $district_id = 31;
            Ward::create(['district_id' => $district_id,'name' => "Bugene"]);
            Ward::create(['district_id' => $district_id,'name' => "Bugomora"]);
            Ward::create(['district_id' => $district_id,'name' => "Bweranyange"]);
            Ward::create(['district_id' => $district_id,'name' => "Igurwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Ihanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Ihembe"]);
            Ward::create(['district_id' => $district_id,'name' => "Isingiro"]);
            Ward::create(['district_id' => $district_id,'name' => "Kaisho"]);
            Ward::create(['district_id' => $district_id,'name' => "Kamuli"]);
            Ward::create(['district_id' => $district_id,'name' => "Kanoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Kayanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibingo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kihanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kimuli"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiruruma"]);
            Ward::create(['district_id' => $district_id,'name' => "Kituntu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kyerwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mabira"]);
            Ward::create(['district_id' => $district_id,'name' => "Murongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Ndama"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkwenda"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyabiyonza"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyaishozi"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakahanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakakika"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakabanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Achapa"]);
            Ward::create(['district_id' => $district_id,'name' => "Chabuhora"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakasimbi"]);
            Ward::create(['district_id' => $district_id,'name' => "Rugu"]);
            Ward::create(['district_id' => $district_id,'name' => "Rwabwere"]);

        // Kyerwa - District
        District::create(['region_id' => 6,'name' => "Kyerwa",'capital' => "Kyerwa",'area' => '','population' => '321,026']);

            // Kyerwa Wards:
            $district_id = 32;
            Ward::create(['district_id' => $district_id,'name' => "Bugomora"]);
            Ward::create(['district_id' => $district_id,'name' => "Businde"]);
            Ward::create(['district_id' => $district_id,'name' => "Isingiro"]);
            Ward::create(['district_id' => $district_id,'name' => "Kaisho"]);
            Ward::create(['district_id' => $district_id,'name' => "Kamuli"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibale"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibingo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kikukuru"]);
            Ward::create(['district_id' => $district_id,'name' => "Kimuli"]);
            Ward::create(['district_id' => $district_id,'name' => "Kyerwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mabira"]);
            Ward::create(['district_id' => $district_id,'name' => "Murongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkwenda"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakatuntu"]);
            Ward::create(['district_id' => $district_id,'name' => "Rukurajio"]);
            Ward::create(['district_id' => $district_id,'name' => "Rutunguru"]);
            Ward::create(['district_id' => $district_id,'name' => "Rwabwere"]);
            Ward::create(['district_id' => $district_id,'name' => "Songambele"]);

        // Missenyi - District
        District::create(['region_id' => 6,'name' => "Missenyi",'capital' => "Missenyi",'area' => '2,709','population' => '202,632']);

            // Missenyi Wards:
            $district_id = 33;
            Ward::create(['district_id' => $district_id,'name' => "Bugandika"]);
            Ward::create(['district_id' => $district_id,'name' => "Bugorora"]);
            Ward::create(['district_id' => $district_id,'name' => "Buyango"]);
            Ward::create(['district_id' => $district_id,'name' => "Bwanjai"]);
            Ward::create(['district_id' => $district_id,'name' => "Gera"]);
            Ward::create(['district_id' => $district_id,'name' => "Ishozi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ishunju"]);
            Ward::create(['district_id' => $district_id,'name' => "Kakunyu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kanyigo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kashenye"]);
            Ward::create(['district_id' => $district_id,'name' => "Kassambya"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilimilil"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitobo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kyaka"]);
            Ward::create(['district_id' => $district_id,'name' => "Mabale"]);
            Ward::create(['district_id' => $district_id,'name' => "Minziro"]);
            Ward::create(['district_id' => $district_id,'name' => "Mushasha"]);
            Ward::create(['district_id' => $district_id,'name' => "Mutukula"]);
            Ward::create(['district_id' => $district_id,'name' => "Nsunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruzinga"]);

        // Muleba - District
        District::create(['region_id' => 6,'name' => "Muleba",'capital' => "Muleba",'area' => '10,739','population' => '540,310']);

            // Muleba Wards:
            $district_id = 34;
            Ward::create(['district_id' => $district_id,'name' => "Bisheke"]);
            Ward::create(['district_id' => $district_id,'name' => "Biirabo"]);
            Ward::create(['district_id' => $district_id,'name' => "Buganguzi"]);
            Ward::create(['district_id' => $district_id,'name' => "Bulyakashaju"]);
            Ward::create(['district_id' => $district_id,'name' => "Bumbile"]);
            Ward::create(['district_id' => $district_id,'name' => "Burungura"]);
            Ward::create(['district_id' => $district_id,'name' => "Goziba"]);
            Ward::create(['district_id' => $district_id,'name' => "Ibuga"]);
            Ward::create(['district_id' => $district_id,'name' => "Ijumbi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Izigo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kabirizi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kamachumu"]);
            Ward::create(['district_id' => $district_id,'name' => "Karambi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kasharunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kashasha"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kyebitembe"]);
            Ward::create(['district_id' => $district_id,'name' => "Magata Karutanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mazinga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mubunda"]);
            Ward::create(['district_id' => $district_id,'name' => "Muhutwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Muleba"]);
            Ward::create(['district_id' => $district_id,'name' => "Muyondwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngenge"]);
            Ward::create(['district_id' => $district_id,'name' => "Nshamba"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruhanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Rushwa"]);
        
        // Ngara - District
        District::create(['region_id' => 6,'name' => "Ngara",'capital' => "Muleba",'area' => '3,744','population' => '320,056']);

            // Ngara Wards:
            $district_id = 35;
            Ward::create(['district_id' => $district_id,'name' => "Bukiriro"]);
            Ward::create(['district_id' => $district_id,'name' => "Bugarama"]);
            Ward::create(['district_id' => $district_id,'name' => "Kabanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kanazi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibimba"]);
            Ward::create(['district_id' => $district_id,'name' => "Kirushya"]);
            Ward::create(['district_id' => $district_id,'name' => "Keza"]);
            Ward::create(['district_id' => $district_id,'name' => "Mabawe"]);
            Ward::create(['district_id' => $district_id,'name' => "Muganza"]);
            Ward::create(['district_id' => $district_id,'name' => "Mugoma"]);
            Ward::create(['district_id' => $district_id,'name' => "Murusagamba"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngara Mjini"]);
            Ward::create(['district_id' => $district_id,'name' => "Ntobeye"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakisasa"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamiyaga"]);
            Ward::create(['district_id' => $district_id,'name' => "Rulenge"]);
            Ward::create(['district_id' => $district_id,'name' => "Rusumo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbuba"]);

        // Katavi Region
        Region::create([
            'name' => "Katavi",
            'capital' => "Mpanda",
            'districts' => 3,
            'keycode' => "23",
            'area' => "45,843 Km Square",
            'population' => '564,604',
            'postcode' => '50xxx',
            'zone' => 'Western'
        ]);

        // Nsimbo - District
        District::create(['region_id' => 7,'name' => "Nsimbo",'capital' => "Nsimbo",'area' => '','population' => '282,568']);

            // Nsimbo Wards:
            // $district_id = 0;
            // Ward::create(['district_id' => $district_id,'name' => ""]);

        // Mpanda - District
        District::create(['region_id' => 7,'name' => "Mpanda",'capital' => "Mpanda",'area' => '','population' => '282,036']);

            // Mpanda Wards:
            $district_id = 36;
            Ward::create(['district_id' => $district_id,'name' => "Ikola"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilembo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kabungu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kakese"]);
            Ward::create(['district_id' => $district_id,'name' => "Kapalamsenga"]);
            Ward::create(['district_id' => $district_id,'name' => "Karema"]);
            Ward::create(['district_id' => $district_id,'name' => "Kashaulili"]);
            Ward::create(['district_id' => $district_id,'name' => "Katuma"]);
            Ward::create(['district_id' => $district_id,'name' => "Kawajanse"]);
            Ward::create(['district_id' => $district_id,'name' => "Makanyagio"]);
            Ward::create(['district_id' => $district_id,'name' => "Mishamo"]);
            Ward::create(['district_id' => $district_id,'name' => "Misunkumilo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpanda Hotel"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpanda Ndogo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwese"]);
            Ward::create(['district_id' => $district_id,'name' => "Nsemulwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Shanwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Sibwesa"]);
        
        // Mlele - District
        District::create(['region_id' => 7,'name' => "Mlele",'capital' => "Mlele",'area' => '','population' => '']);

            // Mlele Wards:
            // $district_id = 0;
            // Ward::create(['district_id' => $district_id,'name' => ""]);

        // Kigoma Region
        Region::create([
            'name' => "Kigoma",
            'capital' => "Kigoma",
            'districts' => 8,
            'keycode' => "16",
            'area' => "37,040 Km Square",
            'population' => '2,127,930',
            'postcode' => '47xxx',
            'zone' => 'Western'
        ]);

        // Buhingwe - District
        District::create(['region_id' => 8,'name' => "Buhingwe",'capital' => "Buhingwe",'area' => '','population' => '254,342']);

            // Buhingwe Wards:
            $district_id = 37;
            Ward::create(['district_id' => $district_id,'name' => "Biharu"]);
            Ward::create(['district_id' => $district_id,'name' => "Buhigwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Janda"]);
            Ward::create(['district_id' => $district_id,'name' => "Kajana"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibande"]);
            Ward::create(['district_id' => $district_id,'name' => "Kinazi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilelema"]);
            Ward::create(['district_id' => $district_id,'name' => "Mugera"]);
            Ward::create(['district_id' => $district_id,'name' => "Muhinda"]);
            Ward::create(['district_id' => $district_id,'name' => "Munanila"]);
            Ward::create(['district_id' => $district_id,'name' => "Munyegera"]);
            Ward::create(['district_id' => $district_id,'name' => "Munzeze"]);
            Ward::create(['district_id' => $district_id,'name' => "Muyama"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwayaya"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamugali"]);
            Ward::create(['district_id' => $district_id,'name' => "Rusaba"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibwigwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Bukuba"]);
            Ward::create(['district_id' => $district_id,'name' => "Mubanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkatanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mugera"]);

        // Kakonko - District
        District::create(['region_id' => 8,'name' => "Kakonko",'capital' => "Kakonko",'area' => '','population' => '167,555']);

            // Kakonko Wards:
            $district_id = 38;
            Ward::create(['district_id' => $district_id,'name' => "Gwarama"]);
            Ward::create(['district_id' => $district_id,'name' => "Gwanumpu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kakonko"]);
            Ward::create(['district_id' => $district_id,'name' => "Kasanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Kasuga"]);
            Ward::create(['district_id' => $district_id,'name' => "Katanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiziguzigu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mugunzu"]);
            Ward::create(['district_id' => $district_id,'name' => "Muhange"]);
            Ward::create(['district_id' => $district_id,'name' => "Kanyonza"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyabibuye"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamtukuza"]);
            Ward::create(['district_id' => $district_id,'name' => "Rugenge"]);
        
        // Kasulu Rural - District
        District::create(['region_id' => 8,'name' => "Kasulu Rural",'capital' => "Kasulu",'area' => '','population' => '425,794']);

            // Kasulu Rural Wards:
            $district_id = 39;
            Ward::create(['district_id' => $district_id,'name' => "Buhigwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Buhoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Heru Ushingo"]);
            Ward::create(['district_id' => $district_id,'name' => "Janda"]);
            Ward::create(['district_id' => $district_id,'name' => "Kagera Nkanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Kajana"]);
            Ward::create(['district_id' => $district_id,'name' => "Kasulu Mjini"]);
            Ward::create(['district_id' => $district_id,'name' => "Kigondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilelema"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitagata"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kwaga"]);
            Ward::create(['district_id' => $district_id,'name' => "Msambara"]);
            Ward::create(['district_id' => $district_id,'name' => "Muhinda"]);
            Ward::create(['district_id' => $district_id,'name' => "Muhunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Munanila"]);
            Ward::create(['district_id' => $district_id,'name' => "Munyegera"]);
            Ward::create(['district_id' => $district_id,'name' => "Murufiti"]);
            Ward::create(['district_id' => $district_id,'name' => "Muyama"]);
            Ward::create(['district_id' => $district_id,'name' => "Muzenze"]);
            Ward::create(['district_id' => $district_id,'name' => "Muzye"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakitonto"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamidaho"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamnyusi"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamugali"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruhita"]);
            Ward::create(['district_id' => $district_id,'name' => "Rungwe Mpya"]);
            Ward::create(['district_id' => $district_id,'name' => "Rusaba"]);
            Ward::create(['district_id' => $district_id,'name' => "Rusesa"]);
            Ward::create(['district_id' => $district_id,'name' => "Titye"]);
        
        // Kasulu Urban - District
        District::create(['region_id' => 8,'name' => "Kasulu Urban",'capital' => "Kasulu",'area' => '','population' => '208,244']);

            // Kasulu Urban Wards:
            // $district_id = 0;
            // Ward::create(['district_id' => $district_id,'name' => ""]);
        
        // Kibondo - District
        District::create(['region_id' => 8,'name' => "Kibondo",'capital' => "Kibondo",'area' => '','population' => '261,331']);

            // Kibondo Wards:
            $district_id = 40;
            Ward::create(['district_id' => $district_id,'name' => "Bunyambo"]);
            Ward::create(['district_id' => $district_id,'name' => "Busagara"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitale Ward"]);
            Ward::create(['district_id' => $district_id,'name' => "Itaba"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibondo Mjini"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitahana"]);
            Ward::create(['district_id' => $district_id,'name' => "Kagezi"]);
            Ward::create(['district_id' => $district_id,'name' => "Busunzu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kizazi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kumsenga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mabamba"]);
            Ward::create(['district_id' => $district_id,'name' => "Kumwambu"]);
            Ward::create(['district_id' => $district_id,'name' => "Misezero"]);
            Ward::create(['district_id' => $district_id,'name' => "Bukabuye"]);
            Ward::create(['district_id' => $district_id,'name' => "Murungu"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyaruyoba"]);
            Ward::create(['district_id' => $district_id,'name' => "Rusohoko"]);
            Ward::create(['district_id' => $district_id,'name' => "Turana ward"]);
            Ward::create(['district_id' => $district_id,'name' => "Rugongwe"]);
        
        // Kigoma Rural - District
        District::create(['region_id' => 8,'name' => "Kigoma Rural",'capital' => "Kigoma",'area' => '','population' => '211,566']);

        // Kibondo Rural Wards:
        // $district_id = 0;
        // Ward::create(['district_id' => $district_id,'name' => ""]);

        // Kigoma Urban - District
        District::create(['region_id' => 8,'name' => "Kigoma Urban",'capital' => "Kigoma",'area' => '','population' => '211,566']);

        // Kigoma  Wards:
        // $district_id = 0;
        // Ward::create(['district_id' => $district_id,'name' => ""]);

        // Uvinza - District
        District::create(['region_id' => 8,'name' => "Uvinza",'capital' => "Uvinza",'area' => '','population' => '383,640']);

        // Uvinza Wards:
        // $district_id = 0;
        // Ward::create(['district_id' => $district_id,'name' => ""]);

        // Kilimanjaro Region
        Region::create([
            'name' => "Kilimanjaro",
            'capital' => "Moshi",
            'districts' => 7,
            'keycode' => "03",
            'area' => "13,250 Km Square",
            'population' => '1,640,087',
            'postcode' => '25xxx',
            'zone' => 'Northen'
        ]);

        // Hai - District
        District::create(['region_id' => 9,'name' => "Hai",'capital' => "Hai",'area' => '','population' => '210,533']);

            // Hai Wards:
            $district_id = 41;
            Ward::create(['district_id' => $district_id,'name' => "Hai Mjini"]);
            Ward::create(['district_id' => $district_id,'name' => "Machame Kaskazini"]);
            Ward::create(['district_id' => $district_id,'name' => "Machame Kusini"]);
            Ward::create(['district_id' => $district_id,'name' => "Machame Magharibi"]);
            Ward::create(['district_id' => $district_id,'name' => "Machame Mashariki"]);
            Ward::create(['district_id' => $district_id,'name' => "Machame Uroki"]);
            Ward::create(['district_id' => $district_id,'name' => "Masama Kusini"]);
            Ward::create(['district_id' => $district_id,'name' => "Masama Magharibi"]);
            Ward::create(['district_id' => $district_id,'name' => "Masama Mashariki"]);
            Ward::create(['district_id' => $district_id,'name' => "Masama Rundugai"]);
        
        // Moshi Rural - District
        District::create(['region_id' => 9,'name' => "Moshi Rural",'capital' => "Moshi",'area' => '','population' => '466,737']);

            // Moshi Rural Wards:
            $district_id = 42;
            Ward::create(['district_id' => $district_id,'name' => "Arusha Chini"]);
            Ward::create(['district_id' => $district_id,'name' => "Kahe"]);
            Ward::create(['district_id' => $district_id,'name' => "Kahe Mashariki"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibosho Kati"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibosho Magharibi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibosho Mashariki"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilema Kaskazini"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilema Kati"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilema Kusini"]);
            Ward::create(['district_id' => $district_id,'name' => "Kimochi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kindi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kirima"]);
            Ward::create(['district_id' => $district_id,'name' => "Kirua Vunjo Kusini"]);
            Ward::create(['district_id' => $district_id,'name' => "Kirua Vunjo Magharibi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kirua Vunjo Mashariki"]);
            Ward::create(['district_id' => $district_id,'name' => "Mamba Kusini"]);
            Ward::create(['district_id' => $district_id,'name' => "Marangu Magharibi"]);
            Ward::create(['district_id' => $district_id,'name' => "Marangu Mashariki"]);
            Ward::create(['district_id' => $district_id,'name' => "Mabogini"]);
            Ward::create(['district_id' => $district_id,'name' => "Makuyuni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbokomu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwika Kaskazini"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwika Kusini"]);
            Ward::create(['district_id' => $district_id,'name' => "Okoani"]);
            Ward::create(['district_id' => $district_id,'name' => "Old Moshi Magharibi"]);
            Ward::create(['district_id' => $district_id,'name' => "Old Moshi Mashariki"]);
            Ward::create(['district_id' => $district_id,'name' => "Uru Mashariki"]);
            Ward::create(['district_id' => $district_id,'name' => "Uru Shimbwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Uru Kusini"]);
            Ward::create(['district_id' => $district_id,'name' => "uru Kaskazini"]);
        
        // Moshi Urban - District
        District::create(['region_id' => 9,'name' => "Moshi Urban",'capital' => "Moshi",'area' => '','population' => '184,292']);

            // Moshi Urban Wards:
            $district_id = 43;
            Ward::create(['district_id' => $district_id,'name' => "Bondeni"]);
            Ward::create(['district_id' => $district_id,'name' => "Kaloleni"]);
            Ward::create(['district_id' => $district_id,'name' => "Karanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiboriloni"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilimanjaro"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiusa"]);
            Ward::create(['district_id' => $district_id,'name' => "Korongoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Longuo"]);
            Ward::create(['district_id' => $district_id,'name' => "Majengo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mawenzi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mji Mpya"]);
            Ward::create(['district_id' => $district_id,'name' => "Msaranga"]);
            Ward::create(['district_id' => $district_id,'name' => "Njoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Rau"]);
            Ward::create(['district_id' => $district_id,'name' => "Pasua"]);
            Ward::create(['district_id' => $district_id,'name' => "Ng'ambo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mfumuni"]);
            Ward::create(['district_id' => $district_id,'name' => "Miembeni"]);
            Ward::create(['district_id' => $district_id,'name' => "Soweto"]);
            Ward::create(['district_id' => $district_id,'name' => "Boma Mbuzi"]);
            Ward::create(['district_id' => $district_id,'name' => "Shirimatunda"]);
        
        // Mwanga - District
        District::create(['region_id' => 9,'name' => "Mwanga",'capital' => "Mwanga",'area' => '','population' => '131,442']);

            // Mwanga Wards:
            $district_id = 44;
            Ward::create(['district_id' => $district_id,'name' => "Chomvu"]);
            Ward::create(['district_id' => $district_id,'name' => "Jipe"]);
            Ward::create(['district_id' => $district_id,'name' => "Kifula"]);
            Ward::create(['district_id' => $district_id,'name' => "Kighare"]);
            Ward::create(['district_id' => $district_id,'name' => "Kileo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilomeni"]);
            Ward::create(['district_id' => $district_id,'name' => "Kirongwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Kirya"]);
            Ward::create(['district_id' => $district_id,'name' => "Kwakoa"]);
            Ward::create(['district_id' => $district_id,'name' => "Lang'ata"]);
            Ward::create(['district_id' => $district_id,'name' => "Lembeni"]);
            Ward::create(['district_id' => $district_id,'name' => "Msangeni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwaniko"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngujini"]);
            Ward::create(['district_id' => $district_id,'name' => "Shigatini"]);
        
        // Rombo - District
        District::create(['region_id' => 9,'name' => "Rombo",'capital' => "Rombo",'area' => '','population' => '260,963']);

            // Mwanga Wards:
            $district_id = 45;
            Ward::create(['district_id' => $district_id,'name' => "Aleni"]);
            Ward::create(['district_id' => $district_id,'name' => "Holili"]);
            Ward::create(['district_id' => $district_id,'name' => "Katangara Mrere"]);
            Ward::create(['district_id' => $district_id,'name' => "Kelamfua Mokala"]);
            Ward::create(['district_id' => $district_id,'name' => "Keni Mengeni"]);
            Ward::create(['district_id' => $district_id,'name' => "Kirongo Samanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kirwa keni"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisale Msaranga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitirima Kingachi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mahida"]);
            Ward::create(['district_id' => $district_id,'name' => "Makiidi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mamsera"]);
            Ward::create(['district_id' => $district_id,'name' => "Manda"]);
            Ward::create(['district_id' => $district_id,'name' => "Marangu Kitowo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mengwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Motamburu Kitendeni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mrao Keryo"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngoyoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Olele"]);
            Ward::create(['district_id' => $district_id,'name' => "Shimbi"]);
            Ward::create(['district_id' => $district_id,'name' => "Tarakea Motamburu"]);
            Ward::create(['district_id' => $district_id,'name' => "Ubetu Kahe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ushiri Ikuini"]);

        // Same - District
        District::create(['region_id' => 9,'name' => "Same",'capital' => "Same",'area' => '','population' => '269,807']);

            // Same Wards:
            $district_id = 46;
            Ward::create(['district_id' => $district_id,'name' => "Bangalala"]);
            Ward::create(['district_id' => $district_id,'name' => "Bombo"]);
            Ward::create(['district_id' => $district_id,'name' => "Bendera"]);
            Ward::create(['district_id' => $district_id,'name' => "Bwammbo"]);
            Ward::create(['district_id' => $district_id,'name' => "Chome"]);
            Ward::create(['district_id' => $district_id,'name' => "Hedaru"]);
            Ward::create(['district_id' => $district_id,'name' => "Mabilion"]);
            Ward::create(['district_id' => $district_id,'name' => "Kihurio"]);
            Ward::create(['district_id' => $district_id,'name' => "Kirangare"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisiwani"]);
            Ward::create(['district_id' => $district_id,'name' => "Makanya"]);
            Ward::create(['district_id' => $district_id,'name' => "Maore"]);
            Ward::create(['district_id' => $district_id,'name' => "Mhezi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpinji"]);
            Ward::create(['district_id' => $district_id,'name' => "Mshewa"]);
            Ward::create(['district_id' => $district_id,'name' => "Msindo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtii"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwenbe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ndungu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kalemawe"]);
            Ward::create(['district_id' => $district_id,'name' => "Njoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Vumari"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruvu"]);
            Ward::create(['district_id' => $district_id,'name' => "Same Kati"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisima"]);
            Ward::create(['district_id' => $district_id,'name' => "Steshen"]);
            Ward::create(['district_id' => $district_id,'name' => "Suji"]);
            Ward::create(['district_id' => $district_id,'name' => "Vudee"]);
            Ward::create(['district_id' => $district_id,'name' => "Vuje"]);
            Ward::create(['district_id' => $district_id,'name' => "Vunta"]);
            Ward::create(['district_id' => $district_id,'name' => "Lugulu"]);

        // Siha - District
        District::create(['region_id' => 9,'name' => "Siha",'capital' => "Siha",'area' => '','population' => '116,313']);

            // Siha Wards:
            $district_id = 47;
            Ward::create(['district_id' => $district_id,'name' => "Biriri"]);
            Ward::create(['district_id' => $district_id,'name' => "Gararagua"]);
            Ward::create(['district_id' => $district_id,'name' => "Ivaeny"]);
            Ward::create(['district_id' => $district_id,'name' => "Karansi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kashashi"]);
            Ward::create(['district_id' => $district_id,'name' => "Livishi"]);
            Ward::create(['district_id' => $district_id,'name' => "Makiwaru"]);
            Ward::create(['district_id' => $district_id,'name' => "Nasai"]);
            Ward::create(['district_id' => $district_id,'name' => "Ndumeti"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngarenairobi"]);
            Ward::create(['district_id' => $district_id,'name' => "Olkolili"]);
            Ward::create(['district_id' => $district_id,'name' => "Sanya Juu"]);

        // Lindi Region
        Region::create([
            'name' => "Lindi",
            'capital' => "Lindi",
            'districts' => 6,
            'keycode' => "08",
            'area' => "66,040 Km Square",
            'population' => '864,652',
            'postcode' => '65xxx',
            'zone' => 'Coastal'
        ]);

        // Kilwa - District
        District::create(['region_id' => 10,'name' => "Kilwa",'capital' => "Kilwa",'area' => '','population' => '190,744']);

            // Kilwa Wards:
            $district_id = 47;
            Ward::create(['district_id' => $district_id,'name' => "Chumo"]);
            Ward::create(['district_id' => $district_id,'name' => "kandawale"]);
            Ward::create(['district_id' => $district_id,'name' => "Kijumbi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kikole"]);
            Ward::create(['district_id' => $district_id,'name' => "Kipatimu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiranjeranje"]);
            Ward::create(['district_id' => $district_id,'name' => "Kivinje Singino"]);
            Ward::create(['district_id' => $district_id,'name' => "Lihimalyao"]);
            Ward::create(['district_id' => $district_id,'name' => "Likawage"]);
            Ward::create(['district_id' => $district_id,'name' => "Mandawa"]);
            Ward::create(['district_id' => $district_id,'name' => "Masoko"]);
            Ward::create(['district_id' => $district_id,'name' => "Miguruwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mingumbi"]);
            Ward::create(['district_id' => $district_id,'name' => "Miteja"]);
            Ward::create(['district_id' => $district_id,'name' => "Mitole"]);
            Ward::create(['district_id' => $district_id,'name' => "Nanjirinji"]);
            Ward::create(['district_id' => $district_id,'name' => "Njinjo"]);
            Ward::create(['district_id' => $district_id,'name' => "Pande"]);
            Ward::create(['district_id' => $district_id,'name' => "Songosongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Tingi"]);

        // Lindi - District
        District::create(['region_id' => 10,'name' => "Lindi",'capital' => "Lindi",'area' => '','population' => '272,984']);

            // Lindi Wards:
            $district_id = 48;
            Ward::create(['district_id' => $district_id,'name' => "Jamhuri"]);
            Ward::create(['district_id' => $district_id,'name' => "Makonde"]);
            Ward::create(['district_id' => $district_id,'name' => "Matopeni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mikumbe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mitande"]);
            Ward::create(['district_id' => $district_id,'name' => "Msinjahili"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwenge"]);
            Ward::create(['district_id' => $district_id,'name' => "Nachingwea"]);
            Ward::create(['district_id' => $district_id,'name' => "Ndoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Rahaleo"]);
            Ward::create(['district_id' => $district_id,'name' => "Rasbura"]);
            Ward::create(['district_id' => $district_id,'name' => "Wailes"]);
        
        // Liwale - District
        District::create(['region_id' => 10,'name' => "Liwale",'capital' => "Liwale",'area' => '','population' => '91,380']);

            // Liwale Wards:
            $district_id = 49;
            Ward::create(['district_id' => $district_id,'name' => "Barikiwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiang'ara"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibutuka"]);
            Ward::create(['district_id' => $district_id,'name' => "Kimambi"]);
            Ward::create(['district_id' => $district_id,'name' => "Liwale 'B'"]);
            Ward::create(['district_id' => $district_id,'name' => "Liwale Mjini"]);
            Ward::create(['district_id' => $district_id,'name' => "Makata"]);
            Ward::create(['district_id' => $district_id,'name' => "Mangirikiti"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbaya"]);
            Ward::create(['district_id' => $district_id,'name' => "Mihuno"]);
            Ward::create(['district_id' => $district_id,'name' => "Mirui"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkutano"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlembwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpigamiti"]);
            Ward::create(['district_id' => $district_id,'name' => "Nangano"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngongowele"]);
            Ward::create(['district_id' => $district_id,'name' => "Likongowele"]);
            Ward::create(['district_id' => $district_id,'name' => "Nangando"]);
            Ward::create(['district_id' => $district_id,'name' => "Lilombe"]);
            Ward::create(['district_id' => $district_id,'name' => "Kichonda"]);

        // Nachingwea - District
        District::create(['region_id' => 10,'name' => "Nachingwea",'capital' => "Nachingwea",'area' => '','population' => '178,464']);

            // Nachingwea Wards:
            $district_id = 50;
            Ward::create(['district_id' => $district_id,'name' => "Chilola"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiegei"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilima Rondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilimani Hewa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kipara Mnero"]);
            Ward::create(['district_id' => $district_id,'name' => "Kipara Mtua"]);
            Ward::create(['district_id' => $district_id,'name' => "Lionja"]);
            Ward::create(['district_id' => $district_id,'name' => "Marambo"]);
            Ward::create(['district_id' => $district_id,'name' => "Matekwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mibondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkoka"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkotokuyana"]);
            Ward::create(['district_id' => $district_id,'name' => "Mnero"]);
            Ward::create(['district_id' => $district_id,'name' => "Mnero Ngongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpiruka"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtua"]);
            Ward::create(['district_id' => $district_id,'name' => "Nachingwea"]);
            Ward::create(['district_id' => $district_id,'name' => "Naipanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Naipingo"]);
            Ward::create(['district_id' => $district_id,'name' => "Namapwia"]);
            Ward::create(['district_id' => $district_id,'name' => "Namatula"]);
            Ward::create(['district_id' => $district_id,'name' => "Nambambo"]);
            Ward::create(['district_id' => $district_id,'name' => "Namikango"]);
            Ward::create(['district_id' => $district_id,'name' => "Nangowe"]);
            Ward::create(['district_id' => $district_id,'name' => "Nang'ondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Nditi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ndomoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngunichile"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruponda"]);
            Ward::create(['district_id' => $district_id,'name' => "Stesheni"]);

        // Ruangwa - District
        District::create(['region_id' => 10,'name' => "Ruangwa",'capital' => "Ruangwa",'area' => '','population' => '131,080']);

            // Ruangwa Wards:
            $district_id = 51;
            Ward::create(['district_id' => $district_id,'name' => "Chibula"]);
            Ward::create(['district_id' => $district_id,'name' => "Chienjere"]);
            Ward::create(['district_id' => $district_id,'name' => "Chinongwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Chunyu"]);
            Ward::create(['district_id' => $district_id,'name' => "Likunja"]);
            Ward::create(['district_id' => $district_id,'name' => "Luchelegwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbekenyera"]);
            Ward::create(['district_id' => $district_id,'name' => "Makanjiro"]);
            Ward::create(['district_id' => $district_id,'name' => "Malolo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mandarawe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mandawa"]);
            Ward::create(['district_id' => $district_id,'name' => "Matambarale"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbwenkuru"]);
            Ward::create(['district_id' => $district_id,'name' => "Mnacho"]);
            Ward::create(['district_id' => $district_id,'name' => "Nachingwea"]);
            Ward::create(['district_id' => $district_id,'name' => "Nambilanje"]);
            Ward::create(['district_id' => $district_id,'name' => "Namichiga"]);
            Ward::create(['district_id' => $district_id,'name' => "Nandagala"]);
            Ward::create(['district_id' => $district_id,'name' => "Nanganga"]);
            Ward::create(['district_id' => $district_id,'name' => "Narung'ombe"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkowe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruangwa"]);
        
        // Manyara Region
        Region::create([
            'name' => "Manyara",
            'capital' => "Babati",
            'districts' => 6,
            'keycode' => "21",
            'area' => "44,522 Km Square",
            'population' => '1,425,131',
            'postcode' => '27xxx',
            'zone' => 'Northen'
        ]);

        // Babati Rural - District
        District::create(['region_id' => 11,'name' => "Babati Rural",'capital' => "Babati",'area' => '','population' => '312,392']);

            // Babati Rural Wards:
            $district_id = 52;
            Ward::create(['district_id' => $district_id,'name' => "Arri"]);
            Ward::create(['district_id' => $district_id,'name' => "Ayasanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Bashnet"]);
            Ward::create(['district_id' => $district_id,'name' => "Boay"]);
            Ward::create(['district_id' => $district_id,'name' => "Dabil"]);
            Ward::create(['district_id' => $district_id,'name' => "Dareda"]);
            Ward::create(['district_id' => $district_id,'name' => "Duru"]);
            Ward::create(['district_id' => $district_id,'name' => "Endokise"]);
            Ward::create(['district_id' => $district_id,'name' => "Gallapo"]);
            Ward::create(['district_id' => $district_id,'name' => "Gidas"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiru"]);
            Ward::create(['district_id' => $district_id,'name' => "Madunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Magara"]);
            Ward::create(['district_id' => $district_id,'name' => "Magugu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mamire"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwada"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkaiti"]);
            Ward::create(['district_id' => $district_id,'name' => "Qash"]);
            Ward::create(['district_id' => $district_id,'name' => "Riroda"]);
            Ward::create(['district_id' => $district_id,'name' => "Ufana"]);
        
        // Babati Urban - District
        District::create(['region_id' => 11,'name' => "Babati Urban",'capital' => "Babati",'area' => '','population' => '93,108']);

            // Babati Urban Wards:
            $district_id = 53;
            Ward::create(['district_id' => $district_id,'name' => "Babati"]);
            Ward::create(['district_id' => $district_id,'name' => "Bagara"]);
            Ward::create(['district_id' => $district_id,'name' => "Bonga"]);
            Ward::create(['district_id' => $district_id,'name' => "Maisaka"]);
            Ward::create(['district_id' => $district_id,'name' => "Mutuka"]);
            Ward::create(['district_id' => $district_id,'name' => "Nangara"]);
            Ward::create(['district_id' => $district_id,'name' => "Sigino"]);
            Ward::create(['district_id' => $district_id,'name' => "Singe"]);
        
        // Hanang - District
        District::create(['region_id' => 11,'name' => "Hanang",'capital' => "Hanang",'area' => '','population' => '275,990']);

            // Hanang Wards:
            $district_id = 54;
            Ward::create(['district_id' => $district_id,'name' => "Balagidalalu"]);
            Ward::create(['district_id' => $district_id,'name' => "Bassodesh"]);
            Ward::create(['district_id' => $district_id,'name' => "Bassotu"]);
            Ward::create(['district_id' => $district_id,'name' => "Dirma"]);
            Ward::create(['district_id' => $district_id,'name' => "Endasak"]);
            Ward::create(['district_id' => $district_id,'name' => "Endasiwold"]);
            Ward::create(['district_id' => $district_id,'name' => "Ganana"]);
            Ward::create(['district_id' => $district_id,'name' => "Gehandu"]);
            Ward::create(['district_id' => $district_id,'name' => "Gendabi"]);
            Ward::create(['district_id' => $district_id,'name' => "Getanuwas"]);
            Ward::create(['district_id' => $district_id,'name' => "Gidahababieg"]);
            Ward::create(['district_id' => $district_id,'name' => "Gisambalang"]);
            Ward::create(['district_id' => $district_id,'name' => "Giting"]);
            Ward::create(['district_id' => $district_id,'name' => "Hidet"]);
            Ward::create(['district_id' => $district_id,'name' => "Hirbadaw"]);
            Ward::create(['district_id' => $district_id,'name' => "Katesh"]);
            Ward::create(['district_id' => $district_id,'name' => "Laghanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Lalaji"]);
            Ward::create(['district_id' => $district_id,'name' => "Masakta"]);
            Ward::create(['district_id' => $district_id,'name' => "Maskron"]);
            Ward::create(['district_id' => $district_id,'name' => "Masqaroda"]);
            Ward::create(['district_id' => $district_id,'name' => "Mogitu"]);
            Ward::create(['district_id' => $district_id,'name' => "Nangwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Simbay"]);
            Ward::create(['district_id' => $district_id,'name' => "Sirop"]);
        
        // Kiteto - District
        District::create(['region_id' => 11,'name' => "kiteto",'capital' => "Kiteto",'area' => '','population' => '244,669']);

            // Kiteto Wards:
            $district_id = 55;
            Ward::create(['district_id' => $district_id,'name' => "Bwagamoyo"]);
            Ward::create(['district_id' => $district_id,'name' => "Dongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Dosidosi"]);
            Ward::create(['district_id' => $district_id,'name' => "Engusero"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibaya"]);
            Ward::create(['district_id' => $district_id,'name' => "Kijungu"]);
            Ward::create(['district_id' => $district_id,'name' => "Lengatei"]);
            Ward::create(['district_id' => $district_id,'name' => "Makame"]);
            Ward::create(['district_id' => $district_id,'name' => "Matui"]);
            Ward::create(['district_id' => $district_id,'name' => "Ndebo"]);
            Ward::create(['district_id' => $district_id,'name' => "Njoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Olboloti"]);
            Ward::create(['district_id' => $district_id,'name' => "Partimbo"]);
            Ward::create(['district_id' => $district_id,'name' => "Songambele"]);
            Ward::create(['district_id' => $district_id,'name' => "Sunya"]);
            Ward::create(['district_id' => $district_id,'name' => "Loolera"]);
            Ward::create(['district_id' => $district_id,'name' => "Magungu"]);
            Ward::create(['district_id' => $district_id,'name' => "Chapakazi"]);
            Ward::create(['district_id' => $district_id,'name' => "Namelock"]);
            Ward::create(['district_id' => $district_id,'name' => "Ndirigishi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kaloleni"]);
            Ward::create(['district_id' => $district_id,'name' => "Bwawani"]);
            Ward::create(['district_id' => $district_id,'name' => "Laiseri"]);
        
        // Mbulu - District
        District::create(['region_id' => 11,'name' => "Mbulu",'capital' => "Mbulu",'area' => '','population' => '320,279']);

            // Mbulu Wards:
            $district_id = 56;
            Ward::create(['district_id' => $district_id,'name' => "Ayamaami"]);
            Ward::create(['district_id' => $district_id,'name' => "Ayamohe"]);
            Ward::create(['district_id' => $district_id,'name' => "Bargish"]);
            Ward::create(['district_id' => $district_id,'name' => "Bashay"]);
            Ward::create(['district_id' => $district_id,'name' => "Daudi"]);
            Ward::create(['district_id' => $district_id,'name' => "Dinamu"]);
            Ward::create(['district_id' => $district_id,'name' => "Dongobesh"]);
            Ward::create(['district_id' => $district_id,'name' => "Endagikot"]);
            Ward::create(['district_id' => $district_id,'name' => "Endamilay"]);
            Ward::create(['district_id' => $district_id,'name' => "Eshkesh"]);
            Ward::create(['district_id' => $district_id,'name' => "Gehandu"]);
            Ward::create(['district_id' => $district_id,'name' => "Geterer"]);
            Ward::create(['district_id' => $district_id,'name' => "Gidihim"]);
            Ward::create(['district_id' => $district_id,'name' => "Gunyoda"]);
            Ward::create(['district_id' => $district_id,'name' => "Hayderer"]);
            Ward::create(['district_id' => $district_id,'name' => "Haydom"]);
            Ward::create(['district_id' => $district_id,'name' => "Imboru"]);
            Ward::create(['district_id' => $district_id,'name' => "Kainam"]);
            Ward::create(['district_id' => $district_id,'name' => "Maghang"]);
            Ward::create(['district_id' => $district_id,'name' => "Marang"]);
            Ward::create(['district_id' => $district_id,'name' => "Meretadu"]);
            Ward::create(['district_id' => $district_id,'name' => "Masieda"]);
            Ward::create(['district_id' => $district_id,'name' => "Masqaroda"]);
            Ward::create(['district_id' => $district_id,'name' => "Murray"]);
            Ward::create(['district_id' => $district_id,'name' => "Nahasey"]);
            Ward::create(['district_id' => $district_id,'name' => "Nambis"]);
            Ward::create(['district_id' => $district_id,'name' => "Sanu Baray"]);
            Ward::create(['district_id' => $district_id,'name' => "Tlawi"]);
            Ward::create(['district_id' => $district_id,'name' => "Tumati"]);
            Ward::create(['district_id' => $district_id,'name' => "Uhuru"]);
            Ward::create(['district_id' => $district_id,'name' => "Yaeda Ampa"]);
            Ward::create(['district_id' => $district_id,'name' => "Yaeda Chini"]);
        
        // Simanjiro - District
        District::create(['region_id' => 11,'name' => "Simanjiro",'capital' => "Simanjiro",'area' => '','population' => '178,693']);

            // Simanjiro Wards:
            $district_id = 57;
            Ward::create(['district_id' => $district_id,'name' => "Emboreet"]);
            Ward::create(['district_id' => $district_id,'name' => "Endiamtu"]);
            Ward::create(['district_id' => $district_id,'name' => "Endonyongijape"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitwai"]);
            Ward::create(['district_id' => $district_id,'name' => "Komolo"]);
            Ward::create(['district_id' => $district_id,'name' => "Liborsoit"]);
            Ward::create(['district_id' => $district_id,'name' => "Loiborsiret"]);
            Ward::create(['district_id' => $district_id,'name' => "Mrerani"]);
            Ward::create(['district_id' => $district_id,'name' => "Msitu wa Tembo"]);
            Ward::create(['district_id' => $district_id,'name' => "Naberera"]);
            Ward::create(['district_id' => $district_id,'name' => "Naisinyai"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngorika"]);
            Ward::create(['district_id' => $district_id,'name' => "Oljoro No. 5"]);
            Ward::create(['district_id' => $district_id,'name' => "Orkesumet"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruvu Remiti"]);
            Ward::create(['district_id' => $district_id,'name' => "Shambarai"]);
            Ward::create(['district_id' => $district_id,'name' => "Terrat"]);
        
        // Mara Region
        Region::create([
            'name' => "Mara",
            'capital' => "Musoma",
            'districts' => 7,
            'keycode' => "20",
            'area' => "21,760  Km Square",
            'population' => '1,743,830',
            'postcode' => '31xxx',
            'zone' => 'Lake'
        ]);

        // Bunda - District
        District::create(['region_id' => 12,'name' => "Bunda",'capital' => "Bunda",'area' => '','population' => '335,061']);

            // Bunda Wards:
            $district_id = 58;
            Ward::create(['district_id' => $district_id,'name' => "Balili"]);
            Ward::create(['district_id' => $district_id,'name' => "Bunda Mjini"]);
            Ward::create(['district_id' => $district_id,'name' => "Bunda Stoo"]);
            Ward::create(['district_id' => $district_id,'name' => "Butimba"]);
            Ward::create(['district_id' => $district_id,'name' => "Chitengule"]);
            Ward::create(['district_id' => $district_id,'name' => "Guta"]);
            Ward::create(['district_id' => $district_id,'name' => "Hunyari"]);
            Ward::create(['district_id' => $district_id,'name' => "Igundu"]);
            Ward::create(['district_id' => $district_id,'name' => "Iramba"]);
            Ward::create(['district_id' => $district_id,'name' => "Kabasa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kasuguti"]);
            Ward::create(['district_id' => $district_id,'name' => "Ketare"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibara"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisorya"]);
            Ward::create(['district_id' => $district_id,'name' => "Kunzugu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mcharo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mihingo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mugeta"]);
            Ward::create(['district_id' => $district_id,'name' => "Namhula"]);
            Ward::create(['district_id' => $district_id,'name' => "Nampindi"]);
            Ward::create(['district_id' => $district_id,'name' => "Nansimo"]);
            Ward::create(['district_id' => $district_id,'name' => "Neruma"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamang'uta"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamuswa"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyasura"]);
            Ward::create(['district_id' => $district_id,'name' => "Salama"]);
            Ward::create(['district_id' => $district_id,'name' => "Sazira"]);
            Ward::create(['district_id' => $district_id,'name' => "Wariku"]);
        
        // Butiama - District
        District::create(['region_id' => 12,'name' => "Butiama",'capital' => "Butiama",'area' => '','population' => '241,732']);

            // Butiama Wards:
            $district_id = 59;
            Ward::create(['district_id' => $district_id,'name' => "Bisumwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Buhemba"]);
            Ward::create(['district_id' => $district_id,'name' => "Bukabwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Buruma"]);
            Ward::create(['district_id' => $district_id,'name' => "Busegwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Buswahili"]);
            Ward::create(['district_id' => $district_id,'name' => "Butiama"]);
            Ward::create(['district_id' => $district_id,'name' => "Butuguri"]);
            Ward::create(['district_id' => $district_id,'name' => "Bwiregi"]);
            Ward::create(['district_id' => $district_id,'name' => "Etaro"]);
            Ward::create(['district_id' => $district_id,'name' => "Kukirango"]);
            Ward::create(['district_id' => $district_id,'name' => "Kyanyari"]);
            Ward::create(['district_id' => $district_id,'name' => "Masaba"]);
            Ward::create(['district_id' => $district_id,'name' => "Mirwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Muriaza"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakatende"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamimange"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyankanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyegina"]);
            Ward::create(['district_id' => $district_id,'name' => "Sirorisimba"]);
    
        // Musoma Rural - District
        District::create(['region_id' => 12,'name' => "Musoma Rural",'capital' => "Musoma",'area' => '','population' => '178,356']);

            // Musoma Rural Wards:
            $district_id = 60;
            Ward::create(['district_id' => $district_id,'name' => "Bugwema"]);
            Ward::create(['district_id' => $district_id,'name' => "Bukima"]);
            Ward::create(['district_id' => $district_id,'name' => "Bukumi"]);
            Ward::create(['district_id' => $district_id,'name' => "Bulinga"]);
            Ward::create(['district_id' => $district_id,'name' => "Busambara"]);
            Ward::create(['district_id' => $district_id,'name' => "Bwasi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiriba"]);
            Ward::create(['district_id' => $district_id,'name' => "Makojo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mugango"]);
            Ward::create(['district_id' => $district_id,'name' => "Murangi"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyambono"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamrandirira"]);
            Ward::create(['district_id' => $district_id,'name' => "Suguti"]);
            Ward::create(['district_id' => $district_id,'name' => "Tegeruka"]);
        
        // Musoma Urban - District
        District::create(['region_id' => 12,'name' => "Musoma Urban",'capital' => "Musoma",'area' => '','population' => '134,327']);

            // Musoma Urban Wards:
            $district_id = 61;
            Ward::create(['district_id' => $district_id,'name' => "Buhare"]);
            Ward::create(['district_id' => $district_id,'name' => "Bweri"]);
            Ward::create(['district_id' => $district_id,'name' => "Iringo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kamunyonge"]);
            Ward::create(['district_id' => $district_id,'name' => "Kigera"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitaji"]);
            Ward::create(['district_id' => $district_id,'name' => "Makoko"]);
            Ward::create(['district_id' => $district_id,'name' => "Mukendo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwigobero"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwisenge"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakato"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamatare"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyasho"]);
        
        // Rorya - District
        District::create(['region_id' => 12,'name' => "Rorya",'capital' => "Rorya",'area' => '','population' => '265,241']);

            // Rorya Wards:
            $district_id = 62;
            Ward::create(['district_id' => $district_id,'name' => "Kigunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kirogo"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamtinga"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamtinga"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamagaro"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyahongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkoma"]);
            Ward::create(['district_id' => $district_id,'name' => "Tai"]);
            Ward::create(['district_id' => $district_id,'name' => "Bukura"]);
            Ward::create(['district_id' => $district_id,'name' => "Roche"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitembe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mirambe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mirare"]);
            Ward::create(['district_id' => $district_id,'name' => "Goribe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikoma"]);
            Ward::create(['district_id' => $district_id,'name' => "Koryo"]);
            Ward::create(['district_id' => $district_id,'name' => "Bukwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyathorogo"]);
            Ward::create(['district_id' => $district_id,'name' => "Rabour"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisumwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Komuge"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kyang'ombe"]);
        
        // Serengeti - District
        District::create(['region_id' => 12,'name' => "Serengeti",'capital' => "Serengeti",'area' => '','population' => '249,420']);

            // Serengeti Wards:
            $district_id = 63;
            Ward::create(['district_id' => $district_id,'name' => "Busawe"]);
            Ward::create(['district_id' => $district_id,'name' => "Geitasamo"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikoma"]);
            Ward::create(['district_id' => $district_id,'name' => "Issenye"]);
            Ward::create(['district_id' => $district_id,'name' => "Kebanchabancha"]);
            Ward::create(['district_id' => $district_id,'name' => "Kenyamonta"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisaka"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisangura"]);
            Ward::create(['district_id' => $district_id,'name' => "Kyambahi"]);
            Ward::create(['district_id' => $district_id,'name' => "Machochwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Magange"]);
            Ward::create(['district_id' => $district_id,'name' => "Majimoto"]);
            Ward::create(['district_id' => $district_id,'name' => "Manchira"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbalibali"]);
            Ward::create(['district_id' => $district_id,'name' => "Morotonga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mosongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mugumu"]);
            Ward::create(['district_id' => $district_id,'name' => "Natta"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamatare"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyambureti"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamoko"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyansurura"]);
            Ward::create(['district_id' => $district_id,'name' => "Rigicha"]);
            Ward::create(['district_id' => $district_id,'name' => "Ring'wani"]);
            Ward::create(['district_id' => $district_id,'name' => "Rung'abure"]);
            Ward::create(['district_id' => $district_id,'name' => "Sedeco"]);
            Ward::create(['district_id' => $district_id,'name' => "Stendi Kuu"]);
            Ward::create(['district_id' => $district_id,'name' => "Uwanja wa Ndege"]);

        // Tarime - District
        District::create(['region_id' => 12,'name' => "Tarime",'capital' => "Tarime",'area' => '','population' => '339,693']);

            // Tarime Wards:
            $district_id = 63;
            Ward::create(['district_id' => $district_id,'name' => "Binagi"]);
            Ward::create(['district_id' => $district_id,'name' => "Bomani"]);
            Ward::create(['district_id' => $district_id,'name' => "Bumera"]);
            Ward::create(['district_id' => $district_id,'name' => "Genyange"]);
            Ward::create(['district_id' => $district_id,'name' => "Gorong'a"]);
            Ward::create(['district_id' => $district_id,'name' => "Itiryo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kemambo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kentare"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibasuka"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiore"]);
            Ward::create(['district_id' => $district_id,'name' => "Komaswa"]);
            Ward::create(['district_id' => $district_id,'name' => "Manga"]);
            Ward::create(['district_id' => $district_id,'name' => "Matongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbogi"]);
            Ward::create(['district_id' => $district_id,'name' => "Muriba"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwema"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakonga"]);
            Ward::create(['district_id' => $district_id,'name' => "Gwitiryo"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamisangura"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamwaga"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyandoto"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyansicha"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyanungu"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyarero"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyarokoba"]);
            Ward::create(['district_id' => $district_id,'name' => "Pemba"]);
            Ward::create(['district_id' => $district_id,'name' => "Sabasaba"]);
            Ward::create(['district_id' => $district_id,'name' => "Sirari"]);
            Ward::create(['district_id' => $district_id,'name' => "Susuni"]);
            Ward::create(['district_id' => $district_id,'name' => "Turwa"]);
        
        // Mbeya Region
        Region::create([
            'name' => "Mbeya",
            'capital' => "Mbeya",
            'districts' => 7,
            'keycode' => "12",
            'area' => "35,954 Km Square",
            'population' => '1,743,830',
            'postcode' => '31xxx',
            'zone' => 'Lake'
        ]);

        // Chunya - District
        District::create(['region_id' => 13,'name' => "Chunya",'capital' => "Chunya",'area' => '','population' => '290,478']);

            // Chunya Wards:
            $district_id = 64;
            Ward::create(['district_id' => $district_id,'name' => "Chalangwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Chokaa"]);
            Ward::create(['district_id' => $district_id,'name' => "Ifumbo"]);
            Ward::create(['district_id' => $district_id,'name' => "Itewe"]);
            Ward::create(['district_id' => $district_id,'name' => "Galula"]);
            Ward::create(['district_id' => $district_id,'name' => "Gua"]);
            Ward::create(['district_id' => $district_id,'name' => "Kambikatoto"]);
            Ward::create(['district_id' => $district_id,'name' => "Kanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kapalala"]);
            Ward::create(['district_id' => $district_id,'name' => "Lupa Tingatinga"]);
            Ward::create(['district_id' => $district_id,'name' => "Luwalaje"]);
            Ward::create(['district_id' => $district_id,'name' => "Mafyeko"]);
            Ward::create(['district_id' => $district_id,'name' => "Makongorosi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mamba"]);
            Ward::create(['district_id' => $district_id,'name' => "Matwiga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbangala"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbugani"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbuyuni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkwajuni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtanila"]);
            Ward::create(['district_id' => $district_id,'name' => "Namkukwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngwala"]);
            Ward::create(['district_id' => $district_id,'name' => "Totowe"]);
        
        // Ileje - District
        District::create(['region_id' => 13,'name' => "Ileje",'capital' => "Ileje",'area' => '','population' => '124,451']);

            // Ileje Wards:
            $district_id = 65;
            Ward::create(['district_id' => $district_id,'name' => "Bupigu"]);
            Ward::create(['district_id' => $district_id,'name' => "Chitete"]);
            Ward::create(['district_id' => $district_id,'name' => "Ibaba"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikinga"]);
            Ward::create(['district_id' => $district_id,'name' => "Isongole"]);
            Ward::create(['district_id' => $district_id,'name' => "Itale"]);
            Ward::create(['district_id' => $district_id,'name' => "Itumba"]);
            Ward::create(['district_id' => $district_id,'name' => "Kafule"]);
            Ward::create(['district_id' => $district_id,'name' => "Lubanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Luswisi"]);
            Ward::create(['district_id' => $district_id,'name' => "Malangali"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbebe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ndola"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngulilo"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngulugulu"]);
            Ward::create(['district_id' => $district_id,'name' => "Sange"]);
        
        // Kyela - District
        District::create(['region_id' => 13,'name' => "Kyela",'capital' => "Kyela",'area' => '','population' => '221,490']);

            // Kyela Wards:
            $district_id = 66;
            Ward::create(['district_id' => $district_id,'name' => "Bujonde"]);
            Ward::create(['district_id' => $district_id,'name' => "Busale"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikama"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikolo"]);
            Ward::create(['district_id' => $district_id,'name' => "Ipande"]);
            Ward::create(['district_id' => $district_id,'name' => "Ipinda"]);
            Ward::create(['district_id' => $district_id,'name' => "Kajunjumele"]);
            Ward::create(['district_id' => $district_id,'name' => "Katumba Songwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Kyela Mjini"]);
            Ward::create(['district_id' => $district_id,'name' => "Lusungo"]);
            Ward::create(['district_id' => $district_id,'name' => "Makwale"]);
            Ward::create(['district_id' => $district_id,'name' => "Matema"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwaya"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngana"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngonga"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikimba"]);

        // Mbarali - District
        District::create(['region_id' => 13,'name' => "Mbarali",'capital' => "Mbarali",'area' => '','population' => '300,517']);

            // Mbarali Wards:
            $district_id = 67;
            Ward::create(['district_id' => $district_id,'name' => "Chimala"]);
            Ward::create(['district_id' => $district_id,'name' => "Itamboleo"]);
            Ward::create(['district_id' => $district_id,'name' => "Igava"]);
            Ward::create(['district_id' => $district_id,'name' => "Imalilo Songwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ihahi"]);
            Ward::create(['district_id' => $district_id,'name' => "Lugelele"]);
            Ward::create(['district_id' => $district_id,'name' => "Igurusi"]);
            Ward::create(['district_id' => $district_id,'name' => "Madibira"]);
            Ward::create(['district_id' => $district_id,'name' => "Mahongole"]);
            Ward::create(['district_id' => $district_id,'name' => "Mapogoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Mawindi"]);
            Ward::create(['district_id' => $district_id,'name' => "Luhanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kongolo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwatenga"]);
            Ward::create(['district_id' => $district_id,'name' => "Miyombweni"]);
            Ward::create(['district_id' => $district_id,'name' => "Ipwani"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruiwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Rujewa"]);
            Ward::create(['district_id' => $district_id,'name' => "Ubaruku"]);
            Ward::create(['district_id' => $district_id,'name' => "Utengule/Usangu"]);

        // Mbeya - District
        District::create(['region_id' => 13,'name' => "Mbeya",'capital' => "Mbeya",'area' => '','population' => '690,598']);

            // Mbeya Wards:
            $district_id = 68;
            Ward::create(['district_id' => $district_id,'name' => "Forest"]);
            Ward::create(['district_id' => $district_id,'name' => "Ghana"]);
            Ward::create(['district_id' => $district_id,'name' => "Iduda"]);
            Ward::create(['district_id' => $district_id,'name' => "Iganjo"]);
            Ward::create(['district_id' => $district_id,'name' => "Iganzo"]);
            Ward::create(['district_id' => $district_id,'name' => "Igawilo"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilemi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilomba"]);
            Ward::create(['district_id' => $district_id,'name' => "Isanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Isyesye"]);
            Ward::create(['district_id' => $district_id,'name' => "Itagano"]);
            Ward::create(['district_id' => $district_id,'name' => "Itende"]);
            Ward::create(['district_id' => $district_id,'name' => "Itezi"]);
            Ward::create(['district_id' => $district_id,'name' => "Itiji"]);
            Ward::create(['district_id' => $district_id,'name' => "Iwambi"]);
            Ward::create(['district_id' => $district_id,'name' => "Iyela"]);
            Ward::create(['district_id' => $district_id,'name' => "Iyunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Iziwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kalobe"]);
            Ward::create(['district_id' => $district_id,'name' => "Maanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mabatini"]);
            Ward::create(['district_id' => $district_id,'name' => "Maendeleo"]);
            Ward::create(['district_id' => $district_id,'name' => "Majengo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbalizi Road"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwakibete"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwansekwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwansanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Nonde"]);
            Ward::create(['district_id' => $district_id,'name' => "Nsalaga"]);
            Ward::create(['district_id' => $district_id,'name' => "Nsoho"]);
            Ward::create(['district_id' => $district_id,'name' => "Nzovwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Sinde"]);
            Ward::create(['district_id' => $district_id,'name' => "Sisimba"]);
            Ward::create(['district_id' => $district_id,'name' => "Tembela"]);
            Ward::create(['district_id' => $district_id,'name' => "Uyole"]);
        
        // Mbozi - District
        District::create(['region_id' => 13,'name' => "Mbozi",'capital' => "Mbozi",'area' => '','population' => '446,339']);

            // Mbozi Wards:
            $district_id = 69;
            Ward::create(['district_id' => $district_id,'name' => "Chilulumo"]);
            Ward::create(['district_id' => $district_id,'name' => "Chitete"]);
            Ward::create(['district_id' => $district_id,'name' => "Chiwezi"]);
            Ward::create(['district_id' => $district_id,'name' => "Halungu"]);
            Ward::create(['district_id' => $district_id,'name' => "Igamba"]);
            Ward::create(['district_id' => $district_id,'name' => "Ihanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Isandula"]);
            Ward::create(['district_id' => $district_id,'name' => "Isansa"]);
            Ward::create(['district_id' => $district_id,'name' => "Itaka"]);
            Ward::create(['district_id' => $district_id,'name' => "Ivuna"]);
            Ward::create(['district_id' => $district_id,'name' => "Iyula"]);
            Ward::create(['district_id' => $district_id,'name' => "Kamsamba"]);
            Ward::create(['district_id' => $district_id,'name' => "Kapele"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlangali"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlowo"]);
            Ward::create(['district_id' => $district_id,'name' => "Msangano"]);
            Ward::create(['district_id' => $district_id,'name' => "Msia"]);
            Ward::create(['district_id' => $district_id,'name' => "Myovizi"]);
            Ward::create(['district_id' => $district_id,'name' => "Myunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Nambinzo"]);
            Ward::create(['district_id' => $district_id,'name' => "Ndalambo"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkangamo"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyimbili"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Vwawa"]);
        
        // Momba - District
        District::create(['region_id' => 13,'name' => "Momba",'capital' => "Momba",'area' => '','population' => '294,380']);

            // Momba Wards:
            // $district_id = 0;
            // Ward::create(['district_id' => $district_id,'name' => ""]);

        // Rungwe - District
        District::create(['region_id' => 13,'name' => "Rungwe",'capital' => "Rungwe",'area' => '','population' => '339,157']);

            // Rungwe Wards:
            $district_id = 70;
            Ward::create(['district_id' => $district_id,'name' => "Bagamoyo Ward"]);
            Ward::create(['district_id' => $district_id,'name' => "Bujela"]);
            Ward::create(['district_id' => $district_id,'name' => "Bulyaga"]);
            Ward::create(['district_id' => $district_id,'name' => "Ibighi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikuti"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilima"]);
            Ward::create(['district_id' => $district_id,'name' => "Iponjela"]);
            Ward::create(['district_id' => $district_id,'name' => "Isongole"]);
            Ward::create(['district_id' => $district_id,'name' => "Itagata"]);
            Ward::create(['district_id' => $district_id,'name' => "Kawetele"]);
            Ward::create(['district_id' => $district_id,'name' => "Kinyala"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisiba"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisondela"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiwira"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisondela"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiwira"]);
            Ward::create(['district_id' => $district_id,'name' => "Kyimo"]);
            Ward::create(['district_id' => $district_id,'name' => "Lufingo"]);
            Ward::create(['district_id' => $district_id,'name' => "Lupepo"]);
            Ward::create(['district_id' => $district_id,'name' => "Makandana"]);
            Ward::create(['district_id' => $district_id,'name' => "Malindo"]);
            Ward::create(['district_id' => $district_id,'name' => "Msasani Ward"]);
            Ward::create(['district_id' => $district_id,'name' => "Masebe"]);
            Ward::create(['district_id' => $district_id,'name' => "Masoko Ward"]);
            Ward::create(['district_id' => $district_id,'name' => "Masukulu"]);
            Ward::create(['district_id' => $district_id,'name' => "Matwebe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpuguso"]);
            Ward::create(['district_id' => $district_id,'name' => "Ndato"]);
            Ward::create(['district_id' => $district_id,'name' => "Swaya"]);
            Ward::create(['district_id' => $district_id,'name' => "Suma"]);
        
        // Morogoro Region
        Region::create([
            'name' => "Morogoro",
            'capital' => "Morogoro",
            'districts' => 6,
            'keycode' => "05",
            'area' => "70,624 Km Square",
            'population' => '2,218,492',
            'postcode' => '67xxx',
            'zone' => 'Coastal'
        ]);

        // Gairo - District
        District::create(['region_id' => 14,'name' => "Gairo",'capital' => "Gairo",'area' => '','population' => '193,011']);

            // Gairo Wards:
            $district_id = 71;
            Ward::create(['district_id' => $district_id,'name' => "Gairo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mandege"]);
            Ward::create(['district_id' => $district_id,'name' => "Rubeho"]);
            Ward::create(['district_id' => $district_id,'name' => "Chagongwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Chanjale"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibedya"]);
            Ward::create(['district_id' => $district_id,'name' => "Chakwale"]);
            Ward::create(['district_id' => $district_id,'name' => "Iyogwe"]);
        
        // Kilombero - District
        District::create(['region_id' => 14,'name' => "Kilombero",'capital' => "Kilombero",'area' => '','population' => '407,880']);

            // Kilombero Wards:
            $district_id = 72;
            Ward::create(['district_id' => $district_id,'name' => "Chisano"]);
            Ward::create(['district_id' => $district_id,'name' => "Chita"]);
            Ward::create(['district_id' => $district_id,'name' => "Idete"]);
            Ward::create(['district_id' => $district_id,'name' => "Ifakara"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibaoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mang'ula B"]);
            Ward::create(['district_id' => $district_id,'name' => "Katindiuka"]);
            Ward::create(['district_id' => $district_id,'name' => "Namwawala"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiberege"]);
            Ward::create(['district_id' => $district_id,'name' => "Kidatu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisawasawa"]);
            Ward::create(['district_id' => $district_id,'name' => "Lumeno"]);
            Ward::create(['district_id' => $district_id,'name' => "Mang'ula"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwaya"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlabani"]);
            Ward::create(['district_id' => $district_id,'name' => "Mngeta"]);
            Ward::create(['district_id' => $district_id,'name' => "Masagati"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbingu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mchombe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkula"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlimba"]);
            Ward::create(['district_id' => $district_id,'name' => "Signal"]);
            Ward::create(['district_id' => $district_id,'name' => "Viwanja Sitini"]);
            Ward::create(['district_id' => $district_id,'name' => "Igima"]);
            Ward::create(['district_id' => $district_id,'name' => "Mofu"]);
            Ward::create(['district_id' => $district_id,'name' => "Sanje"]);
            Ward::create(['district_id' => $district_id,'name' => "Uchindile"]);
            Ward::create(['district_id' => $district_id,'name' => "Utengule"]);
            Ward::create(['district_id' => $district_id,'name' => "Msolwa Station"]);
            Ward::create(['district_id' => $district_id,'name' => "Michenga"]);
            Ward::create(['district_id' => $district_id,'name' => "Lipangala"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbasa"]);
            Ward::create(['district_id' => $district_id,'name' => "Chin'anda"]);
            Ward::create(['district_id' => $district_id,'name' => "Kalengakelo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kamwene"]);

        // Kilosa - District
        District::create(['region_id' => 14,'name' => "Kilosa",'capital' => "Kilosa",'area' => '','population' => '438,175']);

            // Kilosa Wards:
            $district_id = 73;
            Ward::create(['district_id' => $district_id,'name' => "Berega"]);
            Ward::create(['district_id' => $district_id,'name' => "Chanzuru"]);
            Ward::create(['district_id' => $district_id,'name' => "Dumila"]);
            Ward::create(['district_id' => $district_id,'name' => "Kasiki"]);
            Ward::create(['district_id' => $district_id,'name' => "Kidete"]);
            Ward::create(['district_id' => $district_id,'name' => "Kidodi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilangali"]);
            Ward::create(['district_id' => $district_id,'name' => "Kimamba 'A'"]);
            Ward::create(['district_id' => $district_id,'name' => "Kimamba 'B'"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Lumbiji"]);
            Ward::create(['district_id' => $district_id,'name' => "Luhembe"]);
            Ward::create(['district_id' => $district_id,'name' => "Lumuma"]);
            Ward::create(['district_id' => $district_id,'name' => "Mabwerebwere"]);
            Ward::create(['district_id' => $district_id,'name' => "Magole"]);
            Ward::create(['district_id' => $district_id,'name' => "Magomeni"]);
            Ward::create(['district_id' => $district_id,'name' => "Magubike"]);
            Ward::create(['district_id' => $district_id,'name' => "Malolo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mamboya"]);
            Ward::create(['district_id' => $district_id,'name' => "Masanze"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbumi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mikumi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkwatani"]);
            Ward::create(['district_id' => $district_id,'name' => "Msowero"]);
            Ward::create(['district_id' => $district_id,'name' => "Rudewa"]);
            Ward::create(['district_id' => $district_id,'name' => "Ulaya"]);
            Ward::create(['district_id' => $district_id,'name' => "Uleling'ombe"]);
            Ward::create(['district_id' => $district_id,'name' => "Vidunda"]);
            Ward::create(['district_id' => $district_id,'name' => "Zombo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mamoyo"]);
        
        // Morogoro - District
        District::create(['region_id' => 14,'name' => "Morogoro",'capital' => "Morogoro",'area' => '','population' => '602,114']);

            // Morogoro Wards:
            $district_id = 74;
            Ward::create(['district_id' => $district_id,'name' => "Bigwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Boma"]);
            Ward::create(['district_id' => $district_id,'name' => "Kichangani"]);
            Ward::create(['district_id' => $district_id,'name' => "Kihonda"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilakala"]);
            Ward::create(['district_id' => $district_id,'name' => "Kingo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kingolwira"]);
            Ward::create(['district_id' => $district_id,'name' => "Mafiga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mazimbu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbuyuni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mji Kuu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mki Mpya"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlimani"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwembesongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mzinga"]);
            Ward::create(['district_id' => $district_id,'name' => "Sabasaba"]);
            Ward::create(['district_id' => $district_id,'name' => "Sultan Area"]);
            Ward::create(['district_id' => $district_id,'name' => "Tungi"]);
            Ward::create(['district_id' => $district_id,'name' => "Uwanja wa Ndege"]);
            Ward::create(['district_id' => $district_id,'name' => "Uwanja wa Taifa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mindu"]);
        
        // Mvomero - District
        District::create(['region_id' => 14,'name' => "Mvomero",'capital' => "Mvomero",'area' => '','population' => '312,109']);

            // Mvomero Wards:
            $district_id = 75;
            Ward::create(['district_id' => $district_id,'name' => "Bunduki"]);
            Ward::create(['district_id' => $district_id,'name' => "Luale"]);
            Ward::create(['district_id' => $district_id,'name' => "Diongoya"]);
            Ward::create(['district_id' => $district_id,'name' => "Doma"]);
            Ward::create(['district_id' => $district_id,'name' => "Hembeti"]);
            Ward::create(['district_id' => $district_id,'name' => "Kanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibati"]);
            Ward::create(['district_id' => $district_id,'name' => "Kikeo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kweuma"]);
            Ward::create(['district_id' => $district_id,'name' => "Langali"]);
            Ward::create(['district_id' => $district_id,'name' => "Maskati"]);
            Ward::create(['district_id' => $district_id,'name' => "Melela"]);
            Ward::create(['district_id' => $district_id,'name' => "Mhonda"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlali"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtibwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkindo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mvomero"]);
            Ward::create(['district_id' => $district_id,'name' => "Mzumbe"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyandira"]);
            Ward::create(['district_id' => $district_id,'name' => "Tchenzema"]);
            Ward::create(['district_id' => $district_id,'name' => "Msongozi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mangaye"]);
            Ward::create(['district_id' => $district_id,'name' => "Homboza"]);
            Ward::create(['district_id' => $district_id,'name' => "Lubungo"]);
            Ward::create(['district_id' => $district_id,'name' => "Dakawa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kinda"]);
            Ward::create(['district_id' => $district_id,'name' => "Pemba"]);
            Ward::create(['district_id' => $district_id,'name' => "Mziha"]);
            Ward::create(['district_id' => $district_id,'name' => "Sungaji"]);
        
        // Ulanga - District
        District::create(['region_id' => 14,'name' => "Ulanga",'capital' => "Ulanga",'area' => '','population' => '265,203']);

            // Ulanga Wards:
            $district_id = 76;
            Ward::create(['district_id' => $district_id,'name' => "Chirombola"]);
            Ward::create(['district_id' => $district_id,'name' => "Euga"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilonga"]);
            Ward::create(['district_id' => $district_id,'name' => "Iragua"]);
            Ward::create(['district_id' => $district_id,'name' => "Isongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Ketaketa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kichangani"]);
            Ward::create(['district_id' => $district_id,'name' => "Lukande"]);
            Ward::create(['district_id' => $district_id,'name' => "Lupiro"]);
            Ward::create(['district_id' => $district_id,'name' => "Mahenge"]);
            Ward::create(['district_id' => $district_id,'name' => "Mawasiliano"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbuga"]);
            Ward::create(['district_id' => $district_id,'name' => "Milola"]);
            Ward::create(['district_id' => $district_id,'name' => "Minepa"]);
            Ward::create(['district_id' => $district_id,'name' => "Msogezi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwaya"]);
            Ward::create(['district_id' => $district_id,'name' => "Nawenge"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruaha"]);
            Ward::create(['district_id' => $district_id,'name' => "Sali"]);
            Ward::create(['district_id' => $district_id,'name' => "Uponera"]);
            Ward::create(['district_id' => $district_id,'name' => "Vigoi"]);
        
        // Mtwara Region
        Region::create([
            'name' => "Mtwara",
            'capital' => "Mtwara",
            'districts' => 5,
            'keycode' => "09",
            'area' => "16,710 Km Square",
            'population' => '1,270,854',
            'postcode' => '63xxx',
            'zone' => 'Coastal'
        ]);

        // Masasi - District
        District::create(['region_id' => 15,'name' => "Masasi",'capital' => "Masasi",'area' => '','population' => '350,689']);

            // Masasi Wards:
            $district_id = 77;
            Ward::create(['district_id' => $district_id,'name' => "Chigugu"]);
            Ward::create(['district_id' => $district_id,'name' => "Chiungutwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Lipumburu"]);
            Ward::create(['district_id' => $district_id,'name' => "Lukuledi"]);
            Ward::create(['district_id' => $district_id,'name' => "Lulindi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbuyuni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mchaura"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkululu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkundi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mnavira"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpindimbi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwena"]);
            Ward::create(['district_id' => $district_id,'name' => "Namajani"]);
            Ward::create(['district_id' => $district_id,'name' => "Namalenga"]);
            Ward::create(['district_id' => $district_id,'name' => "Namatutwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Nanganga"]);
            Ward::create(['district_id' => $district_id,'name' => "Nanjota"]);
            Ward::create(['district_id' => $district_id,'name' => "Sindano"]);
        
        // Mtwara - District
        District::create(['region_id' => 15,'name' => "Mtwara",'capital' => "Mtwara",'area' => '','population' => '336,302']);

            // Mtwara Wards:
            $district_id = 78;
            Ward::create(['district_id' => $district_id,'name' => "Chikongola"]);
            Ward::create(['district_id' => $district_id,'name' => "Chuno"]);
            Ward::create(['district_id' => $district_id,'name' => "Likombe"]);
            Ward::create(['district_id' => $district_id,'name' => "Majengo"]);
            Ward::create(['district_id' => $district_id,'name' => "Railway"]);
            Ward::create(['district_id' => $district_id,'name' => "Shangani"]);
            Ward::create(['district_id' => $district_id,'name' => "Ufukoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Vigaeni"]);
            Ward::create(['district_id' => $district_id,'name' => "Rahaleo"]);
            Ward::create(['district_id' => $district_id,'name' => "Naliendele"]);
            Ward::create(['district_id' => $district_id,'name' => "Mitengo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtonya"]);
            Ward::create(['district_id' => $district_id,'name' => "Magengeni"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisungure"]);
            Ward::create(['district_id' => $district_id,'name' => "Jangwani"]);
        
        // Nanyumbu - District
        District::create(['region_id' => 15,'name' => "Nanyumbu",'capital' => "Nanyumbu",'area' => '','population' => '150,087']);

            // Nanyumbu Wards:
            // $district_id = 0;
            // Ward::create(['district_id' => $district_id,'name' => ""]);
        
        // Newala - District
        District::create(['region_id' => 15,'name' => "Newala",'capital' => "Newala",'area' => '','population' => '205,492']);

            // Newala Wards:
            $district_id = 79;
            Ward::create(['district_id' => $district_id,'name' => "Chilangala"]);
            Ward::create(['district_id' => $district_id,'name' => "Chitekete"]);
            Ward::create(['district_id' => $district_id,'name' => "Chiwonga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitangari"]);
            Ward::create(['district_id' => $district_id,'name' => "Luchingu"]);
            Ward::create(['district_id' => $district_id,'name' => "Makote"]);
            Ward::create(['district_id' => $district_id,'name' => "Makukwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Malatu"]);
            Ward::create(['district_id' => $district_id,'name' => "Maputi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mchemo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mcholi I"]);
            Ward::create(['district_id' => $district_id,'name' => "Mcholi II"]);
            Ward::create(['district_id' => $district_id,'name' => "Mcholi III"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkunye"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkwedu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mnekachi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mnyambe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtopwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Namiyonga"]);
            Ward::create(['district_id' => $district_id,'name' => "Nanguruwe"]);

        // Tandahimba - District
        District::create(['region_id' => 15,'name' => "Tandahimba",'capital' => "Tandahimba",'area' => '','population' => '227,514']);

            // Tandahimba Wards:
            $district_id = 80;
            Ward::create(['district_id' => $district_id,'name' => "Chaume"]);
            Ward::create(['district_id' => $district_id,'name' => "Chigunge"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitama"]);
            Ward::create(['district_id' => $district_id,'name' => "Luagala"]);
            Ward::create(['district_id' => $district_id,'name' => "Lukokoda"]);
            Ward::create(['district_id' => $district_id,'name' => "Lyenje"]);
            Ward::create(['district_id' => $district_id,'name' => "Mahuta"]);
            Ward::create(['district_id' => $district_id,'name' => "Maundo"]);
            Ward::create(['district_id' => $district_id,'name' => "Michenjele"]);
            Ward::create(['district_id' => $district_id,'name' => "Mihambwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Milongodi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mdimba Mnyoma"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkonojowano"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkoreha"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkwiti"]);
            Ward::create(['district_id' => $district_id,'name' => "Mnyama"]);
            Ward::create(['district_id' => $district_id,'name' => "Namikupa"]);
            Ward::create(['district_id' => $district_id,'name' => "Nanhyanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Naputa"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngunja"]);
            Ward::create(['district_id' => $district_id,'name' => "Tandahimba"]);
            Ward::create(['district_id' => $district_id,'name' => "Kishumundu"]);

        // Mwanza Region
        Region::create([
            'name' => "Mwanza",
            'capital' => "Mwanza",
            'districts' => 7,
            'keycode' => "19",
            'area' => "9,467 Km Square",
            'population' => '2,772,509',
            'postcode' => '33xxx',
            'zone' => 'Lake'
        ]);

        // Ilemela - District
        District::create(['region_id' => 16,'name' => "Ilemela",'capital' => "Ilemela",'area' => '','population' => '343,001']);

            // Ilemela Wards:
            $district_id = 81;
            Ward::create(['district_id' => $district_id,'name' => "Bugogwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Buswelu"]);
            Ward::create(['district_id' => $district_id,'name' => "Buzuruga"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilemela"]);
            Ward::create(['district_id' => $district_id,'name' => "Ibungilo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kawekano"]);
            Ward::create(['district_id' => $district_id,'name' => "Kahama"]);
            Ward::create(['district_id' => $district_id,'name' => "Kayenze"]);
            Ward::create(['district_id' => $district_id,'name' => "Kirumba"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitangiri"]);
            Ward::create(['district_id' => $district_id,'name' => "Mecco"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakato"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamanoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamangoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyasaka"]);
            Ward::create(['district_id' => $district_id,'name' => "Pasiansi"]);
            Ward::create(['district_id' => $district_id,'name' => "Sangabuye"]);
            Ward::create(['district_id' => $district_id,'name' => "Shibula"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiseke"]);
        
        // Kwimba - District
        District::create(['region_id' => 16,'name' => "Kwimba",'capital' => "Kwimba",'area' => '','population' => '406,509']);

            // Kwimba Wards:
            $district_id = 82;
            Ward::create(['district_id' => $district_id,'name' => "Bugando"]);
            Ward::create(['district_id' => $district_id,'name' => "Bungulwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Bupamwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Fukalo"]);
            Ward::create(['district_id' => $district_id,'name' => "Hungumalwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Igongwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilula"]);
            Ward::create(['district_id' => $district_id,'name' => "Iseni"]);
            Ward::create(['district_id' => $district_id,'name' => "Kikubiji"]);
            Ward::create(['district_id' => $district_id,'name' => "Lyoma"]);
            Ward::create(['district_id' => $district_id,'name' => "Maligisu"]);
            Ward::create(['district_id' => $district_id,'name' => "Malya"]);
            Ward::create(['district_id' => $district_id,'name' => "Mantare"]);
            Ward::create(['district_id' => $district_id,'name' => "Mhande"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwabomba"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwagi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwakilambiti"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamala"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwandu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwang'halanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwankulwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ng'hundi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngudu"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngulla"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkalalo"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyambiti"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamilama"]);
            Ward::create(['district_id' => $district_id,'name' => "Shilembo"]);
            Ward::create(['district_id' => $district_id,'name' => "Sumve"]);
            Ward::create(['district_id' => $district_id,'name' => "Walla"]);
        
        // Magu - District
        District::create(['region_id' => 16,'name' => "Magu",'capital' => "Magu",'area' => '','population' => '299,759']);

            // Magu Wards:
            $district_id = 83;
            Ward::create(['district_id' => $district_id,'name' => "Badugu"]);
            Ward::create(['district_id' => $district_id,'name' => "Bujashi"]);
            Ward::create(['district_id' => $district_id,'name' => "Igalukilo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kabita"]);
            Ward::create(['district_id' => $district_id,'name' => "Kahangara"]);
            Ward::create(['district_id' => $district_id,'name' => "Kalemela"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiloleni"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisesa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitongosima"]);
            Ward::create(['district_id' => $district_id,'name' => "Kongolo"]);
            Ward::create(['district_id' => $district_id,'name' => "Lubugu"]);
            Ward::create(['district_id' => $district_id,'name' => "Lutale"]);
            Ward::create(['district_id' => $district_id,'name' => "Mahu Mjini"]);
            Ward::create(['district_id' => $district_id,'name' => "Malili"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkula"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamabanza"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamanyili"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngasamo"]);
            Ward::create(['district_id' => $district_id,'name' => "Ng'haya"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkungulu"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyaluhande"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyanguge"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyigogo"]);
            Ward::create(['district_id' => $district_id,'name' => "Shigala"]);
            Ward::create(['district_id' => $district_id,'name' => "Shishani"]);
            Ward::create(['district_id' => $district_id,'name' => "Sukuma"]);
            Ward::create(['district_id' => $district_id,'name' => "Lugeye"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngashe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilungu"]);
        
        // Misungwi - District
        District::create(['region_id' => 16,'name' => "Misungwi",'capital' => "Misungwi",'area' => '','population' => '351,607']);

            // Misungwi Wards:
            $district_id = 84;
            Ward::create(['district_id' => $district_id,'name' => "Buhingo"]);
            Ward::create(['district_id' => $district_id,'name' => "Bulemeji"]);
            Ward::create(['district_id' => $district_id,'name' => "Busongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Fella"]);
            Ward::create(['district_id' => $district_id,'name' => "Gulumungu"]);
            Ward::create(['district_id' => $district_id,'name' => "Idetemya"]);
            Ward::create(['district_id' => $district_id,'name' => "Igokelo"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilujamate"]);
            Ward::create(['district_id' => $district_id,'name' => "Isenengeja"]);
            Ward::create(['district_id' => $district_id,'name' => "Isesa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kanyelele"]);
            Ward::create(['district_id' => $district_id,'name' => "Kasololo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kijima"]);
            Ward::create(['district_id' => $district_id,'name' => "Koromije"]);
            Ward::create(['district_id' => $district_id,'name' => "Lubili"]);
            Ward::create(['district_id' => $district_id,'name' => "Mabuki"]);
            Ward::create(['district_id' => $district_id,'name' => "Mamaye"]);
            Ward::create(['district_id' => $district_id,'name' => "Misasi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbarika"]);
            Ward::create(['district_id' => $district_id,'name' => "Misungwi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwaniko"]);
            Ward::create(['district_id' => $district_id,'name' => "Nhundulu"]);
            Ward::create(['district_id' => $district_id,'name' => "Shilalo"]);
            Ward::create(['district_id' => $district_id,'name' => "Sumbugu"]);
            Ward::create(['district_id' => $district_id,'name' => "Ukiriguru"]);
            Ward::create(['district_id' => $district_id,'name' => "Usagara"]);

        // Nyamagana - District
        District::create(['region_id' => 16,'name' => "Nyamagana",'capital' => "Nyamagana",'area' => '','population' => '363,452']);

            // Nyamagana Wards:
            $district_id = 85;
            Ward::create(['district_id' => $district_id,'name' => "Buhongwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Butimba"]);
            Ward::create(['district_id' => $district_id,'name' => "Igogo"]);
            Ward::create(['district_id' => $district_id,'name' => "Igoma"]);
            Ward::create(['district_id' => $district_id,'name' => "Isamilo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mahina"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbugani"]);
            Ward::create(['district_id' => $district_id,'name' => "Mirongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkolani"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkuyuni"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamagana"]);
            Ward::create(['district_id' => $district_id,'name' => "Pamba"]);
        
        // Sengerema - District
        District::create(['region_id' => 16,'name' => "Sengerema",'capital' => "Sengerema",'area' => '','population' => '663,034']);

            // Sengerema Wards:
            $district_id = 86;
            Ward::create(['district_id' => $district_id,'name' => "Bulyaheke"]);
            Ward::create(['district_id' => $district_id,'name' => "Bupandwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Busisi"]);
            Ward::create(['district_id' => $district_id,'name' => "Buyangu"]);
            Ward::create(['district_id' => $district_id,'name' => "Buzilasoga"]);
            Ward::create(['district_id' => $district_id,'name' => "Chifunfu"]);
            Ward::create(['district_id' => $district_id,'name' => "Ibisabageni"]);
            Ward::create(['district_id' => $district_id,'name' => "Igalula"]);
            Ward::create(['district_id' => $district_id,'name' => "Igulumuki"]);
            Ward::create(['district_id' => $district_id,'name' => "irenza Shuleni"]);
            Ward::create(['district_id' => $district_id,'name' => "Kafunzo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kagunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kalebezo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kasenyi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kasungamile"]);
            Ward::create(['district_id' => $district_id,'name' => "Katunguru"]);
            Ward::create(['district_id' => $district_id,'name' => "Katwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Kazunzu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kishinda"]);
            Ward::create(['district_id' => $district_id,'name' => "Lugata"]);
            Ward::create(['district_id' => $district_id,'name' => "Maisome"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwabaluhi"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakaliro"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakasasa"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakasungwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamatongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamazugo"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyampande"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyampulukano"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyanzenda"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyatukara"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyehunge"]);
            Ward::create(['district_id' => $district_id,'name' => "Sima"]);
            Ward::create(['district_id' => $district_id,'name' => "Tabaruka"]);
        
        // Ukerewe - District
        District::create(['region_id' => 16,'name' => "Ukerewe",'capital' => "Ukerewe",'area' => '','population' => '345,147']);

            // Ukerewe Wards:
            $district_id = 87;
            Ward::create(['district_id' => $district_id,'name' => "Bukanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Bukiko"]);
            Ward::create(['district_id' => $district_id,'name' => "Bukindo"]);
            Ward::create(['district_id' => $district_id,'name' => "Bukongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Bukungu"]);
            Ward::create(['district_id' => $district_id,'name' => "Bwiro"]);
            Ward::create(['district_id' => $district_id,'name' => "Bwisya"]);
            Ward::create(['district_id' => $district_id,'name' => "Igalla"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilangala"]);
            Ward::create(['district_id' => $district_id,'name' => "Irugwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kagera"]);
            Ward::create(['district_id' => $district_id,'name' => "Kagunguli"]);
            Ward::create(['district_id' => $district_id,'name' => "Kagera"]);
            Ward::create(['district_id' => $district_id,'name' => "Kagunguli"]);
            Ward::create(['district_id' => $district_id,'name' => "Kakerege"]);
            Ward::create(['district_id' => $district_id,'name' => "Kakuru"]);
            Ward::create(['district_id' => $district_id,'name' => "Mukituntu"]);
            Ward::create(['district_id' => $district_id,'name' => "Muriti"]);
            Ward::create(['district_id' => $district_id,'name' => "Murutunguru"]);
            Ward::create(['district_id' => $district_id,'name' => "Nakatunguru"]);
            Ward::create(['district_id' => $district_id,'name' => "Namagondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Namilembe"]);
            Ward::create(['district_id' => $district_id,'name' => "Nansio"]);
            Ward::create(['district_id' => $district_id,'name' => "Nduruma"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngoma"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkilizya"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamanga"]);
        
        // Njombe Region
        Region::create([
            'name' => "Njombe",
            'capital' => "Njombe",
            'districts' => 7,
            'keycode' => "22",
            'area' => "21,347 Km Square",
            'population' => '702,097',
            'postcode' => '59xxx',
            'zone' => 'Southern Highlands'
        ]);

        // Ludewa - District
        District::create(['region_id' => 17,'name' => "Ludewa",'capital' => "Ludewa",'area' => '','population' => '133,218']);

            // Ludewa Wards:
            $district_id = 88;
            Ward::create(['district_id' => $district_id,'name' => "Ibumi"]);
            Ward::create(['district_id' => $district_id,'name' => "Iwela"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Lifuma"]);
            Ward::create(['district_id' => $district_id,'name' => "Luana"]);
            Ward::create(['district_id' => $district_id,'name' => "Ludende"]);
            Ward::create(['district_id' => $district_id,'name' => "Ludewa"]);
            Ward::create(['district_id' => $district_id,'name' => "Lugarawa"]);
            Ward::create(['district_id' => $district_id,'name' => "Luilo"]);
            Ward::create(['district_id' => $district_id,'name' => "Lumbila"]);
            Ward::create(['district_id' => $district_id,'name' => "Lupanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Lupingu"]);
            Ward::create(['district_id' => $district_id,'name' => "Madilu"]);
            Ward::create(['district_id' => $district_id,'name' => "Madope"]);
            Ward::create(['district_id' => $district_id,'name' => "Makonde"]);
            Ward::create(['district_id' => $district_id,'name' => "Manda"]);
            Ward::create(['district_id' => $district_id,'name' => "Masasi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mavanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mawengi"]);
            Ward::create(['district_id' => $district_id,'name' => "Milo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkongobaki"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlangali"]);
            Ward::create(['district_id' => $district_id,'name' => "Mundindi"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkomang'ombe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruhuhu"]);
            Ward::create(['district_id' => $district_id,'name' => "Lubonde"]);
        
        // Makambako Town - District
        District::create(['region_id' => 17,'name' => "Makambako Town",'capital' => "Makambako",'area' => '','population' => '93,827']);

            // Makambako Town Wards:
            $district_id = 89;
            Ward::create(['district_id' => $district_id,'name' => "Kitandililo"]);
            Ward::create(['district_id' => $district_id,'name' => "Lyamkena"]);
            Ward::create(['district_id' => $district_id,'name' => "Mahongole"]);
            Ward::create(['district_id' => $district_id,'name' => "Mjimwema"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlowa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwembetogwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Ubena"]);
            Ward::create(['district_id' => $district_id,'name' => "Utengule"]);

        // Makete - District
        District::create(['region_id' => 17,'name' => "Makete",'capital' => "Makete",'area' => '','population' => '97,266']);

            // Makete Wards:
            $district_id = 90;
            Ward::create(['district_id' => $district_id,'name' => "Bulongwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikuwo"]);
            Ward::create(['district_id' => $district_id,'name' => "Iniho"]);
            Ward::create(['district_id' => $district_id,'name' => "Ipelele"]);
            Ward::create(['district_id' => $district_id,'name' => "Ipepo"]);
            Ward::create(['district_id' => $district_id,'name' => "Iwawa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kigulu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kipagalo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitulo"]);
            Ward::create(['district_id' => $district_id,'name' => "Lupalilo"]);
            Ward::create(['district_id' => $district_id,'name' => "Lupila"]);
            Ward::create(['district_id' => $district_id,'name' => "Mang'oto"]);
            Ward::create(['district_id' => $district_id,'name' => "Matamba"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbalatse"]);
            Ward::create(['district_id' => $district_id,'name' => "Mfumbi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlondwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ukwama"]);
            Ward::create(['district_id' => $district_id,'name' => "Luwumbu"]);
            Ward::create(['district_id' => $district_id,'name' => "Tandala"]);
            Ward::create(['district_id' => $district_id,'name' => "Isapulano"]);
            Ward::create(['district_id' => $district_id,'name' => "Kigala"]);
            Ward::create(['district_id' => $district_id,'name' => "Lupalilo"]);

        // Njombe Rural - District
        District::create(['region_id' => 17,'name' => "Njombe Rural",'capital' => "Njombe Rural",'area' => '','population' => '85,747']);

            // Njombe Rural Wards:
            $district_id = 91;
            Ward::create(['district_id' => $district_id,'name' => "Idamba"]);
            Ward::create(['district_id' => $district_id,'name' => "Igongolo"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikuna"]);
            Ward::create(['district_id' => $district_id,'name' => "Kidegembye"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitandililo"]);
            Ward::create(['district_id' => $district_id,'name' => "Lupembe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mahongole"]);
            Ward::create(['district_id' => $district_id,'name' => "Mfriga"]);
            Ward::create(['district_id' => $district_id,'name' => "Matembwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Matola"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtwango"]);
            Ward::create(['district_id' => $district_id,'name' => "Ninga"]);
            Ward::create(['district_id' => $district_id,'name' => "Utengule"]);
        
        // Njombe Urban - District
        District::create(['region_id' => 17,'name' => "Njombe Urban",'capital' => "Njombe Urban",'area' => '','population' => '130,223']);

            // Njombe Urban Wards:
            $district_id = 92;
            Ward::create(['district_id' => $district_id,'name' => "Ihanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Iwungilo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kifanya"]);
            Ward::create(['district_id' => $district_id,'name' => "Lugenge"]);
            Ward::create(['district_id' => $district_id,'name' => "Luponde"]);
            Ward::create(['district_id' => $district_id,'name' => "Lyamkena"]);
            Ward::create(['district_id' => $district_id,'name' => "Matola"]);
            Ward::create(['district_id' => $district_id,'name' => "Mji Mwema"]);
            Ward::create(['district_id' => $district_id,'name' => "Mjimwema"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlowa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwembetogwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Njomnbe Mjini"]);
            Ward::create(['district_id' => $district_id,'name' => "Ramadhani"]);
            Ward::create(['district_id' => $district_id,'name' => "Ubena"]);
            Ward::create(['district_id' => $district_id,'name' => "Utalingolo"]);
            Ward::create(['district_id' => $district_id,'name' => "Uwemba"]);
            Ward::create(['district_id' => $district_id,'name' => "Yakobi"]);
        
        // Wanging'ombe - District
        District::create(['region_id' => 17,'name' => "Wanging'ombe",'capital' => "Wanging'ombe",'area' => '','population' => '161,816']);

            // Wanging'ombe Wards:
            $district_id = 93;
            Ward::create(['district_id' => $district_id,'name' => "Igima"]);
            Ward::create(['district_id' => $district_id,'name' => "Igosi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilembula"]);
            Ward::create(['district_id' => $district_id,'name' => "Imalinyi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kidugala"]);
            Ward::create(['district_id' => $district_id,'name' => "Kijombe"]);
            Ward::create(['district_id' => $district_id,'name' => "Kipengele"]);
            Ward::create(['district_id' => $district_id,'name' => "Luduga"]);
            Ward::create(['district_id' => $district_id,'name' => "Makoga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mdandu"]);
            Ward::create(['district_id' => $district_id,'name' => "Saja"]);
            Ward::create(['district_id' => $district_id,'name' => "Uhambule"]);
            Ward::create(['district_id' => $district_id,'name' => "Ulembwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Usuka"]);
            Ward::create(['district_id' => $district_id,'name' => "Wangama"]);
            Ward::create(['district_id' => $district_id,'name' => "Wanging'ombe"]);
        
        // Pemba Kaskazini Region
        Region::create([
            'name' => "Pemba Kaskazini",
            'capital' => "Wete",
            'districts' => 2,
            'keycode' => "00",
            'area' => "574 Km Square",
            'population' => '195,116',
            'postcode' => '74xxx',
            'zone' => 'Zanzibar'
        ]);

        // Micheweni - District
        District::create(['region_id' => 18,'name' => "Micheweni",'capital' => "Micheweni",'area' => '','population' => '103,816']);

            // Micheweni Wards:
            $district_id = 94;
            Ward::create(['district_id' => $district_id,'name' => "Kinowe"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiuyu Maziwa Ng'ombe"]);
            Ward::create(['district_id' => $district_id,'name' => "Konde"]);
            Ward::create(['district_id' => $district_id,'name' => "Mgogoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Micheweni"]);
            Ward::create(['district_id' => $district_id,'name' => "Msuka"]);
            Ward::create(['district_id' => $district_id,'name' => "Shumba Viamboni"]);
            Ward::create(['district_id' => $district_id,'name' => "Tumbe"]);
            Ward::create(['district_id' => $district_id,'name' => "Wingiwi Mapofu"]);
            Ward::create(['district_id' => $district_id,'name' => "Wingwi Njuguni"]);

        // Wete - District
        District::create(['region_id' => 18,'name' => "Wete",'capital' => "Wete",'area' => '','population' => '107,916']);

            // Wete Wards:
            $district_id = 95;
            Ward::create(['district_id' => $district_id,'name' => "Bopwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Fundo"]);
            Ward::create(['district_id' => $district_id,'name' => "Gando"]);
            Ward::create(['district_id' => $district_id,'name' => "Jadida"]);
            Ward::create(['district_id' => $district_id,'name' => "Kangagani"]);
            Ward::create(['district_id' => $district_id,'name' => "Kipangani"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisiwani"]);
            Ward::create(['district_id' => $district_id,'name' => "Kizimbani"]);
            Ward::create(['district_id' => $district_id,'name' => "Kojani"]);
            Ward::create(['district_id' => $district_id,'name' => "Limbani"]);
            Ward::create(['district_id' => $district_id,'name' => "Mchanga Mdogo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtambwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ole"]);
            Ward::create(['district_id' => $district_id,'name' => "Pandani"]);
            Ward::create(['district_id' => $district_id,'name' => "Selemu"]);
            Ward::create(['district_id' => $district_id,'name' => "Shengejuu"]);
            Ward::create(['district_id' => $district_id,'name' => "Utaani"]);
        
        // Pemba Kusini Region
        Region::create([
            'name' => "Pemba Kusini",
            'capital' => "Chake Chake",
            'districts' => 2,
            'keycode' => "00",
            'area' => "332 Km Square",
            'population' => '195,116',
            'postcode' => '74xxx',
            'zone' => 'Zanzibar'
        ]);

        // Chake Chake - District
        District::create(['region_id' => 19,'name' => "Chake Chake",'capital' => "Chake Chake",'area' => '','population' => '97,249']);

            // Chake Chake Wards:
            // $district_id = 00;
            // Ward::create(['district_id' => $district_id,'name' => ""]);
        
        // Mkoani - District
        District::create(['region_id' => 19,'name' => "Mkoani",'capital' => "Mkoani",'area' => '','population' => '97,867']);

            // Mkoani Wards:
            // $district_id = 00;
            // Ward::create(['district_id' => $district_id,'name' => ""])

        // Pwani Region
        Region::create([
            'name' => "Pwani",
            'capital' => "Kibaha",
            'districts' => 7,
            'keycode' => "06",
            'area' => "32,547 Km Square",
            'population' => '1,098,668',
            'postcode' => '61xxx',
            'zone' => 'Coastal'
        ]);

        // Bagamoyo - District
        District::create(['region_id' => 20,'name' => "Bagamoyo",'capital' => "Bagamoyo",'area' => '','population' => '311,740']);

            // Bagamoyo Wards:
            $district_id = 96;
            Ward::create(['district_id' => $district_id,'name' => "Bago"]);
            Ward::create(['district_id' => $district_id,'name' => "Chalinze"]);
            Ward::create(['district_id' => $district_id,'name' => "Chasimba"]);
            Ward::create(['district_id' => $district_id,'name' => "Dunda"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibindu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiromo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiwangwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Lugoba"]);
            Ward::create(['district_id' => $district_id,'name' => "Magomeni"]);
            Ward::create(['district_id' => $district_id,'name' => "Masuguru"]);
            Ward::create(['district_id' => $district_id,'name' => "Matimbwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Msata"]);
            Ward::create(['district_id' => $district_id,'name' => "Msinune"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwavi"]);
            Ward::create(['district_id' => $district_id,'name' => "Yombo"]);
            Ward::create(['district_id' => $district_id,'name' => "Zinga"]);
        
        // Kibaha - District
        District::create(['region_id' => 20,'name' => "Kibaha",'capital' => "Kibaha",'area' => '','population' => '198,697']);

            // Kibaha Wards:
            $district_id = 97;
            Ward::create(['district_id' => $district_id,'name' => "Kibaha"]);
            Ward::create(['district_id' => $district_id,'name' => "Kwala"]);
            Ward::create(['district_id' => $district_id,'name' => "Magindu"]);
            Ward::create(['district_id' => $district_id,'name' => "Maili Mmoja"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlandizi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruvu"]);
            Ward::create(['district_id' => $district_id,'name' => "Soga"]);
            Ward::create(['district_id' => $district_id,'name' => "Tumbi"]);
            Ward::create(['district_id' => $district_id,'name' => "Visiga"]);
        
        // Kisarawe - District
        District::create(['region_id' => 20,'name' => "Kisarawe",'capital' => "Kisarawe",'area' => '','population' => '101,598']);

            // Kisarawe Wards:
            $district_id = 98;
            Ward::create(['district_id' => $district_id,'name' => "Cholesamvula"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibuta"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiluvya"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisarawe"]);
            Ward::create(['district_id' => $district_id,'name' => "Kuruhi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mafinzi"]);
            Ward::create(['district_id' => $district_id,'name' => "Maneromango"]);
            Ward::create(['district_id' => $district_id,'name' => "Boga"]);
            Ward::create(['district_id' => $district_id,'name' => "Marui"]);
            Ward::create(['district_id' => $district_id,'name' => "Marumbo"]);
            Ward::create(['district_id' => $district_id,'name' => "Masaki"]);
            Ward::create(['district_id' => $district_id,'name' => "Msanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Msimbu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mzenga"]);
            Ward::create(['district_id' => $district_id,'name' => "Vihingo"]);
            Ward::create(['district_id' => $district_id,'name' => "Vikumbulu"]);
        
        // Mafia - District
        District::create(['region_id' => 20,'name' => "Mafia",'capital' => "Mafia",'area' => '','population' => '46,438']);

            // Mafia Wards:
            $district_id = 99;
            Ward::create(['district_id' => $district_id,'name' => "Baleni"]);
            Ward::create(['district_id' => $district_id,'name' => "Jibondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilindoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Kirongwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiegeani"]);
            Ward::create(['district_id' => $district_id,'name' => "Mibulani"]);
            Ward::create(['district_id' => $district_id,'name' => "Mafia Island"]);

        // Mkuranga - District
        District::create(['region_id' => 20,'name' => "Mkuranga",'capital' => "Mkuranga",'area' => '','population' => '222,921']);

            // Mkuranga Wards:
            $district_id = 100;
            Ward::create(['district_id' => $district_id,'name' => "Bupu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kimanzichana"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisiju"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitomondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Lukanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Magawa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbezi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkamba"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkuranga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwalusembe"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamato"]);
            Ward::create(['district_id' => $district_id,'name' => "Panzuo"]);
            Ward::create(['district_id' => $district_id,'name' => "Shungubweni"]);
            Ward::create(['district_id' => $district_id,'name' => "Tambani"]);
            Ward::create(['district_id' => $district_id,'name' => "Vikindu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiparang'anda"]);
            Ward::create(['district_id' => $district_id,'name' => "Njianne"]);
            Ward::create(['district_id' => $district_id,'name' => "Vianzi"]);

        // Rufiji - District
        District::create(['region_id' => 20,'name' => "Rufiji",'capital' => "Rufiji",'area' => '','population' => '217,274']);

            // Rufiji Wards:
            $district_id = 101;
            Ward::create(['district_id' => $district_id,'name' => "Bungu"]);
            Ward::create(['district_id' => $district_id,'name' => "Chumbi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikwiriri"]);
            Ward::create(['district_id' => $district_id,'name' => "Kibiti"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiongoroni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mahege"]);
            Ward::create(['district_id' => $district_id,'name' => "Maparoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbuchi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbwara"]);
            Ward::create(['district_id' => $district_id,'name' => "Mchukwi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mgomba"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtunda"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwaseni"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngorongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruaruke"]);
            Ward::create(['district_id' => $district_id,'name' => "Salale"]);
            Ward::create(['district_id' => $district_id,'name' => "Umwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Utete"]);
        
        // Rukwa Region
        Region::create([
            'name' => "Rukwa",
            'capital' => "Sumbawanga",
            'districts' => 4,
            'keycode' => "15",
            'area' => "22,792 Km Square",
            'population' => '1,004,539',
            'postcode' => '55xxx',
            'zone' => 'Southern Highlands'
        ]);

        // Kalambo - District
        District::create(['region_id' => 21,'name' => "Kalambo",'capital' => "Matai",'area' => '','population' => '207,700']);

            // Kalambo Wards:
            $district_id = 102;
            Ward::create(['district_id' => $district_id,'name' => "Kalambazite"]);
            Ward::create(['district_id' => $district_id,'name' => "Kasanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Katazi"]);
            Ward::create(['district_id' => $district_id,'name' => "Katete"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisumba"]);
            Ward::create(['district_id' => $district_id,'name' => "Legeza Mwendo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mambwe Kenya"]);
            Ward::create(['district_id' => $district_id,'name' => "Mambwe Nkoswe"]);
            Ward::create(['district_id' => $district_id,'name' => "Matai"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkali"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkowe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mnamba"]);
            Ward::create(['district_id' => $district_id,'name' => "Msanzi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwazye"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwimbi"]);
            Ward::create(['district_id' => $district_id,'name' => "Sopa"]);
            Ward::create(['district_id' => $district_id,'name' => "Ulumi"]);
        
        // Lyamba lay Mfipa - District
        District::create(['region_id' => 21,'name' => "Lyamba lya Mfipa",'capital' => "Mtowisa",'area' => '','population' => '162,557']);

            // Lyamba lay Mfipa Wards:
            // $district_id = 0;
            // Ward::create(['district_id' => $district_id,'name' => ""]);

        // Nkasi - District
        District::create(['region_id' => 21,'name' => "Nkasi",'capital' => "Namanyere",'area' => '','population' => '281,200']);

            // Nkasi Wards:
            $district_id = 103;
            Ward::create(['district_id' => $district_id,'name' => "Chala"]);
            Ward::create(['district_id' => $district_id,'name' => "Isale"]);
            Ward::create(['district_id' => $district_id,'name' => "Kabwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Kala"]);
            Ward::create(['district_id' => $district_id,'name' => "Kate"]);
            Ward::create(['district_id' => $district_id,'name' => "Kipande"]);
            Ward::create(['district_id' => $district_id,'name' => "Kipili"]);
            Ward::create(['district_id' => $district_id,'name' => "Kirando"]);
            Ward::create(['district_id' => $district_id,'name' => "Korongwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkwamba"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtenga"]);
            Ward::create(['district_id' => $district_id,'name' => "Namanyere"]);
            Ward::create(['district_id' => $district_id,'name' => "Ninde"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkandasi"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkomolo"]);
            Ward::create(['district_id' => $district_id,'name' => "Sintali"]);
            Ward::create(['district_id' => $district_id,'name' => "Wampembe"]);
        
        // Sumbawanga - District
        District::create(['region_id' => 21,'name' => "Sumbawanga",'capital' => "Sumbawanga",'area' => '','population' => '353,082']);

            // Sumbawanga Wards:
            $district_id = 104;
            Ward::create(['district_id' => $district_id,'name' => "Izia"]);
            Ward::create(['district_id' => $district_id,'name' => "Kasense"]);
            Ward::create(['district_id' => $district_id,'name' => "Katandala"]);
            Ward::create(['district_id' => $district_id,'name' => "Kizwite / Chanji"]);
            Ward::create(['district_id' => $district_id,'name' => "Malangali"]);
            Ward::create(['district_id' => $district_id,'name' => "Matanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mazwi"]);
            Ward::create(['district_id' => $district_id,'name' => "Milanzi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mollo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtendo"]);
            Ward::create(['district_id' => $district_id,'name' => "Old Sumbawanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Pito"]);
            Ward::create(['district_id' => $district_id,'name' => "Senga"]);
        
        // Ruvuma Region
        Region::create([
            'name' => "Ruvuma",
            'capital' => "Songea",
            'districts' => 6,
            'keycode' => "10",
            'area' => "63,669 Km Square",
            'population' => '1,376,891',
            'postcode' => '57xxx',
            'zone' => 'Southern Highlands'
        ]);

        // Mbinga - District
        District::create(['region_id' => 22,'name' => "Mbinga",'capital' => "Mbinga",'area' => '','population' => '353,683']);

            // Mbinga Wards:
            $district_id = 105;
            Ward::create(['district_id' => $district_id,'name' => "Chiwanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Kigonsera"]);
            Ward::create(['district_id' => $district_id,'name' => "Kihagara"]);
            Ward::create(['district_id' => $district_id,'name' => "Kihangi Mahuka"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilimani"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilosa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kingerikiti"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitura"]);
            Ward::create(['district_id' => $district_id,'name' => "Langiro"]);
            Ward::create(['district_id' => $district_id,'name' => "Liparamba"]);
            Ward::create(['district_id' => $district_id,'name' => "Lipingo"]);
            Ward::create(['district_id' => $district_id,'name' => "Linda"]);
            Ward::create(['district_id' => $district_id,'name' => "Litembo"]);
            Ward::create(['district_id' => $district_id,'name' => "Lituhi"]);
            Ward::create(['district_id' => $district_id,'name' => "Litumbandyosi"]);
            Ward::create(['district_id' => $district_id,'name' => "Liuli"]);
            Ward::create(['district_id' => $district_id,'name' => "Maguu"]);
            Ward::create(['district_id' => $district_id,'name' => "Matiri"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbaha"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbamba Bay"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbangamao"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbinga Urban"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbuji"]);
            Ward::create(['district_id' => $district_id,'name' => "Mikalanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkumbi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpapa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpepai"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtipwili"]);
            Ward::create(['district_id' => $district_id,'name' => "Myangayanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Ndongosi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngima"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngumbo"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Tingi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ukata"]);
            Ward::create(['district_id' => $district_id,'name' => "Utiri"]);
        
        // Namtumbo - District
        District::create(['region_id' => 22,'name' => "Namtumbo",'capital' => "Namtumbo",'area' => '','population' => '201,639']);

            // Namtumbo Wards:
            $district_id = 106;
            Ward::create(['district_id' => $district_id,'name' => "Kitanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Ligera"]);
            Ward::create(['district_id' => $district_id,'name' => "Luchili"]);
            Ward::create(['district_id' => $district_id,'name' => "Luego"]);
            Ward::create(['district_id' => $district_id,'name' => "Lusewa"]);
            Ward::create(['district_id' => $district_id,'name' => "Magazini"]);
            Ward::create(['district_id' => $district_id,'name' => "Msisima"]);
            Ward::create(['district_id' => $district_id,'name' => "Mgombasi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkongo Nakawale"]);
            Ward::create(['district_id' => $district_id,'name' => "Msindo"]);
            Ward::create(['district_id' => $district_id,'name' => "Namabengo"]);
            Ward::create(['district_id' => $district_id,'name' => "Namtumbo"]);
            Ward::create(['district_id' => $district_id,'name' => "Rwinga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mchomoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Hanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mputa"]);
            Ward::create(['district_id' => $district_id,'name' => "Likuyuseka"]);
            Ward::create(['district_id' => $district_id,'name' => "Lisimonji"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkongo Gulioni"]);
            Ward::create(['district_id' => $district_id,'name' => "Litola"]);
            Ward::create(['district_id' => $district_id,'name' => "Linamu"]);
        
        // Nyasa - District
        District::create(['region_id' => 22,'name' => "Nyasa",'capital' => "Nyasa",'area' => '','population' => '146,160']);

        // Nyasa Wards:
        // $district_id = 0;
        // Ward::create(['district_id' => $district_id,'name' => ""]);

        // Songea - District
        District::create(['region_id' => 22,'name' => "Songea",'capital' => "Songea",'area' => '','population' => '377,130']);

            // Songea Wards:
            $district_id = 107;
            Ward::create(['district_id' => $district_id,'name' => "Bomba Mbili"]);
            Ward::create(['district_id' => $district_id,'name' => "Lizaboni"]);
            Ward::create(['district_id' => $district_id,'name' => "Majengo"]);
            Ward::create(['district_id' => $district_id,'name' => "Matarawe"]);
            Ward::create(['district_id' => $district_id,'name' => "Matogoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Mfaranyaki"]);
            Ward::create(['district_id' => $district_id,'name' => "Misufini"]);
            Ward::create(['district_id' => $district_id,'name' => "Miletete"]);
            Ward::create(['district_id' => $district_id,'name' => "Mshangano"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruhuwiko"]);
            Ward::create(['district_id' => $district_id,'name' => "Ruvuma"]);
            Ward::create(['district_id' => $district_id,'name' => "Songea Mjini"]);
            Ward::create(['district_id' => $district_id,'name' => "Subira"]);
        
        // Tunduru - District
        District::create(['region_id' => 22,'name' => "Tunduru",'capital' => "Tunduru",'area' => '','population' => '298,279']);

            // Tunduru Wards:
            $district_id = 108;
            Ward::create(['district_id' => $district_id,'name' => "Kalulu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kidodoma"]);
            Ward::create(['district_id' => $district_id,'name' => "Ligoma"]);
            Ward::create(['district_id' => $district_id,'name' => "Ligunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Lukumbule"]);
            Ward::create(['district_id' => $district_id,'name' => "Marumba"]);
            Ward::create(['district_id' => $district_id,'name' => "Matemanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbesa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mchesi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mchoteka"]);
            Ward::create(['district_id' => $district_id,'name' => "Mindu"]);
            Ward::create(['district_id' => $district_id,'name' => "Misechela"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlingoti Magharibi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mlingoti Mashariki"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtina"]);
            Ward::create(['district_id' => $district_id,'name' => "Muhuwesi"]);
            Ward::create(['district_id' => $district_id,'name' => "Nakapanya"]);
            Ward::create(['district_id' => $district_id,'name' => "Nalasi"]);
            Ward::create(['district_id' => $district_id,'name' => "Namasakata"]);
            Ward::create(['district_id' => $district_id,'name' => "Nampungu"]);
            Ward::create(['district_id' => $district_id,'name' => "Namwinyu"]);
            Ward::create(['district_id' => $district_id,'name' => "Nandembo"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngapa"]);
            Ward::create(['district_id' => $district_id,'name' => "Tuwemacho"]);

        // Shinyanga Region
        Region::create([
            'name' => "Shinyanga",
            'capital' => "Shinyanga",
            'districts' => 5,
            'keycode' => "17",
            'area' => "18,901 Km Square",
            'population' => '1,534,808',
            'postcode' => '37xxx',
            'zone' => 'Lake'
        ]);

        // Kahama Rural - District
        District::create(['region_id' => 23,'name' => "Kahama Rural",'capital' => "Kamara",'area' => '','population' => '523,802']);

            // Kahama Rural Wards:
            $district_id = 109;
            Ward::create(['district_id' => $district_id,'name' => "Bugarama"]);
            Ward::create(['district_id' => $district_id,'name' => "Bukomela"]);
            Ward::create(['district_id' => $district_id,'name' => "Bulige"]);
            Ward::create(['district_id' => $district_id,'name' => "Bulungwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Bulyanhulu"]);
            Ward::create(['district_id' => $district_id,'name' => "Busangi"]);
            Ward::create(['district_id' => $district_id,'name' => "Chambo"]);
            Ward::create(['district_id' => $district_id,'name' => "Chela"]);
            Ward::create(['district_id' => $district_id,'name' => "Chona"]);
            Ward::create(['district_id' => $district_id,'name' => "Idahina"]);
            Ward::create(['district_id' => $district_id,'name' => "Igunda"]);
            Ward::create(['district_id' => $district_id,'name' => "Igwamanoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Isaka"]);
            Ward::create(['district_id' => $district_id,'name' => "Jana"]);
            Ward::create(['district_id' => $district_id,'name' => "Kashishi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kinamapula"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisuke"]);
            Ward::create(['district_id' => $district_id,'name' => "Lunguye"]);
            Ward::create(['district_id' => $district_id,'name' => "Mapamba"]);
            Ward::create(['district_id' => $district_id,'name' => "Mega"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpunze"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwalugulu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwanase"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngaya"]);
            Ward::create(['district_id' => $district_id,'name' => "Ntobo"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyankende"]);
            Ward::create(['district_id' => $district_id,'name' => "Sabasabini"]);
            Ward::create(['district_id' => $district_id,'name' => "Segese"]);
            Ward::create(['district_id' => $district_id,'name' => "Shilela"]);
            Ward::create(['district_id' => $district_id,'name' => "Ubagwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ukune"]);
            Ward::create(['district_id' => $district_id,'name' => "Ulewe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ulowa"]);
            Ward::create(['district_id' => $district_id,'name' => "Ushetu"]);
            Ward::create(['district_id' => $district_id,'name' => "Uyogo"]);

        // Kahama Urban - District
        District::create(['region_id' => 23,'name' => "Kahama Urban",'capital' => "Kamara",'area' => '','population' => '242,208']);

            // Kahama Urban Wards:
            $district_id = 110;
            Ward::create(['district_id' => $district_id,'name' => "Busoka"]);
            Ward::create(['district_id' => $district_id,'name' => "Isagehe"]);
            Ward::create(['district_id' => $district_id,'name' => "Iyenze"]);
            Ward::create(['district_id' => $district_id,'name' => "Kagongwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Kahama Mjini"]);
            Ward::create(['district_id' => $district_id,'name' => "Kilago"]);
            Ward::create(['district_id' => $district_id,'name' => "Kinaga"]);
            Ward::create(['district_id' => $district_id,'name' => "Majengo"]);
            Ward::create(['district_id' => $district_id,'name' => "Malunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mhongolo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mhungula"]);
            Ward::create(['district_id' => $district_id,'name' => "Mondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwendakulima"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngogwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyahanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyandekwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyasubi"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyihogo"]);
            Ward::create(['district_id' => $district_id,'name' => "Wendele"]);
            Ward::create(['district_id' => $district_id,'name' => "Zongomera"]);

        // Kishapu - District
        District::create(['region_id' => 23,'name' => "Kishapu",'capital' => "Kishapu",'area' => '','population' => '272,990']);

            // Kishapu Wards:
            $district_id = 111;
            Ward::create(['district_id' => $district_id,'name' => "Bubiki"]);
            Ward::create(['district_id' => $district_id,'name' => "Bunambiyu"]);
            Ward::create(['district_id' => $district_id,'name' => "Itilima"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiloleli"]);
            Ward::create(['district_id' => $district_id,'name' => "Kishapu"]);
            Ward::create(['district_id' => $district_id,'name' => "Lagana"]);
            Ward::create(['district_id' => $district_id,'name' => "Masanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mondo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwadui Luhumbo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwakipoya"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamalasa"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngofila"]);
            Ward::create(['district_id' => $district_id,'name' => "Seke Bugoro"]);
            Ward::create(['district_id' => $district_id,'name' => "Shagihilu"]);
            Ward::create(['district_id' => $district_id,'name' => "Somagedi"]);
            Ward::create(['district_id' => $district_id,'name' => "Songwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Talaga"]);
            Ward::create(['district_id' => $district_id,'name' => "Uchunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Ukenyenge"]);

        // Shinyanga Rural - District
        District::create(['region_id' => 23,'name' => "Shinyanga Rural",'capital' => "Shinyanga",'area' => '','population' => '334,417']);

            // Shinyanga Rural Wards:
            $district_id = 112;
            Ward::create(['district_id' => $district_id,'name' => "Didia"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilola"]);
            Ward::create(['district_id' => $district_id,'name' => "Imesela"]);
            Ward::create(['district_id' => $district_id,'name' => "Iselamagazi"]);
            Ward::create(['district_id' => $district_id,'name' => "Itwangi"]);
            Ward::create(['district_id' => $district_id,'name' => "Lyabukande"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwakitolyo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamala"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwantini"]);
            Ward::create(['district_id' => $district_id,'name' => "Pandagichiza"]);
            Ward::create(['district_id' => $district_id,'name' => "Salawe"]);
            Ward::create(['district_id' => $district_id,'name' => "Samuye"]);
            Ward::create(['district_id' => $district_id,'name' => "Solwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Tinde"]);
            Ward::create(['district_id' => $district_id,'name' => "Usanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Usule"]);

        // Shinyanga Urban - District
        District::create(['region_id' => 23,'name' => "Shinyanga Urban",'capital' => "Shinyanga",'area' => '','population' => '161,391']);

            // Shinyanga Urban Wards:
            $district_id = 113;
            Ward::create(['district_id' => $district_id,'name' => "Chamaguha"]);
            Ward::create(['district_id' => $district_id,'name' => "Chibe"]);
            Ward::create(['district_id' => $district_id,'name' => "Ibadakuli"]);
            Ward::create(['district_id' => $district_id,'name' => "Ibinzamata"]);
            Ward::create(['district_id' => $district_id,'name' => "Kambarage"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitangili"]);
            Ward::create(['district_id' => $district_id,'name' => "Kizumbi"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkolandoto"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamalili"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwawaza"]);
            Ward::create(['district_id' => $district_id,'name' => "Ndala"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngokolo"]);
            Ward::create(['district_id' => $district_id,'name' => "Shinyanga Mjini"]);

        // Simiyu Region
        Region::create([
            'name' => "Simiyu",
            'capital' => "Bariadi",
            'districts' => 5,
            'keycode' => "24",
            'area' => "25,212 Km Square",
            'population' => '1,584,157',
            'postcode' => '39xxx',
            'zone' => 'Lake'
        ]);

        // Bariadi - District
        District::create(['region_id' => 24,'name' => "Bariadi",'capital' => "Bariadi",'area' => '','population' => '422,916']);

            // Bariadi Wards:
            $district_id = 114;
            Ward::create(['district_id' => $district_id,'name' => "Bariadi"]);
            Ward::create(['district_id' => $district_id,'name' => "Bumera"]);
            Ward::create(['district_id' => $district_id,'name' => "Bunamhala"]);
            Ward::create(['district_id' => $district_id,'name' => "Chinamili"]);
            Ward::create(['district_id' => $district_id,'name' => "Dutwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Gamboshi"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikungulyabashashi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kasoli"]);
            Ward::create(['district_id' => $district_id,'name' => "Kinang'weli"]);
            Ward::create(['district_id' => $district_id,'name' => "Lagangabilili"]);
            Ward::create(['district_id' => $district_id,'name' => "Lugulu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbita"]);
            Ward::create(['district_id' => $district_id,'name' => "Mhango"]);
            Ward::create(['district_id' => $district_id,'name' => "Mhunze"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwadobana"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamapalala"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwaswale"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwaubingi"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkolo"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkoma"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyakabindi"]);
            Ward::create(['district_id' => $district_id,'name' => "Sagata"]);
            Ward::create(['district_id' => $district_id,'name' => "Sakwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Sapiwi"]);
            Ward::create(['district_id' => $district_id,'name' => "Somanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Zagayu"]);

        // Busega - District
        District::create(['region_id' => 24,'name' => "Busega",'capital' => "Busega",'area' => '','population' => '203,597']);

            // Busega Wards:
            $district_id = 115;
            Ward::create(['district_id' => $district_id,'name' => "Badugu"]);
            Ward::create(['district_id' => $district_id,'name' => "Igalukilo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kabita"]);
            Ward::create(['district_id' => $district_id,'name' => "Kalemela"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiloleli"]);
            Ward::create(['district_id' => $district_id,'name' => "Lamadi"]);
            Ward::create(['district_id' => $district_id,'name' => "Lutubiga"]);
            Ward::create(['district_id' => $district_id,'name' => "Malili"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkula"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamanyili"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngasamo"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyaluhande"]);
            Ward::create(['district_id' => $district_id,'name' => "Shigala"]);

        // Itilima - District
        District::create(['region_id' => 24,'name' => "Itilima",'capital' => "Itilima",'area' => '','population' => '313,900']);

            // Itilima Wards:
            $district_id = 116;
            Ward::create(['district_id' => $district_id,'name' => "Bundalabujiga"]);
            Ward::create(['district_id' => $district_id,'name' => "Bumera"]);
            Ward::create(['district_id' => $district_id,'name' => "Chinamili"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikindiro"]);
            Ward::create(['district_id' => $district_id,'name' => "Kinang'weli"]);
            Ward::create(['district_id' => $district_id,'name' => "Lagangabilili"]);
            Ward::create(['district_id' => $district_id,'name' => "Lugulu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbita"]);
            Ward::create(['district_id' => $district_id,'name' => "Mhunze"]);
            Ward::create(['district_id' => $district_id,'name' => "Migato"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwalushu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamapalala"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamtani"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwaswale"]);
            Ward::create(['district_id' => $district_id,'name' => "Ndolelezi"]);
            Ward::create(['district_id' => $district_id,'name' => "Nhobora"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkoma"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkuyu"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyamalapa"]);
            Ward::create(['district_id' => $district_id,'name' => "Sagata"]);
            Ward::create(['district_id' => $district_id,'name' => "Sawida"]);
            Ward::create(['district_id' => $district_id,'name' => "Zagayu"]);

        // Maswa - District
        District::create(['region_id' => 24,'name' => "Maswa",'capital' => "Maswa",'area' => '','population' => '344,619']);

            // Maswa Wards:
            $district_id = 117;
            Ward::create(['district_id' => $district_id,'name' => "Badi"]);
            Ward::create(['district_id' => $district_id,'name' => "Binza"]);
            Ward::create(['district_id' => $district_id,'name' => "Buchambi"]);
            Ward::create(['district_id' => $district_id,'name' => "Budekwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Busilili"]);
            Ward::create(['district_id' => $district_id,'name' => "Dakama"]);
            Ward::create(['district_id' => $district_id,'name' => "Ipililo"]);
            Ward::create(['district_id' => $district_id,'name' => "Isanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Kadoto"]);
            Ward::create(['district_id' => $district_id,'name' => "Kulimi"]);
            Ward::create(['district_id' => $district_id,'name' => "Lalago"]);
            Ward::create(['district_id' => $district_id,'name' => "Malampaka"]);
            Ward::create(['district_id' => $district_id,'name' => "Masela"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpindo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamanenge"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamashimba"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwang'honoli"]);
            Ward::create(['district_id' => $district_id,'name' => "Nguliguli"]);
            Ward::create(['district_id' => $district_id,'name' => "Ng'wigwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyabubinza"]);
            Ward::create(['district_id' => $district_id,'name' => "Nyalikungu"]);
            Ward::create(['district_id' => $district_id,'name' => "Senani"]);
            Ward::create(['district_id' => $district_id,'name' => "Sengwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Shishiyu"]);
            Ward::create(['district_id' => $district_id,'name' => "Sukuma"]);
            Ward::create(['district_id' => $district_id,'name' => "Zanzui"]);
        
        // Meatu - District
        District::create(['region_id' => 24,'name' => "Meatu",'capital' => "Meatu",'area' => '','population' => '299,619']);

            // Meatu Wards:
            $district_id = 118;
            Ward::create(['district_id' => $district_id,'name' => "Bukundi"]);
            Ward::create(['district_id' => $district_id,'name' => "Imalaseko"]);
            Ward::create(['district_id' => $district_id,'name' => "Itinje"]);
            Ward::create(['district_id' => $district_id,'name' => "Kimali"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisesa"]);
            Ward::create(['district_id' => $district_id,'name' => "Lingeka"]);
            Ward::create(['district_id' => $district_id,'name' => "Lubiga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwabuna"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwabusalu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwabuzo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwakisandu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamalole"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamanimba"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamanongu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamishali"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwandoya"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwangundo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwanhuzi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwanjolo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwanyahina"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwasengela"]);
            Ward::create(['district_id' => $district_id,'name' => "Nghoboko"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkoma"]);
            Ward::create(['district_id' => $district_id,'name' => "Sakasaka"]);
            Ward::create(['district_id' => $district_id,'name' => "Tindabuligi"]);

        // Singida Region
        Region::create([
            'name' => "Singida",
            'capital' => "Singida",
            'districts' => 6,
            'keycode' => "13",
            'area' => "49,340 Km Square",
            'population' => '1,370,637',
            'postcode' => '43xxx',
            'zone' => 'Central'
        ]);

        // Iramba - District
        District::create(['region_id' => 25,'name' => "Iramba",'capital' => "Iramba",'area' => '','population' => '236,282']);

            // Iramba Wards:
            $district_id = 119;
            Ward::create(['district_id' => $district_id,'name' => "Urughu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtekente"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtoa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mgongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Shelui"]);
            Ward::create(['district_id' => $district_id,'name' => "Nitwike"]);
            Ward::create(['district_id' => $district_id,'name' => "Tulya"]);
            Ward::create(['district_id' => $district_id,'name' => "Kidaru"]);
            Ward::create(['district_id' => $district_id,'name' => "Kisiriri"]);
            Ward::create(['district_id' => $district_id,'name' => "Kiomboi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kinampanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Ulemo"]);
            Ward::create(['district_id' => $district_id,'name' => "Kyengege"]);
            Ward::create(['district_id' => $district_id,'name' => "Ndago"]);
            Ward::create(['district_id' => $district_id,'name' => "Mbelekese"]);
            Ward::create(['district_id' => $district_id,'name' => "Kaselya"]);
            Ward::create(['district_id' => $district_id,'name' => "Ndulungu"]);
        
        // Ikungi - District
        District::create(['region_id' => 25,'name' => "Ikungi",'capital' => "Ikungi",'area' => '','population' => '272,959']);

            // Ikungi Wards:
            $district_id = 120;
            Ward::create(['district_id' => $district_id,'name' => "Puma"]);
            Ward::create(['district_id' => $district_id,'name' => "Kituntu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mungaa"]);
            Ward::create(['district_id' => $district_id,'name' => "Siuyu"]);
            Ward::create(['district_id' => $district_id,'name' => "Kikio"]);
            Ward::create(['district_id' => $district_id,'name' => "Lighwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Misughaa"]);
            Ward::create(['district_id' => $district_id,'name' => "Ntuntu"]);
            Ward::create(['district_id' => $district_id,'name' => "Dung'unyi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mang'onyi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkiwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Issuna"]);
            Ward::create(['district_id' => $district_id,'name' => "Unyahati"]);
            Ward::create(['district_id' => $district_id,'name' => "Ikungi"]);
            Ward::create(['district_id' => $district_id,'name' => "Iglansoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Iseke"]);
            Ward::create(['district_id' => $district_id,'name' => "Ihanja"]);
            Ward::create(['district_id' => $district_id,'name' => "Minyughe"]);
            Ward::create(['district_id' => $district_id,'name' => "Muhintiri"]);
            Ward::create(['district_id' => $district_id,'name' => "Iyumbu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mgungira"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwaru"]);
            Ward::create(['district_id' => $district_id,'name' => "Ighombwe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtunduru"]);
            Ward::create(['district_id' => $district_id,'name' => "Sepuka"]);
            Ward::create(['district_id' => $district_id,'name' => "Irisya"]);

        // Manyoni- District
        District::create(['region_id' => 25,'name' => "Manyoni",'capital' => "Manyoni",'area' => '','population' => '296,763']);

            // Manyoni Wards:
            $district_id = 121;
            Ward::create(['district_id' => $district_id,'name' => "Aghondi"]);
            Ward::create(['district_id' => $district_id,'name' => "Chikola"]);
            Ward::create(['district_id' => $district_id,'name' => "Chikuyu"]);
            Ward::create(['district_id' => $district_id,'name' => "Heka"]);
            Ward::create(['district_id' => $district_id,'name' => "Idodyandole"]);
            Ward::create(['district_id' => $district_id,'name' => "Ipande"]);
            Ward::create(['district_id' => $district_id,'name' => "Isseke"]);
            Ward::create(['district_id' => $district_id,'name' => "Itigi Majengo"]);
            Ward::create(['district_id' => $district_id,'name' => "Itigi Mjini"]);
            Ward::create(['district_id' => $district_id,'name' => "Kintinku"]);
            Ward::create(['district_id' => $district_id,'name' => "Kitaraka"]);
            Ward::create(['district_id' => $district_id,'name' => "Majiri"]);
            Ward::create(['district_id' => $district_id,'name' => "Makanda"]);
            Ward::create(['district_id' => $district_id,'name' => "Makuru"]);
            Ward::create(['district_id' => $district_id,'name' => "Makutupora"]);
            Ward::create(['district_id' => $district_id,'name' => "Manyoni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mgandu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mitundu"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkwese"]);
            Ward::create(['district_id' => $district_id,'name' => "Muhalala"]);
            Ward::create(['district_id' => $district_id,'name' => "Mvumi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwamagembe"]);
            Ward::create(['district_id' => $district_id,'name' => "Mkonko"]);
            Ward::create(['district_id' => $district_id,'name' => "Rungwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Sanjaranda"]);
            Ward::create(['district_id' => $district_id,'name' => "Sanza"]);
            Ward::create(['district_id' => $district_id,'name' => "Saranda"]);
            Ward::create(['district_id' => $district_id,'name' => "Sasajila"]);
            Ward::create(['district_id' => $district_id,'name' => "Sasilo"]);
            Ward::create(['district_id' => $district_id,'name' => "Solya"]);
        
        // Mkalama- District
        District::create(['region_id' => 25,'name' => "Mkalama",'capital' => "Mkalama",'area' => '','population' => '188,733']);

            // Mkalama Wards:
            $district_id = 122;
            Ward::create(['district_id' => $district_id,'name' => "Gumanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Ibaga"]);
            Ward::create(['district_id' => $district_id,'name' => "Iguguno"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilunda"]);
            Ward::create(['district_id' => $district_id,'name' => "Kikhonda"]);
            Ward::create(['district_id' => $district_id,'name' => "Kinyangiri"]);
            Ward::create(['district_id' => $district_id,'name' => "Matongo"]);
            Ward::create(['district_id' => $district_id,'name' => "Miganga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mpambala"]);
            Ward::create(['district_id' => $district_id,'name' => "Msingi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwangeza"]);
            Ward::create(['district_id' => $district_id,'name' => "Nduguti"]);
            Ward::create(['district_id' => $district_id,'name' => "Nkinto"]);

        // Singida Rural - District
        District::create(['region_id' => 25,'name' => "Singida Rural",'capital' => "Singida",'area' => '','population' => '225,521']);

            // Singida Rural Wards:
            $district_id = 123;
            Ward::create(['district_id' => $district_id,'name' => "Ikhanoda"]);
            Ward::create(['district_id' => $district_id,'name' => "Ilongero"]);
            Ward::create(['district_id' => $district_id,'name' => "Itaja"]);
            Ward::create(['district_id' => $district_id,'name' => "Kijota"]);
            Ward::create(['district_id' => $district_id,'name' => "Kinyagigi"]);
            Ward::create(['district_id' => $district_id,'name' => "Kinyeto"]);
            Ward::create(['district_id' => $district_id,'name' => "Maghojoa"]);
            Ward::create(['district_id' => $district_id,'name' => "Makuro"]);
            Ward::create(['district_id' => $district_id,'name' => "Merya"]);
            Ward::create(['district_id' => $district_id,'name' => "Mgori"]);
            Ward::create(['district_id' => $district_id,'name' => "Mrama"]);
            Ward::create(['district_id' => $district_id,'name' => "Msange"]);
            Ward::create(['district_id' => $district_id,'name' => "Msisi"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtinko"]);
            Ward::create(['district_id' => $district_id,'name' => "Mudida"]);
            Ward::create(['district_id' => $district_id,'name' => "Mughambo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mughunga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwasauya"]);
            Ward::create(['district_id' => $district_id,'name' => "Ngimu"]);
            Ward::create(['district_id' => $district_id,'name' => "Ntonge"]);
            Ward::create(['district_id' => $district_id,'name' => "Ughandi"]);

        // Singida Urban - District
        District::create(['region_id' => 25,'name' => "Singida Rural",'capital' => "Singida",'area' => '','population' => '150,379']);

            // Singida Urban Wards:
            $district_id = 124;
            Ward::create(['district_id' => $district_id,'name' => "Ipembe"]);
            Ward::create(['district_id' => $district_id,'name' => "Kindai"]);
            Ward::create(['district_id' => $district_id,'name' => "Majengo"]);
            Ward::create(['district_id' => $district_id,'name' => "Mandewa"]);
            Ward::create(['district_id' => $district_id,'name' => "Minga"]);
            Ward::create(['district_id' => $district_id,'name' => "Misuna"]);
            Ward::create(['district_id' => $district_id,'name' => "Mitunduruni"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtamaa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mtipa"]);
            Ward::create(['district_id' => $district_id,'name' => "Mughanga"]);
            Ward::create(['district_id' => $district_id,'name' => "Mungumaji"]);
            Ward::create(['district_id' => $district_id,'name' => "Mwankoko"]);
            Ward::create(['district_id' => $district_id,'name' => "Unyianga"]);
            Ward::create(['district_id' => $district_id,'name' => "Uhamaka"]);
            Ward::create(['district_id' => $district_id,'name' => "Unyambwa"]);
            Ward::create(['district_id' => $district_id,'name' => "Unyamikumbi"]);
            Ward::create(['district_id' => $district_id,'name' => "Utemini"]);
    }
}
