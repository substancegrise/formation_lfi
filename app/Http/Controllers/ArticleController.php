<?php

namespace App\Http\Controllers;

use App\Article;
use App\Article_categorie;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;


use App\Http\Requests;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(8);

        return view('admin.article', ['articles' => $articles]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles_categories = Article_categorie::lists('titre', 'id');

        return view('admin.create', compact('articles_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = Article::create($request->all());


        if (!empty($request->input('article_categorie'))) {
            $article->article_categorie()->attach($request->input('article_categorie'));
        }

        // PICTURES


        if (!is_null($request->picture)) {

            $img = $request->picture;

            $ext = $img->getClientOriginalExtension();

            $fileName = md5(uniqid(rand(), true)) . ".$ext";

            $img->move(env('UPLOADS'), $fileName);

            $article->uri = $fileName;

            $article->save();


        }


        return redirect()
            ->route('admin.article')
            ->with(['message' => 'votre article à bien été ajouté']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Article_categorie::lists('titre', 'id');;

        $article = Article::find($id);

        return view('admin.edit', compact('article', 'categorie'));
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
        $article = Article::find($id);

        $article->update($request->all());


        // Supression de l'image

        if (!is_null($request->delete_picture) || !is_null($request->picture))
        {

            $this->deleteImage($article);


            $this->createImage($request, $article);

        }

        return redirect()
            ->route('admin.article.index')
            ->with(['message' => 'success update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $this->deleteImage($article);
        $article->delete();


        Article::destroy($id);

        return back()->with(['message' => 'success destroy']);
    }

    public function deleteImage($article)

    {
        if (!is_null($article->uri)) {
            $fileName = public_path('assets/images/' . $article->uri);


            if (File::exists($fileName)) {
                File::delete($fileName);
                Article::destroy($article->uri);

            }
        }
    }

    private function createImage(Request $request,$article)
    {
        if (!is_null($request->picture) || !is_null($request->picture2)) {


            $img = $request->picture;
            $img2 = $request->picture2;

            $ext = $img->getClientOriginalExtension();
            $ext2 = $img2->getClientOriginalExtension();


            $fileName = md5(uniqid(rand(), true)) . ".$ext";
            $fileName2 = md5(uniqid(rand(), true)) . ".$ext2";

            $img->move(env('UPLOADS'), $fileName);
            $img2->move(env('UPLOADS'), $fileName2);

            $article->uri = $fileName;

            $article->media->uri = $fileName2;

            $article->save();


        }

    }




}
