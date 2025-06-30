{{-- resources/views/livewire/good-afternoon-component.blade.php --}}
<div>
    <div class="p-4 bg-white rounded shadow-md">
        <h2 class="text-xl font-bold mb-4">{{ $message }}</h2>

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">お名前</label>
            <input type="text" id="name" wire:model="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <button wire:click="greet" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
            挨拶する
        </button>
    </div>
</div>
