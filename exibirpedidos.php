<?php
$host = "localhost";
$uname = "id16408215_pedshopdb";
$pwd = "xxxxx";
$database = "id16408215_petshopdb";
$con = mysqli_connect($host, $uname, $pwd, $database);

 $q=mysqli_query($con, "SELECT * FROM tblsorveteriapedidos"); 
        ?>
        <center>
            <table border=1>
                <tr><td>Cliente</td><td>Data</td><td>Endereço</td><td>Pedido</td><td>Total</td></tr>
                <?php
                while ($row=mysqli_fetch_array($q)){		
                    echo("<tr><td>$row[cliente]</td><td>$row[dia]</td><td>$row[endereco]</td><td>$row[pedido]</td><td>$row[total]</td></tr>"); 
                }
                ?>
            </table>
        </center>