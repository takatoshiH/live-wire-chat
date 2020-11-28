<div>
    <div>
        <h2>{{ $count }}</h2>
        <p><button wire:click="inc">+1</button></p>
        <input type="text" wire:model.lazy="message" >{{ $message }}
        <div wire:poll.1000ms>
            現在時刻は: {{ now() }}
        </div>
    </div>
</div>
