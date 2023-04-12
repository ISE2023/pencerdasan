<?php

namespace App\Core\Domain\Models\Shortener;

class Shortener
{
    private int $id;
    private string $short_url;
    private string $long_url;
    private bool $is_customized;
    private int $visitor;
    private string $user_id;
    /**
     * @param int $id
     * @param string $name
     */
    public function __construct(int $id, string $short_url, string $long_url, bool $is_customized, int $visitor ,string $user_id)
    {
        $this->id = $id;
        $this->short_url = $short_url;
        $this->long_url = $long_url;
        $this->is_customized = $is_customized;
        $this->visitor = $visitor; //logikanya g paham
        $this->user_id = $user_id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getshort_url(): string
    {
        return $this->short_url;
    }
    public function getlong_url(): string
    {
        return $this->long_url;
    }
    public function getis_customized(): bool
    {
        return $this->is_customized;
    }
    public function getvisitor(): string
    {
        return $this->visitor;
    }
    public function getuser_id(): string
    {
        return $this->user_id;
    }
}
