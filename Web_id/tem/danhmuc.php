<div id="menu-con">
	  <!--tim-kiem-->
	  <div id="list">&raquo; Tìm Kiếm </div>
	  	<form method="post">
	  		<input type="search" name="search" placeholder="Bạn tìm gì nào !!!">
	  		<button type="submit">Search</button>
	  	</form>
	  <!--dang-nhap-->
	  <div id="list">&raquo; Đăng Nhập &hearts; Đăng Ký </div>
	  <div id="menu-login">
	  	 <ul>
	  	 	<li><a href="dangnhap.php">Đăng Nhập</a></li>
	  	 	<li><a href="dangky.php">Đăng Ký</a></li>

	  	 </ul>
	  </div>

	  	<!--Danh muc-->
	  <div id="list">&raquo; Danh Mục Web</div>
 		<?php
                  $sql="SELECT * FROM category";
                  $query=mysqli_query($conn,$sql);
                  while($rs=mysqli_fetch_array($query,MYSQLI_ASSOC)){
             ?>
                <li><a href="list.php?id=<?php echo $rs["id"]; ?>"> <?php echo $rs["name"]; ?> </a></li>
                
           <?php } ?>
         <!--lien he-->
        <div id="list">&raquo; Liên Hệ </div>
        <p> <font color="red">Admin: </font> Nguyễn Tuyển Giảng</p>
        <p> <font color="red">SĐT: </font> 0965.565.742</p>
        <p> <font color="red">Email: </font> Nguyentuyengiangbn@gmail.com</p>
	</div><!--menu-con-->