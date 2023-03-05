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
    <body>
        <table class='center'>
        <tr><td><div class="text-right">
           <tr><td><a href="/" class='btn btn-success'>Back</a>
        </div>
        </td></tr>
        </table>
        <table class='center'>
        <tr><td>
        <form action="save_new_list">
            <input type="text" name='name' placeholder='Enter New List'>
            <input type="submit" value='Save' class='btn btn-success'>
        </form>
    </td></tr>
        </table>
        
    </body>
</html>
