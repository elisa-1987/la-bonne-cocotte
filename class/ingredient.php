<?php
class User
{
    private $ingredientId;
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
public function getIngredientId()
{
    return $this->ingredientId;
}
public function getName()
{
    return $this->name;
}

 //SETTERS
 public function setIngredientId(int $ingredientId)
 {
     $this->ingredientId = $ingredientId;
 }
 public function setName(string $name)
 {
     $this->name = $name;
 }

}




