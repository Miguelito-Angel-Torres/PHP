<?php
// Controller es la parte que esta orientada hacia al Modelo
// Enrutador es la parte que esta orientada hacia la Vista
class Router{
    public $route;
    public function __construct($route){
        // isset si existe o esta definida la variable
        //http://php.net/manual/es/function.session-start.php
        $session_options = array(
                'use_only_cookies' => 1,
                'auto_start' => 1,
                'read_and_close' => true      
        );
        if(!isset($_SESSION)){
            session_start($session_options);
        }
        if(!isset($_SESSION['ok'])){
            $_SESSION['ok'] = false;
        }

        
        if($_SESSION['ok']){
            
            //Aqui va toda la programacion de la webapp
            $this->route = isset($_GET['r'])? $_GET['r']:'home';
            $login_form = new ViewController();
            //$login_form->load_view('movieseries');
            switch($this->route){
                case 'home':
                    //$login_form->load_view('home');
                    break;
                case 'movieseries':
                    
                    //$login_form->load_view('movieseries');
                    if(!isset($_POST['r'])){$login_form->load_view('movieserie');
                    }else if($_POST['r'] == 'movieserie-add'){$login_form->load_view('movieserie-add');
                    }else if($_POST['r'] == 'movieserie-edit'){$login_form->load_view('movieserie-edit');
                    }else if($_POST['r'] == 'movieserie-delete'){$login_form->load_view('movieserie-delete');}
                    else if($_POST['r'] == 'movieserie-show'){$login_form->load_view('movieserie-show');}
                    break;
                case 'usuarios':
                    if(!isset($_POST['r'])){$login_form->load_view('users');
                    }else if($_POST['r'] == 'users-add'){$login_form->load_view('users-add');
                    }else if($_POST['r'] == 'users-edit'){$login_form->load_view('users-edit');
                    }else if($_POST['r'] == 'users-delete'){$login_form->load_view('users-delete');}
                    break;
                case 'status':
                    if(!isset($_POST['r'])){$login_form->load_view('status');
                    }else if($_POST['r'] == 'status-add'){$login_form->load_view('status-add');
                    }else if($_POST['r'] == 'status-edit'){$login_form->load_view('status-edit');
                    }else if($_POST['r'] == 'status-delete'){$login_form->load_view('status-delete');}
                    break;
                case 'salir':
                    $user_session = new SessionController();
                    $user_session->logout();
                    break;
                default:
                    $login_form->load_view('error404');
                    break;
                }

            
        }else{
            if(!isset($_POST['user_']) && !isset($_POST['pass'])){
                // Mostrar un formulario de autentificacion
                $login_form = new ViewController();
                $login_form->load_view('login');
            }else{
                $user_session = new SessionController();
                // Debe returname algo
                $session = $user_session->login($_POST['user_'],$_POST['pass']);
                if(empty($session)){
                    echo 'El usuario y el password son incorrecta';
                    // Indicar que nuevamente vaya al formulario
                    $login_form = new ViewController();
                    $login_form->load_view('login');
                    header ('Location: ./?error=El usuario'.$_POST['user_'].' y el password no coinciden');

                }else{

                    $_SESSION['ok'] = true;
                    //var_dump($session);
                    
                    foreach ($session as $row) {
                        $_SESSION['user_'] = $row['user_'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['name_'] = $row['name_'];
                        $_SESSION['birthday'] = $row['birthday'];
                        $_SESSION['pass'] = $row['pass'];
                        $_SESSION['role_'] = $row['role_'];
                        

                    }

                    header('Location: ./');

                }
            }
            
        }

        
    }

    public function __destruct(){

    }
}