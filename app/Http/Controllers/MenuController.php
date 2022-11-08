<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function show()
    {
        $results = [];
        $distinctKeys = Menu::select('type')->distinct()->get();
        foreach ($distinctKeys as $key) {
            $selected = Menu::select()->where('type', '=', $key->type)->orderBy('priority')->limit(4)->get();
            array_push($results, $selected);
        }
        return view('welcome', ['results' => $results]);

    }
    public function showMenu($type)
    {
        $results = Menu::select('type', 'food_name', 'priority')->where('type', '=', $type)->orderBy('priority')->get();
        return view('menu', ['results' => $results]);

    }
    public function updateOrDeleteMenu(Request $request, $type)
    {
        if ($request->input('delete') != ""){
            Menu::where('food_name', '=', $request->input('delete'))->delete();
        }
        else if ($request->input('add') != ""){
            Menu::create([
                "type"=> $request->input('add'),
                "food_name"=> $request->input('food_name_add'),
                "priority"=> $request->input('priority_add')
            ]);
        }
        else {
            $new_type = $request->input('type');
            $food_name = $request->input('food_name');
            $priority = $request->input('priority');
            Menu::where('food_name', '=', $food_name)->update(['type' => $new_type]);
            Menu::where('food_name', '=', $food_name)->update(['priority' => $priority]);
        }
        return $this->showMenu($type);
        
        
    }
    public function add(Request $request)
    {
        Menu::create([
            "type"=> $request->input('type'),
            "food_name"=> $request->input('food_name'),
            "priority"=> $request->input('priority')
        ]);
        return $this->show();
    }
    public function showinfo(Request $request){
        $searched = $request->input("showinfo");
        $res = Menu::select()->where('food_name','=',$searched)->get();
        return view('info',['searched'=>$res]);

    }
    


}
