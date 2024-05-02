<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("options")->insert(
            [
                [
                    "name" => "adress",
                    "type" => "plan",
                    'title' => 'Адрес',
                    "value" => "г. Курск ул. Суворовская д. 15",
                ],
                [
                    "name" => "phone",
                    "type" => "plan",
                    'title' => 'Телефон',
                    "value" => "+7 (4712) 310-799",
                ],
                [
                    "name" => "phone2",
                    "type" => "plan",
                    'title' => 'Телефон дополнительный',
                    "value" => "+7 (910) 731-07-99",
                ],

                [
                    "name" => "email",
                    "type" => "plan",
                    'title' => 'email',
                    "value" => "info@autoprioritet.ru",
                ],

                [
                    "name" => "skype",
                    "type" => "plan",
                    'title' => 'skype',
                    "value" => "ONLINEZAKAZ",
                ],

                [
                    "name" => "icq",
                    "type" => "plan",
                    'title' => 'icq',
                    "value" => "357-192-680",
                ],

                [
                    "name" => "tg_lnk",
                    "type" => "plan",
                    'title' => 'Ссылка на Telegram',
                    "value" => "#",
                ],

                [
                    "name" => "ws_lnk",
                    "type" => "plan",
                    'title' => 'Ссылка на WhatsApp',
                    "value" => "#",
                ],

                [
                    "name" => "map_geo",
                    "type" => "plan",
                    'title' => 'Точка на карте',
                    "value" => "51.73477907225827,36.17780649999993",
                ],



            ]);
    }
}
