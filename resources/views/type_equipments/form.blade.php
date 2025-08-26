<h6 class="heading-small text-muted mb-4"> Información del Tipo de equipo </h6>
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
                <label class="form-control-label" for="description"> Descripción del equipo </label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                    placeholder="ingrese la descripción del equipo" value="{{ old('description', $type_equipments->description) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="category"> Categoría del equipo </label>
                <input type="text" id="category" name="category" class="form-control form-control-alternative"
                    placeholder="ingrese la categoría del equipo" value="{{ old('category', $type_equipments->category) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="loan_time"> Fecha de préstamo </label>
                <input type="date" id="loan_time" name="loan_time" class="form-control form-control-alternative"
                    placeholder="ingrese la fecha del préstamo" value="{{ old('loan_time', $type_equipments->loan_time) }}">
            </div>
        </div>
    </div>

<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="worth"> Valor del equipo </label>
                <input type="decimal" id="worth" name="worth" class="form-control form-control-alternative"
                    placeholder="ingrese el valor del equipo" value="{{ old('worth', $type_equipments->worth) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="power_consumption"> Consumo de energía </label>
                <input type="decimal" id="power_consumption" name="power_consumption" class="form-control form-control-alternative"
                    placeholder="ingrese el consumo de energía" value="{{ old('power_consumption', $type_equipments->power_consumption) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="technology_category">Categoría</label>
                <select name="technology_category" id="technology_category" class="form-control">
                    <option value=""disabled>Seleccione la categoría del equipo</option>
                    <option value="Computadoras portátiles"
                        {{ old('technology_category', $type_equipments->technology_category ?? '') == 'Computadoras portátiles' ? 'selected' : '' }}>
                        Computadoras portátiles</option>
                    <option value="Computadoras de escritorio",
                        {{ old('technology_category', $type_equipments->technology_category ?? '') == 'Computadoras de escritorio' ? 'selected' : '' }}>
                        Computadoras de escritorio</option>
                    <option value="Tabletas",
                        {{ old('technology_category', $type_equipments->technology_category ?? '') == 'Tabletas' ? 'selected' : '' }}>
                        Tabletas</option>
                    <option value="Impresoras",
                        {{ old('technology_category', $type_equipments->technology_category ?? '') == 'Impresoras' ? 'selected' : '' }}>
                        Impresoras</option>
                    <option value="Monitores",
                        {{ old('technology_category', $type_equipments->technology_category ?? '') == 'Monitores' ? 'selected' : '' }}>
                        Monitores</option>
                    <option value="Teclados y ratones",
                        {{ old('technology_category', $type_equipments->technology_category ?? '') == 'Teclados y ratones' ? 'selected' : '' }}>
                        Teclados y ratones
                    </option>
                    <option value="Proyectores",
                        {{ old('technology_category', $type_equipments->technology_category ?? '') == 'Proyectores' ? 'selected' : '' }}>
                        Proyectores
                    </option>
                    <option value="Discos duros externos",
                        {{ old('technology_category', $type_equipments->technology_category ?? '') == 'Discos duros externos' ? 'selected' : '' }}>
                       Discos duros externos
                    </option>

                    <option value="Cámaras web",
                        {{ old('technology_category', $type_equipments->technology_category ?? '') == 'Cámaras web' ? 'selected' : '' }}>
                       Cámaras web
                    </option>
                    <option value="Accesorios tecnológicos",
                        {{ old('technology_category', $type_equipments->technology_category ?? '') == 'Accesorios tecnológicos' ? 'selected' : '' }}>
                        Accesorios tecnológicos
                    </option>
                    <option value="Otro",
                        {{ old('technology_category', $type_equipments->technology_category ?? '') == 'Otro' ? 'selected' : '' }}>
                        Otro
                    </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="code"> Código único del equipo </label>
                <input type="decimal" id="code" name="code" class="form-control form-control-alternative"
                    placeholder="ingrese el código del equipo" value="{{ old('code', $type_equipments->code) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="type_status"> Estado del tipo de equipo</label>
                <select name="type_status" id="type_status" class="form-control">
                    <option value=""disabled>Seleccione el  estado del equipo</option>
                    <option value="Activo" {{ old('type_status', $type_equipments->type_status ?? '') == 'Activo' ? 'selected' : '' }}>
                        Activo</option>
                    <option value="Inactivo", {{ old('type_status', $type_equipments->type_status ?? '') == 'Inactivo' ? 'selected' : '' }}>
                        Inactivo</option>
                    <option value="En reparación", {{ old('type_status', $type_equipments->type_status ?? '') == 'En reparación' ? 'selected' : '' }}>
                        En reparación</option>
                    <option value="En mantenimiento", {{ old('type_status', $type_equipments->type_status ?? '') == 'En mantenimiento' ? 'selected' : '' }}>
                        En mantenimiento</option>
                    <option value="Obsoleto", {{ old('type_status', $type_equipments->type_status ?? '') == 'Obsoleto' ? 'selected' : '' }}>
                        Obsoleto</option>
                    <option value="Descontinuado", {{ old('type_status', $type_equipments->type_status ?? '') == 'Descontinuado' ? 'selected' : '' }}>
                        Descontinuado</option>
                    <option value="En uso", {{ old('type_status', $type_equipments->type_status ?? '') == 'En uso' ? 'selected' : '' }}>
                        En uso</option>
                    <option value="En préstamo", {{ old('type_status', $type_equipments->type_status ?? '') == 'En préstamo' ? 'selected' : '' }}>
                        En préstamo</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="creation_date"> Fecha de creación del registro </label>
                <input type="date" id="creation_date" name="creation_date" class="form-control form-control-alternative"
                    placeholder="ingrese la fecha de creación del registro" value="{{ old('creation_date', $type_equipments->creation_date) }}">
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="technological_equipment_id">
                    <i class="fas fa-graduation-cap"></i> Equipo Tecnológico </label>

                <select name="technological_equipment_id" id="technological_equipment_id" class="form-control form-control-alternative">
                    <option disabled>Seleccione el equipo tecnológico</option>
                    @foreach ($technological_equipments as $technological_equipment)
                        <option value="{{ $technological_equipment->id }}" @selected(old('technological_equipment_id', $technological_equipment->technological_equipment_id) == $technological_equipment->id)>
                            {{ $technological_equipment->name }}
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

