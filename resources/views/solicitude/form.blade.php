<div class="space-y-6">
    
    <div>
        <x-input-label for="dni" :value="__('Dni')"/>
        <x-text-input id="dni" name="dni" type="text" class="mt-1 block w-full" :value="old('dni', $solicitude?->dni)" autocomplete="dni" placeholder="Dni"/>
        <x-input-error class="mt-2" :messages="$errors->get('dni')"/>
    </div>
    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $solicitude?->nombre)" autocomplete="nombre" placeholder="Nombre"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombre')"/>
    </div>
    <div>
        <x-input-label for="apellido" :value="__('Apellido')"/>
        <x-text-input id="apellido" name="apellido" type="text" class="mt-1 block w-full" :value="old('apellido', $solicitude?->apellido)" autocomplete="apellido" placeholder="Apellido"/>
        <x-input-error class="mt-2" :messages="$errors->get('apellido')"/>
    </div>
    <div>
        <x-input-label for="direccion" :value="__('Direccion')"/>
        <x-text-input id="direccion" name="direccion" type="text" class="mt-1 block w-full" :value="old('direccion', $solicitude?->direccion)" autocomplete="direccion" placeholder="Direccion"/>
        <x-input-error class="mt-2" :messages="$errors->get('direccion')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>