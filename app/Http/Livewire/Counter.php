<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
class Counter extends Component
{
    public $name;
    
  
    public function render()
    {
        return view('livewire.counter');
    }
    public function savePost()
      {
  
    // Insert the data into the database
    // For example, using an Eloquent model:
    Post::create([
        'name' => $this->name,
       
       
    ]);

    // Clear the form fields
    $this->name = '';
  

    // Optionally, show a success message or redirect to another page
}

}
