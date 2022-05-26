<?php
/**
 * @param array $data
 * @return array
 */
function convertToAssoc(array $data = []): array
{
    $assoc = [];

    if (!empty($data)){
        foreach ($data as $row) {
            $assoc[$row['name']] = json_decode($row['body'], true);
        }
    }

    return $assoc;
}

function redirect($path = '/')
{
    $url = DOMAIN . $path;
    header("Location: {$url}");
    exit;
}
function alert(string $class, string $text)
{
    unset($_SESSION['alert']);

    $_SESSION['alert'] = [
        'class' => $class,
        'text' => $text
    ];
}

function formError($field = null)
{
    $message = "<span class='alert alert-danger'>%s</span>";
    if ($field) {
        echo sprintf($message, $field);
    }
}
