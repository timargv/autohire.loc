<?php

namespace App\Http\Controllers\Admin\Category\Car;

use App\Entity\Categories\Car\CarModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarModelsController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin-panel');
    }


    public function index(Request $request)
    {
//        CarModel::defaultOrder()->withDepth()->fixTree();

        $query = CarModel::defaultOrder('ASC');

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


        $car_models = $query->paginate(50);


        return view('admin.categories.car_models.home', compact('car_models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CarModel $model)
    {
        //
        return view('admin.categories.car_models.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CarModel $carModel
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(CarModel $model)
    {
        $model->delete();

        return redirect()->back()->with('success', 'Модель авто удалён!');
    }

    public function first(CarModel $model)
    {
        if ($first = $model->siblings()->defaultOrder()->first()) {
            $model->insertBeforeNode($first);
        }

        return redirect()->back()->with('success', 'Позиция обновлена!');
    }

    public function up(CarModel $model)
    {
        $model->up();

        return redirect()->back()->with('success', 'Позиция обновлена!');
    }

    public function down(CarModel $model)
    {
        $model->down();

        return redirect()->back()->with('success', 'Позиция обновлена!');
    }

    public function last(CarModel $model)
    {
        if ($last = $model->siblings()->defaultOrder('desc')->first()) {
            $model->insertAfterNode($last);
        }

        return redirect()->back()->with('success', 'Позиция обновлена!');
    }
}
