<?php

/*
 * This file is part of VirusTotal PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\VirusTotal;

use BrianFaust\Unified\AbstractHttpClient;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_uri' => 'https://www.virustotal.com/vtapi/v2/',
        'headers'  => [
           'User-Agent' => 'BrianFaust/VirusTotal',
        ],
    ];

    protected $requestModifiers = [Modifiers\ApiKeyModifier::class];
}
