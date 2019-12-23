<?php 

class DatabaseConnection{    
    
    public function __construct(){
                
        $dbCredencialJson = file_get_contents("credencial_database.json");
        $dbCredencialArray = json_decode($dbCredencialJson, true);

        $db = new PDO(
            'mysql:host=127.0.0.1;dbname=bookstore',
            $dbCredencialArray['db']['user'],
            $dbCredencialArray['db']['password']
            );
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
        
       $rows = $db->query('SELECT * FROM book ORDER BY title');
        foreach ($rows as $row) {
            var_dump($row);
        }
        
        $nextLine = "-----------------------------------------------------------------------------------
        ------------------------------------------------------------------------------------------<br>";
        echo($nextLine);
        
        $query = 'INSERT INTO book (isbn, title, author, price)
            VALUES ("9788187981954", "Peter Pan", "J. M. Barrie", 2.34)';
        $result = $db->exec($query);
        var_dump($result); // true
        $error = $db->errorInfo()[2];
        var_dump($error); // Duplicate entry '9788187981954' for key 'isbn'
        
        echo($nextLine);
        
        $query = 'SELECT * FROM book WHERE author = :authorVariable';
        $statement = $db->prepare($query);
        $statement->bindValue('authorVariable', 'George Orwell');
        $statement->execute();
        $rows = $statement->fetchAll();
        var_dump($rows);
        
        echo($nextLine);
        
        $query = 'UPDATE book SET stock = stock + :n WHERE id = :idVariable';
        $statement = $db->prepare($query);
        $statement->bindValue('idVariable', 1);
        $statement->bindValue('n', 2);
        if (!$statement->execute()) {
            throw new Exception($statement->errorInfo()[2]);
        }
        
        
        try {
            $this->addSale(1, [1, 2, 3]);
        } catch (Exception $e) {
            echo 'Error adding sale: ' . $e->getMessage();
        }
        
        $query = 'SELECT * FROM sale';
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        var_dump($rows); 
        
    }
   
    /* 
      transactions
      beginTransaction : This will start the transaction.
      commit : This will commit your changes. Keep in mind that if you do not
            commit and the PHP script finishes or you close the connection explicitly,
            MySQL will reject all the changes you made during this transaction.
      rollBack : This will roll back all the changes that were made during this
            transaction.
      */
    public function addSale(int $userId, array $bookIds): void {
        $db = new PDO(
            'mysql:host=127.0.0.1;dbname=bookstore',
            'root',
            ''
            );
        $db->beginTransaction();
        try {
            $query = 'INSERT INTO sale (customer_id, date) '
            . 'VALUES(:id, NOW())';
            $statement = $db->prepare($query);
            if (!$statement->execute(['id' => $userId])) {
                throw new Exception($statement->errorInfo()[2]);
            }
            $saleId = $db->lastInsertId();
            $query = 'INSERT INTO sale_book (book_id, sale_id) '
            . 'VALUES(:book, :sale)';
            $statement = $db->prepare($query);
            $statement->bindValue('sale', $saleId);
            foreach ($bookIds as $bookId) {
                $statement->bindValue('book', $bookId);
                if (!$statement->execute()) {
                    throw new Exception($statement->errorInfo()[2]);
                }
            }
            $db->commit();
        } catch (Exception $e) {
            $db->rollBack();
            throw $e;
        }
    }
    
}


new DatabaseConnection();

?>


















