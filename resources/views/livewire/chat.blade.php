<div>
    <div class='chat-input'>
        <p>投稿者名</p>
        <input type="text" wire:model="user_name">
        <h4>新規投稿</h4>
        <input type="text" wire:model="message">
        <button wire:click="create('{{$message}}', '{{$user_name}}')">送信</button>
    </div>
    <div class='chats'>
        <div wire:poll.500ms="getChats">
            <ul>
                @foreach($chats as $chat)
                    <div class='each-chat'>
                        <p><{{$chat->id}}　{{$chat->created_at}} {{$chat->user_name}}></p>
                        <p>{{$chat->text}}</p>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<style>
    .chats {
        width: 60%;
        background-color: #a0aec0;
        margin: auto;
        padding: 10px 10%;

    }

    .chat-input {
        margin: 0 auto;
        margin-bottom: 10px;
        width: 60%;
    }

    .each-chat {
        margin-bottom: 30px;
    }
</style>
