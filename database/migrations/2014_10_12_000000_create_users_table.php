<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('balance_total')->nullable(); // Automaticamente se autoaliza cuando se registra un valor nuevo

            
            // fk
            // $table->integer('work_balances_id')->unsigned();//
            // $table->foreignId('work_balances_id')->constrained()->on('work_balances')->nullable();
             
            // $table->foreign('work_balances_id')->references('work_balances_id')->on('work_balances');
            // $table->foreign('work_balances_id')->references('id')->on('work_balances');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
