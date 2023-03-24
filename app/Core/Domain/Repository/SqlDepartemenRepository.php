<?php

namespace App\Core\Domain\Repository;

use App\Core\Domain\Models\Departemen\Departemen;
use Illuminate\Support\Facades\DB;

class SqlDepartemenRepository
{
    public function getAll(): array
    {
        $rows = DB::table('departemen')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?Departemen
    {
        $row = DB::table('departemen')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $departemen = [];
        foreach ($rows as $row) {
            $departemen[] = new Departemen(
                $row->id,
                $row->fakultas_id,
                $row->name,
            );
        }
        return $departemen;
    }
}
