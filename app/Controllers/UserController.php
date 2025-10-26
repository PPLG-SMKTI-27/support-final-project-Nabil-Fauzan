<?php
$path = __DIR__ . '/../Models/User.php';
if (!file_exists($path)) {
    die("❌ File User.php tidak ditemukan di: $path");
}
require_once $path;

class UserController {
    private $model;

    public function __construct() {
        $this->model = new User();
    }

    public function index() {
        $users = $this->model->all();
        include __DIR__ . '/../Views/users/index_view.php';
    }

    public function create() {
        include __DIR__ . '/../Views/users/create.php';
    }

    public function store() {
        $this->model->create($_POST, $_FILES['photo']);
        header("Location: index.php");
    }
}
