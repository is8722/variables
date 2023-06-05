<html>
    <head><title>les variables</title></head>

    <body>
        <?php 
        $name = "Ismaël";
        $age = "35";
        $eyes = "brown";
        $family = array(
            '0' => "Faïza", 
            '1' => 'Nassim',
            '2' => 'Issra',
        );
        $hungry = true;
        ?>
        
        <p>Hi! My name is <?php echo $name ?>!</p>

        <p>I am <?php echo $age?> old.</p>

        <p>My eyes are <?php echo $eyes?>.</p>

        <p>The first person in my family is <?php echo $family['0']?>.</p>

        <p>Do you hungry? <?php echo $hungry?> </p>
    </body>
</html>


