<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Export PDF</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Faculty</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->AppId }}</td>
                        <td>{{ $item->Name }}</td>
                        <td>{{ $item->surname }}</td>
                        <td>{{ $item->Faculty }}</td>
                        <td> 
                            @if( $item->Status ) ACCEPTED @else  REJECTED @endif
                          </td>
                
                        <
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>