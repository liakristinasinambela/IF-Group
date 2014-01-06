<?php
require_once  'config.php';
/**
 * Connect to mysql server
 * @param bool
 * @use true to connect false to close
 */
        function connect($close=true)
        {
                if (!$close) {
                mysql_close($connection);
                return true;
                }
                $connection=mysql_connect(host,user,pass);
                if(mysql_select_db(db)){
                        return $connection;
                }else{
                        echo mysql_error();
                }
        }

        function getFoto($id){
                $sql="SELECT * FROM foto WHERE foto_id = $id";
                $query=mysql_query($sql);
                if ($query) {
                        return mysql_fetch_assoc($query);
                }else
                {
                        return false;
                }
        }
		function getLihatiklan($namakost)
		{
			$sql="SELECT * FROM buatiklan WHERE Nama_Kost = $namakost";
                $query=mysql_query($sql);
                if ($query) {
                        return mysql_fetch_assoc($query);
                }else
                {
                        return false;
                }
		}

        function getLihatiklans()
        {
                $sql="SELECT * FROM buatiklan";
                $query=mysql_query($sql);
                $res=array();
                
                while ($row=mysql_fetch_assoc($query)) {
                        $res[]=$row;
                }
                return $res;
        }
?>