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

    //////////////////
    public function postUrl(string $short_url): ?ShortenerGetResponse
    {
        $Shorteners = $this->repository->findByShortUrl($short_url);
        if (empty($Shorteners))
            return null;

        return new ShortenerGetResponse(
            $Shorteners->getlong_url()
        );
    }
    
}

// private function generateAlias(){
//     //Generate Alias based on last url
//     $latestAlias = parent::getLastAlias();
//     $latestAlias = str_split($latestAlias);
//     $banyak = count($latestAlias);
//     $tes = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
//     $banyak = count($latestAlias);
//     $naik = true;            
//     for($i = $banyak; $i > 0 && $naik == true ; $i--){
//         $key = array_search($latestAlias[$i-1], $tes);
//         if(!array_key_exists($key + 1, $tes)){
//             $latestAlias[$i-1] = $tes[0];
//             if($i == 1){
//                 $naik = false;
//                 array_unshift($latestAlias , $tes[0]);
//             } else {
//                 $naik = true;
//             }
//         } else {
//             $latestAlias[$i-1] = $tes[$key + 1];
//             $naik = false;
//         }
//     }