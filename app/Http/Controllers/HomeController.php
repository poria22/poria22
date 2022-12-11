<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Request;
use App\Http\Requests\index;
use http\Client\Response;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Post;
use App\User;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{

//main page
    public function index($id=null)
    {
        if(!empty($id)){
            $result=db::select('select * from test where id=:id',['id'=>$id]);
        }

        else{
            $result=db::select('select * from test');
    }
        return view('users', ['users'=>$result]);
    }
//insert
    public function insert(index $users)
    {
        DB::insert('insert into test (name ,email) values (:name,:email)',['name'=>$users->name,'email'=>$users->email]);
        return redirect()->route('index');
    }
//delete
    public function delete($id)
    {
       DB::delete('delete from test where id=:id' ,['id'=>$id]);
       return redirect()->route('index');
    }
//update
    public function update($id)
    {
        $user=DB::select('select * from test where id=:id',['id'=>$id])[0];
        return view('update',compact('user'));
    }

    public function FinalUpdate(index $user,$id)
    {
       DB::update('update test set name=:name,email=:email where id=:id' ,['name'=>$user->name,'email'=>$user->email,'id'=>$id]);
       return redirect('index');
    }

//paginator
    public function page($id = 1)
    {
       // $result = User::find($id)->posts;

//        $result = $user->posts()->get();
        //$result = $user->posts;
       // return $result;
        $user = User::find(1);



        $post = $user->posts;



        dd($post);
    }
}
