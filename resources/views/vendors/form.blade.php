<h6 class="heading-small text-muted mb-4">Información del Proveedor</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name"> Nombre completo </label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del proveedor" value="{{ old('name', $vendors->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="point_contact"> Persona de contacto principal </label>
                <input type="text" id="point_contact" name="point_contact" class="form-control form-control-alternative"
                placeholder="Nombre completo del punto de contacto " value="{{ old('point_contact', $vendors->point_contact) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="mail"> Correo electrónico </label>
                <input type="mail" id="mail" name="mail" class="form-control form-control-alternative"
                placeholder="Ingrese su correo electrónico" value="{{ old('mail', $vendors->mail) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="delivered_products"> Cantidad entregada </label>
                <input type="number" id="delivered_products" name="delivered_products"
                    class="form-control form-control-alternative" placeholder="Ingrese cantidad entregada de productos"
                    value="{{ old('delivered_products', $vendors->delivered_products) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="warranty">Garantía del producto</label>
                <input type="text" id="warranty" name="warranty"
                    class="form-control form-control-alternative" placeholder="Especifique la duración, condiciones y cobertura de la garantía."
                    value="{{ old('warranty', $vendors->warranty) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address"> Dirección </label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                placeholder="Ingresa su dirección" value="{{ old('address', $vendors->address) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="department">Departamento</label>
                <select name="department" id="department" class="form-control">
                    <option value=""disabled>Seleccione su departamento de procedencia</option>
                    <option value="Boaco "
                        {{ old('department', $vendors->department ?? '') == 'Boaco ' ? 'selected' : '' }}>Boaco
                    </option>
                    <option value="Carazo "
                        {{ old('department', $vendors->department ?? '') == 'Carazo ' ? 'selected' : '' }}>Carazo
                    </option>
                    <option value="Chinandega"
                        {{ old('department', $vendors->department ?? '') == 'Chinandega' ? 'selected' : '' }}>
                        Chinandega</option>
                    <option value="Chontales"
                        {{ old('department', $vendors->department ?? '') == 'Chontales' ? 'selected' : '' }}>Chontales
                    </option>
                    <option value="Estelí"
                        {{ old('department', $vendors->department ?? '') == 'Estelí' ? 'selected' : '' }}>Estelí
                    </option>
                    <option value="Granada"
                        {{ old('department', $vendors->department ?? '') == 'Granada' ? 'selected' : '' }}>Granada
                    </option>
                    <option value="Jinotega"
                        {{ old('department', $vendors->department ?? '') == 'Jinotega' ? 'selected' : '' }}>Jinotega
                    </option>
                    <option value="León"
                        {{ old('department', $vendors->department ?? '') == 'León' ? 'selected' : '' }}>León</option>
                    <option value="Managua"
                        {{ old('department', $vendors->department ?? '') == 'Managua' ? 'selected' : '' }}>Managua
                    </option>
                    <option value="Madriz"
                        {{ old('department', $vendors->department ?? '') == 'Madriz' ? 'selected' : '' }}>Madriz
                    </option>
                    <option value="Masaya"
                        {{ old('department', $vendors->department ?? '') == 'Masaya' ? 'selected' : '' }}>Masaya
                    </option>
                    <option value="Matagalpa"
                        {{ old('department', $vendors->department ?? '') == 'Matagalpa' ? 'selected' : '' }}>Matagalpa
                    </option>
                    <option value="Nueva Segovia"
                        {{ old('department', $vendors->department ?? '') == 'Nueva Segovia' ? 'selected' : '' }}>Nueva
                        Segovia</option>
                    <option value="Río San Juan"
                        {{ old('department', $vendors->department ?? '') == 'Río San Juan' ? 'selected' : '' }}>Río San
                        Juan</option>
                    <option value="Rivas"
                        {{ old('department', $vendors->department ?? '') == 'Rivas' ? 'selected' : '' }}>Rivas</option>
                </select>
            </div>
        </div>
    </div>


   <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="age"> Edad </label>
                <input type="number" id="age" name="age"
                class="form-control form-control-alternative" placeholder="Ingresar edad"
                value="{{ old('age', $vendors->age) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identity_card"> Cédula </label>
                <input type="text" id="identity_card" name="identity_card"
                class="form-control form-control-alternative" placeholder="Ingresar número de cédula"
                value="{{ old('identity_card', $vendors->identity_card) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="authorization_provide"> Autorización de Proveedor </label>
                <input type="text" id="authorization_provide" name="authorization_provide" class="form-control form-control-alternative"
                    placeholder="Ingrese el nombre del proveedor, fecha de autorización y condiciones." value="{{ old('authorization_provide', $vendors->authorization_provide) }}">
            </div>
        </div>
    </div>



</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Proveedor
        </button>
    </div>
</div>

