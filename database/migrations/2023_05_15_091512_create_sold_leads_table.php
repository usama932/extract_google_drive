<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoldLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sold_leads', function (Blueprint $table) {
            $table->id();
            $table->timestamp('timestamp')->nullable();
            $table->string('name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('Postcode')->nullable();
            $table->string('email')->nullable();
            $table->text('notes')->nullable();
            $table->string('source_id')->nullable();
            $table->string('lead_source')->nullable();
            $table->string('lead_cost')->nullable();
            $table->string('sold_id')->nullable();
            $table->string('job_value')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sold_leads');
    }
}
