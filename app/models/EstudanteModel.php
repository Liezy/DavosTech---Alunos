<?php
namespace App\Models;

use Core\Model;

class EstudanteModel extends Model {
    protected $table = 'estudantes';

    public $id;
    public $nome;
    public $email;
    public $telefone;
    public $valor_mensalidade;
    public $senha;
    public $ativo;
    public $observacao;

    public function save() {
        $stmt = $this->db->prepare("INSERT INTO {$this->table} (nome, email, telefone, valor_mensalidade, senha, ativo, observacao) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$this->nome, $this->email, $this->telefone, $this->valor_mensalidade, password_hash($this->senha, PASSWORD_BCRYPT), $this->ativo, $this->observacao]);
    }

    public function update() {
        $stmt = $this->db->prepare("UPDATE {$this->table} SET nome = ?, email = ?, telefone = ?, valor_mensalidade = ?, ativo = ?, observacao = ? WHERE id = ?");
        $stmt->execute([$this->nome, $this->email, $this->telefone, $this->valor_mensalidade, $this->ativo, $this->observacao, $this->id]);
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchObject(__CLASS__);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM {$this->table} WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function getAllStudents() {
        $stmt = $this->db->query("SELECT * FROM {$this->table}");
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}
?>
