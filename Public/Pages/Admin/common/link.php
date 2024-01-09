<!-- Google font-->
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

<link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">

<!-- Fontawesome css -->
<link rel="stylesheet" type="text/css" href="../Other/Admin_assets/assets/css/vendors/font-awesome.css">

<!-- Linear Icon css -->
<link rel="stylesheet" href="../Other/Admin_assets/assets/css/linearicon.css">

<!-- Themify icon css -->
<link rel="stylesheet" type="text/css" href="../Other/Admin_assets/assets/css/vendors/themify.css">

<!-- Feather icon css -->
<link rel="stylesheet" type="text/css" href="../Other/Admin_assets/assets/css/vendors/feather-icon.css">

<!-- remixicon css -->
<link rel="stylesheet" type="text/css" href="../Other/Admin_assets/assets/css/remixicon.css">

<!-- Data Table css -->
<link rel="stylesheet" type="text/css" href="../Other/Admin_assets/assets/css/datatables.css">

<!-- Plugins css -->
<link rel="stylesheet" type="text/css" href="../Other/Admin_assets/assets/css/vendors/scrollbar.css">
<link rel="stylesheet" type="text/css" href="../Other/Admin_assets/assets/css/vendors/animate.css">

<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="../Other/Admin_assets/assets/css/vendors/bootstrap.css">

<!-- App css -->
<link rel="stylesheet" type="text/css" href="../Other/Admin_assets/assets/css/style.css">

<!-- Include Select2 CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.8/css/dataTables.jqueryui.min.css">

<!-- DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.js"></script>

<script>
$(document).ready(function() {
    $.fn.dataTable.ext.errMode = 'throw'; // or 'none'

    // Destroy DataTable if it already exists
    if ($.fn.DataTable.isDataTable('#table_id')) {
        $('#table_id').DataTable().destroy();
    }

    // Initialize DataTable
    $('#table_id').DataTable({
        searching: true,
        paging: true,
        ordering: true
    });
    new $.fn.dataTable.Buttons(table, {
        buttons: [
            {
                extend: 'colvis',
                postfixButtons: ['colvisRestore'],
                collectionLayout: 'fixed two-column'
            }
        ]
    });

    // Add the controls to the desired location
    $('#columnToggleDropdown').on('click', function () {
        table.buttons().container().appendTo($('#columnControls'));
    });

});
</script>
