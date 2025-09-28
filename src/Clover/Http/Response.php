<?php

declare(strict_types=1);

namespace Clover\Http;

use Clover\Interfaces\ResponseInterface;

final class Response implements ResponseInterface
{
    private array $data;
    private int $status;

    public function send(string $data, int $status = 200): void
    {
        http_response_code($status);
        echo $data;
        exit;
    }

    public function json(array $data, int $status = 200): void
    {
        http_response_code($status);
        header("Content-Type: application/json");
        echo json_encode($data, JSON_PRETTY_PRINT);
        exit;
    }
}
