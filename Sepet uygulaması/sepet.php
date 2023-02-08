<?php 
include "connection.php";
$urunler = $db -> query("SELECT * FROM urunler WHERE sepet='TRUE'")->fetchall(PDO :: FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sepet uygulaması</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style>
        .check{height: 20px; width: 20px;}
    </style>
</head>
<body>
    

<div class="container">
    <div class="table-responsive">
        
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <tr>
                    <th>Seç</th>
                    <th>Ürün</th>
                    <th>Ürün Açıklaması</th>
                    <th>Ürün Fiyatı</th>
                    <th></th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php 
                    foreach ($urunler as $veri) {
                    
                        echo 
                        '
                        
                        <tr class="table-primary" >
                            <td>
                                <input class="check" type="checkbox" name="check" id="'.$veri["id"].'">
                            </td>
                            <td scope="row">'.$veri["urun_ad"].'</td>
                            <td>'.$veri["urun_aciklama"].'</td>
                            <td>'.$veri["urun_fiyat"].'₺</td>
                        </tr>
                        
                        ';

                    }

                    ?>
                    
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
        <button onclick="subtract()" type="button" class="btn btn-primary m-2">Sepetten çıkar</button>
        <button onclick="subtract_all()" type="button" class="btn btn-primary m-2">Hepsini sepetten çıkar</button>
        <a name="" id="" class="btn btn-primary m-2" href="index.php" role="button">Ürünlere git</a>
    </div>
    
</div>

</body>
</html>

<script>

    function subtract(){
        var item = document.getElementsByName("check");
        item.forEach(element => {
            if(element.checked){
                var gonderid = element.id;
                $.post(
                "subtract.php",
                {id:gonderid},
                function(data,status)
                {
                    element.parentElement.parentElement.remove();
                }
                );
            }
        }); 
    }

    function subtract_all(){
        var item = document.getElementsByName("check");
        item.forEach(element => {
            
                var gonderid = element.id;
                $.post(
                "subtract.php",
                {id:gonderid},
                function(data,status)
                {
                    element.parentElement.parentElement.remove();
                }
                );
            
        }); 
    }

</script>