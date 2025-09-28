<?php

declare(strict_types=1);

namespace Clover\Interfaces;

interface RequestInterface
{
    public function getMethod(): string;
    public function getUri(): string;
    public function getQuery(): array;
    public function getBody(): array;
    public function getHeaders(): array;

}
