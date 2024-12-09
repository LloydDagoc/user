<?php

class TakeExam extends Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->call->view('take_exam');
    }
}
?>
