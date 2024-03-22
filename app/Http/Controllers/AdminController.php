<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Faculty;
use App\Models\Notice;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
  public  function  post_page()  
  {
    
    return view('admin.post_page');
        
    }

    public function add_faculty(Request $request)
    {
            $user=Auth()->user();
            //$user_id=$user->id;
            $usertype =$user->usertype;


        $faculty=new Faculty;
        $faculty->name =$request->name;
        $faculty->designation=$request->designation;
        $faculty->dept	 =$request->dept;
        $faculty->user_type =$usertype;
        $faculty->email =$request->email;
        $faculty->mobile =$request->mobile;
        
        $image=$request->image;

        if($image)
        {
          $imagename=time().'.'.$image->getClientOriginalExtension();
          $request->image->move('postimage',$imagename);
          $faculty->image='postimage/'.$imagename;
          
        }
        $faculty->save();
        return redirect()->back()->with('message','Post Added Successfully');


    }
    public function update_faculty(Request $request)
    {
     // dd($request->all());
     // dd($request->faculty_);
       $user=Auth()->user();
      //$user_id=$user->id;
      $usertype =$user->usertype;


   $faculty=Faculty::find($request->faculty_id);
   $faculty->name =$request->name;
   $faculty->designation=$request->designation;
   $faculty->dept	 =$request->dept;
   $faculty->user_type =$usertype;
   $faculty->email =$request->email;
   $faculty->mobile =$request->mobile;

   $image=!empty($request->image)?$request->image:null;

   if($image)
  {
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('postimage',$imagename);
    $faculty->image='postimage/'.$imagename;
    
  }
   $faculty->save();
   return redirect()->route('faculty_list')->with('message','Post Update Successfully');


    }

    public function show_post()  {
      $faculties=Faculty::all();
      return view('admin.show_post',compact('faculties'));
      
    }

   public function delete($id) {
    DB::table('users')->where('id',$id)->delete();
    return redirect()->back()->with('success','successfully deleted!');
    
   }
   public function edit($id)
   {
    $data=DB::table('users')->where('id',$id)->first();
    return view('admin.edit',compact('data'));
   }
 public function update(Request $request,$id)
 {

  $data=User::find($id);

 

    $data->name=$request->name;
    $data->email=$request->email;
    $data->sess_ion=$request->sess_ion;
    $data->phone=$request->phone;
    $data->address=$request->address;
    



  $data->save();
  return redirect()->back()->with('message','Post Successfully Updated!');;


 }
 public function faculty_delete($id) {
  // DB::table('faculties')->where('id',$id)->delete();
  $faculty=Faculty::find($id);
  $faculty->delete();
  return redirect()->back()->with('message','successfully deleted!');
  
 }
 public function faculty_edit($id)
   {
    $data=DB::table('faculties')->where('id',$id)->first();
    //dd($data);
    return view('admin.edit_faculty',compact('data'));
   }
   public function faculty_update(Request $request,$id)
 {

  $data=Faculty::find($id);

 

    $data->name=$request->name;
    $data->designation=$request->designation;
    $data->dept=$request->dept;
    $data->email=$request->email;
    $data->mobile=$request->mobile;
    $data->address=$request->address;
  $data->save();
  return redirect()->back()->with('message','Post Successfully Updated!');;


 }

 //notice 
 public function noticeList()  {
  //dd("notice list");
  $notices=Notice::all();
  return view('admin.notice.notice_list',compact('notices'));
  
}
public function noticeCreate()  {
  //dd("notice create");
  return view('admin.notice.notice_create');
  
}
public function noticeStore(Request $request)
    {
      //dd($request->all());
        $notice=new Notice;
        $notice->title =$request->title;
        $notice->description=$request->description;
        $notice->date	=$request->date;
        
        $image=$request->image;
        $pdf=$request->pdf;
        //dd($image);
        if($image)
        {
          $imagename=time().'.'.$image->getClientOriginalExtension();
          $request->image->move('postimage',$imagename);
          $notice->image='postimage/'.$imagename;
          
        }
        if($pdf)
        {
          $pdfname=time().'.'.$pdf->getClientOriginalExtension();
          $request->pdf->move('pdf',$pdfname);
          $notice->pdf='pdf/'.$pdfname;
          
        }
        $notice->save();
        return redirect()->route('noticelist')->with('message','Notice Added Successfully');
    }
    public function noticeEdit($id)
    {
     $notice=DB::table('notices')->where('id',$id)->first();
     return view('admin.notice.notice_edit',compact('notice'));
    }
   
    public function noticeUpdate(Request $request, $id)
 {
  // dd($id);
    $data=Notice::find($id);
    $data->title=$request->title;
    $data->description=$request->description;
    $data->date=$request->date;

    $image=$request->image;
    $pdf=$request->pdf;
    if($image)
        {
          $imagename=time().'.'.$image->getClientOriginalExtension();
          $request->image->move('postimage',$imagename);
          $data->image='postimage/'.$imagename;
          
        }
    if($pdf)
        {
          $pdfname=time().'.'.$pdf->getClientOriginalExtension();
          $request->pdf->move('pdf',$pdfname);
          $data->pdf='pdf/'.$pdfname;
          
        }
  $data->save();
  return redirect()->route('noticelist')->with('message','Notice Successfully Updated!');
 }
 public function noticeDelete($id) {
  $notice=Notice::find($id);
  $notice->delete();
  return redirect()->route('noticelist')->with('message','successfully deleted!');
  
 }

}
