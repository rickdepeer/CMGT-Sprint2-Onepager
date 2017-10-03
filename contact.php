<?php
/**
 * Created by PhpStorm.
 * User: rick_
 * Date: 03/10/2017
 * Time: 12:44
 */

<<<<<<< HEAD
/**
 * Class db
 */
class Database
{
    public $mysqli;

    /** db constructor.
     *      @param string $db_hostname
     *      @param string $db_username
     *      @param string $db_password
     *      @param string $db_database
     */
    function __construct($db_hostname = 'localhost', $db_username = 'root', $db_password = '', $db_database = 'sv')
    {
        $this->mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
    }
}

if(!empty($_POST['submit']))
{

    $db = new Database();
    $mysqli = $db->mysqli;

    $name =         (!empty($_POST['name']) ? $_POST['name'] : '');
    $email =        (!empty($_POST['email']) ? $_POST['email'] : '');
    $message =      (!empty($_POST['message']) ? $_POST['message'] : '');

    if(!empty($name) && !empty($email) && !empty($message))
    {
        $sql = "INSERT INTO contact_messages SET name = '{$name}', email = '{$email}', message = '{$message}'";
        $result = mysqli_query($mysqli, $sql);

        if($result)
        {
            header("Location: index.php#contact?message=succes");
        }
        else
        {
            header("Location: index.php#contact?message=sql_error");
        }
    }
    else
    {
        header("Location: index.php#contact?message=var_error");
    }
}
else
{
    header("Location: index.php");
}

=======

/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
>>>>>>> 1cb8f3e48344862f10cc0e5bd31c0f7d0c74aa27
