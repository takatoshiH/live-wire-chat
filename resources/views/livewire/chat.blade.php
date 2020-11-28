<div>
    <div wire:poll.500ms="getChats">
        <ul>
            @foreach($chats as $chat)
                <li>{{$chat->text}}</li>
            @endforeach
        </ul>
    </div>
    <h4>新規投稿</h4>
    <input type="text" wire:model="message">
    <button wire:click="create('{{$message}}')">送信</button>
</div>
