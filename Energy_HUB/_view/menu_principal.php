<div id="background"></div>

<section class="seccio_filtres">
        <form action="" id="form_filtres">
            <b>Filtrar per:</b>
            <div>    
                Tipus d'Energia: <select id="filtre_tipus_energia" name="tipus_energia"> 
                    <!-- Demanar llistes a la base de dades, for each i tal-->
                </select>
            </div>
            <div>Preu: <input type="number" name="preu" id="filtre_preu" value="50">€ </div>  <!-- a VALUE fer petició a la BD per max i min de preus -->
            <div>Enviament gratuït<input type="radio" name="enviament_gratuit" value="NO"></div>
            <button type="submit" value="Filtrar">Aplicar Filtres</button> 
            <button type="reset" value="Reset">Esborrar Filtres</button> 

            
            
        </form>
        
</section>

