<?php
namespace App\Models;

use Core\Model;

class EstudanteModel extends Model {
    public $id;
    public $nome;
    public $descricao;
    public $ativo;

    public function getAllStudents() {
        $stmt = $this->db->prepare('SELECT * FROM estudantes');
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function find($id) {
        $stmt = $this->db->prepare('SELECT * FROM estudantes WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function save() {
        $stmt = $this->db->prepare('INSERT INTO estudantes (nome, descricao, ativo) VALUES (?, ?, ?)');
        $stmt->execute([$this->nome, $this->descricao, $this->ativo]);
    }

    public function update() {
        $stmt = $this->db->prepare('UPDATE estudantes SET nome = ?, descricao = ?, ativo = ? WHERE id = ?');
        $stmt->execute([$this->nome, $this->descricao, $this->ativo, $this->id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM estudantes WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>
