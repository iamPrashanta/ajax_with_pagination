<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Datatable CSS -->
    <link href='https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Datatable JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>

<body>

    <!-- Table -->
    <table id='empTable' class='display dataTable'>

        <thead>
            <tr>
                <th>Employee name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Salary</th>
                <th>City</th>
            </tr>
        </thead>

    </table>
    <script>
        $(document).ready(function() {
            $('#empTable').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url': 'ajaxfile.php'
                },
                'columns': [{
                        data: 'emp_name'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'gender'
                    },
                    {
                        data: 'salary'
                    },
                    {
                        data: 'city'
                    },
                ]
            });
        });
    </script>
</body>

</html>