<?php

namespace App\Core\Application\Service\kabupaten;

use JsonSerializable;

class KabupatenResponse implements JsonSerializable
{
    private string $id;
    private string $provinsi_id;
    private string $name;

    /**
     * @param string $id
     * @param string $name
     */
    public function __construct(string $id, string $provinsi_id, string $name)
    {
        $this->id = $id;
        $this->provinsi_id = $provinsi_id;
        $this->name = $name;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'provinsi_id' => $this->provinsi_id,
            'name' => $this->name,
        ];
    }
}
