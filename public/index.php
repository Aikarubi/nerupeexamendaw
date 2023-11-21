<html>
    <head>
        <title>Nerea Rubio</title>
        
    </head>
    <body>
        
            <?php
                echo "<h1>viva el lol</h1>";
                echo "<h2> Profe ha ganado t1</h2>";

                $conn = mysqli_connect('database', 'root', 'root', "mamoro");
                $query = 'SELECT * FROM persona';
                $result = mysqli_query($conn, $query);

                echo '<table class="table table-striped">';
                echo 'ID NOMBRE ESTILO';
                while($value = $result->fetch_array(MYSQLI_ASSOC)){
                    echo '<tr>';
                    foreach($value as $element){
                        echo '<td>' . $element . '</td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';

                $result->close();
                mysqli_close($conn);
            ?>
        
    </body>
</html>
