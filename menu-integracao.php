    <div id="menu-topo" class="col s10 hide-on-med-and-down menu-topo valign no-padding">
        <?php wp_nav_menu( array( 'menu'=>'menu-categorias', 'theme-location'=>'menu-categorias', 'container'=>'div', 'container-class'=>'menu-categorias', 'menu_class'=>'ul-menu-categorias' )); ?>
    </div>

    <div class="col s2 no-padding hide-on-med-and-down">
        <a href="#" class="grey-text"><span class="icon-aldeia-04 right" style="font-size:25px;padding-top:20px;height:60px;"></span></a>
    </div>

    <div class="divider col s12 hide-on-med-and-down"></div>

    <div id="RedeAldeia" class="col s12 l6 redealdeia no-padding">
        <div class="btn-aldeia hide-on-med-and-down">
            <a href="https://www.youtube.com/channel/UC-5zKVjuaKfxYlfKBW8WZXw" class="waves-effect waves-teal btn-flat lighten-1" style="">
                <span class="icon-aldeia-01 "></span>TV Aldeia</a>
            <a href="javascript:abrir('http://aldeiafm.acre.gov.br/')" class="waves-effect waves-teal btn-flat lighten-1">
                <span class="icon-aldeia-02 "></span> Aldeia FM</a>
            <a href="javascript:abrir('http://difusora.ac.gov.br')" class="waves-effect waves-teal btn-flat lighten-1">
                <span class="icon-aldeia-03 "></span> Difusora Acreana</a>
        </div>
        <div class="hide-on-large-only" >
            <a href="https://www.youtube.com/channel/UC-5zKVjuaKfxYlfKBW8WZXw" class="waves-effect waves-lighten btn green lighten-1">
                <span class="icon-aldeia-01 tamanho-icones "></span></a>
            <a href="http://aldeiafm.acre.gov.br/" class="waves-effect waves-lighten btn green lighten-1">
                <span class="icon-aldeia-02 tamanho-icones "></span></a>
            <a href="http://difusora.ac.gov.br)" class="waves-effect waves-lighten green btn lighten-1">
                <span class="icon-aldeia-03 tamanho-icones "></span></a>
        </div>
    </div>


    <div class="col s12 l6 redealdeia no-padding" >
        <i class="fa fa-bolt red-text darken-5-text left" aria-hidden="true" style="font-size:18px; line-height:30px;"></i>
        <div class="mod-chips">
          <?php wp_nav_menu( array( 'menu'=>'menu-trends', 'theme-location'=>'menu-trends', 'container'=>'div', 'container-class'=>'menu-trends', 'menu_class'=>'mod-chips' )); ?>
        </div>
    </div>
