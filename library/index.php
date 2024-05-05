<?php
    include_once ("controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpus Takana</title>
    <link 
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous"
    >
    <style>
        p {
            margin: 0.5rem;
            wordwrap: break-word;
        }
        hr {
            border: solid 1px rgba(0, 0, 0, 0.1);
            width: 100%;
        }
        .users {
            display: flex;
            text-align: left;
        }
        .data, .transaction {
            width: 50%;
            padding: 1rem;
        }
        .attribute {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            padding-left: 1rem;
        }
        .container {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            margin-top: 50px;
            text-align: center;
            text-align: center;
        }
        .bubble {
            margin-top: 25px;
            margin-bottom: 25px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            min-height: 5rem;
            width: 100%;
            height: 400px;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        .bubble h3 {
            text-align: left;
            margin: 2rem 0 0 2rem;
        }
        .listarea {
            margin: 1rem;
            overflow: auto;
            border-radius: 20px;
            text-align: left;
        }
        .listarea::-webkit-scrollbar {
            display: none;
        }
        .empty {
            top: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-right: 40px;
            opacity: 0.5;
            height: 100%;
        }
        .empty img {
            width: 100px;
            height: 100px;
        }
        .list {
            margin: 0;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Selamat Datang di Perpus Takana!</h1>
            <p class="lead">mau pinjam buku apa?</p>
        </div>
        <hr>
        <div class="bubble">
            <h3>List Buku</h3>
            <div class="listarea">
                <ol class="list">
                    <?php   
                    $buku = new controller();
                    //$buku -> createBook ($nama, $penulis, $harga, $stok);
                    $buku -> getBooks ();
                    ?>
                </ol>
            </div>
        </div>
        <div class="users">
            <div class="data">
            <?php
            $user = new controller();
            //$user -> createUser ($nama, $alamat, $telepon);
            $user -> getUser ();
            ?>
            </div>
            <div class="transaction">
                <?php
                $log = new controller();
                //$log -> addLog ($id, $buku, $user, $date, $status);
                $log -> getLogs ();
                ?>
            </div>
        </div>
    </div>
</body>
</html>