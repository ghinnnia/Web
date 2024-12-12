<?php

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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id(); // Kolom ID (auto-increment)
            $table->string('nama'); // Nama barang (misalnya: "Laptop Acer Aspire 5", "Mouse Logitech", "Printer Canon PIXMA")
            $table->string('jenis'); // Jenis barang (misalnya: "Laptop", "Aksesoris", "Printer")
            $table->string('merk')->nullable(); // Merk barang (misalnya: "Acer", "Logitech", "Canon")
            $table->text('deskripsi')->nullable(); // Deskripsi barang (opsional)
            $table->decimal('harga', 8, 2)->nullable(); // Harga barang (opsional)
            $table->string('gambar')->nullable(); // Path gambar (opsional)
            $table->string('aksesoris')->nullable(); // Kolom aksesoris (opsional)
            $table->string('printer')->nullable(); // Kolom aksesoris (opsional)
            $table->string('laptop')->nullable(); // Kolom aksesoris (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
};