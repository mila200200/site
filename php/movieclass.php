<?php

class Movie{

    public $movie_title;
    public $category;
    public $actors;
    public $movie_id;

    public function __construct($movie_id=null, $movie_title=null, $category=null, $actors=null ){
        
        $this->movie_id = $movie_id;
        $this->movie_title = $movie_title;
        $this->category = $category;
        $this->actors = $actors;

    }

    //displaying all saved movies
    public static function getAll($userID, mysqli $conn){

        $query = "SELECT * FROM `saved_movies` INNER JOIN `category` ON saved_movies.category=category.category_id WHERE saved_movies.user=$userID";
        return $conn->query($query);

    }

    //displaying all best movies
    public static function getAllBestMovies(mysqli $conn){

        $query = "SELECT * FROM `best_movies` INNER JOIN `category` ON best_movies.movie_category=category.category_id ";
        return $conn->query($query);

    }
    //getting movie by id
    public static function getById($id, mysqli $conn){
        $query = "SELECT * FROM saved_movies WHERE movie_id = '$id'";
        $myObj = array();

        if($msqlObj= $conn->query($query)){
            while($row=$msqlObj->fetch_array(1)){
                $myObj = $row;
            }
        }
        return $myObj;
    }


    public static function deleteById($id,mysqli $conn){
        $query = "DELETE FROM saved_movies WHERE movie_id = '$id'";
        return $conn->query($query);
    }

    public static function insertById($userID, $id, mysqli $conn){

        $query = "SELECT * FROM best_movies WHERE movie_id='$id'";
        $selectedMovie = mysqli_query($conn, $query);
        $row  = mysqli_fetch_array($selectedMovie);
        if(is_array($row)){
            $path = $row['movie_pic']; 
            $id=$row['movie_id'];
            $title = $row['movie_title'];
            $category = $row['movie_category'];
            $actors= $row['actors'];
            $query = "INSERT INTO saved_movies (movie_pic, movie_id, movie_title, category, actors, user) VALUES ('$path','$id','$title','$category','$actors', '$userID')";
            return $conn->query($query);
        }

    }

    public static function getDescription($id, mysqli $conn){

        $query = "SELECT movie_desc FROM best_movies WHERE movie_id='$id'";
        $selectedMovie = mysqli_query($conn, $query);
        $row  = mysqli_fetch_array($selectedMovie);
        if(is_array($row)){
           
            $desc= $row['movie_desc'];
            
            return $desc;
        }

    }

}

?>