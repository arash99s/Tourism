<?php
class User extends Model
{
    private $tablename = 'users';
    public function create($data)
    {
        global $tablename;
        $sql = "INSERT INTO users (username, password, email, firstname , lastname ,age , city , country , avatar, updated_at) 
        VALUES (:username, :password, :email , :firstname , :lastname , :age, :city , :country , :avatar , :updated_at)";

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

    public function login($username ){
        $db_pass = $this->showUser($username);
        if($db_pass)    return $db_pass['password'];
        return $db_pass;
    }

    public function showUser($username)
    {
        $sql = "SELECT * FROM users WHERE username = ?";
        $req = Database::getBdd()->prepare($sql);
        $req->execute([$username]);
        return $req->fetch();
    }

    public function showAllUsers()
    {
        $sql = "SELECT * FROM users";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($data)
    {
        $sql = "UPDATE users SET
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

    public function delete($username)
    {
        $sql = 'DELETE FROM users WHERE username = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$username]);
    }


    public function createTable(){
        $sql = "CREATE TABLE users(
            id int primary key NOT NULL AUTO_INCREMENT,
            username varchar(255) not null,
            password varchar(255) not null,
            email varchar(255),
            firstname varchar(255),
            lastname varchar(255),
            age varchar(255),
            city varchar(255),
            country varchar(255),
            avatar varchar(255),
            updated_at DateTime,
            UNIQUE (username)
        )";

        $req = Database::getBdd()->prepare($sql);
        return $req->execute();
    }
}
?>