<?php 
session_start();

session_unset();
session_destroy();

echo "<script>parent.location.reload();</script>";
