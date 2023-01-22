<?php include 'navigationbar.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Techspardha Backend</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="./css/queryList.css">

<body>


    <!-- add bootstarp login nav -->

    

    <script src="./js/signOut.js"></script>

    <!-- add the on load script to check the  jwt -->
    <div class="container query">
        <h1>Queries</h1>
        <input type="text" id="clipboard" />
        <div class="table-responsive-sm">
            <table class="table table-bordered query-table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Query</th>
                        <th scope="col">Date/Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>Loading...</td>
                        <td>Loading...</td>
                        <td>Loading...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <table class="query-row">
        <tr>
            <th scope="row" class="delete">
                <svg>
                    <use xlink:href="svg/delete.svg#delete"></use>
                </svg>
            </th>
            <td class="email_col">
                <span class="email"></span>
                <span class="copy">
                    <svg>
                        <use xlink:href="svg/copy.svg#copy"></use>
                    </svg>
                </span>
            </td>
            <td class="query-para"></td>
            <td class="date"></td>
        </tr>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

<script src="./js/queryList.js"></script>

</html>