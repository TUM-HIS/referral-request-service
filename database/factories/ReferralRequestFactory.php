<?php

namespace Database\Factories;

use App\Models\ReferralRequest;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReferralRequest>
 */
class ReferralRequestFactory extends Factory
{
    protected $model = ReferralRequest::class;

    public function definition()
    {
        $faker = \Faker\Factory::create();

        return [
            'resourceType' => 'ServiceRequest',
            'identifier_system' => $faker->url,
            'identifier_value' => $faker->randomNumber(),
            'subject_reference' => 'Patient/' . $faker->randomNumber(),
            'basedOn_reference' => 'CarePlan/' . $faker->randomNumber(),
            'status' => 'active',
            'intent' => 'order',
            'category_coding_system' => $faker->url,
            'category_coding_code' => $faker->word,
            'category_text' => $faker->sentence,
            'priority' => 'routine',
            'code_coding_system' => $faker->url,
            'code_coding_code' => $faker->word,
            'code_coding_display' => $faker->sentence,
            'code_text' => $faker->sentence,
            'encounter_reference' => 'Encounter/' . $faker->randomNumber(),
            'occurrenceDateTime' => $faker->dateTimeBetween('-1 month', '+1 month'),
            'requester_reference' => 'Practitioner/' . $faker->randomNumber(),
            'performer_reference' => 'Practitioner/' . $faker->randomNumber(),
            'reasonCode_coding_system' => $faker->url,
            'reasonCode_coding_code' => $faker->word,
            'reasonCode_coding_display' => $faker->sentence,
            'reasonCode_text' => $faker->sentence,
            'supportingInfo_reference' => $faker->url,
            'supportingInfo_display' => $faker->sentence,
            'supportingInfo_type' => $faker->randomElement(['Type A', 'Type B', 'Type C']),
            'supportingInfo_identifier_system' => $faker->url,
            'supportingInfo_identifier_value' => $faker->randomNumber(),
            'note_text' => $faker->sentence,
            'patientInstruction' => $faker->paragraph,
            'relevantHistory_reference' => 'Provenance/' . $faker->randomNumber(),
            'locationCode_coding_system' => $faker->url,
            'locationCode_coding_code' => $faker->word,
            'locationCode_coding_display' => $faker->sentence,
            'locationCode_text' => $faker->sentence,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
