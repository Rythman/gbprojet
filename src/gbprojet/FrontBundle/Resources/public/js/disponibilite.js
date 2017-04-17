/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function(){
    var $=jQuery;
    var allType=$('#allType'),amphiType=$('#amphiType'),salleTDType=$('#salleTDType'), salleTPType=$('#salleTPType');
    var classAmphi=$('.Amphitheatre'),classSalleTD=$('.salleTD'),classSalleTP=$('.salleTP');
    
    allType.click(function(){
        if($(this).selected='true'){
            classAmphi.css({
                'display':'table-row'
            });
            classSalleTD.css({
                'display':'table-row'
            });
            classSalleTP.css({
                'display':'table-row'
            });
        }
    });
    amphiType.click(function(){
        if($(this).selected='true'){
            classAmphi.css({
                'display':'table-row'
            });
            classSalleTD.css({
                'display':'none' 
            });
            classSalleTP.css({
                'display':'none' 
            });
        }
    });
    
    salleTDType.click(function(){
        if($(this).selected='true'){
            classAmphi.css({
                'display':'none'
            });
            classSalleTD.css({
                'display':'table-row' 
            });
            classSalleTP.css({
                'display':'none' 
            });
        }
    });
     salleTPType.click(function(){
        if($(this).selected='true'){
            classAmphi.css({
                'display':'none'
            });
            classSalleTD.css({
                'display':'none' 
            });
            classSalleTP.css({
                'display':'table-row' 
            });
        }
    });

    var select_ue_ecue=$('#select_ue_ecue'),option_group=$('optgroup');
    
    select_ue_ecue.change(function(){
        if($(this).val()==option_group.val()){
            option_group.css({
                'display':'block'
            })
        }else{
            
            option_group.css({
                'display':'none'
            })
        }
    });
    
    
});
