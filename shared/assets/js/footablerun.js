'use strict'
/* Sollution guide 15.10.2020: http://fooplugins.github.io/FooTable/docs/examples/basic/single-header.html */
jQuery(function($){
  $('.table').footable();
});

// with buttons change page length
$('[data-page-size]').on('click', function(e){
	e.preventDefault();
	var newSize = $(this).data('pageSize');
	FooTable.get('#events').pageSize(newSize);
});