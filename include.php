<?php
   /*
   * 共用函数库

   * 连接数据库

   */

   function connect(){
	   $link = mysqli_connect("localhost","root","","lab_database") or die("数据库连接失败！Error:".mysql_errno().":".mysql_error());
	   mysqli_set_charset($link,"utf8");
//	   mysql_select_db(DB_DBNAME) or die("指定数据库打开失败！");
	   return $link;
   }
   /*
   
   * 向数据库插入用户
   
   */
   function InsertUser($DB,$id,$psw,$name,$flag){
	   $sql_insert = "insert into login_info (login_id,login_password,login_name,flag) values('$id','$psw', '$name','$flag')";
       return mysqli_query($DB,$sql_insert);
   }
   /*
   
   * 读取数据库用户表
   
   */
   function SelectUser($DB,$flag){
	    $sql_select = "select * from  login_info where flag=$flag order by login_id";
	    $result = mysqli_query($DB,$sql_select);
	    
		if($flag == '0'){ //普通用户
		   while($row = mysqli_fetch_array($result)){
			 echo
				"<tr>
				  <td> "
				     .$row['login_id']."
				  </td>
				  <td> "
				     .$row['login_password']."
				  </td>
				  <td> "
				     .$row['login_name']."
				  </td>
				  <td>
				     <a class='btn btn-default btn-sm' href='do_func_warn.php ? aa=".$row['login_id']."'>销户</a>
				  </td>
				</tr>";
			
		   } 
		}
		else if($flag == '1'){ //系统管理员
		  while($row = mysqli_fetch_array($result)){
			 echo
				"<tr>
				  <td> "
				     .$row['login_id']."
				  </td>
				  <td> "
				     .$row['login_password']."
				  </td>
				  <td> "
				     .$row['login_name']."
				  </td>
				</tr>";
		   }
		}
 
   }
   /*
   
   * 删除用户
   
   */
   function DeleteUser($DB,$id){
	   
	   $sql_select = "delete from login_info where login_id='$a'";
       $result = mysqli_query($link,$sql_select);

       if($result){  
          echo "<script>alert('销户成功！'); window.location.href='admin_func_SelectUser.php';</script>";  
       }  
       else{  
          echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
       } 
   }
   /*
   
   * 关闭数据库连接
   
   */
   function close($link){
	  mysqli_close($link); 
   } 

   
?>

