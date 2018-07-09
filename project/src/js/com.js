/*
	封装常用功能的函数
		* 要让封装的函数更强大，必须使用参数和返回值
 */



/**
 * [求和函数]
 * @return {Number} [把所有实参的和返回到函数执行的地方]
 */
function sum(){
	// 定义一个变量，用于求和
	var res = 0;

	for(var i=0;i<arguments.length;i++){
		res += arguments[i];
	}

	// 把所有实参的和返回到函数执行的地方
	return res;
}


// 随机整数1-100
// 
/**
 * [任意范围内的随机整数]
 * @param  {Number} min [最小值]
 * @param  {Number} max [最大值]
 * @return {Number}     [返回min-max间的随机整数]
 */
function randomNumber(min,max){
	return parseInt(Math.random()*(max-min+1))+min;
}


// randomNumber(10,50)
// randomNumber(100,999)

/**
 * [任意位数的随机验证码]
 * @param  {[type]} n [description]
 * @return {[type]}   [description]
 */
function randomCode(n){
	var res = '';

	for(var i=0;i<n;i++){
		res += parseInt(Math.random()*10);
	}

	return res;
}
// randomCode(4);//5618;
// randomCode(5);//56108;


function randomColor(type){
	if(type === 'rgb'){
		// 随机红绿蓝颜色
		var r = parseInt(Math.random()*256);
		var g = parseInt(Math.random()*256);
		var b = parseInt(Math.random()*256);

		return 'rgb('+r+','+g+','+b+')';
		
	}else{
		var str = '0123456789abcdef';
		
		var color = '#';
		for(var i=0;i<6;i++){
			color += str[parseInt(Math.random()*str.length)];
		}

		return color;
	}
}

// randomColor();//rgb(255,215,166);

/**
 * [倒计时]
 * @param {[type]}   end      [description]
 * @param {Function} callback [description]
 */
var CountDown = function(end,callback){
	// 2）不断拿当前时间跟结束时间对比，计算差值(单位：s)
	var offset = Math.round((Date.parse(end) - Date.now())/1000);//65

	// 倒计时结束
	if(offset <= 0){
		 // 停止定时器
		clearInterval(timer);

		// 倒计时结束后执行回掉函数
		if(typeof callback === 'function'){
			callback();
		}
	}

	// 3）把差值转换成《剩余时间》
	var sec = offset%60;
	var min = Math.floor(offset/60)%60;
	var hour = Math.floor(offset/60/60)%24;//26h=>1d2h
	var day = Math.floor(offset/60/60/24);

	// 补0操作
	sec = sec<10 ? '0'+sec : sec;
	min = min<10 ? '0'+min : min;
	hour = hour<10 ? '0'+hour : hour;

	return day + ' ' +hour + ':' + min + ':' + sec;
}


var Element = {
	get:function(nodes){
		//保留元素节点
		var res = [];

		for(var i=0;i<nodes.length;i++){
			if(nodes[i].nodeType === 1){
				res.push(nodes[i]);
			}
		}
		return res;
	},
	children:function(node){
		return node.children;
	},

	// 获取下一个元素
	next:function(ele){

	},

	// 前一个元素
	prev:function(ele){

	}
}


//Elment.get(box.childNodes);//[text,ul,text] => [ul]
//Elemewnt.children(box);//[ul]

//封装一个兼容IE8-的浏览器的方法发
//通过类名获取元素
function getElementsByClass(name){
	var elements = document.getElementsByTagName('*');//得到页面所有元素
}

// getElementsByClass('box');//[]

/**
 * [获取元素的某个样式，兼容IE8-]
 * @param  {Element} ele  [获取样式的元素]
 * @param  {String} attr [css属性名]
 * @return {String}      [返回attr对应的属性值]
 */
function getCss(ele,attr){
	var res;

	// 标准浏览器
	if(window.getComputedStyle){
		res = getComputedStyle(ele)[attr];
	}

	// IE6,7,8
	else if(ele.currentStyle){
		res = ele.currentStyle[attr];
	}

	// 其他浏览器
	// 返回内联样式
	else{
		res = ele.style[attr];
	}


	return res;
}
// getCss(box,'font-size');

/**
 * [绑定事件的方法，兼容IE8-]
 * @param  {Element}  ele       [绑定事件的元素]
 * @param  {String}  type      [事件类型]
 * @param  {Function}  handler   [事件处理函数]
 * @param  {Boolean} isCapture [是否捕获]
 */
function bind(ele,type,handler,isCapture){
	// 标准浏览器
	if(ele.addEventListener){
		ele.addEventListener(type,handler,isCapture);
	}

	// IE6,7,8
	else if(ele.attachEvent){
		ele.attachEvent('on'+type,handler);
	}

	// DOM节点绑定方式
	else{
		ele['on'+type] = handler;
	}
}

// bind(box,'click',function(){},true);



// cookie的操作
// 增：设置cookie，
// 删：删除cookie，
// 改：修改已有cookie值，
// 查：读取cookie值
Cookie = {
	/**
	 * [设置cookie]
	 * @param {String} name   [cookie名]
	 * @param {String} value  [cookie值]
	 * @param {[Object]} params [参数]
	 */
	set:function(name,value,params){
		var content = name +'=' + value;

		// 如果params无值，默认undefined
		// 避免以下代码报错
		if(params === undefined){
			params = {};
		}

		// 有效期
		if(params.expires){
			content += ';expires='+params.expires.toUTCString();
		}

		// 保存路径
		if(params.path){
			content += ';path='+params.path;
		}

		// 域名
		if(params.domain){
			content += ';domain='+params.domain;
		}

		// 安全性
		if(params.secure){
			content += ';secure'
		}


		document.cookie = content;
	},

	// 获取（最难）
	get:function(name){
		// 获取所有cookie
		var res = '';
		var cookies = document.cookie;//1,2,0

		if(cookies.length>0){
			// 拆分cookie
			cookies = cookies.split('; ');

			for(var i=0;i<cookies.length;i++){
				// 拆分name,value
				var arr = cookies[i].split('=');

				// 判断是否为想要的cookie
				if(arr[0] === name){
					res = arr[1];

					break;
				}
			}
		}

		return	res;
	},

	// 删除（最易）
	remove:function(name,path){
		var date = new Date();
		date.setDate(date.getDate()-10);

		// document.cookie = name +'=null;expires=' + date.toUTCString() +';path='+path;
		this.set(name,null,{expires:date,path:path})
	}
}


// Cookie.set('username','laoxie',{exipres:date,path:'/'});
// Cookie.set('username','lemone');
// Cookie.get('username')
// Cookie.remove('username')