<?php
    class KhoahocModel extends DB{
        public function addKh($ten_kh,$mo_ta,$anh,$luotxem,$malop,$mamon){
            $sql = "INSERT INTO khoa_hoc(ten_khoahoc,mo_ta,anh_khoahoc,so_luot_xem,id_lop,id_mon) values ('$ten_kh','$mo_ta','$anh',$luotxem,$malop,$mamon)";
            $this->pdo_execute($sql);
        }
        public function getkhAll(){
            $sql = "SELECT * FROM khoa_hoc kh JOIN mon_hoc mh JOIN lop lp ON
            kh.id_lop = lp.id_lop AND kh.id_mon = mh.id_mon ORDER BY kh.id_khoahoc DESC";
            return $this->pdo_query($sql);
        }
        public function getkh($id){
            $sql = "SELECT * FROM khoa_hoc WHERE id_khoahoc = $id";
            return $this->pdo_query_one($sql);
        }
        //Lấy số lượng khóa học trong khoảng
        public function getkhFrom($form,$unit){
            $sql = "SELECT * FROM khoa_hoc kh JOIN mon_hoc mh JOIN lop lp ON
            kh.id_lop = lp.id_lop AND kh.id_mon = mh.id_mon ORDER BY kh.id_khoahoc DESC LIMIT $form,$unit";
            return $this->pdo_query($sql);
        }
        public function Editkh($ten_kh,$mo_ta,$anh,$luotxem,$malop,$mamon,$id){
            $sql ="UPDATE khoa_hoc set ten_khoahoc ='$ten_kh',mo_ta ='$mo_ta',anh_khoahoc ='$anh',so_luot_xem=$luotxem, id_lop=$malop,id_mon=$mamon where id_khoahoc =$id";  
            $this->pdo_execute($sql);
          }
        public function deletekh($id){
            $sql ="DELETE FROM khoa_hoc WHERE id_khoahoc = $id";
            $this->pdo_execute($sql);
        }
        

    }
