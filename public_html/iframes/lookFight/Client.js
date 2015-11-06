(function (lib, img, cjs) {

var p; // shortcut to reference prototypes

// stage content:
(lib.Client = function() {
	this.initialize();

	// Layer 6
	this.lay = new lib.Symbol6();
	this.lay.setTransform(470,375,1,1,0,0,0,470,375);

	this.addChild(this.lay);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,940,750);


// symbols:
(lib.asterOskol = function() {
	this.initialize(img.asterOskol);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,3,3);


(lib.back = function() {
	this.initialize(img.back);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,940,750);


(lib.bang2 = function() {
	this.initialize(img.bang2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,240,40);


(lib.Bitmap16 = function() {
	this.initialize(img.Bitmap16);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,7,8);


(lib.Bitmap17 = function() {
	this.initialize(img.Bitmap17);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,9,8);


(lib.Bitmap18 = function() {
	this.initialize(img.Bitmap18);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,480,400);


(lib.Bitmap27 = function() {
	this.initialize(img.Bitmap27);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,412,128);


(lib.bullet2 = function() {
	this.initialize(img.bullet2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,125,25);


(lib.callcentericons = function() {
	this.initialize(img.callcentericons);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,192,214);


(lib.message_icon_blasters = function() {
	this.initialize(img.message_icon_blasters);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,128,128);


(lib.message_icon_flag = function() {
	this.initialize(img.message_icon_flag);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,128,128);


(lib.message_icon_swords = function() {
	this.initialize(img.message_icon_swords);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,128,128);


(lib.window = function() {
	this.initialize(img.window);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,560,335);


(lib.WindowStrategy = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.window();
	this.instance.setTransform(-269.9,-161.9,0.964,0.964);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-269.9,-161.9,540,323.1);


(lib.Symbol15 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Bitmap27();

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance,p:{scaleX:1,scaleY:1,x:0,y:0}}]}).to({state:[{t:this.instance,p:{scaleX:1.1,scaleY:1.1,x:-20.5,y:-6.3}}]},1).to({state:[{t:this.instance,p:{scaleX:0.95,scaleY:0.95,x:10.3,y:3.2}}]},1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,412,128);


(lib.Symbol14 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.message_icon_flag();

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance,p:{scaleX:1,scaleY:1,x:0,y:0}}]}).to({state:[{t:this.instance,p:{scaleX:1.1,scaleY:1.1,x:-6.3,y:-6.3}}]},1).to({state:[{t:this.instance,p:{scaleX:0.95,scaleY:0.95,x:3.2,y:3.2}}]},1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,128,128);


(lib.Symbol13 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.message_icon_swords();

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance,p:{scaleX:1,scaleY:1,x:0,y:0}}]}).to({state:[{t:this.instance,p:{scaleX:1.1,scaleY:1.1,x:-6.3,y:-6.3}}]},1).to({state:[{t:this.instance,p:{scaleX:0.95,scaleY:0.95,x:3.2,y:3.2}}]},1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,128,128);


(lib.Symbol8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.message_icon_blasters();

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance,p:{scaleX:1,scaleY:1,x:0,y:0}}]}).to({state:[{t:this.instance,p:{scaleX:1.1,scaleY:1.1,x:-6.3,y:-6.3}}]},1).to({state:[{t:this.instance,p:{scaleX:0.95,scaleY:0.95,x:3.2,y:3.2}}]},1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,128,128);


(lib.Symbol6 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.back();

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,940,750);


(lib.Symbol5 = function() {
	this.initialize();

	// Layer 2
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["rgba(0,0,0,0)","rgba(255,255,255,0.188)","#151515","#151515","#151515"],[0.267,1,1,1,1],-71,0,71.1,0).s().p("An1H2QjRjQABkmQgBklDRjRQDQjPElgBQEmABDQDPQDQDRABElQgBEmjQDQQjQDRkmgBQklABjQjRg");
	this.shape.setTransform(223.4,103.6);

	// Layer 1
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.lf(["rgba(0,0,0,0)","#0033FF","#151515","#151515","#151515"],[0.267,1,1,1,1],-165.7,0,165.8,0).s().p("AySLYQnmkuAAmqQAAmpHmkvQHlktKtAAQKuAAHlEtQHmEvAAGpQAAGqnmEuQnlEuquAAQqtAAnlkug");
	this.shape_1.setTransform(140.5,103.1);

	this.addChild(this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-25.2,0,331.5,206.2);


(lib.Symbol4 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("rgba(0,153,102,0.008)").s().p("Ar9JJIAAyRIX6AAIAASRg");
	this.shape.setTransform(76.6,58.5);

	this.addChild(this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,153.2,117);


(lib.ScreenFinal = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.Bitmap18();

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,480,400);


(lib.Crash = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.asterOskol();
	this.instance.setTransform(-1.5,-1.4);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-1.5,-1.4,3,3);


(lib.ItemStrategy = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.message_icon_blasters();
	this.instance.setTransform(0,0,0.609,0.609);

	this.instance_1 = new lib.message_icon_swords();
	this.instance_1.setTransform(0,0,0.609,0.609);

	this.instance_2 = new lib.message_icon_flag();
	this.instance_2.setTransform(0,0,0.609,0.609);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance}]}).to({state:[{t:this.instance_1}]},1).to({state:[{t:this.instance_2}]},1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,78,78);


(lib.Fire = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#FF0000","rgba(21,21,21,0)","#151515","#151515","#151515"],[0,1,1,1,1],0,0,0,0,0,36.2).s().p("Aj9D+QhphqgBiUQABiUBphpQBphpCUgBQCUABBqBpQBqBpgBCUQABCUhqBqQhqBqiUgBQiUABhphqg");
	this.shape.setTransform(1,2);

	this.addChild(this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-34.9,-33.9,72,72);


(lib.Bullet = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.bullet2();
	this.instance.setTransform(28,0,0.224,0.224,0,0,180);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,28,5.6);


(lib.WindowBtns = function() {
	this.initialize();

	// Layer 2
	this.btnAdd = new lib.Symbol15();
	this.btnAdd.setTransform(7,43,1,1,0,0,0,206,64);
	this.btnAdd.visible = false;
	new cjs.ButtonHelper(this.btnAdd, 0, 1, 2);

	// Layer 1
	this.btn3 = new lib.Symbol14();
	this.btn3.setTransform(97,-20.9);
	new cjs.ButtonHelper(this.btn3, 0, 1, 2);

	this.btn2 = new lib.Symbol13();
	this.btn2.setTransform(3,43,1,1,0,0,0,64,64);
	new cjs.ButtonHelper(this.btn2, 0, 1, 2);

	this.btn1 = new lib.Symbol8();
	this.btn1.setTransform(-156.9,43,1,1,0,0,0,64,64);
	new cjs.ButtonHelper(this.btn1, 0, 1, 2);

	// Layer 3
	this.instance = new lib.window();
	this.instance.setTransform(-269.9,-162.5,0.964,0.964);

	this.addChild(this.instance,this.btn1,this.btn2,this.btn3,this.btnAdd);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-269.9,-162.5,540,323.1);


(lib.ShepFly = function() {
	this.initialize();

	// Layer 6
	this.defend = new lib.Symbol5();
	this.defend.setTransform(23.9,-1,1,1,0,0,0,165.8,103.1);

	// Layer 1
	this.back_layer = new lib.Symbol4();
	this.back_layer.setTransform(12.9,-27.1,1,1,0,0,0,76.6,58.5);

	// Layer 5
	this.layer = new lib.Symbol4();
	this.layer.setTransform(12.9,-27.1,1,1,0,0,0,76.6,58.5);

	this.addChild(this.layer,this.back_layer,this.defend);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-167.1,-104.1,331.5,206.2);

})(lib = lib||{}, images = images||{}, createjs = createjs||{});
var lib, images, createjs;