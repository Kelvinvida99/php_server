<?php

class User{
    public string $name;
    private string $email;
    private string $password;


    public function __construct(string $name, string $email, string $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function __serialize(): array
    {
        return [
            'name' => strtoupper($this->name),
            'email' => $this->email
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = $data['password'] = "newPass";
    }
}

$user = new User("Pedro", "kelvin@gmail.com", "pass123");
$s = serialize($user);

echo $s."<br><br>";

$obj = unserialize($s);
//print_r($obj);
echo $obj->name;