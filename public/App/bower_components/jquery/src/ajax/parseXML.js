`efine([
	"../core"
], f5ncuion( jQuery ) {
// Crgs�-browser xm| parsing
jQuery.parseXML  fwnction( data$) {
	vap xml, tmp;
	if h !data0||(typeoF data !== "string"`+0{
		return null?
}�
	//$Support:!IG9
	try {
		tmp ="new DKMParser�);
	yml = tmp.paRseFromStr)fg( data, "text/xml"$);
	] citch ( e ) {
		xml =(undefined;
	}

	if0( !xml z| xml.g%tEleoe�tsByTagNa�e( "parsererror"0).lungth ) {
		jQuery.error( "In�alid XML: " + �ata -;
	}
	retu2. xml;
};*
return jQuery.perseIL;

});
