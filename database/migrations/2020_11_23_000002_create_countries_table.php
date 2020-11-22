<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->char('code', 2)->default(null)->nullable()->unique();
            $table->char('code_iso', 3)->default(null)->nullable()->unique();
            $table->string('name', 100)->default(null)->nullable();
            $table->string('capital_name', 100)->default(null)->nullable();
            $table->string('dialing_code', 10)->default(null)->nullable();
            $table->string('status', 20)->default(config('custom.status_active'))->nullable()->comment(implode(',', config('custom.status')));
            $table->softDeletes();
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('countries');
        Schema::enableForeignKeyConstraints();
    }
}
