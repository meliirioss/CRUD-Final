<div class="space-y-6">
    <div>
        <x-input-label for="equipo_trabajo_id" :value="__('Equipo de Trabajo')"/>
        <select id="equipo_trabajo_id" name="equipo_trabajo_id" class="mt-1 block w-full">
            <option value="" disabled selected>Seleccione un equipo de trabajo...</option>
            @foreach ($equiposTrabajo as $equipo)
                <option value="{{ $equipo->id }}" {{ (old('equipo_trabajo_id', $orden->equipo_trabajo_id) == $equipo->id) ? 'selected' : '' }}>
                    {{ $equipo->nombre }}
                </option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('equipo_trabajo_id')"/>
    </div>

    <div>
        <x-input-label for="solicitud_id" :value="__('Solicitud')"/>
        <select id="solicitud_id" name="solicitud_id" class="mt-1 block w-full">
            <option value="" disabled selected>Seleccione una solicitud...</option>
            @foreach ($solicitudes as $solicitud)
                <option value="{{ $solicitud->id }}" {{ (old('solicitud_id', $orden->solicitud_id) == $solicitud->id) ? 'selected' : '' }}>
                    {{ $solicitud->dni }} - {{ $solicitud->nombre }} {{ $solicitud->apellido }}
                </option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('solicitud_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
