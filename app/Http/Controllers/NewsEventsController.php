<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NewsEventsController extends Controller
{
    //
    public function getIndex()
    {
        $data['title'] = 'News and Events';
    	$data['result'] = DB::table('news_events')
    	->join('cms_users','cms_user_id','=','cms_user_id')
    	->select('news_events.*','cms_users.name as author')
    	->orderby('news_events.id','desc')
    	->paginate(5);
    	//dd($data['result']);
    	return view('announcement',$data);
    }

    public function getArticle($slug)
    {
    	$row = DB::table('news_events')
    	->join('cms_users','cms_user_id','=','cms_user_id')
    	->select('news_events.*','cms_users.name as author')
    	->where('news_events.slug',$slug)
    	->first();

    	$data['row'] = $row;

    	return view('article',$data);
    }

    public function getCategory($id)
    {
        $data['title'] = $id;
        
    	$data['result'] = DB::table('news_events')
    	->join('cms_users','cms_user_id','=','cms_user_id')
    	->select('news_events.*','cms_users.name as author')
    	->orderby('news_events.id','desc')
    	->where('news_events.category',$id)
    	->paginate(5);

    	return view('announcement',$data);
    }

    public function getLatest()
    {
        $data['title'] = 'Latest News and Events';

    	$data['result'] = DB::table('news_events')
    	->join('cms_users','cms_user_id','=','cms_user_id')
    	->select('news_events.*','cms_users.name as author')
    	->orderby('news_events.id','desc')
    	->paginate(5);

    	return view('announcement',$data);
    }

    public function getSearch(Request $req)
    {

    	if($req->get('search_text') == '') return redirect('pages/events');

        $data['title'] = 'Search '.$req->get('search_text');

    	$data['result'] = DB::table('news_events')
    	->join('cms_users','cms_user_id','=','cms_user_id')
    	->select('news_events.*','cms_users.name as author')
    	->where('news_events.title','like','%'.$req->get('search_text').'%')
    	->paginate(5);

    	return view('announcement',$data);
    }

    public function getAnnouncement()
    {
        $data['title'] = 'Announcements';

        $data['result'] = DB::table('news_events')
        ->join('cms_users','cms_user_id','=','cms_user_id')
        ->select('news_events.*','cms_users.name as author')
        ->where('news_events.announcement','Yes')
        ->orderby('news_events.id','desc')
        ->paginate(5);

        return view('announcement',$data);
    }
}
