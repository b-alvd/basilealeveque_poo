<?php
    namespace Src\Controller;

    use Src\Entity\Moto;
    use Src\Manager\MotoManager;

    class MotoController {
        private MotoManager $motoManager;

        public function __construct() {
            $this->motoManager = new MotoManager();
        }

        public function getAll() {
            $motos = $this->motoManager->findAll();
            include(__DIR__ . "/../../Templates/moto/index.php");
        }

        public function getById(int $id) {
            $moto = $this->motoManager->findById($id);

            if ($moto) {
                include(__DIR__ . "/../../Templates/moto/detailM.php");
            } else {
                echo("Moto introuvable");
            }
        }

        public function getByType(string $type) {
            $motos = $this->motoManager->findByType($type);
            include(__DIR__ . "/../../Templates/moto/index.php");
        }

        public function add() {
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                if((isset($_POST["brand"]) && !empty($_POST["brand"])) && (isset($_POST["model"]) && !empty($_POST["model"])) && (isset($_POST["type"]) && !empty($_POST["type"])) && (isset($_POST["price"]) && !empty($_POST["price"]))) {
                    $moto = new Moto(0, $_POST["brand"], $_POST["model"], $_POST["type"], $_POST["price"], "https://img.freepik.com/photos-gratuite/vue-moto-cool-puissante_23-2150704865.jpg?w=740&t=st=1716647857~exp=1716648457~hmac=3345b622db9c568344494fd152f29198c2926237baf138768e9733bc1bf69dec");
                    $this->motoManager->add($moto);
                    header("Location: ./");
                } else {
                    echo("Veuillez renseigner tous les champs");
                }
            }

            include(__DIR__ . "/../../Templates/moto/addM.php");
        }

        public function edit(int $id) {
            $moto = $this->motoManager->findById($id);

            if(!$moto) {
                echo("Moto introuvable");
            }

            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                if((isset($_POST["brand"]) && !empty($_POST["brand"])) && (isset($_POST["model"]) && !empty($_POST["model"])) && (isset($_POST["type"]) && !empty($_POST["type"])) && (isset($_POST["price"]) && !empty($_POST["price"]))) {
                    $edit = new Moto($moto->getId(), $_POST["brand"], $_POST["model"], $_POST["type"], $_POST["price"], "https://img.freepik.com/photos-gratuite/vue-moto-cool-puissante_23-2150704865.jpg?w=740&t=st=1716647857~exp=1716648457~hmac=3345b622db9c568344494fd152f29198c2926237baf138768e9733bc1bf69dec");
                    $this->motoManager->edit($edit);
                    header("Location: ../");
                } else {
                    echo("Veuillez renseigner tous les champs");
                }
            }

            include(__DIR__ . "/../../Templates/moto/editM.php");
        }

        public function delete($id) {
            $moto = $this->motoManager->findById($id);

            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                if($_POST["choice"] === "Oui") {
                    $this->motoManager->delete($id);
                    header("Location: ../");
                } else {
                    header("Location: ../");
                }
            }

            include(__DIR__ . "/../../Templates/moto/deleteM.php");
        }
    }
?>