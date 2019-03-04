var ajax;

function getEmployeesList(){
   ajax = new XMLHttpRequest();
   var url = "http://localhost/phpProjectFinal/API.php?command=getEmployees";
   ajax.onreadystatechange = handleResponse;
   ajax.open("GET", url, true);
   ajax.send();
}

function handleResponse(){
    if(ajax.readyState === 4) { // Data returned from the server.
        if(ajax.status === 200) { // There is no error.
            
            var response = JSON.parse(ajax.responseText);
//            alert(ajax.responseText);
            if(Array.isArray(response)) {
                createTable(response);
            }
            else {
                alert(response.message);
            }
            
        }
        else { // There is some error...
            alert("Error! Status: " + ajax.status + ", Message: " + ajax.statusText);
        }        
    }
}

function createTable(employees) {
    
    var tableEmployees = document.getElementById("tableEmployees");
    
    var headerTR = "<tr><th>First Name</th><th>Last Name</th><th>Country</th><th>City</th></tr>";
    
    var tableContent = headerTR;
    
    for(var i = 0; i < employees.length; i++) {
        var firstNameTD = "<td>" + employees[i].firstName + "</td>";
        var lastNameTD = "<td>" + employees[i].lastName + "</td>";
        var countryTD = "<td>" + employees[i].country + "</td>";
        var cityTD = "<td>" + employees[i].city + "</td>";
        var employeeTR = "<tr>" + firstNameTD + lastNameTD + countryTD + cityTD + "</tr>";
        tableContent += employeeTR;
    }
    
    tableEmployees.innerHTML = tableContent;
}

function addEmployee() {
    ajax = new XMLHttpRequest();
    var employeeFirstNameBox = document.getElementById("employeeFirstName");
    var employeeLastNameBox = document.getElementById("employeeLastName");
    var employeeCountryBox = document.getElementById("employeeCountry");
    var employeeCityBox = document.getElementById("employeeCity");
    
    var employeeFirstName = employeeFirstNameBox.value;
    var employeeLastName = employeeLastNameBox.value;
    var employeeCountry = employeeCountryBox.value;
    var employeeCity = employeeCityBox.value;
    
    if(!valid(employeeFirstNameBox, employeeLastNameBox)) {
        return;
    }

    var url = "http://localhost/phpProjectFinal/API.php?command=addEmployees&firstName=" + employeeFirstName  + "&lastName=" + employeeLastName + "&country=" + employeeCountry + "&city=" + employeeCity;
    ajax.open("POST", url , true);
    ajax.onreadystatechange = handleResponse;
    ajax.send();
}

function deleteEmployee(){
    ajax = new XMLHttpRequest();
    
    var employeeIDBox = document.getElementById("employeeID");
    var employeeID = employeeIDBox.value;
    
    if (confirm("are you sure?") == true){
        
        var url = "http://localhost/phpProjectFinal/API.php?command=deleteEmployees&employeeID="+ employeeID;
        ajax.open("POST", url, true);
        ajax.onreadystatechange = handleResponse;
        ajax.send();
    }
}

function valid(employeeFirstNameBox, employeeLastNameBox) {
    
    var employeeFirstName = employeeFirstNameBox.value;
    var employeeLastName = employeeLastNameBox.value;
    
    employeeFirstNameBox.style.backgroundColor = "";
    employeeLastNameBox.style.backgroundColor = "";
    
    if(employeeFirstName == "") {
        alert("First Name is missing");
        employeeFirstNameBox.style.backgroundColor = "red";
        employeeFirstNameBox.focus();
        return false;
    }

    if(employeeLastName == "") {
        alert("Last Name is missing");
        employeeLastNameBox.style.backgroundColor = "red";
        employeeLastNameBox.focus();
        return false;
    }
    return true;
}

