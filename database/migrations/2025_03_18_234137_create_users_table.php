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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
                $table->string('Name')->notnull();
                $table->string('Email')->unique();
                $table->string('PhoneNumber')->notnull();
                $table->string('Password')->min(8)->notnull();
                $table->integer('Point')->default(0);
               $table->unsignedBigInteger('StationID');
                $table->unsignedBigInteger('Type_ID')->default(3);
                $table->integer('VerfiyCode');
                $table->integer('IsBloCked')->default(0);
                 $table->timestamps();
            //    $table->foreign('StationID')->references('StationID')->on('ChargingStations')->onDelete('cascade');
               $table->foreign('Type_ID')->references('TypeID')->on('user_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
