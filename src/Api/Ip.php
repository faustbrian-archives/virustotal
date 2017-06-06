<?php

/*
 * This file is part of VirusTotal PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\VirusTotal\Api;

use BrianFaust\Unified\AbstractApi;

class Ip extends AbstractApi
{
    public function report($ip)
    {
        $this->setQuery(compact('ip'));

        $response = $this->get('ip-address/report');

        return $this->getMapper()->raw($response);
    }
}
