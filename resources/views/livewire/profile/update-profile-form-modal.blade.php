<x-container.modal maxWidth="sm" :name="$this->modal_name" :title="$this->title" method="save">
    Be like water.
    <x-slot:button>
        <x-element.button.primary wire:loading.attr="disabled" type="submit">Save</x-element.button.primary>
    </x-slot:button>
</x-container.modal>
