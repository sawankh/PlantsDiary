var AppUtility = {};

AppUtility.mobile = {
            detect:function(){
                    var uagent = navigator.userAgent.toLowerCase(); 
                    var list = this.mobiles;
                    var ismobile = false;
                    for(var d=0;d<list.length;d+=1){
                            if(uagent.indexOf(list[d])!=-1){
                                    ismobile = list[d];
                            }
                    }

                    if (ismobile) {
                        //$("body").addClass("mobile").addClass(ismobile);
                        
                        //write your code to redirect to the mobile website.
                        //window.location = "website.com/mobile";
                        //window.location = "m.website.com";
                        
                    }
                    return ismobile;
            },
            
            detectWindowsPhone: function(){
                        var uagent = navigator.userAgent.toLowerCase();
                        var winPhone = "windows phone";
                        if (uagent.indexOf(winPhone) != -1){
                                    return true;
                        }
                        return false;
            },
            
            mobiles:[
                    "midp","240x320","blackberry","netfront","nokia","panasonic",
                    "portalmmm","sharp","sie-","sonyericsson","symbian",
                    "windows ce","benq","mda","mot-","opera mini",
                    "philips","pocket pc","sagem","samsung","sda",
                    "sgh-","vodafone","xda","palm","iphone",
                    "ipod","android"
            ]
    };
    
    
    