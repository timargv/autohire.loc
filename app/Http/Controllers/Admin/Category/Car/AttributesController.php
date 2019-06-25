<?php

namespace App\Http\Controllers\Admin\Category\Car;

use App\Entity\Cars\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class AttributesController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin-panel');
    }

    public function index (Request $request) {

        $query = Attribute::orderBy('id');


        if (!empty($value = $request->get('id'))) {
            $query->where('id', $value);
        }

        if (!empty($value = $request->get('name'))) {
            $query->where('name', 'like', '%' . $value . '%');
        }

        $attributes = $query->paginate(50);

        return view('admin.categories.car_attributes.home', compact('attributes'));
    }


    public function create () {

        $types = Attribute::typesList();

        return view('admin.categories.car_attributes.create', compact('types'));
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'type' => ['required', 'string', 'max:255', Rule::in(array_keys(Attribute::typesList()))],
            'required' => 'nullable|string|max:255',
            'variants' => 'nullable|string',
            'is_visible' => 'nullable|string',
            'status'    => 'nullable|string',
            'sort' => 'required|integer'
        ]);

        $attribute = Attribute::create([
            'name' => $request['name'],
            'type' => $request['type'],
            'is_visible' => (bool)$request['is_visible'] ? 'on' : 'off',
            'status' => (bool)$request['status'] ? 'on' : 'off',
            'required' => (bool)$request['required'],
            'variants' => array_map('trim', preg_split('#[\r\n]+#', $request['variants'])),
            'sort' => $request['sort'],
        ]);

        return redirect()->route('admin.categories.car.attributes.index');
    }



    public function show (Attribute $attribute)
    {
        return view('admin.categories.car_attributes.show', compact('attribute'));
    }


    public function edit (Attribute $attribute) {
        $types = Attribute::typesList();
        return view('admin.categories.car_attributes.edit', compact('attribute', 'types'));
    }


    public function update (Request $request, Attribute $attribute) {

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'type' => ['required', 'string', 'max:255', Rule::in(array_keys(Attribute::typesList()))],
            'required' => 'nullable|string|max:255',
            'variants' => 'nullable|string',
            'is_visible' => 'nullable|string',
            'status'    => 'nullable|string',
            'sort' => 'required|integer'
        ]);

        $attribute->findOrFail($attribute->id)->update([
            'name' => $request['name'],
            'type' => $request['type'],
            'is_visible' => (bool)$request['is_visible'] ? 'on' : 'off',
            'status' => (bool)$request['status'] ? 'on' : 'off',
            'required' => (bool)$request['required'],
            'variants' => array_map('trim', preg_split('#[\r\n]+#', $request['variants'])),
            'sort' => $request['sort'],
        ]);

        return redirect()->route('admin.categories.car.attributes.index')->with('success', 'Атрибут обновлен!');
    }

    public function destroy(Attribute $attribute)
    {
        $attribute->delete();

        return redirect()->route('admin.categories.car.attributes.index')->with('success', 'Атрибут Удален!');
    }
}
