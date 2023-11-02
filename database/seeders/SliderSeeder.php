<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Clear existing records before seeding
        //Slider::truncate();

        // Array of directory paths
        $directories = [
            'public/images/proton_car_png/Exora',
            'public/images/proton_car_png/Iriz',
            'public/images/proton_car_png/Persona',
            'public/images/proton_car_png/Saga',
            'public/images/proton_car_png/X90',
            'public/images/proton_car_png/X70',
            'public/images/proton_car_png/X50',
            // Add more directories if necessary
        ];

        foreach ($directories as $directory) {
            // Get all files from the current directory
            $url = Storage::url($directory);

            foreach ($url as $urlname) {
                // Get image filename
                $filename = pathinfo($urlname, PATHINFO_FILENAME);

                // Insert a new record into the sliders table
                DB::table('sliders')->insert([
                    'image_url' => str_replace('public/', '', $urlname), // Adjust the path based on your storage setup
                    'created_at' => now(),
                    'updated_at' => now(),
                    // Add additional fields if necessary
                ]);
            }
        }
    }
}
