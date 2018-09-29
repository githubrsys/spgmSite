<?php

/**
 * Extension Manager/Repository config file for ext "spgmsite".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'spgmSite',
    'description' => 'Site declaration for spgmSite.',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '9.1.0-10.1.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Rsysprivate\\Spgmsite\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'dros',
    'author_email' => 'info@r-system.de',
    'author_company' => 'rsysprivate',
    'version' => '1.0.0',
];
