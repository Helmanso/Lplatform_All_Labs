<?php

function data_get($id)
{
class MYDB extends SQLite3
{
    function __construct()
    {
        $this->open("Database.db");
    }
}
$db = new MYDB();
#$result = $db->query("SELECT * FROM news WHERE id='$id'");

$result = $db->prepare('SELECT * FROM news WHERE id = ?');
$result->bindValue(1, $id);
$result = $result->execute();

return ($result = $result->fetchArray());
}

?>