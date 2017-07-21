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

class File extends AbstractAPI
{
    public function scan(string $file): HttpResponse
    {
        return $this->client->asMultipart()->post('file/scan', [
            'file' => fopen($file, 'r'),
        ]);
    }

    public function rescan(string $resource): HttpResponse
    {
        return $this->client->post('file/rescan', compact('resource'));
    }

    public function report(string $resource): HttpResponse
    {
        return $this->client->get('file/report', compact('resource'));
    }
}
