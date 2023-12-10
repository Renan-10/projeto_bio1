<?php 
    $localhost = "aws.connect.psdb.cloud";
    $user = "vsd74zle190btixd7ntp";
    $pass = "pscale_pw_vou6uVjT2rbZCeFUaVfmv0Nc0PDlDqnVK5kELjidbbD";
    $banco = "biomedicina";

    $conexao = new mysqli($localhost,$user,$pass,$banco);

    if($conexao -> connect_errno){
        echo "falha";
    }else {
        //echo "ok";
    }

    function formata_data($data){
        $d = explode('-',$data);
        $e = $d[2] ."/". $d[1] ."/".$d[0];
        return $e;
    }

    

?>
