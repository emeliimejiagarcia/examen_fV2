<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="username"> Nombre de usuario</label>
                <input type="text" id="username" name="username" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre de usuario" value="{{ old('username', $loan_historys->username) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="equipment_name"> Nombre del equipo</label>
                <input type="text" id="equipment_name" name="equipment_name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del equipo" value="{{ old('equipment_name', $loan_historys->equipment_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="type_equipment"> Tipo de equipo tecnológico </label>
                <select name="type_equipment" id="type_equipment" class="form-control">
                    <option value=""disabled> Seleccione el tipo de equipo tecnológico </option>
                    <option value="Laptop" {{ old('type_equipment', $loan_historys->type_equipment ?? '') == 'Laptop' ? 'selected' : '' }}>
                        Laptop</option>
                    <option value="Computadora de escritorio", {{ old('type_equipment', $loan_historys->type_equipment ?? '') == 'Computadora de escritorio' ? 'selected' : '' }}>
                        Computadora de escritorio</option>
                    <option value="Tablet", {{ old('type_equipment', $loan_historys->type_equipment ?? '') == 'Tablet' ? 'selected' : '' }}>
                        Tablet</option>
                    <option value="Monitor", {{ old('type_equipment', $loan_historys->type_equipment ?? '') == 'Monitor' ? 'selected' : '' }}>
                        Monitor</option>
                    <option value="Teclado/Mouse", {{ old('type_equipment', $loan_historys->type_equipment ?? '') == 'Teclado/Mouse' ? 'selected' : '' }}>
                       Teclado/Mouse</option>
                    <option value="Proyector", {{ old('type_equipment', $loan_historys->type_equipment ?? '') == 'Proyector' ? 'selected' : '' }}>
                       Proyector</option>
                    <option value="Disco duro externo", {{ old('type_equipment', $loan_historys->type_equipment ?? '') == 'Disco duro externo' ? 'selected' : '' }}>
                       Disco duro externo</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="loan_date"> Fecha del préstamo</label>
                <input type="date" id="loan_date" name="loan_date" class="form-control form-control-alternative"
                    placeholder="Ingresar fecha del préstamo" value="{{ old('loan_date', $loan_historys->loan_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="input_status"> Estado de entrada </label>
                <select name="input_status" id="input_status" class="form-control">
                    <option value=""disabled> Seleccione el estado de entrada</option>
                    <option value="Devuelto en buen estado" {{ old('input_status', $loan_historys->input_status ?? '') == 'Devuelto en buen estado' ? 'selected' : '' }}>
                        Devuelto en buen estado</option>
                    <option value="Devuelto dañado", {{ old('input_status', $loan_historys->input_status ?? '') == 'Devuelto dañado' ? 'selected' : '' }}>
                        Devuelto dañado</option>
                    <option value="Equipo perdido", {{ old('input_status', $loan_historys->input_status ?? '') == 'Equipo perdido' ? 'selected' : '' }}>
                        Equipo perdido</option>
                    <option value="Reparado", {{ old('input_status', $loan_historys->input_status ?? '') == 'Reparado' ? 'selected' : '' }}>
                        Reparado</option>
                    <option value="Teclado/Mouse", {{ old('input_status', $loan_historys->input_status ?? '') == 'Teclado/Mouse' ? 'selected' : '' }}>
                       Teclado/Mouse</option>
                    <option value="No devuelto", {{ old('input_status', $loan_historys->input_status ?? '') == 'No devuelto' ? 'selected' : '' }}>
                       No devuelto</option>
                </select>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="exit_status"> Estado de salida </label>
                <select name="exit_status" id="exit_status" class="form-control">
                    <option value=""disabled> Seleccione el estado de salida</option>
                    <option value="Devuelto en buen estado" {{ old('exit_status', $loan_historys->exit_status ?? '') == 'Devuelto en buen estado' ? 'selected' : '' }}>
                        Devuelto en buen estado</option>
                    <option value="Devuelto dañado", {{ old('exit_status', $loan_historys->exit_status ?? '') == 'Devuelto dañado' ? 'selected' : '' }}>
                        Devuelto dañado</option>
                    <option value="Equipo perdido", {{ old('exit_status', $loan_historys->exit_status ?? '') == 'Equipo perdido' ? 'selected' : '' }}>
                        Equipo perdido</option>
                    <option value="Reparado", {{ old('exit_status', $loan_historys->exit_status ?? '') == 'Reparado' ? 'selected' : '' }}>
                        Reparado</option>
                    <option value="Teclado/Mouse", {{ old('exit_status', $loan_historys->exit_status ?? '') == 'Teclado/Mouse' ? 'selected' : '' }}>
                       Teclado/Mouse</option>
                    <option value="No devuelto", {{ old('exit_status', $loan_historys->exit_status ?? '') == 'No devuelto' ? 'selected' : '' }}>
                       No devuelto</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="condition"> Condición del equipo</label>
                <input type="text" id="condition" name="condition" class="form-control form-control-alternative"
                    placeholder="Ingrese la condición del préstamo" value="{{ old('condition', $loan_historys->condition) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="loan_code"> Código de préstamo</label>
                <input type="text" id="loan_code" name="loan_code" class="form-control form-control-alternative"
                placeholder="Ingrese código de prestamo" value="{{ old('loan_code', $loan_historys->loan_code) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description"> Descripción del préstamo</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                placeholder="Ingrese la descripción del préstamo" value="{{ old('description', $loans->description) }}">
            </div>
        </div>
    </div>


             <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="loans_id">
                        <i class="fas fa-graduation-cap"></i> Préstamo </label>
                        <select name="loans_id" id="loans_id" class="form-control form-control-alternative">
                            <option disabled>Seleccione préstamo</option>
                            @foreach ($loans as $loan)
                            <option value="{{ $loans->id }}" @selected(old('loans_id', $loans->loans_id) == $loans->id)>
                            {{ $loans->loan_date }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <hr class="my-4" />

        <h6 class="heading-small text-muted mb-4"> Guardar </h6>

        <div class="pl-lg-4">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Guardar historial del préstamo
                </button>
            </div>
        </div>
