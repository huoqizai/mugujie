

// 要想获取 ,必须先去设置
function cssTransform(obj,attr,val) {
    if( !obj.transform ) {
        obj.transform = {}; //如果没有  添加对象
    }
    if( arguments.length ===3 ){  // 3个参数 设置
        obj.transform[attr] = val;  //传值
        var strVal = ''; //字符串接收
        for ( var key in obj.transform ){//遍历值
            switch ( key ){
                case 'rotate':  //旋转
                case 'rotateX':
                case 'rotateY':
                    strVal += key + '('+obj.transform[key]+'deg) ';
                    break;
                case 'translate':
                case 'translateX':
                case 'translateY':
                    strVal += key + '('+obj.transform[key]+'px) ';
                    break;
                case 'scale':
                case 'scaleX':
                case 'scaleY':
                    strVal += key + '('+obj.transform[key]+') ';
                    break;
            }
            obj.style.transform = strVal;
        }

    }else{ // 2个参数 获取
        val = obj.transform[attr];
        if( typeof val === 'undefined'){
            if( attr === 'scale' || attr === 'scaleX' || attr === 'scaleY' ){
                val = 1;
            }else{
                val = 0;
            }
        }
        return val;
    }
}