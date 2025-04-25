<?php
require_once 'models/Mahasiswa.php';

class MahasiswaController extends Controller {
    private $model;

    public function __construct() {
        $this->model = new Mahasiswa();
    }

    public function index() {
        $data = ['mahasiswa' => $this->model->all()];
        $this->view('mahasiswa/index', $data);
    }

    public function create() {
        $this->view('mahasiswa/create');
    }

    public function store($data) {
        $this->model->create($data);
        header("Location: index.php");
    }

    public function edit($id) {
        $data = ['mahasiswa' => $this->model->find($id)];
        $this->view('mahasiswa/edit', $data);
    }

    public function update($id, $data) {
        $this->model->update($id, $data);
        header("Location: index.php");
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php");
    }
}
