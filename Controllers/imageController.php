<?php
class imageController extends Controller{
    function __construct() {
        require(ROOT . 'Models/Image.php');
      }

    public function createImages($tripId, $userId , $images){
        $index = 0;
        foreach ($images as $item) {
            if ($item["error"] > 0) continue;
            $newPath = ROOT.'avatars/img'.$userId.$tripId.$index.$item['name'];
            move_uploaded_file($item["tmp_name"], $newPath);
            $data = [
                'addressPath'=>$newPath,
                'tripId'=>$tripId,
            ];

            $image_model = new Image();
            $image_model->create($data);
            $index += 1;
        }

        return true;
        
    }

    public function getImagesTrip($tripId){
        $image_model = new Image();
        $result = $image_model->getImagesTrip($tripId);
        if (count($result) == 0){
            $result[0]['addressPath'] = '/Tourism/avatars/placeholder.png';
        }
        return $result;
    }

    /*
    use this function only one time
    */
    private function createTable(){
        $image_model = new Image();
        print_r($image_model->createTable());
    }
}


?>