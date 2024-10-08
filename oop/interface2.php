<?php

interface GetInfo {
    public function getInfo(): string;
}

class Address implements GetInfo {
    protected $address;

    public function __construct($address)
    {
        $this->address = $address;
    }

    public function getInfo(): string {
        return $this->address;
    }
}

function printInfo(GetInfo $site){
    echo $site->getInfo();
}

class WebSite implements GetInfo {
    protected $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getInfo(): string
    {
        return file_get_contents($this->url);
    }
}

$address = new Address('Calle 123');
$website = new WebSite("https://hdeleon.net");
printInfo($website);