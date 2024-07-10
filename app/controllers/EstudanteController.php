<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\EstudanteModel;

class EstudanteController extends Controller {
    public function index() {
        $estudantes = (new EstudanteModel())->getAllStudents();
        $this->view('index', ['estudantes' => $estudantes]);
    }

    public function create() {
        $this->view('criar');
    }

    public function store() {
        $estudante = new EstudanteModel();
        
        $estudante->nome = $_POST['nome'];
        $estudante->descricao = $_POST['descricao'];
        $estudante->ativo = isset($_POST['ativo']) ? 1 : 0;
        
        $estudante->save();
        
        header('Location: /davos');
    }

    public function edit($id) {
        $estudante = (new EstudanteModel())->find($id);
        $this->view('criar', ['estudante' => $estudante]);
    }

    public function update($id) {
        $estudante = (new EstudanteModel())->find($id);
        $estudante->nome = $_POST['nome'];
        $estudante->descricao = $_POST['descricao'];
        $estudante->ativo = isset($_POST['ativo']) ? 1 : 0;
        $estudante->update();
        header('Location: /davos');
    }

    public function toggleActive($id) {
        $estudante = (new EstudanteModel())->find($id);
        $estudante->ativo = !$estudante->ativo;
        $estudante->update();
        header('Location: /davos');
    }

    public function delete($id) {
        $estudanteModel = new EstudanteModel();
        $estudanteModel->delete($id);
        header('Location: /davos');
    }
}
?>
