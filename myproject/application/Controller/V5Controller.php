<?php
namespace Mini\Controller;

use Mini\Model\Mynd;

class V5Controller
{
    public function index()//list af myndum
    {
        $Mynd = new Mynd();
        $fjoldi_mynda = $Mynd->countID();
        $pics = $Mynd->listPics();

        require APP . 'view/_Myndatemplates/header.php';
        require APP . 'view/myndir/index.php';
        require APP . 'view/_Myndatemplates/footer.php';
    }


    public function userList()//list users
    {
        $Mynd = new Mynd();
        $MyUsers = $Mynd->listUsers();

        require APP . 'view/_Myndatemplates/header.php';
        require APP . 'view/myndir/users.php';
        require APP . 'view/_Myndatemplates/footer.php';
    }

    public function aUser($id)//a user
    {
        if (isset($id)) {
        $Mynd = new Mynd();
        $User = $Mynd->UserById($id);
        
        require APP . 'view/_Myndatemplates/header.php';
        require APP . 'view/myndir/user.php';
        require APP . 'view/_Myndatemplates/footer.php';
        }
        else{
            userList();
        }
    }

    public function aPic($id)// a picture
    {
        if (isset($id)) {
            $Mynd = new Mynd();
        
            $Pic = $Mynd->PicByID($id);
        

        require APP . 'view/_Myndatemplates/header.php';
        require APP . 'view/myndir/pic.php';
        require APP . 'view/_Myndatemplates/footer.php';
        }
        else{
            index();
        }
    }

    public function searchAPic()//search
    {

        if (isset($_POST['id'])) {
            $input = $_POST['id'];
            $Mynd = new Mynd();
            $Pic = $Mynd->searchPic($input);
        

        require APP . 'view/_Myndatemplates/header.php';
        require APP . 'view/myndir/search.php';
        require APP . 'view/_Myndatemplates/footer.php';
        }
        else{
            index();
        }
    }
}