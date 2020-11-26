<div>
    <h1>初めてのLivewire</h1>
    <div>
        <h2>{{ $count }}</h2>
        <p><button wire:click="inc">+1</button></p>
        <input type="text" wire:model="message" >{{ $message }}
    </div>
</div>
