
<?php include __DIR__ . '/../head.php';?>


<table>    
     
    <tr>
        <h1><?php echo $datos['titulo'] ?></h1>
        <p><?php echo $datos['texto'] ?></p>
    </tr>  

    <form>
        First name:<br>
        <input type="text" name="firstname"><br>
            Last name:<br>
            <input type="text" name="lastname">
        </form>  
   
    
</table>
</body>
</html>