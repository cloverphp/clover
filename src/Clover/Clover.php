<?php

declare(strict_types=1);

namespace Clover;

use Clover\Application;

class Clover
{
    private readonly int $port;
    private readonly string $message;
    private object $application;
    private readonly string $path;
    private $body;

    public function __construct()
    {
        $application = new Application();
    }

    public function get($path, $body
    )
    {
        $this->path = $path;
        $this->body = $body;
    }

    public function post(
        string $path,
        callable $body
    )
    {
        $this->path = $path;
        $this->body = $body;
    }

    public function send(){
        //$application->getBody();
    }

    public function run(
        int $port,
        string $msg
    )
    {
        $this->port = $port;
        $this->message = $msg;
        $url = "localhost:{$port}";
        shell_exec("php -S $url");
    }
}
