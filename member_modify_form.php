<?php  ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
<head>
  <title>Contacts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrapContacts.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/marketPlace.css">
  <link rel="stylesheet" href="css/mypage.css">
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" type="text/css" href="css/member.css">
  <script type="text/javascript" src="../js/member_modift"></script>
  <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;
  </style>
</head>
<body>
 <?php include "preloader.html";?>
 <div class="page">
  <header class="section page-header">
    <!-- RD Navbar-->
    <?php include "header.php";?>
  </header>
  <section class="section section-lg bg-default">
   <div class="container">
    <div class="row justify-content-center text-center2">

      <div class="col-md-9 col-lg-7 wow-outer2">    
        <form>
          <div class="container">
            <div class="row">
              <div class="col">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link" href="mypage.php">내 게시글</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="comment.php">내 댓글</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="guestbook.php">방명록</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="member_modify_form.php">정보 수정</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php 
  $con =  mysqli_connect("localhost", "root", "root", "kmove");
  $sql = "select * from user";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result);

  $id = $row["user_id"];
  $pass = $row["user_pw"];
  $name = $row["name"];

  $email = explode("@", $row["email"]);
  $email1 = $email[0];
  $email2 = $email[1];
  mysqli_close($con)
  ?>
  <section style="background-color: #f5f5f5;">
   <div id="main_content">
    <div id="join_box" style="float: left; width: 110px; margin-top: 4px;">
     <form name="member_form" method="post" action="member_modify.php?id=<?=$user_id?>">

      <div class="form_id">
        <div class="col1">아이디 <?= $id?></div>
        <div class="col2" style="float: left; width: 400px;">
        </div>
      </div>
      <div class="clear"></div>

      <div class="form">
        <div class="col1">비밀번호</div>
        <div class="col2" style="float: left; width: 400px;">
          <input type="password" method="" name="pass" value="">
        </div>
      </div>
      <div class="clear"></div>

      <div class="form">
        <div class="col1">비밀번호 확인</div>
        <div class="col2" style="float: left; width: 400px;">
          <input type="password" method="" name="pass_confirm" value="">
        </div>
      </div>
      <div class="clear"></div>

      <div class="form">
        <div class="col1">이름</div>
        <div class="col2" style="float: left; width: 400px;">
          <input type="text" name="name" value="">
        </div>
      </div>
      <div class="clear"></div>

      <div class="form email">
        <div class="col1">이메일</div>
        <div class="col2" style="float: left; width: 400px;">
          <input type="text" name="email1" value="" method="">@
          <input type="text" name="email2" value="" method="">
        </div>
      </div>
      <div class="clear"></div>

      <div class="bottom_line"></div>
      <div class="buttons">

      </div>
    </form>
  </div>
</div>
</section>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
<script src="js/myScript.js"></script>
<style type="text/css">
  @media (min-width: 1200px) {
    #Parse_Area {
      width: 800px; 
      height: 500px;
    }
  }
  @media (max-width: 1200px) {
    #Parse_Area {
      width: 700px;
      height: 500px;
    }
  }
  @media (max-width: 800px) {
   #Parse_Area {
    width: 600px; 
    height: 500px;
  }
}
@media (max-width: 800px) {
 #Parse_Area {
  width: 500px; 
  height: 500px;
}
}


</style>
</body>
</html>