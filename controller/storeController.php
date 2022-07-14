<?php
require_once "./../model/storeModel.php";
$cssRefPath = "./../";

class StoreController{
    //private $cssRefPath = "./../";

    public function getStoreInfo(){
        $_id="3bc0a610-0262-11ed-b589-a44cc8191af3";
        $result = StoreModel::getStoreInfo($_id);
        global $cssRefPath;
        
        $CONTENT_PATH = "./view/infoView.phtml";
        require_once($cssRefPath . "template/template.phtml");
    }

    /*
    public function advancedSearch(){
        $playerName="";
        $playerPosition="";
        $playerNumber="";
        $playerNationality="";
        $playerClub="";

        if(isset($_GET["playerName"]) and $_GET["playerName"] != ""){
            $playerName = urldecode($_GET["playerName"]);
        }
        if(isset($_GET["playerPosition"]) and $_GET["playerPosition"] != ""){
            $playerPosition = urldecode($_GET["playerPosition"]);
        }
        if(isset($_GET["playerNumber"]) and $_GET["playerNumber"] != ""){
            $playerNumber = urldecode($_GET["playerNumber"]);
        }
        if(isset($_GET["playerNationality"]) and $_GET["playerNationality"] != ""){
            $playerNationality = urldecode($_GET["playerNationality"]);
        }
        if(isset($_GET["playerClub"]) and $_GET["playerClub"] != ""){
            $playerClub = urldecode($_GET["playerClub"]);
        }

        $listPlayer = PlayerModel::advancedSearch($playerName, $playerPosition, $playerNumber, $playerNationality, $playerClub);
        if($listPlayer == -1){
            echo "Please enter a key search. Don't leave it blank. Controller!";
            return;
        }
        if($listPlayer == null){
            echo "No result found.";
            return;
        }
        include "./../view/viewSearchResult.phtml";
    }   
    public function addPlayer(){
        $playerName="";
        $playerPosition="";
        $playerNumber="";
        $playerNationality="";
        $playerDOB ="";
        $playerClubID="";

        if(isset($_POST["playerName"]) and $_POST["playerName"] != ""){
            $playerName = urldecode($_POST["playerName"]);
        }
        if(isset($_POST["playerPosition"]) and $_POST["playerPosition"] != ""){
            $playerPosition = urldecode($_POST["playerPosition"]);
        }
        if(isset($_POST["playerNumber"]) and $_POST["playerNumber"] != ""){
            $playerNumber = urldecode($_POST["playerNumber"]);
        }
        if(isset($_POST["playerNationality"]) and $_POST["playerNationality"] != ""){
            $playerNationality = urldecode($_POST["playerNationality"]);
        }
        if(isset($_POST["playerClubID"]) and $_POST["playerClubID"] != ""){
            $playerClubID = urldecode($_POST["playerClubID"]);
        }
        if(isset($_POST["playerDOB"]) and $_POST["playerDOB"] != ""){
            $playerDOB = urldecode($_POST["playerDOB"]);
        }

        $result=true;
        $result = PlayerModel::createPlayer($playerName, $playerPosition, $playerNumber, 
            $playerNationality, $playerClubID, $playerDOB);
        if($result==true){
            echo "<script>alert('Add player successfully!');</script>";
        }
        else{
            echo "<script>alert('Add player failed!');</script>";
        }
        require_once "./../model/clubModel.php";
        $this->getAllClub();
    }
    public function getAllClub(){
        require_once "./../model/clubModel.php";
        $clubs = ClubModel::getAllClub();
        $cssRePath = "./../";
        $CSS_PATH = "./../template/index/indexCSS.php";
        $HEADER_PATH = "./../public/html/header.phtml";
        $FOOTER_PATH = "./../public/html/footer.phtml";

        $CONTENT_PATH = "./../view/addPlayer.phtml";
        require_once("./../template/template.phtml");
    } 
    public function modifyPlayer(){
        $playerID = "";
        $playerName="";
        $playerPosition="";
        $playerNumber="";
        $playerNationality="";
        $playerDOB ="";
        $playerClubID="";

        if(isset($_POST["playerID"]) and $_POST["playerID"] != ""){
            $playerID = urldecode($_POST["playerID"]);
        }
        if(isset($_POST["playerName"]) and $_POST["playerName"] != ""){
            $playerName = urldecode($_POST["playerName"]);
        }
        if(isset($_POST["playerPosition"]) and $_POST["playerPosition"] != ""){
            $playerPosition = urldecode($_POST["playerPosition"]);
        }
        if(isset($_POST["playerNumber"]) and $_POST["playerNumber"] != ""){
            $playerNumber = urldecode($_POST["playerNumber"]);
        }
        if(isset($_POST["playerNationality"]) and $_POST["playerNationality"] != ""){
            $playerNationality = urldecode($_POST["playerNationality"]);
        }
        if(isset($_POST["playerClubID"]) and $_POST["playerClubID"] != ""){
            $playerClubID = urldecode($_POST["playerClubID"]);
        }
        if(isset($_POST["playerDOB"]) and $_POST["playerDOB"] != ""){
            $playerDOB = urldecode($_POST["playerDOB"]);
        }

        $result=true;
        $result = PlayerModel::updatePlayer($playerID, $playerName, $playerPosition, $playerNumber, 
            $playerNationality, $playerClubID, $playerDOB);
        if($result==true){
            echo "<script>alert('Modify player successfully!');</script>";
        }
        else{
            echo "<script>alert('Modify player failed!');</script>";
        }
    }
    */
    // public function viewModifyPlayer(){
    //     require_once "./../model/clubModel.php";
    //     $clubs = ClubModel::getAllClub();
    //     $cssRePath = "./../";
    //     $CSS_PATH = "./../template/index/indexCSS.php";
    //     $HEADER_PATH = "./../public/html/header.phtml";
    //     $FOOTER_PATH = "./../public/html/footer.phtml";

    //     $CONTENT_PATH = "./../view/modifyPlayer.phtml";
    //     require_once("./../template/template.phtml");
    // }
} 