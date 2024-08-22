<?php
include 'functions.php';
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    reserve_seats();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumina - Reserva de Ingressos</title>
    <link rel="stylesheet" href="style/buy-ticket.css">
    <link rel="stylesheet" href="style/payment.css">
</head>
<body>
    <?php 
    include './partials/navbar.php';

    ?>


    <div id="event-title">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/Portrait_of_Wolfgang_Amadeus_Mozart_at_the_age_of_13_in_Verona%2C_1770.jpg/220px-Portrait_of_Wolfgang_Amadeus_Mozart_at_the_age_of_13_in_Verona%2C_1770.jpg" alt=""a width="50px">

        <span>
        <?php
        // Lembrar da escolha do evento (EM ANDAMENTO)
        switch ($_GET['ticket_option']) 
        {
            case 1:
                $ticket_event_date = date('d/m/Y', strtotime("+$_GET[ticket_option] day")); 

                echo "Mozart - Apresentação <br> $ticket_event_date";

                break;
            case 2:
                $ticket_event_date = date('d/m/Y', strtotime("+$_GET[ticket_option] day")); 

                echo "Mozart - Apresentação - $ticket_event_date";
                break;
            case 3:
                $ticket_event_date = date('d/m/Y', strtotime("+$_GET[ticket_option] day")); 

                echo "Mozart - Apresentação - $ticket_event_date";
                break;    
        }


        ?>
        </span>
    </div>

    <!-- // Exibir os assentos disponíveis -->
    

    <div id="seats">
        <h2>Escolha o seu assento:</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <!-- Fileira A -->
            <div>
                <input type="checkbox" class="checkbox" class="checkbox" name="seat_a1">
                <input type="checkbox" class="checkbox" class="checkbox" name="seat_a2">
                <input type="checkbox" class="checkbox" name="seat_a3">
                <input type="checkbox" class="checkbox" name="seat_a4">
                <input type="checkbox" class="checkbox" name="seat_a5">
                <input type="checkbox" class="checkbox" name="seat_a6">
                <input type="checkbox" class="checkbox" name="seat_a7">
                <input type="checkbox" class="checkbox" name="seat_a8">
                <input type="checkbox" class="checkbox" name="seat_a9">
                <input type="checkbox" class="checkbox" name="seat_a10">
                <input type="checkbox" class="checkbox" name="seat_a11">
                <input type="checkbox" class="checkbox" name="seat_a12">
            </div>

            <div>
                <!-- Fileira B -->
                <input type="checkbox" class="checkbox" name="seat_b1">
                <input type="checkbox" class="checkbox" name="seat_b2">
                <input type="checkbox" class="checkbox" name="seat_b3">
                <input type="checkbox" class="checkbox" name="seat_b4">
                <input type="checkbox" class="checkbox" name="seat_b5">
                <input type="checkbox" class="checkbox" name="seat_b6">
                <input type="checkbox" class="checkbox" name="seat_b7">
                <input type="checkbox" class="checkbox" name="seat_b8">
                <input type="checkbox" class="checkbox" name="seat_b9">
                <input type="checkbox" class="checkbox" name="seat_b10">
                <input type="checkbox" class="checkbox" name="seat_b11">
                <input type="checkbox" class="checkbox" name="seat_b12">
            </div>

            <div>
                <!-- Fileira C -->
                <input type="checkbox" class="checkbox" name="seat_c1">
                <input type="checkbox" class="checkbox" name="seat_c2">
                <input type="checkbox" class="checkbox" name="seat_c3">
                <input type="checkbox" class="checkbox" name="seat_c4">
                <input type="checkbox" class="checkbox" name="seat_c5">
                <input type="checkbox" class="checkbox" name="seat_c6">
                <input type="checkbox" class="checkbox" name="seat_c7">
                <input type="checkbox" class="checkbox" name="seat_c8">
                <input type="checkbox" class="checkbox" name="seat_c9">
                <input type="checkbox" class="checkbox" name="seat_c10">
                <input type="checkbox" class="checkbox" name="seat_c11">
                <input type="checkbox" class="checkbox" name="seat_c12">
            </div>

            <input type="submit" id="submit" value="Reservar assentos">

        </form>
    </div>



    <!-- // Após a escolha dos assentos, atualizar os valores e prosseguir para os métodos de pagamento -->


    


</body>

</html>