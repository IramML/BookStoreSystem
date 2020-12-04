<?php
include '../../../includes/model.php';

class GetBooksModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    function getBooks(){
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM book WHERE is_archived = 0");
            $items = $query->fetchAll(PDO::FETCH_ASSOC);
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }
}