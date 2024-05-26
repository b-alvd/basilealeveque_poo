<form action="" method="POST">
    Voulez vous supprimer cette moto : <?php echo $moto->getBrand() . ' ' . $moto->getModel() ?> ? <br>
    <input type="submit" name="choice" value="Oui, supprimer">
    <input type="submit" name="choice" value="Non, retour">
</form>