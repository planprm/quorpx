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
                 session_start();
                 //echo "agile";
                 $postnametext = array("testtesttest");
                 array_push($postnametext,"test123");
                 $postnametext[0] = "Первая заметка";
                 $postnametext[1] = "Вторая заметка";
                 $postnametext[3] = "Третья заметка";
                 //echo $postnametext[0];
                 //print_r($postnametext);  
                 $postname = $_POST['postname'];
                 $postnametext[0] = $postname;
                  
                 $dom_xml= new DomDocument("tasks.xml");
                 //записываем название модели в переменную
                 $dom_xml->loadXML();
                 $mod=$dom_xml->getElementsByTagName("task");

                //отображаем данные

                 foreach ($mod as $element){
                   echo '<h2>'.$element->nodeValue." ".$element->nodeName." ".'<br /></h2>';
                 }
                 echo '<h2>'.$postnametext.'</h2></br>';
                 
                 /*$servername = "db4free.net";
                 $username = "timezilla";
                 $password = "cr9ismagilov";

                 // Create connection
                 $conn = new mysqli($servername, $username, $password);

                 // Check connection
                 if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                 }
                 echo "Connected successfully";
                 */
                 //echo mysql_get_host_info();
                 //echo mysql_get_server_info(); 
                 
                 if(isset($postname))
		 {
	             echo '<h2>'.$postname.'<h2></br>';
		     //$_SESSION['postname'] = $postnametext;
                     $count = 0;
		     $_SESSION['postname'] = $postnametext; 
	             foreach($_SESSION['postname'] as $task)
		     {     
	                  echo '<h2><a href="index.php?taskid="'.$count.'">'.$task.'</a></h2></br>';
                          $dom_xml->loadXML('<task>'.$task.'</task>'); 
			     
	                  $count = $count + 1;
		      }
	             array_push($postnametext, $postname);
	             $_SESSION['postname'] = $postnametext;
		     //file_put_contents('tasks.txt', serialize($postnametext));	 
	             $postnametext[0] = $postname;
		    
			 
		 }

                
                  
                
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
