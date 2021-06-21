<?php
require_once "model/User.php";
class ProduitController
{

	function index()
	{
		$user=User::getAll();
		// On envoie le code réponse 200 OK
        http_response_code(200);

        // On encode en json et on envoie
        echo json_encode($user);
	}

	function add()
	{

		// On récupère les informations envoyées
    	$data = json_decode(file_get_contents("php://input"));

    	$user=new User();
    

		if(!empty($data->cin)&&!empty($data->nom)&&!empty($data->prenom)&&!empty($data->age)&!empty($data->email)&!empty($data->telephone))
		{
			$user->cin=$data->cin;
			$user->nom=$data->nom;
			$user->prenom=$data->prenom;
			$user->age=$data->age;
			$user->email=$data->email;
			$user->telephone=$data->telephone;
			$value=$user->insert();
			 if($value)
			{
            // Ici la création a fonctionné
            // On envoie un code 201
            http_response_code(201);
            echo json_encode(["message" => "L'ajout a été effectué".$value]);
	        }else
	        {
	            // Ici la création n'a pas fonctionné
	            // On envoie un code 503
	            http_response_code(503);
	            echo json_encode(["message" => "L'ajout n'a pas été effectué".$value]);         
	        }
		}else
		{
			// On gère l'erreur
		    http_response_code(405);
		    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
		}
	}
    function edit($cin)
	{
		// On récupère les informations envoyées
       

        $user=new User();

       

            
            $value=$user->getOne($cin);
            // print_r($value);
            // die();

             echo json_encode($value);

                // Ici la création a fonctionné
                // On envoie un code 201
                
    }
	
	function update()
	{
		$data = json_decode(file_get_contents("php://input"));

    	$user=new User();
    

		if(!empty($data->nom)&&!empty($data->prenom)&&!empty($data->age)&!empty($data->email)&!empty($data->telephone))
		{
			
			$user->nom=$data->nom;
			$user->prenom=$data->prenom;
			$user->age=$data->age;
			$user->email=$data->email;
			$user->telephone=$data->telephone;
			$value=$user->update($id);
			 if($value)
			{
            // Ici la création a fonctionné
            // On envoie un code 201
            http_response_code(201);
            echo json_encode(["message" => "L'ajout a été effectué".$value]);
	        }else
	        {
	            // Ici la création n'a pas fonctionné
	            // On envoie un code 503
	            http_response_code(503);
	            echo json_encode(["message" => "L'ajout n'a pas été effectué".$value]);         
	        }
		}else
		{
			// On gère l'erreur
		    http_response_code(405);
		    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
		}
		
		
	}

	function delete($cin)
	{
		
        // On récupère les informations envoyées
      

        $user=new User();

       

           
            $value=$user->delete($cin);
            // print_r($value);
            // die();

            if($value){
                // Ici la création a fonctionné
                // On envoie un code 201
                http_response_code(201);
                echo json_encode(["message" => "suppression  a été effectué".$value]);

            }else{
                // Ici la création n'a pas fonctionné
                // On envoie un code 503
                http_response_code(503);
                echo json_encode(["message" => "suppression n'a pas été effectué".$value]);
            }

        }
    }
	
