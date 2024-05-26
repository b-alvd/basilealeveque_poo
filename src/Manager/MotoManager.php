<?php
    namespace Src\Manager;

    use Exception;
    use PDOException;
    use Src\Entity\Moto;

    class MotoManager extends DataBaseManager {
        public function findAll() {
            $request = $this->getConnection()->prepare("SELECT * FROM motos");
            $request->execute([]);

            $results = $request->fetchAll();
            $motos = [];

            foreach ($results as $result) {
                $motos[] = Moto::fromArray($result);
            }

            return $motos;
        }

        public function findByType(string $type) {
            $request = $this->getConnection()->prepare("SELECT * FROM motos WHERE type = :type");
            $request->execute([
                ':type' => $type
            ]);

            $results = $request->fetchAll();
            $motos = [];

            foreach ($results as $result) {
                $motos[] = Moto::fromArray($result);
            }

            return $motos;
        }

        public function findById(int $id): Moto|false {
            $request = $this->getConnection()->prepare("SELECT * FROM motos WHERE id = :id");
            $request->execute([
                ":id" => $id
            ]);
            $result = $request->fetch();
        
            if ($result === false) {
                return false;
            }
        
            return Moto::fromArray($result);
        }        

        public function add(Moto $moto) {
            try {
                $response = $this->getConnection()->prepare("INSERT INTO motos(brand, model, type, price, image) VALUES (:brand, :model, :type, :price, :image)");
                $response->execute([
                    ':brand' => $moto->getBrand(),
                    ':model' => $moto->getModel(),
                    ':type' => $moto->getType(),
                    ':price' => $moto->getPrice(),
                    ':image' => $moto->getImageUrl()
                ]);
            } catch (Exception $e) {
                echo ("Erreur lors de l'ajout en BDD");
                exit();
            }
        }

        public function edit(Moto $moto) {
            try {
                $response = $this->getConnection() ->prepare("UPDATE `motos` SET brand = :brand, model = :model, type = :type, price = :price, image = :image WHERE id = :id");
                $response->execute([
                    ':brand' => $moto->getBrand(),
                    ':type' => $moto->getType(),
                    ':model' => $moto->getModel(),
                    ':price' => $moto->getPrice(),
                    ':image' => $moto->getImageUrl(),
                    ':id' => $moto->getId(),
                ]);
            } catch (Exception $e) {
                echo($e->getMessage());
                exit();
            }
        }

        public function delete(int $id) {
            $request = $this->getConnection()->prepare("DELETE FROM motos WHERE id = :id");
            $request->execute([
                ':id' => $id
            ]);
        }
    }
?>