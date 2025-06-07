<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Portfolio;

class PortfolioController extends Controller {
    private $portfolioModel;

    public function __construct() {
        $this->portfolioModel = $this->model('Portfolio');
    }

    public function index() {
        $data = [
            'title' => '作品集',
            'projects' => $this->portfolioModel->getAllProjects()
        ];
        
        $this->view('portfolio/index', $data);
    }

    public function view($id) {
        $project = $this->portfolioModel->getProjectById($id);
        
        if (!$project) {
            header('Location: /portfolio');
            exit;
        }

        $data = [
            'title' => $project['title'],
            'project' => $project
        ];
        
        $this->view('portfolio/single', $data);
    }
}