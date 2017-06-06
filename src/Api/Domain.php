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

class Domain extends AbstractApi
{
    public function report($domain)
    {
        $this->setQuery(compact('domain'));

        $response = $this->get('domain/report');

        return $this->getMapper()->raw($response);
    }
}
