<h6 class="heading-small text-muted mb-4">Información del Tipo de equipo</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="equipment_name">Nombre del equipo</label>
                <input type="text" id="equipment_name" name="equipment_name" class="form-control form-control-alternative"
                    placeholder="Ingrese el nombre del equipo tecnológico" value="{{ old('equipment_name', $type_equipments->equipment_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripción del equipo</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                    placeholder="Ingrese la descripción del equipo" value="{{ old('description', $type_equipments->description) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="loan_time">Fecha de préstamo</label>
                <input type="date" id="loan_time" name="loan_time" class="form-control form-control-alternative"
                    value="{{ old('loan_time', $type_equipments->loan_time) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="worth">Valor del equipo</label>
                <input type="number" step="0.01" id="worth" name="worth" class="form-control form-control-alternative"
                    placeholder="Ingrese el valor del equipo" value="{{ old('worth', $type_equipments->worth) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="power_consumption">Consumo de energía</label>
                <input type="text" id="power_consumption" name="power_consumption" class="form-control form-control-alternative"
                    placeholder="Ingrese el consumo de energía" value="{{ old('power_consumption', $type_equipments->power_consumption) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="technology_category">Categoría</label>
                <select name="technology_category" id="technology_category" class="form-control">
                    <option value="" disabled>Seleccione la categoría del equipo</option>
                    @foreach([
                        'Computadoras portátiles','Computadoras de escritorio','Tabletas','Impresoras','Monitores',
                        'Teclados y ratones','Proyectores','Discos duros externos','Cámaras web','Accesorios tecnológicos','Otro'
                    ] as $category)
                        <option value="{{ $category }}" {{ old('technology_category', $type_equipments->technology_category ?? '') == $category ? 'selected' : '' }}>
                            {{ $category }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="code">Código único del equipo</label>
                <input type="text" id="code" name="code" class="form-control form-control-alternative"
                    placeholder="Ingrese el código del equipo" value="{{ old('code', $type_equipments->code) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="type_status">Estado del tipo de equipo</label>
                <select name="type_status" id="type_status" class="form-control">
                    <option value="" disabled>Seleccione el estado del equipo</option>
                    @foreach(['Activo','Inactivo','En reparación','En mantenimiento','Obsoleto','Descontinuado','En uso','En préstamo'] as $status)
                        <option value="{{ $status }}" {{ old('type_status', $type_equipments->type_status ?? '') == $status ? 'selected' : '' }}>
                            {{ $status }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="creation_date">Fecha de creación del registro</label>
                <input type="date" id="creation_date" name="creation_date" class="form-control form-control-alternative"
                    value="{{ old('creation_date', $type_equipments->creation_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="technological_equipment_id"><i class="fas fa-graduation-cap"></i> Equipo Tecnológico</label>
                <select name="technological_equipment_id" id="technological_equipment_id" class="form-control form-control-alternative">
                    <option disabled>Seleccione el equipo tecnológico</option>
                    @foreach ($technological_equipments as $technological_equipment)
                        <option value="{{ $technological_equipment->id }}"
                            {{ old('technological_equipment_id', $type_equipment->technological_equipment_id ?? '') == $technological_equipment->id ? 'selected' : '' }}>
                            {{ $technological_equipment->equipment_name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>
<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar tipo de equipo tecnológico
        </button>
    </div>
</div>
