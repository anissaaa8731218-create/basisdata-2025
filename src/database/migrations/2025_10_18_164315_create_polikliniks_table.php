Schema::create('polikliniks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(RumahSakit::class);
            $table->string('nama_poli');
            $table->text('deskripsi')->nullable();
            $table->string('kode_poli', 20)->unique();
            $table->string('lokasi')->nullable();
            $table->time('jam_buka')->default('08:00:00');
            $table->time('jam_tutup')->default('16:00:00');
            $table->enum('status', ['aktif', 'nonaktif']);
            $table->timestamps();
        });