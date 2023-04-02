<?php

namespace App\Core\Application\Service\UrlShortener;

use App\Core\Application\Service\UrlShortener\UrlShortenerResponse;
use App\Core\Domain\Repository\SqlUrlShortenerRepository;
use App\Core\Domain\Models\UrlShortener\UrlShortener;

class UrlShortenerService
{
    private SqlUrlShortenerRepository $repository;
    public function __construct(SqlUrlShortenerRepository $repository) {
        $this->repository = $repository;
    }

    public function execute(): array
    {
        $urlshortener = $this->repository->getAll();

        return array_map(function (UrlShortener $result) {
            return new UrlShortenerResponse(
                // $result->getId(),
                // $result->getName()
            );
        }, $urlshortener);
    }
}
