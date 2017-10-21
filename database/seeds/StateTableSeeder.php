<?php

use App\Models\State;
use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    private $model;

    /**
     * StateTableSeeder constructor.
     * @param $model
     */
    public function __construct(State $model)
    {
        $this->model = $model;
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->model->truncate();

        $states = array(

            array('name' => "Andaman and Nicobar Islands",'country_id' => 101),

            array('name' => "Andhra Pradesh",'country_id' => 101),

            array('name' => "Arunachal Pradesh",'country_id' => 101),

            array('name' => "Assam",'country_id' => 101),

            array('name' => "Bihar",'country_id' => 101),

            array('name' => "Chandigarh",'country_id' => 101),

            array('name' => "Chhattisgarh",'country_id' => 101),

            array('name' => "Dadra and Nagar Haveli",'country_id' => 101),

            array('name' => "Daman and Diu",'country_id' => 101),

            array('name' => "Delhi",'country_id' => 101),

            array('name' => "Goa",'country_id' => 101),

            array('name' => "Gujarat",'country_id' => 101),

            array('name' => "Haryana",'country_id' => 101),

            array('name' => "Himachal Pradesh",'country_id' => 101),

            array('name' => "Jammu and Kashmir",'country_id' => 101),

            array('name' => "Jharkhand",'country_id' => 101),

            array('name' => "Karnataka",'country_id' => 101),

            array('name' => "Kenmore",'country_id' => 101),

            array('name' => "Kerala",'country_id' => 101),

            array('name' => "Lakshadweep",'country_id' => 101),

            array('name' => "Madhya Pradesh",'country_id' => 101),

            array('name' => "Maharashtra",'country_id' => 101),

            array('name' => "Manipur",'country_id' => 101),

            array('name' => "Meghalaya",'country_id' => 101),

            array('name' => "Mizoram",'country_id' => 101),

            array('name' => "Nagaland",'country_id' => 101),

            array('name' => "Narora",'country_id' => 101),

            array('name' => "Natwar",'country_id' => 101),

            array('name' => "Odisha",'country_id' => 101),

            array('name' => "Paschim Medinipur",'country_id' => 101),

            array('name' => "Pondicherry",'country_id' => 101),

            array('name' => "Punjab",'country_id' => 101),

            array('name' => "Rajasthan",'country_id' => 101),

            array('name' => "Sikkim",'country_id' => 101),

            array('name' => "Tamil Nadu",'country_id' => 101),

            array('name' => "Telangana",'country_id' => 101),

            array('name' => "Tripura",'country_id' => 101),

            array('name' => "Uttar Pradesh",'country_id' => 101),

            array('name' => "Uttarakhand",'country_id' => 101),

            array('name' => "Vaishali",'country_id' => 101),

            array('name' => "West Bengal",'country_id' => 101),

            array('name' => "Badakhshan",'country_id' => 1),

            array('name' => "Badgis",'country_id' => 1),

            array('name' => "Baglan",'country_id' => 1),

            array('name' => "Balkh",'country_id' => 1),

            array('name' => "Bamiyan",'country_id' => 1),

            array('name' => "Farah",'country_id' => 1),

            array('name' => "Faryab",'country_id' => 1),

            array('name' => "Gawr",'country_id' => 1),

            array('name' => "Gazni",'country_id' => 1),

            array('name' => "Herat",'country_id' => 1),

            array('name' => "Hilmand",'country_id' => 1),

            array('name' => "Jawzjan",'country_id' => 1),

            array('name' => "Kabul",'country_id' => 1),

            array('name' => "Kapisa",'country_id' => 1),

            array('name' => "Khawst",'country_id' => 1),

            array('name' => "Kunar",'country_id' => 1),

            array('name' => "Lagman",'country_id' => 1),

            array('name' => "Lawghar",'country_id' => 1),

            array('name' => "Nangarhar",'country_id' => 1),

            array('name' => "Nimruz",'country_id' => 1),

            array('name' => "Nuristan",'country_id' => 1),

            array('name' => "Paktika",'country_id' => 1),

            array('name' => "Paktiya",'country_id' => 1),

            array('name' => "Parwan",'country_id' => 1),

            array('name' => "Qandahar",'country_id' => 1),

            array('name' => "Qunduz",'country_id' => 1),

            array('name' => "Samangan",'country_id' => 1),

            array('name' => "Sar-e Pul",'country_id' => 1),

            array('name' => "Takhar",'country_id' => 1),

            array('name' => "Uruzgan",'country_id' => 1),

            array('name' => "Wardak",'country_id' => 1),

            array('name' => "Zabul",'country_id' => 1),

            array('name' => "Berat",'country_id' => 2),

            array('name' => "Bulqize",'country_id' => 2),

            array('name' => "Delvine",'country_id' => 2),

            array('name' => "Devoll",'country_id' => 2),

            array('name' => "Dibre",'country_id' => 2),

            array('name' => "Durres",'country_id' => 2),

            array('name' => "Elbasan",'country_id' => 2),

            array('name' => "Fier",'country_id' => 2),

            array('name' => "Gjirokaster",'country_id' => 2),

            array('name' => "Gramsh",'country_id' => 2),

            array('name' => "Has",'country_id' => 2),

            array('name' => "Kavaje",'country_id' => 2),

            array('name' => "Kolonje",'country_id' => 2),

            array('name' => "Korce",'country_id' => 2),

            array('name' => "Kruje",'country_id' => 2),

            array('name' => "Kucove",'country_id' => 2),

            array('name' => "Kukes",'country_id' => 2),

            array('name' => "Kurbin",'country_id' => 2),

            array('name' => "Lezhe",'country_id' => 2),

            array('name' => "Librazhd",'country_id' => 2),

            array('name' => "Lushnje",'country_id' => 2),

            array('name' => "Mallakaster",'country_id' => 2),

            array('name' => "Malsi e Madhe",'country_id' => 2),

            array('name' => "Mat",'country_id' => 2),

            array('name' => "Mirdite",'country_id' => 2),

            array('name' => "Peqin",'country_id' => 2),

            array('name' => "Permet",'country_id' => 2),

            array('name' => "Pogradec",'country_id' => 2),

            array('name' => "Puke",'country_id' => 2),

            array('name' => "Sarande",'country_id' => 2),

            array('name' => "Shkoder",'country_id' => 2),

            array('name' => "Skrapar",'country_id' => 2),

            array('name' => "Tepelene",'country_id' => 2),

            array('name' => "Tirane",'country_id' => 2),

            array('name' => "Tropoje",'country_id' => 2),

            array('name' => "Vlore",'country_id' => 2),

            array('name' => "'Ayn Daflah",'country_id' => 3),

            array('name' => "'Ayn Tamushanat",'country_id' => 3),

            array('name' => "Adrar",'country_id' => 3),

            array('name' => "Algiers",'country_id' => 3),

            array('name' => "Annabah",'country_id' => 3),

            array('name' => "Bashshar",'country_id' => 3),

            array('name' => "Batnah",'country_id' => 3),

            array('name' => "Bijayah",'country_id' => 3),

            array('name' => "Biskrah",'country_id' => 3),

            array('name' => "Blidah",'country_id' => 3),

            array('name' => "Buirah",'country_id' => 3),

            array('name' => "Bumardas",'country_id' => 3),

            array('name' => "Burj Bu Arririj",'country_id' => 3),

            array('name' => "Ghalizan",'country_id' => 3),

            array('name' => "Ghardayah",'country_id' => 3),

            array('name' => "Ilizi",'country_id' => 3),

            array('name' => "Jijili",'country_id' => 3),

            array('name' => "Jilfah",'country_id' => 3),

            array('name' => "Khanshalah",'country_id' => 3),

            array('name' => "Masilah",'country_id' => 3),

            array('name' => "Midyah",'country_id' => 3),

            array('name' => "Milah",'country_id' => 3),

            array('name' => "Muaskar",'country_id' => 3),

            array('name' => "Mustaghanam",'country_id' => 3),

            array('name' => "Naama",'country_id' => 3),

            array('name' => "Oran",'country_id' => 3),

            array('name' => "Ouargla",'country_id' => 3),

            array('name' => "Qalmah",'country_id' => 3),

            array('name' => "Qustantinah",'country_id' => 3),

            array('name' => "Sakikdah",'country_id' => 3),

            array('name' => "Satif",'country_id' => 3),

            array('name' => "Sayda'",'country_id' => 3),

            array('name' => "Sidi ban-al-'Abbas",'country_id' => 3),

            array('name' => "Suq Ahras",'country_id' => 3),

            array('name' => "Tamanghasat",'country_id' => 3),

            array('name' => "Tibazah",'country_id' => 3),

            array('name' => "Tibissah",'country_id' => 3),

            array('name' => "Tilimsan",'country_id' => 3),

            array('name' => "Tinduf",'country_id' => 3),

            array('name' => "Tisamsilt",'country_id' => 3),

            array('name' => "Tiyarat",'country_id' => 3),

            array('name' => "Tizi Wazu",'country_id' => 3),

            array('name' => "Umm-al-Bawaghi",'country_id' => 3),

            array('name' => "Wahran",'country_id' => 3),

            array('name' => "Warqla",'country_id' => 3),

            array('name' => "Wilaya d Alger",'country_id' => 3),

            array('name' => "Wilaya de Bejaia",'country_id' => 3),

            array('name' => "Wilaya de Constantine",'country_id' => 3),

            array('name' => "al-Aghwat",'country_id' => 3),

            array('name' => "al-Bayadh",'country_id' => 3),

            array('name' => "al-Jaza'ir",'country_id' => 3),

            array('name' => "al-Wad",'country_id' => 3),

            array('name' => "ash-Shalif",'country_id' => 3),

            array('name' => "at-Tarif",'country_id' => 3),

            array('name' => "Eastern",'country_id' => 4),

            array('name' => "Manu'a",'country_id' => 4),

            array('name' => "Swains Island",'country_id' => 4),

            array('name' => "Western",'country_id' => 4),

            array('name' => "Andorra la Vella",'country_id' => 5),

            array('name' => "Canillo",'country_id' => 5),

            array('name' => "Encamp",'country_id' => 5),

            array('name' => "La Massana",'country_id' => 5),

            array('name' => "Les Escaldes",'country_id' => 5),

            array('name' => "Ordino",'country_id' => 5),

            array('name' => "Sant Julia de Loria",'country_id' => 5),

            array('name' => "Bengo",'country_id' => 6),

            array('name' => "Benguela",'country_id' => 6),

            array('name' => "Bie",'country_id' => 6),

            array('name' => "Cabinda",'country_id' => 6),

            array('name' => "Cunene",'country_id' => 6),

            array('name' => "Huambo",'country_id' => 6),

            array('name' => "Huila",'country_id' => 6),

            array('name' => "Kuando-Kubango",'country_id' => 6),

            array('name' => "Kwanza Norte",'country_id' => 6),

            array('name' => "Kwanza Sul",'country_id' => 6),

            array('name' => "Luanda",'country_id' => 6),

            array('name' => "Lunda Norte",'country_id' => 6),

            array('name' => "Lunda Sul",'country_id' => 6),

            array('name' => "Malanje",'country_id' => 6),

            array('name' => "Moxico",'country_id' => 6),

            array('name' => "Namibe",'country_id' => 6),

            array('name' => "Uige",'country_id' => 6),

            array('name' => "Zaire",'country_id' => 6),

            array('name' => "Other Provinces",'country_id' => 7),

            array('name' => "Sector claimed by Argentina/Ch",'country_id' => 8),

            array('name' => "Sector claimed by Argentina/UK",'country_id' => 8),

            array('name' => "Sector claimed by Australia",'country_id' => 8),

            array('name' => "Sector claimed by France",'country_id' => 8),

            array('name' => "Sector claimed by New Zealand",'country_id' => 8),

            array('name' => "Sector claimed by Norway",'country_id' => 8),

            array('name' => "Unclaimed Sector",'country_id' => 8),

            array('name' => "Barbuda",'country_id' => 9),

            array('name' => "Saint George",'country_id' => 9),

            array('name' => "Saint John",'country_id' => 9),

            array('name' => "Saint Mary",'country_id' => 9),

            array('name' => "Saint Paul",'country_id' => 9),

            array('name' => "Saint Peter",'country_id' => 9),

            array('name' => "Saint Philip",'country_id' => 9),

            array('name' => "Buenos Aires",'country_id' => 10),

            array('name' => "Catamarca",'country_id' => 10),

            array('name' => "Chaco",'country_id' => 10),

            array('name' => "Chubut",'country_id' => 10),

            array('name' => "Cordoba",'country_id' => 10),

            array('name' => "Corrientes",'country_id' => 10),

            array('name' => "Distrito Federal",'country_id' => 10),

            array('name' => "Entre Rios",'country_id' => 10),

            array('name' => "Formosa",'country_id' => 10),

            array('name' => "Jujuy",'country_id' => 10),

            array('name' => "La Pampa",'country_id' => 10),

            array('name' => "La Rioja",'country_id' => 10),

            array('name' => "Mendoza",'country_id' => 10),

            array('name' => "Misiones",'country_id' => 10),

            array('name' => "Neuquen",'country_id' => 10),

            array('name' => "Rio Negro",'country_id' => 10),

            array('name' => "Salta",'country_id' => 10),

            array('name' => "San Juan",'country_id' => 10),

            array('name' => "San Luis",'country_id' => 10),

            array('name' => "Santa Cruz",'country_id' => 10),

            array('name' => "Santa Fe",'country_id' => 10),

            array('name' => "Santiago del Estero",'country_id' => 10),

            array('name' => "Tierra del Fuego",'country_id' => 10),

            array('name' => "Tucuman",'country_id' => 10),

            array('name' => "Aragatsotn",'country_id' => 11),

            array('name' => "Ararat",'country_id' => 11),

            array('name' => "Armavir",'country_id' => 11),

            array('name' => "Gegharkunik",'country_id' => 11),

            array('name' => "Kotaik",'country_id' => 11),

            array('name' => "Lori",'country_id' => 11),

            array('name' => "Shirak",'country_id' => 11),

            array('name' => "Stepanakert",'country_id' => 11),

            array('name' => "Syunik",'country_id' => 11),

            array('name' => "Tavush",'country_id' => 11),

            array('name' => "Vayots Dzor",'country_id' => 11),

            array('name' => "Yerevan",'country_id' => 11),

            array('name' => "Aruba",'country_id' => 12),

            array('name' => "Auckland",'country_id' => 13),

            array('name' => "Australian Capital Territory",'country_id' => 13),

            array('name' => "Balgowlah",'country_id' => 13),

            array('name' => "Balmain",'country_id' => 13),

            array('name' => "Bankstown",'country_id' => 13),

            array('name' => "Baulkham Hills",'country_id' => 13),

            array('name' => "Bonnet Bay",'country_id' => 13),

            array('name' => "Camberwell",'country_id' => 13),

            array('name' => "Carole Park",'country_id' => 13),

            array('name' => "Castle Hill",'country_id' => 13),

            array('name' => "Caulfield",'country_id' => 13),

            array('name' => "Chatswood",'country_id' => 13),

            array('name' => "Cheltenham",'country_id' => 13),

            array('name' => "Cherrybrook",'country_id' => 13),

            array('name' => "Clayton",'country_id' => 13),

            array('name' => "Collingwood",'country_id' => 13),

            array('name' => "Frenchs Forest",'country_id' => 13),

            array('name' => "Hawthorn",'country_id' => 13),

            array('name' => "Jannnali",'country_id' => 13),

            array('name' => "Knoxfield",'country_id' => 13),

            array('name' => "Melbourne",'country_id' => 13),

            array('name' => "New South Wales",'country_id' => 13),

            array('name' => "Northern Territory",'country_id' => 13),

            array('name' => "Perth",'country_id' => 13),

            array('name' => "Queensland",'country_id' => 13),

            array('name' => "South Australia",'country_id' => 13),

            array('name' => "Tasmania",'country_id' => 13),

            array('name' => "Templestowe",'country_id' => 13),

            array('name' => "Victoria",'country_id' => 13),

            array('name' => "Werribee south",'country_id' => 13),

            array('name' => "Western Australia",'country_id' => 13),

            array('name' => "Wheeler",'country_id' => 13),

            array('name' => "Bundesland Salzburg",'country_id' => 14),

            array('name' => "Bundesland Steiermark",'country_id' => 14),

            array('name' => "Bundesland Tirol",'country_id' => 14),

            array('name' => "Burgenland",'country_id' => 14),

            array('name' => "Carinthia",'country_id' => 14),

            array('name' => "Karnten",'country_id' => 14),

            array('name' => "Liezen",'country_id' => 14),

            array('name' => "Lower Austria",'country_id' => 14),

            array('name' => "Niederosterreich",'country_id' => 14),

            array('name' => "Oberosterreich",'country_id' => 14),

            array('name' => "Salzburg",'country_id' => 14),

            array('name' => "Schleswig-Holstein",'country_id' => 14),

            array('name' => "Steiermark",'country_id' => 14),

            array('name' => "Styria",'country_id' => 14),

            array('name' => "Tirol",'country_id' => 14),

            array('name' => "Upper Austria",'country_id' => 14),

            array('name' => "Vorarlberg",'country_id' => 14),

            array('name' => "Wien",'country_id' => 14),

            array('name' => "Abseron",'country_id' => 15),

            array('name' => "Baki Sahari",'country_id' => 15),

            array('name' => "Ganca",'country_id' => 15),

            array('name' => "Ganja",'country_id' => 15),

            array('name' => "Kalbacar",'country_id' => 15),

            array('name' => "Lankaran",'country_id' => 15),

            array('name' => "Mil-Qarabax",'country_id' => 15),

            array('name' => "Mugan-Salyan",'country_id' => 15),

            array('name' => "Nagorni-Qarabax",'country_id' => 15),

            array('name' => "Naxcivan",'country_id' => 15),

            array('name' => "Priaraks",'country_id' => 15),

            array('name' => "Qazax",'country_id' => 15),

            array('name' => "Saki",'country_id' => 15),

            array('name' => "Sirvan",'country_id' => 15),

            array('name' => "Xacmaz",'country_id' => 15),

            array('name' => "Abaco",'country_id' => 16),

            array('name' => "Acklins Island",'country_id' => 16),

            array('name' => "Andros",'country_id' => 16),

            array('name' => "Berry Islands",'country_id' => 16),

            array('name' => "Biminis",'country_id' => 16),

            array('name' => "Cat Island",'country_id' => 16),

            array('name' => "Crooked Island",'country_id' => 16),

            array('name' => "Eleuthera",'country_id' => 16),

            array('name' => "Exuma and Cays",'country_id' => 16),

            array('name' => "Grand Bahama",'country_id' => 16),

            array('name' => "Inagua Islands",'country_id' => 16),

            array('name' => "Long Island",'country_id' => 16),

            array('name' => "Mayaguana",'country_id' => 16),

            array('name' => "New Providence",'country_id' => 16),

            array('name' => "Ragged Island",'country_id' => 16),

            array('name' => "Rum Cay",'country_id' => 16),

            array('name' => "San Salvador",'country_id' => 16),

            array('name' => "'Isa",'country_id' => 17),

            array('name' => "Badiyah",'country_id' => 17),

            array('name' => "Hidd",'country_id' => 17),

            array('name' => "Jidd Hafs",'country_id' => 17),

            array('name' => "Mahama",'country_id' => 17),

            array('name' => "Manama",'country_id' => 17),

            array('name' => "Sitrah",'country_id' => 17),

            array('name' => "al-Manamah",'country_id' => 17),

            array('name' => "al-Muharraq",'country_id' => 17),

            array('name' => "ar-Rifa'a",'country_id' => 17),

            array('name' => "Bagar Hat",'country_id' => 18),

            array('name' => "Bandarban",'country_id' => 18),

            array('name' => "Barguna",'country_id' => 18),

            array('name' => "Barisal",'country_id' => 18),

            array('name' => "Bhola",'country_id' => 18),

            array('name' => "Bogora",'country_id' => 18),

            array('name' => "Brahman Bariya",'country_id' => 18),

            array('name' => "Chandpur",'country_id' => 18),

            array('name' => "Chattagam",'country_id' => 18),

            array('name' => "Chittagong Division",'country_id' => 18),

            array('name' => "Chuadanga",'country_id' => 18),

            array('name' => "Dhaka",'country_id' => 18),

            array('name' => "Dinajpur",'country_id' => 18),

            array('name' => "Faridpur",'country_id' => 18),

            array('name' => "Feni",'country_id' => 18),

            array('name' => "Gaybanda",'country_id' => 18),

            array('name' => "Gazipur",'country_id' => 18),

            array('name' => "Gopalganj",'country_id' => 18),

            array('name' => "Habiganj",'country_id' => 18),

            array('name' => "Jaipur Hat",'country_id' => 18),

            array('name' => "Jamalpur",'country_id' => 18),

            array('name' => "Jessor",'country_id' => 18),

            array('name' => "Jhalakati",'country_id' => 18),

            array('name' => "Jhanaydah",'country_id' => 18),

            array('name' => "Khagrachhari",'country_id' => 18),

            array('name' => "Khulna",'country_id' => 18),

            array('name' => "Kishorganj",'country_id' => 18),

            array('name' => "Koks Bazar",'country_id' => 18),

            array('name' => "Komilla",'country_id' => 18),

            array('name' => "Kurigram",'country_id' => 18),

            array('name' => "Kushtiya",'country_id' => 18),

            array('name' => "Lakshmipur",'country_id' => 18),

            array('name' => "Lalmanir Hat",'country_id' => 18),

            array('name' => "Madaripur",'country_id' => 18),

            array('name' => "Magura",'country_id' => 18),

            array('name' => "Maimansingh",'country_id' => 18),

            array('name' => "Manikganj",'country_id' => 18),

            array('name' => "Maulvi Bazar",'country_id' => 18),

            array('name' => "Meherpur",'country_id' => 18),

            array('name' => "Munshiganj",'country_id' => 18),

            array('name' => "Naral",'country_id' => 18),

            array('name' => "Narayanganj",'country_id' => 18),

            array('name' => "Narsingdi",'country_id' => 18),

            array('name' => "Nator",'country_id' => 18),

            array('name' => "Naugaon",'country_id' => 18),

            array('name' => "Nawabganj",'country_id' => 18),

            array('name' => "Netrakona",'country_id' => 18),

            array('name' => "Nilphamari",'country_id' => 18),

            array('name' => "Noakhali",'country_id' => 18),

            array('name' => "Pabna",'country_id' => 18),

            array('name' => "Panchagarh",'country_id' => 18),

            array('name' => "Patuakhali",'country_id' => 18),

            array('name' => "Pirojpur",'country_id' => 18),

            array('name' => "Rajbari",'country_id' => 18),

            array('name' => "Rajshahi",'country_id' => 18),

            array('name' => "Rangamati",'country_id' => 18),

            array('name' => "Rangpur",'country_id' => 18),

            array('name' => "Satkhira",'country_id' => 18),

            array('name' => "Shariatpur",'country_id' => 18),

            array('name' => "Sherpur",'country_id' => 18),

            array('name' => "Silhat",'country_id' => 18),

            array('name' => "Sirajganj",'country_id' => 18),

            array('name' => "Sunamganj",'country_id' => 18),

            array('name' => "Tangayal",'country_id' => 18),

            array('name' => "Thakurgaon",'country_id' => 18),

            array('name' => "Christ Church",'country_id' => 19),

            array('name' => "Saint Andrew",'country_id' => 19),

            array('name' => "Saint George",'country_id' => 19),

            array('name' => "Saint James",'country_id' => 19),

            array('name' => "Saint John",'country_id' => 19),

            array('name' => "Saint Joseph",'country_id' => 19),

            array('name' => "Saint Lucy",'country_id' => 19),

            array('name' => "Saint Michael",'country_id' => 19),

            array('name' => "Saint Peter",'country_id' => 19),

            array('name' => "Saint Philip",'country_id' => 19),

            array('name' => "Saint Thomas",'country_id' => 19),

            array('name' => "Brest",'country_id' => 20),

            array('name' => "Homjel'",'country_id' => 20),

            array('name' => "Hrodna",'country_id' => 20),

            array('name' => "Mahiljow",'country_id' => 20),

            array('name' => "Mahilyowskaya Voblasts",'country_id' => 20),

            array('name' => "Minsk",'country_id' => 20),

            array('name' => "Minskaja Voblasts'",'country_id' => 20),

            array('name' => "Petrik",'country_id' => 20),

            array('name' => "Vicebsk",'country_id' => 20),

            array('name' => "Antwerpen",'country_id' => 21),

            array('name' => "Berchem",'country_id' => 21),

            array('name' => "Brabant",'country_id' => 21),

            array('name' => "Brabant Wallon",'country_id' => 21),

            array('name' => "Brussel",'country_id' => 21),

            array('name' => "East Flanders",'country_id' => 21),

            array('name' => "Hainaut",'country_id' => 21),

            array('name' => "Liege",'country_id' => 21),

            array('name' => "Limburg",'country_id' => 21),

            array('name' => "Luxembourg",'country_id' => 21),

            array('name' => "Namur",'country_id' => 21),

            array('name' => "Ontario",'country_id' => 21),

            array('name' => "Oost-Vlaanderen",'country_id' => 21),

            array('name' => "Provincie Brabant",'country_id' => 21),

            array('name' => "Vlaams-Brabant",'country_id' => 21),

            array('name' => "Wallonne",'country_id' => 21),

            array('name' => "West-Vlaanderen",'country_id' => 21),

            array('name' => "Belize",'country_id' => 22),

            array('name' => "Cayo",'country_id' => 22),

            array('name' => "Corozal",'country_id' => 22),

            array('name' => "Orange Walk",'country_id' => 22),

            array('name' => "Stann Creek",'country_id' => 22),

            array('name' => "Toledo",'country_id' => 22),

            array('name' => "Alibori",'country_id' => 23),

            array('name' => "Atacora",'country_id' => 23),

            array('name' => "Atlantique",'country_id' => 23),

            array('name' => "Borgou",'country_id' => 23),

            array('name' => "Collines",'country_id' => 23),

            array('name' => "Couffo",'country_id' => 23),

            array('name' => "Donga",'country_id' => 23),

            array('name' => "Littoral",'country_id' => 23),

            array('name' => "Mono",'country_id' => 23),

            array('name' => "Oueme",'country_id' => 23),

            array('name' => "Plateau",'country_id' => 23),

            array('name' => "Zou",'country_id' => 23),

            array('name' => "Hamilton",'country_id' => 24),

            array('name' => "Saint George",'country_id' => 24),

            array('name' => "Bumthang",'country_id' => 25),

            array('name' => "Chhukha",'country_id' => 25),

            array('name' => "Chirang",'country_id' => 25),

            array('name' => "Daga",'country_id' => 25),

            array('name' => "Geylegphug",'country_id' => 25),

            array('name' => "Ha",'country_id' => 25),

            array('name' => "Lhuntshi",'country_id' => 25),

            array('name' => "Mongar",'country_id' => 25),

            array('name' => "Pemagatsel",'country_id' => 25),

            array('name' => "Punakha",'country_id' => 25),

            array('name' => "Rinpung",'country_id' => 25),

            array('name' => "Samchi",'country_id' => 25),

            array('name' => "Samdrup Jongkhar",'country_id' => 25),

            array('name' => "Shemgang",'country_id' => 25),

            array('name' => "Tashigang",'country_id' => 25),

            array('name' => "Timphu",'country_id' => 25),

            array('name' => "Tongsa",'country_id' => 25),

            array('name' => "Wangdiphodrang",'country_id' => 25),

            array('name' => "Beni",'country_id' => 26),

            array('name' => "Chuquisaca",'country_id' => 26),

            array('name' => "Cochabamba",'country_id' => 26),

            array('name' => "La Paz",'country_id' => 26),

            array('name' => "Oruro",'country_id' => 26),

            array('name' => "Pando",'country_id' => 26),

            array('name' => "Potosi",'country_id' => 26),

            array('name' => "Santa Cruz",'country_id' => 26),

            array('name' => "Tarija",'country_id' => 26),

            array('name' => "Federacija Bosna i Hercegovina",'country_id' => 27),

            array('name' => "Republika Srpska",'country_id' => 27),

            array('name' => "Central Bobonong",'country_id' => 28),

            array('name' => "Central Boteti",'country_id' => 28),

            array('name' => "Central Mahalapye",'country_id' => 28),

            array('name' => "Central Serowe-Palapye",'country_id' => 28),

            array('name' => "Central Tutume",'country_id' => 28),

            array('name' => "Chobe",'country_id' => 28),

            array('name' => "Francistown",'country_id' => 28),

            array('name' => "Gaborone",'country_id' => 28),

            array('name' => "Ghanzi",'country_id' => 28),

            array('name' => "Jwaneng",'country_id' => 28),

            array('name' => "Kgalagadi North",'country_id' => 28),

            array('name' => "Kgalagadi South",'country_id' => 28),

            array('name' => "Kgatleng",'country_id' => 28),

            array('name' => "Kweneng",'country_id' => 28),

            array('name' => "Lobatse",'country_id' => 28),

            array('name' => "Ngamiland",'country_id' => 28),

            array('name' => "Ngwaketse",'country_id' => 28),

            array('name' => "North East",'country_id' => 28),

            array('name' => "Okavango",'country_id' => 28),

            array('name' => "Orapa",'country_id' => 28),

            array('name' => "Selibe Phikwe",'country_id' => 28),

            array('name' => "South East",'country_id' => 28),

            array('name' => "Sowa",'country_id' => 28),

            array('name' => "Bouvet Island",'country_id' => 29),

            array('name' => "Acre",'country_id' => 30),

            array('name' => "Alagoas",'country_id' => 30),

            array('name' => "Amapa",'country_id' => 30),

            array('name' => "Amazonas",'country_id' => 30),

            array('name' => "Bahia",'country_id' => 30),

            array('name' => "Ceara",'country_id' => 30),

            array('name' => "Distrito Federal",'country_id' => 30),

            array('name' => "Espirito Santo",'country_id' => 30),

            array('name' => "Estado de Sao Paulo",'country_id' => 30),

            array('name' => "Goias",'country_id' => 30),

            array('name' => "Maranhao",'country_id' => 30),

            array('name' => "Mato Grosso",'country_id' => 30),

            array('name' => "Mato Grosso do Sul",'country_id' => 30),

            array('name' => "Minas Gerais",'country_id' => 30),

            array('name' => "Para",'country_id' => 30),

            array('name' => "Paraiba",'country_id' => 30),

            array('name' => "Parana",'country_id' => 30),

            array('name' => "Pernambuco",'country_id' => 30),

            array('name' => "Piaui",'country_id' => 30),

            array('name' => "Rio Grande do Norte",'country_id' => 30),

            array('name' => "Rio Grande do Sul",'country_id' => 30),

            array('name' => "Rio de Janeiro",'country_id' => 30),

            array('name' => "Rondonia",'country_id' => 30),

            array('name' => "Roraima",'country_id' => 30),

            array('name' => "Santa Catarina",'country_id' => 30),

            array('name' => "Sao Paulo",'country_id' => 30),

            array('name' => "Sergipe",'country_id' => 30),

            array('name' => "Tocantins",'country_id' => 30),

            array('name' => "British Indian Ocean Territory",'country_id' => 31),

            array('name' => "Belait",'country_id' => 32),

            array('name' => "Brunei-Muara",'country_id' => 32),

            array('name' => "Temburong",'country_id' => 32),

            array('name' => "Tutong",'country_id' => 32),

            array('name' => "Blagoevgrad",'country_id' => 33),

            array('name' => "Burgas",'country_id' => 33),

            array('name' => "Dobrich",'country_id' => 33),

            array('name' => "Gabrovo",'country_id' => 33),

            array('name' => "Haskovo",'country_id' => 33),

            array('name' => "Jambol",'country_id' => 33),

            array('name' => "Kardzhali",'country_id' => 33),

            array('name' => "Kjustendil",'country_id' => 33),

            array('name' => "Lovech",'country_id' => 33),

            array('name' => "Montana",'country_id' => 33),

            array('name' => "Oblast Sofiya-Grad",'country_id' => 33),

            array('name' => "Pazardzhik",'country_id' => 33),

            array('name' => "Pernik",'country_id' => 33),

            array('name' => "Pleven",'country_id' => 33),

            array('name' => "Plovdiv",'country_id' => 33),

            array('name' => "Razgrad",'country_id' => 33),

            array('name' => "Ruse",'country_id' => 33),

            array('name' => "Shumen",'country_id' => 33),

            array('name' => "Silistra",'country_id' => 33),

            array('name' => "Sliven",'country_id' => 33),

            array('name' => "Smoljan",'country_id' => 33),

            array('name' => "Sofija grad",'country_id' => 33),

            array('name' => "Sofijska oblast",'country_id' => 33),

            array('name' => "Stara Zagora",'country_id' => 33),

            array('name' => "Targovishte",'country_id' => 33),

            array('name' => "Varna",'country_id' => 33),

            array('name' => "Veliko Tarnovo",'country_id' => 33),

            array('name' => "Vidin",'country_id' => 33),

            array('name' => "Vraca",'country_id' => 33),

            array('name' => "Yablaniza",'country_id' => 33),

            array('name' => "Bale",'country_id' => 34),

            array('name' => "Bam",'country_id' => 34),

            array('name' => "Bazega",'country_id' => 34),

            array('name' => "Bougouriba",'country_id' => 34),

            array('name' => "Boulgou",'country_id' => 34),

            array('name' => "Boulkiemde",'country_id' => 34),

            array('name' => "Comoe",'country_id' => 34),

            array('name' => "Ganzourgou",'country_id' => 34),

            array('name' => "Gnagna",'country_id' => 34),

            array('name' => "Gourma",'country_id' => 34),

            array('name' => "Houet",'country_id' => 34),

            array('name' => "Ioba",'country_id' => 34),

            array('name' => "Kadiogo",'country_id' => 34),

            array('name' => "Kenedougou",'country_id' => 34),

            array('name' => "Komandjari",'country_id' => 34),

            array('name' => "Kompienga",'country_id' => 34),

            array('name' => "Kossi",'country_id' => 34),

            array('name' => "Kouritenga",'country_id' => 34),

            array('name' => "Kourweogo",'country_id' => 34),

            array('name' => "Leraba",'country_id' => 34),

            array('name' => "Mouhoun",'country_id' => 34),

            array('name' => "Nahouri",'country_id' => 34),

            array('name' => "Namentenga",'country_id' => 34),

            array('name' => "Noumbiel",'country_id' => 34),

            array('name' => "Oubritenga",'country_id' => 34),

            array('name' => "Oudalan",'country_id' => 34),

            array('name' => "Passore",'country_id' => 34),

            array('name' => "Poni",'country_id' => 34),

            array('name' => "Sanguie",'country_id' => 34),

            array('name' => "Sanmatenga",'country_id' => 34),

            array('name' => "Seno",'country_id' => 34),

            array('name' => "Sissili",'country_id' => 34),

            array('name' => "Soum",'country_id' => 34),

            array('name' => "Sourou",'country_id' => 34),

            array('name' => "Tapoa",'country_id' => 34),

            array('name' => "Tuy",'country_id' => 34),

            array('name' => "Yatenga",'country_id' => 34),

            array('name' => "Zondoma",'country_id' => 34),

            array('name' => "Zoundweogo",'country_id' => 34),

            array('name' => "Bubanza",'country_id' => 35),

            array('name' => "Bujumbura",'country_id' => 35),

            array('name' => "Bururi",'country_id' => 35),

            array('name' => "Cankuzo",'country_id' => 35),

            array('name' => "Cibitoke",'country_id' => 35),

            array('name' => "Gitega",'country_id' => 35),

            array('name' => "Karuzi",'country_id' => 35),

            array('name' => "Kayanza",'country_id' => 35),

            array('name' => "Kirundo",'country_id' => 35),

            array('name' => "Makamba",'country_id' => 35),

            array('name' => "Muramvya",'country_id' => 35),

            array('name' => "Muyinga",'country_id' => 35),

            array('name' => "Ngozi",'country_id' => 35),

            array('name' => "Rutana",'country_id' => 35),

            array('name' => "Ruyigi",'country_id' => 35),

            array('name' => "Banteay Mean Chey",'country_id' => 36),

            array('name' => "Bat Dambang",'country_id' => 36),

            array('name' => "Kampong Cham",'country_id' => 36),

            array('name' => "Kampong Chhnang",'country_id' => 36),

            array('name' => "Kampong Spoeu",'country_id' => 36),

            array('name' => "Kampong Thum",'country_id' => 36),

            array('name' => "Kampot",'country_id' => 36),

            array('name' => "Kandal",'country_id' => 36),

            array('name' => "Kaoh Kong",'country_id' => 36),

            array('name' => "Kracheh",'country_id' => 36),

            array('name' => "Krong Kaeb",'country_id' => 36),

            array('name' => "Krong Pailin",'country_id' => 36),

            array('name' => "Krong Preah Sihanouk",'country_id' => 36),

            array('name' => "Mondol Kiri",'country_id' => 36),

            array('name' => "Otdar Mean Chey",'country_id' => 36),

            array('name' => "Phnum Penh",'country_id' => 36),

            array('name' => "Pousat",'country_id' => 36),

            array('name' => "Preah Vihear",'country_id' => 36),

            array('name' => "Prey Veaeng",'country_id' => 36),

            array('name' => "Rotanak Kiri",'country_id' => 36),

            array('name' => "Siem Reab",'country_id' => 36),

            array('name' => "Stueng Traeng",'country_id' => 36),

            array('name' => "Svay Rieng",'country_id' => 36),

            array('name' => "Takaev",'country_id' => 36),

            array('name' => "Adamaoua",'country_id' => 37),

            array('name' => "Centre",'country_id' => 37),

            array('name' => "Est",'country_id' => 37),

            array('name' => "Littoral",'country_id' => 37),

            array('name' => "Nord",'country_id' => 37),

            array('name' => "Nord Extreme",'country_id' => 37),

            array('name' => "Nordouest",'country_id' => 37),

            array('name' => "Ouest",'country_id' => 37),

            array('name' => "Sud",'country_id' => 37),

            array('name' => "Sudouest",'country_id' => 37),

            array('name' => "Alberta",'country_id' => 38),

            array('name' => "British Columbia",'country_id' => 38),

            array('name' => "Manitoba",'country_id' => 38),

            array('name' => "New Brunswick",'country_id' => 38),

            array('name' => "Newfoundland and Labrador",'country_id' => 38),

            array('name' => "Northwest Territories",'country_id' => 38),

            array('name' => "Nova Scotia",'country_id' => 38),

            array('name' => "Nunavut",'country_id' => 38),

            array('name' => "Ontario",'country_id' => 38),

            array('name' => "Prince Edward Island",'country_id' => 38),

            array('name' => "Quebec",'country_id' => 38),

            array('name' => "Saskatchewan",'country_id' => 38),

            array('name' => "Yukon",'country_id' => 38),

            array('name' => "Boavista",'country_id' => 39),

            array('name' => "Brava",'country_id' => 39),

            array('name' => "Fogo",'country_id' => 39),

            array('name' => "Maio",'country_id' => 39),

            array('name' => "Sal",'country_id' => 39),

            array('name' => "Santo Antao",'country_id' => 39),

            array('name' => "Sao Nicolau",'country_id' => 39),

            array('name' => "Sao Tiago",'country_id' => 39),

            array('name' => "Sao Vicente",'country_id' => 39),

            array('name' => "Grand Cayman",'country_id' => 40),

            array('name' => "Bamingui-Bangoran",'country_id' => 41),

            array('name' => "Bangui",'country_id' => 41),

            array('name' => "Basse-Kotto",'country_id' => 41),

            array('name' => "Haut-Mbomou",'country_id' => 41),

            array('name' => "Haute-Kotto",'country_id' => 41),

            array('name' => "Kemo",'country_id' => 41),

            array('name' => "Lobaye",'country_id' => 41),

            array('name' => "Mambere-Kadei",'country_id' => 41),

            array('name' => "Mbomou",'country_id' => 41),

            array('name' => "Nana-Gribizi",'country_id' => 41),

            array('name' => "Nana-Mambere",'country_id' => 41),

            array('name' => "Ombella Mpoko",'country_id' => 41),

            array('name' => "Ouaka",'country_id' => 41),

            array('name' => "Ouham",'country_id' => 41),

            array('name' => "Ouham-Pende",'country_id' => 41),

            array('name' => "Sangha-Mbaere",'country_id' => 41),

            array('name' => "Vakaga",'country_id' => 41),

            array('name' => "Batha",'country_id' => 42),

            array('name' => "Biltine",'country_id' => 42),

            array('name' => "Bourkou-Ennedi-Tibesti",'country_id' => 42),

            array('name' => "Chari-Baguirmi",'country_id' => 42),

            array('name' => "Guera",'country_id' => 42),

            array('name' => "Kanem",'country_id' => 42),

            array('name' => "Lac",'country_id' => 42),

            array('name' => "Logone Occidental",'country_id' => 42),

            array('name' => "Logone Oriental",'country_id' => 42),

            array('name' => "Mayo-Kebbi",'country_id' => 42),

            array('name' => "Moyen-Chari",'country_id' => 42),

            array('name' => "Ouaddai",'country_id' => 42),

            array('name' => "Salamat",'country_id' => 42),

            array('name' => "Tandjile",'country_id' => 42),

            array('name' => "Aisen",'country_id' => 43),

            array('name' => "Antofagasta",'country_id' => 43),

            array('name' => "Araucania",'country_id' => 43),

            array('name' => "Atacama",'country_id' => 43),

            array('name' => "Bio Bio",'country_id' => 43),

            array('name' => "Coquimbo",'country_id' => 43),

            array('name' => "Libertador General Bernardo O'",'country_id' => 43),

            array('name' => "Los Lagos",'country_id' => 43),

            array('name' => "Magellanes",'country_id' => 43),

            array('name' => "Maule",'country_id' => 43),

            array('name' => "Metropolitana",'country_id' => 43),

            array('name' => "Metropolitana de Santiago",'country_id' => 43),

            array('name' => "Tarapaca",'country_id' => 43),

            array('name' => "Valparaiso",'country_id' => 43),

            array('name' => "Anhui",'country_id' => 44),

            array('name' => "Anhui Province",'country_id' => 44),

            array('name' => "Anhui Sheng",'country_id' => 44),

            array('name' => "Aomen",'country_id' => 44),

            array('name' => "Beijing",'country_id' => 44),

            array('name' => "Beijing Shi",'country_id' => 44),

            array('name' => "Chongqing",'country_id' => 44),

            array('name' => "Fujian",'country_id' => 44),

            array('name' => "Fujian Sheng",'country_id' => 44),

            array('name' => "Gansu",'country_id' => 44),

            array('name' => "Guangdong",'country_id' => 44),

            array('name' => "Guangdong Sheng",'country_id' => 44),

            array('name' => "Guangxi",'country_id' => 44),

            array('name' => "Guizhou",'country_id' => 44),

            array('name' => "Hainan",'country_id' => 44),

            array('name' => "Hebei",'country_id' => 44),

            array('name' => "Heilongjiang",'country_id' => 44),

            array('name' => "Henan",'country_id' => 44),

            array('name' => "Hubei",'country_id' => 44),

            array('name' => "Hunan",'country_id' => 44),

            array('name' => "Jiangsu",'country_id' => 44),

            array('name' => "Jiangsu Sheng",'country_id' => 44),

            array('name' => "Jiangxi",'country_id' => 44),

            array('name' => "Jilin",'country_id' => 44),

            array('name' => "Liaoning",'country_id' => 44),

            array('name' => "Liaoning Sheng",'country_id' => 44),

            array('name' => "Nei Monggol",'country_id' => 44),

            array('name' => "Ningxia Hui",'country_id' => 44),

            array('name' => "Qinghai",'country_id' => 44),

            array('name' => "Shaanxi",'country_id' => 44),

            array('name' => "Shandong",'country_id' => 44),

            array('name' => "Shandong Sheng",'country_id' => 44),

            array('name' => "Shanghai",'country_id' => 44),

            array('name' => "Shanxi",'country_id' => 44),

            array('name' => "Sichuan",'country_id' => 44),

            array('name' => "Tianjin",'country_id' => 44),

            array('name' => "Xianggang",'country_id' => 44),

            array('name' => "Xinjiang",'country_id' => 44),

            array('name' => "Xizang",'country_id' => 44),

            array('name' => "Yunnan",'country_id' => 44),

            array('name' => "Zhejiang",'country_id' => 44),

            array('name' => "Zhejiang Sheng",'country_id' => 44),

            array('name' => "Christmas Island",'country_id' => 45),

            array('name' => "Cocos (Keeling) Islands",'country_id' => 46),

            array('name' => "Amazonas",'country_id' => 47),

            array('name' => "Antioquia",'country_id' => 47),

            array('name' => "Arauca",'country_id' => 47),

            array('name' => "Atlantico",'country_id' => 47),

            array('name' => "Bogota",'country_id' => 47),

            array('name' => "Bolivar",'country_id' => 47),

            array('name' => "Boyaca",'country_id' => 47),

            array('name' => "Caldas",'country_id' => 47),

            array('name' => "Caqueta",'country_id' => 47),

            array('name' => "Casanare",'country_id' => 47),

            array('name' => "Cauca",'country_id' => 47),

            array('name' => "Cesar",'country_id' => 47),

            array('name' => "Choco",'country_id' => 47),

            array('name' => "Cordoba",'country_id' => 47),

            array('name' => "Cundinamarca",'country_id' => 47),

            array('name' => "Guainia",'country_id' => 47),

            array('name' => "Guaviare",'country_id' => 47),

            array('name' => "Huila",'country_id' => 47),

            array('name' => "La Guajira",'country_id' => 47),

            array('name' => "Magdalena",'country_id' => 47),

            array('name' => "Meta",'country_id' => 47),

            array('name' => "Narino",'country_id' => 47),

            array('name' => "Norte de Santander",'country_id' => 47),

            array('name' => "Putumayo",'country_id' => 47),

            array('name' => "Quindio",'country_id' => 47),

            array('name' => "Risaralda",'country_id' => 47),

            array('name' => "San Andres y Providencia",'country_id' => 47),

            array('name' => "Santander",'country_id' => 47),

            array('name' => "Sucre",'country_id' => 47),

            array('name' => "Tolima",'country_id' => 47),

            array('name' => "Valle del Cauca",'country_id' => 47),

            array('name' => "Vaupes",'country_id' => 47),

            array('name' => "Vichada",'country_id' => 47),

            array('name' => "Mwali",'country_id' => 48),

            array('name' => "Njazidja",'country_id' => 48),

            array('name' => "Nzwani",'country_id' => 48),

            array('name' => "Bouenza",'country_id' => 49),

            array('name' => "Brazzaville",'country_id' => 49),

            array('name' => "Cuvette",'country_id' => 49),

            array('name' => "Kouilou",'country_id' => 49),

            array('name' => "Lekoumou",'country_id' => 49),

            array('name' => "Likouala",'country_id' => 49),

            array('name' => "Niari",'country_id' => 49),

            array('name' => "Plateaux",'country_id' => 49),

            array('name' => "Pool",'country_id' => 49),

            array('name' => "Sangha",'country_id' => 49),

            array('name' => "Bandundu",'country_id' => 50),

            array('name' => "Bas-Congo",'country_id' => 50),

            array('name' => "Equateur",'country_id' => 50),

            array('name' => "Haut-Congo",'country_id' => 50),

            array('name' => "Kasai-Occidental",'country_id' => 50),

            array('name' => "Kasai-Oriental",'country_id' => 50),

            array('name' => "Katanga",'country_id' => 50),

            array('name' => "Kinshasa",'country_id' => 50),

            array('name' => "Maniema",'country_id' => 50),

            array('name' => "Nord-Kivu",'country_id' => 50),

            array('name' => "Sud-Kivu",'country_id' => 50),

            array('name' => "Aitutaki",'country_id' => 51),

            array('name' => "Atiu",'country_id' => 51),

            array('name' => "Mangaia",'country_id' => 51),

            array('name' => "Manihiki",'country_id' => 51),

            array('name' => "Mauke",'country_id' => 51),

            array('name' => "Mitiaro",'country_id' => 51),

            array('name' => "Nassau",'country_id' => 51),

            array('name' => "Pukapuka",'country_id' => 51),

            array('name' => "Rakahanga",'country_id' => 51),

            array('name' => "Rarotonga",'country_id' => 51),

            array('name' => "Tongareva",'country_id' => 51),

            array('name' => "Alajuela",'country_id' => 52),

            array('name' => "Cartago",'country_id' => 52),

            array('name' => "Guanacaste",'country_id' => 52),

            array('name' => "Heredia",'country_id' => 52),

            array('name' => "Limon",'country_id' => 52),

            array('name' => "Puntarenas",'country_id' => 52),

            array('name' => "San Jose",'country_id' => 52),

            array('name' => "Abidjan",'country_id' => 53),

            array('name' => "Agneby",'country_id' => 53),

            array('name' => "Bafing",'country_id' => 53),

            array('name' => "Denguele",'country_id' => 53),

            array('name' => "Dix-huit Montagnes",'country_id' => 53),

            array('name' => "Fromager",'country_id' => 53),

            array('name' => "Haut-Sassandra",'country_id' => 53),

            array('name' => "Lacs",'country_id' => 53),

            array('name' => "Lagunes",'country_id' => 53),

            array('name' => "Marahoue",'country_id' => 53),

            array('name' => "Moyen-Cavally",'country_id' => 53),

            array('name' => "Moyen-Comoe",'country_id' => 53),

            array('name' => "N'zi-Comoe",'country_id' => 53),

            array('name' => "Sassandra",'country_id' => 53),

            array('name' => "Savanes",'country_id' => 53),

            array('name' => "Sud-Bandama",'country_id' => 53),

            array('name' => "Sud-Comoe",'country_id' => 53),

            array('name' => "Vallee du Bandama",'country_id' => 53),

            array('name' => "Worodougou",'country_id' => 53),

            array('name' => "Zanzan",'country_id' => 53),

            array('name' => "Bjelovar-Bilogora",'country_id' => 54),

            array('name' => "Dubrovnik-Neretva",'country_id' => 54),

            array('name' => "Grad Zagreb",'country_id' => 54),

            array('name' => "Istra",'country_id' => 54),

            array('name' => "Karlovac",'country_id' => 54),

            array('name' => "Koprivnica-Krizhevci",'country_id' => 54),

            array('name' => "Krapina-Zagorje",'country_id' => 54),

            array('name' => "Lika-Senj",'country_id' => 54),

            array('name' => "Medhimurje",'country_id' => 54),

            array('name' => "Medimurska Zupanija",'country_id' => 54),

            array('name' => "Osijek-Baranja",'country_id' => 54),

            array('name' => "Osjecko-Baranjska Zupanija",'country_id' => 54),

            array('name' => "Pozhega-Slavonija",'country_id' => 54),

            array('name' => "Primorje-Gorski Kotar",'country_id' => 54),

            array('name' => "Shibenik-Knin",'country_id' => 54),

            array('name' => "Sisak-Moslavina",'country_id' => 54),

            array('name' => "Slavonski Brod-Posavina",'country_id' => 54),

            array('name' => "Split-Dalmacija",'country_id' => 54),

            array('name' => "Varazhdin",'country_id' => 54),

            array('name' => "Virovitica-Podravina",'country_id' => 54),

            array('name' => "Vukovar-Srijem",'country_id' => 54),

            array('name' => "Zadar",'country_id' => 54),

            array('name' => "Zagreb",'country_id' => 54),

            array('name' => "Camaguey",'country_id' => 55),

            array('name' => "Ciego de Avila",'country_id' => 55),

            array('name' => "Cienfuegos",'country_id' => 55),

            array('name' => "Ciudad de la Habana",'country_id' => 55),

            array('name' => "Granma",'country_id' => 55),

            array('name' => "Guantanamo",'country_id' => 55),

            array('name' => "Habana",'country_id' => 55),

            array('name' => "Holguin",'country_id' => 55),

            array('name' => "Isla de la Juventud",'country_id' => 55),

            array('name' => "La Habana",'country_id' => 55),

            array('name' => "Las Tunas",'country_id' => 55),

            array('name' => "Matanzas",'country_id' => 55),

            array('name' => "Pinar del Rio",'country_id' => 55),

            array('name' => "Sancti Spiritus",'country_id' => 55),

            array('name' => "Santiago de Cuba",'country_id' => 55),

            array('name' => "Villa Clara",'country_id' => 55),

            array('name' => "Government controlled area",'country_id' => 56),

            array('name' => "Limassol",'country_id' => 56),

            array('name' => "Nicosia District",'country_id' => 56),

            array('name' => "Paphos",'country_id' => 56),

            array('name' => "Turkish controlled area",'country_id' => 56),

            array('name' => "Central Bohemian",'country_id' => 57),

            array('name' => "Frycovice",'country_id' => 57),

            array('name' => "Jihocesky Kraj",'country_id' => 57),

            array('name' => "Jihochesky",'country_id' => 57),

            array('name' => "Jihomoravsky",'country_id' => 57),

            array('name' => "Karlovarsky",'country_id' => 57),

            array('name' => "Klecany",'country_id' => 57),

            array('name' => "Kralovehradecky",'country_id' => 57),

            array('name' => "Liberecky",'country_id' => 57),

            array('name' => "Lipov",'country_id' => 57),

            array('name' => "Moravskoslezsky",'country_id' => 57),

            array('name' => "Olomoucky",'country_id' => 57),

            array('name' => "Olomoucky Kraj",'country_id' => 57),

            array('name' => "Pardubicky",'country_id' => 57),

            array('name' => "Plzensky",'country_id' => 57),

            array('name' => "Praha",'country_id' => 57),

            array('name' => "Rajhrad",'country_id' => 57),

            array('name' => "Smirice",'country_id' => 57),

            array('name' => "South Moravian",'country_id' => 57),

            array('name' => "Straz nad Nisou",'country_id' => 57),

            array('name' => "Stredochesky",'country_id' => 57),

            array('name' => "Unicov",'country_id' => 57),

            array('name' => "Ustecky",'country_id' => 57),

            array('name' => "Valletta",'country_id' => 57),

            array('name' => "Velesin",'country_id' => 57),

            array('name' => "Vysochina",'country_id' => 57),

            array('name' => "Zlinsky",'country_id' => 57),

            array('name' => "Arhus",'country_id' => 58),

            array('name' => "Bornholm",'country_id' => 58),

            array('name' => "Frederiksborg",'country_id' => 58),

            array('name' => "Fyn",'country_id' => 58),

            array('name' => "Hovedstaden",'country_id' => 58),

            array('name' => "Kobenhavn",'country_id' => 58),

            array('name' => "Kobenhavns Amt",'country_id' => 58),

            array('name' => "Kobenhavns Kommune",'country_id' => 58),

            array('name' => "Nordjylland",'country_id' => 58),

            array('name' => "Ribe",'country_id' => 58),

            array('name' => "Ringkobing",'country_id' => 58),

            array('name' => "Roervig",'country_id' => 58),

            array('name' => "Roskilde",'country_id' => 58),

            array('name' => "Roslev",'country_id' => 58),

            array('name' => "Sjaelland",'country_id' => 58),

            array('name' => "Soeborg",'country_id' => 58),

            array('name' => "Sonderjylland",'country_id' => 58),

            array('name' => "Storstrom",'country_id' => 58),

            array('name' => "Syddanmark",'country_id' => 58),

            array('name' => "Toelloese",'country_id' => 58),

            array('name' => "Vejle",'country_id' => 58),

            array('name' => "Vestsjalland",'country_id' => 58),

            array('name' => "Viborg",'country_id' => 58),

            array('name' => "'Ali Sabih",'country_id' => 59),

            array('name' => "Dikhil",'country_id' => 59),

            array('name' => "Jibuti",'country_id' => 59),

            array('name' => "Tajurah",'country_id' => 59),

            array('name' => "Ubuk",'country_id' => 59),

            array('name' => "Saint Andrew",'country_id' => 60),

            array('name' => "Saint David",'country_id' => 60),

            array('name' => "Saint George",'country_id' => 60),

            array('name' => "Saint John",'country_id' => 60),

            array('name' => "Saint Joseph",'country_id' => 60),

            array('name' => "Saint Luke",'country_id' => 60),

            array('name' => "Saint Mark",'country_id' => 60),

            array('name' => "Saint Patrick",'country_id' => 60),

            array('name' => "Saint Paul",'country_id' => 60),

            array('name' => "Saint Peter",'country_id' => 60),

            array('name' => "Azua",'country_id' => 61),

            array('name' => "Bahoruco",'country_id' => 61),

            array('name' => "Barahona",'country_id' => 61),

            array('name' => "Dajabon",'country_id' => 61),

            array('name' => "Distrito Nacional",'country_id' => 61),

            array('name' => "Duarte",'country_id' => 61),

            array('name' => "El Seybo",'country_id' => 61),

            array('name' => "Elias Pina",'country_id' => 61),

            array('name' => "Espaillat",'country_id' => 61),

            array('name' => "Hato Mayor",'country_id' => 61),

            array('name' => "Independencia",'country_id' => 61),

            array('name' => "La Altagracia",'country_id' => 61),

            array('name' => "La Romana",'country_id' => 61),

            array('name' => "La Vega",'country_id' => 61),

            array('name' => "Maria Trinidad Sanchez",'country_id' => 61),

            array('name' => "Monsenor Nouel",'country_id' => 61),

            array('name' => "Monte Cristi",'country_id' => 61),

            array('name' => "Monte Plata",'country_id' => 61),

            array('name' => "Pedernales",'country_id' => 61),

            array('name' => "Peravia",'country_id' => 61),

            array('name' => "Puerto Plata",'country_id' => 61),

            array('name' => "Salcedo",'country_id' => 61),

            array('name' => "Samana",'country_id' => 61),

            array('name' => "San Cristobal",'country_id' => 61),

            array('name' => "San Juan",'country_id' => 61),

            array('name' => "San Pedro de Macoris",'country_id' => 61),

            array('name' => "Sanchez Ramirez",'country_id' => 61),

            array('name' => "Santiago",'country_id' => 61),

            array('name' => "Santiago Rodriguez",'country_id' => 61),

            array('name' => "Valverde",'country_id' => 61),

            array('name' => "Aileu",'country_id' => 62),

            array('name' => "Ainaro",'country_id' => 62),

            array('name' => "Ambeno",'country_id' => 62),

            array('name' => "Baucau",'country_id' => 62),

            array('name' => "Bobonaro",'country_id' => 62),

            array('name' => "Cova Lima",'country_id' => 62),

            array('name' => "Dili",'country_id' => 62),

            array('name' => "Ermera",'country_id' => 62),

            array('name' => "Lautem",'country_id' => 62),

            array('name' => "Liquica",'country_id' => 62),

            array('name' => "Manatuto",'country_id' => 62),

            array('name' => "Manufahi",'country_id' => 62),

            array('name' => "Viqueque",'country_id' => 62),

            array('name' => "Azuay",'country_id' => 63),

            array('name' => "Bolivar",'country_id' => 63),

            array('name' => "Canar",'country_id' => 63),

            array('name' => "Carchi",'country_id' => 63),

            array('name' => "Chimborazo",'country_id' => 63),

            array('name' => "Cotopaxi",'country_id' => 63),

            array('name' => "El Oro",'country_id' => 63),

            array('name' => "Esmeraldas",'country_id' => 63),

            array('name' => "Galapagos",'country_id' => 63),

            array('name' => "Guayas",'country_id' => 63),

            array('name' => "Imbabura",'country_id' => 63),

            array('name' => "Loja",'country_id' => 63),

            array('name' => "Los Rios",'country_id' => 63),

            array('name' => "Manabi",'country_id' => 63),

            array('name' => "Morona Santiago",'country_id' => 63),

            array('name' => "Napo",'country_id' => 63),

            array('name' => "Orellana",'country_id' => 63),

            array('name' => "Pastaza",'country_id' => 63),

            array('name' => "Pichincha",'country_id' => 63),

            array('name' => "Sucumbios",'country_id' => 63),

            array('name' => "Tungurahua",'country_id' => 63),

            array('name' => "Zamora Chinchipe",'country_id' => 63),

            array('name' => "Aswan",'country_id' => 64),

            array('name' => "Asyut",'country_id' => 64),

            array('name' => "Bani Suwayf",'country_id' => 64),

            array('name' => "Bur Sa'id",'country_id' => 64),

            array('name' => "Cairo",'country_id' => 64),

            array('name' => "Dumyat",'country_id' => 64),

            array('name' => "Kafr-ash-Shaykh",'country_id' => 64),

            array('name' => "Matruh",'country_id' => 64),

            array('name' => "Muhafazat ad Daqahliyah",'country_id' => 64),

            array('name' => "Muhafazat al Fayyum",'country_id' => 64),

            array('name' => "Muhafazat al Gharbiyah",'country_id' => 64),

            array('name' => "Muhafazat al Iskandariyah",'country_id' => 64),

            array('name' => "Muhafazat al Qahirah",'country_id' => 64),

            array('name' => "Qina",'country_id' => 64),

            array('name' => "Sawhaj",'country_id' => 64),

            array('name' => "Sina al-Janubiyah",'country_id' => 64),

            array('name' => "Sina ash-Shamaliyah",'country_id' => 64),

            array('name' => "ad-Daqahliyah",'country_id' => 64),

            array('name' => "al-Bahr-al-Ahmar",'country_id' => 64),

            array('name' => "al-Buhayrah",'country_id' => 64),

            array('name' => "al-Fayyum",'country_id' => 64),

            array('name' => "al-Gharbiyah",'country_id' => 64),

            array('name' => "al-Iskandariyah",'country_id' => 64),

            array('name' => "al-Ismailiyah",'country_id' => 64),

            array('name' => "al-Jizah",'country_id' => 64),

            array('name' => "al-Minufiyah",'country_id' => 64),

            array('name' => "al-Minya",'country_id' => 64),

            array('name' => "al-Qahira",'country_id' => 64),

            array('name' => "al-Qalyubiyah",'country_id' => 64),

            array('name' => "al-Uqsur",'country_id' => 64),

            array('name' => "al-Wadi al-Jadid",'country_id' => 64),

            array('name' => "as-Suways",'country_id' => 64),

            array('name' => "ash-Sharqiyah",'country_id' => 64),

            array('name' => "Ahuachapan",'country_id' => 65),

            array('name' => "Cabanas",'country_id' => 65),

            array('name' => "Chalatenango",'country_id' => 65),

            array('name' => "Cuscatlan",'country_id' => 65),

            array('name' => "La Libertad",'country_id' => 65),

            array('name' => "La Paz",'country_id' => 65),

            array('name' => "La Union",'country_id' => 65),

            array('name' => "Morazan",'country_id' => 65),

            array('name' => "San Miguel",'country_id' => 65),

            array('name' => "San Salvador",'country_id' => 65),

            array('name' => "San Vicente",'country_id' => 65),

            array('name' => "Santa Ana",'country_id' => 65),

            array('name' => "Sonsonate",'country_id' => 65),

            array('name' => "Usulutan",'country_id' => 65),

            array('name' => "Annobon",'country_id' => 66),

            array('name' => "Bioko Norte",'country_id' => 66),

            array('name' => "Bioko Sur",'country_id' => 66),

            array('name' => "Centro Sur",'country_id' => 66),

            array('name' => "Kie-Ntem",'country_id' => 66),

            array('name' => "Litoral",'country_id' => 66),

            array('name' => "Wele-Nzas",'country_id' => 66),

            array('name' => "Anseba",'country_id' => 67),

            array('name' => "Debub",'country_id' => 67),

            array('name' => "Debub-Keih-Bahri",'country_id' => 67),

            array('name' => "Gash-Barka",'country_id' => 67),

            array('name' => "Maekel",'country_id' => 67),

            array('name' => "Semien-Keih-Bahri",'country_id' => 67),

            array('name' => "Harju",'country_id' => 68),

            array('name' => "Hiiu",'country_id' => 68),

            array('name' => "Ida-Viru",'country_id' => 68),

            array('name' => "Jarva",'country_id' => 68),

            array('name' => "Jogeva",'country_id' => 68),

            array('name' => "Laane",'country_id' => 68),

            array('name' => "Laane-Viru",'country_id' => 68),

            array('name' => "Parnu",'country_id' => 68),

            array('name' => "Polva",'country_id' => 68),

            array('name' => "Rapla",'country_id' => 68),

            array('name' => "Saare",'country_id' => 68),

            array('name' => "Tartu",'country_id' => 68),

            array('name' => "Valga",'country_id' => 68),

            array('name' => "Viljandi",'country_id' => 68),

            array('name' => "Voru",'country_id' => 68),

            array('name' => "Addis Abeba",'country_id' => 69),

            array('name' => "Afar",'country_id' => 69),

            array('name' => "Amhara",'country_id' => 69),

            array('name' => "Benishangul",'country_id' => 69),

            array('name' => "Diredawa",'country_id' => 69),

            array('name' => "Gambella",'country_id' => 69),

            array('name' => "Harar",'country_id' => 69),

            array('name' => "Jigjiga",'country_id' => 69),

            array('name' => "Mekele",'country_id' => 69),

            array('name' => "Oromia",'country_id' => 69),

            array('name' => "Somali",'country_id' => 69),

            array('name' => "Southern",'country_id' => 69),

            array('name' => "Tigray",'country_id' => 69),

            array('name' => "Christmas Island",'country_id' => 70),

            array('name' => "Cocos Islands",'country_id' => 70),

            array('name' => "Coral Sea Islands",'country_id' => 70),

            array('name' => "Falkland Islands",'country_id' => 71),

            array('name' => "South Georgia",'country_id' => 71),

            array('name' => "Klaksvik",'country_id' => 72),

            array('name' => "Nor ara Eysturoy",'country_id' => 72),

            array('name' => "Nor oy",'country_id' => 72),

            array('name' => "Sandoy",'country_id' => 72),

            array('name' => "Streymoy",'country_id' => 72),

            array('name' => "Su uroy",'country_id' => 72),

            array('name' => "Sy ra Eysturoy",'country_id' => 72),

            array('name' => "Torshavn",'country_id' => 72),

            array('name' => "Vaga",'country_id' => 72),

            array('name' => "Central",'country_id' => 73),

            array('name' => "Eastern",'country_id' => 73),

            array('name' => "Northern",'country_id' => 73),

            array('name' => "South Pacific",'country_id' => 73),

            array('name' => "Western",'country_id' => 73),

            array('name' => "Ahvenanmaa",'country_id' => 74),

            array('name' => "Etela-Karjala",'country_id' => 74),

            array('name' => "Etela-Pohjanmaa",'country_id' => 74),

            array('name' => "Etela-Savo",'country_id' => 74),

            array('name' => "Etela-Suomen Laani",'country_id' => 74),

            array('name' => "Ita-Suomen Laani",'country_id' => 74),

            array('name' => "Ita-Uusimaa",'country_id' => 74),

            array('name' => "Kainuu",'country_id' => 74),

            array('name' => "Kanta-Hame",'country_id' => 74),

            array('name' => "Keski-Pohjanmaa",'country_id' => 74),

            array('name' => "Keski-Suomi",'country_id' => 74),

            array('name' => "Kymenlaakso",'country_id' => 74),

            array('name' => "Lansi-Suomen Laani",'country_id' => 74),

            array('name' => "Lappi",'country_id' => 74),

            array('name' => "Northern Savonia",'country_id' => 74),

            array('name' => "Ostrobothnia",'country_id' => 74),

            array('name' => "Oulun Laani",'country_id' => 74),

            array('name' => "Paijat-Hame",'country_id' => 74),

            array('name' => "Pirkanmaa",'country_id' => 74),

            array('name' => "Pohjanmaa",'country_id' => 74),

            array('name' => "Pohjois-Karjala",'country_id' => 74),

            array('name' => "Pohjois-Pohjanmaa",'country_id' => 74),

            array('name' => "Pohjois-Savo",'country_id' => 74),

            array('name' => "Saarijarvi",'country_id' => 74),

            array('name' => "Satakunta",'country_id' => 74),

            array('name' => "Southern Savonia",'country_id' => 74),

            array('name' => "Tavastia Proper",'country_id' => 74),

            array('name' => "Uleaborgs Lan",'country_id' => 74),

            array('name' => "Uusimaa",'country_id' => 74),

            array('name' => "Varsinais-Suomi",'country_id' => 74),

            array('name' => "Ain",'country_id' => 75),

            array('name' => "Aisne",'country_id' => 75),

            array('name' => "Albi Le Sequestre",'country_id' => 75),

            array('name' => "Allier",'country_id' => 75),

            array('name' => "Alpes-Cote dAzur",'country_id' => 75),

            array('name' => "Alpes-Maritimes",'country_id' => 75),

            array('name' => "Alpes-de-Haute-Provence",'country_id' => 75),

            array('name' => "Alsace",'country_id' => 75),

            array('name' => "Aquitaine",'country_id' => 75),

            array('name' => "Ardeche",'country_id' => 75),

            array('name' => "Ardennes",'country_id' => 75),

            array('name' => "Ariege",'country_id' => 75),

            array('name' => "Aube",'country_id' => 75),

            array('name' => "Aude",'country_id' => 75),

            array('name' => "Auvergne",'country_id' => 75),

            array('name' => "Aveyron",'country_id' => 75),

            array('name' => "Bas-Rhin",'country_id' => 75),

            array('name' => "Basse-Normandie",'country_id' => 75),

            array('name' => "Bouches-du-Rhone",'country_id' => 75),

            array('name' => "Bourgogne",'country_id' => 75),

            array('name' => "Bretagne",'country_id' => 75),

            array('name' => "Brittany",'country_id' => 75),

            array('name' => "Burgundy",'country_id' => 75),

            array('name' => "Calvados",'country_id' => 75),

            array('name' => "Cantal",'country_id' => 75),

            array('name' => "Cedex",'country_id' => 75),

            array('name' => "Centre",'country_id' => 75),

            array('name' => "Charente",'country_id' => 75),

            array('name' => "Charente-Maritime",'country_id' => 75),

            array('name' => "Cher",'country_id' => 75),

            array('name' => "Correze",'country_id' => 75),

            array('name' => "Corse-du-Sud",'country_id' => 75),

            array('name' => "Cote-d'Or",'country_id' => 75),

            array('name' => "Cotes-d'Armor",'country_id' => 75),

            array('name' => "Creuse",'country_id' => 75),

            array('name' => "Crolles",'country_id' => 75),

            array('name' => "Deux-Sevres",'country_id' => 75),

            array('name' => "Dordogne",'country_id' => 75),

            array('name' => "Doubs",'country_id' => 75),

            array('name' => "Drome",'country_id' => 75),

            array('name' => "Essonne",'country_id' => 75),

            array('name' => "Eure",'country_id' => 75),

            array('name' => "Eure-et-Loir",'country_id' => 75),

            array('name' => "Feucherolles",'country_id' => 75),

            array('name' => "Finistere",'country_id' => 75),

            array('name' => "Franche-Comte",'country_id' => 75),

            array('name' => "Gard",'country_id' => 75),

            array('name' => "Gers",'country_id' => 75),

            array('name' => "Gironde",'country_id' => 75),

            array('name' => "Haut-Rhin",'country_id' => 75),

            array('name' => "Haute-Corse",'country_id' => 75),

            array('name' => "Haute-Garonne",'country_id' => 75),

            array('name' => "Haute-Loire",'country_id' => 75),

            array('name' => "Haute-Marne",'country_id' => 75),

            array('name' => "Haute-Saone",'country_id' => 75),

            array('name' => "Haute-Savoie",'country_id' => 75),

            array('name' => "Haute-Vienne",'country_id' => 75),

            array('name' => "Hautes-Alpes",'country_id' => 75),

            array('name' => "Hautes-Pyrenees",'country_id' => 75),

            array('name' => "Hauts-de-Seine",'country_id' => 75),

            array('name' => "Herault",'country_id' => 75),

            array('name' => "Ile-de-France",'country_id' => 75),

            array('name' => "Ille-et-Vilaine",'country_id' => 75),

            array('name' => "Indre",'country_id' => 75),

            array('name' => "Indre-et-Loire",'country_id' => 75),

            array('name' => "Isere",'country_id' => 75),

            array('name' => "Jura",'country_id' => 75),

            array('name' => "Klagenfurt",'country_id' => 75),

            array('name' => "Landes",'country_id' => 75),

            array('name' => "Languedoc-Roussillon",'country_id' => 75),

            array('name' => "Larcay",'country_id' => 75),

            array('name' => "Le Castellet",'country_id' => 75),

            array('name' => "Le Creusot",'country_id' => 75),

            array('name' => "Limousin",'country_id' => 75),

            array('name' => "Loir-et-Cher",'country_id' => 75),

            array('name' => "Loire",'country_id' => 75),

            array('name' => "Loire-Atlantique",'country_id' => 75),

            array('name' => "Loiret",'country_id' => 75),

            array('name' => "Lorraine",'country_id' => 75),

            array('name' => "Lot",'country_id' => 75),

            array('name' => "Lot-et-Garonne",'country_id' => 75),

            array('name' => "Lower Normandy",'country_id' => 75),

            array('name' => "Lozere",'country_id' => 75),

            array('name' => "Maine-et-Loire",'country_id' => 75),

            array('name' => "Manche",'country_id' => 75),

            array('name' => "Marne",'country_id' => 75),

            array('name' => "Mayenne",'country_id' => 75),

            array('name' => "Meurthe-et-Moselle",'country_id' => 75),

            array('name' => "Meuse",'country_id' => 75),

            array('name' => "Midi-Pyrenees",'country_id' => 75),

            array('name' => "Morbihan",'country_id' => 75),

            array('name' => "Moselle",'country_id' => 75),

            array('name' => "Nievre",'country_id' => 75),

            array('name' => "Nord",'country_id' => 75),

            array('name' => "Nord-Pas-de-Calais",'country_id' => 75),

            array('name' => "Oise",'country_id' => 75),

            array('name' => "Orne",'country_id' => 75),

            array('name' => "Paris",'country_id' => 75),

            array('name' => "Pas-de-Calais",'country_id' => 75),

            array('name' => "Pays de la Loire",'country_id' => 75),

            array('name' => "Pays-de-la-Loire",'country_id' => 75),

            array('name' => "Picardy",'country_id' => 75),

            array('name' => "Puy-de-Dome",'country_id' => 75),

            array('name' => "Pyrenees-Atlantiques",'country_id' => 75),

            array('name' => "Pyrenees-Orientales",'country_id' => 75),

            array('name' => "Quelmes",'country_id' => 75),

            array('name' => "Rhone",'country_id' => 75),

            array('name' => "Rhone-Alpes",'country_id' => 75),

            array('name' => "Saint Ouen",'country_id' => 75),

            array('name' => "Saint Viatre",'country_id' => 75),

            array('name' => "Saone-et-Loire",'country_id' => 75),

            array('name' => "Sarthe",'country_id' => 75),

            array('name' => "Savoie",'country_id' => 75),

            array('name' => "Seine-Maritime",'country_id' => 75),

            array('name' => "Seine-Saint-Denis",'country_id' => 75),

            array('name' => "Seine-et-Marne",'country_id' => 75),

            array('name' => "Somme",'country_id' => 75),

            array('name' => "Sophia Antipolis",'country_id' => 75),

            array('name' => "Souvans",'country_id' => 75),

            array('name' => "Tarn",'country_id' => 75),

            array('name' => "Tarn-et-Garonne",'country_id' => 75),

            array('name' => "Territoire de Belfort",'country_id' => 75),

            array('name' => "Treignac",'country_id' => 75),

            array('name' => "Upper Normandy",'country_id' => 75),

            array('name' => "Val-d'Oise",'country_id' => 75),

            array('name' => "Val-de-Marne",'country_id' => 75),

            array('name' => "Var",'country_id' => 75),

            array('name' => "Vaucluse",'country_id' => 75),

            array('name' => "Vellise",'country_id' => 75),

            array('name' => "Vendee",'country_id' => 75),

            array('name' => "Vienne",'country_id' => 75),

            array('name' => "Vosges",'country_id' => 75),

            array('name' => "Yonne",'country_id' => 75),

            array('name' => "Yvelines",'country_id' => 75),

            array('name' => "Cayenne",'country_id' => 76),

            array('name' => "Saint-Laurent-du-Maroni",'country_id' => 76),

            array('name' => "Iles du Vent",'country_id' => 77),

            array('name' => "Iles sous le Vent",'country_id' => 77),

            array('name' => "Marquesas",'country_id' => 77),

            array('name' => "Tuamotu",'country_id' => 77),

            array('name' => "Tubuai",'country_id' => 77),

            array('name' => "Amsterdam",'country_id' => 78),

            array('name' => "Crozet Islands",'country_id' => 78),

            array('name' => "Kerguelen",'country_id' => 78),

            array('name' => "Estuaire",'country_id' => 79),

            array('name' => "Haut-Ogooue",'country_id' => 79),

            array('name' => "Moyen-Ogooue",'country_id' => 79),

            array('name' => "Ngounie",'country_id' => 79),

            array('name' => "Nyanga",'country_id' => 79),

            array('name' => "Ogooue-Ivindo",'country_id' => 79),

            array('name' => "Ogooue-Lolo",'country_id' => 79),

            array('name' => "Ogooue-Maritime",'country_id' => 79),

            array('name' => "Woleu-Ntem",'country_id' => 79),

            array('name' => "Banjul",'country_id' => 80),

            array('name' => "Basse",'country_id' => 80),

            array('name' => "Brikama",'country_id' => 80),

            array('name' => "Janjanbureh",'country_id' => 80),

            array('name' => "Kanifing",'country_id' => 80),

            array('name' => "Kerewan",'country_id' => 80),

            array('name' => "Kuntaur",'country_id' => 80),

            array('name' => "Mansakonko",'country_id' => 80),

            array('name' => "Abhasia",'country_id' => 81),

            array('name' => "Ajaria",'country_id' => 81),

            array('name' => "Guria",'country_id' => 81),

            array('name' => "Imereti",'country_id' => 81),

            array('name' => "Kaheti",'country_id' => 81),

            array('name' => "Kvemo Kartli",'country_id' => 81),

            array('name' => "Mcheta-Mtianeti",'country_id' => 81),

            array('name' => "Racha",'country_id' => 81),

            array('name' => "Samagrelo-Zemo Svaneti",'country_id' => 81),

            array('name' => "Samche-Zhavaheti",'country_id' => 81),

            array('name' => "Shida Kartli",'country_id' => 81),

            array('name' => "Tbilisi",'country_id' => 81),

            array('name' => "Auvergne",'country_id' => 82),

            array('name' => "Baden-Wurttemberg",'country_id' => 82),

            array('name' => "Bavaria",'country_id' => 82),

            array('name' => "Bayern",'country_id' => 82),

            array('name' => "Beilstein Wurtt",'country_id' => 82),

            array('name' => "Berlin",'country_id' => 82),

            array('name' => "Brandenburg",'country_id' => 82),

            array('name' => "Bremen",'country_id' => 82),

            array('name' => "Dreisbach",'country_id' => 82),

            array('name' => "Freistaat Bayern",'country_id' => 82),

            array('name' => "Hamburg",'country_id' => 82),

            array('name' => "Hannover",'country_id' => 82),

            array('name' => "Heroldstatt",'country_id' => 82),

            array('name' => "Hessen",'country_id' => 82),

            array('name' => "Kortenberg",'country_id' => 82),

            array('name' => "Laasdorf",'country_id' => 82),

            array('name' => "Land Baden-Wurttemberg",'country_id' => 82),

            array('name' => "Land Bayern",'country_id' => 82),

            array('name' => "Land Brandenburg",'country_id' => 82),

            array('name' => "Land Hessen",'country_id' => 82),

            array('name' => "Land Mecklenburg-Vorpommern",'country_id' => 82),

            array('name' => "Land Nordrhein-Westfalen",'country_id' => 82),

            array('name' => "Land Rheinland-Pfalz",'country_id' => 82),

            array('name' => "Land Sachsen",'country_id' => 82),

            array('name' => "Land Sachsen-Anhalt",'country_id' => 82),

            array('name' => "Land Thuringen",'country_id' => 82),

            array('name' => "Lower Saxony",'country_id' => 82),

            array('name' => "Mecklenburg-Vorpommern",'country_id' => 82),

            array('name' => "Mulfingen",'country_id' => 82),

            array('name' => "Munich",'country_id' => 82),

            array('name' => "Neubeuern",'country_id' => 82),

            array('name' => "Niedersachsen",'country_id' => 82),

            array('name' => "Noord-Holland",'country_id' => 82),

            array('name' => "Nordrhein-Westfalen",'country_id' => 82),

            array('name' => "North Rhine-Westphalia",'country_id' => 82),

            array('name' => "Osterode",'country_id' => 82),

            array('name' => "Rheinland-Pfalz",'country_id' => 82),

            array('name' => "Rhineland-Palatinate",'country_id' => 82),

            array('name' => "Saarland",'country_id' => 82),

            array('name' => "Sachsen",'country_id' => 82),

            array('name' => "Sachsen-Anhalt",'country_id' => 82),

            array('name' => "Saxony",'country_id' => 82),

            array('name' => "Schleswig-Holstein",'country_id' => 82),

            array('name' => "Thuringia",'country_id' => 82),

            array('name' => "Webling",'country_id' => 82),

            array('name' => "Weinstrabe",'country_id' => 82),

            array('name' => "schlobborn",'country_id' => 82),

            array('name' => "Ashanti",'country_id' => 83),

            array('name' => "Brong-Ahafo",'country_id' => 83),

            array('name' => "Central",'country_id' => 83),

            array('name' => "Eastern",'country_id' => 83),

            array('name' => "Greater Accra",'country_id' => 83),

            array('name' => "Northern",'country_id' => 83),

            array('name' => "Upper East",'country_id' => 83),

            array('name' => "Upper West",'country_id' => 83),

            array('name' => "Volta",'country_id' => 83),

            array('name' => "Western",'country_id' => 83),

            array('name' => "Gibraltar",'country_id' => 84),

            array('name' => "Acharnes",'country_id' => 85),

            array('name' => "Ahaia",'country_id' => 85),

            array('name' => "Aitolia kai Akarnania",'country_id' => 85),

            array('name' => "Argolis",'country_id' => 85),

            array('name' => "Arkadia",'country_id' => 85),

            array('name' => "Arta",'country_id' => 85),

            array('name' => "Attica",'country_id' => 85),

            array('name' => "Attiki",'country_id' => 85),

            array('name' => "Ayion Oros",'country_id' => 85),

            array('name' => "Crete",'country_id' => 85),

            array('name' => "Dodekanisos",'country_id' => 85),

            array('name' => "Drama",'country_id' => 85),

            array('name' => "Evia",'country_id' => 85),

            array('name' => "Evritania",'country_id' => 85),

            array('name' => "Evros",'country_id' => 85),

            array('name' => "Evvoia",'country_id' => 85),

            array('name' => "Florina",'country_id' => 85),

            array('name' => "Fokis",'country_id' => 85),

            array('name' => "Fthiotis",'country_id' => 85),

            array('name' => "Grevena",'country_id' => 85),

            array('name' => "Halandri",'country_id' => 85),

            array('name' => "Halkidiki",'country_id' => 85),

            array('name' => "Hania",'country_id' => 85),

            array('name' => "Heraklion",'country_id' => 85),

            array('name' => "Hios",'country_id' => 85),

            array('name' => "Ilia",'country_id' => 85),

            array('name' => "Imathia",'country_id' => 85),

            array('name' => "Ioannina",'country_id' => 85),

            array('name' => "Iraklion",'country_id' => 85),

            array('name' => "Karditsa",'country_id' => 85),

            array('name' => "Kastoria",'country_id' => 85),

            array('name' => "Kavala",'country_id' => 85),

            array('name' => "Kefallinia",'country_id' => 85),

            array('name' => "Kerkira",'country_id' => 85),

            array('name' => "Kiklades",'country_id' => 85),

            array('name' => "Kilkis",'country_id' => 85),

            array('name' => "Korinthia",'country_id' => 85),

            array('name' => "Kozani",'country_id' => 85),

            array('name' => "Lakonia",'country_id' => 85),

            array('name' => "Larisa",'country_id' => 85),

            array('name' => "Lasithi",'country_id' => 85),

            array('name' => "Lesvos",'country_id' => 85),

            array('name' => "Levkas",'country_id' => 85),

            array('name' => "Magnisia",'country_id' => 85),

            array('name' => "Messinia",'country_id' => 85),

            array('name' => "Nomos Attikis",'country_id' => 85),

            array('name' => "Nomos Zakynthou",'country_id' => 85),

            array('name' => "Pella",'country_id' => 85),

            array('name' => "Pieria",'country_id' => 85),

            array('name' => "Piraios",'country_id' => 85),

            array('name' => "Preveza",'country_id' => 85),

            array('name' => "Rethimni",'country_id' => 85),

            array('name' => "Rodopi",'country_id' => 85),

            array('name' => "Samos",'country_id' => 85),

            array('name' => "Serrai",'country_id' => 85),

            array('name' => "Thesprotia",'country_id' => 85),

            array('name' => "Thessaloniki",'country_id' => 85),

            array('name' => "Trikala",'country_id' => 85),

            array('name' => "Voiotia",'country_id' => 85),

            array('name' => "West Greece",'country_id' => 85),

            array('name' => "Xanthi",'country_id' => 85),

            array('name' => "Zakinthos",'country_id' => 85),

            array('name' => "Aasiaat",'country_id' => 86),

            array('name' => "Ammassalik",'country_id' => 86),

            array('name' => "Illoqqortoormiut",'country_id' => 86),

            array('name' => "Ilulissat",'country_id' => 86),

            array('name' => "Ivittuut",'country_id' => 86),

            array('name' => "Kangaatsiaq",'country_id' => 86),

            array('name' => "Maniitsoq",'country_id' => 86),

            array('name' => "Nanortalik",'country_id' => 86),

            array('name' => "Narsaq",'country_id' => 86),

            array('name' => "Nuuk",'country_id' => 86),

            array('name' => "Paamiut",'country_id' => 86),

            array('name' => "Qaanaaq",'country_id' => 86),

            array('name' => "Qaqortoq",'country_id' => 86),

            array('name' => "Qasigiannguit",'country_id' => 86),

            array('name' => "Qeqertarsuaq",'country_id' => 86),

            array('name' => "Sisimiut",'country_id' => 86),

            array('name' => "Udenfor kommunal inddeling",'country_id' => 86),

            array('name' => "Upernavik",'country_id' => 86),

            array('name' => "Uummannaq",'country_id' => 86),

            array('name' => "Carriacou-Petite Martinique",'country_id' => 87),

            array('name' => "Saint Andrew",'country_id' => 87),

            array('name' => "Saint Davids",'country_id' => 87),

            array('name' => "Saint George's",'country_id' => 87),

            array('name' => "Saint John",'country_id' => 87),

            array('name' => "Saint Mark",'country_id' => 87),

            array('name' => "Saint Patrick",'country_id' => 87),

            array('name' => "Basse-Terre",'country_id' => 88),

            array('name' => "Grande-Terre",'country_id' => 88),

            array('name' => "Iles des Saintes",'country_id' => 88),

            array('name' => "La Desirade",'country_id' => 88),

            array('name' => "Marie-Galante",'country_id' => 88),

            array('name' => "Saint Barthelemy",'country_id' => 88),

            array('name' => "Saint Martin",'country_id' => 88),

            array('name' => "Agana Heights",'country_id' => 89),

            array('name' => "Agat",'country_id' => 89),

            array('name' => "Barrigada",'country_id' => 89),

            array('name' => "Chalan-Pago-Ordot",'country_id' => 89),

            array('name' => "Dededo",'country_id' => 89),

            array('name' => "Hagatna",'country_id' => 89),

            array('name' => "Inarajan",'country_id' => 89),

            array('name' => "Mangilao",'country_id' => 89),

            array('name' => "Merizo",'country_id' => 89),

            array('name' => "Mongmong-Toto-Maite",'country_id' => 89),

            array('name' => "Santa Rita",'country_id' => 89),

            array('name' => "Sinajana",'country_id' => 89),

            array('name' => "Talofofo",'country_id' => 89),

            array('name' => "Tamuning",'country_id' => 89),

            array('name' => "Yigo",'country_id' => 89),

            array('name' => "Yona",'country_id' => 89),

            array('name' => "Alta Verapaz",'country_id' => 90),

            array('name' => "Baja Verapaz",'country_id' => 90),

            array('name' => "Chimaltenango",'country_id' => 90),

            array('name' => "Chiquimula",'country_id' => 90),

            array('name' => "El Progreso",'country_id' => 90),

            array('name' => "Escuintla",'country_id' => 90),

            array('name' => "Guatemala",'country_id' => 90),

            array('name' => "Huehuetenango",'country_id' => 90),

            array('name' => "Izabal",'country_id' => 90),

            array('name' => "Jalapa",'country_id' => 90),

            array('name' => "Jutiapa",'country_id' => 90),

            array('name' => "Peten",'country_id' => 90),

            array('name' => "Quezaltenango",'country_id' => 90),

            array('name' => "Quiche",'country_id' => 90),

            array('name' => "Retalhuleu",'country_id' => 90),

            array('name' => "Sacatepequez",'country_id' => 90),

            array('name' => "San Marcos",'country_id' => 90),

            array('name' => "Santa Rosa",'country_id' => 90),

            array('name' => "Solola",'country_id' => 90),

            array('name' => "Suchitepequez",'country_id' => 90),

            array('name' => "Totonicapan",'country_id' => 90),

            array('name' => "Zacapa",'country_id' => 90),

            array('name' => "Alderney",'country_id' => 91),

            array('name' => "Castel",'country_id' => 91),

            array('name' => "Forest",'country_id' => 91),

            array('name' => "Saint Andrew",'country_id' => 91),

            array('name' => "Saint Martin",'country_id' => 91),

            array('name' => "Saint Peter Port",'country_id' => 91),

            array('name' => "Saint Pierre du Bois",'country_id' => 91),

            array('name' => "Saint Sampson",'country_id' => 91),

            array('name' => "Saint Saviour",'country_id' => 91),

            array('name' => "Sark",'country_id' => 91),

            array('name' => "Torteval",'country_id' => 91),

            array('name' => "Vale",'country_id' => 91),

            array('name' => "Beyla",'country_id' => 92),

            array('name' => "Boffa",'country_id' => 92),

            array('name' => "Boke",'country_id' => 92),

            array('name' => "Conakry",'country_id' => 92),

            array('name' => "Coyah",'country_id' => 92),

            array('name' => "Dabola",'country_id' => 92),

            array('name' => "Dalaba",'country_id' => 92),

            array('name' => "Dinguiraye",'country_id' => 92),

            array('name' => "Faranah",'country_id' => 92),

            array('name' => "Forecariah",'country_id' => 92),

            array('name' => "Fria",'country_id' => 92),

            array('name' => "Gaoual",'country_id' => 92),

            array('name' => "Gueckedou",'country_id' => 92),

            array('name' => "Kankan",'country_id' => 92),

            array('name' => "Kerouane",'country_id' => 92),

            array('name' => "Kindia",'country_id' => 92),

            array('name' => "Kissidougou",'country_id' => 92),

            array('name' => "Koubia",'country_id' => 92),

            array('name' => "Koundara",'country_id' => 92),

            array('name' => "Kouroussa",'country_id' => 92),

            array('name' => "Labe",'country_id' => 92),

            array('name' => "Lola",'country_id' => 92),

            array('name' => "Macenta",'country_id' => 92),

            array('name' => "Mali",'country_id' => 92),

            array('name' => "Mamou",'country_id' => 92),

            array('name' => "Mandiana",'country_id' => 92),

            array('name' => "Nzerekore",'country_id' => 92),

            array('name' => "Pita",'country_id' => 92),

            array('name' => "Siguiri",'country_id' => 92),

            array('name' => "Telimele",'country_id' => 92),

            array('name' => "Tougue",'country_id' => 92),

            array('name' => "Yomou",'country_id' => 92),

            array('name' => "Bafata",'country_id' => 93),

            array('name' => "Bissau",'country_id' => 93),

            array('name' => "Bolama",'country_id' => 93),

            array('name' => "Cacheu",'country_id' => 93),

            array('name' => "Gabu",'country_id' => 93),

            array('name' => "Oio",'country_id' => 93),

            array('name' => "Quinara",'country_id' => 93),

            array('name' => "Tombali",'country_id' => 93),

            array('name' => "Barima-Waini",'country_id' => 94),

            array('name' => "Cuyuni-Mazaruni",'country_id' => 94),

            array('name' => "Demerara-Mahaica",'country_id' => 94),

            array('name' => "East Berbice-Corentyne",'country_id' => 94),

            array('name' => "Essequibo Islands-West Demerar",'country_id' => 94),

            array('name' => "Mahaica-Berbice",'country_id' => 94),

            array('name' => "Pomeroon-Supenaam",'country_id' => 94),

            array('name' => "Potaro-Siparuni",'country_id' => 94),

            array('name' => "Upper Demerara-Berbice",'country_id' => 94),

            array('name' => "Upper Takutu-Upper Essequibo",'country_id' => 94),

            array('name' => "Artibonite",'country_id' => 95),

            array('name' => "Centre",'country_id' => 95),

            array('name' => "Grand'Anse",'country_id' => 95),

            array('name' => "Nord",'country_id' => 95),

            array('name' => "Nord-Est",'country_id' => 95),

            array('name' => "Nord-Ouest",'country_id' => 95),

            array('name' => "Ouest",'country_id' => 95),

            array('name' => "Sud",'country_id' => 95),

            array('name' => "Sud-Est",'country_id' => 95),

            array('name' => "Heard and McDonald Islands",'country_id' => 96),

            array('name' => "Atlantida",'country_id' => 97),

            array('name' => "Choluteca",'country_id' => 97),

            array('name' => "Colon",'country_id' => 97),

            array('name' => "Comayagua",'country_id' => 97),

            array('name' => "Copan",'country_id' => 97),

            array('name' => "Cortes",'country_id' => 97),

            array('name' => "Distrito Central",'country_id' => 97),

            array('name' => "El Paraiso",'country_id' => 97),

            array('name' => "Francisco Morazan",'country_id' => 97),

            array('name' => "Gracias a Dios",'country_id' => 97),

            array('name' => "Intibuca",'country_id' => 97),

            array('name' => "Islas de la Bahia",'country_id' => 97),

            array('name' => "La Paz",'country_id' => 97),

            array('name' => "Lempira",'country_id' => 97),

            array('name' => "Ocotepeque",'country_id' => 97),

            array('name' => "Olancho",'country_id' => 97),

            array('name' => "Santa Barbara",'country_id' => 97),

            array('name' => "Valle",'country_id' => 97),

            array('name' => "Yoro",'country_id' => 97),

            array('name' => "Hong Kong",'country_id' => 98),

            array('name' => "Bacs-Kiskun",'country_id' => 99),

            array('name' => "Baranya",'country_id' => 99),

            array('name' => "Bekes",'country_id' => 99),

            array('name' => "Borsod-Abauj-Zemplen",'country_id' => 99),

            array('name' => "Budapest",'country_id' => 99),

            array('name' => "Csongrad",'country_id' => 99),

            array('name' => "Fejer",'country_id' => 99),

            array('name' => "Gyor-Moson-Sopron",'country_id' => 99),

            array('name' => "Hajdu-Bihar",'country_id' => 99),

            array('name' => "Heves",'country_id' => 99),

            array('name' => "Jasz-Nagykun-Szolnok",'country_id' => 99),

            array('name' => "Komarom-Esztergom",'country_id' => 99),

            array('name' => "Nograd",'country_id' => 99),

            array('name' => "Pest",'country_id' => 99),

            array('name' => "Somogy",'country_id' => 99),

            array('name' => "Szabolcs-Szatmar-Bereg",'country_id' => 99),

            array('name' => "Tolna",'country_id' => 99),

            array('name' => "Vas",'country_id' => 99),

            array('name' => "Veszprem",'country_id' => 99),

            array('name' => "Zala",'country_id' => 99),

            array('name' => "Austurland",'country_id' => 100),

            array('name' => "Gullbringusysla",'country_id' => 100),

            array('name' => "Hofu borgarsva i",'country_id' => 100),

            array('name' => "Nor urland eystra",'country_id' => 100),

            array('name' => "Nor urland vestra",'country_id' => 100),

            array('name' => "Su urland",'country_id' => 100),

            array('name' => "Su urnes",'country_id' => 100),

            array('name' => "Vestfir ir",'country_id' => 100),

            array('name' => "Vesturland",'country_id' => 100),

            array('name' => "Aceh",'country_id' => 102),

            array('name' => "Bali",'country_id' => 102),

            array('name' => "Bangka-Belitung",'country_id' => 102),

            array('name' => "Banten",'country_id' => 102),

            array('name' => "Bengkulu",'country_id' => 102),

            array('name' => "Gandaria",'country_id' => 102),

            array('name' => "Gorontalo",'country_id' => 102),

            array('name' => "Jakarta",'country_id' => 102),

            array('name' => "Jambi",'country_id' => 102),

            array('name' => "Jawa Barat",'country_id' => 102),

            array('name' => "Jawa Tengah",'country_id' => 102),

            array('name' => "Jawa Timur",'country_id' => 102),

            array('name' => "Kalimantan Barat",'country_id' => 102),

            array('name' => "Kalimantan Selatan",'country_id' => 102),

            array('name' => "Kalimantan Tengah",'country_id' => 102),

            array('name' => "Kalimantan Timur",'country_id' => 102),

            array('name' => "Kendal",'country_id' => 102),

            array('name' => "Lampung",'country_id' => 102),

            array('name' => "Maluku",'country_id' => 102),

            array('name' => "Maluku Utara",'country_id' => 102),

            array('name' => "Nusa Tenggara Barat",'country_id' => 102),

            array('name' => "Nusa Tenggara Timur",'country_id' => 102),

            array('name' => "Papua",'country_id' => 102),

            array('name' => "Riau",'country_id' => 102),

            array('name' => "Riau Kepulauan",'country_id' => 102),

            array('name' => "Solo",'country_id' => 102),

            array('name' => "Sulawesi Selatan",'country_id' => 102),

            array('name' => "Sulawesi Tengah",'country_id' => 102),

            array('name' => "Sulawesi Tenggara",'country_id' => 102),

            array('name' => "Sulawesi Utara",'country_id' => 102),

            array('name' => "Sumatera Barat",'country_id' => 102),

            array('name' => "Sumatera Selatan",'country_id' => 102),

            array('name' => "Sumatera Utara",'country_id' => 102),

            array('name' => "Yogyakarta",'country_id' => 102),

            array('name' => "Ardabil",'country_id' => 103),

            array('name' => "Azarbayjan-e Bakhtari",'country_id' => 103),

            array('name' => "Azarbayjan-e Khavari",'country_id' => 103),

            array('name' => "Bushehr",'country_id' => 103),

            array('name' => "Chahar Mahal-e Bakhtiari",'country_id' => 103),

            array('name' => "Esfahan",'country_id' => 103),

            array('name' => "Fars",'country_id' => 103),

            array('name' => "Gilan",'country_id' => 103),

            array('name' => "Golestan",'country_id' => 103),

            array('name' => "Hamadan",'country_id' => 103),

            array('name' => "Hormozgan",'country_id' => 103),

            array('name' => "Ilam",'country_id' => 103),

            array('name' => "Kerman",'country_id' => 103),

            array('name' => "Kermanshah",'country_id' => 103),

            array('name' => "Khorasan",'country_id' => 103),

            array('name' => "Khuzestan",'country_id' => 103),

            array('name' => "Kohgiluyeh-e Boyerahmad",'country_id' => 103),

            array('name' => "Kordestan",'country_id' => 103),

            array('name' => "Lorestan",'country_id' => 103),

            array('name' => "Markazi",'country_id' => 103),

            array('name' => "Mazandaran",'country_id' => 103),

            array('name' => "Ostan-e Esfahan",'country_id' => 103),

            array('name' => "Qazvin",'country_id' => 103),

            array('name' => "Qom",'country_id' => 103),

            array('name' => "Semnan",'country_id' => 103),

            array('name' => "Sistan-e Baluchestan",'country_id' => 103),

            array('name' => "Tehran",'country_id' => 103),

            array('name' => "Yazd",'country_id' => 103),

            array('name' => "Zanjan",'country_id' => 103),

            array('name' => "Babil",'country_id' => 104),

            array('name' => "Baghdad",'country_id' => 104),

            array('name' => "Dahuk",'country_id' => 104),

            array('name' => "Dhi Qar",'country_id' => 104),

            array('name' => "Diyala",'country_id' => 104),

            array('name' => "Erbil",'country_id' => 104),

            array('name' => "Irbil",'country_id' => 104),

            array('name' => "Karbala",'country_id' => 104),

            array('name' => "Kurdistan",'country_id' => 104),

            array('name' => "Maysan",'country_id' => 104),

            array('name' => "Ninawa",'country_id' => 104),

            array('name' => "Salah-ad-Din",'country_id' => 104),

            array('name' => "Wasit",'country_id' => 104),

            array('name' => "al-Anbar",'country_id' => 104),

            array('name' => "al-Basrah",'country_id' => 104),

            array('name' => "al-Muthanna",'country_id' => 104),

            array('name' => "al-Qadisiyah",'country_id' => 104),

            array('name' => "an-Najaf",'country_id' => 104),

            array('name' => "as-Sulaymaniyah",'country_id' => 104),

            array('name' => "at-Ta'mim",'country_id' => 104),

            array('name' => "Armagh",'country_id' => 105),

            array('name' => "Carlow",'country_id' => 105),

            array('name' => "Cavan",'country_id' => 105),

            array('name' => "Clare",'country_id' => 105),

            array('name' => "Cork",'country_id' => 105),

            array('name' => "Donegal",'country_id' => 105),

            array('name' => "Dublin",'country_id' => 105),

            array('name' => "Galway",'country_id' => 105),

            array('name' => "Kerry",'country_id' => 105),

            array('name' => "Kildare",'country_id' => 105),

            array('name' => "Kilkenny",'country_id' => 105),

            array('name' => "Laois",'country_id' => 105),

            array('name' => "Leinster",'country_id' => 105),

            array('name' => "Leitrim",'country_id' => 105),

            array('name' => "Limerick",'country_id' => 105),

            array('name' => "Loch Garman",'country_id' => 105),

            array('name' => "Longford",'country_id' => 105),

            array('name' => "Louth",'country_id' => 105),

            array('name' => "Mayo",'country_id' => 105),

            array('name' => "Meath",'country_id' => 105),

            array('name' => "Monaghan",'country_id' => 105),

            array('name' => "Offaly",'country_id' => 105),

            array('name' => "Roscommon",'country_id' => 105),

            array('name' => "Sligo",'country_id' => 105),

            array('name' => "Tipperary North Riding",'country_id' => 105),

            array('name' => "Tipperary South Riding",'country_id' => 105),

            array('name' => "Ulster",'country_id' => 105),

            array('name' => "Waterford",'country_id' => 105),

            array('name' => "Westmeath",'country_id' => 105),

            array('name' => "Wexford",'country_id' => 105),

            array('name' => "Wicklow",'country_id' => 105),

            array('name' => "Beit Hanania",'country_id' => 106),

            array('name' => "Ben Gurion Airport",'country_id' => 106),

            array('name' => "Bethlehem",'country_id' => 106),

            array('name' => "Caesarea",'country_id' => 106),

            array('name' => "Centre",'country_id' => 106),

            array('name' => "Gaza",'country_id' => 106),

            array('name' => "Hadaron",'country_id' => 106),

            array('name' => "Haifa District",'country_id' => 106),

            array('name' => "Hamerkaz",'country_id' => 106),

            array('name' => "Hazafon",'country_id' => 106),

            array('name' => "Hebron",'country_id' => 106),

            array('name' => "Jaffa",'country_id' => 106),

            array('name' => "Jerusalem",'country_id' => 106),

            array('name' => "Khefa",'country_id' => 106),

            array('name' => "Kiryat Yam",'country_id' => 106),

            array('name' => "Lower Galilee",'country_id' => 106),

            array('name' => "Qalqilya",'country_id' => 106),

            array('name' => "Talme Elazar",'country_id' => 106),

            array('name' => "Tel Aviv",'country_id' => 106),

            array('name' => "Tsafon",'country_id' => 106),

            array('name' => "Umm El Fahem",'country_id' => 106),

            array('name' => "Yerushalayim",'country_id' => 106),

            array('name' => "Abruzzi",'country_id' => 107),

            array('name' => "Abruzzo",'country_id' => 107),

            array('name' => "Agrigento",'country_id' => 107),

            array('name' => "Alessandria",'country_id' => 107),

            array('name' => "Ancona",'country_id' => 107),

            array('name' => "Arezzo",'country_id' => 107),

            array('name' => "Ascoli Piceno",'country_id' => 107),

            array('name' => "Asti",'country_id' => 107),

            array('name' => "Avellino",'country_id' => 107),

            array('name' => "Bari",'country_id' => 107),

            array('name' => "Basilicata",'country_id' => 107),

            array('name' => "Belluno",'country_id' => 107),

            array('name' => "Benevento",'country_id' => 107),

            array('name' => "Bergamo",'country_id' => 107),

            array('name' => "Biella",'country_id' => 107),

            array('name' => "Bologna",'country_id' => 107),

            array('name' => "Bolzano",'country_id' => 107),

            array('name' => "Brescia",'country_id' => 107),

            array('name' => "Brindisi",'country_id' => 107),

            array('name' => "Calabria",'country_id' => 107),

            array('name' => "Campania",'country_id' => 107),

            array('name' => "Cartoceto",'country_id' => 107),

            array('name' => "Caserta",'country_id' => 107),

            array('name' => "Catania",'country_id' => 107),

            array('name' => "Chieti",'country_id' => 107),

            array('name' => "Como",'country_id' => 107),

            array('name' => "Cosenza",'country_id' => 107),

            array('name' => "Cremona",'country_id' => 107),

            array('name' => "Cuneo",'country_id' => 107),

            array('name' => "Emilia-Romagna",'country_id' => 107),

            array('name' => "Ferrara",'country_id' => 107),

            array('name' => "Firenze",'country_id' => 107),

            array('name' => "Florence",'country_id' => 107),

            array('name' => "Forli-Cesena ",'country_id' => 107),

            array('name' => "Friuli-Venezia Giulia",'country_id' => 107),

            array('name' => "Frosinone",'country_id' => 107),

            array('name' => "Genoa",'country_id' => 107),

            array('name' => "Gorizia",'country_id' => 107),

            array('name' => "L'Aquila",'country_id' => 107),

            array('name' => "Lazio",'country_id' => 107),

            array('name' => "Lecce",'country_id' => 107),

            array('name' => "Lecco",'country_id' => 107),

            array('name' => "Lecco Province",'country_id' => 107),

            array('name' => "Liguria",'country_id' => 107),

            array('name' => "Lodi",'country_id' => 107),

            array('name' => "Lombardia",'country_id' => 107),

            array('name' => "Lombardy",'country_id' => 107),

            array('name' => "Macerata",'country_id' => 107),

            array('name' => "Mantova",'country_id' => 107),

            array('name' => "Marche",'country_id' => 107),

            array('name' => "Messina",'country_id' => 107),

            array('name' => "Milan",'country_id' => 107),

            array('name' => "Modena",'country_id' => 107),

            array('name' => "Molise",'country_id' => 107),

            array('name' => "Molteno",'country_id' => 107),

            array('name' => "Montenegro",'country_id' => 107),

            array('name' => "Monza and Brianza",'country_id' => 107),

            array('name' => "Naples",'country_id' => 107),

            array('name' => "Novara",'country_id' => 107),

            array('name' => "Padova",'country_id' => 107),

            array('name' => "Parma",'country_id' => 107),

            array('name' => "Pavia",'country_id' => 107),

            array('name' => "Perugia",'country_id' => 107),

            array('name' => "Pesaro-Urbino",'country_id' => 107),

            array('name' => "Piacenza",'country_id' => 107),

            array('name' => "Piedmont",'country_id' => 107),

            array('name' => "Piemonte",'country_id' => 107),

            array('name' => "Pisa",'country_id' => 107),

            array('name' => "Pordenone",'country_id' => 107),

            array('name' => "Potenza",'country_id' => 107),

            array('name' => "Puglia",'country_id' => 107),

            array('name' => "Reggio Emilia",'country_id' => 107),

            array('name' => "Rimini",'country_id' => 107),

            array('name' => "Roma",'country_id' => 107),

            array('name' => "Salerno",'country_id' => 107),

            array('name' => "Sardegna",'country_id' => 107),

            array('name' => "Sassari",'country_id' => 107),

            array('name' => "Savona",'country_id' => 107),

            array('name' => "Sicilia",'country_id' => 107),

            array('name' => "Siena",'country_id' => 107),

            array('name' => "Sondrio",'country_id' => 107),

            array('name' => "South Tyrol",'country_id' => 107),

            array('name' => "Taranto",'country_id' => 107),

            array('name' => "Teramo",'country_id' => 107),

            array('name' => "Torino",'country_id' => 107),

            array('name' => "Toscana",'country_id' => 107),

            array('name' => "Trapani",'country_id' => 107),

            array('name' => "Trentino-Alto Adige",'country_id' => 107),

            array('name' => "Trento",'country_id' => 107),

            array('name' => "Treviso",'country_id' => 107),

            array('name' => "Udine",'country_id' => 107),

            array('name' => "Umbria",'country_id' => 107),

            array('name' => "Valle d'Aosta",'country_id' => 107),

            array('name' => "Varese",'country_id' => 107),

            array('name' => "Veneto",'country_id' => 107),

            array('name' => "Venezia",'country_id' => 107),

            array('name' => "Verbano-Cusio-Ossola",'country_id' => 107),

            array('name' => "Vercelli",'country_id' => 107),

            array('name' => "Verona",'country_id' => 107),

            array('name' => "Vicenza",'country_id' => 107),

            array('name' => "Viterbo",'country_id' => 107),

            array('name' => "Buxoro Viloyati",'country_id' => 108),

            array('name' => "Clarendon",'country_id' => 108),

            array('name' => "Hanover",'country_id' => 108),

            array('name' => "Kingston",'country_id' => 108),

            array('name' => "Manchester",'country_id' => 108),

            array('name' => "Portland",'country_id' => 108),

            array('name' => "Saint Andrews",'country_id' => 108),

            array('name' => "Saint Ann",'country_id' => 108),

            array('name' => "Saint Catherine",'country_id' => 108),

            array('name' => "Saint Elizabeth",'country_id' => 108),

            array('name' => "Saint James",'country_id' => 108),

            array('name' => "Saint Mary",'country_id' => 108),

            array('name' => "Saint Thomas",'country_id' => 108),

            array('name' => "Trelawney",'country_id' => 108),

            array('name' => "Westmoreland",'country_id' => 108),

            array('name' => "Aichi",'country_id' => 109),

            array('name' => "Akita",'country_id' => 109),

            array('name' => "Aomori",'country_id' => 109),

            array('name' => "Chiba",'country_id' => 109),

            array('name' => "Ehime",'country_id' => 109),

            array('name' => "Fukui",'country_id' => 109),

            array('name' => "Fukuoka",'country_id' => 109),

            array('name' => "Fukushima",'country_id' => 109),

            array('name' => "Gifu",'country_id' => 109),

            array('name' => "Gumma",'country_id' => 109),

            array('name' => "Hiroshima",'country_id' => 109),

            array('name' => "Hokkaido",'country_id' => 109),

            array('name' => "Hyogo",'country_id' => 109),

            array('name' => "Ibaraki",'country_id' => 109),

            array('name' => "Ishikawa",'country_id' => 109),

            array('name' => "Iwate",'country_id' => 109),

            array('name' => "Kagawa",'country_id' => 109),

            array('name' => "Kagoshima",'country_id' => 109),

            array('name' => "Kanagawa",'country_id' => 109),

            array('name' => "Kanto",'country_id' => 109),

            array('name' => "Kochi",'country_id' => 109),

            array('name' => "Kumamoto",'country_id' => 109),

            array('name' => "Kyoto",'country_id' => 109),

            array('name' => "Mie",'country_id' => 109),

            array('name' => "Miyagi",'country_id' => 109),

            array('name' => "Miyazaki",'country_id' => 109),

            array('name' => "Nagano",'country_id' => 109),

            array('name' => "Nagasaki",'country_id' => 109),

            array('name' => "Nara",'country_id' => 109),

            array('name' => "Niigata",'country_id' => 109),

            array('name' => "Oita",'country_id' => 109),

            array('name' => "Okayama",'country_id' => 109),

            array('name' => "Okinawa",'country_id' => 109),

            array('name' => "Osaka",'country_id' => 109),

            array('name' => "Saga",'country_id' => 109),

            array('name' => "Saitama",'country_id' => 109),

            array('name' => "Shiga",'country_id' => 109),

            array('name' => "Shimane",'country_id' => 109),

            array('name' => "Shizuoka",'country_id' => 109),

            array('name' => "Tochigi",'country_id' => 109),

            array('name' => "Tokushima",'country_id' => 109),

            array('name' => "Tokyo",'country_id' => 109),

            array('name' => "Tottori",'country_id' => 109),

            array('name' => "Toyama",'country_id' => 109),

            array('name' => "Wakayama",'country_id' => 109),

            array('name' => "Yamagata",'country_id' => 109),

            array('name' => "Yamaguchi",'country_id' => 109),

            array('name' => "Yamanashi",'country_id' => 109),

            array('name' => "Grouville",'country_id' => 110),

            array('name' => "Saint Brelade",'country_id' => 110),

            array('name' => "Saint Clement",'country_id' => 110),

            array('name' => "Saint Helier",'country_id' => 110),

            array('name' => "Saint John",'country_id' => 110),

            array('name' => "Saint Lawrence",'country_id' => 110),

            array('name' => "Saint Martin",'country_id' => 110),

            array('name' => "Saint Mary",'country_id' => 110),

            array('name' => "Saint Peter",'country_id' => 110),

            array('name' => "Saint Saviour",'country_id' => 110),

            array('name' => "Trinity",'country_id' => 110),

            array('name' => "'Ajlun",'country_id' => 111),

            array('name' => "Amman",'country_id' => 111),

            array('name' => "Irbid",'country_id' => 111),

            array('name' => "Jarash",'country_id' => 111),

            array('name' => "Ma'an",'country_id' => 111),

            array('name' => "Madaba",'country_id' => 111),

            array('name' => "al-'Aqabah",'country_id' => 111),

            array('name' => "al-Balqa'",'country_id' => 111),

            array('name' => "al-Karak",'country_id' => 111),

            array('name' => "al-Mafraq",'country_id' => 111),

            array('name' => "at-Tafilah",'country_id' => 111),

            array('name' => "az-Zarqa'",'country_id' => 111),

            array('name' => "Akmecet",'country_id' => 112),

            array('name' => "Akmola",'country_id' => 112),

            array('name' => "Aktobe",'country_id' => 112),

            array('name' => "Almati",'country_id' => 112),

            array('name' => "Atirau",'country_id' => 112),

            array('name' => "Batis Kazakstan",'country_id' => 112),

            array('name' => "Burlinsky Region",'country_id' => 112),

            array('name' => "Karagandi",'country_id' => 112),

            array('name' => "Kostanay",'country_id' => 112),

            array('name' => "Mankistau",'country_id' => 112),

            array('name' => "Ontustik Kazakstan",'country_id' => 112),

            array('name' => "Pavlodar",'country_id' => 112),

            array('name' => "Sigis Kazakstan",'country_id' => 112),

            array('name' => "Soltustik Kazakstan",'country_id' => 112),

            array('name' => "Taraz",'country_id' => 112),

            array('name' => "Central",'country_id' => 113),

            array('name' => "Coast",'country_id' => 113),

            array('name' => "Eastern",'country_id' => 113),

            array('name' => "Nairobi",'country_id' => 113),

            array('name' => "North Eastern",'country_id' => 113),

            array('name' => "Nyanza",'country_id' => 113),

            array('name' => "Rift Valley",'country_id' => 113),

            array('name' => "Western",'country_id' => 113),

            array('name' => "Abaiang",'country_id' => 114),

            array('name' => "Abemana",'country_id' => 114),

            array('name' => "Aranuka",'country_id' => 114),

            array('name' => "Arorae",'country_id' => 114),

            array('name' => "Banaba",'country_id' => 114),

            array('name' => "Beru",'country_id' => 114),

            array('name' => "Butaritari",'country_id' => 114),

            array('name' => "Kiritimati",'country_id' => 114),

            array('name' => "Kuria",'country_id' => 114),

            array('name' => "Maiana",'country_id' => 114),

            array('name' => "Makin",'country_id' => 114),

            array('name' => "Marakei",'country_id' => 114),

            array('name' => "Nikunau",'country_id' => 114),

            array('name' => "Nonouti",'country_id' => 114),

            array('name' => "Onotoa",'country_id' => 114),

            array('name' => "Phoenix Islands",'country_id' => 114),

            array('name' => "Tabiteuea North",'country_id' => 114),

            array('name' => "Tabiteuea South",'country_id' => 114),

            array('name' => "Tabuaeran",'country_id' => 114),

            array('name' => "Tamana",'country_id' => 114),

            array('name' => "Tarawa North",'country_id' => 114),

            array('name' => "Tarawa South",'country_id' => 114),

            array('name' => "Teraina",'country_id' => 114),

            array('name' => "Chagangdo",'country_id' => 115),

            array('name' => "Hamgyeongbukto",'country_id' => 115),

            array('name' => "Hamgyeongnamdo",'country_id' => 115),

            array('name' => "Hwanghaebukto",'country_id' => 115),

            array('name' => "Hwanghaenamdo",'country_id' => 115),

            array('name' => "Kaeseong",'country_id' => 115),

            array('name' => "Kangweon",'country_id' => 115),

            array('name' => "Nampo",'country_id' => 115),

            array('name' => "Pyeonganbukto",'country_id' => 115),

            array('name' => "Pyeongannamdo",'country_id' => 115),

            array('name' => "Pyeongyang",'country_id' => 115),

            array('name' => "Yanggang",'country_id' => 115),

            array('name' => "Busan",'country_id' => 116),

            array('name' => "Cheju",'country_id' => 116),

            array('name' => "Chollabuk",'country_id' => 116),

            array('name' => "Chollanam",'country_id' => 116),

            array('name' => "Chungbuk",'country_id' => 116),

            array('name' => "Chungcheongbuk",'country_id' => 116),

            array('name' => "Chungcheongnam",'country_id' => 116),

            array('name' => "Chungnam",'country_id' => 116),

            array('name' => "Daegu",'country_id' => 116),

            array('name' => "Gangwon-do",'country_id' => 116),

            array('name' => "Goyang-si",'country_id' => 116),

            array('name' => "Gyeonggi-do",'country_id' => 116),

            array('name' => "Gyeongsang ",'country_id' => 116),

            array('name' => "Gyeongsangnam-do",'country_id' => 116),

            array('name' => "Incheon",'country_id' => 116),

            array('name' => "Jeju-Si",'country_id' => 116),

            array('name' => "Jeonbuk",'country_id' => 116),

            array('name' => "Kangweon",'country_id' => 116),

            array('name' => "Kwangju",'country_id' => 116),

            array('name' => "Kyeonggi",'country_id' => 116),

            array('name' => "Kyeongsangbuk",'country_id' => 116),

            array('name' => "Kyeongsangnam",'country_id' => 116),

            array('name' => "Kyonggi-do",'country_id' => 116),

            array('name' => "Kyungbuk-Do",'country_id' => 116),

            array('name' => "Kyunggi-Do",'country_id' => 116),

            array('name' => "Kyunggi-do",'country_id' => 116),

            array('name' => "Pusan",'country_id' => 116),

            array('name' => "Seoul",'country_id' => 116),

            array('name' => "Sudogwon",'country_id' => 116),

            array('name' => "Taegu",'country_id' => 116),

            array('name' => "Taejeon",'country_id' => 116),

            array('name' => "Taejon-gwangyoksi",'country_id' => 116),

            array('name' => "Ulsan",'country_id' => 116),

            array('name' => "Wonju",'country_id' => 116),

            array('name' => "gwangyoksi",'country_id' => 116),

            array('name' => "Al Asimah",'country_id' => 117),

            array('name' => "Hawalli",'country_id' => 117),

            array('name' => "Mishref",'country_id' => 117),

            array('name' => "Qadesiya",'country_id' => 117),

            array('name' => "Safat",'country_id' => 117),

            array('name' => "Salmiya",'country_id' => 117),

            array('name' => "al-Ahmadi",'country_id' => 117),

            array('name' => "al-Farwaniyah",'country_id' => 117),

            array('name' => "al-Jahra",'country_id' => 117),

            array('name' => "al-Kuwayt",'country_id' => 117),

            array('name' => "Batken",'country_id' => 118),

            array('name' => "Bishkek",'country_id' => 118),

            array('name' => "Chui",'country_id' => 118),

            array('name' => "Issyk-Kul",'country_id' => 118),

            array('name' => "Jalal-Abad",'country_id' => 118),

            array('name' => "Naryn",'country_id' => 118),

            array('name' => "Osh",'country_id' => 118),

            array('name' => "Talas",'country_id' => 118),

            array('name' => "Attopu",'country_id' => 119),

            array('name' => "Bokeo",'country_id' => 119),

            array('name' => "Bolikhamsay",'country_id' => 119),

            array('name' => "Champasak",'country_id' => 119),

            array('name' => "Houaphanh",'country_id' => 119),

            array('name' => "Khammouane",'country_id' => 119),

            array('name' => "Luang Nam Tha",'country_id' => 119),

            array('name' => "Luang Prabang",'country_id' => 119),

            array('name' => "Oudomxay",'country_id' => 119),

            array('name' => "Phongsaly",'country_id' => 119),

            array('name' => "Saravan",'country_id' => 119),

            array('name' => "Savannakhet",'country_id' => 119),

            array('name' => "Sekong",'country_id' => 119),

            array('name' => "Viangchan Prefecture",'country_id' => 119),

            array('name' => "Viangchan Province",'country_id' => 119),

            array('name' => "Xaignabury",'country_id' => 119),

            array('name' => "Xiang Khuang",'country_id' => 119),

            array('name' => "Aizkraukles",'country_id' => 120),

            array('name' => "Aluksnes",'country_id' => 120),

            array('name' => "Balvu",'country_id' => 120),

            array('name' => "Bauskas",'country_id' => 120),

            array('name' => "Cesu",'country_id' => 120),

            array('name' => "Daugavpils",'country_id' => 120),

            array('name' => "Daugavpils City",'country_id' => 120),

            array('name' => "Dobeles",'country_id' => 120),

            array('name' => "Gulbenes",'country_id' => 120),

            array('name' => "Jekabspils",'country_id' => 120),

            array('name' => "Jelgava",'country_id' => 120),

            array('name' => "Jelgavas",'country_id' => 120),

            array('name' => "Jurmala City",'country_id' => 120),

            array('name' => "Kraslavas",'country_id' => 120),

            array('name' => "Kuldigas",'country_id' => 120),

            array('name' => "Liepaja",'country_id' => 120),

            array('name' => "Liepajas",'country_id' => 120),

            array('name' => "Limbazhu",'country_id' => 120),

            array('name' => "Ludzas",'country_id' => 120),

            array('name' => "Madonas",'country_id' => 120),

            array('name' => "Ogres",'country_id' => 120),

            array('name' => "Preilu",'country_id' => 120),

            array('name' => "Rezekne",'country_id' => 120),

            array('name' => "Rezeknes",'country_id' => 120),

            array('name' => "Riga",'country_id' => 120),

            array('name' => "Rigas",'country_id' => 120),

            array('name' => "Saldus",'country_id' => 120),

            array('name' => "Talsu",'country_id' => 120),

            array('name' => "Tukuma",'country_id' => 120),

            array('name' => "Valkas",'country_id' => 120),

            array('name' => "Valmieras",'country_id' => 120),

            array('name' => "Ventspils",'country_id' => 120),

            array('name' => "Ventspils City",'country_id' => 120),

            array('name' => "Beirut",'country_id' => 121),

            array('name' => "Jabal Lubnan",'country_id' => 121),

            array('name' => "Mohafazat Liban-Nord",'country_id' => 121),

            array('name' => "Mohafazat Mont-Liban",'country_id' => 121),

            array('name' => "Sidon",'country_id' => 121),

            array('name' => "al-Biqa",'country_id' => 121),

            array('name' => "al-Janub",'country_id' => 121),

            array('name' => "an-Nabatiyah",'country_id' => 121),

            array('name' => "ash-Shamal",'country_id' => 121),

            array('name' => "Berea",'country_id' => 122),

            array('name' => "Butha-Buthe",'country_id' => 122),

            array('name' => "Leribe",'country_id' => 122),

            array('name' => "Mafeteng",'country_id' => 122),

            array('name' => "Maseru",'country_id' => 122),

            array('name' => "Mohale's Hoek",'country_id' => 122),

            array('name' => "Mokhotlong",'country_id' => 122),

            array('name' => "Qacha's Nek",'country_id' => 122),

            array('name' => "Quthing",'country_id' => 122),

            array('name' => "Thaba-Tseka",'country_id' => 122),

            array('name' => "Bomi",'country_id' => 123),

            array('name' => "Bong",'country_id' => 123),

            array('name' => "Grand Bassa",'country_id' => 123),

            array('name' => "Grand Cape Mount",'country_id' => 123),

            array('name' => "Grand Gedeh",'country_id' => 123),

            array('name' => "Loffa",'country_id' => 123),

            array('name' => "Margibi",'country_id' => 123),

            array('name' => "Maryland and Grand Kru",'country_id' => 123),

            array('name' => "Montserrado",'country_id' => 123),

            array('name' => "Nimba",'country_id' => 123),

            array('name' => "Rivercess",'country_id' => 123),

            array('name' => "Sinoe",'country_id' => 123),

            array('name' => "Ajdabiya",'country_id' => 124),

            array('name' => "Fezzan",'country_id' => 124),

            array('name' => "Banghazi",'country_id' => 124),

            array('name' => "Darnah",'country_id' => 124),

            array('name' => "Ghadamis",'country_id' => 124),

            array('name' => "Gharyan",'country_id' => 124),

            array('name' => "Misratah",'country_id' => 124),

            array('name' => "Murzuq",'country_id' => 124),

            array('name' => "Sabha",'country_id' => 124),

            array('name' => "Sawfajjin",'country_id' => 124),

            array('name' => "Surt",'country_id' => 124),

            array('name' => "Tarabulus",'country_id' => 124),

            array('name' => "Tarhunah",'country_id' => 124),

            array('name' => "Tripolitania",'country_id' => 124),

            array('name' => "Tubruq",'country_id' => 124),

            array('name' => "Yafran",'country_id' => 124),

            array('name' => "Zlitan",'country_id' => 124),

            array('name' => "al-'Aziziyah",'country_id' => 124),

            array('name' => "al-Fatih",'country_id' => 124),

            array('name' => "al-Jabal al Akhdar",'country_id' => 124),

            array('name' => "al-Jufrah",'country_id' => 124),

            array('name' => "al-Khums",'country_id' => 124),

            array('name' => "al-Kufrah",'country_id' => 124),

            array('name' => "an-Nuqat al-Khams",'country_id' => 124),

            array('name' => "ash-Shati'",'country_id' => 124),

            array('name' => "az-Zawiyah",'country_id' => 124),

            array('name' => "Balzers",'country_id' => 125),

            array('name' => "Eschen",'country_id' => 125),

            array('name' => "Gamprin",'country_id' => 125),

            array('name' => "Mauren",'country_id' => 125),

            array('name' => "Planken",'country_id' => 125),

            array('name' => "Ruggell",'country_id' => 125),

            array('name' => "Schaan",'country_id' => 125),

            array('name' => "Schellenberg",'country_id' => 125),

            array('name' => "Triesen",'country_id' => 125),

            array('name' => "Triesenberg",'country_id' => 125),

            array('name' => "Vaduz",'country_id' => 125),

            array('name' => "Alytaus",'country_id' => 126),

            array('name' => "Anyksciai",'country_id' => 126),

            array('name' => "Kauno",'country_id' => 126),

            array('name' => "Klaipedos",'country_id' => 126),

            array('name' => "Marijampoles",'country_id' => 126),

            array('name' => "Panevezhio",'country_id' => 126),

            array('name' => "Panevezys",'country_id' => 126),

            array('name' => "Shiauliu",'country_id' => 126),

            array('name' => "Taurages",'country_id' => 126),

            array('name' => "Telshiu",'country_id' => 126),

            array('name' => "Telsiai",'country_id' => 126),

            array('name' => "Utenos",'country_id' => 126),

            array('name' => "Vilniaus",'country_id' => 126),

            array('name' => "Capellen",'country_id' => 127),

            array('name' => "Clervaux",'country_id' => 127),

            array('name' => "Diekirch",'country_id' => 127),

            array('name' => "Echternach",'country_id' => 127),

            array('name' => "Esch-sur-Alzette",'country_id' => 127),

            array('name' => "Grevenmacher",'country_id' => 127),

            array('name' => "Luxembourg",'country_id' => 127),

            array('name' => "Mersch",'country_id' => 127),

            array('name' => "Redange",'country_id' => 127),

            array('name' => "Remich",'country_id' => 127),

            array('name' => "Vianden",'country_id' => 127),

            array('name' => "Wiltz",'country_id' => 127),

            array('name' => "Macau",'country_id' => 128),

            array('name' => "Berovo",'country_id' => 129),

            array('name' => "Bitola",'country_id' => 129),

            array('name' => "Brod",'country_id' => 129),

            array('name' => "Debar",'country_id' => 129),

            array('name' => "Delchevo",'country_id' => 129),

            array('name' => "Demir Hisar",'country_id' => 129),

            array('name' => "Gevgelija",'country_id' => 129),

            array('name' => "Gostivar",'country_id' => 129),

            array('name' => "Kavadarci",'country_id' => 129),

            array('name' => "Kichevo",'country_id' => 129),

            array('name' => "Kochani",'country_id' => 129),

            array('name' => "Kratovo",'country_id' => 129),

            array('name' => "Kriva Palanka",'country_id' => 129),

            array('name' => "Krushevo",'country_id' => 129),

            array('name' => "Kumanovo",'country_id' => 129),

            array('name' => "Negotino",'country_id' => 129),

            array('name' => "Ohrid",'country_id' => 129),

            array('name' => "Prilep",'country_id' => 129),

            array('name' => "Probishtip",'country_id' => 129),

            array('name' => "Radovish",'country_id' => 129),

            array('name' => "Resen",'country_id' => 129),

            array('name' => "Shtip",'country_id' => 129),

            array('name' => "Skopje",'country_id' => 129),

            array('name' => "Struga",'country_id' => 129),

            array('name' => "Strumica",'country_id' => 129),

            array('name' => "Sveti Nikole",'country_id' => 129),

            array('name' => "Tetovo",'country_id' => 129),

            array('name' => "Valandovo",'country_id' => 129),

            array('name' => "Veles",'country_id' => 129),

            array('name' => "Vinica",'country_id' => 129),

            array('name' => "Antananarivo",'country_id' => 130),

            array('name' => "Antsiranana",'country_id' => 130),

            array('name' => "Fianarantsoa",'country_id' => 130),

            array('name' => "Mahajanga",'country_id' => 130),

            array('name' => "Toamasina",'country_id' => 130),

            array('name' => "Toliary",'country_id' => 130),

            array('name' => "Balaka",'country_id' => 131),

            array('name' => "Blantyre City",'country_id' => 131),

            array('name' => "Chikwawa",'country_id' => 131),

            array('name' => "Chiradzulu",'country_id' => 131),

            array('name' => "Chitipa",'country_id' => 131),

            array('name' => "Dedza",'country_id' => 131),

            array('name' => "Dowa",'country_id' => 131),

            array('name' => "Karonga",'country_id' => 131),

            array('name' => "Kasungu",'country_id' => 131),

            array('name' => "Lilongwe City",'country_id' => 131),

            array('name' => "Machinga",'country_id' => 131),

            array('name' => "Mangochi",'country_id' => 131),

            array('name' => "Mchinji",'country_id' => 131),

            array('name' => "Mulanje",'country_id' => 131),

            array('name' => "Mwanza",'country_id' => 131),

            array('name' => "Mzimba",'country_id' => 131),

            array('name' => "Mzuzu City",'country_id' => 131),

            array('name' => "Nkhata Bay",'country_id' => 131),

            array('name' => "Nkhotakota",'country_id' => 131),

            array('name' => "Nsanje",'country_id' => 131),

            array('name' => "Ntcheu",'country_id' => 131),

            array('name' => "Ntchisi",'country_id' => 131),

            array('name' => "Phalombe",'country_id' => 131),

            array('name' => "Rumphi",'country_id' => 131),

            array('name' => "Salima",'country_id' => 131),

            array('name' => "Thyolo",'country_id' => 131),

            array('name' => "Zomba Municipality",'country_id' => 131),

            array('name' => "Johor",'country_id' => 132),

            array('name' => "Kedah",'country_id' => 132),

            array('name' => "Kelantan",'country_id' => 132),

            array('name' => "Kuala Lumpur",'country_id' => 132),

            array('name' => "Labuan",'country_id' => 132),

            array('name' => "Melaka",'country_id' => 132),

            array('name' => "Negeri Johor",'country_id' => 132),

            array('name' => "Negeri Sembilan",'country_id' => 132),

            array('name' => "Pahang",'country_id' => 132),

            array('name' => "Penang",'country_id' => 132),

            array('name' => "Perak",'country_id' => 132),

            array('name' => "Perlis",'country_id' => 132),

            array('name' => "Pulau Pinang",'country_id' => 132),

            array('name' => "Sabah",'country_id' => 132),

            array('name' => "Sarawak",'country_id' => 132),

            array('name' => "Selangor",'country_id' => 132),

            array('name' => "Sembilan",'country_id' => 132),

            array('name' => "Terengganu",'country_id' => 132),

            array('name' => "Alif Alif",'country_id' => 133),

            array('name' => "Alif Dhaal",'country_id' => 133),

            array('name' => "Baa",'country_id' => 133),

            array('name' => "Dhaal",'country_id' => 133),

            array('name' => "Faaf",'country_id' => 133),

            array('name' => "Gaaf Alif",'country_id' => 133),

            array('name' => "Gaaf Dhaal",'country_id' => 133),

            array('name' => "Ghaviyani",'country_id' => 133),

            array('name' => "Haa Alif",'country_id' => 133),

            array('name' => "Haa Dhaal",'country_id' => 133),

            array('name' => "Kaaf",'country_id' => 133),

            array('name' => "Laam",'country_id' => 133),

            array('name' => "Lhaviyani",'country_id' => 133),

            array('name' => "Male",'country_id' => 133),

            array('name' => "Miim",'country_id' => 133),

            array('name' => "Nuun",'country_id' => 133),

            array('name' => "Raa",'country_id' => 133),

            array('name' => "Shaviyani",'country_id' => 133),

            array('name' => "Siin",'country_id' => 133),

            array('name' => "Thaa",'country_id' => 133),

            array('name' => "Vaav",'country_id' => 133),

            array('name' => "Bamako",'country_id' => 134),

            array('name' => "Gao",'country_id' => 134),

            array('name' => "Kayes",'country_id' => 134),

            array('name' => "Kidal",'country_id' => 134),

            array('name' => "Koulikoro",'country_id' => 134),

            array('name' => "Mopti",'country_id' => 134),

            array('name' => "Segou",'country_id' => 134),

            array('name' => "Sikasso",'country_id' => 134),

            array('name' => "Tombouctou",'country_id' => 134),

            array('name' => "Gozo and Comino",'country_id' => 135),

            array('name' => "Inner Harbour",'country_id' => 135),

            array('name' => "Northern",'country_id' => 135),

            array('name' => "Outer Harbour",'country_id' => 135),

            array('name' => "South Eastern",'country_id' => 135),

            array('name' => "Valletta",'country_id' => 135),

            array('name' => "Western",'country_id' => 135),

            array('name' => "Castletown",'country_id' => 136),

            array('name' => "Douglas",'country_id' => 136),

            array('name' => "Laxey",'country_id' => 136),

            array('name' => "Onchan",'country_id' => 136),

            array('name' => "Peel",'country_id' => 136),

            array('name' => "Port Erin",'country_id' => 136),

            array('name' => "Port Saint Mary",'country_id' => 136),

            array('name' => "Ramsey",'country_id' => 136),

            array('name' => "Ailinlaplap",'country_id' => 137),

            array('name' => "Ailuk",'country_id' => 137),

            array('name' => "Arno",'country_id' => 137),

            array('name' => "Aur",'country_id' => 137),

            array('name' => "Bikini",'country_id' => 137),

            array('name' => "Ebon",'country_id' => 137),

            array('name' => "Enewetak",'country_id' => 137),

            array('name' => "Jabat",'country_id' => 137),

            array('name' => "Jaluit",'country_id' => 137),

            array('name' => "Kili",'country_id' => 137),

            array('name' => "Kwajalein",'country_id' => 137),

            array('name' => "Lae",'country_id' => 137),

            array('name' => "Lib",'country_id' => 137),

            array('name' => "Likiep",'country_id' => 137),

            array('name' => "Majuro",'country_id' => 137),

            array('name' => "Maloelap",'country_id' => 137),

            array('name' => "Mejit",'country_id' => 137),

            array('name' => "Mili",'country_id' => 137),

            array('name' => "Namorik",'country_id' => 137),

            array('name' => "Namu",'country_id' => 137),

            array('name' => "Rongelap",'country_id' => 137),

            array('name' => "Ujae",'country_id' => 137),

            array('name' => "Utrik",'country_id' => 137),

            array('name' => "Wotho",'country_id' => 137),

            array('name' => "Wotje",'country_id' => 137),

            array('name' => "Fort-de-France",'country_id' => 138),

            array('name' => "La Trinite",'country_id' => 138),

            array('name' => "Le Marin",'country_id' => 138),

            array('name' => "Saint-Pierre",'country_id' => 138),

            array('name' => "Adrar",'country_id' => 139),

            array('name' => "Assaba",'country_id' => 139),

            array('name' => "Brakna",'country_id' => 139),

            array('name' => "Dhakhlat Nawadibu",'country_id' => 139),

            array('name' => "Hudh-al-Gharbi",'country_id' => 139),

            array('name' => "Hudh-ash-Sharqi",'country_id' => 139),

            array('name' => "Inshiri",'country_id' => 139),

            array('name' => "Nawakshut",'country_id' => 139),

            array('name' => "Qidimagha",'country_id' => 139),

            array('name' => "Qurqul",'country_id' => 139),

            array('name' => "Taqant",'country_id' => 139),

            array('name' => "Tiris Zammur",'country_id' => 139),

            array('name' => "Trarza",'country_id' => 139),

            array('name' => "Black River",'country_id' => 140),

            array('name' => "Eau Coulee",'country_id' => 140),

            array('name' => "Flacq",'country_id' => 140),

            array('name' => "Floreal",'country_id' => 140),

            array('name' => "Grand Port",'country_id' => 140),

            array('name' => "Moka",'country_id' => 140),

            array('name' => "Pamplempousses",'country_id' => 140),

            array('name' => "Plaines Wilhelm",'country_id' => 140),

            array('name' => "Port Louis",'country_id' => 140),

            array('name' => "Riviere du Rempart",'country_id' => 140),

            array('name' => "Rodrigues",'country_id' => 140),

            array('name' => "Rose Hill",'country_id' => 140),

            array('name' => "Savanne",'country_id' => 140),

            array('name' => "Mayotte",'country_id' => 141),

            array('name' => "Pamanzi",'country_id' => 141),

            array('name' => "Aguascalientes",'country_id' => 142),

            array('name' => "Baja California",'country_id' => 142),

            array('name' => "Baja California Sur",'country_id' => 142),

            array('name' => "Campeche",'country_id' => 142),

            array('name' => "Chiapas",'country_id' => 142),

            array('name' => "Chihuahua",'country_id' => 142),

            array('name' => "Coahuila",'country_id' => 142),

            array('name' => "Colima",'country_id' => 142),

            array('name' => "Distrito Federal",'country_id' => 142),

            array('name' => "Durango",'country_id' => 142),

            array('name' => "Estado de Mexico",'country_id' => 142),

            array('name' => "Guanajuato",'country_id' => 142),

            array('name' => "Guerrero",'country_id' => 142),

            array('name' => "Hidalgo",'country_id' => 142),

            array('name' => "Jalisco",'country_id' => 142),

            array('name' => "Mexico",'country_id' => 142),

            array('name' => "Michoacan",'country_id' => 142),

            array('name' => "Morelos",'country_id' => 142),

            array('name' => "Nayarit",'country_id' => 142),

            array('name' => "Nuevo Leon",'country_id' => 142),

            array('name' => "Oaxaca",'country_id' => 142),

            array('name' => "Puebla",'country_id' => 142),

            array('name' => "Queretaro",'country_id' => 142),

            array('name' => "Quintana Roo",'country_id' => 142),

            array('name' => "San Luis Potosi",'country_id' => 142),

            array('name' => "Sinaloa",'country_id' => 142),

            array('name' => "Sonora",'country_id' => 142),

            array('name' => "Tabasco",'country_id' => 142),

            array('name' => "Tamaulipas",'country_id' => 142),

            array('name' => "Tlaxcala",'country_id' => 142),

            array('name' => "Veracruz",'country_id' => 142),

            array('name' => "Yucatan",'country_id' => 142),

            array('name' => "Zacatecas",'country_id' => 142),

            array('name' => "Chuuk",'country_id' => 143),

            array('name' => "Kusaie",'country_id' => 143),

            array('name' => "Pohnpei",'country_id' => 143),

            array('name' => "Yap",'country_id' => 143),

            array('name' => "Balti",'country_id' => 144),

            array('name' => "Cahul",'country_id' => 144),

            array('name' => "Chisinau",'country_id' => 144),

            array('name' => "Chisinau Oras",'country_id' => 144),

            array('name' => "Edinet",'country_id' => 144),

            array('name' => "Gagauzia",'country_id' => 144),

            array('name' => "Lapusna",'country_id' => 144),

            array('name' => "Orhei",'country_id' => 144),

            array('name' => "Soroca",'country_id' => 144),

            array('name' => "Taraclia",'country_id' => 144),

            array('name' => "Tighina",'country_id' => 144),

            array('name' => "Transnistria",'country_id' => 144),

            array('name' => "Ungheni",'country_id' => 144),

            array('name' => "Fontvieille",'country_id' => 145),

            array('name' => "La Condamine",'country_id' => 145),

            array('name' => "Monaco-Ville",'country_id' => 145),

            array('name' => "Monte Carlo",'country_id' => 145),

            array('name' => "Arhangaj",'country_id' => 146),

            array('name' => "Bajan-Olgij",'country_id' => 146),

            array('name' => "Bajanhongor",'country_id' => 146),

            array('name' => "Bulgan",'country_id' => 146),

            array('name' => "Darhan-Uul",'country_id' => 146),

            array('name' => "Dornod",'country_id' => 146),

            array('name' => "Dornogovi",'country_id' => 146),

            array('name' => "Dundgovi",'country_id' => 146),

            array('name' => "Govi-Altaj",'country_id' => 146),

            array('name' => "Govisumber",'country_id' => 146),

            array('name' => "Hentij",'country_id' => 146),

            array('name' => "Hovd",'country_id' => 146),

            array('name' => "Hovsgol",'country_id' => 146),

            array('name' => "Omnogovi",'country_id' => 146),

            array('name' => "Orhon",'country_id' => 146),

            array('name' => "Ovorhangaj",'country_id' => 146),

            array('name' => "Selenge",'country_id' => 146),

            array('name' => "Suhbaatar",'country_id' => 146),

            array('name' => "Tov",'country_id' => 146),

            array('name' => "Ulaanbaatar",'country_id' => 146),

            array('name' => "Uvs",'country_id' => 146),

            array('name' => "Zavhan",'country_id' => 146),

            array('name' => "Montserrat",'country_id' => 147),

            array('name' => "Agadir",'country_id' => 148),

            array('name' => "Casablanca",'country_id' => 148),

            array('name' => "Chaouia-Ouardigha",'country_id' => 148),

            array('name' => "Doukkala-Abda",'country_id' => 148),

            array('name' => "Fes-Boulemane",'country_id' => 148),

            array('name' => "Gharb-Chrarda-Beni Hssen",'country_id' => 148),

            array('name' => "Guelmim",'country_id' => 148),

            array('name' => "Kenitra",'country_id' => 148),

            array('name' => "Marrakech-Tensift-Al Haouz",'country_id' => 148),

            array('name' => "Meknes-Tafilalet",'country_id' => 148),

            array('name' => "Oriental",'country_id' => 148),

            array('name' => "Oujda",'country_id' => 148),

            array('name' => "Province de Tanger",'country_id' => 148),

            array('name' => "Rabat-Sale-Zammour-Zaer",'country_id' => 148),

            array('name' => "Sala Al Jadida",'country_id' => 148),

            array('name' => "Settat",'country_id' => 148),

            array('name' => "Souss Massa-Draa",'country_id' => 148),

            array('name' => "Tadla-Azilal",'country_id' => 148),

            array('name' => "Tangier-Tetouan",'country_id' => 148),

            array('name' => "Taza-Al Hoceima-Taounate",'country_id' => 148),

            array('name' => "Wilaya de Casablanca",'country_id' => 148),

            array('name' => "Wilaya de Rabat-Sale",'country_id' => 148),

            array('name' => "Cabo Delgado",'country_id' => 149),

            array('name' => "Gaza",'country_id' => 149),

            array('name' => "Inhambane",'country_id' => 149),

            array('name' => "Manica",'country_id' => 149),

            array('name' => "Maputo",'country_id' => 149),

            array('name' => "Maputo Provincia",'country_id' => 149),

            array('name' => "Nampula",'country_id' => 149),

            array('name' => "Niassa",'country_id' => 149),

            array('name' => "Sofala",'country_id' => 149),

            array('name' => "Tete",'country_id' => 149),

            array('name' => "Zambezia",'country_id' => 149),

            array('name' => "Ayeyarwady",'country_id' => 150),

            array('name' => "Bago",'country_id' => 150),

            array('name' => "Chin",'country_id' => 150),

            array('name' => "Kachin",'country_id' => 150),

            array('name' => "Kayah",'country_id' => 150),

            array('name' => "Kayin",'country_id' => 150),

            array('name' => "Magway",'country_id' => 150),

            array('name' => "Mandalay",'country_id' => 150),

            array('name' => "Mon",'country_id' => 150),

            array('name' => "Nay Pyi Taw",'country_id' => 150),

            array('name' => "Rakhine",'country_id' => 150),

            array('name' => "Sagaing",'country_id' => 150),

            array('name' => "Shan",'country_id' => 150),

            array('name' => "Tanintharyi",'country_id' => 150),

            array('name' => "Yangon",'country_id' => 150),

            array('name' => "Caprivi",'country_id' => 151),

            array('name' => "Erongo",'country_id' => 151),

            array('name' => "Hardap",'country_id' => 151),

            array('name' => "Karas",'country_id' => 151),

            array('name' => "Kavango",'country_id' => 151),

            array('name' => "Khomas",'country_id' => 151),

            array('name' => "Kunene",'country_id' => 151),

            array('name' => "Ohangwena",'country_id' => 151),

            array('name' => "Omaheke",'country_id' => 151),

            array('name' => "Omusati",'country_id' => 151),

            array('name' => "Oshana",'country_id' => 151),

            array('name' => "Oshikoto",'country_id' => 151),

            array('name' => "Otjozondjupa",'country_id' => 151),

            array('name' => "Yaren",'country_id' => 152),

            array('name' => "Bagmati",'country_id' => 153),

            array('name' => "Bheri",'country_id' => 153),

            array('name' => "Dhawalagiri",'country_id' => 153),

            array('name' => "Gandaki",'country_id' => 153),

            array('name' => "Janakpur",'country_id' => 153),

            array('name' => "Karnali",'country_id' => 153),

            array('name' => "Koshi",'country_id' => 153),

            array('name' => "Lumbini",'country_id' => 153),

            array('name' => "Mahakali",'country_id' => 153),

            array('name' => "Mechi",'country_id' => 153),

            array('name' => "Narayani",'country_id' => 153),

            array('name' => "Rapti",'country_id' => 153),

            array('name' => "Sagarmatha",'country_id' => 153),

            array('name' => "Seti",'country_id' => 153),

            array('name' => "Bonaire",'country_id' => 154),

            array('name' => "Curacao",'country_id' => 154),

            array('name' => "Saba",'country_id' => 154),

            array('name' => "Sint Eustatius",'country_id' => 154),

            array('name' => "Sint Maarten",'country_id' => 154),

            array('name' => "Amsterdam",'country_id' => 155),

            array('name' => "Benelux",'country_id' => 155),

            array('name' => "Drenthe",'country_id' => 155),

            array('name' => "Flevoland",'country_id' => 155),

            array('name' => "Friesland",'country_id' => 155),

            array('name' => "Gelderland",'country_id' => 155),

            array('name' => "Groningen",'country_id' => 155),

            array('name' => "Limburg",'country_id' => 155),

            array('name' => "Noord-Brabant",'country_id' => 155),

            array('name' => "Noord-Holland",'country_id' => 155),

            array('name' => "Overijssel",'country_id' => 155),

            array('name' => "South Holland",'country_id' => 155),

            array('name' => "Utrecht",'country_id' => 155),

            array('name' => "Zeeland",'country_id' => 155),

            array('name' => "Zuid-Holland",'country_id' => 155),

            array('name' => "Iles",'country_id' => 156),

            array('name' => "Nord",'country_id' => 156),

            array('name' => "Sud",'country_id' => 156),

            array('name' => "Area Outside Region",'country_id' => 157),

            array('name' => "Auckland",'country_id' => 157),

            array('name' => "Bay of Plenty",'country_id' => 157),

            array('name' => "Canterbury",'country_id' => 157),

            array('name' => "Christchurch",'country_id' => 157),

            array('name' => "Gisborne",'country_id' => 157),

            array('name' => "Hawke's Bay",'country_id' => 157),

            array('name' => "Manawatu-Wanganui",'country_id' => 157),

            array('name' => "Marlborough",'country_id' => 157),

            array('name' => "Nelson",'country_id' => 157),

            array('name' => "Northland",'country_id' => 157),

            array('name' => "Otago",'country_id' => 157),

            array('name' => "Rodney",'country_id' => 157),

            array('name' => "Southland",'country_id' => 157),

            array('name' => "Taranaki",'country_id' => 157),

            array('name' => "Tasman",'country_id' => 157),

            array('name' => "Waikato",'country_id' => 157),

            array('name' => "Wellington",'country_id' => 157),

            array('name' => "West Coast",'country_id' => 157),

            array('name' => "Atlantico Norte",'country_id' => 158),

            array('name' => "Atlantico Sur",'country_id' => 158),

            array('name' => "Boaco",'country_id' => 158),

            array('name' => "Carazo",'country_id' => 158),

            array('name' => "Chinandega",'country_id' => 158),

            array('name' => "Chontales",'country_id' => 158),

            array('name' => "Esteli",'country_id' => 158),

            array('name' => "Granada",'country_id' => 158),

            array('name' => "Jinotega",'country_id' => 158),

            array('name' => "Leon",'country_id' => 158),

            array('name' => "Madriz",'country_id' => 158),

            array('name' => "Managua",'country_id' => 158),

            array('name' => "Masaya",'country_id' => 158),

            array('name' => "Matagalpa",'country_id' => 158),

            array('name' => "Nueva Segovia",'country_id' => 158),

            array('name' => "Rio San Juan",'country_id' => 158),

            array('name' => "Rivas",'country_id' => 158),

            array('name' => "Agadez",'country_id' => 159),

            array('name' => "Diffa",'country_id' => 159),

            array('name' => "Dosso",'country_id' => 159),

            array('name' => "Maradi",'country_id' => 159),

            array('name' => "Niamey",'country_id' => 159),

            array('name' => "Tahoua",'country_id' => 159),

            array('name' => "Tillabery",'country_id' => 159),

            array('name' => "Zinder",'country_id' => 159),

            array('name' => "Abia",'country_id' => 160),

            array('name' => "Abuja Federal Capital Territor",'country_id' => 160),

            array('name' => "Adamawa",'country_id' => 160),

            array('name' => "Akwa Ibom",'country_id' => 160),

            array('name' => "Anambra",'country_id' => 160),

            array('name' => "Bauchi",'country_id' => 160),

            array('name' => "Bayelsa",'country_id' => 160),

            array('name' => "Benue",'country_id' => 160),

            array('name' => "Borno",'country_id' => 160),

            array('name' => "Cross River",'country_id' => 160),

            array('name' => "Delta",'country_id' => 160),

            array('name' => "Ebonyi",'country_id' => 160),

            array('name' => "Edo",'country_id' => 160),

            array('name' => "Ekiti",'country_id' => 160),

            array('name' => "Enugu",'country_id' => 160),

            array('name' => "Gombe",'country_id' => 160),

            array('name' => "Imo",'country_id' => 160),

            array('name' => "Jigawa",'country_id' => 160),

            array('name' => "Kaduna",'country_id' => 160),

            array('name' => "Kano",'country_id' => 160),

            array('name' => "Katsina",'country_id' => 160),

            array('name' => "Kebbi",'country_id' => 160),

            array('name' => "Kogi",'country_id' => 160),

            array('name' => "Kwara",'country_id' => 160),

            array('name' => "Lagos",'country_id' => 160),

            array('name' => "Nassarawa",'country_id' => 160),

            array('name' => "Niger",'country_id' => 160),

            array('name' => "Ogun",'country_id' => 160),

            array('name' => "Ondo",'country_id' => 160),

            array('name' => "Osun",'country_id' => 160),

            array('name' => "Oyo",'country_id' => 160),

            array('name' => "Plateau",'country_id' => 160),

            array('name' => "Rivers",'country_id' => 160),

            array('name' => "Sokoto",'country_id' => 160),

            array('name' => "Taraba",'country_id' => 160),

            array('name' => "Yobe",'country_id' => 160),

            array('name' => "Zamfara",'country_id' => 160),

            array('name' => "Niue",'country_id' => 161),

            array('name' => "Norfolk Island",'country_id' => 162),

            array('name' => "Northern Islands",'country_id' => 163),

            array('name' => "Rota",'country_id' => 163),

            array('name' => "Saipan",'country_id' => 163),

            array('name' => "Tinian",'country_id' => 163),

            array('name' => "Akershus",'country_id' => 164),

            array('name' => "Aust Agder",'country_id' => 164),

            array('name' => "Bergen",'country_id' => 164),

            array('name' => "Buskerud",'country_id' => 164),

            array('name' => "Finnmark",'country_id' => 164),

            array('name' => "Hedmark",'country_id' => 164),

            array('name' => "Hordaland",'country_id' => 164),

            array('name' => "Moere og Romsdal",'country_id' => 164),

            array('name' => "Nord Trondelag",'country_id' => 164),

            array('name' => "Nordland",'country_id' => 164),

            array('name' => "Oestfold",'country_id' => 164),

            array('name' => "Oppland",'country_id' => 164),

            array('name' => "Oslo",'country_id' => 164),

            array('name' => "Rogaland",'country_id' => 164),

            array('name' => "Soer Troendelag",'country_id' => 164),

            array('name' => "Sogn og Fjordane",'country_id' => 164),

            array('name' => "Stavern",'country_id' => 164),

            array('name' => "Sykkylven",'country_id' => 164),

            array('name' => "Telemark",'country_id' => 164),

            array('name' => "Troms",'country_id' => 164),

            array('name' => "Vest Agder",'country_id' => 164),

            array('name' => "Vestfold",'country_id' => 164),

            array('name' => "ÃƒÂ˜stfold",'country_id' => 164),

            array('name' => "Al Buraimi",'country_id' => 165),

            array('name' => "Dhufar",'country_id' => 165),

            array('name' => "Masqat",'country_id' => 165),

            array('name' => "Musandam",'country_id' => 165),

            array('name' => "Rusayl",'country_id' => 165),

            array('name' => "Wadi Kabir",'country_id' => 165),

            array('name' => "ad-Dakhiliyah",'country_id' => 165),

            array('name' => "adh-Dhahirah",'country_id' => 165),

            array('name' => "al-Batinah",'country_id' => 165),

            array('name' => "ash-Sharqiyah",'country_id' => 165),

            array('name' => "Azad kashmir",'country_id' => 166),

            array('name' => "Balochistan",'country_id' => 166),

            array('name' => "Fata",'country_id' => 166),

            array('name' => "Gilgit–baltistan",'country_id' => 166),

            array('name' => "Islamabad capital territory",'country_id' => 166),

            array('name' => "Khyber Pakhtunkhwa",'country_id' => 166),

            array('name' => "Punjab",'country_id' => 166),

            array('name' => "Sindh",'country_id' => 166),

            array('name' => "Aimeliik",'country_id' => 167),

            array('name' => "Airai",'country_id' => 167),

            array('name' => "Angaur",'country_id' => 167),

            array('name' => "Hatobohei",'country_id' => 167),

            array('name' => "Kayangel",'country_id' => 167),

            array('name' => "Koror",'country_id' => 167),

            array('name' => "Melekeok",'country_id' => 167),

            array('name' => "Ngaraard",'country_id' => 167),

            array('name' => "Ngardmau",'country_id' => 167),

            array('name' => "Ngaremlengui",'country_id' => 167),

            array('name' => "Ngatpang",'country_id' => 167),

            array('name' => "Ngchesar",'country_id' => 167),

            array('name' => "Ngerchelong",'country_id' => 167),

            array('name' => "Ngiwal",'country_id' => 167),

            array('name' => "Peleliu",'country_id' => 167),

            array('name' => "Sonsorol",'country_id' => 167),

            array('name' => "Ariha",'country_id' => 168),

            array('name' => "Bayt Lahm",'country_id' => 168),

            array('name' => "Bethlehem",'country_id' => 168),

            array('name' => "Dayr-al-Balah",'country_id' => 168),

            array('name' => "Ghazzah",'country_id' => 168),

            array('name' => "Ghazzah ash-Shamaliyah",'country_id' => 168),

            array('name' => "Janin",'country_id' => 168),

            array('name' => "Khan Yunis",'country_id' => 168),

            array('name' => "Nabulus",'country_id' => 168),

            array('name' => "Qalqilyah",'country_id' => 168),

            array('name' => "Rafah",'country_id' => 168),

            array('name' => "Ram Allah wal-Birah",'country_id' => 168),

            array('name' => "Salfit",'country_id' => 168),

            array('name' => "Tubas",'country_id' => 168),

            array('name' => "Tulkarm",'country_id' => 168),

            array('name' => "al-Khalil",'country_id' => 168),

            array('name' => "al-Quds",'country_id' => 168),

            array('name' => "Bocas del Toro",'country_id' => 169),

            array('name' => "Chiriqui",'country_id' => 169),

            array('name' => "Cocle",'country_id' => 169),

            array('name' => "Colon",'country_id' => 169),

            array('name' => "Darien",'country_id' => 169),

            array('name' => "Embera",'country_id' => 169),

            array('name' => "Herrera",'country_id' => 169),

            array('name' => "Kuna Yala",'country_id' => 169),

            array('name' => "Los Santos",'country_id' => 169),

            array('name' => "Ngobe Bugle",'country_id' => 169),

            array('name' => "Panama",'country_id' => 169),

            array('name' => "Veraguas",'country_id' => 169),

            array('name' => "East New Britain",'country_id' => 170),

            array('name' => "East Sepik",'country_id' => 170),

            array('name' => "Eastern Highlands",'country_id' => 170),

            array('name' => "Enga",'country_id' => 170),

            array('name' => "Fly River",'country_id' => 170),

            array('name' => "Gulf",'country_id' => 170),

            array('name' => "Madang",'country_id' => 170),

            array('name' => "Manus",'country_id' => 170),

            array('name' => "Milne Bay",'country_id' => 170),

            array('name' => "Morobe",'country_id' => 170),

            array('name' => "National Capital District",'country_id' => 170),

            array('name' => "New Ireland",'country_id' => 170),

            array('name' => "North Solomons",'country_id' => 170),

            array('name' => "Oro",'country_id' => 170),

            array('name' => "Sandaun",'country_id' => 170),

            array('name' => "Simbu",'country_id' => 170),

            array('name' => "Southern Highlands",'country_id' => 170),

            array('name' => "West New Britain",'country_id' => 170),

            array('name' => "Western Highlands",'country_id' => 170),

            array('name' => "Alto Paraguay",'country_id' => 171),

            array('name' => "Alto Parana",'country_id' => 171),

            array('name' => "Amambay",'country_id' => 171),

            array('name' => "Asuncion",'country_id' => 171),

            array('name' => "Boqueron",'country_id' => 171),

            array('name' => "Caaguazu",'country_id' => 171),

            array('name' => "Caazapa",'country_id' => 171),

            array('name' => "Canendiyu",'country_id' => 171),

            array('name' => "Central",'country_id' => 171),

            array('name' => "Concepcion",'country_id' => 171),

            array('name' => "Cordillera",'country_id' => 171),

            array('name' => "Guaira",'country_id' => 171),

            array('name' => "Itapua",'country_id' => 171),

            array('name' => "Misiones",'country_id' => 171),

            array('name' => "Neembucu",'country_id' => 171),

            array('name' => "Paraguari",'country_id' => 171),

            array('name' => "Presidente Hayes",'country_id' => 171),

            array('name' => "San Pedro",'country_id' => 171),

            array('name' => "Amazonas",'country_id' => 172),

            array('name' => "Ancash",'country_id' => 172),

            array('name' => "Apurimac",'country_id' => 172),

            array('name' => "Arequipa",'country_id' => 172),

            array('name' => "Ayacucho",'country_id' => 172),

            array('name' => "Cajamarca",'country_id' => 172),

            array('name' => "Cusco",'country_id' => 172),

            array('name' => "Huancavelica",'country_id' => 172),

            array('name' => "Huanuco",'country_id' => 172),

            array('name' => "Ica",'country_id' => 172),

            array('name' => "Junin",'country_id' => 172),

            array('name' => "La Libertad",'country_id' => 172),

            array('name' => "Lambayeque",'country_id' => 172),

            array('name' => "Lima y Callao",'country_id' => 172),

            array('name' => "Loreto",'country_id' => 172),

            array('name' => "Madre de Dios",'country_id' => 172),

            array('name' => "Moquegua",'country_id' => 172),

            array('name' => "Pasco",'country_id' => 172),

            array('name' => "Piura",'country_id' => 172),

            array('name' => "Puno",'country_id' => 172),

            array('name' => "San Martin",'country_id' => 172),

            array('name' => "Tacna",'country_id' => 172),

            array('name' => "Tumbes",'country_id' => 172),

            array('name' => "Ucayali",'country_id' => 172),

            array('name' => "Batangas",'country_id' => 173),

            array('name' => "Bicol",'country_id' => 173),

            array('name' => "Bulacan",'country_id' => 173),

            array('name' => "Cagayan",'country_id' => 173),

            array('name' => "Caraga",'country_id' => 173),

            array('name' => "Central Luzon",'country_id' => 173),

            array('name' => "Central Mindanao",'country_id' => 173),

            array('name' => "Central Visayas",'country_id' => 173),

            array('name' => "Cordillera",'country_id' => 173),

            array('name' => "Davao",'country_id' => 173),

            array('name' => "Eastern Visayas",'country_id' => 173),

            array('name' => "Greater Metropolitan Area",'country_id' => 173),

            array('name' => "Ilocos",'country_id' => 173),

            array('name' => "Laguna",'country_id' => 173),

            array('name' => "Luzon",'country_id' => 173),

            array('name' => "Mactan",'country_id' => 173),

            array('name' => "Metropolitan Manila Area",'country_id' => 173),

            array('name' => "Muslim Mindanao",'country_id' => 173),

            array('name' => "Northern Mindanao",'country_id' => 173),

            array('name' => "Southern Mindanao",'country_id' => 173),

            array('name' => "Southern Tagalog",'country_id' => 173),

            array('name' => "Western Mindanao",'country_id' => 173),

            array('name' => "Western Visayas",'country_id' => 173),

            array('name' => "Pitcairn Island",'country_id' => 174),

            array('name' => "Biale Blota",'country_id' => 175),

            array('name' => "Dobroszyce",'country_id' => 175),

            array('name' => "Dolnoslaskie",'country_id' => 175),

            array('name' => "Dziekanow Lesny",'country_id' => 175),

            array('name' => "Hopowo",'country_id' => 175),

            array('name' => "Kartuzy",'country_id' => 175),

            array('name' => "Koscian",'country_id' => 175),

            array('name' => "Krakow",'country_id' => 175),

            array('name' => "Kujawsko-Pomorskie",'country_id' => 175),

            array('name' => "Lodzkie",'country_id' => 175),

            array('name' => "Lubelskie",'country_id' => 175),

            array('name' => "Lubuskie",'country_id' => 175),

            array('name' => "Malomice",'country_id' => 175),

            array('name' => "Malopolskie",'country_id' => 175),

            array('name' => "Mazowieckie",'country_id' => 175),

            array('name' => "Mirkow",'country_id' => 175),

            array('name' => "Opolskie",'country_id' => 175),

            array('name' => "Ostrowiec",'country_id' => 175),

            array('name' => "Podkarpackie",'country_id' => 175),

            array('name' => "Podlaskie",'country_id' => 175),

            array('name' => "Polska",'country_id' => 175),

            array('name' => "Pomorskie",'country_id' => 175),

            array('name' => "Poznan",'country_id' => 175),

            array('name' => "Pruszkow",'country_id' => 175),

            array('name' => "Rymanowska",'country_id' => 175),

            array('name' => "Rzeszow",'country_id' => 175),

            array('name' => "Slaskie",'country_id' => 175),

            array('name' => "Stare Pole",'country_id' => 175),

            array('name' => "Swietokrzyskie",'country_id' => 175),

            array('name' => "Warminsko-Mazurskie",'country_id' => 175),

            array('name' => "Warsaw",'country_id' => 175),

            array('name' => "Wejherowo",'country_id' => 175),

            array('name' => "Wielkopolskie",'country_id' => 175),

            array('name' => "Wroclaw",'country_id' => 175),

            array('name' => "Zachodnio-Pomorskie",'country_id' => 175),

            array('name' => "Zukowo",'country_id' => 175),

            array('name' => "Abrantes",'country_id' => 176),

            array('name' => "Acores",'country_id' => 176),

            array('name' => "Alentejo",'country_id' => 176),

            array('name' => "Algarve",'country_id' => 176),

            array('name' => "Braga",'country_id' => 176),

            array('name' => "Centro",'country_id' => 176),

            array('name' => "Distrito de Leiria",'country_id' => 176),

            array('name' => "Distrito de Viana do Castelo",'country_id' => 176),

            array('name' => "Distrito de Vila Real",'country_id' => 176),

            array('name' => "Distrito do Porto",'country_id' => 176),

            array('name' => "Lisboa e Vale do Tejo",'country_id' => 176),

            array('name' => "Madeira",'country_id' => 176),

            array('name' => "Norte",'country_id' => 176),

            array('name' => "Paivas",'country_id' => 176),

            array('name' => "Arecibo",'country_id' => 177),

            array('name' => "Bayamon",'country_id' => 177),

            array('name' => "Carolina",'country_id' => 177),

            array('name' => "Florida",'country_id' => 177),

            array('name' => "Guayama",'country_id' => 177),

            array('name' => "Humacao",'country_id' => 177),

            array('name' => "Mayaguez-Aguadilla",'country_id' => 177),

            array('name' => "Ponce",'country_id' => 177),

            array('name' => "Salinas",'country_id' => 177),

            array('name' => "San Juan",'country_id' => 177),

            array('name' => "Doha",'country_id' => 178),

            array('name' => "Jarian-al-Batnah",'country_id' => 178),

            array('name' => "Umm Salal",'country_id' => 178),

            array('name' => "ad-Dawhah",'country_id' => 178),

            array('name' => "al-Ghuwayriyah",'country_id' => 178),

            array('name' => "al-Jumayliyah",'country_id' => 178),

            array('name' => "al-Khawr",'country_id' => 178),

            array('name' => "al-Wakrah",'country_id' => 178),

            array('name' => "ar-Rayyan",'country_id' => 178),

            array('name' => "ash-Shamal",'country_id' => 178),

            array('name' => "Saint-Benoit",'country_id' => 179),

            array('name' => "Saint-Denis",'country_id' => 179),

            array('name' => "Saint-Paul",'country_id' => 179),

            array('name' => "Saint-Pierre",'country_id' => 179),

            array('name' => "Alba",'country_id' => 180),

            array('name' => "Arad",'country_id' => 180),

            array('name' => "Arges",'country_id' => 180),

            array('name' => "Bacau",'country_id' => 180),

            array('name' => "Bihor",'country_id' => 180),

            array('name' => "Bistrita-Nasaud",'country_id' => 180),

            array('name' => "Botosani",'country_id' => 180),

            array('name' => "Braila",'country_id' => 180),

            array('name' => "Brasov",'country_id' => 180),

            array('name' => "Bucuresti",'country_id' => 180),

            array('name' => "Buzau",'country_id' => 180),

            array('name' => "Calarasi",'country_id' => 180),

            array('name' => "Caras-Severin",'country_id' => 180),

            array('name' => "Cluj",'country_id' => 180),

            array('name' => "Constanta",'country_id' => 180),

            array('name' => "Covasna",'country_id' => 180),

            array('name' => "Dambovita",'country_id' => 180),

            array('name' => "Dolj",'country_id' => 180),

            array('name' => "Galati",'country_id' => 180),

            array('name' => "Giurgiu",'country_id' => 180),

            array('name' => "Gorj",'country_id' => 180),

            array('name' => "Harghita",'country_id' => 180),

            array('name' => "Hunedoara",'country_id' => 180),

            array('name' => "Ialomita",'country_id' => 180),

            array('name' => "Iasi",'country_id' => 180),

            array('name' => "Ilfov",'country_id' => 180),

            array('name' => "Maramures",'country_id' => 180),

            array('name' => "Mehedinti",'country_id' => 180),

            array('name' => "Mures",'country_id' => 180),

            array('name' => "Neamt",'country_id' => 180),

            array('name' => "Olt",'country_id' => 180),

            array('name' => "Prahova",'country_id' => 180),

            array('name' => "Salaj",'country_id' => 180),

            array('name' => "Satu Mare",'country_id' => 180),

            array('name' => "Sibiu",'country_id' => 180),

            array('name' => "Sondelor",'country_id' => 180),

            array('name' => "Suceava",'country_id' => 180),

            array('name' => "Teleorman",'country_id' => 180),

            array('name' => "Timis",'country_id' => 180),

            array('name' => "Tulcea",'country_id' => 180),

            array('name' => "Valcea",'country_id' => 180),

            array('name' => "Vaslui",'country_id' => 180),

            array('name' => "Vrancea",'country_id' => 180),

            array('name' => "Adygeja",'country_id' => 181),

            array('name' => "Aga",'country_id' => 181),

            array('name' => "Alanija",'country_id' => 181),

            array('name' => "Altaj",'country_id' => 181),

            array('name' => "Amur",'country_id' => 181),

            array('name' => "Arhangelsk",'country_id' => 181),

            array('name' => "Astrahan",'country_id' => 181),

            array('name' => "Bashkortostan",'country_id' => 181),

            array('name' => "Belgorod",'country_id' => 181),

            array('name' => "Brjansk",'country_id' => 181),

            array('name' => "Burjatija",'country_id' => 181),

            array('name' => "Chechenija",'country_id' => 181),

            array('name' => "Cheljabinsk",'country_id' => 181),

            array('name' => "Chita",'country_id' => 181),

            array('name' => "Chukotka",'country_id' => 181),

            array('name' => "Chuvashija",'country_id' => 181),

            array('name' => "Dagestan",'country_id' => 181),

            array('name' => "Evenkija",'country_id' => 181),

            array('name' => "Gorno-Altaj",'country_id' => 181),

            array('name' => "Habarovsk",'country_id' => 181),

            array('name' => "Hakasija",'country_id' => 181),

            array('name' => "Hanty-Mansija",'country_id' => 181),

            array('name' => "Ingusetija",'country_id' => 181),

            array('name' => "Irkutsk",'country_id' => 181),

            array('name' => "Ivanovo",'country_id' => 181),

            array('name' => "Jamalo-Nenets",'country_id' => 181),

            array('name' => "Jaroslavl",'country_id' => 181),

            array('name' => "Jevrej",'country_id' => 181),

            array('name' => "Kabardino-Balkarija",'country_id' => 181),

            array('name' => "Kaliningrad",'country_id' => 181),

            array('name' => "Kalmykija",'country_id' => 181),

            array('name' => "Kaluga",'country_id' => 181),

            array('name' => "Kamchatka",'country_id' => 181),

            array('name' => "Karachaj-Cherkessija",'country_id' => 181),

            array('name' => "Karelija",'country_id' => 181),

            array('name' => "Kemerovo",'country_id' => 181),

            array('name' => "Khabarovskiy Kray",'country_id' => 181),

            array('name' => "Kirov",'country_id' => 181),

            array('name' => "Komi",'country_id' => 181),

            array('name' => "Komi-Permjakija",'country_id' => 181),

            array('name' => "Korjakija",'country_id' => 181),

            array('name' => "Kostroma",'country_id' => 181),

            array('name' => "Krasnodar",'country_id' => 181),

            array('name' => "Krasnojarsk",'country_id' => 181),

            array('name' => "Krasnoyarskiy Kray",'country_id' => 181),

            array('name' => "Kurgan",'country_id' => 181),

            array('name' => "Kursk",'country_id' => 181),

            array('name' => "Leningrad",'country_id' => 181),

            array('name' => "Lipeck",'country_id' => 181),

            array('name' => "Magadan",'country_id' => 181),

            array('name' => "Marij El",'country_id' => 181),

            array('name' => "Mordovija",'country_id' => 181),

            array('name' => "Moscow",'country_id' => 181),

            array('name' => "Moskovskaja Oblast",'country_id' => 181),

            array('name' => "Moskovskaya Oblast",'country_id' => 181),

            array('name' => "Moskva",'country_id' => 181),

            array('name' => "Murmansk",'country_id' => 181),

            array('name' => "Nenets",'country_id' => 181),

            array('name' => "Nizhnij Novgorod",'country_id' => 181),

            array('name' => "Novgorod",'country_id' => 181),

            array('name' => "Novokusnezk",'country_id' => 181),

            array('name' => "Novosibirsk",'country_id' => 181),

            array('name' => "Omsk",'country_id' => 181),

            array('name' => "Orenburg",'country_id' => 181),

            array('name' => "Orjol",'country_id' => 181),

            array('name' => "Penza",'country_id' => 181),

            array('name' => "Perm",'country_id' => 181),

            array('name' => "Primorje",'country_id' => 181),

            array('name' => "Pskov",'country_id' => 181),

            array('name' => "Pskovskaya Oblast",'country_id' => 181),

            array('name' => "Rjazan",'country_id' => 181),

            array('name' => "Rostov",'country_id' => 181),

            array('name' => "Saha",'country_id' => 181),

            array('name' => "Sahalin",'country_id' => 181),

            array('name' => "Samara",'country_id' => 181),

            array('name' => "Samarskaya",'country_id' => 181),

            array('name' => "Sankt-Peterburg",'country_id' => 181),

            array('name' => "Saratov",'country_id' => 181),

            array('name' => "Smolensk",'country_id' => 181),

            array('name' => "Stavropol",'country_id' => 181),

            array('name' => "Sverdlovsk",'country_id' => 181),

            array('name' => "Tajmyrija",'country_id' => 181),

            array('name' => "Tambov",'country_id' => 181),

            array('name' => "Tatarstan",'country_id' => 181),

            array('name' => "Tjumen",'country_id' => 181),

            array('name' => "Tomsk",'country_id' => 181),

            array('name' => "Tula",'country_id' => 181),

            array('name' => "Tver",'country_id' => 181),

            array('name' => "Tyva",'country_id' => 181),

            array('name' => "Udmurtija",'country_id' => 181),

            array('name' => "Uljanovsk",'country_id' => 181),

            array('name' => "Ulyanovskaya Oblast",'country_id' => 181),

            array('name' => "Ust-Orda",'country_id' => 181),

            array('name' => "Vladimir",'country_id' => 181),

            array('name' => "Volgograd",'country_id' => 181),

            array('name' => "Vologda",'country_id' => 181),

            array('name' => "Voronezh",'country_id' => 181),

            array('name' => "Butare",'country_id' => 182),

            array('name' => "Byumba",'country_id' => 182),

            array('name' => "Cyangugu",'country_id' => 182),

            array('name' => "Gikongoro",'country_id' => 182),

            array('name' => "Gisenyi",'country_id' => 182),

            array('name' => "Gitarama",'country_id' => 182),

            array('name' => "Kibungo",'country_id' => 182),

            array('name' => "Kibuye",'country_id' => 182),

            array('name' => "Kigali-ngali",'country_id' => 182),

            array('name' => "Ruhengeri",'country_id' => 182),

            array('name' => "Ascension",'country_id' => 183),

            array('name' => "Gough Island",'country_id' => 183),

            array('name' => "Saint Helena",'country_id' => 183),

            array('name' => "Tristan da Cunha",'country_id' => 183),

            array('name' => "Christ Church Nichola Town",'country_id' => 184),

            array('name' => "Saint Anne Sandy Point",'country_id' => 184),

            array('name' => "Saint George Basseterre",'country_id' => 184),

            array('name' => "Saint George Gingerland",'country_id' => 184),

            array('name' => "Saint James Windward",'country_id' => 184),

            array('name' => "Saint John Capesterre",'country_id' => 184),

            array('name' => "Saint John Figtree",'country_id' => 184),

            array('name' => "Saint Mary Cayon",'country_id' => 184),

            array('name' => "Saint Paul Capesterre",'country_id' => 184),

            array('name' => "Saint Paul Charlestown",'country_id' => 184),

            array('name' => "Saint Peter Basseterre",'country_id' => 184),

            array('name' => "Saint Thomas Lowland",'country_id' => 184),

            array('name' => "Saint Thomas Middle Island",'country_id' => 184),

            array('name' => "Trinity Palmetto Point",'country_id' => 184),

            array('name' => "Anse-la-Raye",'country_id' => 185),

            array('name' => "Canaries",'country_id' => 185),

            array('name' => "Castries",'country_id' => 185),

            array('name' => "Choiseul",'country_id' => 185),

            array('name' => "Dennery",'country_id' => 185),

            array('name' => "Gros Inlet",'country_id' => 185),

            array('name' => "Laborie",'country_id' => 185),

            array('name' => "Micoud",'country_id' => 185),

            array('name' => "Soufriere",'country_id' => 185),

            array('name' => "Vieux Fort",'country_id' => 185),

            array('name' => "Miquelon-Langlade",'country_id' => 186),

            array('name' => "Saint-Pierre",'country_id' => 186),

            array('name' => "Charlotte",'country_id' => 187),

            array('name' => "Grenadines",'country_id' => 187),

            array('name' => "Saint Andrew",'country_id' => 187),

            array('name' => "Saint David",'country_id' => 187),

            array('name' => "Saint George",'country_id' => 187),

            array('name' => "Saint Patrick",'country_id' => 187),

            array('name' => "A'ana",'country_id' => 188),

            array('name' => "Aiga-i-le-Tai",'country_id' => 188),

            array('name' => "Atua",'country_id' => 188),

            array('name' => "Fa'asaleleaga",'country_id' => 188),

            array('name' => "Gaga'emauga",'country_id' => 188),

            array('name' => "Gagaifomauga",'country_id' => 188),

            array('name' => "Palauli",'country_id' => 188),

            array('name' => "Satupa'itea",'country_id' => 188),

            array('name' => "Tuamasaga",'country_id' => 188),

            array('name' => "Va'a-o-Fonoti",'country_id' => 188),

            array('name' => "Vaisigano",'country_id' => 188),

            array('name' => "Acquaviva",'country_id' => 189),

            array('name' => "Borgo Maggiore",'country_id' => 189),

            array('name' => "Chiesanuova",'country_id' => 189),

            array('name' => "Domagnano",'country_id' => 189),

            array('name' => "Faetano",'country_id' => 189),

            array('name' => "Fiorentino",'country_id' => 189),

            array('name' => "Montegiardino",'country_id' => 189),

            array('name' => "San Marino",'country_id' => 189),

            array('name' => "Serravalle",'country_id' => 189),

            array('name' => "Agua Grande",'country_id' => 190),

            array('name' => "Cantagalo",'country_id' => 190),

            array('name' => "Lemba",'country_id' => 190),

            array('name' => "Lobata",'country_id' => 190),

            array('name' => "Me-Zochi",'country_id' => 190),

            array('name' => "Pague",'country_id' => 190),

            array('name' => "Al Khobar",'country_id' => 191),

            array('name' => "Aseer",'country_id' => 191),

            array('name' => "Ash Sharqiyah",'country_id' => 191),

            array('name' => "Asir",'country_id' => 191),

            array('name' => "Central Province",'country_id' => 191),

            array('name' => "Eastern Province",'country_id' => 191),

            array('name' => "Ha'il",'country_id' => 191),

            array('name' => "Jawf",'country_id' => 191),

            array('name' => "Jizan",'country_id' => 191),

            array('name' => "Makkah",'country_id' => 191),

            array('name' => "Najran",'country_id' => 191),

            array('name' => "Qasim",'country_id' => 191),

            array('name' => "Tabuk",'country_id' => 191),

            array('name' => "Western Province",'country_id' => 191),

            array('name' => "al-Bahah",'country_id' => 191),

            array('name' => "al-Hudud-ash-Shamaliyah",'country_id' => 191),

            array('name' => "al-Madinah",'country_id' => 191),

            array('name' => "ar-Riyad",'country_id' => 191),

            array('name' => "Dakar",'country_id' => 192),

            array('name' => "Diourbel",'country_id' => 192),

            array('name' => "Fatick",'country_id' => 192),

            array('name' => "Kaolack",'country_id' => 192),

            array('name' => "Kolda",'country_id' => 192),

            array('name' => "Louga",'country_id' => 192),

            array('name' => "Saint-Louis",'country_id' => 192),

            array('name' => "Tambacounda",'country_id' => 192),

            array('name' => "Thies",'country_id' => 192),

            array('name' => "Ziguinchor",'country_id' => 192),

            array('name' => "Central Serbia",'country_id' => 193),

            array('name' => "Kosovo and Metohija",'country_id' => 193),

            array('name' => "Vojvodina",'country_id' => 193),

            array('name' => "Anse Boileau",'country_id' => 194),

            array('name' => "Anse Royale",'country_id' => 194),

            array('name' => "Cascade",'country_id' => 194),

            array('name' => "Takamaka",'country_id' => 194),

            array('name' => "Victoria",'country_id' => 194),

            array('name' => "Eastern",'country_id' => 195),

            array('name' => "Northern",'country_id' => 195),

            array('name' => "Southern",'country_id' => 195),

            array('name' => "Western",'country_id' => 195),

            array('name' => "Singapore",'country_id' => 196),

            array('name' => "Banskobystricky",'country_id' => 197),

            array('name' => "Bratislavsky",'country_id' => 197),

            array('name' => "Kosicky",'country_id' => 197),

            array('name' => "Nitriansky",'country_id' => 197),

            array('name' => "Presovsky",'country_id' => 197),

            array('name' => "Trenciansky",'country_id' => 197),

            array('name' => "Trnavsky",'country_id' => 197),

            array('name' => "Zilinsky",'country_id' => 197),

            array('name' => "Benedikt",'country_id' => 198),

            array('name' => "Gorenjska",'country_id' => 198),

            array('name' => "Gorishka",'country_id' => 198),

            array('name' => "Jugovzhodna Slovenija",'country_id' => 198),

            array('name' => "Koroshka",'country_id' => 198),

            array('name' => "Notranjsko-krashka",'country_id' => 198),

            array('name' => "Obalno-krashka",'country_id' => 198),

            array('name' => "Obcina Domzale",'country_id' => 198),

            array('name' => "Obcina Vitanje",'country_id' => 198),

            array('name' => "Osrednjeslovenska",'country_id' => 198),

            array('name' => "Podravska",'country_id' => 198),

            array('name' => "Pomurska",'country_id' => 198),

            array('name' => "Savinjska",'country_id' => 198),

            array('name' => "Slovenian Littoral",'country_id' => 198),

            array('name' => "Spodnjeposavska",'country_id' => 198),

            array('name' => "Zasavska",'country_id' => 198),

            array('name' => "Pitcairn",'country_id' => 199),

            array('name' => "Central",'country_id' => 200),

            array('name' => "Choiseul",'country_id' => 200),

            array('name' => "Guadalcanal",'country_id' => 200),

            array('name' => "Isabel",'country_id' => 200),

            array('name' => "Makira and Ulawa",'country_id' => 200),

            array('name' => "Malaita",'country_id' => 200),

            array('name' => "Rennell and Bellona",'country_id' => 200),

            array('name' => "Temotu",'country_id' => 200),

            array('name' => "Western",'country_id' => 200),

            array('name' => "Awdal",'country_id' => 201),

            array('name' => "Bakol",'country_id' => 201),

            array('name' => "Banadir",'country_id' => 201),

            array('name' => "Bari",'country_id' => 201),

            array('name' => "Bay",'country_id' => 201),

            array('name' => "Galgudug",'country_id' => 201),

            array('name' => "Gedo",'country_id' => 201),

            array('name' => "Hiran",'country_id' => 201),

            array('name' => "Jubbada Hose",'country_id' => 201),

            array('name' => "Jubbadha Dexe",'country_id' => 201),

            array('name' => "Mudug",'country_id' => 201),

            array('name' => "Nugal",'country_id' => 201),

            array('name' => "Sanag",'country_id' => 201),

            array('name' => "Shabellaha Dhexe",'country_id' => 201),

            array('name' => "Shabellaha Hose",'country_id' => 201),

            array('name' => "Togdher",'country_id' => 201),

            array('name' => "Woqoyi Galbed",'country_id' => 201),

            array('name' => "Eastern Cape",'country_id' => 202),

            array('name' => "Free State",'country_id' => 202),

            array('name' => "Gauteng",'country_id' => 202),

            array('name' => "Kempton Park",'country_id' => 202),

            array('name' => "Kramerville",'country_id' => 202),

            array('name' => "KwaZulu Natal",'country_id' => 202),

            array('name' => "Limpopo",'country_id' => 202),

            array('name' => "Mpumalanga",'country_id' => 202),

            array('name' => "North West",'country_id' => 202),

            array('name' => "Northern Cape",'country_id' => 202),

            array('name' => "Parow",'country_id' => 202),

            array('name' => "Table View",'country_id' => 202),

            array('name' => "Umtentweni",'country_id' => 202),

            array('name' => "Western Cape",'country_id' => 202),

            array('name' => "South Georgia",'country_id' => 203),

            array('name' => "Central Equatoria",'country_id' => 204),

            array('name' => "A Coruna",'country_id' => 205),

            array('name' => "Alacant",'country_id' => 205),

            array('name' => "Alava",'country_id' => 205),

            array('name' => "Albacete",'country_id' => 205),

            array('name' => "Almeria",'country_id' => 205),

            array('name' => "Andalucia",'country_id' => 205),

            array('name' => "Asturias",'country_id' => 205),

            array('name' => "Avila",'country_id' => 205),

            array('name' => "Badajoz",'country_id' => 205),

            array('name' => "Balears",'country_id' => 205),

            array('name' => "Barcelona",'country_id' => 205),

            array('name' => "Bertamirans",'country_id' => 205),

            array('name' => "Biscay",'country_id' => 205),

            array('name' => "Burgos",'country_id' => 205),

            array('name' => "Caceres",'country_id' => 205),

            array('name' => "Cadiz",'country_id' => 205),

            array('name' => "Cantabria",'country_id' => 205),

            array('name' => "Castello",'country_id' => 205),

            array('name' => "Catalunya",'country_id' => 205),

            array('name' => "Ceuta",'country_id' => 205),

            array('name' => "Ciudad Real",'country_id' => 205),

            array('name' => "Comunidad Autonoma de Canarias",'country_id' => 205),

            array('name' => "Comunidad Autonoma de Cataluna",'country_id' => 205),

            array('name' => "Comunidad Autonoma de Galicia",'country_id' => 205),

            array('name' => "Comunidad Autonoma de las Isla",'country_id' => 205),

            array('name' => "Comunidad Autonoma del Princip",'country_id' => 205),

            array('name' => "Comunidad Valenciana",'country_id' => 205),

            array('name' => "Cordoba",'country_id' => 205),

            array('name' => "Cuenca",'country_id' => 205),

            array('name' => "Gipuzkoa",'country_id' => 205),

            array('name' => "Girona",'country_id' => 205),

            array('name' => "Granada",'country_id' => 205),

            array('name' => "Guadalajara",'country_id' => 205),

            array('name' => "Guipuzcoa",'country_id' => 205),

            array('name' => "Huelva",'country_id' => 205),

            array('name' => "Huesca",'country_id' => 205),

            array('name' => "Jaen",'country_id' => 205),

            array('name' => "La Rioja",'country_id' => 205),

            array('name' => "Las Palmas",'country_id' => 205),

            array('name' => "Leon",'country_id' => 205),

            array('name' => "Lerida",'country_id' => 205),

            array('name' => "Lleida",'country_id' => 205),

            array('name' => "Lugo",'country_id' => 205),

            array('name' => "Madrid",'country_id' => 205),

            array('name' => "Malaga",'country_id' => 205),

            array('name' => "Melilla",'country_id' => 205),

            array('name' => "Murcia",'country_id' => 205),

            array('name' => "Navarra",'country_id' => 205),

            array('name' => "Ourense",'country_id' => 205),

            array('name' => "Pais Vasco",'country_id' => 205),

            array('name' => "Palencia",'country_id' => 205),

            array('name' => "Pontevedra",'country_id' => 205),

            array('name' => "Salamanca",'country_id' => 205),

            array('name' => "Santa Cruz de Tenerife",'country_id' => 205),

            array('name' => "Segovia",'country_id' => 205),

            array('name' => "Sevilla",'country_id' => 205),

            array('name' => "Soria",'country_id' => 205),

            array('name' => "Tarragona",'country_id' => 205),

            array('name' => "Tenerife",'country_id' => 205),

            array('name' => "Teruel",'country_id' => 205),

            array('name' => "Toledo",'country_id' => 205),

            array('name' => "Valencia",'country_id' => 205),

            array('name' => "Valladolid",'country_id' => 205),

            array('name' => "Vizcaya",'country_id' => 205),

            array('name' => "Zamora",'country_id' => 205),

            array('name' => "Zaragoza",'country_id' => 205),

            array('name' => "Amparai",'country_id' => 206),

            array('name' => "Anuradhapuraya",'country_id' => 206),

            array('name' => "Badulla",'country_id' => 206),

            array('name' => "Boralesgamuwa",'country_id' => 206),

            array('name' => "Colombo",'country_id' => 206),

            array('name' => "Galla",'country_id' => 206),

            array('name' => "Gampaha",'country_id' => 206),

            array('name' => "Hambantota",'country_id' => 206),

            array('name' => "Kalatura",'country_id' => 206),

            array('name' => "Kegalla",'country_id' => 206),

            array('name' => "Kilinochchi",'country_id' => 206),

            array('name' => "Kurunegala",'country_id' => 206),

            array('name' => "Madakalpuwa",'country_id' => 206),

            array('name' => "Maha Nuwara",'country_id' => 206),

            array('name' => "Malwana",'country_id' => 206),

            array('name' => "Mannarama",'country_id' => 206),

            array('name' => "Matale",'country_id' => 206),

            array('name' => "Matara",'country_id' => 206),

            array('name' => "Monaragala",'country_id' => 206),

            array('name' => "Mullaitivu",'country_id' => 206),

            array('name' => "North Eastern Province",'country_id' => 206),

            array('name' => "North Western Province",'country_id' => 206),

            array('name' => "Nuwara Eliya",'country_id' => 206),

            array('name' => "Polonnaruwa",'country_id' => 206),

            array('name' => "Puttalama",'country_id' => 206),

            array('name' => "Ratnapuraya",'country_id' => 206),

            array('name' => "Southern Province",'country_id' => 206),

            array('name' => "Tirikunamalaya",'country_id' => 206),

            array('name' => "Tuscany",'country_id' => 206),

            array('name' => "Vavuniyawa",'country_id' => 206),

            array('name' => "Western Province",'country_id' => 206),

            array('name' => "Yapanaya",'country_id' => 206),

            array('name' => "kadawatha",'country_id' => 206),

            array('name' => "A'ali-an-Nil",'country_id' => 207),

            array('name' => "Bahr-al-Jabal",'country_id' => 207),

            array('name' => "Central Equatoria",'country_id' => 207),

            array('name' => "Gharb Bahr-al-Ghazal",'country_id' => 207),

            array('name' => "Gharb Darfur",'country_id' => 207),

            array('name' => "Gharb Kurdufan",'country_id' => 207),

            array('name' => "Gharb-al-Istiwa'iyah",'country_id' => 207),

            array('name' => "Janub Darfur",'country_id' => 207),

            array('name' => "Janub Kurdufan",'country_id' => 207),

            array('name' => "Junqali",'country_id' => 207),

            array('name' => "Kassala",'country_id' => 207),

            array('name' => "Nahr-an-Nil",'country_id' => 207),

            array('name' => "Shamal Bahr-al-Ghazal",'country_id' => 207),

            array('name' => "Shamal Darfur",'country_id' => 207),

            array('name' => "Shamal Kurdufan",'country_id' => 207),

            array('name' => "Sharq-al-Istiwa'iyah",'country_id' => 207),

            array('name' => "Sinnar",'country_id' => 207),

            array('name' => "Warab",'country_id' => 207),

            array('name' => "Wilayat al Khartum",'country_id' => 207),

            array('name' => "al-Bahr-al-Ahmar",'country_id' => 207),

            array('name' => "al-Buhayrat",'country_id' => 207),

            array('name' => "al-Jazirah",'country_id' => 207),

            array('name' => "al-Khartum",'country_id' => 207),

            array('name' => "al-Qadarif",'country_id' => 207),

            array('name' => "al-Wahdah",'country_id' => 207),

            array('name' => "an-Nil-al-Abyad",'country_id' => 207),

            array('name' => "an-Nil-al-Azraq",'country_id' => 207),

            array('name' => "ash-Shamaliyah",'country_id' => 207),

            array('name' => "Brokopondo",'country_id' => 208),

            array('name' => "Commewijne",'country_id' => 208),

            array('name' => "Coronie",'country_id' => 208),

            array('name' => "Marowijne",'country_id' => 208),

            array('name' => "Nickerie",'country_id' => 208),

            array('name' => "Para",'country_id' => 208),

            array('name' => "Paramaribo",'country_id' => 208),

            array('name' => "Saramacca",'country_id' => 208),

            array('name' => "Wanica",'country_id' => 208),

            array('name' => "Svalbard",'country_id' => 209),

            array('name' => "Hhohho",'country_id' => 210),

            array('name' => "Lubombo",'country_id' => 210),

            array('name' => "Manzini",'country_id' => 210),

            array('name' => "Shiselweni",'country_id' => 210),

            array('name' => "Alvsborgs Lan",'country_id' => 211),

            array('name' => "Angermanland",'country_id' => 211),

            array('name' => "Blekinge",'country_id' => 211),

            array('name' => "Bohuslan",'country_id' => 211),

            array('name' => "Dalarna",'country_id' => 211),

            array('name' => "Gavleborg",'country_id' => 211),

            array('name' => "Gaza",'country_id' => 211),

            array('name' => "Gotland",'country_id' => 211),

            array('name' => "Halland",'country_id' => 211),

            array('name' => "Jamtland",'country_id' => 211),

            array('name' => "Jonkoping",'country_id' => 211),

            array('name' => "Kalmar",'country_id' => 211),

            array('name' => "Kristianstads",'country_id' => 211),

            array('name' => "Kronoberg",'country_id' => 211),

            array('name' => "Norrbotten",'country_id' => 211),

            array('name' => "Orebro",'country_id' => 211),

            array('name' => "Ostergotland",'country_id' => 211),

            array('name' => "Saltsjo-Boo",'country_id' => 211),

            array('name' => "Skane",'country_id' => 211),

            array('name' => "Smaland",'country_id' => 211),

            array('name' => "Sodermanland",'country_id' => 211),

            array('name' => "Stockholm",'country_id' => 211),

            array('name' => "Uppsala",'country_id' => 211),

            array('name' => "Varmland",'country_id' => 211),

            array('name' => "Vasterbotten",'country_id' => 211),

            array('name' => "Vastergotland",'country_id' => 211),

            array('name' => "Vasternorrland",'country_id' => 211),

            array('name' => "Vastmanland",'country_id' => 211),

            array('name' => "Vastra Gotaland",'country_id' => 211),

            array('name' => "Aargau",'country_id' => 212),

            array('name' => "Appenzell Inner-Rhoden",'country_id' => 212),

            array('name' => "Appenzell-Ausser Rhoden",'country_id' => 212),

            array('name' => "Basel-Landschaft",'country_id' => 212),

            array('name' => "Basel-Stadt",'country_id' => 212),

            array('name' => "Bern",'country_id' => 212),

            array('name' => "Canton Ticino",'country_id' => 212),

            array('name' => "Fribourg",'country_id' => 212),

            array('name' => "Geneve",'country_id' => 212),

            array('name' => "Glarus",'country_id' => 212),

            array('name' => "Graubunden",'country_id' => 212),

            array('name' => "Heerbrugg",'country_id' => 212),

            array('name' => "Jura",'country_id' => 212),

            array('name' => "Kanton Aargau",'country_id' => 212),

            array('name' => "Luzern",'country_id' => 212),

            array('name' => "Morbio Inferiore",'country_id' => 212),

            array('name' => "Muhen",'country_id' => 212),

            array('name' => "Neuchatel",'country_id' => 212),

            array('name' => "Nidwalden",'country_id' => 212),

            array('name' => "Obwalden",'country_id' => 212),

            array('name' => "Sankt Gallen",'country_id' => 212),

            array('name' => "Schaffhausen",'country_id' => 212),

            array('name' => "Schwyz",'country_id' => 212),

            array('name' => "Solothurn",'country_id' => 212),

            array('name' => "Thurgau",'country_id' => 212),

            array('name' => "Ticino",'country_id' => 212),

            array('name' => "Uri",'country_id' => 212),

            array('name' => "Valais",'country_id' => 212),

            array('name' => "Vaud",'country_id' => 212),

            array('name' => "Vauffelin",'country_id' => 212),

            array('name' => "Zug",'country_id' => 212),

            array('name' => "Zurich",'country_id' => 212),

            array('name' => "Aleppo",'country_id' => 213),

            array('name' => "Dar'a",'country_id' => 213),

            array('name' => "Dayr-az-Zawr",'country_id' => 213),

            array('name' => "Dimashq",'country_id' => 213),

            array('name' => "Halab",'country_id' => 213),

            array('name' => "Hamah",'country_id' => 213),

            array('name' => "Hims",'country_id' => 213),

            array('name' => "Idlib",'country_id' => 213),

            array('name' => "Madinat Dimashq",'country_id' => 213),

            array('name' => "Tartus",'country_id' => 213),

            array('name' => "al-Hasakah",'country_id' => 213),

            array('name' => "al-Ladhiqiyah",'country_id' => 213),

            array('name' => "al-Qunaytirah",'country_id' => 213),

            array('name' => "ar-Raqqah",'country_id' => 213),

            array('name' => "as-Suwayda",'country_id' => 213),

            array('name' => "Changhwa",'country_id' => 214),

            array('name' => "Chiayi Hsien",'country_id' => 214),

            array('name' => "Chiayi Shih",'country_id' => 214),

            array('name' => "Eastern Taipei",'country_id' => 214),

            array('name' => "Hsinchu Hsien",'country_id' => 214),

            array('name' => "Hsinchu Shih",'country_id' => 214),

            array('name' => "Hualien",'country_id' => 214),

            array('name' => "Ilan",'country_id' => 214),

            array('name' => "Kaohsiung Hsien",'country_id' => 214),

            array('name' => "Kaohsiung Shih",'country_id' => 214),

            array('name' => "Keelung Shih",'country_id' => 214),

            array('name' => "Kinmen",'country_id' => 214),

            array('name' => "Miaoli",'country_id' => 214),

            array('name' => "Nantou",'country_id' => 214),

            array('name' => "Northern Taiwan",'country_id' => 214),

            array('name' => "Penghu",'country_id' => 214),

            array('name' => "Pingtung",'country_id' => 214),

            array('name' => "Taichung",'country_id' => 214),

            array('name' => "Taichung Hsien",'country_id' => 214),

            array('name' => "Taichung Shih",'country_id' => 214),

            array('name' => "Tainan Hsien",'country_id' => 214),

            array('name' => "Tainan Shih",'country_id' => 214),

            array('name' => "Taipei Hsien",'country_id' => 214),

            array('name' => "Taipei Shih / Taipei Hsien",'country_id' => 214),

            array('name' => "Taitung",'country_id' => 214),

            array('name' => "Taoyuan",'country_id' => 214),

            array('name' => "Yilan",'country_id' => 214),

            array('name' => "Yun-Lin Hsien",'country_id' => 214),

            array('name' => "Yunlin",'country_id' => 214),

            array('name' => "Dushanbe",'country_id' => 215),

            array('name' => "Gorno-Badakhshan",'country_id' => 215),

            array('name' => "Karotegin",'country_id' => 215),

            array('name' => "Khatlon",'country_id' => 215),

            array('name' => "Sughd",'country_id' => 215),

            array('name' => "Arusha",'country_id' => 216),

            array('name' => "Dar es Salaam",'country_id' => 216),

            array('name' => "Dodoma",'country_id' => 216),

            array('name' => "Iringa",'country_id' => 216),

            array('name' => "Kagera",'country_id' => 216),

            array('name' => "Kigoma",'country_id' => 216),

            array('name' => "Kilimanjaro",'country_id' => 216),

            array('name' => "Lindi",'country_id' => 216),

            array('name' => "Mara",'country_id' => 216),

            array('name' => "Mbeya",'country_id' => 216),

            array('name' => "Morogoro",'country_id' => 216),

            array('name' => "Mtwara",'country_id' => 216),

            array('name' => "Mwanza",'country_id' => 216),

            array('name' => "Pwani",'country_id' => 216),

            array('name' => "Rukwa",'country_id' => 216),

            array('name' => "Ruvuma",'country_id' => 216),

            array('name' => "Shinyanga",'country_id' => 216),

            array('name' => "Singida",'country_id' => 216),

            array('name' => "Tabora",'country_id' => 216),

            array('name' => "Tanga",'country_id' => 216),

            array('name' => "Zanzibar and Pemba",'country_id' => 216),

            array('name' => "Amnat Charoen",'country_id' => 217),

            array('name' => "Ang Thong",'country_id' => 217),

            array('name' => "Bangkok",'country_id' => 217),

            array('name' => "Buri Ram",'country_id' => 217),

            array('name' => "Chachoengsao",'country_id' => 217),

            array('name' => "Chai Nat",'country_id' => 217),

            array('name' => "Chaiyaphum",'country_id' => 217),

            array('name' => "Changwat Chaiyaphum",'country_id' => 217),

            array('name' => "Chanthaburi",'country_id' => 217),

            array('name' => "Chiang Mai",'country_id' => 217),

            array('name' => "Chiang Rai",'country_id' => 217),

            array('name' => "Chon Buri",'country_id' => 217),

            array('name' => "Chumphon",'country_id' => 217),

            array('name' => "Kalasin",'country_id' => 217),

            array('name' => "Kamphaeng Phet",'country_id' => 217),

            array('name' => "Kanchanaburi",'country_id' => 217),

            array('name' => "Khon Kaen",'country_id' => 217),

            array('name' => "Krabi",'country_id' => 217),

            array('name' => "Krung Thep",'country_id' => 217),

            array('name' => "Lampang",'country_id' => 217),

            array('name' => "Lamphun",'country_id' => 217),

            array('name' => "Loei",'country_id' => 217),

            array('name' => "Lop Buri",'country_id' => 217),

            array('name' => "Mae Hong Son",'country_id' => 217),

            array('name' => "Maha Sarakham",'country_id' => 217),

            array('name' => "Mukdahan",'country_id' => 217),

            array('name' => "Nakhon Nayok",'country_id' => 217),

            array('name' => "Nakhon Pathom",'country_id' => 217),

            array('name' => "Nakhon Phanom",'country_id' => 217),

            array('name' => "Nakhon Ratchasima",'country_id' => 217),

            array('name' => "Nakhon Sawan",'country_id' => 217),

            array('name' => "Nakhon Si Thammarat",'country_id' => 217),

            array('name' => "Nan",'country_id' => 217),

            array('name' => "Narathiwat",'country_id' => 217),

            array('name' => "Nong Bua Lam Phu",'country_id' => 217),

            array('name' => "Nong Khai",'country_id' => 217),

            array('name' => "Nonthaburi",'country_id' => 217),

            array('name' => "Pathum Thani",'country_id' => 217),

            array('name' => "Pattani",'country_id' => 217),

            array('name' => "Phangnga",'country_id' => 217),

            array('name' => "Phatthalung",'country_id' => 217),

            array('name' => "Phayao",'country_id' => 217),

            array('name' => "Phetchabun",'country_id' => 217),

            array('name' => "Phetchaburi",'country_id' => 217),

            array('name' => "Phichit",'country_id' => 217),

            array('name' => "Phitsanulok",'country_id' => 217),

            array('name' => "Phra Nakhon Si Ayutthaya",'country_id' => 217),

            array('name' => "Phrae",'country_id' => 217),

            array('name' => "Phuket",'country_id' => 217),

            array('name' => "Prachin Buri",'country_id' => 217),

            array('name' => "Prachuap Khiri Khan",'country_id' => 217),

            array('name' => "Ranong",'country_id' => 217),

            array('name' => "Ratchaburi",'country_id' => 217),

            array('name' => "Rayong",'country_id' => 217),

            array('name' => "Roi Et",'country_id' => 217),

            array('name' => "Sa Kaeo",'country_id' => 217),

            array('name' => "Sakon Nakhon",'country_id' => 217),

            array('name' => "Samut Prakan",'country_id' => 217),

            array('name' => "Samut Sakhon",'country_id' => 217),

            array('name' => "Samut Songkhran",'country_id' => 217),

            array('name' => "Saraburi",'country_id' => 217),

            array('name' => "Satun",'country_id' => 217),

            array('name' => "Si Sa Ket",'country_id' => 217),

            array('name' => "Sing Buri",'country_id' => 217),

            array('name' => "Songkhla",'country_id' => 217),

            array('name' => "Sukhothai",'country_id' => 217),

            array('name' => "Suphan Buri",'country_id' => 217),

            array('name' => "Surat Thani",'country_id' => 217),

            array('name' => "Surin",'country_id' => 217),

            array('name' => "Tak",'country_id' => 217),

            array('name' => "Trang",'country_id' => 217),

            array('name' => "Trat",'country_id' => 217),

            array('name' => "Ubon Ratchathani",'country_id' => 217),

            array('name' => "Udon Thani",'country_id' => 217),

            array('name' => "Uthai Thani",'country_id' => 217),

            array('name' => "Uttaradit",'country_id' => 217),

            array('name' => "Yala",'country_id' => 217),

            array('name' => "Yasothon",'country_id' => 217),

            array('name' => "Centre",'country_id' => 218),

            array('name' => "Kara",'country_id' => 218),

            array('name' => "Maritime",'country_id' => 218),

            array('name' => "Plateaux",'country_id' => 218),

            array('name' => "Savanes",'country_id' => 218),

            array('name' => "Atafu",'country_id' => 219),

            array('name' => "Fakaofo",'country_id' => 219),

            array('name' => "Nukunonu",'country_id' => 219),

            array('name' => "Eua",'country_id' => 220),

            array('name' => "Ha'apai",'country_id' => 220),

            array('name' => "Niuas",'country_id' => 220),

            array('name' => "Tongatapu",'country_id' => 220),

            array('name' => "Vava'u",'country_id' => 220),

            array('name' => "Arima-Tunapuna-Piarco",'country_id' => 221),

            array('name' => "Caroni",'country_id' => 221),

            array('name' => "Chaguanas",'country_id' => 221),

            array('name' => "Couva-Tabaquite-Talparo",'country_id' => 221),

            array('name' => "Diego Martin",'country_id' => 221),

            array('name' => "Glencoe",'country_id' => 221),

            array('name' => "Penal Debe",'country_id' => 221),

            array('name' => "Point Fortin",'country_id' => 221),

            array('name' => "Port of Spain",'country_id' => 221),

            array('name' => "Princes Town",'country_id' => 221),

            array('name' => "Saint George",'country_id' => 221),

            array('name' => "San Fernando",'country_id' => 221),

            array('name' => "San Juan",'country_id' => 221),

            array('name' => "Sangre Grande",'country_id' => 221),

            array('name' => "Siparia",'country_id' => 221),

            array('name' => "Tobago",'country_id' => 221),

            array('name' => "Aryanah",'country_id' => 222),

            array('name' => "Bajah",'country_id' => 222),

            array('name' => "Bin 'Arus",'country_id' => 222),

            array('name' => "Binzart",'country_id' => 222),

            array('name' => "Gouvernorat de Ariana",'country_id' => 222),

            array('name' => "Gouvernorat de Nabeul",'country_id' => 222),

            array('name' => "Gouvernorat de Sousse",'country_id' => 222),

            array('name' => "Hammamet Yasmine",'country_id' => 222),

            array('name' => "Jundubah",'country_id' => 222),

            array('name' => "Madaniyin",'country_id' => 222),

            array('name' => "Manubah",'country_id' => 222),

            array('name' => "Monastir",'country_id' => 222),

            array('name' => "Nabul",'country_id' => 222),

            array('name' => "Qabis",'country_id' => 222),

            array('name' => "Qafsah",'country_id' => 222),

            array('name' => "Qibili",'country_id' => 222),

            array('name' => "Safaqis",'country_id' => 222),

            array('name' => "Sfax",'country_id' => 222),

            array('name' => "Sidi Bu Zayd",'country_id' => 222),

            array('name' => "Silyanah",'country_id' => 222),

            array('name' => "Susah",'country_id' => 222),

            array('name' => "Tatawin",'country_id' => 222),

            array('name' => "Tawzar",'country_id' => 222),

            array('name' => "Tunis",'country_id' => 222),

            array('name' => "Zaghwan",'country_id' => 222),

            array('name' => "al-Kaf",'country_id' => 222),

            array('name' => "al-Mahdiyah",'country_id' => 222),

            array('name' => "al-Munastir",'country_id' => 222),

            array('name' => "al-Qasrayn",'country_id' => 222),

            array('name' => "al-Qayrawan",'country_id' => 222),

            array('name' => "Adana",'country_id' => 223),

            array('name' => "Adiyaman",'country_id' => 223),

            array('name' => "Afyon",'country_id' => 223),

            array('name' => "Agri",'country_id' => 223),

            array('name' => "Aksaray",'country_id' => 223),

            array('name' => "Amasya",'country_id' => 223),

            array('name' => "Ankara",'country_id' => 223),

            array('name' => "Antalya",'country_id' => 223),

            array('name' => "Ardahan",'country_id' => 223),

            array('name' => "Artvin",'country_id' => 223),

            array('name' => "Aydin",'country_id' => 223),

            array('name' => "Balikesir",'country_id' => 223),

            array('name' => "Bartin",'country_id' => 223),

            array('name' => "Batman",'country_id' => 223),

            array('name' => "Bayburt",'country_id' => 223),

            array('name' => "Bilecik",'country_id' => 223),

            array('name' => "Bingol",'country_id' => 223),

            array('name' => "Bitlis",'country_id' => 223),

            array('name' => "Bolu",'country_id' => 223),

            array('name' => "Burdur",'country_id' => 223),

            array('name' => "Bursa",'country_id' => 223),

            array('name' => "Canakkale",'country_id' => 223),

            array('name' => "Cankiri",'country_id' => 223),

            array('name' => "Corum",'country_id' => 223),

            array('name' => "Denizli",'country_id' => 223),

            array('name' => "Diyarbakir",'country_id' => 223),

            array('name' => "Duzce",'country_id' => 223),

            array('name' => "Edirne",'country_id' => 223),

            array('name' => "Elazig",'country_id' => 223),

            array('name' => "Erzincan",'country_id' => 223),

            array('name' => "Erzurum",'country_id' => 223),

            array('name' => "Eskisehir",'country_id' => 223),

            array('name' => "Gaziantep",'country_id' => 223),

            array('name' => "Giresun",'country_id' => 223),

            array('name' => "Gumushane",'country_id' => 223),

            array('name' => "Hakkari",'country_id' => 223),

            array('name' => "Hatay",'country_id' => 223),

            array('name' => "Icel",'country_id' => 223),

            array('name' => "Igdir",'country_id' => 223),

            array('name' => "Isparta",'country_id' => 223),

            array('name' => "Istanbul",'country_id' => 223),

            array('name' => "Izmir",'country_id' => 223),

            array('name' => "Kahramanmaras",'country_id' => 223),

            array('name' => "Karabuk",'country_id' => 223),

            array('name' => "Karaman",'country_id' => 223),

            array('name' => "Kars",'country_id' => 223),

            array('name' => "Karsiyaka",'country_id' => 223),

            array('name' => "Kastamonu",'country_id' => 223),

            array('name' => "Kayseri",'country_id' => 223),

            array('name' => "Kilis",'country_id' => 223),

            array('name' => "Kirikkale",'country_id' => 223),

            array('name' => "Kirklareli",'country_id' => 223),

            array('name' => "Kirsehir",'country_id' => 223),

            array('name' => "Kocaeli",'country_id' => 223),

            array('name' => "Konya",'country_id' => 223),

            array('name' => "Kutahya",'country_id' => 223),

            array('name' => "Lefkosa",'country_id' => 223),

            array('name' => "Malatya",'country_id' => 223),

            array('name' => "Manisa",'country_id' => 223),

            array('name' => "Mardin",'country_id' => 223),

            array('name' => "Mugla",'country_id' => 223),

            array('name' => "Mus",'country_id' => 223),

            array('name' => "Nevsehir",'country_id' => 223),

            array('name' => "Nigde",'country_id' => 223),

            array('name' => "Ordu",'country_id' => 223),

            array('name' => "Osmaniye",'country_id' => 223),

            array('name' => "Rize",'country_id' => 223),

            array('name' => "Sakarya",'country_id' => 223),

            array('name' => "Samsun",'country_id' => 223),

            array('name' => "Sanliurfa",'country_id' => 223),

            array('name' => "Siirt",'country_id' => 223),

            array('name' => "Sinop",'country_id' => 223),

            array('name' => "Sirnak",'country_id' => 223),

            array('name' => "Sivas",'country_id' => 223),

            array('name' => "Tekirdag",'country_id' => 223),

            array('name' => "Tokat",'country_id' => 223),

            array('name' => "Trabzon",'country_id' => 223),

            array('name' => "Tunceli",'country_id' => 223),

            array('name' => "Usak",'country_id' => 223),

            array('name' => "Van",'country_id' => 223),

            array('name' => "Yalova",'country_id' => 223),

            array('name' => "Yozgat",'country_id' => 223),

            array('name' => "Zonguldak",'country_id' => 223),

            array('name' => "Ahal",'country_id' => 224),

            array('name' => "Asgabat",'country_id' => 224),

            array('name' => "Balkan",'country_id' => 224),

            array('name' => "Dasoguz",'country_id' => 224),

            array('name' => "Lebap",'country_id' => 224),

            array('name' => "Mari",'country_id' => 224),

            array('name' => "Grand Turk",'country_id' => 225),

            array('name' => "South Caicos and East Caicos",'country_id' => 225),

            array('name' => "Funafuti",'country_id' => 226),

            array('name' => "Nanumanga",'country_id' => 226),

            array('name' => "Nanumea",'country_id' => 226),

            array('name' => "Niutao",'country_id' => 226),

            array('name' => "Nui",'country_id' => 226),

            array('name' => "Nukufetau",'country_id' => 226),

            array('name' => "Nukulaelae",'country_id' => 226),

            array('name' => "Vaitupu",'country_id' => 226),

            array('name' => "Central",'country_id' => 227),

            array('name' => "Eastern",'country_id' => 227),

            array('name' => "Northern",'country_id' => 227),

            array('name' => "Western",'country_id' => 227),

            array('name' => "Cherkas'ka",'country_id' => 228),

            array('name' => "Chernihivs'ka",'country_id' => 228),

            array('name' => "Chernivets'ka",'country_id' => 228),

            array('name' => "Crimea",'country_id' => 228),

            array('name' => "Dnipropetrovska",'country_id' => 228),

            array('name' => "Donets'ka",'country_id' => 228),

            array('name' => "Ivano-Frankivs'ka",'country_id' => 228),

            array('name' => "Kharkiv",'country_id' => 228),

            array('name' => "Kharkov",'country_id' => 228),

            array('name' => "Khersonska",'country_id' => 228),

            array('name' => "Khmel'nyts'ka",'country_id' => 228),

            array('name' => "Kirovohrad",'country_id' => 228),

            array('name' => "Krym",'country_id' => 228),

            array('name' => "Kyyiv",'country_id' => 228),

            array('name' => "Kyyivs'ka",'country_id' => 228),

            array('name' => "L'vivs'ka",'country_id' => 228),

            array('name' => "Luhans'ka",'country_id' => 228),

            array('name' => "Mykolayivs'ka",'country_id' => 228),

            array('name' => "Odes'ka",'country_id' => 228),

            array('name' => "Odessa",'country_id' => 228),

            array('name' => "Poltavs'ka",'country_id' => 228),

            array('name' => "Rivnens'ka",'country_id' => 228),

            array('name' => "Sevastopol'",'country_id' => 228),

            array('name' => "Sums'ka",'country_id' => 228),

            array('name' => "Ternopil's'ka",'country_id' => 228),

            array('name' => "Volyns'ka",'country_id' => 228),

            array('name' => "Vynnyts'ka",'country_id' => 228),

            array('name' => "Zakarpats'ka",'country_id' => 228),

            array('name' => "Zaporizhia",'country_id' => 228),

            array('name' => "Zhytomyrs'ka",'country_id' => 228),

            array('name' => "Abu Zabi",'country_id' => 229),

            array('name' => "Ajman",'country_id' => 229),

            array('name' => "Dubai",'country_id' => 229),

            array('name' => "Ras al-Khaymah",'country_id' => 229),

            array('name' => "Sharjah",'country_id' => 229),

            array('name' => "Sharjha",'country_id' => 229),

            array('name' => "Umm al Qaywayn",'country_id' => 229),

            array('name' => "al-Fujayrah",'country_id' => 229),

            array('name' => "ash-Shariqah",'country_id' => 229),

            array('name' => "Aberdeen",'country_id' => 230),

            array('name' => "Aberdeenshire",'country_id' => 230),

            array('name' => "Argyll",'country_id' => 230),

            array('name' => "Armagh",'country_id' => 230),

            array('name' => "Bedfordshire",'country_id' => 230),

            array('name' => "Belfast",'country_id' => 230),

            array('name' => "Berkshire",'country_id' => 230),

            array('name' => "Birmingham",'country_id' => 230),

            array('name' => "Brechin",'country_id' => 230),

            array('name' => "Bridgnorth",'country_id' => 230),

            array('name' => "Bristol",'country_id' => 230),

            array('name' => "Buckinghamshire",'country_id' => 230),

            array('name' => "Cambridge",'country_id' => 230),

            array('name' => "Cambridgeshire",'country_id' => 230),

            array('name' => "Channel Islands",'country_id' => 230),

            array('name' => "Cheshire",'country_id' => 230),

            array('name' => "Cleveland",'country_id' => 230),

            array('name' => "Co Fermanagh",'country_id' => 230),

            array('name' => "Conwy",'country_id' => 230),

            array('name' => "Cornwall",'country_id' => 230),

            array('name' => "Coventry",'country_id' => 230),

            array('name' => "Craven Arms",'country_id' => 230),

            array('name' => "Cumbria",'country_id' => 230),

            array('name' => "Denbighshire",'country_id' => 230),

            array('name' => "Derby",'country_id' => 230),

            array('name' => "Derbyshire",'country_id' => 230),

            array('name' => "Devon",'country_id' => 230),

            array('name' => "Dial Code Dungannon",'country_id' => 230),

            array('name' => "Didcot",'country_id' => 230),

            array('name' => "Dorset",'country_id' => 230),

            array('name' => "Dunbartonshire",'country_id' => 230),

            array('name' => "Durham",'country_id' => 230),

            array('name' => "East Dunbartonshire",'country_id' => 230),

            array('name' => "East Lothian",'country_id' => 230),

            array('name' => "East Midlands",'country_id' => 230),

            array('name' => "East Sussex",'country_id' => 230),

            array('name' => "East Yorkshire",'country_id' => 230),

            array('name' => "England",'country_id' => 230),

            array('name' => "Essex",'country_id' => 230),

            array('name' => "Fermanagh",'country_id' => 230),

            array('name' => "Fife",'country_id' => 230),

            array('name' => "Flintshire",'country_id' => 230),

            array('name' => "Fulham",'country_id' => 230),

            array('name' => "Gainsborough",'country_id' => 230),

            array('name' => "Glocestershire",'country_id' => 230),

            array('name' => "Gwent",'country_id' => 230),

            array('name' => "Hampshire",'country_id' => 230),

            array('name' => "Hants",'country_id' => 230),

            array('name' => "Herefordshire",'country_id' => 230),

            array('name' => "Hertfordshire",'country_id' => 230),

            array('name' => "Ireland",'country_id' => 230),

            array('name' => "Isle Of Man",'country_id' => 230),

            array('name' => "Isle of Wight",'country_id' => 230),

            array('name' => "Kenford",'country_id' => 230),

            array('name' => "Kent",'country_id' => 230),

            array('name' => "Kilmarnock",'country_id' => 230),

            array('name' => "Lanarkshire",'country_id' => 230),

            array('name' => "Lancashire",'country_id' => 230),

            array('name' => "Leicestershire",'country_id' => 230),

            array('name' => "Lincolnshire",'country_id' => 230),

            array('name' => "Llanymynech",'country_id' => 230),

            array('name' => "London",'country_id' => 230),

            array('name' => "Ludlow",'country_id' => 230),

            array('name' => "Manchester",'country_id' => 230),

            array('name' => "Mayfair",'country_id' => 230),

            array('name' => "Merseyside",'country_id' => 230),

            array('name' => "Mid Glamorgan",'country_id' => 230),

            array('name' => "Middlesex",'country_id' => 230),

            array('name' => "Mildenhall",'country_id' => 230),

            array('name' => "Monmouthshire",'country_id' => 230),

            array('name' => "Newton Stewart",'country_id' => 230),

            array('name' => "Norfolk",'country_id' => 230),

            array('name' => "North Humberside",'country_id' => 230),

            array('name' => "North Yorkshire",'country_id' => 230),

            array('name' => "Northamptonshire",'country_id' => 230),

            array('name' => "Northants",'country_id' => 230),

            array('name' => "Northern Ireland",'country_id' => 230),

            array('name' => "Northumberland",'country_id' => 230),

            array('name' => "Nottinghamshire",'country_id' => 230),

            array('name' => "Oxford",'country_id' => 230),

            array('name' => "Powys",'country_id' => 230),

            array('name' => "Roos-shire",'country_id' => 230),

            array('name' => "SUSSEX",'country_id' => 230),

            array('name' => "Sark",'country_id' => 230),

            array('name' => "Scotland",'country_id' => 230),

            array('name' => "Scottish Borders",'country_id' => 230),

            array('name' => "Shropshire",'country_id' => 230),

            array('name' => "Somerset",'country_id' => 230),

            array('name' => "South Glamorgan",'country_id' => 230),

            array('name' => "South Wales",'country_id' => 230),

            array('name' => "South Yorkshire",'country_id' => 230),

            array('name' => "Southwell",'country_id' => 230),

            array('name' => "Staffordshire",'country_id' => 230),

            array('name' => "Strabane",'country_id' => 230),

            array('name' => "Suffolk",'country_id' => 230),

            array('name' => "Surrey",'country_id' => 230),

            array('name' => "Sussex",'country_id' => 230),

            array('name' => "Twickenham",'country_id' => 230),

            array('name' => "Tyne and Wear",'country_id' => 230),

            array('name' => "Tyrone",'country_id' => 230),

            array('name' => "Utah",'country_id' => 230),

            array('name' => "Wales",'country_id' => 230),

            array('name' => "Warwickshire",'country_id' => 230),

            array('name' => "West Lothian",'country_id' => 230),

            array('name' => "West Midlands",'country_id' => 230),

            array('name' => "West Sussex",'country_id' => 230),

            array('name' => "West Yorkshire",'country_id' => 230),

            array('name' => "Whissendine",'country_id' => 230),

            array('name' => "Wiltshire",'country_id' => 230),

            array('name' => "Wokingham",'country_id' => 230),

            array('name' => "Worcestershire",'country_id' => 230),

            array('name' => "Wrexham",'country_id' => 230),

            array('name' => "Wurttemberg",'country_id' => 230),

            array('name' => "Yorkshire",'country_id' => 230),

            array('name' => "Alabama",'country_id' => 231),

            array('name' => "Alaska",'country_id' => 231),

            array('name' => "Arizona",'country_id' => 231),

            array('name' => "Arkansas",'country_id' => 231),

            array('name' => "Byram",'country_id' => 231),

            array('name' => "California",'country_id' => 231),

            array('name' => "Cokato",'country_id' => 231),

            array('name' => "Colorado",'country_id' => 231),

            array('name' => "Connecticut",'country_id' => 231),

            array('name' => "Delaware",'country_id' => 231),

            array('name' => "District of Columbia",'country_id' => 231),

            array('name' => "Florida",'country_id' => 231),

            array('name' => "Georgia",'country_id' => 231),

            array('name' => "Hawaii",'country_id' => 231),

            array('name' => "Idaho",'country_id' => 231),

            array('name' => "Illinois",'country_id' => 231),

            array('name' => "Indiana",'country_id' => 231),

            array('name' => "Iowa",'country_id' => 231),

            array('name' => "Kansas",'country_id' => 231),

            array('name' => "Kentucky",'country_id' => 231),

            array('name' => "Louisiana",'country_id' => 231),

            array('name' => "Lowa",'country_id' => 231),

            array('name' => "Maine",'country_id' => 231),

            array('name' => "Maryland",'country_id' => 231),

            array('name' => "Massachusetts",'country_id' => 231),

            array('name' => "Medfield",'country_id' => 231),

            array('name' => "Michigan",'country_id' => 231),

            array('name' => "Minnesota",'country_id' => 231),

            array('name' => "Mississippi",'country_id' => 231),

            array('name' => "Missouri",'country_id' => 231),

            array('name' => "Montana",'country_id' => 231),

            array('name' => "Nebraska",'country_id' => 231),

            array('name' => "Nevada",'country_id' => 231),

            array('name' => "New Hampshire",'country_id' => 231),

            array('name' => "New Jersey",'country_id' => 231),

            array('name' => "New Jersy",'country_id' => 231),

            array('name' => "New Mexico",'country_id' => 231),

            array('name' => "New York",'country_id' => 231),

            array('name' => "North Carolina",'country_id' => 231),

            array('name' => "North Dakota",'country_id' => 231),

            array('name' => "Ohio",'country_id' => 231),

            array('name' => "Oklahoma",'country_id' => 231),

            array('name' => "Ontario",'country_id' => 231),

            array('name' => "Oregon",'country_id' => 231),

            array('name' => "Pennsylvania",'country_id' => 231),

            array('name' => "Ramey",'country_id' => 231),

            array('name' => "Rhode Island",'country_id' => 231),

            array('name' => "South Carolina",'country_id' => 231),

            array('name' => "South Dakota",'country_id' => 231),

            array('name' => "Sublimity",'country_id' => 231),

            array('name' => "Tennessee",'country_id' => 231),

            array('name' => "Texas",'country_id' => 231),

            array('name' => "Trimble",'country_id' => 231),

            array('name' => "Utah",'country_id' => 231),

            array('name' => "Vermont",'country_id' => 231),

            array('name' => "Virginia",'country_id' => 231),

            array('name' => "Washington",'country_id' => 231),

            array('name' => "West Virginia",'country_id' => 231),

            array('name' => "Wisconsin",'country_id' => 231),

            array('name' => "Wyoming",'country_id' => 231),

            array('name' => "United States Minor Outlying I",'country_id' => 232),

            array('name' => "Artigas",'country_id' => 233),

            array('name' => "Canelones",'country_id' => 233),

            array('name' => "Cerro Largo",'country_id' => 233),

            array('name' => "Colonia",'country_id' => 233),

            array('name' => "Durazno",'country_id' => 233),

            array('name' => "FLorida",'country_id' => 233),

            array('name' => "Flores",'country_id' => 233),

            array('name' => "Lavalleja",'country_id' => 233),

            array('name' => "Maldonado",'country_id' => 233),

            array('name' => "Montevideo",'country_id' => 233),

            array('name' => "Paysandu",'country_id' => 233),

            array('name' => "Rio Negro",'country_id' => 233),

            array('name' => "Rivera",'country_id' => 233),

            array('name' => "Rocha",'country_id' => 233),

            array('name' => "Salto",'country_id' => 233),

            array('name' => "San Jose",'country_id' => 233),

            array('name' => "Soriano",'country_id' => 233),

            array('name' => "Tacuarembo",'country_id' => 233),

            array('name' => "Treinta y Tres",'country_id' => 233),

            array('name' => "Andijon",'country_id' => 234),

            array('name' => "Buhoro",'country_id' => 234),

            array('name' => "Buxoro Viloyati",'country_id' => 234),

            array('name' => "Cizah",'country_id' => 234),

            array('name' => "Fargona",'country_id' => 234),

            array('name' => "Horazm",'country_id' => 234),

            array('name' => "Kaskadar",'country_id' => 234),

            array('name' => "Korakalpogiston",'country_id' => 234),

            array('name' => "Namangan",'country_id' => 234),

            array('name' => "Navoi",'country_id' => 234),

            array('name' => "Samarkand",'country_id' => 234),

            array('name' => "Sirdare",'country_id' => 234),

            array('name' => "Surhondar",'country_id' => 234),

            array('name' => "Toskent",'country_id' => 234),

            array('name' => "Malampa",'country_id' => 235),

            array('name' => "Penama",'country_id' => 235),

            array('name' => "Sanma",'country_id' => 235),

            array('name' => "Shefa",'country_id' => 235),

            array('name' => "Tafea",'country_id' => 235),

            array('name' => "Torba",'country_id' => 235),

            array('name' => "Vatican City State (Holy See)",'country_id' => 236),

            array('name' => "Amazonas",'country_id' => 237),

            array('name' => "Anzoategui",'country_id' => 237),

            array('name' => "Apure",'country_id' => 237),

            array('name' => "Aragua",'country_id' => 237),

            array('name' => "Barinas",'country_id' => 237),

            array('name' => "Bolivar",'country_id' => 237),

            array('name' => "Carabobo",'country_id' => 237),

            array('name' => "Cojedes",'country_id' => 237),

            array('name' => "Delta Amacuro",'country_id' => 237),

            array('name' => "Distrito Federal",'country_id' => 237),

            array('name' => "Falcon",'country_id' => 237),

            array('name' => "Guarico",'country_id' => 237),

            array('name' => "Lara",'country_id' => 237),

            array('name' => "Merida",'country_id' => 237),

            array('name' => "Miranda",'country_id' => 237),

            array('name' => "Monagas",'country_id' => 237),

            array('name' => "Nueva Esparta",'country_id' => 237),

            array('name' => "Portuguesa",'country_id' => 237),

            array('name' => "Sucre",'country_id' => 237),

            array('name' => "Tachira",'country_id' => 237),

            array('name' => "Trujillo",'country_id' => 237),

            array('name' => "Vargas",'country_id' => 237),

            array('name' => "Yaracuy",'country_id' => 237),

            array('name' => "Zulia",'country_id' => 237),

            array('name' => "Bac Giang",'country_id' => 238),

            array('name' => "Binh Dinh",'country_id' => 238),

            array('name' => "Binh Duong",'country_id' => 238),

            array('name' => "Da Nang",'country_id' => 238),

            array('name' => "Dong Bang Song Cuu Long",'country_id' => 238),

            array('name' => "Dong Bang Song Hong",'country_id' => 238),

            array('name' => "Dong Nai",'country_id' => 238),

            array('name' => "Dong Nam Bo",'country_id' => 238),

            array('name' => "Duyen Hai Mien Trung",'country_id' => 238),

            array('name' => "Hanoi",'country_id' => 238),

            array('name' => "Hung Yen",'country_id' => 238),

            array('name' => "Khu Bon Cu",'country_id' => 238),

            array('name' => "Long An",'country_id' => 238),

            array('name' => "Mien Nui Va Trung Du",'country_id' => 238),

            array('name' => "Thai Nguyen",'country_id' => 238),

            array('name' => "Thanh Pho Ho Chi Minh",'country_id' => 238),

            array('name' => "Thu Do Ha Noi",'country_id' => 238),

            array('name' => "Tinh Can Tho",'country_id' => 238),

            array('name' => "Tinh Da Nang",'country_id' => 238),

            array('name' => "Tinh Gia Lai",'country_id' => 238),

            array('name' => "Anegada",'country_id' => 239),

            array('name' => "Jost van Dyke",'country_id' => 239),

            array('name' => "Tortola",'country_id' => 239),

            array('name' => "Saint Croix",'country_id' => 240),

            array('name' => "Saint John",'country_id' => 240),

            array('name' => "Saint Thomas",'country_id' => 240),

            array('name' => "Alo",'country_id' => 241),

            array('name' => "Singave",'country_id' => 241),

            array('name' => "Wallis",'country_id' => 241),

            array('name' => "Bu Jaydur",'country_id' => 242),

            array('name' => "Wad-adh-Dhahab",'country_id' => 242),

            array('name' => "al-'Ayun",'country_id' => 242),

            array('name' => "as-Samarah",'country_id' => 242),

            array('name' => "'Adan",'country_id' => 243),

            array('name' => "Abyan",'country_id' => 243),

            array('name' => "Dhamar",'country_id' => 243),

            array('name' => "Hadramaut",'country_id' => 243),

            array('name' => "Hajjah",'country_id' => 243),

            array('name' => "Hudaydah",'country_id' => 243),

            array('name' => "Ibb",'country_id' => 243),

            array('name' => "Lahij",'country_id' => 243),

            array('name' => "Ma'rib",'country_id' => 243),

            array('name' => "Madinat San'a",'country_id' => 243),

            array('name' => "Sa'dah",'country_id' => 243),

            array('name' => "Sana",'country_id' => 243),

            array('name' => "Shabwah",'country_id' => 243),

            array('name' => "Ta'izz",'country_id' => 243),

            array('name' => "al-Bayda",'country_id' => 243),

            array('name' => "al-Hudaydah",'country_id' => 243),

            array('name' => "al-Jawf",'country_id' => 243),

            array('name' => "al-Mahrah",'country_id' => 243),

            array('name' => "al-Mahwit",'country_id' => 243),

            array('name' => "Central Serbia",'country_id' => 244),

            array('name' => "Kosovo and Metohija",'country_id' => 244),

            array('name' => "Montenegro",'country_id' => 244),

            array('name' => "Republic of Serbia",'country_id' => 244),

            array('name' => "Serbia",'country_id' => 244),

            array('name' => "Vojvodina",'country_id' => 244),

            array('name' => "Central",'country_id' => 245),

            array('name' => "Copperbelt",'country_id' => 245),

            array('name' => "Eastern",'country_id' => 245),

            array('name' => "Luapala",'country_id' => 245),

            array('name' => "Lusaka",'country_id' => 245),

            array('name' => "North-Western",'country_id' => 245),

            array('name' => "Northern",'country_id' => 245),

            array('name' => "Southern",'country_id' => 245),

            array('name' => "Western",'country_id' => 245),

            array('name' => "Bulawayo",'country_id' => 246),

            array('name' => "Harare",'country_id' => 246),

            array('name' => "Manicaland",'country_id' => 246),

            array('name' => "Mashonaland Central",'country_id' => 246),

            array('name' => "Mashonaland East",'country_id' => 246),

            array('name' => "Mashonaland West",'country_id' => 246),

            array('name' => "Masvingo",'country_id' => 246),

            array('name' => "Matabeleland North",'country_id' => 246),

            array('name' => "Matabeleland South",'country_id' => 246),

            array('name' => "Midlands",'country_id' => 246)

        );

        $this->model->insert($states);
    }
}
