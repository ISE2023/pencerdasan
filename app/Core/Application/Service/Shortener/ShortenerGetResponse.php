<?php

namespace App\Core\Application\Service\Shortener;

use JsonSerializable;

class ShortenerGetResponse implements JsonSerializable
{
    private string $long_url;

    /**
     * @param string $id
     * @param string $name
     */
    public function __construct(string $long_url)
    {
        $this->long_url = $long_url;
    }

    public function jsonSerialize(): string
    {
        return $this->long_url;
    }
}
