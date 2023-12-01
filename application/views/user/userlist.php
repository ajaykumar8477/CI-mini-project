<html>
    <head>
        <title> User Address</title>
        <?= link_tag("css/bootstrap.css")?>
       
        <body>
            <table>
                <tr>
                    <td>Id</td>
                    <td>Product Name</td>
                    <td>Product Quantity</td>
                    
                </tr>
               <?php foreach($user as $use):?>
                <tr>
                    <td><?php echo $use->id ?></td>
                    <td><?php echo $use->product_name ?></td>
                    <td><?php echo $use->product_quantity ?></td>
                </tr>
            
                <?php endforeach; ?>
            </table>
        </body>
    </head>
</html>