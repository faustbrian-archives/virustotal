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

class Comment extends AbstractApi
{
    public function make($resource, $comment)
    {
        $this->setFormParameter(compact('resource', 'comment'));

        $response = $this->post('comments/put');

        return $this->getMapper()->raw($response);
    }
}
