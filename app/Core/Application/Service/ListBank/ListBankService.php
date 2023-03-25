<?php

namespace App\Core\Application\Service\ListBank;

use App\Core\Application\Service\ListBank\ListBankResponse;
use App\Core\Domain\Repository\SqlListBankRepository;
use App\Core\Domain\Models\ListBank\ListBank;

class ListBankService
{
    private SqlListBankRepository $repository;
    public function __construct(SqlListBankRepository $repository) {
        $this->repository = $repository;
    }

    public function execute(): array
    {
        $list_bank = $this->repository->getAll();

        return array_map(function (ListBank $result) {
            return new ListBankResponse(
                $result->getId(),
                $result->getName()
            );
        }, $list_bank);
    }
}
