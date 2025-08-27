<h6 class="heading-small text-muted mb-4">Información de la área académica</h6>
<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="area_name"> Nombre de la área</label>
                <input type="text" id="area_name" name="area_name" class="form-control form-control-alternative"
                    placeholder="Ingrese el nombre del área académica"
                    value="{{ old('area_name', $academic_areas->area_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="area_code"> Código del área académica</label>
                <input type="text" id="area_code" name="area_code" class="form-control form-control-alternative"
                    placeholder="Ingrese el código del área académica"
                    value="{{ old('area_code', $academic_areas->area_code) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="location"> Ubicación</label>
                <select name="location" id="location" class="form-control">
                    <option value=""disabled>Seleccione la ubicación de area del docente</option>
                    <option value="Sub Dirección Académica tecnica"
                        {{ old('location', $academic_areas->location ?? '') == 'Sub dirección Académica técnica' ? 'selected' : '' }}>
                        Sub dirección Académica técnica</option>
                    <option value="Sub Dirección Administrativa"
                        {{ old('location', $academic_areas->location ?? '') == 'Sub dirección administrativa' ? 'selected' : '' }}>
                        Sub dirección administrativa</option>
                    <option value="Dirección "
                        {{ old('location', $academic_areas->location ?? '') == 'Dirección ' ? 'selected' : '' }}>
                        Dirección </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="equipment_coordinator"> Coordinador de Equipos</label>
                <input type="text" id="equipment_coordinator" name="equipment_coordinator" class="form-control form-control-alternative"
                    placeholder="Ingrese el nombre del coordinador de equipos"
                    value="{{ old('equipment_coordinator', $academic_areas->equipment_coordinator) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="area_type">Tipo de Área</label>
                <select name="area_type" id="area_type" class="form-control">
                    <option value=""disabled>Seleccione el tipo de área</option>
                    <option value="Área administrativa"
                        {{ old('area_type', $academic_areas->area_type ?? '') == 'Área administrativa' ? 'selected' : '' }}>
                        Área Administrativa</option>
                    <option value="Área Docente",
                        {{ old('area_type', $academic_areas->area_type ?? '') == 'Área Docente' ? 'selected' : '' }}>
                        Área Docente</option>
                    <option value="Servicios Generales",
                        {{ old('area_type', $academic_areas->area_type ?? '') == 'Servicios Generales' ? 'selected' : '' }}>
                        Servicios Generales</option>
                    <option value="Área de Soporte o Apoyo Técnico",
                        {{ old('area_type', $academic_areas->area_type ?? '') == 'Área de Soporte o Apoyo Técnico' ? 'selected' : '' }}>
                        Área de Soporte o Apoyo Técnico</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description"> Descripción del área</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                    placeholder="Ingrese una breve descripción del área académica"
                    value="{{ old('description', $academic_areas->description) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="equipment_quantity"> Cantidad de equipos</label>
                <input type="number" id="equipment_quantity" name="equipment_quantity" class="form-control form-control-alternative"
                    placeholder="Ingrese la cantidad de equipos del área académica"
                    value="{{ old('equipment_quantity', $academic_areas->equipment_quantity) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="responsible_id">
                    <i class="fas fa-graduation-cap"></i> Responsable </label>

                <select name="responsible_id" id="responsible_id" class="form-control form-control-alternative">
                    <option disabled>Seleccione al responsable</option>
                    @foreach ($responsibles as $responsible)
                        <option value="{{ $responsible->id }}" @selected(old('responsible_id', $responsible->responsible_id) == $responsible->id)>
                            {{ $responsible->name }}
                        </option>
                    @endforeach
                </select>

            </div>
        </div>
    </div>


<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="technological_equipment_id">
                    <i class="fas fa-graduation-cap"></i> Equipo Tecnológico </label>
                    <select name="technological_equipment_id" id="technological_equipment_id" class="form-control form-control-alternative">
                    <option disabled>Seleccione el equipo asignado</option>
                    @foreach ($technological_equipments as $technological_equipment)
                        <option value="{{ $technological_equipment->id }}" @selected(old('technological_equipment_id', $technological_equipment->technological_equipment_id) == $technological_equipment->id)>
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
                <i class="fas fa-save"></i> Guardar área académica
            </button>
        </div>
    </div>

