<?php

namespace App\Core\Domain\Repository;

use App\Core\Domain\Models\Fakultas\Fakultas;
use Illuminate\Support\Facades\DB;

class SqlFakultasRepository
{
    public function getAll(): array
    {
        $rows = DB::table('fakultas')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?Fakultas
    {
        $row = DB::table('fakultas')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $fakultas = [];
        foreach ($rows as $row) {
            $fakultas[] = new Fakultas(
                $row->id,
                $row->name,
                $row->singkatan,
            );
        }
        return $fakultas;
    }
}
