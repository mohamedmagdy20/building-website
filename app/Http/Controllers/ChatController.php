<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Models\Chat;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    //
    public $model;
    public $message;

    public function __construct(Chat $model , Message $message)
    {
        $this->model = $model;
        $this->message =$message;
    }

    public function chat($id)
    {
        
        $chats =  Chat::where('user_id',auth()->user()->id)->orWhere('user_to_id',auth()->user()->id)->with('user')->with('message')->get();
    //    return $chats;
        $mainChat = $this->model->find($id);
        $messages = $this->message->where('chat_id',$id)->get();
        return view('profile.main_chat',['chats'=>$chats,'mainChat'=>$mainChat , 'messages'=>$messages]);
    }

    public function createChat(Request $request)
    {
        $request->validate([
            'user_to_id'=>'required',
        ]);
        $data = $request->all();
        try{
            if(auth()->user()->id != $request->user_to_id)
            {
                // DB::beginTransaction();
                   // $isChatExist =  $this->chat->where('user_id',auth()->user()->id)->where('user_to_id',$data['user_to_id'])->first();
                    $isChatExist =  $this->model->where('user_id',auth()->user()->id)->where('user_to_id',$data['user_to_id'])->first();
                    $isChatExistToAnother = $this->model->where('user_id',$data['user_to_id'])->where('user_to_id',auth()->user()->id)->first();

                if(!$isChatExist && !$isChatExistToAnother)
                {
                    $chat =  $this->model->create(array_merge($data,['user_id'=>auth()->user()->id]) );
                    return redirect()->route('chats',$chat->id)->with('success','Chat Created');
                }else{
                    if($isChatExist)
                    {
                        return redirect()->route('chats',$isChatExist->id);
                    }
                
                    if($isChatExistToAnother)
                    {
                        return redirect()->route('chats',$isChatExistToAnother->id);
                    }
                }
            }else{
                return redirect()->back()->with('error','Can Not Create Chat');
            }
            
            // DB::commit();
            // Send Notification For Start Chat
            // event(new StartChatEvent(auth()->user()->id,$data['user_to_id']));
        }catch(\Exception $e)
        {
            DB::rollBack();
            return $e;
        }
       
    }


    public function sendMessage(Request $request)
    {
        $request->validate([
            'message'=>'required',
            'sender_id'=>'required',
            'chat_id'=>'required'
        ]);
        $data = $request->all();
        try{
            DB::beginTransaction();
            $message = $this->message->create($data);
            DB::commit();
            // Send Notification For Start Chat
            event(new ChatEvent($message));

            return response()->json([
                'status'=>200,
                'data'=>null,
                'message'=>'Message Sent'
            ]);

        }catch(\Exception $e)
        {
            DB::rollBack();
            return $e;
        }
    }
}
