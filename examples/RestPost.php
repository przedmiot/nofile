<?php
use DreamCommerce\Exceptions\ClientException;
use DreamCommerce\Exceptions\ResourceException;

require '../vendor/autoload.php';
require 'config.php';

try {
    $client = new DreamCommerce\Client(
        Config::ENTRYPOINT, Config::APPID, Config::APP_SECRET
    );

    $client->setAccessToken('<INSERT TOKEN HERE>');

    $resource = $client->producers;
    // or
    //$resource = new \DreamCommerce\Resource($client, 'producers');

    $insertedId = $resource->post(array(
        'name' => 'Awesome Manufacturer!',
        'web' => 'http://example.org'
    ));

    // or:
    /*$data = new stdClass();
    $data->name = 'Awesome Manufacturer!';
    $data->web = 'http://example.org';

    $insertedId = $resource->post($data);*/

    printf("Added object, #%d", $insertedId);


} catch (ClientException $ex) {
    printf("An error occurred during the Client initialization: %s", $ex->getMessage());
} catch (ResourceException $ex) {
    printf("An error occurred during Resource access: %s", $ex->getMessage());
}