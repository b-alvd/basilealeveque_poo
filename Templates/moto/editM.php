<form action="" method="POST">
    <label for="type">Marque :</label>
    <input type="text" name="brand" id="brand" value="<?php echo $moto->getBrand() ?>"> <br>
    <label for="type">Modele :</label>
    <input type="text" name="model" id="model" value="<?php echo $moto->getModel() ?>"> <br>
    <label for="type">Type:</label>
    <select id="type" name="type">
        <option value="Enduro">Enduro</option>
        <option value="Custom">Custom</option>
        <option value="Sportive">Sportive</option>
        <option value="Roadster">Roadster</option>
    </select> <br>
    <label for="price">Prix :</label>
    <input type="number" min="0" name="price" id="price" value="<?php echo $moto->getPrice() ?>"> <br>
    <input type="submit" value="Valider">
</form>