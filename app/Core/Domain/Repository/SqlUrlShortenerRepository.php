<?php

namespace App\Core\Domain\Repository;

use App\Core\Domain\Models\UrlShortener\UrlShortener;
use Illuminate\Support\Facades\DB;

class SqlUrlShortenerRepository
{
    public function getAll(): array
    {
        $rows = DB::table('short_links')->get(); //sesuai nama tabel di db

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?UrlShortener
    {
        $row = DB::table('short_links')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $urlshortener = [];
        foreach ($rows as $row) {
            $urlshortener[] = new UrlShortener(
                $row->id,
                $row->name,
            );
        }
        return $urlshortener;
    }
}
