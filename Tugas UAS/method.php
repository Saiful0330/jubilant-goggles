<?php
require_once "koneksi.php";
class Buku
{
 
   public  function get_buku()
   {
      global $mysqli;
      $query="SELECT * FROM tbl_data";
      $data=array();
      $result=$mysqli->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Get List Buku Berhasil.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
   }
 
   public function get_buku($kode=0)
   {
      global $mysqli;
      $query="SELECT * FROM tbl_data";
      if($kode != 0)
      {
         $query.=" WHERE kode=".$kode." LIMIT 1";
      }
      $data=array();
      $result=$mysqli->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Get Judul Berhasil.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
        
   }
 
   public function insert_buku()
      {
         global $mysqli;
         $arrcheckpost = array('judul' => '', 'nama' => '');
         $hitung = count(array_intersect_key($_POST, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
               $result = mysqli_query($mysqli, "INSERT INTO tbl_data SET
               judul = '$_POST[judul]',
               nama = '$_POST[nama]',");
                
               if($result)
               {
                  $response=array(
                     'status' => 1,
                     'message' =>'Buku Berhasil di Tambahkan.'
                  );
               }
               else
               {
                  $response=array(
                     'status' => 0,
                     'message' =>'Buku Gagal di Tambahkan.'
                  );
               }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Parameter Tidak Sesuai'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
 
   function update_buku($kode)
      {
         global $mysqli;
         $arrcheckpost = array('judul' => '', 'nama' => '');
         $hitung = count(array_intersect_key($_POST, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
              $result = mysqli_query($mysqli, "UPDATE tbl_data SET
              judul = '$_POST[judul]',
              nama = '$_POST[nama]'");
          
            if($result)
            {
               $response=array(
                  'status' => 1,
                  'message' =>'Buku Berhasil di Update.'
               );
            }
            else
            {
               $response=array(
                  'status' => 0,
                  'message' =>'Buku Gagal di Update.'
               );
            }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Parameter Tidak Sesuai'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
 
   function delete_buku($kode)
   {
      global $mysqli;
      $query="DELETE FROM tbl_data WHERE kode=".$kode;
      if(mysqli_query($mysqli, $query))
      {
         $response=array(
            'status' => 1,
            'message' =>'Buku Berhasil Di Hapus.'
         );
      }
      else
      {
         $response=array(
            'status' => 0,
            'message' =>'Buku Gagal Di Hapus.'
         );
      }
      header('Content-Type: application/json');
      echo json_encode($response);
   }
}
 
 ?>