<?php
require_once 'Price.php';
require_once 'Member_price.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body> 

    <section>
        <?php
            $price = new Price('Nike', 'Sweatshirt', 60, 2, 15);            
        ?>        

        <h3>Oggetto:
            <?php echo ($price->printName());
            ?>
        </h3>
        
        
        <h3>In magazzino:
            <?php echo ($price->num_items); ?>
        </h3>
        <h4>Prezzo:
            <?php
            echo ($price->price . ' euro')
            ?>
        </h4>
        <h4>Sconto applicato del <?php echo ($price->discount . '%') ?>
        </h4>
        <h4>Per un valore totale di:
            <?php
            echo ($price->calcDiscount());
            ?>
        </h4>
        
    </section>
    
    
    <section>
        <?php
            $Member_price = new Member_price('Armani', 'T-shirt', 100, 5,);
            $Member_price->setTier('Gold');
        ?>
        <h2>Per utenti PREMIUM</h2>
        <h3>Oggetto:
            <?php 
                echo ($Member_price->printName());
            ?>
        </h3>
        <h4>Tipologia:
            <?php 
                echo ($Member_price->printType());
            ?>
        </h4>
        <h4>In magazzino:
            <?php 
                echo ($Member_price->printNumitems()); 
            ?>
        </h4>
        <h4>Prezzo:
            <?php
                echo ($Member_price->price . ' euro')
            ?>
        </h4>
        <h3>Prezzo Premium:
            <?php 
                echo($Member_price->discountMember()) 
            ?>
        </h3>
    </section>
    


    <section>
        <?php 
            $Member_price = new Member_price('H&M', 'shoes', 70, 2,);
            $Member_price->setTier('Silver');
        ?>
        <h3>Oggetto:
            <?php 
                echo ($Member_price->printName());
            ?>
        </h3>
        <h4>Tipologia:
            <?php 
                echo ($Member_price->printType());
            ?>
        </h4>
        <h4>In magazzino:
            <?php 
                echo ($Member_price->printNumitems()); 
            ?>
        </h4>
        <h4>Prezzo:
            <?php
                echo ($Member_price->price . ' euro')
            ?>
        </h4>
        <h3>Prezzo Premium:
            <?php 
                echo($Member_price->discountMember())   
            ?>
        </h3>
    </section>




    <section>
        <?php
            $Member_price = new Member_price('The North Face', 'Jacket', 560, 0,);
            $Member_price->setTier('Basic');
        ?>
        <h3>Oggetto:
            <?php 
                echo ($Member_price->printName());
            ?>
        </h3>
        <h4>Tipologia:
            <?php 
                echo ($Member_price->printType());
            ?>
        </h4>
        <h4>In magazzino:
            <?php 
                echo ($Member_price->printNumitems()); 
            ?>
        </h4>
        <h4>Prezzo:
            <?php
                echo ($Member_price->price . ' euro')
            ?>
        </h4>
        <h3>Prezzo Premium:
            <?php 
                echo($Member_price->discountMember()) 
            ?>
        </h3>
    </section>
    
</body>

</html>