<?php


namespace controller;


use m\Application;
use m\Controller;

use model\StudentModel;
use model\DosenModel;

class HomeController extends Controller
{
    private $_mStudent;
    private $_mDosen;

    public function __construct(Application $application)
    {
        parent::__construct($application);

        $this->_mStudent = new StudentModel();
        $this->_mDosen = new DosenModel();
    }

    public function index()
    {
        $students = $this->_mStudent->findAll();

        $data = array(
            'all_students' => $students
        );

        $this->view->setData($data);  

        $this->view->setContentTemplate('/home/index_template.php');
        $this->view->render();
    }
    public function dosen()
    {
        $dosen = $this->_mDosen->findAll();

        $data = array(
            'all_dosen' => $dosen
        );

        $this->view->setData($data);  

        $this->view->setContentTemplate('/home/dosen.php');
        $this->view->render();
    }

    public function addStudent()
    {
        if(isset($_POST['submit']))
        {
            // Berarti user sudah mengisi data, tinggal simpan
            $this->saveStudentData();

            // Redirect ke halaman awal
            $this->redirect('/');
        }

        $this->view->setContentTemplate('/home/add_student_template.php');
        $this->view->render();
    }

    private function saveStudentData()
    {
        $name        = $_POST['name'];
        $address     = $_POST['address'];
        $phoneNumber = $_POST['phone_number'];

        $this->_mStudent->addNew($name, $address, $phoneNumber);
    }

    public function addDosen()
    {
        if(isset($_POST['submit']))
        {
            // Berarti user sudah mengisi data, tinggal simpan
            $this->saveDosenData();

            // Redirect ke halaman awal
            $this->redirect('/add-dosen');
        }

        $this->view->setContentTemplate('/home/add_dosen_template.php');
        $this->view->render();
    }

    private function saveDosenData()
    {
        $nip        = $_POST['NIP'];
        $name        = $_POST['nama'];
        $address     = $_POST['alamat'];
        $prodi       = $_POST['prodi'];
        $jurusan     = $_POST['jurusan'];
        $phoneNumber = $_POST['no_telp'];

        $this->_mDosen->addNew($nip,$name, $address,$prodi,$jurusan, $phoneNumber);
    }
}


// http://github.com/yunhasnawa/mphpf