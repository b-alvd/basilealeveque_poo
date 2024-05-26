<?php
    namespace Src\Entity;

    use JsonSerializable;

    class Moto implements JsonSerializable {
        private int $id;
        private string $brand;
        private string $model;
        private string $type;
        private float $price;
        private string $imageUrl;

        public function __construct(int $id, string $brand, string $model, string $type, float $price, string $imageUrl) {
            $this->id = $id;
            $this->brand = $brand;
            $this->model = $model;
            $this->type = $type;
            $this->price = $price;
            $this->imageUrl = $imageUrl;
        }

        public function jsonSerialize(): array {
            return [
                "id" => $this->getId(),
                "brand" => $this->getBrand(),
                "model" => $this->getModel(),
                "type" => $this->getType(),
                "price" => $this->getPrice(),
                "imageUrl" => $this->getImageUrl(),
            ];
        }

        static public function fromArray(array $array): self {
            return new self($array["id"], $array["brand"], $array["model"], $array["type"], $array["price"], $array["image"]);
        }

        public function getId() {
            return $this->id;
        }

        public function getBrand() {
            return $this->brand;
        }

        public function setBrand($brand) {
            $this->brand = $brand;
            return $this;
        }

        public function getModel() {
            return $this->model;
        }

        public function setModel($model) {
            $this->model = $model;
            return $this;
        }

        public function getType() {
            return $this->type;
        }

        public function setType($type) {
            $this->type = $type;
            return $this;
        }

        public function getPrice() {
            return $this->price;
        }

        public function setPrice($price) {
            $this->price = $price;
            return $this;
        }

        public function getImageUrl() {
            return $this->imageUrl;
        }

        public function setImageUrl($imageUrl) {
            $this->imageUrl = $imageUrl;
            return $this;
        }
    }
?>