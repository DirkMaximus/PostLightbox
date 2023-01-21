class PostLightbox {
	
	constructor() {
		jQuery('article.post a img').each(function(index) {
			const anchor = jQuery(this).parent()[0];
			const img = this;
			
			const href = jQuery(anchor).attr('href');
			if(href) {
				const href_arr = href.split('.');
				const ext = href_arr[href_arr.length-1];
				if(ext) {
					switch(ext.toLowerCase()) {
						case 'jpg':
						case 'jpeg':
						case 'gif':
						case 'png':
						case 'webp':
						case 'svg':
						case 'bmp':
						case 'ico':
						case 'avif':
						case 'apng':
						case 'tiff':
							jQuery(anchor).attr('data-lightbox', 'postgroup');
						break;
					}
				}
			}
		});
	}
	
}
window.addEventListener('DOMContentLoaded', function() {
	window.PostLightbox = new PostLightbox();
});