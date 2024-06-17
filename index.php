<?php

require_once("View.php");
require_once("Model.php");

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if(isset($_GET['action'])) {
            $action = $_GET['action'];
            if($action == 'edit') {...
            } else if($action == 'delete') {...
                }else if($action == 'add') {...
                }
        }else {...
        }
        break;
        case 'POST';
        if(isset($_POST['action'])) {
            $action = $_POST['action'];
            if($action == 'add') {...
            }else if($action == 'update') {...
            }
        }
        break;
        default:
}
?>