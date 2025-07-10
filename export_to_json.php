<?php
include 'common/header_start.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="assets/css/main.css" rel="stylesheet">
<style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
        }
        .button {
            background-color: #8fb3e2;
            color: white;
            padding: 10px 20px;
            margin: 10px 5px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        .button:hover {
            background-color: #8fb3e2;
        }
        #result {
            margin-top: 20px;
            padding: 20px;
            background-color: #192338;
            border-radius: 5px;
            white-space: pre-wrap;
            font-family: monospace;
            max-height: 400px;
            overflow-y: auto;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        .success {
            color: green;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #8fb3e2;
            color: white;
        }
        tr:nth-child(even) {
            background-color:#1e2e4f;
        }
        .page-title nav {
  background-color: color-mix(in srgb, var(--default-color), transparent 90%);
  padding: 20px 0;
}

.page-title nav ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  font-size: 16px;
  font-weight: 600;
}

.page-title nav ol li+li {
  padding-left: 10px;
}

.page-title nav ol li+li::before {
  content: "/";
  display: inline-block;
  padding-right: 10px;
  color: color-mix(in srgb, var(--default-color), transparent 70%);
}
    </style>
<?php
include 'common/header_end.php';
?>
<body class="fetch_page">
    <main class="main">
    <div class="page-title">
        <nav class="breadcrumbs">
        <div class="container">
          <ol class="d-flex align-items-center justify-content-center ps-0">
            <li><a href="index.php">Home</a></li>
            <li class="current">Fetch Messages</li>
          </ol>
        </div>
      </nav>
    </div>
    
    <h1>Export Database to JSON</h1>

    <div>
        <button class="button" onclick="fetchData()">Fetch Data</button>
        <button class="button" onclick="downloadJSON()">Download as JSON</button>
        <button class="button" onclick="displayTable()">Display as Table</button>
        <button class="button" onclick="clearDisplay()">Clear</button>
    </div>

    <div id="result"></div>
    </main>

    <script>
        let jsonData = null;

        // Method 1: Using jQuery AJAX
        function fetchData() {
            $.ajax({
                url: 'export_data.php',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        jsonData = response;
                        $('#result').html('<span class="success">Data fetched successfully! Total records: ' + response.count + '</span>\n\n' + JSON.stringify(response, null, 2));
                    } else {
                        $('#result').html('<span class="error">Error: ' + response.error + '</span>');
                    }
                },
                error: function(xhr, status, error) {
                    $('#result').html('<span class="error">AJAX Error: ' + error + '</span>');
                }
            });
        }

        // Method 2: Using Fetch API (modern JavaScript)
        async function fetchDataWithFetch() {
            try {
                const response = await fetch('export_data.php');
                const data = await response.json();

                if (data.success) {
                    jsonData = data;
                    document.getElementById('result').innerHTML = 
                        '<span class="success">Data fetched successfully! Total records: ' + data.count + '</span>\n\n' + 
                        JSON.stringify(data, null, 2);
                } else {
                    document.getElementById('result').innerHTML = 
                        '<span class="error">Error: ' + data.error + '</span>';
                }
            } catch (error) {
                document.getElementById('result').innerHTML = 
                    '<span class="error">Fetch Error: ' + error.message + '</span>';
            }
        }

        // Download JSON data as a file
        function downloadJSON() {
            if (!jsonData) {
                alert('Please fetch data first!');
                return;
            }

            const dataStr = JSON.stringify(jsonData, null, 2);
            const dataBlob = new Blob([dataStr], {type: 'application/json'});

            const link = document.createElement('a');
            link.href = URL.createObjectURL(dataBlob);
            link.download = 'contacts_' + new Date().toISOString().slice(0, 10) + '.json';
            link.click();

            $('#result').append('\n\n<span class="success">JSON file downloaded!</span>');
        }

        // Display data in a table format
        function displayTable() {
            if (!jsonData || !jsonData.data || jsonData.data.length === 0) {
                alert('No data to display! Please fetch data first.');
                return;
            }

            let tableHTML = '<h3>Contacts Data</h3>';
            tableHTML += '<table>';
            tableHTML += '<tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Created At</th></tr>';

            jsonData.data.forEach(contact => {
                tableHTML += '<tr>';
                tableHTML += '<td>' + (contact.id || 'N/A') + '</td>';
                tableHTML += '<td>' + contact.name + '</td>';
                tableHTML += '<td>' + contact.email + '</td>';
                tableHTML += '<td>' + contact.message + '</td>';
                tableHTML += '<td>' + (contact.created_at || 'N/A') + '</td>';
                tableHTML += '</tr>';
            });

            tableHTML += '</table>';
            $('#result').html(tableHTML);
        }

        // Clear the display
        function clearDisplay() {
            $('#result').html('');
            jsonData = null;
        }

        // Auto-save JSON to server (optional)
        function saveJSONToServer() {
            if (!jsonData) {
                alert('No data to save!');
                return;
            }

            $.ajax({
                url: 'save_json.php', // You would need to create this file
                method: 'POST',
                data: {
                    json_data: JSON.stringify(jsonData)
                },
                success: function(response) {
                    alert('JSON saved to server!');
                },
                error: function(error) {
                    alert('Error saving JSON: ' + error);
                }
            });
        }
    </script>
<?php
include 'common/footer_start.php';
include 'common/footer_end.php';
?>