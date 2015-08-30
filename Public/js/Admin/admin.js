$(function(){
	
	CKEDITOR.replace( 'editor1', {
		extraPlugins: 'codesnippet',
		codeSnippet_theme: 'monokai_sublime'
	});


	hljs.highlightBlock();
	// Inititalize highlight.js on all <pre><code> .. </code></pre>
	hljs.initHighlightingOnLoad();
	// config.codeSnippet_theme = 'school_book';
})
