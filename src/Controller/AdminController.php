<?php


namespace App\Controller;


class AdminController extends Controller
{

    private $ModelV;

    public function __construct(){

        parent::__construct();
        $this->Model = $this->Util->getModel('Post');
        $this->ModelV = $this->Util->getModel('Admin');

    }

    public function login(){

        if ($this->isLogged()){

            header('Location: admin.php');

        }

        if (isset($_POST['email'], $_POST['password'])){

            if ($this->ModelV->trylogin($_POST['email'], $_POST['password'])){

                $_SESSION['user']['email'] = $_POST['email'];
                $_SESSION['user']['pseudo'] = $_POST['pseudo'];
                header('Location: admin.php');
                exit();

            }else{

                header('Location: index.php');

            }

        }

        $this->Util->getView('login');
    }

    public function logout(){

        if (!$this->isLogged()){

            header('Location: index.php');
            exit;

        }

        if (!empty($_SESSION))
        {
            $_SESSION = array();
            session_unset();
            session_destroy();
        }

        header('Location: index.php');
        exit;
    }

    public function Update($id, $view){

        if (!$this->isLogged())
        {

           header('Location: index.php');
        }
            if (isset($_POST['update_btn'])){

                if (isset($_POST['titre'], $_POST['contenu'], $_POST['tag'])){

                    $data = array('id' => $id ,'nom' => $_POST['titre'], 'contenu' => $_POST['contenu'], 'tag' => $_POST['tag']);

                    if($this->ModelV->update($data))

                        $this->Util->successMessage = 'Le Post a été modifié avec succés !';

                    else

                        $this->Util->errorMessage = 'Une erreur est survenue veuillez réessayer !';

                }else{

                    $this->Util->errorMessage = 'Veuillez renseigner tous les champs !';
                }

            }

        $this->Util->post = $this->ModelV->getOne($id);
        $this->Util->getView($view);
    }

    public function Delete($id, $view){

        if(!$this->isLogged()) {

            header('Location: index.php');

        }
            if ($this->ModelV->delete($id)){

                $this->Util->successMessage = "L'article a été modifié avec succés";

            }else{

                $this->Util->errorMessage = 'Une erreur est survenue veullez réessayer';

            }

        header('Location: admin.php');
    }

    public function Create($view){

        if (!$this->isLogged()){

            header('Location: index.php');

        }

        if (isset($_POST['create'])){

            if (!empty($_POST['titre'] && !empty($_POST['contenu']) && !empty($_POST['tag']))) {

                $contenu = array('nom' => $_POST['titre'], 'contenu' => $_POST['contenu'], 'tag' => $_POST['tag']);

                if ($this->ModelV->create($contenu))

                    $this->Util->successMessage = "L'article a été crée avec succés !";

                 else

                    $this->Util->errorMessage = "Une erreur est survenue veuillez réessayer";



            }else{

                $this->Util->errorMessage = "Veuillez renseigner tous les champs";

            }

        }

        $this->Util->getView($view);
    }


}