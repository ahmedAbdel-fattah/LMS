<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class SiteSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Original image path
        $imagePath = public_path('upload/');
        $imageName = 'no_image.jpg';

        // Resize the image using Intervention Image
        $image = Image::make($imagePath . $imageName);

        // Resize the image (e.g., to 300x300)
        $image->resize(100, 100);

        // Save the resized image
        $image->save($imagePath . 'no_image_resized.jpg');

        // Insert the record with the new resized image path
        DB::table('site_settings')->insert([
            'logo' => 'http://127.0.0.1:8000/upload/no_image_resized.jpg',
            'phone' => '+1234567890',
            'email' => 'info@example.com',
            'address' => '123 Main Street, City, Country',
            'facebook' => 'https://facebook.com/yourpage',
            'twitter' => 'https://twitter.com/yourprofile',
            'copyright' => '© 2025 Your Company Name. All rights reserved.',
        ]);
    }
}