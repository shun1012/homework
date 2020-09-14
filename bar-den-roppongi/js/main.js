$(function(){
    function denView(){
        this.mainHeight = 0;
        this.windowWidth = window.innerWidth;
        this.windowHeight = window.innerHeight;
        this.aspect = "";

        this.init();
        this.handleEvent();
    }

    denView.prototype = {
        // getter : setter ここから
        init: function(){
            this.util = new utility();
            this.adjustContainer();
            if($("body").hasClass("top")) initializeMap();
            (this.windowWidth >= this.windowHeight) ? this.setAspect("landscape") : this.setAspect("horizontal");
        },
        handleEvent: function(){
            $this = this;

            // スクロール
            $(window).scroll(function() {
                var scDistance = $(this).scrollTop();
                $this.judgeScroll(scDistance);
            });

            // リサイズ
            $(window).resize(function() {
                var tempWidth = window.innerWidth;
                var tempHeight = window.innerHeight;
                var tempAspect = "";
                (tempWidth >= tempHeight) ? tempAspect = "landscape" : tempAspect = "horizontal";
                if($this.getAspect() !== tempAspect){
                    $this.adjustContainer();
                    $this.setAspect(tempAspect);
                }
            });

            // menu展開
            $(".js-openTrigger").on("click",function(){
                $this.openMenu();
            });
            $(".js-closeTrigger").on("click",function(){
                $this.closeMenu();
            });
        },
        setAspect: function(text){
            this.aspect = text;
        },
        getAspect: function(){
            return this.aspect;
        },
        adjustContainer: function(){
            this.mainHeight = window.innerHeight;
            $(".js-mainImage").height(this.mainHeight);
            $(".js-menuList").height(this.mainHeight + 100);
        },
        openMenu: function(el){
            this.util.killScroll();
            $(".js-menuList").stop(true,false).fadeIn(300);
        },
        closeMenu: function(el){
            this.util.returnScroll();
            $(".js-menuList").stop(true,false).fadeOut(300);
        },
        judgeScroll: function(num){
            if(num > this.mainHeight){
                $(".header").addClass("is-black");
            }else{
                $(".header").removeClass("is-black");
            }
        }
    }


	function utility(){
        this.handleEvent();
        this.smoothScroll();
    }

    // イベントを登録してください
    utility.prototype.handleEvent = function(){
        var $this = this;

        $(".modalBg, .btn_modalClose").on("click",function(){
            $this.modalClose(200);
        });

        $(".modalTrigger").on("click",function(){
            $this.modalOpen($(this),400);
        });
    };

    utility.prototype.uaJudge = function(){

    };

    // モーダルを開く
    utility.prototype.modalOpen = function(el,num){
        var modalName = el.attr("data-modalname");
        var fadeTime = (num !== undefined) ? num : 300;

        $(".contentModal").each(function(){
            if(modalName === $(this).attr("data-modalname")){
                $(this).fadeIn(fadeTime);
                $(".modalBg").fadeIn(200);
            }
        });

        this.killScroll();
    };

    // モーダルを閉じる
    utility.prototype.modalClose = function(num){
        var fadeTime = (num !== undefined) ? num : 300;
        $(".contentModal").fadeOut(fadeTime);
        $(".modalBg").fadeOut(400);

        this.returnScroll();
    };

    // スクロールキル
    utility.prototype.killScroll = function(){
        //PC用
        var scroll_event = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';
        $(document).on(scroll_event,function(e){e.preventDefault();});
        //SP用
        $(document).on('touchmove.noScroll', function(e) {e.preventDefault();});
    };

    // スクロールキル
    utility.prototype.returnScroll = function(){
        //PC用
        var scroll_event = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';
        $(document).off(scroll_event);
        //SP用
        $(document).off('.noScroll');
    };

    // スムーススクロール
    utility.prototype.smoothScroll = function(){
        var $this = this;
        var speed = 400;
        $("a[href^=#]").on("click",function() {
            var href= $(this).attr("href");
            var target = $(href == "#" || href == "" ? "html" : href);
            var position = target.offset().top;
            $('body,html').animate({scrollTop:position}, speed, 'swing');
            $(".js-menuList").stop(true,false).fadeOut(300);
            $this.returnScroll();
            return false;
        });
    };

    new denView();
});