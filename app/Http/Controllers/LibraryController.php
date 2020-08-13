<?php

namespace App\Http\Controllers;
use App\Info;
use DB;

use App\User;
use App\Library;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Svg\Tag\Image;


class LibraryController extends Controller
{
  public function create()
  {
      return view('library.create');
  }
    public function create2()
    {
        return view('library.create2');
    }
  public function storeinfo()
  {

      $data=(request()->validate(
          [
              'info'=> 'required',
              'lang'=>'required',
              'image'=>'required|image',
              'key'=>'required|image',
              'cheat'=> "file|mimes:pdf|max:100000",
              'paradigm'=>'required',
               'design'=>'required',
               'first'=>'required',
             'family'=>'required',
             'extension'=>'required',
          ]
      )
      );
      //$imagepath=request('image')->store('create','s3');
      //$keypath=request('key')->store('create','s3');
      //$cheatpath=request('cheat')->store('create','s3');
      $books= new Info();
      $books->info=request('info');
      $books->lang=request('lang');
      $books->image=request('image')->store('uploads','public');
      //$books->imageurl=Storage::disk('s3')->url($imagepath);
      $books->key=request('key')->store('uploads','public');
      //$books->keyurl=Storage::disk('s3')->url($keypath);
      $books->cheat=request('cheat')->store('uploads','public');
      //$books->cheaturl=Storage::disk('s3')->url($cheatpath);
      $books->paradigm=request('paradigm');
      $books->design=request('design');
      $books->first=request('first');
      $books->family=request('family');
      $books->extension=request('extension');
      $books->save();
      return redirect('/create2');
  }
  public function store()
  {

          $data=(request()->validate(
              [
                  'name'=>'required',
                  'lang'=>'required',
                  'image'=>'required|image',
                  'book'=> "required|mimes:pdf|max:100000",

              ]
          ));

      //$imagepath=request('image')->store('create','s3');
      //$bookpath=request('book')->store('create','s3');
      $book= new  Library();
          $book->name=request('name');
          $book->langu=request('lang');
          $book->image=request('image')->store('uploads','public');
          //$book->imageurl=Storage::disk('s3')->url($imagepath);
          $book->book=request('book')->store('uploads','public');
          //$book->bookurl=Storage::disk('s3')->url($bookpath);
          $book->save();
      return redirect('/create');
  }
  public  function  show()
  {

      $library=Library::all();

      return view ('library.show', [ 'library' => $library] );
  }
    public  function  showinfo()
    {

        $infos=Info::all();

        return view ('library.showinfo', [ 'infos' => $infos] );
    }
    public function  book()
    {
        $library=Library::all();


        return view ('library.book', [ 'library' => $library] );
    }
    public function  user()
    {
        $user=User::all();


        return view ('library.user', [ 'user' => $user] );
    }

    public function  destroy( $id)
    {
        $library = Library::findOrFail($id);

        $library->delete();


        return redirect('/show');

    }
    public function  deluser( $id)
    {
        $user = User::findOrFail($id);

        $user->delete();


        return redirect('/user');

    }
    public function  destroyinfo( $id)
    {
        $infos = Info::findOrFail($id);

        $infos->delete();


        return redirect('/showinf');

    }
    public function main($lang)
    {
        $library=Library::all();
        $info=Info::all();
        $langinfo = DB::table('infos')->select('info','lang','image','key','cheat')->get();
        $langinf = DB::table('infos')->select('info','lang','image','key','cheat','paradigm','design','first','family','extension')->where('lang', $lang) ->get();
        $langbook = DB::table('libraries')->select('book','image','langu') ->where('langu', $lang)->get();
        $tbook= DB::table('users')->select('book')->where('email', Auth::user()->email)->get();
        $cheatc= DB::table('udates')->select('book') ->where('name', Auth::user()->email)->get();
       // $key_arr = explode (",", $langinf);
        //print_r($key_arr);

        // dd($cheatc);


        return view ('library.home', [ 'library' => $library,'info' => $info,
            'langbook '=>$langbook ,'langinfo'=>$langinfo,'langinf'=>$langinf, 'cheatc'=>$cheatc,'tbook'=>$tbook] );
    }
    public  function  home()
    {
       $library=Library::all();
        $info=Info::all();
       $langinfo = DB::table('infos')->select('info','lang','image','key','cheat','paradigm','design','first','family','extension') ->get();
        $langinf = DB::table('infos')->select('info','lang','image','key','cheat','paradigm','design','first','family','extension')->where('lang','c++') ->get();
        $langbook = DB::table('libraries')->select('book','image','langu') ->where('langu', '$lang')->get();
        $cheatcs= DB::table('libraries')->select('book','image','langu') ->where('langu', 'c#')->get();
       $tbook= DB::table('users')->select('book')->where('email', Auth::user()->email)->get();
        $cheatc= DB::table('udates')->select('book') ->where('email', Auth::user()->email)->get();

        return view ('library.home', [ 'library' => $library,'info' => $info,
           'langbook '=>$langbook ,'langinf'=>$langinf, 'cheatcs'=>$cheatcs,'cheatc'=>$cheatc,'langinfo'=>$langinfo,'tbook'=>$tbook] );
    }
    public function  index( $lang)
    {

        $cheatcs= DB::table('libraries')->select('book','image') ->where('langu', $lang)->get();


        return view ('library.index', [
          'cheatcs'=>$cheatcs] );
    }
    public  function  insert()
    {
       $position= DB::table('users')->where('email', Auth::user()->email)->increment('book');

    }
    public function update( $image)
    {
        //dd($image);
        $bookimg = DB::table('libraries')->select('book') ->where('image', "uploads/".$image)->get();
        $bokimg = DB::table('libraries')->select('image') ->where('image', "uploads/".$image)->get();
        // dd($bookimg);

        //$img=json_decode($bookimg);
       $book=$bookimg[0]->book;
        $bookimage=$bokimg[0]->image;
        //dd($imgul);
        //preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*/i', $bookimg, $matches);
        //var_dump($matches);
        //$bokimage=$matches[0];

        //$book2="https://e-bookbucket665.s3.ap-south-1.amazonaws.com/create/bOfab2y7IXUNaBk65iwjisHN0tDgFUi9bFLeLUrK.png";
      $updatebook=DB::table('udates')->insert(
            ['name'=>Auth::user()->name,'email' => Auth::user()->email,'book'=>$book,'image'=>$bookimage]

        );

        $position= DB::table('users')->where('email', Auth::user()->email)->increment('book');

        return view ('library.notify' );
    }
    function downbk()
    {
        $cheatc= DB::table('udates')->select('book','image') ->where('email', Auth::user()->email)->get();

        return view ('library.downbk', [
            'cheatc'=>$cheatc] );
    }
    public function admin()
    {
        return view('library.adminnav');
    }

}
