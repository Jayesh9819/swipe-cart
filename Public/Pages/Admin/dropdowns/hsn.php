<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>HSN</h5>
                        <form class="d-inline-flex">
                            <a href="./addhsn" class="align-items-center btn btn-theme d-flex">
                                <i data-feather="plus-square"></i>Add New
                            </a>
                        </form>
                    </div>
                    <?php
                    include("./App/Logic/db_connect.php");
                    // Retrieve data from the "category" table
                    $sql = "SELECT * FROM hsn";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data in an HTML table
                        echo '<div class="table-responsive category-table">';
                        echo '<div>';
                        echo '<table class="table all-package theme-table" id="table_id">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th>ID</th>';
                        echo '<th> Name</th>';
                        echo '<th>Date</th>';
                        echo '<th>Option</th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';

                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . htmlspecialchars($row['id']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['name']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['Time']) . '</td>';
                            echo '<td>';
                            echo '<ul>';
                            echo '<li><a href="order-detail.html"><i class="ri-eye-line"></i></a></li>';
                            echo '<li><a href="javascript:void(0)"><i class="ri-pencil-line"></i></a></li>';
                            echo '<li><a href="../App/Logic/hsn.php/hsndelete?id=' . $row['id'] . '"><i class="ri-delete-bin-line"></a>';

                            echo '</ul>';
                            echo '</td>';
                            echo '</tr>';
                        }

                        echo '</tbody>';
                        echo '</table>';
                        echo '</div>';
                        echo '</div>';
                    } else {
                        echo "No records found in the 'category' table.";
                    }

                    $conn->close();
                    ?>

                   
                    
                </div>
            </div>
        </div>
    </div>
</div>