<nav>
    <ul>
        <li>
            <a href="./Enduro">Enduro</a>
        </li>
        <li>
            <a href="./Custom">Custom</a>
        </li>
        <li>
            <a href="./Sportive">Sportive</a>
        </li>
        <li>
            <a href="./Roadster">Roadster</a>
        </li>
    </ul>
</nav>

<ul>
    <?php
        foreach ($motos as $key => $moto) {
    ?>
        <li>
            <p>Marque : <?php echo $moto->getBrand() ?></p>
            <p>Modèle : <?php echo $moto->getModel() ?></p>
            <p>Type : <?php echo $moto->getType() ?></p>
            <p>Prix : <?php echo $moto->getPrice() ?> €</p>
            <img src="<?php echo $moto->getImageUrl() ?>" alt="image de la moto">
            <div>
                <a href="./edit/<?php echo $moto->getId() ?>">Modifier</a>
                <a href="./delete/<?php echo $moto->getId() ?>">Supprimer</a>
            </div>
        </li>
    <?php
        }
    ?>
</ul>