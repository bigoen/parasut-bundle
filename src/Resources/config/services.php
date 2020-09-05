<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return function (ContainerConfigurator $configurator) {
    $configurator->services()
        ->load('Bigoen\\Parasut\\Services\\', '../../../../parasut/src/Services/*')
        ->arg('$clientId', '%env(resolve:PARASUT_CLIENT_ID)%')
        ->arg('$clientSecret', '%env(resolve:PARASUT_CLIENT_SECRET)%')
        ->arg('$email', '%env(resolve:PARASUT_EMAIL)%')
        ->arg('$password', '%env(resolve:PARASUT_PASSWORD)%')
        ->arg('$companyId', '%env(resolve:PARASUT_COMPANY_ID)%')
        ->arg('$httpClient', service('http_client'));
};
