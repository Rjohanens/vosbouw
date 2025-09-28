<?php

namespace App\Livewire\Auth\Category;

use App\Models\Category;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Index extends Component
{
    public Category $category;

    #[Computed]
    public function categories()
    {
        return Category::withCount('projects')->orderBy('created_at', 'desc')->paginate(10);
    }

    public function deleteCategory(Category $category)
    {
        if ($category->projects()->exists()) {
            $this->dispatch(
                'open-toast',
                title: 'Categorie niet verwijderd',
                message: 'De categorie kan niet worden verwijderd omdat er projecten aan zijn gekoppeld. Verwijder eerst de projecten en probeer het opnieuw.',
                type: 'error',
            );

            return;
        }

        $category->delete();

        $this->dispatch(
            'open-toast',
            title: 'Categorie verwijderd',
            message: 'De categorie is succesvol verwijderd.',
            type: 'success',
        );
        $this->dispatch('refresh');
    }

    #[On('refresh')]
    public function render()
    {
        return view('livewire.auth.category.index');
    }
}
