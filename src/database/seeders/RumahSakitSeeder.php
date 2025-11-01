[01.34, 18/10/2025] +62 856-1121-076: <?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\RumahSakit::factory()->count(3)->create();
    }
}
[01.40, 18/10/2025] +62 812-9453-6617: Models RumahSakit.php

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
}
[01.43, 18/10/2025] +62 856-1121-076: <?php

namespace Database\Seeders;

use App\Models\RumahSakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ini jika tidak punya data
        //RumahSakit::factory(3)->create();


        //ini jika punya data
        $data = [
            [
                'kode_rs' => 'RS001A',
                'nama_rs' => 'Rumah Sakit Sehat Sentosa',
                'alamat' => 'Jl. Merdeka No. 10, Jakarta',
                'kota' => 'Jakarta',
                'provinsi' => 'DKI Jakarta',
                'telepon' => '021-12345678',
                'email' => 'sehatsentosa@gmail.com',
                'status' => 'aktif',
                'tipe_rs' => 'A',
            ],
            [
                'kode_rs' => 'RS001B',
                'nama_rs' => 'Rumah Sakit Sentosa Sehat',
                'alamat' => 'Jl. Merdeka No. 10, Jakarta',
                'kota' => 'Jakarta',
                'provinsi' => 'DKI Jakarta',
                'telepon' => '021-12345678',
                'email' => 'sentosasehat@gmail.com',
                'status' => 'aktif',
                'tipe_rs' => 'B',
            ]
        ];
        foreach ($data as $item) {
            RumahSakit::create($item);
        }
    }
}