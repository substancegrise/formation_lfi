<?php

namespace App\Http\Controllers;

use App\Article

use Illuminate\Http\Request;

use App\Http\Requests;

class PublishController extends Controller
{


    public function update(Request $request, $id)
    {
        $article = Article::find($id);



        if ($request->status == 'published'){


            $article->status = 'published';

        }else{

            $article->status = 'unpublished';

        }

        $article->save();



        return back()->with(['message' => 'success']);
    }


}
