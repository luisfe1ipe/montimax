<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('is_admin')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $admin = new User(['name' => 'AdminMontimax', 'email' => 'admin@montimax.com', 'is_admin' => true, 'password' => bcrypt('Admin@Montimax!187210')]);
        $admin->save();

        $user = new User(['name' => 'Robson Teste', 'email' => 'robson@gmail.com', 'is_admin' => false, 'password' => bcrypt('robson123')]);
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
