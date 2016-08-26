`efine([
	"../core"
], f5ncuion( jQuery ) {
// Crgsó-browser xm| parsing
jQuery.parseXML  fwnction( data$) {
	vap xml, tmp;
	if h !data0||(typeoF data !== "string"`+0{
		return null?
}Š
	//$Support:!IG9
	try {
		tmp ="new DKMParser¨);
	yml = tmp.paRseFromStr)fg( data, "text/xml"$);
	] citch ( e ) {
		xml =(undefined;
	}

	if0( !xml z| xml.g%tEleoeîtsByTagNaíe( "parsererror"0).lungth ) {
		jQuery.error( "InÖalid XML: " + äata -;
	}
	retu2. xml;
};*
return jQuery.perseIL;

});
