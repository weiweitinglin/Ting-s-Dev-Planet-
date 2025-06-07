<?php
namespace App\Models;

use App\Core\Database;

class Post {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAllPosts() {
        $stmt = $this->db->query('
            SELECT posts.*, users.username 
            FROM posts 
            LEFT JOIN users ON posts.user_id = users.id 
            WHERE posts.status = "published" 
            ORDER BY posts.created_at DESC
        ');
        return $stmt->fetchAll();
    }

    public function getPostBySlug($slug) {
        $stmt = $this->db->prepare('
            SELECT posts.*, users.username 
            FROM posts 
            LEFT JOIN users ON posts.user_id = users.id 
            WHERE posts.slug = ? AND posts.status = "published"
        ');
        $stmt->execute([$slug]);
        return $stmt->fetch();
    }
}