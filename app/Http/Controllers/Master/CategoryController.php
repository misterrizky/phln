<?php

namespace App\Http\Controllers\Master;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = Category::where('nama','LIKE','%'.$keywords.'%')->where('category_id',0)
            ->orderBy('id','ASC')
            ->paginate(10);
            return view('page.app.category.list',compact('collection'));
        }
        return view('page.app.category.main');
    }
    public function create()
    {
        $kategori = Category::where('category_id',0)->get();
        return view('page.app.category.input', ['data' => new Category, 'kategori' => $kategori]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if($errors->has('nama')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }
        }
        $data = new Category;
        $data->nama = Str::title($request->nama);
        $data->category_id = $request->kategori?:0;
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kategori tersimpan',
        ]);
    }
    public function show(Category $category)
    {
        //
    }
    public function edit(Category $category)
    {
        $kategori = Category::where('category_id',0)->get();
        return view('page.app.category.input', ['data' => $category, 'kategori' => $kategori]);
    }
    public function update(Request $request, Category $category)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if($errors->has('nama')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }
        }
        $category->nama = Str::title($request->nama);
        $category->category_id = $request->kategori?:0;
        $category->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kategori tersimpan',
        ]);
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kategori terhapus',
        ]);
    }
    public function get_sub(Request $request)
    {
        $collection = Category::where('category_id',$request->category)->get();
        $list = "<option>Pilih Sub Category</option>";
        foreach($collection as $row){
            $list.="<option value='$row->id'>$row->nama</option>";
        }
        return $list;
    }
}
