<?php
function buy(array $productData = [])
{
    $db = DB::connect();
    try {
        $db->beginTransaction();

        $product = db_find('products', $productData['goods_id']);
        $quantity = calculateQuntity($product, $productData['quantity']);
        $isAdditions = !empty($productData['additions']) && !empty($productData['additions_qnty']);

        if (updateProductQuantity($productData['goods_id'], $quantity) && $isAdditions){
           updateAdditions($productData);
        }
        $db->commit();

        alert(
            'success',
            'Excellent purchase'
        );

    } catch (PDOException $exception) {
        $db->rollBack();
        alert(
            'danger',
            'Oops, smth went wrong!'
        );
    } catch (Exception $exception) {
        $db->rollBack();
        alert(
            'danger',
            $exception->getMessage()
        );
    }
    finally {
        redirect();
    }
}
function calculateQuntity(array $product, int $requestQnty): int
{
    $prodQnty = (int)$product['quantity'];
    if ($prodQnty < $requestQnty) {
        throw new Exception('The requsted qnty more then goods qnty');
    }
    return (int)$product['quantity'] - $requestQnty;
}

function updateProductQuantity(int $id, int $quantity): bool
{
    $db = DB::connect();
    $query = "UPDATE products SET quantity = :quantity WHERE id = :id";
    $query = $db->prepare($query);

    $query->bindParam('quantity', $quantity, PDO::PARAM_INT);
    $query->bindParam('id', $id, PDO::PARAM_INT);

    return $query->execute();
}
function updateAdditions(array $productData)
{
    $additions = array_combine($productData['additions'], $productData['additions_qnty']);
    foreach ($additions as $id => $qnty) {
        $product = db_find('products', $id);
        $quantity = calculateQuntity($product, $qnty);
        updateProductQuantity($id, $quantity);
    }
}