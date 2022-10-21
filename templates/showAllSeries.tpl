
    {include 'templates\header.tpl'}
      <div class="container">
        <h1>Lista de Series</h1>
        <div class="row row-cols-4">
        <!--Si esta loggeado muestro el plus para agregar pelis-->
          {if $logged}
            <a href="addSerie" class="d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-plus circle-icon"></i>
            </a>
          {/if}
          {foreach from=$series item=$serie}
            <div class="series-container">
            {if $logged}
              <!--Muestro icon's para acciones de admin-->
                <a class="admin_actions" href='deleteSerie/{$serie->id_serie}'><i class="fa-solid fa-trash circle-icon"></i></a>
                <a class="admin_actions" href='updateSerie/{$serie->id_serie}'><i class="fa-solid fa-pen circle-icon"></i></a>
            {/if}
                <a href="viewSerie/{$serie->id_serie}">
                    <img src="./{$serie->image}" class="serie"/>
                </a>
                <p class="text-center">{$serie->name}</p>
            </div>
          {/foreach}
        </div>
      </div>  

      {include 'templates\footer.tpl'}


