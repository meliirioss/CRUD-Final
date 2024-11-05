<div class="space-y-6">
    
    <div>
        <x-input-label for="patente" :value="__('Patente')"/>
        <x-text-input id="patente" name="patente" type="text" class="mt-1 block w-full" :value="old('patente', $vehiculo?->patente)" autocomplete="patente" placeholder="Patente"/>
        <x-input-error class="mt-2" :messages="$errors->get('patente')"/>
    </div>
    <div>
        <x-input-label for="marca" :value="__('Marca')"/>
        <x-text-input id="marca" name="marca" type="text" class="mt-1 block w-full" :value="old('marca', $vehiculo?->marca)" autocomplete="marca" placeholder="Marca"/>
        <x-input-error class="mt-2" :messages="$errors->get('marca')"/>
    </div>
    <div>
        <x-input-label for="modelo" :value="__('Modelo')"/>
        <x-text-input id="modelo" name="modelo" type="text" class="mt-1 block w-full" :value="old('modelo', $vehiculo?->modelo)" autocomplete="modelo" placeholder="Modelo"/>
        <x-input-error class="mt-2" :messages="$errors->get('modelo')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>