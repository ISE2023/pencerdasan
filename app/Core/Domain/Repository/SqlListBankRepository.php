<?php

namespace App\Core\Domain\Repository;

use App\Core\Domain\Models\ListBank\ListBank;
use Illuminate\Support\Facades\DB;

class SqlListBankRepository
{
    public function getAll(): array
    {
        $rows = DB::table('list_bank')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?ListBank
    {
        $row = DB::table('list_bank')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $list_bank = [];
        foreach ($rows as $row) {
            $list_bank[] = new ListBank(
                $row->id,
                $row->name,
            );
        }
        return $list_bank;
    }
}
