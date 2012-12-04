var shirt =
{ 'corporate_shirt1':
  { 'image':'corporate_shirt1.png',
    'panels':[[]]
  },
  'corporate_shirt2':
  { 'image':'corporate_shirt2.png',
    'panels': [[]]
  },
  'roundneck_long':
  { 'image':'roundneck_long.png',
    'panels':[[{x:0,y:0},{x:0,y:553},{x:992,y:553},{x:992,y:0},{x:0,y:0}]]
  },
  'roundneck_short':
  { 'image':'roundneck_short.png',
    'panels':[[{x:0,y:0},{x:0,y:580},{x:992,y:580},{x:992,y:0},{x:0,y:0}]]
  }
}

var sel_color_code = [
	'#94511a', // brown
	'#006d2c', // green
	'#1738f5', // classic blue
	'#5e5e5e', // grey
	'#00f94f', // florescent green
	'#ff2019', // red
	'#f1cb44', // mustard yellow
	'#081c8c', // navy
	'#ffffff', // white
	'#ff42f6', // florescent pink
	'#ff9233', // orange
	'#fdfa53', // spectre yellow
	'#541e8d', // purple
	'#111111', // black
	];

var sel_color_name = [
	'Brown',
	'Green',
	'Classic Blue',
	'Grey',
	'Florescent Green',
	'Red',
	'Mustard Yellow',
	'Navy',
	'White',
	'Florescent pink',
	'Orange',
	'Spectre Yellow',
	'Purple',
	'Black'
];

var sel_color_file = [
	'sel_brown.png',
	'sel_green.png',
	'sel_classic_blue.png',
	'sel_grey.png',
	'sel_florescent_green.png',
	'sel_red.png',
	'sel_mustard_yellow.png',
	'sel_navy.png',
	'sel_white.png',
	'sel_florescent_pink.png',
	'sel_orange.png',
	'sel_spectre_yellow.png',
	'sel_purple.png',
	'sel_black.png'
];

var shirt_price = 
{ 'corporate_shirt1' : 80,
  'corporate_shirt2' : 80,
  'roundneck_long' : 20,
  'roundneck_short' : 18
}

var shirt_name = 
{ 'corporate_shirt1' : 'Corporate Shirt Type 1',
  'corporate_shirt2' : 'Corporate Shirt Type 2',
  'roundneck_long' : 't-Shirt Long Sleeve Roundneck',
  'roundneck_shirt' : 't-Shirt Short Sleeve Roundneck'
}
	
var addon_price = 
{ 'text' : 8,
  'logo' : 8
}

// custom function for jCanvas
$.jCanvas.extend(
{ name: "fillspot",
  fn: function(ctx, p)
  { ctx.lineWidth = 1;
    ctx.lineCap = "round";
    ctx.lineJoin = "miter";
    ctx.beginPath();

	var nodes = p.nodes;

	for(var nx in nodes) 
    { if (nx == 0) 
      { var os_x = nodes[nx].x * 0.65;
		var os_y = nodes[nx].y * 0.65;
	  }
      else 
      { if (nx == 1) { ctx.moveTo( (nodes[nx].x * 0.65) + os_x, (nodes[nx].y * 0.65)+ os_y ); }
		else { ctx.lineTo( (nodes[nx].x * 0.65)+ os_x, (nodes[nx].y * 0.65) + os_y ); }
	  }
	}

	ctx.fillStyle = p.color;
	ctx.fill();
  }
});

// custom function for jCanvas
$.jCanvas.extend(
{ name: "fillspot2",
  fn: function(ctx, p) 
  { ctx.lineWidth = 1;
    ctx.lineCap = "round";
    ctx.lineJoin = "miter";
    ctx.beginPath();
	
	var nodes = p.nodes;
	for(var nx in nodes) 
	{ if (nx == 0) 
	  { var os_x = nodes[nx].x;
		var os_y = nodes[nx].y;
	  } 
	  else 
	  { if (nx == 1) { ctx.moveTo( nodes[nx].x + os_x, nodes[nx].y + os_y ); }
		else { ctx.lineTo( nodes[nx].x + os_x, nodes[nx].y  + os_y ); }
	  }
	}
    ctx.fillStyle = p.color;
	ctx.fill();
  }
}); 

var img_folder = 'images/drawing/';
var cust_folder = 'images/drawing/cart/';

// drawing the panels and filling in the color
var draw_front_shirt = function(myshirt)
{ var panels = myshirt.panels;

  for(var pl in panels) 
  { $('canvas#front_shirt_canvas').addLayer({ method: "fillspot", 
	color: colors[pl],
	nodes:panels[pl] });
  }
	
  $('canvas#front_shirt_canvas').addLayer(
  { method: 'drawImage',
	source: img_folder + myshirt.image,
	x: 0, y: 0,
	width: (993 * 0.65), height: (585 * 0.65),
	fromCenter: false
  })
  .addLayer(
  { method: 'drawText',
    fillStyle: "#9cf",
    strokeStyle: "#25a",
    strokeWidth: 2,
    x: 150, y: 100,
    font: "8pt Verdana, sans-serif",
    draggable: true,
    text: $('input[name=front_text]').val()
  })
  .addLayer(
  { method: 'drawText',
    fillStyle: "#9cf",
    strokeStyle: "#25a",
    strokeWidth: 2,
    x: 150, y: 100,
    font: "24pt Verdana, sans-serif",
    draggable: true,
    text: $('input[name=back_text]').val()
  })
  .addLayer(
  { method: 'drawImage',
    source: cust_folder + $('input[name=front_logo]').val(),
    x:100, y:150,
    width: ($('input[name=frontlogo_width]').val()*0.2), height: ($('input[name=frontlogo_height]').val()*0.2),
    draggable: true,
    fromCenter: false
  })
  .addLayer(
  { method: 'drawImage',
    source: cust_folder + $('input[name=back_logo]').val(),
    x:100, y:150,
    width: ($('input[name=frontlogo_width]').val()*0.2), height: ($('input[name=frontlogo_height]').val()*0.2),
    draggable: true,
    fromCenter: false
  })
  .drawLayers();

//  var layers = $('canvas#front_shirt_canvas').getLayers();
//  layers.length = 0;
}