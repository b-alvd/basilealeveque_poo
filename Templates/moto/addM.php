<form action="" method="POST">
    <label for="type">Marque :</label>
    <input type="text" name="brand" id="brand"> <br>
    <label for="type">Modèle :</label>
    <input type="text" name="model" id="model"> <br>
    <label for="type">Type :</label>
    <select id="type" name="type">
        <option value="Enduro">Enduro</option>
        <option value="Custom">Custom</option>
        <option value="Sportive">Sportive</option>
        <option value="Roadster">Roadster</option>
    </select> <br>
    <label for="price">Prix :</label>
    <input type="number" min="0" name="price" id="price"> <br>
    <input type="submit" value="Ajouter">
</form>