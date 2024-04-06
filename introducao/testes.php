<?php

echo "Hello, PHP!\n";

class Entity
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    protected function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

interface Log
{
    public function log($message);
}

class User extends Entity implements Log
{
    private $password;

    public function __construct(string $name, string $password)
    {
        $this->password = $password;
        // $this->setName($name);
        parent::__construct($name);

        $this->log("Usuário construído");
        $usuarioNome = $this->getName();
        $file = file_put_contents("usuario.txt", "Usuario: $usuarioNome, Senha: $this->password");
        if ($file != false) {
            echo "arquivo criado com sucesso!\n";
        } else {
            echo "falha ao criar arquivo!\n";
        }
    }

    public function getPassword()
    {
        return $this->password;
    }

    public static function sayHi()
    {
        echo "hi\n";
    }

    public function log($message)
    {
        echo $message . "\n";
    }
}

$user = new User("italo", "isabele123");

echo "user: " . $user->getName() . "\n";
echo "password: " . $user->getPassword() . "\n";
var_dump($user->getName());

$user->sayHi();
// calling a static method
$user::sayHi();
User::sayHi();

?>
