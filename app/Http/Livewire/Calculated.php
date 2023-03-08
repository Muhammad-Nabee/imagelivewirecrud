<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculated extends Component
{
    public $num1;
    public $num2;
    public $result;
    public $message='';
    protected $listeners=['resultCalculated'=>'calRes'];// first method
    public function add(){
        $this->result=$this->num1+$this->num2;
        $this->emit('resultCalculated');//2nd method
    }
    
    public function calRes(){
        if($this->num1 > $this->num2){
            $this->message="num1 greater than num2";
        }else{
            $this->message="num2 greater than num1";
        }
       
    }
    public function render()
    {
        return view('livewire.calculated')->layout('layouts.cal');
    }
}
