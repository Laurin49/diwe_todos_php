<?php
    try {
        $pdo = new PDO ('mysql:dbname=todos_php;host=localhost;charset=utf8','root', 'Laurin56' );
    } catch ( PDOException $e ) {
        die ( $e->getMessage () );
    }
?>