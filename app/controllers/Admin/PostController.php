<?php
namespace App\Controllers\Admin;

use App\Models\Post;

class PostController extends AdminController {
    private $postModel;

    public function __construct() {
        $this->requireAdmin();
        $this->postModel = $this->model('Post');
    }

    public function index() {
        $data = [
            'title' => '文章管理',
            'page' => 'posts',
            'posts' => $this->postModel->getAllPosts()
        ];
        
        $this->view('admin/posts/index', $data);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'slug' => $this->createSlug($_POST['title']),
                'status' => $_POST['status'],
                'user_id' => $_SESSION['user_id']
            ];

            if ($this->postModel->createPost($data)) {
                $_SESSION['success'] = '文章新增成功！';
                header('Location: /admin/posts');
                exit;
            }
        }

        $data = [
            'title' => '新增文章',
            'page' => 'posts'
        ];
        
        $this->view('admin/posts/create', $data);
    }

    private function createSlug($title) {
        $slug = strtolower($title);
        $slug = preg_replace('/[^a-z0-9-]/', '-', $slug);
        $slug = preg_replace('/-+/', '-', $slug);
        return trim($slug, '-');
    }
}