<?php
    require_once ("inc/connectedDB.php");
    //стандартная форма авторизации    
    if (!isset($_SERVER['PHP_AUTH_USER'])){
        header('WWW-Authenticate: Basic realm="\'Admin Page\'"');
        header('HTTP/1.0 401 Unauthorized');
        exit;
    } else{
        
        if (!get_magic_quotes_gpc()){
            $_SERVER['PHP_AUTH_USER'] = $connectDB->escapeString($_SERVER['PHP_AUTH_USER']);
            $_SERVER['PHP_AUTH_PW'] = $connectDB->escapeString($_SERVER['PHP_AUTH_PW']);
            
            $sql = "SELECT pass FROM users WHERE user = '{$_SERVER['PHP_AUTH_USER']}'";
            
            $pass = $connectDB->querySingle($sql);
            
            if (!$pass || ($_SERVER['PHP_AUTH_PW'] != $pass)){
                header('WWW-Authenticate: Basic realm="\'Admin Page\'"');
                header('HTTP/1.0 401 Unauthorized');
                exit;
            }
        }
    }
?>