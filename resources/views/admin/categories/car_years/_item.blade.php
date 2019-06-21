@foreach ($years as $year)
    <tr>
        <td>{{ $year->id }}</td>
        <td>{{ $year->name }}</td>
        <td></td>
    </tr>
@endforeach