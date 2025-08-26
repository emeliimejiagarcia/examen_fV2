<h6 class="heading-small text-muted mb-4"> Información de equipos tecnológicos </h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="mark"> Marca del Equipo</label>
                <input type="text" id="mark" name="mark" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre de asignatura"
                    value="{{ old('mark', $technological_equipments->mark) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="equipment_name"> Nombre del Equipo </label>
                <input type="text" id="equipment_name" name="equipment_name"
                    class="form-control form-control-alternative" placeholder="Ingresar nombre del equipo tecnológico"
                    value="{{ old('equipment_name', $technological_equipments->equipment_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="serial_number"> Número de serie del equipo tecnológico </label>
                <input type="text" id="serial_number" name="serial_number"
                    class="form-control form-control-alternative"
                    placeholder="Ingresar número de serie del equipo tecnológico"
                    value="{{ old('serial_number', $technological_equipments->serial_number) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="condition">Condición del equipo</label>
                <select name="condition" id="condition" class="form-control">
                    <option value=""disabled>Seleccione la condición del equipo</option>
                    <option value="Nuevo"
                        {{ old('condition', $technological_equipments->condition ?? '') == 'Nuevo' ? 'selected' : '' }}>
                        Nuevo</option>
                    <option value="En buen estado",
                        {{ old('condition', $technological_equipments->condition ?? '') == 'En buen estado' ? 'selected' : '' }}>
                        En buen estado</option>
                    <option value="Usado con detalles menores",
                        {{ old('condition', $technological_equipments->condition ?? '') == 'Usado con detalles menores' ? 'selected' : '' }}>
                        Usado con detalles menores</option>
                    <option value="Dañado",
                        {{ old('condition', $technological_equipments->condition ?? '') == 'Dañado' ? 'selected' : '' }}>
                        Dañado</option>
                    <option value="En reparación",
                        {{ old('condition', $technological_equipments->condition ?? '') == 'En reparación' ? 'selected' : '' }}>
                        En reparación</option>
                    <option value="No funcional",
                        {{ old('condition', $technological_equipments->condition ?? '') == 'No funcional' ? 'selected' : '' }}>
                        No funcional
                    </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="location">Ubicación del equipo</label>
                <select name="location" id="location" class="form-control">
                    <option value=""disabled>Seleccione la ubicación del equipo</option>
                    <option value="Laboratorio de Informática"
                        {{ old('location', $technological_equipments->location ?? '') == 'Laboratorio de Informática' ? 'selected' : '' }}>
                        Laboratorio de Informática</option>
                    <option value="Laboratorio de Electrónica",
                        {{ old('location', $technological_equipments->location ?? '') == 'Laboratorio de Electrónica' ? 'selected' : '' }}>
                        Laboratorio de Electrónica</option>
                    <option value="Oficina Técnica",
                        {{ old('location', $technological_equipments->location ?? '') == 'Oficina Técnica' ? 'selected' : '' }}>
                        Oficina Técnica</option>
                    <option value="Bodega de Equipos",
                        {{ old('location', $technological_equipments->location ?? '') == 'Bodega de Equipos' ? 'selected' : '' }}>
                        Bodega de Equipos</option>
                    <option value="Área de Mantenimiento",
                        {{ old('location', $technological_equipments->location ?? '') == 'Área de Mantenimiento' ? 'selected' : '' }}>
                        Área de Mantenimiento</option>
                    <option value="Dirección Administrativa",
                        {{ old('location', $technological_equipments->location ?? '') == 'Dirección Administrativa' ? 'selected' : '' }}>
                        Dirección Administrativa
                    </option>
                    <option value="Sala de Conferencias",
                        {{ old('location', $technological_equipments->location ?? '') == 'Sala de Conferencias' ? 'selected' : '' }}>
                        Sala de Conferencias
                    </option>
                    <option value="Aula 101",
                        {{ old('location', $technological_equipments->location ?? '') == 'Aula 101' ? 'selected' : '' }}>
                        Aula 101
                    </option>

                    <option value="Aula 102",
                        {{ old('location', $technological_equipments->location ?? '') == 'Aula 102' ? 'selected' : '' }}>
                        Aula 102
                    </option>
                    <option value="Aula 103",
                        {{ old('location', $technological_equipments->location ?? '') == 'Aula 103' ? 'selected' : '' }}>
                        Aula 103
                    </option>

                    <option value="Otro",
                        {{ old('location', $technological_equipments->location ?? '') == 'Otro' ? 'selected' : '' }}>
                        Otro
                    </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="entry_date"> Fecha de Entrada </label>
                <input type="datetime-local" id="entry_date" name="entry_date" class="form-control form-control-alternative"
                    placeholder="Ingrese la fecha de entrada" value="{{ old('entry_date', $technological_equipments->entry_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="brand"> Identificación del dispositivo</label>
                <input type="text" id="brand" name="brand" class="form-control form-control-alternative"
                    placeholder="Ingrese identificación visible en el dispositivo "
                    value="{{ old('brand', $technological_equipments->brand) }}">
            </div>
        </div>
    </div>

<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="acquisition_date"> Fecha de adquisición</label>
                <input type="date" id="acquisition_date" name="acquisition_date" class="form-control form-control-alternative"
                    placeholder="Ingrese la fecha de adquisición" value="{{ old('acquisition_date', $technological_equipments->acquisition_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="availability">Disponibilidad del equipo tecnológico</label>
                <input type="number" id="availability" name="availability" class="form-control form-control-alternative"
                    placeholder="Cantidad de equipos disponibles para uso" value="{{ old('availability', $technological_equipments->availability) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="inventory_code">Código de inventario asignado al equipo</label>
                <input type="text" id="inventory_code" name="inventory_code" class="form-control form-control-alternative"
                    placeholder="Ingrese el código de inventario del equipo" value="{{ old('inventory_code', $technological_equipments->inventory_code) }}">
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
                        {{ old('technology_category', $technological_equipments->technology_category ?? '') == 'Computadoras portátiles' ? 'selected' : '' }}>
                        Computadoras portátiles</option>
                    <option value="Computadoras de escritorio",
                        {{ old('technology_category', $technological_equipments->technology_category ?? '') == 'Computadoras de escritorio' ? 'selected' : '' }}>
                        Computadoras de escritorio</option>
                    <option value="Tabletas",
                        {{ old('technology_category', $technological_equipments->technology_category ?? '') == 'Tabletas' ? 'selected' : '' }}>
                        Tabletas</option>
                    <option value="Impresoras",
                        {{ old('technology_category', $technological_equipments->technology_category ?? '') == 'Impresoras' ? 'selected' : '' }}>
                        Impresoras</option>
                    <option value="Monitores",
                        {{ old('technology_category', $technological_equipments->technology_category ?? '') == 'Monitores' ? 'selected' : '' }}>
                        Monitores</option>
                    <option value="Teclados y ratones",
                        {{ old('technology_category', $technological_equipments->technology_category ?? '') == 'Teclados y ratones' ? 'selected' : '' }}>
                        Teclados y ratones
                    </option>
                    <option value="Proyectores",
                        {{ old('technology_category', $technological_equipments->technology_category ?? '') == 'Proyectores' ? 'selected' : '' }}>
                        Proyectores
                    </option>
                    <option value="Discos duros externos",
                        {{ old('technology_category', $technological_equipments->technology_category ?? '') == 'Discos duros externos' ? 'selected' : '' }}>
                       Discos duros externos
                    </option>

                    <option value="Cámaras web",
                        {{ old('technology_category', $technological_equipments->technology_category ?? '') == 'Cámaras web' ? 'selected' : '' }}>
                       Cámaras web
                    </option>
                    <option value="Accesorios tecnológicos",
                        {{ old('technology_category', $technological_equipments->technology_category ?? '') == 'Accesorios tecnológicos' ? 'selected' : '' }}>
                        Accesorios tecnológicos
                    </option>
                    <option value="Otro",
                        {{ old('technology_category', $technological_equipments->technology_category ?? '') == 'Otro' ? 'selected' : '' }}>
                        Otro
                    </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="vendor_id">
                    <i class="fas fa-graduation-cap"></i> Proveedor </label>

                <select name="vendor_id" id="vendor_id" class="form-control form-control-alternative">
                    <option disabled> Seleccione al proveedor</option>
                    @foreach ($vendors as $vendor)
                        <option value="{{ $vendor->id }}" @selected(old('vendor_id', $vendor->vendor_id) == $vendor->id)>
                            {{ $vendor->name }}
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
            <i class="fas fa-save"></i> Guardar equipo tecnológico
        </button>
    </div>
</div>
