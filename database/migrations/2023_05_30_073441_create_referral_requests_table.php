<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('referral_requests', function (Blueprint $table) {
            $table->id();
            $table->string('resourceType');
            $table->string('identifier_system');
            $table->string('identifier_value');
            $table->string('subject_reference');
            $table->string('basedOn_reference');
            $table->string('status');
            $table->string('intent');
            $table->string('category_coding_system');
            $table->string('category_coding_code');
            $table->string('category_text');
            $table->string('priority');
            $table->string('code_coding_system');
            $table->string('code_coding_code');
            $table->string('code_coding_display');
            $table->string('code_text');
            $table->string('encounter_reference');
            $table->dateTime('occurrenceDateTime');
            $table->string('requester_reference');
            $table->string('performer_reference');
            $table->string('reasonCode_coding_system');
            $table->string('reasonCode_coding_code');
            $table->string('reasonCode_coding_display');
            $table->string('reasonCode_text');
            $table->string('supportingInfo_reference');
            $table->string('supportingInfo_display')->nullable();
            $table->string('supportingInfo_type')->nullable();
            $table->string('supportingInfo_identifier_system')->nullable();
            $table->string('supportingInfo_identifier_value')->nullable();
            $table->string('note_text')->nullable();
            $table->text('patientInstruction')->nullable();
            $table->string('relevantHistory_reference');
            $table->string('locationCode_coding_system');
            $table->string('locationCode_coding_code');
            $table->string('locationCode_coding_display');
            $table->string('locationCode_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referral_requests');
    }
};
