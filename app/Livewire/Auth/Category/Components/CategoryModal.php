<?php

namespace App\Livewire\Auth\Category\Components;

use App\Livewire\Auth\Category\Index;
use App\Models\Category;
use Livewire\Attributes\On;
use Livewire\Component;

class CategoryModal extends Component
{
    public bool $show = false;
    public ?Category $category = null;
    public string $name = '';

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:1', 'max:255', 'unique:categories,name,' . ($this->category ? $this->category->id : 'null')],
        ];
    }

    #[On('create-category')]
    public function open()
    {
        $this->reset('name', 'category');
        $this->show = true;
    }

    #[On('update-category')]
    public function openWithCategory(Category $category)
    {
        $this->category = $category;
        $this->name = $category->name;
        $this->show = true;
    }

    public function close()
    {
        $this->reset('name', 'category');
        $this->show = false;
    }

    public function save()
    {
        $this->validate();

        if ($this->category) {
            $this->category->update(['name' => $this->name]);
        } else {
            Category::create(['name' => $this->name]);
        }

        $this->dispatch(
            'open-toast',
            title: 'Wijzigingen opgeslagen',
            message: 'De categorie is succesvol opgeslagen.',
            type: 'success',
        );
        $this->dispatch('refresh')->to(Index::class);
        $this->close();
    }

    public function render()
    {
        return view('livewire.auth.category.components.category-modal');
    }
}
