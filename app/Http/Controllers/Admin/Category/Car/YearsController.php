<?php

namespace App\Http\Controllers\Admin\Category\Car;

use App\Entity\Categories\Car\Year;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class YearsController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin-panel');
    }


    public function index(Request $request)
    {
//        Year::defaultOrder()->withDepth()->fixTree();

        $query = Year::orderByDesc('name')->orderBy('created_at', 'ASC');

        if (!empty($value = $request->get('id'))) {
            $query->where('id', $value);
        }

        if (!empty($value = $request->get('name'))) {
            $query->where('name', 'like', '%' . $value . '%');
        }

        if (!empty($value = $request->get('status'))) {
            $query->where('status', $value);
        }

        if (!empty($request->get('onlyMy'))) {
            $query->where('author_id', Auth::id());
        }


        $years = $query->paginate(70);


        return view('admin.categories.car_years.home', compact('years'));
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
    public function edit(Year $year)
    {
        return view('admin.categories.car_years.edit', compact('year'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Year $year)
    {
        $year->delete();
        return redirect()->back()->with('success', 'Год авто удалён!');
    }

    public function first(Year $year)
    {
        if ($first = $year->siblings()->defaultOrder()->first()) {
            $year->insertBeforeNode($first);
        }

        return redirect()->back()->with('success', 'Позиция обновлена!');
    }

    public function up(Year $year)
    {
        $year->up();

        return redirect()->back()->with('success', 'Позиция обновлена!');
    }

    public function down(Year $year)
    {
        $year->down();

        return redirect()->back()->with('success', 'Позиция обновлена!');
    }

    public function last(Year $year)
    {
        if ($last = $year->siblings()->defaultOrder('desc')->first()) {
            $year->insertAfterNode($last);
        }

        return redirect()->back()->with('success', 'Позиция обновлена!');
    }
}
