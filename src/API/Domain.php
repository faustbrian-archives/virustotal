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

class Domain extends AbstractAPI
{
    public function report(string $domain): HttpResponse
    {
        return $this->client->get('domain/report', compact('domain'));
    }
}
