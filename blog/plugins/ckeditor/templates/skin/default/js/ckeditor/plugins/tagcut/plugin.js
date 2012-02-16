CKEDITOR.plugins.add( 'tagcut',
{
	init: function( editor )
	{

		editor.addCommand( 'insertCut', CKEDITOR.plugins.tagcutCmd );

		// Plugin logic goes here...
		editor.ui.addButton( 'TagCut',
		{
			label: 'Insert CUT',
			command: 'insertCut',
			icon: this.path + 'images/tagcut.png'
		} );
        var cssStyles = [
            '{' ,
            'background: url(' + CKEDITOR.getUrl( this.path + 'images/cut.gif' ) + ') no-repeat center center;' ,
            'clear: both;' ,
            'width:100%; _width:99.9%;' ,
            'border-top: #999999 1px dotted;' ,
            'border-bottom: #999999 1px dotted;' ,
            'padding:0;' ,
            'height: 5px;' ,
            'cursor: default;' ,
            '}'
        ].join( '' ).replace(/;/g, ' !important;' );	// Increase specificity to override other styles, e.g. block outline.

        // Add the style that renders our placeholder.
        editor.addCss( 'div.cke_tagcut' + cssStyles );
	}
} );

CKEDITOR.plugins.tagcutCmd =
{
    exec : function( editor )
    {
        var theSelectedText = editor.getSelection().getSelectedText();
        var sResult = "<cut>"+theSelectedText+"</cut>";
        editor.insertHtml(sResult);
    }
};
