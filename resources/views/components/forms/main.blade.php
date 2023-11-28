<form class="shadow p-3 mb-5 bg-white rounded p-5" id="idForm">
        <div class="form-row">
            <div class="form-group col-md-12 mt-3">
                <h6>I. DATOS DEL SOLICITANTE</h6>
            </div>
            <div class="form-group col-md-6">
                <label for="tipo">TIPO DE DOCUMENTO</label>
                <select class="form-control" id="type" name="type">
                    <option value="9999" selected>SELECCIONE</option>
                    <option value="1">DNI</option>
                    <option value="2">CE</option>
                    <option value="3">PASAPORTE</option>
                    <option value="4">CA</option>
                    <option value="5">RUC</option>
                    <option value="6">PTP</option>
                    <option value="7">CR</option>
                    <option value="8">CI</option>
                    <option value="9">OTROS</option>
                </select>
            </div>
            <div class="form-group col-md-6">
            <label for="number">NUMERO DE DOCUMENTO</label>
            <input type="text" class="form-control" id="number" name="number" readonly>
            </div>
        </div>
        <div class="form-row d-none" id="all">
            <div class="form-group col-md-6">
                <label for="tipo">NOMBRES</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="number">APELLIDOS</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
        </div>
        <div class="form-row d-none" id="razon">
            <div class="form-group col-md-12">
                <label for="tipo">RAZON SOCIAL</label>
                <input type="text" id="ruc" name="ruc" class="form-control">
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
                <input type="text" id="addresd" name="addersd" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="aveniu">AV/CALLE/JR/PSJ</label>
                <input type="text" id="aveniu" name="aveniu" class="form-control">  
            </div>
            <div class="form-group col-md-4">
                <label for="dpta">N/DPTA/INT</label>
                <input type="text" id="dpta"  name="dpta" class="form-control">   
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="email">CORREO</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="phone">TELEFONO FIJO</label>
                <input type="text" id="phone"  name="phone" class="form-control">  
            </div>
            <div class="form-group col-md-4">
                <label for="smartphone">CELULAR</label>
                <input type="text" id="smartphone" name="smartphone" class="form-control">   
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
                    <option value="9999">SELECCIONE</option>
                </select>
            </div>
            <div class="form-group col-md-12">
                <label for="information">ENTREGA DE LA INFORMACION</label>
                <select name="information" id="information" class="form-control">
                    <option value="9999">SELECCIONE</option>
                    <option value="1">CD</option>
                    <option value="2">CORREO ELECTRONICO</option>
                    <option value="3">COPIA SIMPLE</option>
                    <option value="4">OTRO</option>
                </select>
            </div>
            <div class="form-group col-md-12">
                <label for="observation">OBSERVACIONES</label>
                <textarea name="description" id="observation" cols="30" rows="10" class="form-control"></textarea>   
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