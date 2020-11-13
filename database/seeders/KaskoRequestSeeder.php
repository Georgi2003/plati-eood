<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KaskoRequest;

class KaskoRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KaskoRequest::create([
            'coupon_file' => '-',
	    	'name' => 'Язъ Мехмед',
	    	'phone' => '088542222',
	    	'email' => '-',
	    	'status' => 'Нова поръчка',
	    	'message' => '-',
        ]);
    }
}
