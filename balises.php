<?php
$a = 1;
?>

<?php
echo 'ok';
?>

<!-- Syntaxe raccourcie -->
<?php echo 'ok'; ?>
<?= 'ok'; ?>

<?php
    if(true) {
        // code
    } elseif {
        //code
    } else {
        //code
    }

    if(true): 
        // code
    elseif(true):
        // code
    else:
        // code
    endif;


    foreach($tableau as $ligne) {

    }

    foreach($tableau as $ligne) :
        
    endforeach;
?>

<?php foreach($tableau as $ligne) : ?>

    <h1></h1>
    <p></p>

<?php endforeach; ?>