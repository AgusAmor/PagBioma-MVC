<?php 
require('views/partials/connect.php');

require('views/partials/session.php');

require('views/partials/head.php');

session_start();
session_destroy();

header("Location: /web-app/");

