<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('parent')->unsigned()->nullable()->after('name');
            $table->string("dialing_code", 10)->nullable()->after("email");
            $table->string('phone', 20)->nullable()->after('dialing_code');
            $table->addColumn('tinyInteger', 'is_phone_verified',
                ['length' => 1])->default(0)->after('phone')->comment('0-Not Verified,1-Verified');
            $table->string('otp', 10)->nullable()->default(null)->after('is_phone_verified');
            $table->string('status', 20)->default(config('custom.user.status_inactive'))->nullable()->comment(implode(',', config('custom.user.status')))->after('is_phone_verified');

            $table->timestamp('otp_expiry')->nullable()->after('remember_token');
            $table->softDeletes()->after('remember_token');

            $table->unique(['dialing_code', 'phone']);
            $table->foreign('parent')
                  ->references('id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropSoftDeletes();
            $table->dropUnique('users_dialing_code_phone_unique');
            $table->dropForeign('users_parent_foreign');
            $table->dropColumn([
                'parent',
                'dialing_code',
                'phone',
                'is_phone_verified',
                'otp',
                'status',
                'otp_expiry',
            ]);
            Schema::enableForeignKeyConstraints();
        });
    }
}
