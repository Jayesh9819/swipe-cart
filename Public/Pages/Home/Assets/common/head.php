<?php
include './App/Logic/db_connect.php';

$sql = "SELECT * FROM settings";
$result = $conn->query($sql);
global $site;
$site = $result->fetch_assoc();

$segments = explode('/', rtrim($uri, '/'));
$lastSegment = end($segments);

// Replace underscores with spaces and capitalize the first letter of each word
$pageTitle = ucwords(str_replace('_', ' ', $lastSegment));
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $site['description']; ?>">
<meta name="keywords" content="<?php echo $site['keyword']; ?>">
<meta name="author" content="<?php echo $site['author']; ?>">
<link rel="icon" href="<?php echo $site['favicon']; ?>" type="image/x-icon">
<title><?php echo $pageTitle; ?> || <?php echo $site['Site-name']; ?> </title>

<!-- Google font -->
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Russo+One&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" rel="stylesheet">

<!-- Bootstrap CSS -->
<link id="rtl-link" rel="stylesheet" type="text/css" href="../Other/Home_assets/assets/css/vendors/bootstrap.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!-- Wow CSS -->
<link rel="stylesheet" href="../Other/Home_assets/assets/css/animate.min.css" />

<!-- Slick CSS -->
<link rel="stylesheet" type="text/css" href="../Other/Home_assets/assets/css/vendors/slick/slick.css">
<link rel="stylesheet" type="text/css" href="../Other/Home_assets/assets/css/vendors/slick/slick-theme.css">

<!-- Feather Icons -->
<link rel="stylesheet" type="text/css" href="../Other/Home_assets/assets/css/vendors/feather-icon.css">

<!-- Iconly CSS -->
<link rel="stylesheet" type="text/css" href="../Other/Home_assets/assets/css/bulk-style.css">

<!-- Template CSS -->
<link id="color-link" rel="stylesheet" type="text/css" href="../Other/Home_assets/assets/css/style.css">
