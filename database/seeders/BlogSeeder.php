<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("blog/china.jpeg", file_get_contents(public_path('text//blog//china.jpeg')), 'public');
        Storage::disk('public')->put("blog/select.jpeg", file_get_contents(public_path('text//blog//select.jpeg')), 'public');
        Storage::disk('public')->put("blog/vag.jpeg", file_get_contents(public_path('text//blog//vag.jpeg')), 'public');

        DB::table("blogs")->insert(
            [
                 [
                     'title' => 'Трудности выбора неоригинальных запчастей для автомобилей VAG группы',
                     'slug' => Str::slug("Трудности выбора неоригинальных автомобилей VAG"),
                     'img' => "vag.jpeg",
                     'description' => file_get_contents(public_path('text//blog//vag.html')),
                     'seo_title' => 'Трудности выбора неоригинальных запчастей для автомобилей VAG группы',
                     'seo_description' => 'Трудности выбора неоригинальных запчастей для автомобилей VAG группы',
                 ],

                 [
                     'title' => 'Китайские авто 2023-2024 что выбрать?',
                     'slug' => Str::slug("Китайские авто 2023-2024 что выбрать?"),
                     'img' => "china.jpeg",
                     'description' => file_get_contents(public_path('text//blog//kitay.html')),
                     'seo_title' => 'Китайские авто 2023-2024 что выбрать?',
                     'seo_description' => 'Китайские авто 2023-2024 что выбрать?',
                 ],

                 [
                     'title' => 'Новый и вторичный рынок 2024, на что смотреть?',
                     'slug' => Str::slug("Новый и вторичный рынок 2024, на что смотреть?"),
                     'img' => "select.jpeg",
                     'description' => file_get_contents(public_path('text//blog//vibor.html')),
                     'seo_title' => 'Новый и вторичный рынок 2024, на что смотреть?',
                     'seo_description' => 'Новый и вторичный рынок 2024, на что смотреть?',
                 ],
            ]);

    }
}
