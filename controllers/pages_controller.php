<?php

class PagesController {

    public function home() {
        $first_name = 'Jon';
        $last_name = 'Snow';
        require_once('views/pages/home.php');
    }

    public function error() {
        require_once('views/pages/error.php');
    }

    public function test_test() {
        require_once('views/pages/test-test.php');
    }

}
