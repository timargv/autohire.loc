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

        $query = CarBrand::defaultOrder('ASC');



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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.car_brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255'
        ]);

        CarBrand::create([
            'name' => $request['name'],
            'name_ru' => $request['name_ru'],
            'status' => 'active',
            'author_id' => \Auth::id(),
            'slug' => Str::slug($request['name']).'-'.rand(0, 10),
        ]);

        return redirect()->route('admin.categories.car.brands.index')->with('success', 'Новая марка автомобиля добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit(CarBrand $carBrand)
    {
        return view('admin.categories.car_brands.edit', compact('carBrand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param CarBrand $carBrand
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param CarBrand $carBrand
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
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
}
