<div class="card rounded-0 border-0 ">
    <div class="card-body p-0">
        <table class="table table-borderless table-responsive-sm bg-white">
            <thead class="thead-light">
            <tr>
                <th width="70px">ID</th>
                <th>{{__('fillable.Attribute')}}</th>
                <th width="40px">{{ __('fillable.Status') }}</th>
                <th width="40px">{{ __('fillable.Visible') }}</th>
                <th width="40px">{{ __('fillable.Required') }}</th>
                <th width="40px"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($attributes as $attribute)
                <tr>
                    <td>{{ $attribute->id }}</td>
                    <td>{{ $attribute->name }}</td>
                    <td class="text-{{ $attribute->status != 'off' ? 'success' : 'danger' }}">{{ $attribute->status }}</td>
                    <td class="text-{{ $attribute->is_visible != 'off' ? 'success' : 'danger' }}">{{ $attribute->is_visible }}</td>
                    <td class="text-{{ $attribute->required != 0 ? 'success' : 'danger' }}">{{ $attribute->required != 0 ? 'on' : 'off' }}</td>
                    <td>
                        <div class="d-flex flex-row">
                            <a href="{{ route('admin.categories.car.attributes.edit', $attribute) }}" class="btn btn-sm btn-outline-light" data-toggle="tooltip" data-placement="top" title="{{ __('button.Edit') }}"><i class="fas fa-edit text-muted"></i></a>
                            <form method="POST" action="{{ route('admin.categories.car.attributes.destroy', $attribute) }}" class="mr-1">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-light" onclick="return confirm('Удалить Аттрибут?')" data-toggle="tooltip" data-placement="top" title="{{ __('button.Delete') }}"><i class="fas fa-trash text-muted"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>