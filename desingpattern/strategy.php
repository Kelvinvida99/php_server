<?php

interface IStragegy {
    public function get(): array;
}

class ArrayStrategy implements IStragegy {
    private array $data = 
        ["Titulo1","Titulo2","Titulo3"];

    public function get(): array {
        return $this->data;
    }
}

class UrlStrategy implements IStragegy {
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function get(): array {
        $content = file_get_contents($this->url);
        $data = json_decode($content, true);
        return array_map(fn($item) => $item["title"], $data);
    }
}

class InfoPrinter {
    private IStragegy $strategy;

    public function __construct(IStragegy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function print() {
        $content = $this->strategy->get();
        foreach($content as $item){
            echo $item . "<br>";
        }
    }
}



$arrayStrategy = new ArrayStrategy();
$urlStrategy = new UrlStrategy("https://jsonplaceholder.typicode.com/todos");
$infoPrinter = new InfoPrinter($urlStrategy);
$infoPrinter->print();