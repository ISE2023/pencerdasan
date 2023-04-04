<?php

namespace App\Core\Domain\Repository;

use App\Core\Domain\Models\Shortener\Shortener;
use Illuminate\Support\Facades\DB;

class SqlShortenerRepository
{
    public function getAll(): array
    {
        $rows = DB::table('shorteners')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id):?Shortener
    {
        $row = DB::table('shorteners')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function findByShortUrl(string $short_url):?Shortener
    {
        $row = DB::table('shorteners')->where('short_url', $short_url)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }
    // kahfin bikin function create short url

    public function constructFromRows(array $rows): array
    {
        $shortener = [];
        foreach ($rows as $row) {
            $shortener[] = new Shortener(//ini shortener hijau model modelnya sesuain namanya dgn database
                $row->id,
                $row->short_url,
                $row->long_url,
                $row->is_customized,
                $row->visitor,
                $row->user_id,
            );
        }
        return $shortener;
    }
}
