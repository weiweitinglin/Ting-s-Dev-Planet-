<?php
namespace App\Models;

use App\Core\Database;

class Portfolio {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAllProjects() {
        $stmt = $this->db->query('
            SELECT * FROM portfolio 
            ORDER BY created_at DESC
        ');
        return $stmt->fetchAll();
    }

    public function getProjectById($id) {
        $stmt = $this->db->prepare('
            SELECT * FROM portfolio 
            WHERE id = ?
        ');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}