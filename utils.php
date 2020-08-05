<?php

include('config.php');
include('conexion.php');

function asgInput($id, $label, $valor="", $opts=[]){
    $placeholder = "";
    $type = 'text';
    $readonly = '';

    if(isset($_POST[$id])){
        $valor = $_POST[$id];
    }
    
     
     extract($opts);
    
    return<<<INPUT
     
    <div class="row">
    <div class="input-field col s12">
    <input value="{$valor}" placeholder="{$placeholder}" name="{$id}" id="{$id}" type="{$type}" class="validate">
    <label for={$id}>{$label}</label>
    </div>
    </div>
INPUT;

}
?>
