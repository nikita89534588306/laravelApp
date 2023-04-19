<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class NotebookController extends Controller
{
    public function index(){

        $dataPeople = Person::query()
            ->select(['id','name', 'surname'])
            ->with(['phone' => function ($query) { $query->select('number', 'person_id'); }])
            ->get();
        //отсортировать по фамилии!!!!!!!!!!!!!
        //сделать что нибудь если нет записей в БД!!!!
        //сделать связь один ко многим для номеров телефонов

        return view('notebook.index', compact('dataPeople'));
    }
    public function create(){
        return view('notebook.create');
    }
    public function store(Request $request){
        //создать валидацию
        // dd($request);
        $dataPerson = Person::query()->create([
            'name' => $request->name,
            'surname' => $request->surname,
        ]);
        $dataPerson->phone()->create([
            'number' => $request->phone_number
        ]);
        //добавить flash сообщения
        return redirect()->route('all_contact');
    }
}
