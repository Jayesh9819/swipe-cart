<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>Subcategary</h5>
                        <form class="d-inline-flex">
                            <a href="./addSubcategary" class="align-items-center btn btn-theme d-flex">
                                <i data-feather="plus-square"></i>Add New
                            </a>
                        </form>
                    </div>
                    <?php
                    include("./App/Logic/db_connect.php");
                    // Retrieve data from the "category" table
                    $sql = "SELECT * FROM subcategary";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data in an HTML table
                        echo '<div class="table-responsive category-table">';
                        echo '<div>';
                        echo '<table class="table all-package theme-table" id="table_id">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th>id</th>';
                        echo '<th> name</th>';
                        echo '<th>time</th>';
                        echo '<th>status</th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';

                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . htmlspecialchars($row['id']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['name']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['time']) . '</td>';
                            echo '<td>';
                            echo '<ul>';
                            echo '<li><a href="order-detail.html"><i class="ri-eye-line"></i></a></li>';
                            echo '<li><a href="javascript:void(0)"><i class="ri-pencil-line"></i></a></li>';
                            echo '<li><a href="../App/Logic/subcategary.php/delete?id=' . $row['id'] . '"><i class="ri-delete-bin-line"></a>';

                            echo '</ul>';
                            echo '</td>';
                            echo '</tr>';
                        }

                        echo '</tbody>';
                        echo '</table>';
                        echo '</div>';
                        echo '</div>';
                    } else {
                        echo "No records found in the 'Subcategary' table.";
                    }

                    $conn->close();
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>