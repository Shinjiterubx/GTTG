<?php
   include 'connect.php';
   ?>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Oláh Család péksége</title>
      <link rel="stylesheet" href="css/menu.css" />
      <link rel="stylesheet" href="css/alap.css" />
      <style>
         .lead { font-size: 1.5rem; font-weight: 300; }
         .container { margin: auto auto auto auto; max-width: 960px; }
      </style>
      <!--<script src="js/ionicons.js"></script>-->
   </head>

   <body>
      <aside class="side-bar-wrap">
         <nav class="side-bar" id="menu-bar">
            <ul>
               <li class="active">
                  <a href="#" onClick="goToPage('content/kezdolap.html')">
                     <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                           <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                           <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                        </svg>
                     </span>
                     <span class="title">Kezdőlap</span>
                  </a>
               </li>
               <li>
                  <a href="#" onClick="goToPage('content/rolunk.html')">
                     <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="22" height="22"fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                           <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                           <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                        </svg>
                     </span>
                     <span class="title">Rólunk</span>
                  </a>
               </li>
               <li>
                  <a href="#" onClick="goToPage('content/nyitva.html')">
                     <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
                           <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                           <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>
                     </span>
                     <span class="title">Nyitvatartás</span>
                  </a>
               </li>
               <li>
                  <a href="#" onClick="goToPage('content/kontakt.html')">
                     <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                           <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                           <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                        </svg>
                     </span>
                     <span class="title">Elérhetőségek</span>
                  </a>
               </li>
            </ul>
         </nav>
      </aside>

      <!--

      
      !-->

      <div></div>
      <h1 style="width: 40%; margin-left: 10%;">Kezdőlap</h1>
      <h2 style="width: 40%; margin-left: 10%;">Köszöntjük az Oláh Család Pékségében!</h2> 

      <div class="middlecontainer" style="display: flex; width: 40%; margin-left: 10%; background-color: #F2F3F4; border-radius: 25px;">
         <table style="text-align: left;">
            <tr>
               <th>
                  <h2 style="margin-top: 10%;">Bejegyzés létrehozása</h2>
                     <form action="add_comment.php" method="POST">
                        <label>Cím</label>
                        <br>
                        <input type="text" id="inputTitle" name="inputTitle">
                        <br>
                        <br>
                        <textarea style=" width: 500px; height: 300px; resize: none;" id="inputText" name="inputText"></textarea>
                        <br>
                        <button type="submit">Létrehozás</button>
                     </form>
               </th>
            </tr>
            <?php
               $sql = "SELECT  * from posts";
               $result = mysqli_query($conn, $sql);
               $datas = array();
               if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)){
                     $datas[] = $row;
                  }
                                 
                  for ($i=0; $i < count($datas); $i++) 
                  { 
                     echo('
                        <tr>
                           <td style="border: 5px solid white;">
                              <h2>'.$datas[$i]["title"].'</h2>
                              <p>'.$datas[$i]["comment"].'</p>
                              <br>
<<<<<<< Updated upstream
                              <a type="submit" href="update_comment.php" value="'.$datas[$i]['pid'].'">Módosítás</button>
                              <a type="submit" href="delete_comment.php" value="'.$datas[$i]['pid'].'">Törlés</button>
=======
                              <a type="submit" href="update_comment.php">Módosítás</button>
                              <a type="submit" href="delete_comment.php'.id=<?php echo $datas['id']; ?>.'">Törlés</button>
>>>>>>> Stashed changes
                           </td>
                        </tr>
                        ');
                  }
            }
            ?>
         </table>
      </div>
      <script>
         const initNavBar = () => {
           const menusEl = document.querySelectorAll('.side-bar ul li')
         console.log("init begin: " + menusEl.length);
         menusEl.forEach(menu => { console.log("test: " + menu);  menu.addEventListener('click', ()=> {
           const menuActiveEl = document.querySelector('.side-bar ul li.active')
           menuActiveEl.classList.remove('active')
           menu.classList.add('active')
         }); })
         }
         function goToPage(content) {
           document.getElementById('container').src = content;
         }
         initNavBar()
      </script>

   </body>