<form class="shadow p-3 mb-5 bg-white rounded p-5">
        <div class="form-row">
            <div class="form-group col-md-12 mt-3">
                <h6>I. DATOS DEL SOLICITANTE</h6>
            </div>
            <div class="form-group col-md-6">
                <label for="tipo">TIPO DE DOCUMENTO</label>
                <select class="form-control" id="type" name="type">
                    <option value="">DNI</option>
                    <option value="">CE</option>
                    <option value="">PASAPORTE</option>
                    <option value="">CA</option>
                    <option value="">RUC</option>
                    <option value="">PTP</option>
                    <option value="">CR</option>
                    <option value="">CI</option>
                    <option value="">OTROS</option>
                </select>
            </div>
            <div class="form-group col-md-6">
            <label for="number">NUMERO DE DOCUMENTO</label>
            <input type="text" class="form-control" id="number" name="number">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="region">DEPARTAMENTO</label>
                <select name="region" id="region" class="form-control">
                    <option value="9999" selected>SELECCIONE</option>
                    <option value="1">Amazonas</option>
                    <option value="2">Ancash</option>
                    <option value="3">Apurimac</option>
                    <option value="4">Arequipa</option>
                    <option value="5">Ayacucho</option>
                    <option value="6">Cajamarca</option>
                    <option value="7">Callao</option>
                    <option value="8">Cusco</option>
                    <option value="9">Huancavelica</option>
                    <option value="10">Huanuco</option>
                    <option value="11">Ica</option>
                    <option value="12">Junin</option>
                    <option value="13">La Libertad</option>
                    <option value="14">Lambayeque</option>
                    <option value="15">Lima</option>
                    <option value="16">Loreto</option>
                    <option value="17">Madre de Dios</option>
                    <option value="18">Moquegua</option>
                    <option value="19">Pasco</option>
                    <option value="20">Piura</option>
                    <option value="21">Puno</option>
                    <option value="22">San Martin</option>
                    <option value="23">Tacna</option>
                    <option value="24">Tumbes</option>
                    <option value="25">Ucayali</option>   
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="province">PROVINCIA</label>
                <select name="province" id="province" class="form-control">
                    <option value="9999" selected>SELECCIONE</option>
                </select>       
            </div>
            <div class="form-group col-md-4">
                <label for="district">DISTRITO</label>
                <select name="district" id="district" class="form-control">
                    <option value="9999" selected>SELECCIONE</option>
                </select>      
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="addresd">URBANIZACION</label>
                <input type="text" id="addresd" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="aveniu">AV/CALLE/JR/PSJ</label>
                <input type="text" id="aveniu" class="form-control">  
            </div>
            <div class="form-group col-md-4">
                <label for="dpta">N/DPTA/INT</label>
                <input type="text" id="dpta" class="form-control">   
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="email">CORREO</label>
                <input type="email" id="email" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="phone">TELEFONO FIJO</label>
                <input type="text" id="phone" class="form-control">  
            </div>
            <div class="form-group col-md-4">
                <label for="smartphone">CELULAR</label>
                <input type="text" id="smartphone" class="form-control">   
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12 mt-3">
                <h6>I. INFORMACION SOLICITADA</h6>
            </div>
            <div class="form-group col-md-12">
                <label for="description">DESCRIPCION</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="dependency">ENTIDAD DE LA CUAL SE REQUIERE INFORMACION</label>
                <select name="dependency" id="dependency" class="form-control">
                    <option value="0">SELECCIONE</option>
                </select>
            </div>
            <div class="form-group col-md-12">
                <label for="dependency">ENTREGA DE LA INFORMACION</label>
                <select name="dependency" id="dependency" class="form-control">
                    <option value="0">SELECCIONE</option>
                    <option value="1">CD</option>
                    <option value="2">CORREO ELECTRONICO</option>
                    <option value="3">COPIA SIMPLE</option>
                    <option value="4">OTRO</option>
                </select>
            </div>
            <div class="form-group col-md-12">
                <label for="description">OBSERVACIONES</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>   
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12 mt-3">
                <h6>I. DOCUMENTO ADJUNTO</h6>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                </div>
            </div>
        </div>
        <div class="form-row">
                <button type="submit" class="btn btn-primary btn-lg btn-block">ENVIAR DATOS</button>
        </div> 
</form>