<?php
class User
{
    private $favoriteId;
    private $userId;
    private $recipeId;
    

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
    public function getFavoriteId()
    {
        return $this->favoriteId;
    }
    public function getUserId()
    {
        return $this->userId;
    }
    public function getRecipeId()
    {
        return $this->recipeId;
    }
    

    //SETTERS
    public function setFavoriteId(int $favoriteId)
    {
        $this->favoriteId = $favoriteId;
    }
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
    }
    public function setRecipeId(int $recipeId)
    {
        $this->recipeId = $recipeId;
    }
   
}
