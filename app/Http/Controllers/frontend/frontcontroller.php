<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\signinRequest;
use App\Http\Requests\signupRequest;
use App\Mail\contact;
use App\Mail\forgetpass;
use App\Models\Book;
use App\Models\Category;
use App\Models\Reader;
use App\Models\Visitor;
use Facade\FlareClient\View;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;



class frontcontroller extends Controller
{
    //
    public function index()
    {   
        $page_title='Home';
        $books =Book::take(3)->orderBy('created_at','Desc')->get();

        $categories=Category::get();
        Visitor::create([
            'count'=>1
        ]);
        return view('Front_end.index',compact('books','categories','page_title'));
    }


    public function show_books($id)
    {
         
        $page_title='show books';
       $books= Book::where('category_id',$id)->get();
      $categories= Category::get();
        return view('Front_end.show_books',compact('books','categories','id','page_title'));
    }

   
    public function select_category(Request $request)
    {
        
        $x=Book::whereIn('category_id',$request->v)->get();
        // echo $x;
        $i=0;
        foreach($x as $item){
            $i++;
        echo '<div class="col-md-3 product-men women_two">
                                        
                                        
                                        
            <div   class="product-chr-info chr"> <a href="'.route('single.book',$item->id).'">
        <div class="thumbnail">
                <img style="height: 150px; width: 150px;" src="/Images/books/'.$item["image"].'" alt="">  
        </div>
        <div  class="caption">
            <h4>'.$item["name"].'</h4>
            
            <div class="matrlf-mid">
                <ul class="rating">
                    <li>
                        <a href="#">
                            <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star gray-star" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star gray-star" aria-hidden="true"></span>
                        </a>
                    </li>
                </ul>
            

                
            </div>
            
        </div>
            </a></div> </div> ' ;
            if($i==4){
                echo' <div class="clearfix"> </div>';
                $i=0;
            }

            }
    }
    public function search_books(Request $request)
    {

        $namebook='%'.$request->search.'%';
        $booksearch= Book::where('name','like',$namebook)->get();
        $i=0;
        foreach($booksearch as $item){
            $i++;
        echo '  <div class="col-md-3 product-men women_two">
                                        
                                        
                                        
            <div   class="product-chr-info chr"> <a href="'.route('single.book',$item->id).'">
        <div class="thumbnail">
                <img style="height: 150px; width: 150px;" src="/Images/books/'.$item["image"].'" alt="">  
        </div>
        <div  class="caption">
            <h4>'.$item["name"].'</h4>
            
            <div class="matrlf-mid">
                <ul class="rating">
                    <li>
                        <a href="#">
                            <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star gray-star" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star gray-star" aria-hidden="true"></span>
                        </a>
                    </li>
                </ul>
            

                
            </div>
            
        </div>
            </a></div> </div> ' ;
            if($i==4){
                echo'  <div class="clearfix"> </div>';
                $i=0;
            }

            }


    }

    public function single_books($id)
    {
        $page_title='single book';
       $book= Book::find($id);
       $books=Book::take(4)->where('category_id',$book['category_id'])->get();
      // return $books;
         return view('Front_end.single_book',compact('book','books','page_title'));
    }
    public function getDownload($id)
    {
     
      $book=  Book::where('id',$id)->get();
        $file= 'files/books/'.$book[0]['upload_file'];
        $headers =array(
            'Content-Type' => 'application/pdf',
        );


        return Response::download($file, $book[0]['upload_file'], $headers);
    }
    public function read_book($id)
    {
     
      $book=  Book::where('id',$id)->get();
        $file= 'files/books/'.$book[0]['upload_file'];
        $headers =array(
            'Content-Type' => 'application/pdf',
        );


        return Response::file($file, $headers);
    }
    public function login()
    {
        $page_title='log in';
        return view('Front_end.login',compact('page_title'));
    }
    public function sign_in(signinRequest $request)
    {
        $reader=Reader::where('email','=',$request->email)
        ->where('userpass','=',$request->userpass)->get();
        if($reader->count()> 0)
        {
            foreach($reader as $item)
            {
                
                $request->session()->put('name',$item->name);
            }
            return redirect()->route('index');
        }
       else{
           return redirect()->back()->with('invalid','Email or Password invalid');
       }
    
    }
    public function send_forgetpass(Request $request){
        $reader=Reader::where('email',$request->email)->get();
        if($reader->count()==1)
        {
            $rondomnum=mt_rand(100000, 999999);
            $contact=[
                'title'=>'change your password ',
                'body'=>'please enter the link to change :' .route('change.pass',$reader[0]['id'])
                


            ];
            $fromemail= "maktbty2001@gmail.com";
            Mail::to($request->email)->send(new forgetpass($contact,$fromemail));
            session()->put('pass',1);
            return redirect()->back()->with('checkmail','please check your mail');
        }
        else{
            return redirect()->back()-with('wrong','the Email isnot exist');
        }
    }
    public function change_pass($id){
        $page_title='change password';
        return view('Front_end.changepass',compact('id','page_title'));
    }
    public function save_pass($id,Request $request)
    {
        if($request->password==$request->confirmpass){
        $reader=Reader::find($id);
        $reader->userpass=$request->password;
        $reader->save();
        if(Session()->has('pass')){
        session()->forget('pass');}
        return redirect()->route('login')->with('created','your password change successfully');
        }
        else
        {
            return redirect()->back()->with('passmatch',' not matching');
        }
    }
    public function signup(signupRequest $request){
       $readeremail= Reader::where('email',$request->email)->get();

        if($readeremail->count()>0)
        {
        
            return redirect()->back()->withInput()->with('failed',' the email is exist');
        }
        if($request->userpass!=$request->confirmpass)
        {
            return redirect()->back()->with('failed','the password not matching');   
        }

        Reader::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'userpass'=>$request->userpass
        ]);
        return redirect()->back()->with('success','created Successfully');
    }
    public function logout(Request $request)
    {
        $page_title='login';
        $request->session()->flush();
        return view('Front_end.login',compact('page_title'));
    }

    public function contact()
    {
        $page_title='contact';
        return view('Front_end.contact',compact('page_title'));
    }
    public function send_contact(Request $request){

        $contact=[
            'title'=>'mail from user in maktbty site',
            'body'=> 'user :  '.$request->first_name.' '.$request->last_name.' 
            can tell you this massage :  '. $request->message
            
            
        ];
        $fromemail= $request->email;
       Mail::to('maktbty2001@gmail.com')->send(new contact($contact,$fromemail));
        
        return redirect()->back()->with('success','your message sends to admin wedsite');

    }

}
