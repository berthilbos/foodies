<h1>test</h1>
<?php

$this = '9712AX';
$this->validate($request, [
    'postal_code' => [
        PostalCode::forCountry('NL'),
    ],
]);