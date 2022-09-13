<?php 

class Category
{
    public $id;
    public $name;

    public function get_all(): array
    {
        $query = pdo()->query("SELECT * FROM categories");
        $categories = $query->fetchAll(PDO::FETCH_CLASS, Category::class);
        return $categories;
    }
}
