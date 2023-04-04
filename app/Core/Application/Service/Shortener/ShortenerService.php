<?php

namespace App\Core\Application\Service\Shortener;

use App\Core\Application\Service\Shortener\ShortenerGetResponse;
use App\Core\Domain\Repository\SqlShortenerRepository;
use App\Core\Domain\Models\Shortener\Shortener;

class ShortenerService
{
    private SqlShortenerRepository $repository;
    public function __construct(SqlShortenerRepository $repository) {
        $this->repository = $repository;
    }

    public function getLongUrl(string $short_url): ?ShortenerGetResponse
    {
        $Shorteners = $this->repository->findByShortUrl($short_url);
        if (empty($Shorteners))
            return null;

        return new ShortenerGetResponse(
            $Shorteners->getlong_url()
        );
    }
}
