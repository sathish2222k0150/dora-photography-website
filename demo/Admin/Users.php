    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Details</title>
        <link href="stylesheet.css" rel="stylesheet">
        <link rel="icon" href="./Images/logo.jpg" type="icon">
    </head>
    <body onload="loadData(1)">

    <h1>User Details</h1>

    <table id="demo"></table>
    <p id="pi"></p>
    <br>

    <div>
        <button id="kk1" type="button" onclick="loadData(1)"><b>1</b></button>
        <button onclick="nextPage()">Next Page</button>
    </div>

    <script>
        let currentPage = 1; // Initial page
        let totalPages = -1; // Set initial total pages to -1 for unlimited
        let baseURL = 'get_data.php?page=';

        function loadData(page) {
            let url = baseURL + page;
            let xhttp = new XMLHttpRequest();

            xhttp.open('GET', url, true);
            xhttp.onload = function () {
                let jsonObj = JSON.parse(this.responseText);
                myFunction(jsonObj);

                // Update total pages if available
                if (jsonObj.totalPages !== undefined) {
                    totalPages = jsonObj.totalPages;
                }

                currentPage = page;
            };
            xhttp.send();
        }

        function nextPage() {
            if (totalPages === -1 || currentPage < totalPages) {
                loadData(currentPage + 1);
            }
        }

        function myFunction(data) {
            if (data) {
                let dataArr = data.data;
                total = data.total;
                var table = "<tr><th>ID</th><th>Name</th>" +
                    "<th>Email</th><th>Subject</th><th>Message</th>" +
                    "<th>Delete</th></tr>";
                for (let i = 0; i < dataArr.length; i++) {
                    table += "<tr>";
                    table += "<td>" + dataArr[i].id + "</td>";
                    table += "<td>" + dataArr[i].name + "</td>";
                    table += "<td>" + dataArr[i].email + "</td>";
                    table += "<td>" + dataArr[i].subject + "</td>";
                    table += "<td>" + dataArr[i].message + "</td>";
                    // Add update and delete buttons with unique identifiers
                    table += "<td><button onclick='deleteRow(" + dataArr[i].id + ")'>Delete</button></td>";
                    table += "</tr>";
                }
                document.getElementById("demo").innerHTML = table;
            }
        }

        function deleteRow(id) {
            let confirmDelete = confirm("Are you sure you want to delete this record?");
            if (confirmDelete) {
                let xhttp = new XMLHttpRequest();
                xhttp.open('POST', 'delete_data.php', true);
                xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        alert(this.responseText);
                        loadData(currentPage); // Refresh the current page data after deletion
                    }
                };

                // Send data to delete_data.php
                xhttp.send('id=' + id);
            }
        }

        function m() {
            var x = document.getElementById("demo").rows.length;
            document.getElementById("pi").innerHTML = "Found " + x + " tr elements in the table.";
        }
    </script>
</script>
<style>
    body {
        background-color: #b3e6ff;
    }

    table, th, td {
        text-align: center;
        border: 1px solid black;
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
    }

    th {
        background-color: #F9AF41;
        color: white;
    }

    th, td {
        padding: 15px 25px;
        font-size: 30px;
    }

    td {
        background-color: #ffe39f;
    }

    h1 {
        text-align: center;
        font-size: 50px;
    }

    button {
        padding: 8px 20px;
        border: 1px solid black;
        border-radius: 4px;
        background-color: black;
        font-size: 20px;
        font-family: cursive;
        color: white;
        line-height: inherit;
        
    }

    div {
        width: 350px;
        height: 50px;
        margin-left: auto;
        margin-right: auto;
    }

    button:hover {
        background-color: aquamarine;
        color: black;
    }

    p {
        color: black;
    }

    /* Style for the update form */
    #updateForm {
        width: 300px;
        margin: 20px auto;
        padding: 15px;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Style for form input fields */
    #updateForm input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    /* Style for the update button */
    #updateForm input[type="button"] {
        background-color: #4caf50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
    }

    /* Style for the update button on hover */
    #updateForm input[type="button"]:hover {
        background-color: #45a049;
    }


</style>
</body>
</html>
