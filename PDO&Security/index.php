<?php

$query = require 'bootstrap.php';

$tasks = $query->selectAll('information');

require 'index.view.php';
