<!DOCTYPE html>
<html>
<head>
    <title>Ars Systems Test Laravel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <style>
    table {
    table-layout: fixed;
    width: 100%;
    border-collapse: collapse;
    border: 3px solid purple;
    }
    th, td {
    padding: 20px;
    }
    </style>
</head>
<body>
<div class="container" id="app">
    <div class="row">
        <div class="col-sm-12">
            <h1>Showing data from database</h1>
            <div class="panel panel-default">
                <table id="dbdata">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Description</th>
                        <th></th>Name</th>
                        <th>Amount</th>
                        <th>Price</th>
                        <th>Category</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody></table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    var url = "{{ route('insert.data') }}";
            $.ajax({
                type: 'get',
                url: url,
                success: function (response) {
                   $.each(response, function (index, value) {
                         $('#dbdata tbody').append("<tr><td>" + value.Id + "</td><td>" + value.Description + "</td><td>" + value.Name + "</td><td>" + value.Amount + "</td><td>" + value.Price + "</td><td>" + value.Category + "</td></tr>");
                    });
                }
            });

</script>

</body>
</html>
