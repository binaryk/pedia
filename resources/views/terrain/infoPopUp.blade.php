<div id="terrainPopUp" style="display:none">
    <ul class="nav nav-tabs">
        <li class="active"><a id="contactLink" data-toggle="tab" href="#contact">Contact</a></li>
        <li><a id="pozeLink" data-toggle="tab" href="#poze">Poze</a></li>
    </ul>
    <div class="tab-content">
        <div id="contact" class="tab-pane fade in active">
            <h3>Contact Information</h3>
            <ul class="list-group">
                <li class="list-group-item">@{{ currentTerrain.title }}</li>
                <li class="list-group-item">@{{ currentTerrain.pret }}</li>
                <li class="list-group-item">@{{ currentTerrain.telefon }}</li>
                <li class="list-group-item">@{{ currentTerrain.detalii }}</li>
            </ul>
        </div>
        <div id="poze" class="tab-pane fade">
            <h3>Poze</h3>
        </div>
    </div>
</div>