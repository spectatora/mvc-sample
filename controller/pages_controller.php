<?php
class PagesController {
    public function home() {
        $first_name = 'Jon';
        $last_name  = 'Snow';
        require_once('view/pages/home.php');
    }

    public function error() {
        require_once('view/pages/error.php');
    }
}