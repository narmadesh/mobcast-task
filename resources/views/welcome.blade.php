<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <title>Document</title>
    <style>
        #table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        }

        #table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <h1>{{ $data->channel->title }}</h1>
    <p>{{ $data->channel->description }}</p>
    <img src="" alt="">
    <table id="table" class="display">
        <thead>
            <tr>
                <th>S.no.</th>
                <th>Title</th>
                <th>Description</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            @if (count($data->channel->item) > 0)
                @foreach ($data->channel->item as $count => $item)
                    <tr>
                        <td>{{($count + 1)}}</td>
                        <td>{{ $item->title }}</td>
                        <td>{!! $item->description !!}</td>
                        <td><a href="{{ $item->link }}" target="_blank">{{ $item->link }}</a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</body>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>

</html>
