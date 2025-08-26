<h6 class="heading-small text-muted mb-4">Información del Responsable</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name"> Nombre completo </label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del responsable" value="{{ old('name', $responsibles->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="age"> Edad </label>
                <input type="number" id="age" name="age" class="form-control form-control-alternative"
                placeholder="Ingresar edad" value="{{ old('age', $responsibles->age) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="mail"> Correo electrónico </label>
                <input type="mail" id="mail" name="mail" class="form-control form-control-alternative"
                placeholder="Ingrese su correo electrónico" value="{{ old('mail', $responsibles->mail) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identity_card"> Número de cédula </label>
                <input type="text" id="identity_card" name="identity_card"
                    class="form-control form-control-alternative" placeholder="Ingresar número de cédula"
                    value="{{ old('identity_card', $responsibles->identity_card) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="phone_number">Número Telefónico</label>
                <input type="text" id="phone_number" name="phone_number"
                    class="form-control form-control-alternative" placeholder="Ingresar su número telefónico"
                    value="{{ old('phone_number', $responsibles->phone_number) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="departament">Departamento</label>
                <select name="departament" id="departament" class="form-control">
                    <option value=""disabled>Seleccione su departamento de procedencia</option>
                    <option value="Boaco "
                        {{ old('departament', $responsibles->departament ?? '') == 'Boaco ' ? 'selected' : '' }}>Boaco
                    </option>
                    <option value="Carazo "
                        {{ old('departament', $responsibles->departament ?? '') == 'Carazo ' ? 'selected' : '' }}>Carazo
                    </option>
                    <option value="Chinandega"
                        {{ old('departament', $responsibles->departament ?? '') == 'Chinandega' ? 'selected' : '' }}>
                        Chinandega</option>
                    <option value="Chontales"
                        {{ old('departament', $responsibles->departament ?? '') == 'Chontales' ? 'selected' : '' }}>Chontales
                    </option>
                    <option value="Estelí"
                        {{ old('departament', $responsibles->departament ?? '') == 'Estelí' ? 'selected' : '' }}>Estelí
                    </option>
                    <option value="Granada"
                        {{ old('departament', $responsibles->departament ?? '') == 'Granada' ? 'selected' : '' }}>Granada
                    </option>
                    <option value="Jinotega"
                        {{ old('departament', $responsibles->departament ?? '') == 'Jinotega' ? 'selected' : '' }}>Jinotega
                    </option>
                    <option value="León"
                        {{ old('departament', $responsibles->departament ?? '') == 'León' ? 'selected' : '' }}>León</option>
                    <option value="Managua"
                        {{ old('departament', $responsibles->departament ?? '') == 'Managua' ? 'selected' : '' }}>Managua
                    </option>
                    <option value="Madriz"
                        {{ old('departament', $responsibles->departament ?? '') == 'Madriz' ? 'selected' : '' }}>Madriz
                    </option>
                    <option value="Masaya"
                        {{ old('departament', $responsibles->departament ?? '') == 'Masaya' ? 'selected' : '' }}>Masaya
                    </option>
                    <option value="Matagalpa"
                        {{ old('departament', $responsibles->departament ?? '') == 'Matagalpa' ? 'selected' : '' }}>Matagalpa
                    </option>
                    <option value="Nueva Segovia"
                        {{ old('departament', $responsibles->departament ?? '') == 'Nueva Segovia' ? 'selected' : '' }}>Nueva
                        Segovia</option>
                    <option value="Río San Juan"
                        {{ old('departament', $responsibles->departament ?? '') == 'Río San Juan' ? 'selected' : '' }}>Río San
                        Juan</option>
                    <option value="Rivas"
                        {{ old('departament', $responsibles->departament ?? '') == 'Rivas' ? 'selected' : '' }}>Rivas</option>
                </select>
            </div>
        </div>
    </div>


   <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="gender"> Género </label>
                <select name="gender" id="gender" class="form-control">
                    <option value=""disabled>Seleccione su género</option>
                    <option value="Masculino"
                        {{ old('gender', $responsibles->gender ?? '') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino"
                        {{ old('gender', $responsibles->gender ?? '') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="nationality">Nacionalidad</label>
                <select name="nationality" id="nationality" class="form-control">
                    <option value=""disabled>Seleccione su Nacionalidad</option>
                    <option value="Belice"
                        {{ old('nationality', $responsibles->nationality ?? '') == 'Boaco ' ? 'selected' : '' }}>Belice
                    </option>
                    <option value="Honduras"
                        {{ old('nationality', $responsibles->nationality ?? '') == 'Carazo ' ? 'selected' : '' }}>Honduras
                    </option>
                    <option value="El Salvador"
                        {{ old('nationality', $responsibles->nationality ?? '') == 'Chinandega' ? 'selected' : '' }}>El
                        Salvador</option>
                    <option value="Costa Rica"
                        {{ old('nationality', $responsibles->nationality ?? '') == 'Chontales' ? 'selected' : '' }}>Costa
                        Rica</option>
                    <option value="Guatemala"
                        {{ old('nationality', $responsibles->nationality ?? '') == 'Estelí' ? 'selected' : '' }}>Guatemala
                    </option>
                    <option value="Nicaragua"
                        {{ old('nationality', $responsibles->nationality ?? '') == 'Granada' ? 'selected' : '' }}>Nicaragua
                    </option>
                    <option value="Panamá"
                        {{ old('nationality', $responsibles->nationality ?? '') == 'Jinotega' ? 'selected' : '' }}>Panamá
                    </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address"> Dirección </label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                    placeholder="Ingresa su dirección" value="{{ old('address', $responsibles->address) }}">
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="academic_role">Rol académico</label>
                <select name="academic_role" id="academic_role" class="form-control">
                    <option value=""disabled>Seleccione su rol académico</option>
                    <option value="Estudiante"
                        {{ old('academic_role', $responsibles->academic_role ?? '') == 'Estudiante' ? 'selected' : '' }}>
                        Estudiante </option>
                    <option value="Profesor "
                        {{ old('academic_role', $responsibles->academic_role ?? '') == 'Profesor' ? 'selected' : '' }}>
                        Profesor</option>
                    <option value="Coordinador Académico"
                        {{ old('academic_role', $responsibles->academic_role ?? '') == 'Coordinador Académico' ? 'selected' : '' }}>
                        Coordinador Académico</option>
                    <option value="Administrador Académico"
                        {{ old('academic_role', $responsibles->academic_role ?? '') == 'Administrador Académico' ? 'selected' : '' }}>
                        Administrador Académico</option>
                    <option value="Director de Programa"
                        {{ old('academic_role', $responsibles->academic_role ?? '') == 'Director de Programa' ? 'selected' : '' }}>
                        Director de Programa</option>
                    <option value="Decano"
                        {{ old('academic_role', $responsibles->academic_role ?? '') == 'Decano' ? 'selected' : '' }}>
                        Decano</option>
                    <option value="Secretario Académico"
                        {{ old('academic_role', $responsibles->academic_role ?? '') == 'Secretario Académico' ? 'selected' : '' }}>
                        Secretario Académico</option>
                    <option value="Otro"
                        {{ old('academic_role', $responsibles->academic_role ?? '') == 'Otro' ? 'selected' : '' }}>Otro
                    </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="registration_date">Fecha de registro</label>
                <input type="date" id="registration_date" name="registration_date"
                class="form-control form-control-alternative" placeholder="Ingresar fecha de registro"
                value="{{ old('registration_date', $responsibles->registration_date) }}">
            </div>
        </div>
    </div>

</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Responsable
        </button>
    </div>
</div>
