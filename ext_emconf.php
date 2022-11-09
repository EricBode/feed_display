<?php

/**
 * This file is part of the "feed_display" Extension for TYPO3 CMS.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Feed Display',
    'description' => 'Fetches and parses RSS and Atom web feeds with the SimplePie library and prepares them for frontend display',
    'category' => 'plugin',
    'author' => 'Eric Bode',
    'author_email' => 'eric.bode@gmx.de',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.1.2',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.99.99',
        ],
    ],
];