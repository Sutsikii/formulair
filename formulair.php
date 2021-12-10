<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <section class="form">
            <header> Formul'air</header>
            <form action='#' method="post">
            <div class="name-details">
                <div class="field">
                    <label>Prénom</label>
                    <input type="text" placeholder="Prénom" name="prenom">
                </div>
                <div class="field">
                    <label>Nom</label>
                    <input type="text" placeholder="Nom" name="Nom">
                </div>
            </div>
                <div class="field">
                    <label>Email </label>
                    <input type="text" placeholder="exemple@normandiewebschool.fr" name="Email">
                </div>
                <div class="field">
                    <input type="submit" value="Envoyer" class="envoyer" id="evr" name="envoyer">
                </div>
            
        </form>
        <?php

            if(isset($_POST['envoyer']))
            {
                if(isset($_POST['prenom']) AND isset($_POST['Nom']) AND isset($_POST['Email']))
                    {
                    if(!empty($_POST['prenom']) AND !empty($_POST['Nom']) AND !empty($_POST['Email']))
                    {
                        $prenom=htmlspecialchars($_POST['prenom']);
                        $Nom=htmlspecialchars($_POST['Nom']);
                        $Email=htmlspecialchars($_POST['Email']);


                    mail('ndutertre@normandiewebschool.fr', 'TestFormulaire', 'Nouvelle inscription de '.$prenom.' '.$Nom.' '.$Email);
                    }
                        }      
    
                            }
                            
                                ?>  
        
        
        </section>
        <p><?php echo "Merci de ton inscription $prenom $Nom !" ?>
    </div>
</body>
</html>
