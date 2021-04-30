
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php ?>

    <?php 

    $list_fruti = array();

    function add_data_array($fruti){
        global $list_fruti;
        $list_fruti[] = $fruti;
    }    

    add_data_array('uva');
    add_data_array('mango');
    add_data_array('mandarina');
    ?>

    <pre>
        <?php 
        print_r($list_fruti); 
        ?>
    </pre>



    <h2>Agenda de contacto</h2>
    <?php 
        $block_contacts = array();
        function add_contact($name, $email, $phone){
            global $block_contacts;
            $block_contacts[] = array(
                'nombre' => $name,
                'email' => $email,
                'telefono' => $phone
            );
        } 
        add_contact('carlos fabian', 'carfa@gmail.com', '234123');   
        add_contact('pedro', 'pedro@gmail.com', '234');   
        add_contact('fabian', 'fa@gmail.com', '23456');   

        function read_contac($id){
            global $block_contacts;
            echo "
                <hr>
                <b>Nombre: </b> {$block_contacts[$id]['nombre']} <br>
                <b>Email: </b>  {$block_contacts[$id]['email']}  <br>
                <b>Telefono: </b> {$block_contacts[$id]['telefono']}
                <hr>
            ";
            
        }


        function read_contacs(){
            global $block_contacts;
            foreach($block_contacts as $contac){
                echo "
                <hr>
                <b>Nombre: </b> {$contac['nombre']} <br>
                <b>Email: </b>  {$contac['email']}  <br>
                <b>Telefono: </b> {$contac['telefono']}
                <hr>
            ";
            }
        }

        //echo $block_contacts[1]['nombre'];
        read_contac(1);

        read_contacs();


    ?>

    <pre>
        <?php 
        print_r($block_contacts); 
        ?>
    </pre>


</body>
</html>