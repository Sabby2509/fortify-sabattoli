<div>
<div class="col-12">
    <h3 class="text-center">Valore: {{ $counter }}</h3>
    <button class="btn btn-success" wire:click="increase">Increase 1</button>
    <button class="btn btn-danger" wire:click="decrease">Decrease 1</button>

    <div class="d-flex">
        <button class="btn btn-success" wire:click="increaseByNumber(5)">Increase by 5</button>
        <button class="btn btn-danger" wire:click="decreaseByNumber(5)">Decrease by 5</button>
    </div>
</div>
</div>