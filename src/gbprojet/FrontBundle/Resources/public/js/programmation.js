/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function(){
    var $=jQuery;
    var select_ue_ecue=$('#select_ue_ecue'),option_group=$('optgroup').attr('label');
    
    select_ue_ecue.change(function(){
        if($(this).val()==option_group){
            option_group.css({
                'display':'block'
            })
        }else{
            
            option_group.parent().css({
                'display':'none'
            })
        }
        
       alert($(this).val()  + option_group.val());
    });
    
    
});

