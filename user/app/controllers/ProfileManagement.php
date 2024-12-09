<?php

class ProfileManagement extends Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->call->view('profile_management');
    }
}
?>
