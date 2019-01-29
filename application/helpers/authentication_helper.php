 <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    function varify_session(){
       $CI = &get_instance();

       $authorized = $CI->session->userdata('authorized');
       if($authorized  !=  '1') {

          redirect('login');
       }

   }

   ?>  