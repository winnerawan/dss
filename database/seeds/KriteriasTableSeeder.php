<?php

use Illuminate\Database\Seeder;

class KriteriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kriteria::insert([

            [
                'kriteria' => 'Penguasaan Materi Kuliah',
                 'sifat' => 'B',
                'bobot' => 1
            ],
            [
                'kriteria' => 'Kemampuan Menjelaskan Materi Kuliah',
                 'sifat' => 'B',
                'bobot' => 2
            ],
            [
                'kriteria' => 'Sistimatika Menjelaskan Kuliah',
                 'sifat' => 'B',
                'bobot' => 1
            ],
            [
                'kriteria' => 'Kemampuan Membangkitkan Minat Belajar Mahasiswa',
                 'sifat' => 'B',
                'bobot' => 2
            ],
            [
                'kriteria' => 'Kemampuan Memberikan Jawaban atas Pertanyaan Mahasiswa',
                 'sifat' => 'B',
                'bobot' => 2
            ],
            [
                'kriteria' => 'Kedisiplinan (kehadiran dan ketepatan waktu)',
                 'sifat' => 'B',
                'bobot' => 1
            ]
        ]);
    }
}
