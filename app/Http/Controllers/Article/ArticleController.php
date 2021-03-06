<?php

namespace App\Http\Controllers\Article;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Excel;
use Sentinel;
use App\Http\Requests\ImportRequest;
use App\Http\Controllers\Controller;
use App\Comment;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        $article = DB::table('articles')->paginate(5);
        return view('content.articlebox', compact('article'),['articles' => $article]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.createarticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImportRequest $request)
    {
    // Import a user provided file
    $file = Input::file('article');
    Excel::load($file, function($reader) {
    foreach ($reader->toObject() as $row)
         {
           $article = new Article;
           $user = Sentinel::getUser();
           $article->article_title = $row->article_title;
           $article->article = $row->article;
           $article->user_id = $user->id;
           $article->user_email = $user->email;
           $article->save();
           

      }
       
});
           return redirect()->route('login.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $article = Article::findOrFail($id);
        $id = $article->id;
        $comment = Comment::where('article_id', '=', $article->id)->get();
        return view('content.articleshow', compact('comment','article'));
        

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('content.editarticle', compact('article'));
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
        $article = Article::findOrFail($id);
        $article->article = $request->article;
        $article->save();
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('article.index');
    }

    public function export($id){
    $article = Article::where('id', '=', $id)->get()->toArray();
    $comment = Comment::where('article_id', '=', $id)->get()->toArray();
       return Excel::create($id, function($excel) use ($article,$comment) {
        $excel->sheet('article', function($sheet1) use ($article)
        {
            $sheet1->fromArray($article);

           
        });
        $excel->sheet('comment', function($sheet2) use ($comment)
        {
            $sheet2->fromArray($comment);
           
           
        });
       })->download("xls");
  
        }

}
