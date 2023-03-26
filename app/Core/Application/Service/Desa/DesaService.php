<?php

namespace App\Core\Application\Service\Desa;

use App\Core\Application\Service\Desa\DesaResponse;
use App\Core\Domain\Repository\SqlDesaRepository;
use App\Core\Domain\Models\Desa\Desa;

class DesaService
{
    private SqlDesaRepository $repository;
    public function __construct(SqlDesaRepository $repository) {
        $this->repository = $repository;
    }

    public function execute(): array
    {
        $Desa = $this->repository->getAll();

        return array_map(function (Desa $result) {
            return new DesaResponse(
                $result->getId(),
                $result->getKecamatanId(),
                $result->getName()
            );
        }, $Desa);
    }
}
