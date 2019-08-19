<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
    require "./B_connect_db.php";
    $sql = " SELECT * FROM `signup`";
    $result = mysqli_query($connect,$sql);
  ?>
  
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="sigupstyle.css">
      <link href="https://fonts.googleapis.com/css?family=Anton&display=swap&subset=latin-ext" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
    
  <body>
      <form class="register" method="POST" action="B_insert_db.php" >
          <h1>Registers</h1> 
      <div class="txtb">
          <input type="text" name="editUsername"  required>
          <span data-placeholder="Username" ></span>
        </div>

        <div class="txtb">
          <input type="password" name="editPassword" required>
          <span data-placeholder="Password" ></span>
        </div>
          
          <div class="txtb">
          <input type="password" name="editConfirmPassword" required>
          <span data-placeholder="Confirm Password" ></span>
        </div>
          
          <div class="txtb">
          <input type="text" name="editName">
          <span data-placeholder="Name"></span>
        </div>
          
          <div class="txtb">
          <input type="text" name="editLastname">
          <span data-placeholder="Lastname"></span>
        </div>
          
          <div class="txtb">
          <input type="text" name="editStudentID">
          <span data-placeholder="Student ID"></span>
        </div>
          
          <div class="txtb">
          <input type="text" name="editFaculty">
          <span data-placeholder="Facultly"></span>
        </div>
                
           <div class="txtb">
          <input type="text" name="editDepartment">
          <span data-placeholder="Department"></span>
        </div>
          
           <div class="txtb">
          <input type="text"name="editTel">
          <span data-placeholder="Tel."></span>
        </div>
          
           <div class="txtb">
          <input type="text"name="editEmail">
          <span data-placeholder="E-Mail"></span>
        </div>
          
          
          <div class="txtb">
          <input type="text"name="editFacebook">
          <span data-placeholder="Facebook"></span>
        </div>
          
          
          <div class="txtb">
          <input type="text"name="editLineID">
          <span data-placeholder="Line ID"></span>
        </div>
          
          <div class="txtb" >
          <p >Address</p>
              <textarea name="editAddress" rows = "5"></textarea>
        </div>
          
          
          

        <input type="submit" class="logbtn" value="SUBMIT" >

          
      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>

      
      </form>
      
  </body>
</html>