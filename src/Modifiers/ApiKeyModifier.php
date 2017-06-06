<?php

/*
 * This file is part of VirusTotal PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\VirusTotal\Modifiers;

use BrianFaust\Modifiers\AbstractModifier;

class ApiKeyModifier extends AbstractModifier
{
    public function apply()
    {
        $httpClient = $this->httpClient;

        $apiKey = $httpClient->getConfig('apiKey');

        if ($this->arguments['path'] === 'file/scan') {
            $httpClient->addMultipart('apikey', $apiKey);

            return $httpClient;
        }

        if (in_array($this->arguments['method'], ['GET', 'HEAD', 'DELETE'])) {
            $httpClient->addQuery('apikey', $apiKey);
        } else {
            $httpClient->addFormParameter('apikey', $apiKey);
        }

        return $httpClient;
    }
}
