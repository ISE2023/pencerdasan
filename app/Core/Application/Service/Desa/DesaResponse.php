<?php

namespace App\Core\Application\Service\Desa;

use JsonSerializable;

class DesaResponse implements JsonSerializable
{
    private string $id;
    private string $kecamatan_id;
    private string $name;

    /**
     * @param string $id
     * @param string $name
     */
    public function __construct(string $id, string $name, string $kecamatan_id)
    {
        $this->id = $id;
        $this->kecamatan_id = $kecamatan_id;
        $this->name = $name;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'kecamata_id' => $this->kecamatan_id,
            'name' => $this->name,
        ];
    }
}
