<?php

/*
 * This file is part of VirusTotal PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\VirusTotal\API;

use BrianFaust\Http\HttpResponse;

class Url extends AbstractAPI
{
    public function scan(string $url): HttpResponse
    {
        return $this->client->post('url/scan', compact('url'));
    }

    public function report(string $resource): HttpResponse
    {
        return $this->client->post('url/report', compact('resource'));
    }
}
