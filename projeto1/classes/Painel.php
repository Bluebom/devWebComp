<?php
class Painel
{
    public static $cargos = [
        '0' => 'Normal',
        '1' => 'Sub Administrador',
        '2' => 'Administrador',
        ];

    public static function logado()
    {
        return isset($_SESSION['login']) ? true : false;
    }
    
    public static function loggout(){
        setcookie('lembrar', 'true', time()-1, '/');
        session_destroy();
        header('Location: '.INCLUDE_PATH_PAINEL);
    }

    public static function loadPage(){
        if(isset($_GET['url'])){
            $url = explode('/',$_GET['url']);
            if(file_exists('pages/'.$url[0].'.php')){
                include('pages/'.$url[0].'.php');
            }else{
                //Página não existe!
                header('Location: '.INCLUDE_PATH_PAINEL);
            }
        }else{
            include('pages/home.php');
        }
    }

    public static function listarUsuariosOnline(){
        self::limparUsuariosOnline();
        $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.online`");
        $sql->execute();
        return $sql->fetchAll();
    }

    public static function limparUsuariosOnline(){
        $date = date('Y-m-d H:i:s');
        $sql = MySql::conectar()->exec("DELETE FROM `tb_admin.online` WHERE ultima_acao < '$date' - INTERVAL 1 MINUTE");
    }

    public static function alert($tipo, $mensagem){
        if($tipo == 'success'){
            echo '<div class="callback_success"><i class="fa fa-check"></i> '.$mensagem.'</div>';
        } else if($tipo == 'fail'){
            echo '<div class="erro_box"><i class="fas fa-times"></i> '.$mensagem.'</div>';
        }
    }

    public static function imagemValida($imagem){
        if($imagem['type'] == 'image/jpeg' || 
           $imagem['type'] == 'image/jpg'  ||
           $imagem['type'] == 'image/png')           {
               $tamanho = intval($imagem['size']/1024);
               if($tamanho < 300) {
                   return true;
               } else {
                   return false;
               }
           } else if($imagem['type'] == 'image/svg+xml'){
               return true;
           } else {
               return false;
           }
    }

    public static function uploadFile($file){
        $formatoArquivo = explode('.',$file['name']);
        $imagemNome = uniqid() .'.'. $formatoArquivo[count($formatoArquivo) - 1];
        if(move_uploaded_file($file['tmp_name'], BASE__DIR__PAINEL .'/uploads/'. $imagemNome)){
            return $imagemNome;
        } else {
            return false;
        }
    }

    public static function deleteFile($file){
        @unlink(BASE__DIR__PAINEL. '/uploads/'. $file);
    }

    public static function insert($arr){
        $certo = true;
        $nome_tabela = $arr['nome_tabela'];
        $query = "INSERT INTO `$nome_tabela` VALUES (null";
        foreach ($arr as $key => $value) {
            $nome = $key;
            if($nome == 'acao' || $nome == 'nome_tabela'){
                continue;
            } 
            if($value == '') {
                $certo = false;
                break;
            }
            $query .= ",?";
            $parametros[] = $value;
        }
        $query .= ")";
        if($certo == true){
            $sql = MySql::conectar()->prepare($query);
            $sql->execute($parametros);
        }
        return $certo;
    }

    public static function update($arr){
        $certo = true;
        $first = true;
        $nome_tabela = $arr['nome_tabela'];
        $query = "UPDATE `$nome_tabela` SET ";
        foreach ($arr as $key => $value) {
            $nome = $key;
            if($nome == 'acao' || $nome == 'nome_tabela' || $nome == 'id'){
                continue;
            } 
            if($value == '') {
                $certo = false;
                break;
            }
            if($first){
                $first = false;
                $query .= "$nome=?";
            } else{
                $query .= ", $nome=?";
            }
            $parametros[] = $value;
        }
        if($certo == true){
            $parametros[] = $arr['id'];
            $sql = MySql::conectar()->prepare($query. ' WHERE id=?');
            $sql->execute($parametros);
        }
        return $certo;
    }


    public static function selectAll($table, $page = null, $perPage = null){
        if($page == null && $perPage == null){
            $sql = MySql::conectar()->prepare("SELECT * FROM `$table`");
        } else {
            $sql = MySql::conectar()->prepare("SELECT * FROM `$table` LIMIT $page, $perPage");
        }
        $sql->execute();
        return $sql->fetchAll();
    }

    public static function deleteLine($table, $id = false){
        if($id == false){
            $sql = MySql::conectar()->prepare("DELETE FROM `$table`");
        } else{
            $sql = MySql::conectar()->prepare("DELETE FROM `$table` WHERE id = $id");
        }
        $sql->execute();
    }

    public static function redirect($url){
        echo '<script>location.href="'.$url.'"</script>';
        die();
    }

    // metodo especifico para selecionar apenas 1 registro
    public static function select($table, $query, $arr){
        $sql = MySql::conectar()->prepare("SELECT * FROM `$table` WHERE $query");
        $sql->execute($arr);
        return $sql->fetch();
    }
}
