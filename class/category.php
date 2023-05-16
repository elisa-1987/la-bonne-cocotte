<?php
class User
{
    private $categoryId;
    private $name;
   
    

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
public function getCategoryId()
{
    return $this->categoryId;
}
public function getname()
{
    return $this->name;
}


 //SETTERS
 public function setCategoryId(int $categoryId)
 {
     $this->categoryId = $categoryId;
 }
 public function setName(int $name)
 {
     $this->name = $name;
 }
 
}

