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

class Url extends AbstractApi
{
    public function scan($url)
    {
        $this->setFormParameters(compact('url'));

        $response = $this->post('url/scan');

        return $this->getMapper()->raw($response);
    }

    public function report($resource)
    {
        $this->setFormParameters(compact('resource'));

        $response = $this->post('url/report');

        return $this->getMapper()->raw($response);
    }
}
