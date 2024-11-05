<div class="space-y-6">
    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $equipoTrabajo?->nombre)" autocomplete="nombre" placeholder="Nombre"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombre')"/>
    </div>

    <!-- Selector para Empleado 1 -->
    <div>
        <x-input-label for="empleado_1_id" :value="__('Empleado 1')"/>
        <select id="empleado_1_id" name="empleado_1_id" class="mt-1 block w-full">
            <option value="">{{ __('Seleccione Empleado 1') }}</option>
            @foreach($empleados as $empleado)
                <option value="{{ $empleado->id }}" {{ old('empleado_1_id', $equipoTrabajo?->empleado_1_id) == $empleado->id ? 'selected' : '' }}>
                    {{ $empleado->nombre }} {{ $empleado->apellido }}
                </option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('empleado_1_id')"/>
    </div>

    <!-- Selector para Empleado 2 -->
    <div>
        <x-input-label for="empleado_2_id" :value="__('Empleado 2')"/>
        <select id="empleado_2_id" name="empleado_2_id" class="mt-1 block w-full">
            <option value="">{{ __('Seleccione Empleado 2') }}</option>
            @foreach($empleados as $empleado)
                <option value="{{ $empleado->id }}" {{ old('empleado_2_id', $equipoTrabajo?->empleado_2_id) == $empleado->id ? 'selected' : '' }}>
                    {{ $empleado->nombre }} {{ $empleado->apellido }}
                </option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('empleado_2_id')"/>
    </div>

    <!-- Selector para Vehículo -->
    <div>
        <x-input-label for="vehiculo_id" :value="__('Vehículo')"/>
        <select id="vehiculo_id" name="vehiculo_id" class="mt-1 block w-full">
            <option value="">{{ __('Seleccione Vehículo') }}</option>
            @foreach($vehiculos as $vehiculo)
                <option value="{{ $vehiculo->id }}" {{ old('vehiculo_id', $equipoTrabajo?->vehiculo_id) == $vehiculo->id ? 'selected' : '' }}>
                    {{ $vehiculo->patente }} - {{ $vehiculo->marca }} {{ $vehiculo->modelo }}
                </option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('vehiculo_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
