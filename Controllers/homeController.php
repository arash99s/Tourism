<?php
class homeController extends Controller{
    function index(){
        $xvar = 'salam';
        $this->set(['xvar'=>$xvar]);
        $this->render("index"); // call view
    }

    function show(){
        if(isset($_POST["title"])){
            echo $_POST["title"];
        }
    }
}

?>