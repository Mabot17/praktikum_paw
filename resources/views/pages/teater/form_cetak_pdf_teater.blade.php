<!DOCTYPE html>
<html>
<head>
    <title>Data Teater</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data Teater</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_teater as $teater)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $teater->teater_judul }}</td>
                    <td>{{ $teater->teater_nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
