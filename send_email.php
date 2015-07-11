<?php
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'leonel':
            select();
            break;
    }
} else {
    echo "error ";
    exit;
}

function select() {
    session_start();
    $_SESSION['send_email_to'] = 'leonel@a.pt';
    session_write_close();
    echo "session variable set";
    echo $_SESSION['send_email_to'];
    exit;
}
?>