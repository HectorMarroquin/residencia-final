<?php

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;
use Storage;
use App\Models\Role;
use App\User; 
use Mail;
use DB;
use Auth;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $file =$request->file('file');
                   
        if (!empty($file)) {

            $file_rute =$file->getClientOriginalName();
             $ruta=Storage::disk('correo')->put($file_rute, file_get_contents($file->getRealPath() ) );
             $input['file'] = $file_rute;
              Email::create($input);
        }else{
           $email =Email::create($input);
        }
                        
        $id = 1;//$input['tipocorreo']; 

        ini_set('max_execution_time', 300);
        

        
        $users=DB::table('emprendedores')
        ->join('users','emprendedores.user_id','=','users.id')
        ->select('emprendedores.Nombre','emprendedores.ApellidoP','users.email')->get();
        

             //       if(empty($input->file)){
                  //   $file=0;

       //     }else{
         //           $file=public_path('correo')."/".$input->file; 
           //     }

           // if($file==0)

             // 
           
           /*
         Mail::send('email.plantilla_correo', ['msg' => $user], function($mail) use ($user)
                 {
                    //$mail->from('vinculacionsistec@gmail.com','VINCULACION');
                    $mail->to($user->email, $user->name)->subject('tu mensaje fue recibido');//($data['email']);
                    //$mail->subject('Tenemos nuevas cosas para ti '. $data['name']);
                });   
*/  foreach ($users as $user) {
  
    //$data= array('message' =>$email->body,'email'=>$user->email,'name'=>$user->name,'title'=>$shipping->title);
  
    Mail::send('email.plantilla_correo', [], function($mail) use ($user)
       {
        //  $mail->from('vinculacionsistec@gmail.com','VINCULACION');
          $mail->to($user->email,$user->name)->subject('Tenemos nuevas cosas para ti '. $user->name);
       });
   }
   return "se ha enviado el imail";

        /*
                foreach ($users as $user) {

                 //$data= array('name'=>$user->name,'email'=>$user->email);
                  
                  $envio=Mail::send('email.plantilla_correo', ['msj' => $user], function($mail) use ($user)
                 {
                   // $mail->from('vinculacionsistec@gmail.com','VINCULACION');
                    $mail->to($user->email, $user->name)->subject('tu mensaje fue recibido');//($data['email']);
                    //$mail->to($user->,$data['name'])->subject('Tenemos nuevas cosas para ti '. $data['name']);
                });

                } */
            
        
     /*   
         else{
  

            foreach ($users as $user) {
  
            $data= array('message' =>$input->body,'email'=>$user->email,'name'=>$user->name,'title'=>$input->title,'file'=>$file);
            $envio=Mail::send('email.plantilla_correo', ['data' => $data], function($mail) use ($data,$archivo)
            {
                $mail->from('vinculacionsistec@gmail.com','VINCULACION');
                $mail->to($data['email']);
                $mail->subject('Tenemos nuevas cosas para ti '. $data['name']);
                $mail->attach($archivo);
            });
            }

            }

        
        if($envio){
            
            return redirect(route('home'));
        
        }else{
            //Alert::error('Mensaje No enviado.');
            return redirect(route('home'));

        }


    }*/


     
    
         

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        //
    }
}
