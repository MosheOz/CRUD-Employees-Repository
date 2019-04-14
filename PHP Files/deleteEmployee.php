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
        <br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
            <h2>Delete an Employee</h2>
            </div>
        </div>
        <hr>
        <br>
        <div class="row">
                <div class="offset-3 col-5">
                    <label>Please insert Employee ID: </label>
                    <br>
                        <div class="form-control">
                            <input type="text" id="employeeID" name="employeeID">
                        </div>
                    
                    <br><br>
                    <button onclick="deleteEmployee()" type="button" class="btn btn-danger btn-block">Delete</button>
                </div>
            </div>
        </div>
    </body>
</html>
