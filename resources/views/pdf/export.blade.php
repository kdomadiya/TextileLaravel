<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exported PDF</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0; /* Remove default margin to use the full width of the page */
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
    font-size: 12px;

}

th, td {
    padding: 5px;
    text-align: left;
    font-size: 12px;
}

th {
    background-color: #f2f2f2;
}

h1 {
    margin-bottom: 20px; /* Add margin below the heading for spacing */
}
    </style>
</head>
<body>
    <h1>Exported PDF</h1>
    <table width="100%">
        <thead>
            <tr>
                @foreach($collect as $key)
                <th>{{$key}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    @foreach($item as $value)
                    <td>{{ $value }}</td>
                    @endforeach
                    <!-- Add more cells based on your model fields -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>