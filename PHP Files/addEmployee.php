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
        <br><br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
        <h2>Add an Employee</h2>
                </div>
            </div>
        <hr>
        <br>
        <div class="row">
                <div class="offset-4 col-3">
                    <label>First Name: </label>
                        <div class="form-control">
                            <input type="text" id="employeeFirstName" name="employeeFirstName">&nbsp;
                        </div>
                    <label>Last Name: </label>
                        <div class="form-control">
                            <input type="text" id="employeeLastName" name="employeeLastName">&nbsp;
                        </div>
                    <label>Country: </label>
                        <div class="form-control">
                            <input type="text" id="employeeCountry" name="employeeCountry">&nbsp;
                        </div>
                    <label>City: </label>
                    <div class="form-control">
                        <input type="text" id="employeeCity" name="employeeCity">&nbsp;
                    </div>
                    <br>
                    
                    <button onclick="addEmployee()" class="btn btn-success btn-block">Add an Employee</button>
                </div>
            </div>
        </div>
    </body>
</html>
