<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="index.js"></script>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2>The Employees List: </h2> 
                        <hr>
                        <br>
                </div>
            </div>
            <div class="row">
                <div class="offset-4 col">
                    <button onclick="getEmployeesList()" type="button" class="btn btn-primary">Get The Employees List</button>
                        &nbsp;&nbsp;
                    <a href="addEmployee.php" >
                        <button type="button" class="btn btn-success">Add an Employee</button>
                    </a>
                        &nbsp;&nbsp;
                    <a href="deleteEmployee.php">
                        <button type="button" class="btn btn-danger">Delete an Employee</button>
                    </a>
                        &nbsp;&nbsp;
                </div>
            </div>
        </div>
        <br>
        <table id="tableEmployees"></table>
    </body>
</html>
