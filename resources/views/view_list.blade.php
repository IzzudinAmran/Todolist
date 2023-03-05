<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        table, th, td {
        border-collapse: collapse;
        }

        table.center {
        margin-left: auto; 
        margin-right: auto;
        }
        </style>
    </head>
    <body >
        
        <table class="center"  >    
            <tr><td><a href="create" class='btn btn-success'>Create new list</a></td></tr>
        </table>
       
        <table class="center"  border="1px">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Create At</td>
                <td>Action</td>
            </tr>

            <?php $count = 1;?>
            @foreach($todo_arr as $td)
            <tr>
                   
                <td><?php echo "".$count++."";?></td>
                <td>{{$td->name}}</td>
                <td>{{\Carbon\Carbon::parse($td->created_at)->format('d M Y')}}</td>
                <td><a href="delete/{{$td->id}}">Delete</a> <a href="edit/{{$td->id}}">Edit</a> </td>
            
            </tr>
            @endforeach
        </table>
    </body>
</html>
