<?php

namespace App\Core\Domain\Repository;

use App\Core\Domain\Models\Desa\Desa;
use Illuminate\Support\Facades\DB;

class SqlDesaRepository
{
    public function getAll(): array
    {
        $rows = DB::table('desa')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function getAllKecamatan(): array
    {
        $rows = DB::table('kecamatan')->get();

        if (!$rows) {
            return null;
        }

        $kecamatan = [];
        foreach ($rows as $row) {
        $result[] = new Kecamatan(
            $row->id,
            $row->name,
        );
    }
    return $kecamatan;
    }


    public function find(int $id): ?Desa
    {
        $row = DB::table('desa')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $desa = [];
        foreach ($rows as $row) {
            $desa[] = new Desa(
                $row->id,
                $row->kecamatan_id,
                $row->name,
            );
        }
        return $desa;
    }
}
