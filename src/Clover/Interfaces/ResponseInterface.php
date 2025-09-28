<?php

declare(strict_types=1);

namespace Clover\Interfaces;

interface ResponseInterface
{
    public function send(string $data, int $status = 200): void;

    public function json(array $data, int $status = 200): void;
}
