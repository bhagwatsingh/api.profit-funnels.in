<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->char('code', 3)->default(null)->nullable()->unique();
            $table->char('symbol', 5)->default(null)->nullable();
            $table->string('name', 100)->default(null)->nullable();
            $table->string('fractional_unit', 20)->default(null)->nullable();
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
        Schema::dropIfExists('currencies');
        Schema::enableForeignKeyConstraints();
    }
}
