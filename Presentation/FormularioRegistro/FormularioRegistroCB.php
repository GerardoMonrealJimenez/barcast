<?php
header('Content-Type: application/json');
include_once($_SERVER['DOCUMENT_ROOT'].'/barcast/BLL/include.php');

function selectItemsTipoUsuario()
{
    $response           = array('status' => 'ERROR');
    try
    {
        $response['select'] =   TipoUsuarioBLL::getAllSelectItemsTipoUsuarios();
        $response['status'] = "OK";
    }
    catch (Exception $e)
    {
        $response['status'] = $e->message;
    }
    return json_encode($response);
}

switch ($_POST['func']) {
  case 1:
    echo selectItemsTipoUsuario();
    break;

  default:
  
    break;
}

 ?>
