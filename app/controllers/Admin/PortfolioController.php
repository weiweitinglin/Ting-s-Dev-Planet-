<?php
namespace App\Controllers\Admin;

use App\Models\Portfolio;

class PortfolioController extends AdminController {
    private $portfolioModel;

    public function __construct() {
        $this->requireAdmin();
        $this->portfolioModel = $this->model('Portfolio');
    }

    public function index() {
        $data = [
            'title' => '作品管理',
            'page' => 'portfolio',
            'projects' => $this->portfolioModel->getAllProjects()
        ];
        
        $this->view('admin/portfolio/index', $data);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $uploadDir = UPLOAD_PATH . 'portfolio/';
            $image = '';

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $fileName = uniqid() . '_' . $_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $fileName);
                $image = '/uploads/portfolio/' . $fileName;
            }

            $data = [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'link' => $_POST['link'],
                'image' => $image
            ];

            if ($this->portfolioModel->createProject($data)) {
                $_SESSION['success'] = '作品新增成功！';
                header('Location: /admin/portfolio');
                exit;
            }
        }

        $data = [
            'title' => '新增作品',
            'page' => 'portfolio'
        ];
        
        $this->view('admin/portfolio/create', $data);
    }
}