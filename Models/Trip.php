<?php
class Trip extends Model
{
    private $tablename = 'trips';
    public function create($data)
    {
        $sql = "INSERT INTO trips (fullAddress, userId, costs, history , suggestion ,culture , transportation , security , description, updated_at) 
        VALUES (:fullAddress, :userId, :costs , :history , :suggestion , :culture, :transportation , :security , :description , :updated_at)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'fullAddress' => $data['fullAddress'],
            'userId' => $data['userId'],
            'costs' => $data['costs'],
            'history' => $data['history'],
            'suggestion' => $data['suggestion'],
            'culture' => $data['culture'],
            'transportation' => $data['transportation'],
            'security' => $data['security'],
            'description' => $data['description'],
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }


    public function showAlltrips()
    {
        $sql = "SELECT * FROM trips";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function getTrip($id){
        $sql = "SELECT * FROM trips WHERE id = ?";
        $req = Database::getBdd()->prepare($sql);
        $req->execute([$id]);
        return $req->fetch();
    }

    public function getTripsUser($username){
        $sql = "SELECT * FROM trips WHERE userId in (
            SELECT id FROM users WHERE username = ?
        )";
        $req = Database::getBdd()->prepare($sql);
        $req->execute([$username]);
        return $req->fetch();
    }

    public function edit($data)
    {
        $sql = "UPDATE trips SET
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
        $sql = 'DELETE FROM trips WHERE id = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }


    public function createTable(){
        $sql = "CREATE TABLE trips(
            id int primary key NOT NULL AUTO_INCREMENT,
            fullAddress varchar(255) not null,
            userId int not null,
            costs varchar(255),
            history varchar(255),
            suggestion varchar(255),
            culture varchar(255),
            transportation varchar(255),
            security varchar(255),
            description text,
            updated_at DateTime,
            FOREIGN KEY (userId) REFERENCES users(id)
        )";

        $req = Database::getBdd()->prepare($sql);
        return $req->execute();
    }
}
?>