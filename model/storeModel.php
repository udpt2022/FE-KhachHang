<?php
require_once("./../service/curl.php");
class StoreModel{
    public $_id; public $name; public $phone; public $email; public $password; 
    public $active; public $dayStart; public $timeOpen; public $timeClose;
    public $productCategory; public $logo; public $agreeTerm; public $area; 
    public $province; public $district; public $ward; public $address; 
    public $longitude; public $latitude;

    function __constructor(){
        $this->_id="";  $this->name="";  $this->phone="";  $this->email="";  $this->password="";  
        $this->active="";  $this->dayStart="";  $this->timeOpen="";  $this->timeClose=""; 
        $this->productCategory="";  $this->logo="";  $this->agreeTerm="";  $this->area="";  
        $this->province="";  $this->district="";  $this->ward="";  $this->address="";  
        $this->longitude="";  $this->latitude=""; 
    }

    public static function getStoreInfo($_id=null){
        $url = "http://localhost:3000/api/store/$_id"; //?fields=name&fields=_id
        $result = CallAPI($url);
        $result->dayStart = rtrim($result->dayStart, "Z");
        return $result;
    }
    /*
    public static function advancedSearch($playerName, $playerPosition, $playerNumber, $playerNationality, $playerClub){
        dbconnect::connect();
        $query = "SELECT PlayerID, FullName, Position, Nationality, Number, ClubName "
         ."FROM player left JOIN club ON player.ClubID = club.ClubID where ";
        $whereArray = array();
        $whereArrLen = 0;
        if($playerName != "")
            $whereArray[] = "player.FullName like '%$playerName%'";
        if($playerPosition != "")
            $whereArray[] = "player.Position like '%$playerPosition%' ";
        if($playerNumber != "")
            $whereArray[] = "player.Number like '%$playerNumber%' ";
        if($playerNationality != "")
            $whereArray[] = "player.Nationality like '%$playerNationality%' ";
        if($playerClub != "")
            $whereArray[] = "club.ClubName like '%$playerClub%'";
            
        $whereArrLen = count($whereArray);
        for($i = 0; $i < $whereArrLen; $i++){
            if($i == 0)
                $query .= $whereArray[$i];
            else
                $query .= " and ".$whereArray[$i];
        }
    
        $result = dbconnect::$conn->query($query);
        $listAllPlayer = array();
        if ($result) 
        {            
            foreach ($result as $row) {
                $player = new PlayerModel();
                $player->PlayerID = $row["PlayerID"];
                $player->FullName = $row["FullName"];
                $player->Position = $row["Position"];
                $player->Nationality = $row["Nationality"];
                $player->Number=$row["Number"];
                $player->ClubName=$row["ClubName"];            
                $listAllPlayer[] = $player;
            }
        }
        dbconnect::disconnect();
        return $listAllPlayer;
    }

    public static function createPlayer( $playerName, $playerPosition, $playerNumber, 
        $playerNationality, $playerClubID, $playerDOB){
        dbconnect::connect();
        $getClubIDQuery = "SELECT count(ClubID) FROM club where ClubID = '$playerClubID'";
        $result = dbconnect::$conn->query($getClubIDQuery);
        $row = $result->fetch_assoc();
        if($row["count(ClubID)"] == 0){
            dbconnect::disconnect();
            echo "<h3>Club is not exist! Please check again!</h3>";
            return false;
        }
        
        $getMaxIDPlayerQuery = "SELECT MAX(PlayerID) as maxID FROM player";
        $result = dbconnect::$conn->query($getMaxIDPlayerQuery);
        $row = $result->fetch_assoc();
        $maxID = $row["maxID"];
        $maxID++;
    
        $query = "INSERT INTO player(PlayerID, FullName, Position, 
            Number, Nationality, ClubID, DOB) VALUES ($maxID, '$playerName', '$playerPosition', '$playerNumber', 
            '$playerNationality', '$playerClubID', '$playerDOB')";
        $result = dbconnect::$conn->query($query);
        dbconnect::disconnect();
        return $result;
    }

    public static function updatePlayer($playerID, $playerName, $playerPosition, $playerNumber, 
        $playerNationality, $playerClubID, $playerDOB){
        dbconnect::connect();
        $getClubIDQuery = "SELECT count(ClubID) FROM club where ClubID = $playerClubID";
        $result = dbconnect::$conn->query($getClubIDQuery);
        if(!$result){
            dbconnect::disconnect();
            echo "<h3>Club ID is not exist! Please check again!</h3>";
            return false;
        }
        $row = $result->fetch_assoc();
        if($row["count(ClubID)"] == 0){
            dbconnect::disconnect();
            echo "<h3>Club ID is not exist! Please check again!</h3>";
            return false;
        }
        
        $query = "UPDATE player SET FullName = '$playerName', Position = '$playerPosition',  
            Number = '$playerNumber', Nationality='$playerNationality', ClubID='$playerClubID', DOB='$playerDOB'
            where PlayerID= $playerID";
        $result=dbconnect::$conn->query($query);
        dbconnect::disconnect();
        return true;
    }

    public static function deletePlayer($playerID){
        try{
            dbconnect::connect();
            $query = "SET FOREIGN_KEY_CHECKS=0;";
            dbconnect::$conn->query($query);
            $query = "DELETE FROM player WHERE PlayerID = $playerID";
            $result = dbconnect::$conn->query($query);
            $query = "SET FOREIGN_KEY_CHECKS=1;";
            dbconnect::$conn->query($query);
            return $result;
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
        finally{
            echo "finally";
            $query = "SET FOREIGN_KEY_CHECKS=1";
            dbconnect::$conn->query($query);
            dbconnect::disconnect();
        }
    }*/
}
?>