<?php

namespace Database\Seeders;

use App\Models\ReferralRequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReferralRequestSeeder extends Seeder
{
    public function run()
    {
        // Generate 10 dummy service requests using the factory
        ReferralRequest::factory()->count(10)->create();
    }
}
