<?php

class Product
{
    public $id;
    public $name;
    public $description;

    /**
     * Ajoute un Produit à la BDD
     *
     * @param string $category_id Catégorie
     * @param string $name Nom du Produit
     * @param string $description Description du Porduit
     * @return void
     */
    public function add_product(string $category_id, string $name, string $description): void
    {
        $query = pdo()->prepare('INSERT INTO products (category_id, name, description) VALUES (?, ?, ?)');
        $query->execute([$category_id, $name, $description]);
    }

    /**
     * Récupère Produit avec id
     *
     * @param string|int $id du produit à récupérer
     * @return Product
     */
    public function get(string|int $id): Product
    {
        $query = pdo()->prepare('SELECT * FROM products WHERE id = ?');
        $query->setFetchMode(PDO::FETCH_CLASS, Product::class);
        $query->execute([$id]);
        $produit = $query->fetch();
        if (! $produit) {
            abort_404();
        }
        return $produit;
    }

    /**
     * Récupère tout les produits
     *
     * @param string $colonne de tri (id par defaut)
     * @param string $tri 'ASC' (par defaut) ou 'DESC'
     * @return array
     */
    public function get_all(string $colonne = 'id', string $tri = 'ASC'): array
    {
        $query = pdo()->query("SELECT * FROM products ORDER BY $colonne $tri");
        $products = $query->fetchAll(PDO::FETCH_CLASS, Product::class);
        return $products;
    }

    /**
     * Modifie un produit
     *
     * @param string|int $id du produit à modifier
     * @param array $params de type [$k => $v]
     * @return void
     */
    public function set(string|int $id, array $params): void
    {
        $produit = new Product;
        foreach ($params as $key => $value){
            $produit->$key = $value;
        }
        $query = pdo()->prepare("UPDATE products SET category_id=?, name=?, description=? WHERE id=?");
        $query->execute([$produit->category_id, $produit->name, $produit->description, $id]);
    }

    /**
     * Efface le produit de la BDD
     *
     * @return void
     */
    public function delete(): void
    {
        $query = pdo()->prepare("DELETE FROM products WHERE id=?");
        $query->execute([$this->id]);
    }
}
