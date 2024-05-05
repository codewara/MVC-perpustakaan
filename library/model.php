<?php
    include_once ('library.php');

    class model {
        private $book = array ();
        private $user = array ();
        private $logs = array ();
        
        public function _b_insert ($xbook) {
            $this -> book[] = $xbook;
        }
        
        public function _u_insert ($xuser) {
            $this -> user[] = $xuser;
            echo '<p><b>Data user telah ditambahkan!</b></p>';
        }
        
        public function _t_insert ($trans) {
            $this -> logs[] = $trans;
            echo '<p><i>>> Data transaksi telah disimpan.</i></p>';
        }

        public function _b_show () {
            if (empty ($this -> book)) {
                echo '
                <div class="empty">
                    <img src="https://uxwing.com/wp-content/themes/uxwing/download/web-app-development/no-result-found-icon.png">
                    <p>Belum ada data buku!</p>
                </div>
                ';
            }
            foreach ($this -> book as $books) {
                $books -> print_b ();
                echo '<hr>';
            }
        }

        public function _u_show () {
            foreach ($this -> user as $user) {
                $user -> print_u ();
                echo '<hr>';
            }
        }

        public function _t_show () {
            foreach ($this -> logs as $logs) {
                $logs -> print_t ();
                echo '<hr>';
            }
        }

        public function _t_find ($id) {
            $logs[$id] -> print_t ();
            echo '<hr>';
        }

        public function _b_update ($id, $xbook) {
            $this -> book[$id] = $xbook;
            echo '<p><b>Data user telah diubah!</b></p>';
        }

        public function _u_update ($id, $xuser) {
            $this -> user[$id] = $xuser;
            echo '<p><b>Data user telah diubah!</b></p>';
        }

        public function _t_update ($id, $trans) {
            $this -> logs[$id] = $trans;
            echo '<p><i>>>Data transaksi telah diubah!</i></p>';
        }

        public function _b_destroy ($id) {
            unset ($this -> book[$id]);
            echo '<p><b>Data buku ke-'.$id.' telah dihapus!</b></p>';
        }
        
        public function _u_destroy () {
            unset ($this -> user[0]);
            echo '<p><b>Data user telah dihapus!</b></p>';
        }
        
        public function _t_destroy ($id) {
            unset ($this -> logs[$id]);
            echo '<p><i>>>Data transaksi telah dihapus!</i></p>';
        }
    }
?>