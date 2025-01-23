
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box para acuerdos -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $conteoAcuerdos }}</h3>
                <p>Acuerdos Cargados</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="{{ route('acuerdos.index') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box para ordenanzas -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $conteoOrdenanzas }}</h3>
                <p>Ordenanzas Cargadas</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ route('ordenanzas.index') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box para gasetas -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $conteoGasetas }}</h3>
                <p>Gacetas Cargadas</p>
            </div>
            <div class="icon">
                <i class="ion ion-document-text"></i>
            </div>
            <a href="{{ route('gasetas.index') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box para resoluciones -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $conteoResoluciones }}</h3>
                <p>Resoluciones Cargadas</p>
            </div>
            <div class="icon">
                <i class="ion ion-checkmark"></i>
            </div>
            <a href="{{ route('resoluciones.index') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box para usuarios -->
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{ $conteoUsuarios }}</h3>
                <p>Usuarios Registrados</p>
            </div>
            <div class="icon">
                <i class="ion ion-person"></i>
            </div>
            <a href="{{ route('listausuario.index') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box para expedientes -->
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>{{ $conteoExpedientes }}</h3>
                <p>Expedientes Registrados</p>
            </div>
            <div class="icon">
                <i class="ion ion-folder"></i>
            </div>
            <a href="{{ route('expedientes.index') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box para ordinarias -->
        <div class="small-box bg-light">
            <div class="inner">
                <h3>{{ $conteoOrdinarias }}</h3>
                <p>Sesiones Ordinarias</p>
            </div>
            <div class="icon">
                <i class="ion ion-calendar"></i>
            </div>
            <a href="{{ route('ordinarias.index') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box para extraordinarias -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $conteoExtraordinarias }}</h3>
                <p>Sesiones Extraordinarias</p>
            </div>
            <div class="icon">
                <i class="ion ion-star"></i>
            </div>
            <a href="{{ route('extraordinarias.index') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box para solemnes -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $conteoSolemne }}</h3>
                <p>Sesiones Solemnes</p>
            </div>
            <div class="icon">
                <i class="ion ion-gift"></i>
            </div>
            <a href="{{ route('solemnes.index') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box para especiales -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $conteoEspeciales }}</h3>
                <p>Sesiones Especiales</p>
            </div>
            <div class="icon">
                <i class="ion ion-star-outline"></i>
            </div>
            <a href="{{ route('especiales.index') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>