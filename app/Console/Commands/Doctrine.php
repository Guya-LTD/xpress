<?php
// cli-config.php
require_once "../../../bootstrap/Doctrine.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);