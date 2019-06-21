<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Controller;
use App\Models\registros;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->model = new registros();
    }

    public function guardar()
     { 
        
        //$otro=$_POST['otroLenguaje'];
        //if(empty($otro)){
         $array['nombre']=$_POST['nombre'];
      $array['email']=$_POST['email'];
        $array['primerNota']=$_POST['primerNota'];
        $array['segundaNota']=$_POST['segundaNota'];
        $array['tercerNota']=$_POST['tercerNota'];
       
            $this->model->guardar($array);
       // $this->model->insert($array);
        /*} else{ 
            $array['nombre']=$_POST['nombre'];
      $array['email']=$_POST['email'];
        $array['apellido']=$_POST['apellido'];
$array['nombreLenguaje']=$_POST['otroLenguaje'];
          
*/      
       
        
            //$this->model->guardarOtro($otro);
       // $this->model->guardar($array);
            //$this->model->insert($array);
         //return view('index', compact('todosLenguajes')); 
    return view('index');
    
    }
     
         
 
    
     
     
    
    /**
     * Show all users.
     */
    public function home()
    {
        //$todosLenguajes = $this->model->get();
       
        return view('index');
    }

    /**
     * Store a new user in the database.
     */
    public function store()
    {
        $user = [
            'name' => $_POST['name']
        ];
        $this->model->insert($user);
        return redirect('users');
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        $company = 'Laracasts';

        return view('about', ['company' => $company]);
    }

    /**
     * Show the contact page.
     */
    public function contact()
    {
        return view('contact');
    }

public function notas(){
    $misDatos=$this->model->getNotas();

    return view('notas',compact('misDatos'));
}



}
