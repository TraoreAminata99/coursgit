<?php
$bdd=new PDO("mysql:host=localhost;dbname=tester;charset=utf8","root","");

if (isset($_POST['enreg']))
{
    echo "ok";
}

//     $insererutilisateur=$bdd->prepare("INSERT INTO traore(nom,prenom,sexe,telephone) VALUES(?,?,?,?)");
// $insererutilisateur->execute(array($nom,$prenom,$sexe,$telephone));
//     if($insererutilisateur)
//     {
//         echo " Vous ave bien été enregistré";
//     }
//     else
//     {
//         echo "Votre inscription a échoué";
//     }



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> base de donée</title>
</head>
<body>
    <from action="bd.php" method="POST" >
   <h1> ISCRIPTION</h1>
    Nom:<input type="text" name="no" value=""><br>
    Prenom:<input type="text" name="pre" value=""><br>
    Sexe:<select name="sex">
        <option value="F">Femme</option>
        <option value="M">Homme</option>
</select><br>
    Telephone:<input type="number" name="tel" value=""><br>
    <input type="submit" name="enreg" value="enregistrer ">
</from>
</body>
</html>#   c o u r s g i t  
 #   c o u r s g i t  
 #   c o u r s g i t  
 