<h6 class="heading-small text-muted mb-4">Informes de Mantenimiento</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="report_date"> Fecha del informe de mantenimiento</label>
                <input type="date" id="report_date" name="report_date" class="form-control form-control-alternative"
                    placeholder="Ingresar fecha del informe de mantenimiento" value="{{ old('report_date', $maintenance_reports->report_date) }}">
            </div>
        </div>
    </div>

<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description"> Descripción del reporte </label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                    placeholder="Ingresar breve descripción del reporte " value="{{ old('description', $maintenance_reports->description) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="action"> Acción realizada  </label>
                <input type="text" id="action" name="action" class="form-control form-control-alternative"
                    placeholder="Ingresar acción realizada de mantenimiento " value="{{ old('action', $maintenance_reports->action) }}">
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="equipment_condition">Condición del equipo</label>
                <select name="equipment_condition" id="equipment_condition" class="form-control">
                    <option value=""disabled>Seleccione la condición del equipo</option>
                    <option value="Operativo"
                        {{ old('equipment_condition', $maintenance_reports->equipment_condition ?? '') == 'Operativo' ? 'selected' : '' }}>Operativo
                    </option>
                    <option value="En mantenimiento",
                        {{ old('equipment_condition', $maintenance_reports->equipment_condition ?? '') == 'En mantenimiento' ? 'selected' : '' }}>En mantenimiento
                    </option>
                    <option value="Fuera de servicio",
                        {{ old('equipment_condition', $maintenance_reports->equipment_condition ?? '') == 'Fuera de servicio' ? 'selected' : '' }}>Fuera de servicio
                    </option>
                    <option value="Con fallas menores",
                        {{ old('equipment_condition', $maintenance_reports->equipment_condition ?? '') == 'Con fallas menores' ? 'selected' : '' }}>Con fallas menores
                    <option value="Con fallas críticas",
                        {{ old('equipment_condition', $maintenance_reports->equipment_condition ?? '') == 'Con fallas críticas' ? 'selected' : '' }}>Con fallas críticas
                    </option>
                    <option value="Obsoleto ",
                        {{ old('equipment_condition', $maintenance_reports->equipment_condition ?? '') == 'Obsoleto' ? 'selected' : '' }}>Obsoleto
                    </option>
                    <option value="Condición aceptable",
                        {{ old('equipment_condition', $maintenance_reports->equipment_condition ?? '') == 'Condición aceptable' ? 'selected' : '' }}>Condición aceptable
                    </option>
                    <option value="Condición óptima",
                        {{ old('equipment_condition', $maintenance_reports->equipment_condition ?? '') == 'Condición óptima' ? 'selected' : '' }}>Condición óptima
                    </option>
                    <option value="Condición deteriorada",
                        {{ old('equipment_condition', $maintenance_reports->equipment_condition ?? '') == 'Condición deteriorada' ? 'selected' : '' }}>Condición deteriorada
                    </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="equipment_name"> Nombre del equipo </label>
                <input type="text" id="equipment_name" name="equipment_name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del equipo" value="{{ old('equipment_name', $maintenance_reports->equipment_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="maintenance_date"> Fecha del mantenimiento</label>
                <input type="date" id="maintenance_date" name="maintenance_date" class="form-control form-control-alternative"
                    placeholder="Ingresar fecha del mantenimiento" value="{{ old('maintenance_date', $maintenance_reports->maintenance_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="maintenance_type">Tipos de Mantenimiento</label>
                <select name="maintenance_type" id="maintenance_type" class="form-control">
                    <option value=""disabled>Seleccione el tipo de mantenimiento</option>
                    <option value="Revisión programada"
                        {{ old('maintenance_type', $maintenance_reports->maintenance_type ?? '') == 'Revisión programada' ? 'selected' : '' }}>Revisión programada
                    </option>
                    <option value="Reparación cuando se daña",
                        {{ old('maintenance_type', $maintenance_reports->maintenance_type ?? '') == 'Reparación cuando se daña' ? 'selected' : '' }}>Reparación cuando se daña
                    </option>
                    <option value="Chequeo con sensores",
                        {{ old('maintenance_type', $maintenance_reports->maintenance_type ?? '') == 'Chequeo con sensores' ? 'selected' : '' }}>Chequeo con sensores
                    </option>
                    <option value="Mejora para que no falle más",
                        {{ old('maintenance_type', $maintenance_reports->maintenance_type ?? '') == 'Mejora para que no falle más' ? 'selected' : '' }}>Mejora para que no falle más
                    <option value="Cuidados diarios por el operador",
                        {{ old('maintenance_type', $maintenance_reports->maintenance_type ?? '') == 'Cuidados diarios por el operador' ? 'selected' : '' }}>Cuidados diarios por el operador
                    </option>
                    <option value="Mantenimiento de emergencia ",
                        {{ old('maintenance_type', $maintenance_reports->maintenance_type ?? '') == 'Mantenimiento de emergencia' ? 'selected' : '' }}>Mantenimiento de emergencia
                    </option>
                    <option value="Mantenimiento de seguridad",
                        {{ old('maintenance_type', $maintenance_reports->maintenance_type ?? '') == 'Mantenimiento de seguridad' ? 'selected' : '' }}>Mantenimiento de seguridad
                    </option>
                    <option value="Mantenimiento legal o normativo",
                        {{ old('maintenance_type', $maintenance_reports->maintenance_type ?? '') == 'Mantenimiento legal o normativo' ? 'selected' : '' }}>Mantenimiento legal o normativo
                    </option>
                    <option value="Mantenimiento estético",
                        {{ old('maintenance_type', $maintenance_reports->maintenance_type ?? '') == 'Mantenimiento estético' ? 'selected' : '' }}>Mantenimiento estético
                    </option>
                    <option value="Otro",
                        {{ old('maintenance_type', $maintenance_reports->maintenance_type ?? '') == 'Otro' ? 'selected' : '' }}>Otro
                    </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="technician_name"> Nombre del técnico</label>
                <input type="text" id="technician_name" name="technician_name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del técnico" value="{{ old('technician_name', $maintenance_reports->technician_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="maintenance_cost"> Costo del mantenimiento</label>
                <input type="decimal" id="maintenance_cost" name="maintenance_cost" class="form-control form-control-alternative"
                    placeholder="Ingresar costo del mantenimiento" value="{{ old('maintenance_cost', $maintenance_reports->maintenance_cost) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="report_status">Tipos de Mantenimiento</label>
                <select name="report_status" id="report_status" class="form-control">
                    <option value=""disabled>Seleccione el tipo de mantenimiento</option>
                    <option value="Activo"
                        {{ old('report_status', $maintenance_reports->report_status ?? '') == 'Activo' ? 'selected' : '' }}>Activo
                    </option>
                    <option value="Completado",
                        {{ old('report_status', $maintenance_reports->report_status ?? '') == 'Completado' ? 'selected' : '' }}>Completado
                    </option>
                    <option value="En proceso",
                        {{ old('report_status', $maintenance_reports->report_status ?? '') == 'En proceso' ? 'selected' : '' }}>En proceso
                    </option>
                    <option value="Pendiente",
                        {{ old('report_status', $maintenance_reports->report_status ?? '') == 'Pendiente' ? 'selected' : '' }}>Pendiente
                    </option>
                </select>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="responsible_id">
                    <i class="fas fa-graduation-cap"></i> Responsable </label>

                <select name="responsible_id" id="responsible_id" class="form-control form-control-alternative">
                    <option disabled>Seleccione al Responsable</option>
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
                    <option disabled>Seleccione el Equipo Tecnológico</option>
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
            <i class="fas fa-save"></i> Guardar Informes de Mantenimiento
        </button>
    </div>
</div>
