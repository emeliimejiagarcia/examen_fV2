<h6 class="heading-small text-muted mb-4"> Registro</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="username"> Nombre de Usuario </label>
                <input type="text" id="username" name="username" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre de usuario" value="{{ old('username', $registrations->username) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="current_condition"> Condición actual del equipo</label>
                <input type="text" id="current_condition" name="current_condition" class="form-control form-control-alternative"
                    placeholder="Ingrese la condición actual del equipo" value="{{ old('current_condition', $registrations->current_condition) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="last_update"> Última actualización </label>
                <input type="date" id="last_update" name="last_update" class="form-control form-control-alternative"
                    placeholder="Ingrese última actualización" value="{{ old('last_update', $registrations->last_update) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date_time"> Fecha y hora del registro </label>
                <input type="date" id="date_time" name="date_time" class="form-control form-control-alternative"
                    placeholder="Ingrese fecha y hora" value="{{ old('date_time', $registrations->last_update) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="loan_date"> Fecha del préstamo </label>
                <input type="date" id="loan_date" name="loan_date" class="form-control form-control-alternative"
                    placeholder="Ingrese la fecha del préstamo" value="{{ old('loan_date', $registrations->loan_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="return_date"> Fecha de devolución</label>
                <input type="date" id="return_date" name="return_date" class="form-control form-control-alternative"
                    placeholder="Ingrese la fecha de devolución del equipo" value="{{ old('return_date', $registrations->return_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="loan_duration"> Duración del préstamo</label>
                <input type="text" id="loan_duration" name="loan_duration" class="form-control form-control-alternative"
                    placeholder="Ingrese la duración del préstamo" value="{{ old('loan_duration', $registrations->loan_duration) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="user_type">Tipo de Usuarios</label>
                <select name="user_type" id="user_type" class="form-control">
                    <option value=""disabled>Seleccione el tipo de usuario</option>
                    <option value="Docentes" {{ old('user_type', $registrations->user_type ?? '') == 'Docentes' ? 'selected' : '' }}>
                        Docentes</option>
                    <option value="Estudiantes", {{ old('user_type', $loaregistrationsns->user_type ?? '') == 'Estudiantes' ? 'selected' : '' }}>
                        Estudiantes</option>
                    <option value="Administrativos", {{ old('user_type', $loregistrationsans->user_type ?? '') == 'Administrativos' ? 'selected' : '' }}>
                        Administrativos</option>
                    <option value="Técnicos o personal de soporte", {{ old('user_type', $registrations->user_type ?? '') == 'Técnicos o personal de soporte' ? 'selected' : '' }}>
                        Técnicos o personal de soporte</option>
                    <option value="Visitantes autorizados", {{ old('user_type', $registrations->user_type ?? '') == 'Visitantes autorizados' ? 'selected' : '' }}>
                        Visitantes autorizados</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="equipment_name"> Nombre del equipo </label>
                <input type="text" id="equipment_name" name="equipment_name" class="form-control form-control-alternative"
                    placeholder="Ingrese el nombre del equipo" value="{{ old('equipment_name', $registrations->equipment_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="equipment_number"> Número del equipo </label>
                <input type="text" id="equipment_number" name="equipment_number" class="form-control form-control-alternative"
                    placeholder="Ingrese el nombre del equipo" value="{{ old('equipment_number', $registrations->equipment_number) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="serial_number"> Número de serie del equipo </label>
                <input type="text" id="serial_number" name="serial_number" class="form-control form-control-alternative"
                    placeholder="Ingrese el número de serie del equipo" value="{{ old('serial_number', $registrations->serial_number) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="condition_loan"> Condición del préstamo </label>
                <input type="text" id="condition_loan" name="condition_loan" class="form-control form-control-alternative"
                    placeholder="Ingrese la condición del equipo al momento del préstamo" value="{{ old('condition_loan', $registrations->condition_loan) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="vendor_id">
                    <i class="fas fa-graduation-cap"></i> Proveedor </label>

                <select name="vendor_id" id="vendor_id" class="form-control form-control-alternative">
                    <option disabled>Seleccione al Proveedor</option>
                    @foreach ($vendors as $vendor)
                        <option value="{{ $vendor->id }}" @selected(old('vendor_id', $vendor->vendor_id) == $vendor->id)>
                            {{ $vendor->name }}
                        </option>
                    @endforeach
                </select>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="loan_id">
                    <i class="fas fa-graduation-cap"></i> Préstamos </label>
                <select name="loan_id" id="loan_id" class="form-control form-control-alternative">
                    <option disabled>Seleccione el préstamo</option>
                    @foreach ($loans as $loan)
                    <option value="{{ $loan->id }}" @selected(old('loan_id', $loan->loan_id) == $loan->id)>
                        {{ $loan->username }}
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
                    <option disabled> Seleccione equipo tecnológico </option>
                    @foreach ($technological_equipments as $technological_equipment)
                        <option value="{{ $technological_equipment->id }}" @selected(old('technological_equipment_id', $technological_equipment->technological_equipment_id) == $technological_equipment->id)>
                        {{ $technological_equipment->equipment_name }}
                        </option>
                    @endforeach
                </select>
             </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="type_equipment_id">
                    <i class="fas fa-graduation-cap"></i> Tipo de Equipo Tecnológico </label>
                <select name="type_equipment_id" id="type_equipment_id" class="form-control form-control-alternative">
                    <option disabled> Seleccione el tipo de equipo tecnológico </option>
                    @foreach ($type_equipments as $type_equipment)
                        <option value="{{ $type_equipment->id }}" @selected(old('type_equipment_id', $type_equipment->type_equipment_id) == $type_equipment->id)>
                        {{ $type_equipment->equipment_name }}
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
            <i class="fas fa-save"></i> Guardar Registro
        </button>
    </div>
</div>
