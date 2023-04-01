<?php
require_once("header.php");
$mod = @$_REQUEST['mod'];
switch ($mod) {
    case "hapus":
        require("hapus.php");
        break;
    case "ubah":
        require("ubah.php");
        break;
    case "tambah":
        require("tambah.php");
        break;
    case "home":
        require("home.php");
        break;
    case "about":
        require("about.php");
        break;
    case "kontak":
        require("kontak.php");
        break;
    default:
        require("home.php");
}
require_once("footer.php");
