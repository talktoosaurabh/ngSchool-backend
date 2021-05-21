<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use Carbon\Carbon;
use DB;

class adminSeeder extends Seeder
{
    public function run()
    {
        $date = Carbon::now()->toDateTimeString();
        $client = request()->ip();

        DB::table('admin')->insert([
            'email'=>'admin@gmail.com',
            'password'=> Hash::make('@admin123'),
            'logged_in_at'=>{'$client':'$date'}
        ]);
    }
}
