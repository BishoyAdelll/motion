<?php

namespace App\Http\Controllers\Web;
use App\Models\Comment;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
class CommentController extends Controller
{
//    public function store(Request $request){
//        $validator=validator::make($request->all(),[
//            'name'=>'required|190',
//            'email'=>'required|email|190',
//            'phone'=>'required|190',
//            'website'=>'required|190',
//            'comment'=>'required|190',
//        ]);
//        if ($validator->fails()){
//            return response()->json([
//                'status'=>400,
//                'errors'=>$validator->messages(),
//            ]);
//        }
//        else{
//            $comment=new Comment;
//            $comment->name =$request->input('name');
//            $comment->email =$request->input('email');
//            $comment->phone =$request->input('phone');
//            $comment->website =$request->input('website');
//            $comment->comment =$request->input('comment');
//            $comment->save();
//            return response()->json([
//                'status'=>200,
//                'message'=>'Comment Added Successfully'
//            ]);
//        }
//    }
    public function store (Request $request){
        $request->validate([
            'blog_id'=>'required',
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'website'=>'required',
            'comment'=>'required',
        ]);
        $data=$request->all();
        $message=new Comment;
        $message->blog_id=$data['blog_id'];
        $message->name=$data['name'];
        $message->email=$data['email'];
        $message->phone=$data['phone'];
        $message->website=$data['website'];
        $message->comment=$data['comment'];
        $message->save();
//        return redirect()->back()->with('success','تم ارسال الرسالة بنجاح');
        return response()->json([
                'status'=>200,
                'message'=>'Comment Added Successfully'
            ]);
    }
    public function fetchComment(Request $request){
        $comments=Comment::where('blog_id',$request->blog_id)->get();
        return response()->json([
            'comments'=>$comments,
        ]);
    }

}
