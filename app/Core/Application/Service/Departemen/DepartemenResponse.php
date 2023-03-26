<?php

namespace App\Core\Application\Service\Departemen;

use JsonSerializable;

class DepartemenResponse implements JsonSerializable
{
    private string $id;
    private string $fakultas_id;
    private string $name;

    /**
     * @param string $id
     * @param string $name
     */
    public function __construct(string $id, string $fakultas_id, string $name)
    {
        $this->id = $id;
        $this->fakultas_id = $fakultas_id;
        $this->name = $name;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'fakultas_id' => $this->fakultas_id,
            'name' => $this->name,
        ];
    }
}
