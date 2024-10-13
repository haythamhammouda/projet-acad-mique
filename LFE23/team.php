<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   
       
    <link rel="stylesheet" type="text/css" href="style2.css" /> 
    
    <link rel="stylesheet" media="mobile" href="styletrn2.css" />
    <link rel="stylesheet" media="pc" href="styletrn3.css" />
    
    <link rel="stylesheet" type="text/css" href="styletrn.css" media="print" />
    <STyle>
        

        body {
            font-family: Arial, sans-serif;
            background-color: #e9e9eb;

        }
        .color{
            background-color: #e9e9eb;

        }

        .haha {
            margin: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            border-radius: 8px;

            
        }

        .haha p {
            margin: 5px 0;
        }

        #down a {
            display: inline-block;
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        a.ecriteur {
    color: white;
        }

        .haha a:hover {
            background-color: darkorange;
        }
        .modoflex 
        {
            margin-top: 80px; 
            /* background-color: white; */
        }

        </STyle>
</head>
<body>
    <div id="container">
        
        <div id="logo"> <a href="index.html"><img src="logo-ehei.png" alt="logo-ehei" width="79px"></a>
        </div>

        
        <div id="navbar">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="team.php">Teams</a></li>
                <li><a href="#">News</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                
                <li id="login"><a href="login.html">Login</a></li>
            </ul>
        </div>



      
  <section class="modoflex">
    <div>
        <img src="logo-ehei.png" alt="logo eheioujda">
    </div>

    <div class="float"> 

  <img src="lfe23.png" style="height: 148px; margin-top: 13px;">

    </div>


  </section>
      
  <section class="float registrazione">

    
  </section>
      
  <main class="torneo">

  <table>
<div class="haha">
<?php
 
 $files = scandir("test");
  
 for ($a = 2; $a < count($files); $a++)
 {
     ?>
     <p id="down">
         <?php echo $files[$a]; ?>
  
         <a href="test/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
             Download
         </a>
     </p>
     <?php
 }
 ?>
</div>
</table>

    
        <table class='tabla'>
          <tbody>
            <caption>Classement</caption>
        <tr>
    <th>équipe</th> 
    <th title='Matchs Joués'>MJ</th> 
    <th title='Buts pour' class='novisual'>BP</th> 
    <th title='Buts Contre' class='novisual'>BC</th> 
    <th title='Différence de buts' class='novisual'>DB</th> 
    <th title='Points'>PT</th>

 </tr>

 <?php

$conn = new PDO("mysql:host=localhost;dbname=lfe23", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT nomeq,mj,bp,bc,db,pt FROM equipe_8 ORDER BY pt desc,db desc,bp desc,mj asc,nomeq asc"; 
$result = $conn->query($sql);

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $nomeq = $row['nomeq'];
    $mj = $row['mj'];
    $bp = $row['bp'];
    $bc = $row['bc'];
    $db = $row['db'];
    $pt = $row['pt'];




    echo "<tr>";

    echo "<td>" . $nomeq . "</td>";
    echo "<td>" . $mj . "</td>";
    echo "<td>" . $bp . "</td>";
    echo "<td>" . $bc . "</td>";
    echo "<td>" . $db . "</td>";
    echo "<td>" . $pt . "</td>";


    echo "</tr>";
}
?>

 


</tbody>
</table>
<table class='tabla'>
    <caption>Résultats</caption>
    <tbody>
        <tr>
            <th>Equipe Local</th>
            <th>Score</th>
            <th>Score</th>
            <th>Visiteurs</th>
            <th>Game-Week</th>

        </tr>
        <?php
        // session_start();
        $conn = new PDO("mysql:host=localhost;dbname=lfe23", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT nomeq1, sc1, sc2, nomeq2,gm,idm FROM matchj order by gm"; 
        $result = $conn->query($sql);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $nomeq1 = $row['nomeq1'];
            $sc1 = $row['sc1'];
            $sc2 = $row['sc2'];
            $nomeq2 = $row['nomeq2'];
            $gm = $row['gm'];
            $idm = $row['idm'];




            echo "<tr>";
            echo "<td>" . $row['nomeq1'] . "</td>";
            echo "<td>" . $row['sc1'] . "</td>";
            echo "<td>" . $row['sc2'] . "</td>";
            echo "<td>" . $row['nomeq2'] . "</td>";
            echo "<td>" . $row['gm'] . "</td>";
            echo "</tr>";        }
        ?>
    </tbody>
</table>
                <table class='tabla'>
                    <caption> joueurs par équipe </caption>
                    <tbody>
                    <tr>
                    <th>Nom de joueur</th>
                    <th>Prénom du joueur</th>
                    <th>Buts </th>
                    <th>Nom equipe</th>
                </tr>
            </tbody>
            <?php

        $conn = new PDO("mysql:host=localhost;dbname=lfe23", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT Nom, Prenom, nomeq, buts FROM jequipe order by buts DESC ,nomeq"; 
        $result = $conn->query($sql);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $Nom = $row['Nom'];
            $Prenom = $row['Prenom'];
            $nomeq = $row['nomeq'];
            $buts = $row['buts'];




            echo "<tr>";
            echo "<td>" . $Nom . "</td>";
            echo "<td>" . $Prenom . "</td>";
            echo "<td>" . $buts . "</td>";
            echo "<td>" . $nomeq . "</td>";
            echo "</tr>";
        }
        ?>

        
        </table class="color">
  
        <table>
<div class="haha">
</div>
</table>

</main>
      
</body>

    
</html>



