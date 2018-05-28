<?php

use Illuminate\Database\Seeder;

class DosensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Dosen::insert([

            [
                'nip' => '110712',
                'nama' => 'Rizal Ula Ananta SE, MM',
                'alamat' => 'Desa Jungke Kecamatan Karas Kab Magetan',
                'pendidikan' => 'Magister Manajemen',
                'jabatan' => 'Dosen',
            ],

            [
                'nip' => '110616',
                'nama' => 'Sri Anardani S.Kom, MT',
                'alamat' => 'Jl. Catur Jaya 14 Kanigoro, Kartoharjo, Madiun',
                'pendidikan' => 'Magister Teknik',
                'jabatan' => 'Dosen',
            ],

            [
                'nip' => '110405',
                'nama' => 'Fatim Nugrahati ST, MT',
                'alamat' => 'Jl, Dharma Manis Madiun',
                'pendidikan' => 'Magister Teknik',
                'jabatan' => 'Dosen',
            ],

            [
                'nip' => '110688',
                'nama' => 'Slamet Riyanto ST, MM',
                'alamat' => 'Jl. Sanggar Manis, Manisrejo, Taman, Madiun',
                'pendidikan' => 'Magister Teknik',
                'jabatan' => 'Dosen',
            ],

            [
                'nip' => '110690',
                'nama' => 'Andi Rahman Putera S.Kom, MM, SI',
                'alamat' => 'Jl. Nias Madiun Lor, Manguharjo, Madiun',
                'pendidikan' => 'Magister Manajemen',
                'jabatan' => 'Dosen',
            ],

            [
                'nip' => '110682',
                'nama' => 'Andria S.Kom, M.Kom',
                'alamat' => 'Madiun',
                'pendidikan' => 'Magister Komputer',
                'jabatan' => 'Dosen',
            ],

            [
                'nip' => '110370',
                'nama' => 'Sekreningsih Nita S.Kom, MT',
                'alamat' => 'Perum Taman Salak Madiun',
                'pendidikan' => 'Magister Teknik',
                'jabatan' => 'Dosen',
            ],

            [
                'nip' => '110716',
                'nama' => 'Eka Resti Novietasari S.Pd, M.Pd',
                'alamat' => 'Jl. Imam Bonjol Kincang Wetan Jiwan Madiun',
                'pendidikan' => 'Magister Pendidikan',
                'jabatan' => 'Dosen',
            ],

            [
                'nip' => '110714',
                'nama' => 'Inung Diah Kurniawati, S.Pd, M.Pd',
                'alamat' => 'Madiun',
                'pendidikan' => 'Magister Pendidikan',
                'jabatan' => 'Dosen',
            ],

            [
                'nip' => '110727',
                'nama' => 'Estuning Dewi Hapsari S.Pd, M.Pd',
                'alamat' => 'Cabean Sawahan Madiun',
                'pendidikan' => 'Magister Pendidikan ',
                'jabatan' => 'Dosen',
            ],

            [
                'nip' => '110645',
                'nama' => 'Heri Maryanto, S.Pd',
                'alamat' => 'Jl. Raya Sugih Waras Maospati, Magetan',
                'pendidikan' => 'Sarjana Pendidikan',
                'jabatan' => 'Dosen',
            ]
        ]);
    }
}
