<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\promotion;

class PromotionController extends Controller
{
    public function index()
    {

        return view('admin.promotion.index',
            [
                'promotion' => promotion::all(),
            ]
        );
    }
    public function create()
    {
        return view('admin.promotion.create');
    }
    public function insert(Request $request)
    {
        $request -> validate(
            [
                'image' => $request->has('image') ? 'image' : 'request',
            ],
            [
                'image.request' => 'ใส่รูป',
            ]
            
    
        );
        if($request->has('image'))
        {
            $fileName = time() . '.' . $request->image->extension();
            $image = $request->image->storeAs('promotion_image', $fileName);
        }else{
            $image = NULL;
        }
        Promotion::create([

            'image' => $image,
            'expiredate' => $request ->expiredate,

        ]);
        return redirect()->route('admin.promotion.index');
    }
}
