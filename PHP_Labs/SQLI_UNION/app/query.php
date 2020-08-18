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
$result = $db->query("SELECT * FROM news WHERE id='$id'");

return ($result = $result->fetchArray());
}

?>