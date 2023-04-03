<?php

namespace App\Core\Domain\Repository;

use App\Core\Domain\Models\Kabupaten\Kabupaten;
use Illuminate\Support\Facades\DB;

class SqlKabupatenRepository
{
    public function getAll(): array
    {
        $rows = DB::table('kabupaten')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?Kabupaten
    {
        $row = DB::table('kabupaten')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $kabupaten = [];
        foreach ($rows as $row) {
            $kabupaten[] = new Kabupaten(
                $row->id,
                $row->provinsi_id,
                $row->name,
            );
        }
        return $kabupaten;
    }
}
