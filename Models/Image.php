<?php
class Image extends Model
{
    private $tablename = 'images';

    public function create($data)
    {
        $sql = "INSERT INTO images (addressPath, tripId, updated_at) 
        VALUES (:addressPath, :tripId, :updated_at)";

        $req = Database::getBdd()->prepare($sql);

        $creation = $req->execute([
            'addressPath' => $data['addressPath'],
            'tripId' => $data['tripId'],
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return $creation;
    }

   

    public function showAllimages()
    {
        $sql = "SELECT * FROM images";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function getImage($id){
        $sql = "SELECT * FROM images WHERE id = ?";
        $req = Database::getBdd()->prepare($sql);
        $req->execute([$id]);
        return $req->fetch();
    }

    public function getImagesTrip($tripId){
        $sql = "SELECT * FROM images WHERE tripId = ?";
        $req = Database::getBdd()->prepare($sql);
        $req->execute([$tripId]);
        return $req->fetchAll();
    }

    public function edit($data)
    {
        $sql = "UPDATE images SET
        password = :password, 
        email = :email ,
        firstname = :firstname ,
        lastname = :lastname ,
        age = :age ,
        city = :city ,
        country = :country ,
        avatar = :avatar ,
        updated_at = :updated_at
        WHERE username = :username";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'username' => $data['username'],
            'password' => $data['password'],
            'email' => $data['email'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'age' => $data['age'],
            'city' => $data['city'],
            'country' => $data['country'],
            'avatar' => $data['avatar'],
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM images WHERE id = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }


    public function createTable(){
        $sql = "CREATE TABLE images(
            id int primary key NOT NULL AUTO_INCREMENT,
            addressPath varchar(255) not null,
            tripId int not null,
            updated_at DateTime,
            FOREIGN KEY (tripId) REFERENCES trips(id)
        )";

        $req = Database::getBdd()->prepare($sql);
        return $req->execute();
    }
}
?>