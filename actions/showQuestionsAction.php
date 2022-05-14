<?php
require('database2.php');
$getAllQuestion = $bdd->query('SELECT *FROM question ORDER BY id DESC');

