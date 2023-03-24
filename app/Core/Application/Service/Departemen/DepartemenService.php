<?php

namespace App\Core\Application\Service\Departemen;

use App\Core\Application\Service\Departemen\DepartemenResponse;
use App\Core\Domain\Repository\SqlDepartemenRepository;
use App\Core\Domain\Models\Departemen\Departemen;

class DepartemenService
{
    private SqlDepartemenRepository $repository;
    public function __construct(SqlDepartemenRepository $repository) {
        $this->repository = $repository;
    }

    public function execute(): array
    {
        $departemen = $this->repository->getAll();

        return array_map(function (Departemen $result) {
            return new DepartemenResponse(
                $result->getId(),
                $result->getFakultasId(),
                $result->getName()
            );
        }, $departemen);
    }
}
