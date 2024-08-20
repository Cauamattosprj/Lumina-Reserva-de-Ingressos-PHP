<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumina - Reserva de Ingressos</title>
    <link rel="stylesheet" href="style/buy-ticket.css">
</head>
<body>
    <?php 
    include './partials/navbar.php';


    // Lembrar da escolha do evento (EM ANDAMENTO)
    switch ($_GET['ticket_option']) 
    {
        case 1:
            echo '1';
            if (isset($_GET['ticket_option']) == 1) {
                $ticket_event_date = date('Y-m-d'); 
            
                ticket_date_cookie($ticket_event_date);

                echo ticket_date_cookie($ticket_event_date);
            }
            break;
        case 2:
            $date = $_COOKIE['ticket-date'];
            echo 'Mozart - ' . $date;
            break;
        case 3:
            $date = $_COOKIE['ticket-date'];
            echo 'Mozart - ' . $date;
            break;    
    }

    // Exibir os assentos disponíveis

    // Após a escolha dos assentos, atualizar os valores e prosseguir para os métodos de pagamento





    ?>


</body>

</html>