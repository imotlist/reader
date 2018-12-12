<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * Auth library
 *
 * @author
 */
class Auth{
   var $CI = NULL;
   function __construct()
   {
      // get CI's object
      $this->CI =& get_instance();
   }
   // untuk mengecek apakah user sudah login/belum
   
   function log_admin($user,$pass)
   {  
      $cek=$this->CI->db->where('username',$user)
                        ->where('password',md5($pass))
                        ->get('user');

      $row=$cek->num_rows();

      if ($row==1) {
         return $this->CI->db->where('username',$user)
                        ->where('password',md5($pass))
                        ->get('user')
                        ->row();
      } else {
         return false;
      }
   }

   // untuk validasi di setiap halaman yang mengharuskan authentikasi
   function restrict()
   {
      $data=$this->CI->session->userdata('username');      
      if(!empty($data))
      {
         $user=$this->CI->session->userdata('username');
         $pass=$this->CI->session->userdata('password');
         //$cek_sess=$this->log_admin($user,$pass);
         
         if (empty($user)) {
            echo "<script>alert('Anda telah keluar dari sistem'); window.location='".base_url()."backdoor';</script>";
         }

      } else {
            echo "<script>alert('Anda harus login terlebih dahulu'); window.location='".base_url()."backdoor';</script>";
         }
   }

 
}