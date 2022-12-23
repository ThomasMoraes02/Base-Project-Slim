<?php

use DI\ContainerBuilder;

$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions([
    // "User" => (User::class)
]);

return $containerBuilder->build();