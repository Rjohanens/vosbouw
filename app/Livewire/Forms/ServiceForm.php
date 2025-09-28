<?php

namespace App\Livewire\Forms;

use App\Enum\StatusEnum;
use App\Models\Service;
use Illuminate\Validation\Rules\Enum;
use Livewire\Form;

class ServiceForm extends Form
{
    public ?Service $service = null;

    public string $name = '';

    public string $description = '';

    public bool $featured = false;

    public StatusEnum $status = StatusEnum::DRAFT;

    public function rules()
    {
        return [
            'name' => 'required|string|min:1|max:255|unique:services,name,'.($this->service ? $this->service->id : 'null'),
            'description' => 'required|string|min:1|max:4096',
            'status' => ['required', new Enum(StatusEnum::class)],
            'featured' => 'required|boolean',
        ];
    }

    public function setForm(Service $service)
    {
        $this->service = $service;
        $this->name = $service->name;
        $this->description = $service->description;
        $this->status = $service->status;
        $this->featured = $service->featured;
    }

    public function store()
    {
        $this->validate();

        return Service::create([
            'name' => $this->name,
            'description' => $this->description,
            'status' => $this->status->value,
            'featured' => $this->featured,
        ]);
    }

    public function update()
    {
        if (! $this->service) {
            return;
        }

        $this->validate();

        $this->service->update([
            'name' => $this->name,
            'description' => $this->description,
            'status' => $this->status->value,
            'featured' => $this->featured,
        ]);

        return $this->service;
    }
}
