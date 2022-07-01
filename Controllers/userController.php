<?php
class userController extends Controller{
    
    function __construct() {
        require(ROOT . 'Models/User.php');
      }

    
    function index(){
        // $xvar = 'salam';
        // $this->set(['xvar'=>$xvar]);
        $this->render("test"); // call view
    }

    function show(){
        if(isset($_POST["title"])){
            echo $_POST["title"];
        }
    }

    function panel(){
        $this->render("panel");
    }

    function createUser(){
        $this->render("create");
    }
    function loginUser(){
        $this->render("login");
    }

    function createUserApi(){
        $content = trim(file_get_contents("php://input"));
        $decoded = json_decode($content, true);

        $username = $decoded["username"];
        $password = $decoded["password"];

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

    function logout(){
        session_start();
        session_destroy();
        $this->render("login");
    }
    
    function loginApi(){
        $content = trim(file_get_contents("php://input"));
        $decoded = json_decode($content, true);

        $user= new User();
        $entered_pass="xxx";
        $entered_username = "xxx";

        if(isset($decoded["password"])){
            $entered_pass = $decoded["password"];
        }
        if(isset($decoded["username"])){
            $entered_username = $decoded["username"];
        }

        $db_user = $user->login($entered_username);
        $result = ['status'=>true , 'description'=>''];

        if(empty($db_user)){
            $result['status'] = false;
            $result['description'] = "user does not exist";
        }else if($db_user['password'] == $entered_pass){
            session_start();
            $_SESSION["user"] = $db_user;
            $result['status'] = true;
            $result['description'] = "login sucessful";
        }else{
            $result['status'] = false;
            $result['description'] = "password failed";
        }
        print_r(json_encode($result));
        

    }

    public function updateUser($username){
        $user = new User();
        $user_db = $user->showUser($username);
        if(!$user_db){
            echo "error";
            return;
        }
        foreach ($user_db as $key => $value) {
            if (is_numeric($key))   continue;
            echo $key . "::::" . $value;
            echo "<br>";
        }
    }

    /*
    use this function only one time
    */
    private function createTable(){
        $user = new User();
        print_r($user->createTable());
    }
}

?>