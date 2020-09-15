<?php

namespace App\Http\Controllers;

use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishesController extends Controller {

    public function create(Request $request) {
        Wishlist::create($request->all());
        return redirect('/manage/wishlist');
    }

    public function read() {
        return view('/manage/wishlist',
            [
                'wishes' => Wishlist::all()
            ]
        );
    }

    public function delete() {
        Wishlist::where('id', Request('id'))->delete();
        return redirect('/manage/wishlist');
    }

    public function show() {
        if (!empty(request('userId'))) {
            $wish = Wishlist::where('id', request('id'))->where('userId', request('userId'))->first();
            return view('/manage/edit', ['wish' => $wish]);
        }
        return redirect('/manage/edit');
    }

    public function update() {
        if(!empty(request('userId')) && !empty(request('id'))) {
            Wishlist::where('userId', Request('userId'))->where('id', Request('id'))->update(['title' => request('title'), 'description' => request('description'), 'link' => request('link'), 'price' => request('price')]);
            return redirect('/manage/wishlist');
        }
        return redirect('/wishlist');
    }
}











