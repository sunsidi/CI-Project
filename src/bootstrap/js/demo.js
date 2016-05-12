/*
 * Bootstrap Image Gallery JS Demo 3.0.1
 * https://github.com/blueimp/Bootstrap-Image-Gallery
 *
 * Copyright 2013, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

/*jslint unparam: true */
/*global blueimp, $ */

$(function () {
    'use strict';

		var img_names=['techday2015-4220024.jpg','techday2015-4220026.jpg','techday2015-4220030.jpg','techday2015-4220032.jpg','techday2015-4220034.jpg','techday2015-4220035.jpg','techday2015-4220038.jpg','techday2015-4220041.jpg','techday2015-4220043.jpg','techday2015-4220044.jpg','techday2015-4220047.jpg','techday2015-4220048.jpg','techday2015-4220050.jpg','techday2015-4220051.jpg','techday2015-4220054.jpg','techday2015-4220056.jpg','techday2015-4220057.jpg','techday2015-4220060.jpg','techday2015-4220061.jpg','techday2015-4220063.jpg','techday2015-4220064.jpg','techday2015-4220065.jpg','techday2015-4220067.jpg','techday2015-4220068.jpg','techday2015-4220069.jpg','techday2015-4220074.jpg','techday2015-4220076.jpg','techday2015-4230077.jpg','techday2015-4230078.jpg','techday2015-4230079.jpg','techday2015-4230080.jpg','techday2015-4230081.jpg','techday2015-4230082.jpg','techday2015-4230086.jpg','techday2015-4230091.jpg','techday2015-4230093.jpg','techday2015-4230096.jpg','techday2015-4230100.jpg','techday2015-4230103.jpg','techday2015-4230104.jpg','techday2015-4230105.jpg','techday2015-4230106.jpg','techday2015-4230107.jpg','techday2015-4230108.jpg','techday2015-4230109.jpg','techday2015-4230110.jpg','techday2015-4230111.jpg','techday2015-4230112.jpg','techday2015-4230116.jpg','techday2015-4230117.jpg','techday2015-4230118.jpg','techday2015-4230119.jpg','techday2015-4230121.jpg','techday2015-4230122.jpg','techday2015-4230125.jpg','techday2015-4230127.jpg','techday2015-4230130.jpg','techday2015-4230132.jpg','techday2015-4230133.jpg','techday2015-4230135.jpg','techday2015-4230138.jpg','techday2015-4230139.jpg','techday2015-4230140.jpg','techday2015-4230141.jpg','techday2015-4230148.jpg','techday2015-4230149.jpg','techday2015-4230150.jpg','techday2015-4230151.jpg','techday2015-4230153.jpg','techday2015-4230154.jpg','techday2015-4230155.jpg','techday2015-4230156.jpg','techday2015-4230157.jpg','techday2015-4230160.jpg','techday2015-4230161.jpg','techday2015-4230163.jpg','techday2015-4230165.jpg','techday2015-4230166.jpg','techday2015-4230168.jpg','techday2015-4230169.jpg','techday2015-4230178.jpg','techday2015-4230180.jpg','techday2015-4230183.jpg'];
	var link_prefix="https://wrevel.com/uploads/ny-tech-day/";
	var linksContainer = $('#links'),
            baseUrl;
			
	for(var img in img_names){
	//	alert(link_prefix+img_names[img]);
		baseUrl = link_prefix+img_names[img];
            $('<div style="overflow:hidden;width:200px;height:200px;float:left;margin-left:25px;"/>')
                .append($('<img class="s_img">').prop('src', baseUrl))
                .prop('href', baseUrl)
                .prop('title', 'Wrevel @ NY Techday 2015')
                .attr('data-gallery', '')
                .appendTo(linksContainer);
	};

	
	
	
    $('#borderless-checkbox').on('change', function () {
        var borderless = $(this).is(':checked');
        $('#blueimp-gallery').data('useBootstrapModal', !borderless);
        $('#blueimp-gallery').toggleClass('blueimp-gallery-controls', borderless);
    });

    $('#fullscreen-checkbox').on('change', function () {
        $('#blueimp-gallery').data('fullScreen', $(this).is(':checked'));
    });

    $('#image-gallery-button').on('click', function (event) {
        event.preventDefault();
        blueimp.Gallery($('#links div'), $('#blueimp-gallery').data());
    });

    $('#video-gallery-button').on('click', function (event) {
        event.preventDefault();
        blueimp.Gallery([
            {
                title: 'Sintel',
                href: 'http://media.w3.org/2010/05/sintel/trailer.mp4',
                type: 'video/mp4',
                poster: 'http://media.w3.org/2010/05/sintel/poster.png'
            },
            {
                title: 'Big Buck Bunny',
                href: 'http://upload.wikimedia.org/wikipedia/commons/7/75/' +
                    'Big_Buck_Bunny_Trailer_400p.ogg',
                type: 'video/ogg',
                poster: 'http://upload.wikimedia.org/wikipedia/commons/thumb/7/70/' +
                    'Big.Buck.Bunny.-.Opening.Screen.png/' +
                    '800px-Big.Buck.Bunny.-.Opening.Screen.png'
            },
            {
                title: 'Elephants Dream',
                href: 'http://upload.wikimedia.org/wikipedia/commons/transcoded/8/83/' +
                    'Elephants_Dream_%28high_quality%29.ogv/' +
                    'Elephants_Dream_%28high_quality%29.ogv.360p.webm',
                type: 'video/webm',
                poster: 'http://upload.wikimedia.org/wikipedia/commons/thumb/9/90/' +
                    'Elephants_Dream_s1_proog.jpg/800px-Elephants_Dream_s1_proog.jpg'
            },
            {
                title: 'LES TWINS - An Industry Ahead',
                href: 'http://www.youtube.com/watch?v=zi4CIXpx7Bg',
                type: 'text/html',
                youtube: 'zi4CIXpx7Bg',
                poster: 'http://img.youtube.com/vi/zi4CIXpx7Bg/0.jpg'
            },
            {
                title: 'KN1GHT - Last Moon',
                href: 'http://vimeo.com/73686146',
                type: 'text/html',
                vimeo: '73686146',
                poster: 'http://b.vimeocdn.com/ts/448/835/448835699_960.jpg'
            }
        ], $('#blueimp-gallery').data());
    });

});