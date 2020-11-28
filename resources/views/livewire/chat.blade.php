<div>
    <h3>チャットを作りたい</h3>
    <div wire:poll.500ms="getChats">
        <ul>
            @foreach($chats as $chat)
                <li>{{$chat->text}}</li>
            @endforeach
        </ul>
    </div>

    <h4>新規投稿</h4>
    <input type="text" wire:model.lazy="message">
    <button wire:click="create('hay')">送信</button>
</div>
