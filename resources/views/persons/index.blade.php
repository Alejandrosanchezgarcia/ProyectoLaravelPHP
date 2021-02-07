<html>
<head>
<style>
table, th, td {
  border: 3px solid crimson;
  
}
</style>
</head>
<body>

<table style="width:40%">
    @foreach($todos as $uno)
        <tr>
            <td> {{ $uno['name'] }}</td>
            <td> {{ $uno['country'] }} </td>
            <td><a href="{{ route('persons.show', $uno['id']) }}">mostrar</a></td>
        </tr>

    @endforeach
</table> 
</body>
<html>
