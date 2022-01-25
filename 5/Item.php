<?php

class Item
{
    private $id; // не может быть отрицательным или 0
    private $title; // максимум 10 символов
    private $price; // не может быть отрицательным или 0
    private $material; // минимум 3 символа

    // свойства title и id являются обязательными,
    public function __construct(int $id, string $title, int $price, string $material)
    {
        if ($id <= 0) {
            throw new InvalidAegumentException('Id не может быть отрицательным или 0');
        }
        $this->id = $id;
        if (strlen($title) > 10) {
            throw new InvalidAegumentException('title максимум 10 символов');
        }
        $this->title = $title;
        if ($price <= 0) {
            throw new InvalidAegumentException('price не может быть отрицательным или 0');
        }
        $this->price = $price;
        if (strlen($material) < 3) {
            throw new InvalidAegumentException('material минимум 3 символа');
        }
        $this->material = $material;
    }

    // добавить все необходимые геттеры и сеттеры

    public function setId(int $id): void
    {
        if ($id <= 0) {
            throw new InvalidAegumentException('Id не может быть отрицательным или 0');
        }
        $this->id = $id;
    }
     public function setTitle(string $title): void
    {
        if (strlen($title) > 10) {
            throw new InvalidAegumentException('title максимум 10 символов');
        }
        $this->title = $title;
    }
    public function setPrice(int $price): void
    {
        if ($price <= 0) {
            throw new InvalidAegumentException('price не может быть отрицательным или 0');
        }
        $this->price = $price;
    }
      public function setMaterial(string $material): void
    {
        if (trlen($material) < 3) {
            throw new InvalidAegumentException('material минимум 3 символа');
        }
        $this->material = $material;
    }


       public function getId(): int
    {
        return $this->id;
    }

      public function getTitle(): string
    {
        return $this->title;
    }

     public function getPrice(): ?int
    {
        return $this->price;
    }


    public function getMaterial(): ?string
    {
        return $this->material;
    }

}