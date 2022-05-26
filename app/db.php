<?php

/**
 * @param string $from
 * @param string $columns
 * @param string|null $conditions
 * @param string|null $order
 * @return array|false
 */
function db_select(string $from, string $columns = '*', string $conditions = null, string $order = null)
{
    $db = DB::connect();

    $query = "SELECT {$columns} FROM {$from}";
    $query .= $conditions ? " WHERE {$conditions}" : '';
    $query .= $order ? " ORDER BY {$order}" : '';


    $query = $db->prepare($query);
    $query->execute();

    return $query->fetchAll();
}
function db_find (string $from, string|int $id)
{
    $db = DB::connect();
    $query = $db->prepare("SELECT * FROM {$from} WHERE id = :id");

    $query->bindParam('id', $id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch();
}
