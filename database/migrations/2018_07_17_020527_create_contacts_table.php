<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');

            // phone prefix for internationalisation
            $table->string('phone_prefix', 4)->nullable();
            // base phone number
            $table->string('phone', 20)->nullable();

            // address fields
            $table->string('street_num', 10)->nullable();
            $table->string('street_address', 150)->nullable();
            $table->string('city', 120)->nullable();
            $table->string('postcode', 10)->nullable();
            // 3 digit state code
            $table->string('state_code', 3)->nullable();
            // 2 digit country code (cca2)
            $table->string('country_code', 2)->nullable(); // required
            
            // CRUD timestamps
            $table->timestamps();

            // assumption: we want one contact per email
            $table->unique('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
