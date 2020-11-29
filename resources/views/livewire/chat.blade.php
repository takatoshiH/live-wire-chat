<div>
    <div style="margin: auto; margin-bottom: 10px">
        <h4>新規投稿</h4>
        <input type="text" wire:model="message">
        <button wire:click="create('{{$message}}')">送信</button>
    </div>
    <div style="width: 60%; background-color: #a0aec0; margin: auto; padding: 10px 10%">
        <div wire:poll.500ms="getChats">
            <ul>
                @foreach($chats as $chat)
                    <div style="margin-bottom: 30px">
                        <p><{{$chat->created_at}}></p>
                        <p>{{$chat->text}}</p>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
</div>
