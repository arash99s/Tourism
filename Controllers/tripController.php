<?php
class tripController extends Controller{
    
    function __construct() {
        require(ROOT . 'Models/Trip.php');
      }

    
    function index(){
        // $xvar = 'salam';
        // $this->set(['xvar'=>$xvar]);
        $this->render("test"); // call view
    }

    function create(){
        $this->render("journey");
    }

    function createTripApi(){
        session_start();
        if (!isset($_SESSION["user"])){
            echo 'user not defined';
            return;
        }

        

        if(isset($_POST['fullAddress'])) $fullAddress=$_POST['fullAddress']; else $fullAddress='';
        if(isset($_POST['costs'])) $costs=$_POST['costs']; else $costs='';
        if(isset($_POST['history'])) $history=$_POST['history']; else $history='';
        if(isset($_POST['suggestion'])) $suggestion=$_POST['suggestion']; else $suggestion='';
        if(isset($_POST['culture'])) $culture=$_POST['culture']; else $culture='';
        if(isset($_POST['transportation'])) $transportation=$_POST['transportation']; else $transportation='';
        if(isset($_POST['security'])) $security=$_POST['security']; else $security='';
        if(isset($_POST['description'])) $description=$_POST['description']; else $description='';

        print_r($_POST);
        echo "<br>";
        print_r($_FILES);
        echo "<br>";

        $result = ['status'=>true , 'description'=>''];
        $trip_model = new Trip();


        $data = [
            'fullAddress'=>$fullAddress,
            'userId'=>$_SESSION['user']['id'],
            'costs'=>$costs,
            'history'=>$history,
            'suggestion'=>$suggestion,
            'culture'=>$culture,
            'transportation'=>$transportation,
            'security'=>$security,
            'description'=>$description,
        ];

        $creation = $trip_model->create($data) ; // zero or trip_id
        if($creation){
            $result['status'] = true;
            $result['description'] = "trip created";
            print_r($creation);
        }else{
            $result['status'] = false;
            $result['description'] = "creation failed with unknown reasons";
            print_r(json_encode($result));
        }
        
    }

    /*
    use this function only one time
    */
    private function createTable(){
        $trip_model = new Trip();
        print_r($trip_model->createTable());
    }
}

?>