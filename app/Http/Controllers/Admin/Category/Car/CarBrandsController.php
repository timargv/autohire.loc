<?php

namespace App\Http\Controllers\Admin\Category\Car;

use App\Entity\Categories\Car\CarBrand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Str;

class CarBrandsController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin-panel');
    }


    public function index(Request $request)
    {
//        CarBrand::defaultOrder()->withDepth()->fixTree();

        $query = CarBrand::whereIsRoot()->defaultOrder('ASC');



        if (!empty($value = $request->get('id'))) {
            $query->where('id', $value);
        }

        if (!empty($value = $request->get('name'))) {
            $query->where('name', 'like', '%' . $value . '%')->orWhere('name_ru', 'like', '%' . $value . '%');
        }

        if (!empty($value = $request->get('status'))) {
            $query->where('status', $value);
        }

        if (!empty($request->get('onlyMy'))) {
            $query->where('author_id', Auth::id());
        }

        $carBrands = $query->paginate(50);

        return view('admin.categories.car_brands.home', compact('carBrands'));
    }


    public function create(CarBrand $carBrand = null)
    {
        return view('admin.categories.car_brands.create', compact('carBrand'));
    }

    public function modelForm($carBrand)
    {
        return view('admin.categories.car_brands.models.create', compact('carBrand'));
    }


    public function store(Request $request, $carBrand = null)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'parent' => 'nullable|integer|exists:car_brands,id',
        ]);

        CarBrand::create([
            'name' => $request['name'],
            'name_ru' => $request['name_ru'],
            'status' => 'active',
            'parent_id' => $request['parent'],
            'author_id' => \Auth::id(),
            'slug' => Str::slug($request['name']).'-'.rand(0, 10),
        ]);

        return redirect()->route('admin.categories.car.brands.index')->with('success', 'Новая марка автомобиля добавлена');
    }


    public function show($id, CarBrand $carBrand)
    {
        $carBrand = $this->getCarBrand($id);
        $carModelsOrSeries = $carBrand->children()->defaultOrder()->getModels();
        return view('admin.categories.car_brands.show', compact('carBrand', 'carModelsOrSeries'));
    }



    public function edit(CarBrand $carBrand)
    {
        return view('admin.categories.car_brands.edit', compact('carBrand'));
    }


    public function update(Request $request, CarBrand $carBrand)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255'
        ]);

        $carBrand->update([
            'name' => $request['name'],
            'name_ru' => $request['name_ru'],
            'status' => 'active',
            'author_id' => \Auth::id(),
            'slug' => Str::slug($request['name']).'-'.rand(0, 10),
        ]);

        return redirect()->route('admin.categories.car.brands.index')->with('success', 'Марка автомобиля обновлена');
    }


    public function destroy(CarBrand $carBrand)
    {
        $carBrand->delete();
        return redirect()->back()->with('success', 'Модель авто удалён!');
    }

    public function first(CarBrand $carBrand)
    {
        if ($first = $carBrand->siblings()->defaultOrder()->first()) {
            $carBrand->insertBeforeNode($first);
        }

        return redirect()->back()->with('success', 'Позиция обновлена!');
    }

    public function up(CarBrand $carBrand)
    {
        $carBrand->up();

        return redirect()->back()->with('success', 'Позиция обновлена!');
    }

    public function down(CarBrand $carBrand)
    {
        $carBrand->down();

        return redirect()->back()->with('success', 'Позиция обновлена!');
    }

    public function last(CarBrand $carBrand)
    {
        if ($last = $carBrand->siblings()->defaultOrder('desc')->first()) {
            $carBrand->insertAfterNode($last);
        }

        return redirect()->back()->with('success', 'Позиция обновлена!');
    }



    private function getCarBrand($id) {
        return CarBrand::findOrFail($id);
    }
}
