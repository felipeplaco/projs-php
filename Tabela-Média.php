<?php
$nome = "Felipe";
$celular = "11987654321";
$nota1 = 7.5;
$nota2 = 8.5;

$media = ($nota1 + $nota2) / 2;

echo "<table border='1'>
        <tr>
            <th>nome</th>
            <th>cel</th>
            <th>nota1</th>
            <th>nota2</th>
            <th>media</th>
        </tr>
        <tr>
            <td>$nome</td>
            <td>$celular</td>
            <td>$nota1</td>
            <td>$nota2</td>
            <td>$media</td>
        </tr>
      </table>";
?>