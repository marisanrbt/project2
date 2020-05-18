<?php
@session_start();
include "inc/koneksi.php";

if(@$_SESSION['admin' || @$_SESSION['operator']) {
?>

<!DOCTYPE html>
<html>
<html>
    <tittle>Peminjaman Buku</tittle>
<style type="text/css">
body{
    font-family: arial;
    font-size: 14px;
}

#canvas{
    width: 960px;
    margin: 0 auto;
    border: 2px solid grey;
}

#header{
    font-size: 20px;
    padding: 20px;
}


}