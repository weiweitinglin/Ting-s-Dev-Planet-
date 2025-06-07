<?php
namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller {
    public function index() {
        $data = [
            'title' => '關於我',
            'skills' => [
                'frontend' => ['HTML', 'CSS', 'JavaScript', 'Bootstrap', 'Vue.js'],
                'backend' => ['PHP', 'Node.js', 'Python'],
                'database' => ['MySQL', 'MariaDB', 'MongoDB'],
                'tools' => ['Git', 'Docker', 'VS Code']
            ]
        ];
        
        $this->view('about/index', $data);
    }
}