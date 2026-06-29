<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_telepon');
            $table->string('nomor_id');
            $table->string('biaya_langganan');
            $table->text('alamat');
            $table->boolean('follow_ig')->default(false);
            $table->boolean('follow_tiktok')->default(false);
            $table->boolean('review_gmaps')->default(false);
            $table->string('bukti_ig')->nullable();
            $table->string('bukti_tiktok_jernih')->nullable();
            $table->string('bukti_tiktok_creatif')->nullable();
            $table->string('bukti_gmaps')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
