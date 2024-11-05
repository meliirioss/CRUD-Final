<div class="space-y-6">
    
    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $empleado?->nombre)" autocomplete="nombre" placeholder="Nombre"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombre')"/>
    </div>
    <div>
        <x-input-label for="apellido" :value="__('Apellido')"/>
        <x-text-input id="apellido" name="apellido" type="text" class="mt-1 block w-full" :value="old('apellido', $empleado?->apellido)" autocomplete="apellido" placeholder="Apellido"/>
        <x-input-error class="mt-2" :messages="$errors->get('apellido')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>