<?php
class User
{
    private $lastname;
    private $firstname;
    private $email;
    private $password;
    private $userId;

    public function __construct(array $datas)
    {
        $this->hydrate($datas);
    }

    private function hydrate(array $datas)
    {
        foreach ($datas as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

//GETTERS//
    public function getUserId()
    {
        return $this->userId;
    }
    public function getLastName()
    {
        return $this->lastname;
    }
    public function getFirstName()
    {
        return $this->firstname;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }

    //SETTERS
    public function setuserId(string $userId)
    {
        $this->userId = $userId;
    }
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function setPassword(int $password)
    {
        $this->password= $password;
    }
}

