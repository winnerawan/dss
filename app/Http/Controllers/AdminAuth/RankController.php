<?php

namespace App\Http\Controllers\AdminAuth;

use App\Dosen;
use App\Kriteria;
use App\SubKriteria;
use App\Nilai;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RankController extends Controller
{

    public function ranks()
    {
        $dosens = Dosen::all();
        $kriterias = Kriteria::all();
        //SELECT d.id, d.nama, k.id, k.kriteria, n.nilai FROM dosens d, nilais n, kriterias k WHERE d.id = n.id_dosen AND k.id = n.id_kriteria

//        $nilais = DB::table('dosens')->select('dosens.nama')->join('nilais', 'dosens.id', '=', 'nilais.id_dosen')
//            ->join('kriterias', 'nilais.id_kriteria', '=', 'kriterias.id')
//            ->whereRaw('nilais.id_dosen',"nilais.id_dosen")->whereRaw('kriterias.id = nilais.id_kriteria', '=', 'nilais.id_kriteria')->toSql();

        //$nilais = DB::select('SELECT d.id as id_dosen, d.nama, k.id, k.kriteria, n.nilai FROM dosens d, nilais n, kriterias k WHERE d.id = n.id_dosen AND k.id = n.id_kriteria');

        $nilais = $this->create_temporary_table();

        $dataSifat = $this->getDataSifat();
        $valueMinMax = $this->getValueMinMax($dataSifat);
        $table2 = $this->getCountBySifat($dataSifat, $valueMinMax);

        $bobot = $this->getBobotKriteria();
        $table3 = $this->getCountByBobot($bobot);

        $table4 = $this->getDataRangking();
        //return $nilais;

        $this->dropTemporaryTable();

        return view('admin.ranks.index')->with(['kriterias' => $kriterias, 'nilais' => $nilais, 'table2' => $table2, 'dataSifat' => $dataSifat, 'valueMinMax' => $valueMinMax , 'table3' => $table3, 'bobot' => $bobot, 'table4' => $table4]);


    }

    public function create_temporary_table()
    {
        Schema::create('saw', function (Blueprint $table) {
            $kriterias = Kriteria::all();
            //$table->increments('id');
            $table->string('Nama');
            foreach ($kriterias as $kriteria) {
                $table->string($kriteria->kriteria);
            }
//            $table->decimal('Total', 4,2)->nullable();
//            $table->integer('Ranking')->nullable();
//            $table->temporary();
        });
        $nilai = DB::select('SELECT d.id as id_dosen, d.nama, k.id, k.kriteria, n.nilai FROM dosens d, nilais n, kriterias k WHERE d.id = n.id_dosen AND k.id = n.id_kriteria');
        $dosen = Dosen::all();
        $dataInput = array();
        $no = 0;
        foreach ($dosen as $item => $itemDosen) {
            foreach ($nilai as $index => $itemNilai) {
                if ($itemDosen->id == $itemNilai->id_dosen) {
                    $dataInput[$no]['nama'] = $itemDosen->nama;
                    $dataInput[$no][$itemNilai->kriteria] = $itemNilai->nilai;
                }
            }
            $no++;
        }
        foreach ($dataInput as $data => $item) {
            DB::table('saw')->insert($item);
        }

        $datas = DB::select('SELECT * FROM saw');

//        Schema::drop('saw');

        return $datas;
    }

    public function getCountBySifat($dataSifat, $dataValueMinMax)
    {
        $sawData = $this->getDataTemporaryTable();
        foreach ($sawData as $point => $value) {
            foreach ($value as $x => $z) {
                if ($x == 'Nama') {
                    continue;
                }
                foreach ($dataSifat as $item => $sifat) {
                    if ($x == $item) {
                        if ($sifat->sifat == 'B') {

                            $newData = $z / $dataValueMinMax['max' . $x];
                            $dataUpdate = array(
                                $x => $newData
                            );

                            $where = array(

                                'Nama' => $value->Nama
                            );

                            //todo
                            DB::table('saw')->where($where)->update($dataUpdate);
//                            $this->MSAW->update($dataUpdate, $where);
                        } else {
                            $newData = $dataValueMinMax['min' . $x] / $z;
                            $dataUpdate = array(
                                $x => $newData
                            );
                            $where = array(

                                'Nama' => $value->Nama
                            );

                            //todo
                            DB::table('saw')->where($where)->update($dataUpdate);
                            //$this->MSAW->update($dataUpdate, $where);
                        }
                    }
                }
            }
        }

        return $this->getDataTemporaryTable();
        //return $this->MSAW->getAll();
    }

    public function getStatus($key)
    {
        //$key = 'Kedisiplinan';
        $status = DB::table('kriterias')->where('kriteria', '=', $key)->first();
//        $status = DB::select('SELECT sifat FROM kriterias WHERE kriteria = ' . $key);
//        $this->db->select('sifat');
//        $this->db->where('kriteria',$key);
//        $query = $this->db->get('kriteria');
        //return $query->row();
        return $status;
    }

    public function getDataSifat()
    {
        $sawData = $this->getDataTemporaryTable();
        $dataSifat = array();
        foreach ($sawData as $item => $value) {
            foreach ($value as $x => $z) {
                if ($x == 'Nama') {
                    continue;
                }
                $dataSifat[$x] = $this->getStatus($x);
            }
        }
        return $dataSifat;
    }

    private function getValueMinMax($dataSifat)
    {
        $sawData = $this->getDataTemporaryTable();
        $dataValueMinMax = array();
        foreach ($sawData as $point => $value) {
            foreach ($value as $x => $z) {
                if ($x == 'Nama') {
                    continue;
                }
                foreach ($dataSifat as $item => $itemX) {
                    if ($x == $item) {

                        if ($x == $item && $itemX->sifat == 'B') {
                            if (!isset($dataValueMinMax['max' . $x])) {
                                $dataValueMinMax['kriteria' . $x] = $x;
                                $dataValueMinMax['max' . $x] = $z;
                                $dataValueMinMax['sifat' . $x] = 'Benefit';
                            } elseif ($z > $dataValueMinMax['max' . $x]) {
                                $dataValueMinMax['max' . $x] = $z;
                            }
                        } else {
                            if (!isset($dataValueMinMax['min' . $x])) {
                                $dataValueMinMax['kriteria' . $x] = $x;
                                $dataValueMinMax['min' . $x] = $z;
                                $dataValueMinMax['sifat' . $x] = 'Cost';
                            } elseif ($z < $dataValueMinMax['min' . $x]) {
                                $dataValueMinMax['min' . $x] = $z;
                            }
                        }
                    }
                }
            }
        }

        return $dataValueMinMax;
    }

    public function getBobotKriteria()
    {
        $kriterias = DB::select('SELECT kriteria, bobot FROM kriterias');

        return $kriterias;
    }

    private function getCountByBobot($bobot)
    {

        $sawData = $this->getDataTemporaryTable();
        foreach ($sawData as $point => $value) {
            foreach ($value as $x => $z) {
                if ($x == 'Nama') {
                    continue;
                }
                foreach ($bobot as $item => $itemKriteria) {

                    if ($x == $itemKriteria->kriteria) {

                        $sawData[$point]->$x =  $z * $itemKriteria->bobot ;
                        $newData = $z * $itemKriteria->bobot;
                        $dataUpdate = array(
                            $x => $newData
                        );
                        $where = array(
                            'Nama' => $value->Nama
                        );

                        DB::table('saw')->where($where)->update($dataUpdate);

                    }
                }
            }
        }

        return $this->getDataTemporaryTable();
    }

    private function countTotal()
    {
        $sawData = $this->getDataTemporaryTable();

        foreach ($sawData as $item => $value) {
            $total = 0;
            foreach ($value as $item => $itemData) {
                if($item == 'Nama'){
                    continue;
                }else if($item == 'Total'){
                    $dataUpdate = array(
                        'Total'=> $total
                    );
                    $where = array(
                        'Nama' => $value->Nama
                    );

                    $this->updateTemporaryTable($dataUpdate, $where);
                    //$this->MSAW->update($dataUpdate, $where);
                }else{
                    $total = $total + (float)$itemData;
                   // dd($total);
                }
            }
        }
    }

    public function getSortTotalByDesc()
    {
        $data = DB::table('saw')->orderByDesc('Total')->get();
//        $this->db->order_by('Total', 'DESC');
//        $query = $this->db->get($this->getTable());
//        if($query->num_rows() > 0){
//            foreach ( $query->result() as $row) {
//                $dataSaw[] = $row;
//            }
//            return $dataSaw;
//        }
        return $data;
    }


    private function getDataRangking()
    {
        $this->addColumns();

        $this->countTotal();

        $sawData = $this->getSortTotalByDesc();
      //$sawData = $this->getDataTemporaryTable();
        $no = 1;
        foreach ($sawData as $item => $value) {
            $dataUpdate = array(
                'Rangking' => $no
            );
            $where = array(
                'Nama' => $value->Nama
            );

            //$this->MSAW->update($dataUpdate, $where);
            $this->updateTemporaryTable($dataUpdate, $where);
            $no++;
        }
//        return $this->MSAW->getAll();
        return $this->getDataTemporaryTable();
    }



    public function getDataTemporaryTable()
    {
        $data = DB::table('saw')->get();

        return $data;
    }

    public function updateTemporaryTable($data, $where)
    {
        DB::table('saw')->where($where)->update($data);
    }

    public function dropTemporaryTable()
    {
        return Schema::drop('saw');
    }

    public function addColumns()
    {
        return Schema::table('saw', function (Blueprint $table){
            $table->decimal('Total', 4,2);
            $table->string('Rangking');
        });
    }
}
