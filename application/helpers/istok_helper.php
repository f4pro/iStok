<?php

function is_logged_in(){
    $ci = get_instance();
    if (!$ci->session->userdata('email')){
        redirect('auth');
    }else{
        $role = $ci->session->userdata('status');
        if ($role != "Admin"){
            redirect('barang');
        }
    }
}
function is_logged_in2(){
    $ci = get_instance();
    if (!$ci->session->userdata('status')){
        redirect('auth');
    }else{
        $role = $ci->session->userdata('status');
        if ($role != "Karayawan"){
            redirect('HomeKar');
        }
    }
}