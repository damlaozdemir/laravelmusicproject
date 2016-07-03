<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;


class PagesController extends Controller {

	public function login(){
		return view('auth.login');
	}
	public function newreleases(){
		$latestsongs = DB::table('songs')->join('albums', 'songs.album', '=', 'albums.albumname')->where('albums.releasedate','>=', '2016-01-01')->paginate(20);
		return view("pages.newreleases")->with('latestsongs',$latestsongs);
	}
	public function singers(){
		$singers = DB::table('singers')->get();
		return view("pages.singers")->with('singers',$singers);
	}
	public function about(){
		return view("pages.about");
	}
	public function songs(){
		$songs = DB::table('songs')->paginate(20);
		return view("pages.songs")->with('songs',$songs);
	}
	public function categories(){
		$categories = DB::table('categories')->get();
		return view("pages.categories")->with('categories',$categories);
	}
	public function category($name){
		$tables = DB::table('categories')->join('singers', 'categories.id', '=', 'singers.categorie_id')->where('categories.name','=', $name)->get();

		return view("pages.category")->with('tables',$tables);
	}
	public function albums(){
		$latestalbums = DB::table('albums')->where('releasedate','>=', '2016-01-01')->get();
		$albums = DB::table('albums')->get();
		return view("pages.albums")->with('albums',$albums)->with('latestalbums', $latestalbums);
	}
	public function singer($name){
		$singer = DB::table('singers')->where('name', $name)->first();
		$albums = DB::table('albums')->where('singer', $name)->get();
		return view("pages.singer")->with('singer',$singer)->with('albums',$albums);
	}
	public function song($name){
		$song = DB::table('songs')->where('name', $name)->first();
		return view("pages.song")->with('song',$song);
	}
	public function album($albumname){
		$album = DB::table('albums')->where('albumname', $albumname)->first();
		$songs = DB::table('songs')->where('album', $albumname)->get();
		$comments = DB::table('comments')->get();
		return view("pages.album")->with('album',$album)->with('songs',$songs)->with('comments',$comments);
	}
	public function home(){

		return view("home");
	}

}
