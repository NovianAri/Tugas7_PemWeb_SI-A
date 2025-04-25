<?php
class Controller {
    public function view($view, $data = []) {
        extract($data);
        require "views/$view.php";
    }
}
