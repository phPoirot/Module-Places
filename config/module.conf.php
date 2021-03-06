<?php
return array(
    Module\MongoDriver\Module::CONF_KEY => array(
        \Module\MongoDriver\Services\aServiceRepository::CONF_KEY => array(
            // Configuration of Repository Service.
            // Usually Implemented with modules that implement mongo usage
            // with specific key name as repo name.
            // @see aServiceRepository bellow
            \Module\Places\Services\ServiceRepositoryPlaces::class => array(
                'collection' => array(
                    // query on which collection
                    'name' => 'places',
                    // which client to connect and query with
                    'client' => \Module\MongoDriver\Module\MongoDriverManagementFacade::CLIENT_DEFAULT,
                    // ensure indexes
                    'indexes' => array(
                        array('key' => array('geometry.location' => '2dsphere')),
                    )
                ),
            ),
        ),
    ),
);
