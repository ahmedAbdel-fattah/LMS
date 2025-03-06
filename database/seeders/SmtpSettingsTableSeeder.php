<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmtpSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('smtp_settings')->insert([
            'mailer' => 'smtp',
            'host' => 'sandbox.smtp.mailtrap.io',
            'port' => '2525',
            'username' => 'f90a4d9637e097',
            'password' => '9ed17c15405d16',
            'encryption' => 'tls',
            'from_address' => 'admin@gmail.com',
        ]);
    }
}