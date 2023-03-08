<div>
  <form wire:submit.prevent="add">
    <input type="text" wire:model.lazy="num1">
    <input type="text" wire:model.lazy="num2">
    {{$result}}
    {{$message}}
    
    <!-- <button type="submit" wire:click="$emit('resultCalculated')">show result</button> 
        FIRST METHOD
-->
     <button type="submit" wire:click>show result</button><!--2ND METHOD -->
  </fome>
</div>
