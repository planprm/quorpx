<!doctype html>
<html>
   <head>
       <meta charset="utf-8" />
       <meta name="descirption" content="Quorpx | TimeZilla - Сервис по работе с датой, временем, заметками."/>
       <title>Quorpx | TimeZilla - Сервис по работе с датой, временем, заметками.</title>
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
      <h1 class="head">Quorpx | TimeZilla - Сервис по работе с датой, временем, заметками</h1>
      <div class="block">
            </br></br><p><b>Quorpx | TimeZilla</b> - Сервис по работе с датой, временем, заметками</p></br></br>
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
                 $filename = 'database.db';
                 $db_handle  = new SQLite3($filename);
                 $db_handle->exec("CREATE TABLE tasks(INT id, taskname VARCHAR(255), tasktext VARCHAR(255)");
                 $db_handle->exec("INSERT INTO tasks(id, taskname, tasktext VALUES (1,'Первая задача','Задача идет...')");
                 $db_handle->exec("SELECT * FROM tasks");
                 $result = $db_handle->query($query_string);
                 $row = $result->fetchArray();
                 $db_handle->close();
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
