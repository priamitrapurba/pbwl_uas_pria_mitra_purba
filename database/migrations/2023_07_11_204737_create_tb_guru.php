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
        Schema::create('tb_guru', function (Blueprint $table) {
            $table->increments('guru_id');
            $table->tinyInteger('guru_id_nip')->unsigned();
            $table->string('guru_no', 20);
            $table->string('guru_nama', 50);
            $table->text('guru_alamat');
            $table->string('guru_hp', 20);
            $table->string('guru_ktp', 50);
            $table->string('guru_jenis', 50);
            $table->integer('guru_kelas');
            $table->enum('guru_aktif', ['Y', 'N']);
            $table->integer('guru_id_user')->unsigned();
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_guru');
    }
};
