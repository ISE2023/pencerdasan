<?php

namespace App\Core\Application\Service\Kecamatan;

use JsonSerializable;

class KecamatanResponse implements JsonSerializable
{
    private string $id;
    private string $kabupaten_id;
    private string $name;

    /**
     * @param string $id
     * @param string $name
     */
    public function __construct(string $id, string $kabupaten_id , string $name)
    {
        $this->id = $id;
        $this->kabupaten_id= $kabupaten_id;
        $this->name = $name;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'kabupaten_id' => $this->kabupaten_id,
            'name' => $this->name,
        ];
    }
}
