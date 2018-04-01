
//import $ from "../../../../../typings/globals/jquery/index.d.ts";

jQuery( document ).ready(function( $ ) {

const $window = $(window);
const size = {
    xs:480,
    sm:577,
    md:768,
    lg:992,
    xl:1200
};
    
let width, result;
    
    
class Human{
    protected msg:string = "We are all human";
    
    constructor(){
        console.log(this.msg+" after all");
    }
    
  
}
    
    $window.on("resize", function(){
        width = $window.width();
        result = $(".mobile-nav").hasClass("show");
        
        if(width >= size.lg && result == true){
            $(".mobile-nav").removeClass("show");
            console.log("mobile-nav is hidden")
        }
        
    })

    console.log("debug")
    
    
/*==================
    HELP PAGE
===================*/
    
    
    
    const sidebar = $("#side-nav");
    const sidebarTop = $("#side-nav").offset().top;
    /*
  
    $window.on("scroll", function(){
        
        let scrollPosition:number = $window.scrollTop();
        
        if(sidebarTop < scrollPosition){
            
            sidebar.css({"position":"fixed", "left":"15%", transform:"translateX(-15%)"});
        }else{
            
            sidebar.removeAttr("style");
        }
        
        
    })
    */
    
    

    
});
 


