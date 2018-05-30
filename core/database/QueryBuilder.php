<?php
/**
 * QueryBuilder
 */
class QueryBuilder
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $class = null)
    {
        $query = "select * from {$table};";

        $statement = $this->pdo->prepare($query);

        $statement->execute();

        return $class ? $statement->fetchAll(PDO::FETCH_CLASS, $class) : $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (PDOException $e) {
            die(var_dump($e->getMessage()));
        }


    }
}