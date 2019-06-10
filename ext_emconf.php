<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Provider Extension',
    'description' => '',
    'category' => 'templates',
    'version' => '1.0.3',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Boris Schauer, Analog, Medienagenten',
    'author_email' => 'me@bschauer.de, info@analog.de, info@medienagenten.de',
    'author_company' => '',
    'generator' => 'twbelements',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.*',
            'rte_ckeditor' => '8.7.*'
        ],
        'conflicts' => [
            'fluidpages' => '*',
            'themes' => '*',
        ],
    ],
];
