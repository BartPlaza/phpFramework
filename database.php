<?php

require_once 'Connector.php';
require_once 'QueryBuilder.php';
$config = require_once 'config.php';

$pdo = Connector::make($config);
return new QueryBuilder($pdo);