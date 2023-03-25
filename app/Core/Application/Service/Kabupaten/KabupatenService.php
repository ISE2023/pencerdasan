<?php

namespace App\Core\Application\Service\Kabupaten;

use App\Core\Application\Service\Kabupaten\KabupatenResponse;
use App\Core\Domain\Repository\SqlKabupatenRepository;
use App\Core\Domain\Models\Kabupaten\Kabupaten;

class KabupatenService
{
    private SqlKabupatenRepository $repository;
    public function __construct(SqlKabupatenRepository $repository) {
        $this->repository = $repository;
    }

    public function execute(): array
    {
        $kabupaten = $this->repository->getAll();

        return array_map(function (Kabupaten $result) {
            return new KabupatenResponse(
                $result->getId(),
                $result->getProvinsiId(),
                $result->getName()
            );
        }, $kabupaten);
    }
}
