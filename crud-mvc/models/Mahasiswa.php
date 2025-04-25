<?php
class Mahasiswa extends Model {
    public function all() {
        return $this->db->query("SELECT * FROM mahasiswa")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM mahasiswa WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO mahasiswa (nama, nim) VALUES (?, ?)");
        return $stmt->execute([$data['nama'], $data['nim']]);
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare("UPDATE mahasiswa SET nama = ?, nim = ? WHERE id = ?");
        return $stmt->execute([$data['nama'], $data['nim'], $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM mahasiswa WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
