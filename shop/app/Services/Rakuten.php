<?php

namespace RakutenShop\Services;

//use RakutenRws_Client;
class Rakuten {

    protected $client;

    public function __constructor(){
        $this->client = new RakutenRws_Client();
        // Set the application ID (developer ID)
        $this->client->setApplicationId(env("APP_RAKUTEN_API"));
    }

    public function getAllGenres($maxLevel=3){
        return $this->getRecursiveChildren(0, 0, $maxLevel);
    }

    function getRecursiveChildren($genreId, $currentLevel, $maxLevel)
    {
        $result = array();
        // If we reach to max level of menu tree, stop to get chilren
        if($currentLevel >= $maxLevel) return $result;
        // First of all, we will get all chilren of current node
        $children = $this->getChildGenres($genreId);
        // Push it into result
        array_push($result, $children);
        // Then, we go deeply inside of the menu tree
        foreach($children as $child){
            $grandChildren = $this->getRecursiveChildren($child["genre_id"],$currentLevel+1, $maxLevel);
            array_push($result, $grandChildren);
        }
        return $result;
    }

    function getChildGenres($child_genre_id){
        $result = array();
        // To use Rakuten Ichiba Genre Search API specify 'IchibaGenreSearch'.
        // Here child_genre_id is set to 0 as an example.
        $query = array('genreId' => $child_genre_id);
        $response = $this->client->execute('IchibaGenreSearch', $query);
        // You can use the isOk() method to check the validity of the response.
        if ($response->isOk()) {
            $current = $response["current"];
            foreach ($response['children'] as $childGenre) {
                //process to convert output data to our format
                $genre = $childGenre['child'];
                $output = array();
                $output["genre_id"] = $genre["genreId"];
                $output["genre_name"] = $genre["genreName"];
                $output["genre_level"] = $genre["genreLevel"];
                $output["parent_id"] = $current["genreId"];
                array_push($result, $output);
            }
        }else{
            // You can retrieve response messages by using getMessage()
            echo 'Error:'.$response->getMessage();
            exit;
        }
        return $result;
    }
}