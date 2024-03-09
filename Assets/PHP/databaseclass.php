<?php

class databaseclass
{
    private PDO $pdouser;
    private PDO $pdouploads;

    public function __construct()
    {
        $path = dirname(__FILE__);
        $this->pdouser = new PDO('sqlite:'.$path.'/../../dblog.sqlite');
        $this->pdouploads = new PDO('sqlite:'.$path.'/../../uploads.sqlite');
    }

    public function getUsers(): array
    {
        return $this->pdouser->query('SELECT * FROM User')->fetchAll();
    }

    public function getUploads(): array
    {
        return $this->pdouploads->query('SELECT * FROM Uploads')->fetchAll();
    }

    public function getSomeUploads(): array
    {
        return $this->pdouploads->query('SELECT * FROM Uploads ORDER BY image_id DESC LIMIT 4 OFFSET 0')->fetchAll();
    }

    public function getIDUploads($id): array
    {
        return $this->pdouploads->query("SELECT title,Image_URL FROM Uploads where image_id=$id")->fetch();
    }


}
