<?php
    class books {
        private $title;
        private $author;
        private $price;
        private $stock;

        public function __construct ($title, $author, $price, $stock) {
            $this -> title = $title;
            $this -> author = $author;
            $this -> price = number_format($price);
            $this -> stock = $stock;
        }

        public function print_b () {
            echo '<li><p>'.$this -> title.' - '.$this -> author.'</p>'.
                 '<p>Harga : Rp.'.$this -> price.'</p>'.
                 '<p>Stok : '.$this -> stock.'</p></li>';
        }

        public function getTitle () {
            return $this -> title;
        }
    }
    class users {
        private $name;
        private $address;
        private $phone;

        public function __construct ($name, $address, $phone) {
            $this -> name = $name;
            $this -> address = $address;
            $this -> phone = $phone;
        }

        public function print_u (){
            echo '
            <div class="attribute">
                <div>
                    <p>Nama Peminjam</p>
                    <p>Alamat</p>
                    <p>Nomor Telepon</p>
                </div>
                <div>
                    <p>: '.$this -> name.'</p>
                    <p>: '.$this -> address.'</p>
                    <p>: '.$this -> phone.'</p>
                </div>
            </div>';
        }
    }
    class transactions {
        private $id;
        private $book;
        private $user;
        private $date;
        private $status;

        public function __construct ($id, $book, $user, $date, $status) {
            $this -> id = $id;
            $this -> book = $book;
            $this -> user = $user;
            $this -> date = $date;
            $this -> status = $status;
        }

        public function print_t (){
            echo '
            <div class="attribute">
                <div>
                    <p>ID Transaksi</p>
                    <p>Buku</p>
                    <p>Peminjam</p>
                    <p>Tanggal Pinjam</p>
                    <p>Status</p>
                </div>
                <div>
                    <p>: '.$this -> id.'</p>
                    <p>: '.$this -> book.'</p>
                    <p>: '.$this -> user.'</p>
                    <p>: '.$this -> date.'</p>
                    <p>: '.$this -> status.'</p>
                </div>
            </div>';
        }
    }
?>