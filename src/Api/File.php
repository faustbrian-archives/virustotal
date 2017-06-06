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

class File extends AbstractApi
{
    public function scan($file)
    {
        $this->setMultipart('file', fopen($file, 'r'));

        $response = $this->post('file/scan');

        return $this->getMapper()->raw($response);
    }

    public function rescan($resource)
    {
        $this->setFormParameter(compact('resource'));

        $response = $this->post('file/rescan');

        return $this->getMapper()->raw($response);
    }

    public function report($resource)
    {
        $this->setFormParameter(compact('resource'));

        $response = $this->get('file/report');

        return $this->getMapper()->raw($response);
    }
}
