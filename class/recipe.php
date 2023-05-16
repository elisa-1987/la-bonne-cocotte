<?php
class User
{
    private $recipeId;
    private $userId;
    private $varchar;
    private $name;
    private $description;
    private $picture;
    private $preparationTime;
    private $cookingTime;
    private $numberOfServings;
    private $publicationDate;

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
public function getRecipeId()
{
    return $this->recipeId;
}
public function getUserId()
{
    return $this->userId;
}
public function getVarchar()
{
    return $this->varchar;
}
public function getName()
{
    return $this->name;
}
public function getDescription()
{
    return $this->description;
}
public function getPicture()
{
    return $this->picture;
}
public function getPreparationTime()
{
    return $this->preparationTime;
}
public function getCookingTime()
{
    return $this->cookingTime;
}
public function getNumberOfServings()
{
    return $this->numberOfServings;
}
public function getPublicationDate()
{
    return $this->publicationDate;
}


 //SETTERS
 public function setRecipeId(int $recipeId)
 {
     $this->recipeId = $recipeId;
 }
 public function setUserId(int $userId)
 {
     $this->userId = $userId;
 }
 public function setName(int $name)
 {
     $this->name = $name;
 }

 public function setDescription(int $description)
 {
     $this->description = $description;
 }
 public function setPicture(int $picture)
 {
     $this->picture = $picture;
 }
 public function setPreparationTime(int $preparationTime)
 {
     $this->preparationTime = $preparationTime;
 }
 public function setCookingTime(int $cookingTime)
 {
     $this->cookingTime = $cookingTime;
 }
 public function setNumberOfServings(int $numberOfServings)
 {
     $this->numberOfServings = $numberOfServings;
 }
 public function setPublicationDate(int $publicationDate)
 {
     $this->publicationDate = $publicationDate;
      
 }
}