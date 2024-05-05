<?php
    include_once ("model.php");

    class controller {
        private $model;

        public function __construct () {
            $this -> model = new model ();
        }

        public function createBook ($title, $author, $price, $stock) {
            $xbook = new books ($title, $author, $price, $stock);
            $this -> model -> _b_insert ($xbook);
        }

        public function createUser ($name, $address, $phone) {
            $xuser = new users ($name, $address, $phone);
            $this -> model -> _u_insert ($xuser);
        }

        public function addLog ($id, $book, $user, $date, $status) {
            $trans = new transactions ($id, $book, $user, $date, $status);
            $this -> model -> _t_insert ($trans);
        }

        public function getBooks () {
            $this -> model -> _b_show ();
        }

        public function getUser() {
            $this -> model -> _u_show ();
        }

        public function getLogs() {
            $this -> model -> _t_show ();
        }

        public function getLog($id) {
            $this -> model -> _t_find ($id);
        }

        public function editBook ($id, $xbook) {
            $this -> model -> _b_update ($id, $xbook);
        }

        public function editUser ($id, $xuser) {
            $this -> model -> _u_update ($id, $xuser);
        }

        public function deleteBook ($id) {
            $this -> model -> _b_destroy ($id);
        }

        public function deleteUser () {
            $this -> model -> _u_destroy ();
        }

        public function deleteLog ($id) {
            $this -> model -> _t_destroy ($id);
        }
    }
?>