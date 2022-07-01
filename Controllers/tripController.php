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
        $content = trim(file_get_contents("php://input"));
        $decoded = json_decode($content, true);

        $result = ['status'=>true , 'description'=>''];
        $user= new User();

        if (!empty($user->showUser($username))){
            $result['status'] = false;
            $result['description'] = "user already exist";
            print_r(json_encode($result)); 
            return;
        }

        $data = [
            'username'=>$username,
            'password'=>$password,
            'email'=>$decoded["email"],
            'firstname'=>$decoded["firstname"],
            'lastname'=>'',
            'age'=>$decoded["age"],
            'city'=>$decoded["city"],
            'country'=>$decoded["country"],
            'avatar'=>"/Tourism/avatars/default.png",
        ];

        if($user->create($data)){
            $result['status'] = true;
            $result['description'] = "user created";
            print_r(json_encode($result));
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