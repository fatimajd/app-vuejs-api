<?php
require_once "model/RendezVous.php";
class RendezVousController
{

	function index()
	{
		$rndv=RendezVous::getAll();
		// On envoie le code réponse 200 OK
        http_response_code(200);

        // On encode en json et on envoie
        echo json_encode($rndv);
	}

	function add()
	{
		// On récupère les informations envoyées
    	$data = json_decode(file_get_contents("php://input"));

    	$rndv=new RendezVous();
    

		if(!empty($data->date)&&!empty($data->horaire)&&!empty($data->type)&&!empty($data->referenceuser))
		{
			$rndv->date=$data->date;
			$rndv->horaire=$data->horaire;
			$rndv->type=$data->type;
			$rndv->referenceuser=$data->referenceuser;
			$value=$rndv->insert();
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

	 function edit($id)
	{
		
	// On récupère les informations envoyées
       

        $rdv=new RendezVous();

       

            $value=$rdv->getOne($id);
            // print_r($value);
            // die();

             echo json_encode($value);

                // Ici la création a fonctionné
                // On envoie un code 201
                
	
	}

	function update()
	{
		// On récupère les informations envoyées
    	$data = json_decode(file_get_contents("php://input"));

    	$rndv=new RendezVous();
    

		if(!empty($data->date)&&!empty($data->horaire)&&!empty($data->type)&&!empty($data->referenceuser))
		{
			$rndv->date=$data->date;
			$rndv->horaire=$data->horaire;
			$rndv->type=$data->type;
			$rndv->referenceuser=$data->referenceuser;
			$value=$rndv->update($id);
			 if($value)
			{
            // Ici la création a fonctionné
            // On envoie un code 201
            http_response_code(201);
            echo json_encode(["message" => "modif a été effectué".$value]);
	        }else
	        {
	            // Ici la création n'a pas fonctionné
	            // On envoie un code 503
	            http_response_code(503);
	            echo json_encode(["message" => "m n'a pas été effectué".$value]);         
	        }
		}else
		{
			// On gère l'erreur
		    http_response_code(405);
		    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
		}
	}

	function delete($id)
	{
	// On récupère les informations envoyées
        

        $rdv=new RendezVous();

       

            $rdv->Id = $data->Id;
            $value=$rdv->delete($rdv->Id);
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