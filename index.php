<!doctype html>
<html>
   <head>
       <meta charset="utf-8" />
       <meta name="descirption" content="TimeZilla - Сервис по работе с датой, временем, заметками."/>
       <title>TimeZilla - Сервис по работе с датой, временем, заметками.</title>
       <style>
           *
           {
               padding: 0;
               margin: 0;
           }
           .head
           {
               padding: 7px;
               font-style: Arial, sans-serif;
               color: #ffffff;
               background-color: #FFD500;
           }
           .block
           {
               width: 1000px;
               margin: 0 auto;
	   }
           .loginblock
	   {
               width: 200px;
               background-color: #FFD500;
	       color: #ffffff;
               padding-left: 10px;
               padding: 8px;
           }
       </style>
       <script type="javascript/text">
           document.all.content.value = 'Hello';
       </script>
   </head>
   <body>
      <h1 class="head">TimeZilla - Сервис по работе с датой, временем, заметками</h1>
      <div class="block">
            </br></br><p><b>TimeZilla</b> - Сервис по работе с датой, временем, заметками</p></br></br>
            <?php
                 /* @author:Ismagilov A.Z. @amirismagilov*/
                 /*
                 echo "agile</br>";
		 echo "php</br>";
		 echo "html5</br>";
		 echo "css</br>";
		 echo "name:TimeZilla</br>";
		 echo "Deploy:service,time-management,notes,network</br>";*/
                 echo "Hello,World!";
                 $dbhandle = sqlite_open('database.db', 0666, $error);
                 if (!$dbhandle) die ($error);

                 $stm = "CREATE TABLE Friends(Id integer PRIMARY KEY," . 
                        "Name text UNIQUE NOT NULL, Sex text CHECK(Sex IN ('M', 'F')))";
                 $ok = sqlite_exec($dbhandle, $stm, $error);

                 if (!$ok)
                 die("Cannot execute query. $error");

                 echo "Database Friends created successfully";

                 sqlite_close($dbhandle);
            ?>
           <div id="content">test</div>
	   <h3 class="loginblock">
                Войти
	   </h3></br>
	   <div class="loginenter">
                <form action="index.php" method="POST">
                   <label>Введите Логин или email:</label></br>
                   <input name="login" type="text"></br>
                   <label>Введите Пароль:</label></br>
		   <input name="password" type="password"></br>
		   <input name="submit" type="submit" value="Войти"></br>
                </form>
</div></br>
	  <div id="newstruct">
              <form action="index.php" method="POST">
                 <label>Создать заметку:</label></br>
		 <input name="postname" type="text"></br>
                 <input name="create" type="submit" value="Создать"></br>
              </form>
          </div> 
           <ul>
              <li><a href="index.php">Главная</a></li>
           <ul>
            
      </div>
   </body>
</html>
