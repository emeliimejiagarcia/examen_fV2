<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="departure_date"> Fecha de salida</label>
                <input type="date" id="departure_date" name="departure_date" class="form-control form-control-alternative"
                    placeholder="Ingresar fecha de salida" value="{{ old('departure_date', $loans->departure_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="expected_date"> Fecha acordada</label>
                <input type="date" id="expected_date" name="expected_date" class="form-control form-control-alternative"
                    placeholder="Ingresar fecha acordada" value="{{ old('expected_date', $loans->expected_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="delivery_date"> Fecha de entrega</label>
                <input type="date" id="delivery_date" name="delivery_date" class="form-control form-control-alternative"
                    placeholder="Ingresar fecha de entrega" value="{{ old('delivery_date', $loans->delivery_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="delivery_observation"> Observación de la entrega </label>
                <input type="text" id="delivery_observation" name="delivery_observation" class="form-control form-control-alternative"
                    placeholder="Ingresar una breve observación de la entrega" value="{{ old('delivery_observation', $loans->delivery_observation) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="return_observation"> Observación de devolución </label>
                <input type="text" id="return_observation" name="return_observation" class="form-control form-control-alternative"
                    placeholder="Ingresar una breve observación de devolución" value="{{ old('return_observation', $loans->return_observation) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="loan_date"> Fecha del préstamo</label>
                <input type="date" id="loan_date" name="loan_date" class="form-control form-control-alternative"
                    placeholder="Ingresar fecha del préstamo" value="{{ old('loan_date', $loans->loan_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="loan_duration"> Duración del préstamo</label>
                <input type="text" id="loan_duration" name="loan_duration" class="form-control form-control-alternative"
                    placeholder="Ingresar duración del préstamo" value="{{ old('loan_duration', $loans->loan_duration) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="username"> Nombre del usuario</label>
                <input type="text" id="username" name="username" class="form-control form-control-alternative"
                    placeholder="Ingrese el nombre del usuario" value="{{ old('username', $loans->username) }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="user_type">Tipo de Usuarios</label>
                <select name="user_type" id="user_type" class="form-control">
                    <option value=""disabled>Seleccione el tipo de usuario</option>
                    <option value="Docentes" {{ old('user_type', $loans->user_type ?? '') == 'Docentes' ? 'selected' : '' }}>
                        Docentes</option>
                    <option value="Estudiantes", {{ old('user_type', $loans->user_type ?? '') == 'Estudiantes' ? 'selected' : '' }}>
                        Estudiantes</option>
                    <option value="Administrativos", {{ old('user_type', $loans->user_type ?? '') == 'Administrativos' ? 'selected' : '' }}>
                        Administrativos</option>
                    <option value="Técnicos o personal de soporte", {{ old('user_type', $loans->user_type ?? '') == 'Técnicos o personal de soporte' ? 'selected' : '' }}>
                        Técnicos o personal de soporte</option>
                    <option value="Visitantes autorizados", {{ old('user_type', $loans->user_type ?? '') == 'Visitantes autorizados' ? 'selected' : '' }}>
                        Visitantes autorizados</option>
                </select>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="area"> Área </label>
                    <select name="area" id="area" class="form-control">
                        <option value=""disabled>Seleccione la área</option>
                        <option value="Área Académica"
                            {{ old('area', $loans->area ?? '') == 'Área Académica' ? 'selected' : '' }}>
                            Área Académica
                        </option>
                        <option value="Área Administrativa",
                            {{ old('area', $loans->area ?? '') == 'Área Administrativa' ? 'selected' : '' }}>Área Administrativa
                        </option>
                        <option value="Área de Tecnología",
                            {{ old('area', $loans->area ?? '') == 'Área de Tecnología' ? 'selected' : '' }}>Área de Tecnología
                        </option>
                        <option value="Soporte Técnico",
                            {{ old('area', $loans->area ?? '') == 'Soporte Técnico' ? 'selected' : '' }}>Soporte Técnico
                        </option>
                        <option value="Área de Servicios Generales",
                            {{ old('area', $loans->area ?? '') == 'Área de Servicios Generales' ? 'selected' : '' }}>Área de Servicios Generales
                        </option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="academic_role"> Rol Académico </label>
                    <select name="academic_role" id="academic_role" class="form-control">
                        <option value=""disabled>Seleccione el rol académico</option>
                        <option value="Director Académico"
                            {{ old('academic_role', $loans->academic_role ?? '') == 'Director Académico' ? 'selected' : '' }}>
                            Director Académico
                        </option>
                        <option value="Docente Técnico",
                            {{ old('academic_role', $loans->academic_role ?? '') == 'Docente Técnico' ? 'selected' : '' }}>Docente Técnico
                        </option>
                        <option value="Director General",
                            {{ old('academic_role', $loans->academic_role ?? '') == 'Director General' ? 'selected' : '' }}>Director General
                        </option>
                        <option value="Subdirector Administrativo",
                            {{ old('academic_role', $loans->academic_role ?? '') == 'Subdirector Administrativo' ? 'selected' : '' }}>Subdirector Administrativo
                        </option>
                        <option value="Responsable Financiero",
                            {{ old('academic_role', $loans->academic_role ?? '') == 'Responsable Financiero' ? 'selected' : '' }}>Responsable Financiero
                        </option>
                        <option value="Encargado de Mantenimiento y Servicios Generales",
                            {{ old('academic_role', $loans->academic_role ?? '') == 'Encargado de Mantenimiento y Servicios Generales' ? 'selected' : '' }}>Encargado de Mantenimiento y Servicios Generales
                        </option>
                        <option value="Asistente Administrativo",
                            {{ old('academic_role', $loans->academic_role ?? '') == 'Asistente Administrativo' ? 'selected' : '' }}>Asistente Administrativo
                        </option>
                    </select>
                </div>
            </div>
        </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="contact_phone"> Número de contacto</label>
                <input type="text" id="contact_phone" name="contact_phone" class="form-control form-control-alternative"
                placeholder="Ingrese el número de contacto" value="{{ old('contact_phone', $loans->contact_phone) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="user_address"> Dirección del usuario</label>
                <input type="text" id="user_address" name="user_address" class="form-control form-control-alternative"
                placeholder="Ingrese la dirección de usuario" value="{{ old('user_address', $loans->user_address) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="equipment_name"> Nombre del Equipo</label>
                <input type="text" id="equipment_name" name="equipment_name" class="form-control form-control-alternative"
                placeholder="Ingrese el nombre del equipo" value="{{ old('equipment_name', $loans->equipment_name) }}">
            </div>
        </div>
    </div>

     <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="equipment_type"> Tipos de Equipos Tecnológicos </label>
                    <select name="equipment_type" id="equipment_type" class="form-control">
                        <option value=""disabled>Seleccione el tipo de equipo tecnológico</option>
                        <option value="Laptops"
                            {{ old('equipment_type', $loans->equipment_type ?? '') == 'Laptops' ? 'selected' : '' }}>Laptops
                        </option>
                        <option value="Computadoras de escritorio",
                            {{ old('equipment_type', $loans->equipment_type ?? '') == 'Computadoras de escritorio' ? 'selected' : '' }}>Computadoras de escritorio
                        </option>
                        <option value="Monitores",
                            {{ old('equipment_type', $loans->equipment_type ?? '') == 'Monitores' ? 'selected' : '' }}>Monitores
                        </option>
                        <option value="Teclados y mouse",
                            {{ old('equipment_type', $loans->equipment_type ?? '') == 'Teclados y mouse' ? 'selected' : '' }}>Teclados y mouse
                        </option>
                        <option value="Cargadores",
                            {{ old('equipment_type', $loans->equipment_type ?? '') == 'Cargadores' ? 'selected' : '' }}>Cargadores
                        </option>
                    </select>
                </div>
            </div>
        </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="brand"> Identificación del dispositivo</label>
                <input type="text" id="brand" name="brand" class="form-control form-control-alternative"
                placeholder="Ingrese identificación visible en el dispositivo "
                value="{{ old('brand', $loans->brand) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="model"> Modelo específico del equipo</label>
                <input type="text" id="model" name="model" class="form-control form-control-alternative"
                placeholder="Ingrese el modelo específico del equipo"
                value="{{ old('model', $loans->model) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="condition_loan"> Condición de préstamo</label>
                <input type="text" id="condition_loan" name="condition_loan" class="form-control form-control-alternative"
                placeholder="Ingrese una breve descripción de la condición del préstamo"
                value="{{ old('condition_loan', $loans->condition_loan) }}">
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
                            <option disabled> Seleccione el equipo tecnológico</option>
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

        <h6 class="heading-small text-muted mb-4"> Guardar </h6>

        <div class="pl-lg-4">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Guardar Préstamo
                </button>
            </div>
        </div>
