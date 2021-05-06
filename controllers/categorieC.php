
<?PHP
include "config.php";




class CategorieC
{

    function ajouterCategorie($categorie)
    {
        $sql = "insert into categoriep (nom) values (:nom)";

        $db = config::getConnexion();

        try {
            $req = $db->prepare($sql);
            $nom = $categorie->getNom();

            $req->bindValue(':nom', $nom);

            $req->execute();
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }
    }

   
    function afficherCategorie()
    {
        $sql = "SELECT * from categoriep ";
        $db = config::getConnexion();

        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    
    function modifierCategorie($categorie, $id)
    {
        $sql = "UPDATE categoriep SET nom =:nom WHERE id=:id";
        $db = config::getConnexion();

        try {
            $id = $categorie->getId();
            $nom = $categorie->getNom();

            $req = $db->prepare($sql);

            $datas = array(':id' => $id, ':nom' => $nom);

            $req->bindValue(':id', $id);
            $req->bindValue(':nom', $nom); 

            $res = $req->execute();
        } catch (Exception $e) {
            echo "Erreur " . $e->getMessage();
            echo "datas: ";
            print_r($datas);
        }
    }


    
    function supprimerCategorie($categorie)
    {
        $sql = "DELETE from categoriep where  id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);

        $req->bindValue(':id', $_POST["id"]);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    //recupererby id()

    function RecuperatebyId($id)
    {
        $sql = "SELECT * from categoriep where id= $id ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    function afficherC()
    {
        $sql = "SELECT a.*,b.nom  from categorie  a inner join produit  b on a.id = b.id";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' .$e->getMessage());
        }
    }
    function triec(){
        $sql = "SELECT a.*,b.nom  from categorie a inner join produit  b on a.id = b.id  order by nom asc ";
    
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    

    function RechercheACategorie()
    {   
        $output = '';
        $sql = "SELECT * from categoriep where nom LIKE '%".$_POST["search"]."%'";
        $result = config::getConnexion();

        //$result = mysqli_query($connect, $sql);
        if(mysqli_num_rows($result) > 0)
        {
            $output .= '<h4 align="center">Search Result</h4>';
            $output .= '<div class="table-responsive">
                          <table class="table table bordered">
                             <tr>
                                   <th>nom</th>
                             </tr>';
            while($row = mysqli_fetch_array($result))
            {
                $output .= '
                <tr>
                    <td>'.$row["nom"].'</td>
                </tr>
             ';
            }
            echo $output;
        }
        else
        {
            echo 'data not found' ;
        }
    }
}
?>
   

    


