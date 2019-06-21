@foreach ($models as $model)
    <tr>
        <td>{{ $model->id }}</td>
        <td>{{ $model->name }}</td>
        <td></td>
        <td></td>
    </tr>
@endforeach