<?php
$page = "hejmpaĝo";
$title = "Lingvoilo";
$title2 = "Stila kaj gramatika kontrolilo";
$lastmod = "2012-01-22 16:08 CET";
include("../../include/header.php");
?>
		
<p class="firstpara"><strong>Lingvoilo (LanguageTool) estas programo por kontroli stilon kaj gramatikon en Esperanto sed ankaŭ en multaj aliaj lingvoj (en la angla, franca, germana, pola, nederlanda, kaj <?=show_link("multaj aliaj lingvoj", "../languages/", 0) ?>.</strong>
Lingvoilo atentigas pri tiuj eraroj, kiujn literuma kontrolilo ne trovas, kiel eraroj de akuzativo (mi lernas <em>Esperanto</em>). Ĝi ne atentigas pri misliterumoj, sed eblas uzi Lingvoilon samtempe kune kun literuma kontrolilo.</p>

<p>Lingvoilo trovas erarojn por kiuj estas difinitaj reguloj en aparta agarda XML-dosiero. Reguloj por detekti pli malsimplajn erarojn povas ankaŭ esti difinitaj en Java.</p>

<h2>Provu Lingvoilo-n rete sen instali ĝin</h2>

<form name="checkform" action="http://community.languagetool.org" method="post">
    <textarea onfocus="javascript: if(document.checkform.text.value == 'Alglui vian kontrolendan tekston ĉi tie...') { document.checkform.text.value='' } " 
        style="width:100%; max-width:800px;height:100px" name="text">Alglui vian kontrolendan tekston ĉi tie...</textarea>
    <br />
    <input type="submit" name="_action_checkText" value="Kontroli tekston"/>
    Lingvo: <select name="lang" id="lang" >
    
        <option value="auto">aŭtomate detekti</option>
        <option value="en" >angla</option>
        <option value="ast" >asturia</option>
        <option value="be" >belarusa</option>
        <option value="br" >bretona</option>
        <option value="zh" >ĉina</option>
        <option value="da" >dana</option>
        <option value="eo" >Esperanto</option>
        <option value="fr" >franca</option>
        <option value="gl" >galega</option>
        <option value="de" >germana</option>
        <option value="es" >hispana</option>
        <option value="is" >islanda</option>
        <option value="it" >itala</option>
        <option value="ca" >kataluna</option>
        <option value="km" >kmera</option>
        <option value="lt" >litova</option>
        <option value="ml" >malajala</option>
        <option value="nl" >nederlanda</option>
        <option value="pl" >pola</option>
        <option value="ro" >rumana</option>
        <option value="ru" >rusa</option>
        <option value="sk" >slovaka</option>
        <option value="sl" >slovena</option>
        <option value="sv" >sveda</option>
        <option value="tl" >togaloga</option>
        <option value="uk" >ukraina</option>
    </select>
</form>

<h2>Ekrankopio en LibreOffice</h2>

<img src="images/Lingvoilo-LibreOffice.png" alt="Lingvoilo"/>

<h2>Elŝutado</h2>

<div class="downloadSection">
	<h2><?=show_link("Elŝuti Lingvoilo-1.6 (29&nbsp;MB)", "../download/LanguageTool-1.6.oxt", 0) ?></h2>
	<ul>
		<li><?=show_link("Java", "http://www.java.com/en/download/manual.jsp", 1)?>&nbsp;6.0
			aŭ pli nova estas bezonata.
                        Vi bezonos <strong>restartigi OpenOffice.org/LibreOffice</strong> post la instalado de tiu kromprogramo.</li>
		<li>Bonvolu atentigi pri cimoj ĉe <?=show_link("Sourceforge", "http://sourceforge.net/tracker/?group_id=110216&amp;atid=655717", 1)?>
			or sendu komentojn al naber <i>at</i> danielnaber.de aŭ dominique.pelle <i>at</i> gmail.com pri la Esperanta versio de Lingvoilo.</li>
	</ul>
</div>

<p>Pli freŝaj sed ne testitaj versioj de Lingvoilo ĝisdatigitaj ĉiutage
<?=show_link("haveblas tie", "../download/snapshots/", 0) ?> (<?=show_link("../CHANGES.txt", "http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/CHANGES.txt", 0) ?>).

<h2>Instalo kaj uzado</h2>

<ul>
	<li><strong>En OpenOffice.org/LibreOffice</strong>:
	Duoble klaku sur <tt>LanguageTool-1.6.oxt</tt> por instali ĝin.
        Se tio ne funkcias, alvoku <em>Iloj → Aldonaĵa mastrumilo</em> ekde
        la ĉefa menuo de LibreOffice, kaj poste restartigu LibreOffice.
	<li>Legu ankaŭ <?=show_link("Usage", "../usage/", 0)?> por uzado de Lingvoilo ekster LibreOffice.</li>
</ul>


<h2>Ĉu vi bezonas helpon?</h2>

<p>Bonvolu vidi  <?=show_link("liston de la plej oftaj problemoj", "../issues", 0)?>.</p>

<h2>Permesilo kaj kodofonto</h2>

<p>Lingvoilo libere haveblas sub la permesilo <?=show_link("LGPL", "http://www.fsf.org/licensing/licenses/lgpl.html#SEC1", 0)?>.
Kodofonto elŝuteblas ĉe <?=show_link("Sourceforge", "http://sourceforge.net/projects/languagetool/", 1) ?> per SVN.
La enhavo de la hejmpaĝo haveblas sub la permesilo <?=show_link("CC BY-SA 3.0", "http://creativecommons.org/licenses/by-sa/3.0/", 1) ?>.</p>

<div style="height:50px"></div>

<?php
include("../../include/footer.php");
?>
