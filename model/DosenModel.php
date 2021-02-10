<?php

namespace model;

use m\Model;

class DosenModel extends Model
{
    public function __construct()
    {
        parent::__construct('dosen');
    }

    public function findAll()
    {
        $sql = "SELECT * FROM dosen";

        $records = $this->executeReadSQL($sql);

        return $records;
    }

    public function addNew($nip, $nama, $alamat,$prodi,$jurusan,$no_telp)
    {
        $sql = "INSERT INTO {$this->tableName} (nip,nama,alamat,prodi,jurusan,no_telp) VALUES ('$nip','$nama','$alamat','$prodi','$jurusan','$no_telp')";

        $this->executeWriteSQL($sql);
    }
}
