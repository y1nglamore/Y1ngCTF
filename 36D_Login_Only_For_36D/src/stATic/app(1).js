/**
*qdPM
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@qdPM.net so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade qdPM to newer
* versions in the future. If you wish to customize qdPM for your
* needs please refer to http://www.qdPM.net for more information.
*
* @copyright  Copyright (c) 2009  Sergey Kharchishin and Kym Romanets (http://www.qdpm.net)
* @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/

var is_mobile = navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i);

function qdpm_app_init()
{
  $('.datepicker').datepicker({
            rtl: App.isRTL(),
            autoclose: true,
            format: 'yyyy-mm-dd',
        });
        
 $(".datetimepicker").datetimepicker({
        autoclose: true,
        isRTL: App.isRTL(),
        format: "yyyy-mm-dd hh:ii",
        pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left")
    });      
      

                
     
 $.fn.modal.defaults.spinner = $.fn.modalmanager.defaults.spinner = 
          '<div class="loading-spinner" style="width: 200px; margin-left: -100px;">' +
            '<div class="progress progress-striped active">' +
              '<div class="progress-bar" style="width: 100%;"></div>' +
            '</div>' +
          '</div>';
        
          
  jQuery.extend( jQuery.fn.dataTableExt.oSort, {
    "title-numeric-pre": function ( a ) {
        var x = a.match(/title="*(-?[0-9\.]+)/)[1];
        return parseFloat( x );
    },
  
    "title-numeric-asc": function ( a, b ) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
    },
  
    "title-numeric-desc": function ( a, b ) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
    }
  } ); 
  
  
  $( "textarea.editor" ).each(function() { addEditorToTextarea($(this).attr('id'),false) });          
}

function set_checkbox_checked(id,checked)
{
  if(checked)
  {
    $('#'+id).attr('checked',true)
    $('#uniform-'+id+' span').addClass('checked');
  }
  else
  {
    $('#'+id).attr('checked',false)
    $('#uniform-'+id+' span').removeClass('checked');
  }
}

function array_remove(arr, item) 
{
    for(var i = arr.length; i--;) {
        if(arr[i] === item) {
            arr.splice(i, 1);
        }
    }
    
    return arr;
}

function appHandleUniformCheckboxes()
{
  var test = $("input[type=checkbox]:not(.toggle), input[type=radio]:not(.toggle, .star)");
  if (test.size() > 0) {
      test.each(function () {
          if ($(this).parents(".checker").size() == 0) {
              $(this).show();
              $(this).uniform();
          }
      });
  }
}

function appHandleUniform()
{
  var test = $("input[type=checkbox]:not(.toggle), input[type=radio]:not(.toggle, .star)");
  if (test.size() > 0) {
      test.each(function () {
          if ($(this).parents(".checker").size() == 0) {
              $(this).show();
              $(this).uniform();
          }
      });
  }
  
 $('.datepicker').datepicker({
              rtl: App.isRTL(),
              autoclose: true,
              format: 'yyyy-mm-dd',
          });
          
 $(".datetimepicker").datetimepicker({
        autoclose: true,
        isRTL: App.isRTL(),
        format: "yyyy-mm-dd hh:ii",
        pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left")
    }); 
    
    
  $( "textarea.editor" ).each(function() { addEditorToTextarea($(this).attr('id'),false) });
  $( "textarea.editor-auto-focus" ).each(function() { addEditorToTextarea($(this).attr('id'),true) });
  
  
  //$( ".auto-focus" ).each(function() { $(this).focusIn();});          
}

function openModalBox(url)
{             
  var $modal = $('#ajax-modal');
    
  // create the backdrop and wait for next modal to be triggered
  $('body').modalmanager('loading');
    
  setTimeout(function(){
      $modal.load(url, '', function(){
      
      //remove autofocus when we edit item
      if(url.search('/edit')>0)
      {
        $('#ajax-modal .autofocus').removeClass('autofocus');                
      }                
     
     /*                         
     if($('#ajax-modal textarea').hasClass('editor') || $('#ajax-modal textarea').hasClass('input-xlarge')  || $('#ajax-modal textarea').hasClass('editor-auto-focus') || $('#ajax-modal div').hasClass('ajax-modal-width-790') 
          )
          
      {        
        width = 790
      }
      else
      {
        width = 590        
      }
      */
      
      width = 790
                
      $modal.modal({width:width});
      
      $("#ajax-modal").draggable({
            handle: ".modal-header,.modal-footer"
        });
              
    });
  }, 1); 
	
}

function openMultipleActionModalBox(url)
{
  if(selected_items.length==0)
  {
    alert(I18NText('Please Select Items'));
    return false;
  }
  else
  {
    openModalBox(url)
  }
}

function setFieldValueById(id,v)
{
  $('#'+id).val(v).change();
}

function set_selected_items()
{
  if(selected_items.length>0)
  {
    $('#selected_items').val(selected_items.toString());
  }  
}

function I18NText(v)
{
  if(I18NJSText[v])
  {
    return I18NJSText[v];
  }
  else
  {
    return v;
  }
}

function droppableOnUpdate(id,url)
{
  data = $('#'+id).nestable('serialize');
   
  if (window.JSON) 
  {
    data = window.JSON.stringify(data);
  } 
  else 
  {
    alert('JSON browser support required for this demo.');
    return false;
  }     
   
  $.ajax({type: "POST",url: url,data: {list:data}});
  
}

function droppableGroupedOnUpdate(url)
{
 
  data_open = $('#nestable_list_open').nestable('serialize');
  data_done = $('#nestable_list_done').nestable('serialize');
  data_closed = $('#nestable_list_closed').nestable('serialize');
   
  if (window.JSON) 
  {
    data_open = window.JSON.stringify(data_open);
    data_done = window.JSON.stringify(data_done);
    data_closed = window.JSON.stringify(data_closed);
  } 
  else 
  {
    alert('JSON browser support required for this demo.');
    return false;
  } 
      
   
  $.ajax({type: "POST",url: url,data: {sorted_items_open:data_open,sorted_items_done:data_done,sorted_items_closed:data_closed}});
  
}


function filter_by_selected(t,ft)
{
  selected_values = '';
  
  $( "."+t+"Filters"+ft).each(function() {
    if($(this).attr('checked'))
    {
      selected_values = selected_values+','+$(this).attr('value');
    }
  });
  
  if(selected_values.length>0)
  {
    selected_values = selected_values.substr(1);
    $('#filter_by_'+t).attr('value',selected_values);
    
    $('#filter_by_'+t+'_form').submit();
  }
  else
  {
    alert(I18NText('Please select items'));
  }
}

function addEditorToTextarea(id,autofocus)
{
  //if(!is_mobile)
  {
    CKEDITOR.config.baseFloatZIndex = 20000;
    CKEDITOR_holders[id] = CKEDITOR.replace(id,{startupFocus:autofocus});//
  
    CKEDITOR_holders[id].on("instanceReady",function() {
      jQuery(window).resize();
  
      $(".cke_button__maximize").bind('click', function() {
      	$('#ajax-modal').css('display','block')
      })
    });
  }    
}

function editor_remove_formatting(id)
{
  html = $.htmlClean($('#'+id).html().replace(/<div><br><\/div>/g,'<div>&nbsp;</div>'), {format:false,allowedTags:["strong","big","b","i","u","strike","hr","div","br","p","ol","ul","li","blockquote","font","img","pre","table","td","th","tr","h1","h2","h3","h4","h5","h6","sub","sup"]});
  $('#'+id).html(html); 
  
  setCursorEndOfContenteditable(document.getElementById(id))   
}

function check_user_form(form_id,url)
{     
  $('#loading').html(I18NText('Loading...'));
  email = $('#users_email').val();      
      
  $.ajax({type: "POST",url: url,data: {email:email},success: function(data) {  
     
    $('#loading').html('');
      
    if(data==1)
    {        
      $('#email_error').html('<div class="error">'+I18NText('Email already exists')+'<br>'+I18NText('You can\'t create user with email:')+' "'+email+'"'+'</div>');                                    
    }
    else
    {      
      $('#email_error').html('');            
      $('#'+form_id).submit();      
    }                              
  }});          
}

function set_tickets_types_by_departmetn_id(department_id)
{    
  if($('#form_tickets_types_id'))
  {
    default_tickets_types_id = $('#form_tickets_types_id').val(); 
  }
  else
  {
    default_tickets_types_id = $('#default_tickets_types_id').val();
  }

  if(department_id>0)
  {     
    if(departments_tickets_types[department_id])
    {
      if(departments_tickets_types[department_id].length>0)
      {
        types_id_list = departments_tickets_types[department_id].split(',');
        
        tickets_options = document.getElementById('tickets_tickets_types_id');
        tickets_options.options.length = 0;
        
        for(i=0;i<types_id_list.length;i++)
        {
          if(tickets_types_list[types_id_list[i]])
          {          
            tickets_options.options[i] = new Option(tickets_types_list[types_id_list[i]], types_id_list[i]);
            
            if(types_id_list[i]==default_tickets_types_id)
            {
              tickets_options.selectedIndex=i;
            }
          }
        }
                
        set_extra_fields_per_group($('#tickets_tickets_types_id').val());
      }         
    }
    else
    {                               
      tickets_options = document.getElementById('tickets_tickets_types_id');
      tickets_options.options.length = 0;
            
      for(i=0;i<tickets_types_by_sort_order.length;i++)
      {                   
        tickets_options.options[i] = new Option(tickets_types_list[tickets_types_by_sort_order[i]], tickets_types_by_sort_order[i]);
        
        if(tickets_types_by_sort_order[i]==default_tickets_types_id)
        {
          tickets_options.selectedIndex=i;
        }
      }            
            
      set_extra_fields_per_group($('#tickets_tickets_types_id').val());
    }
  }
}

function set_extra_fields_per_group(id)
{  
  if(extra_fields_per_group[id])
  {    
    $( ".extra_field_row" ).each(function() { 
      $(this).css('display','none')
      
      efid = $(this).attr('id').replace('extra_field_row_','')
            
      if($('#extra_fields_'+efid).hasClass('required'))
      {      
        $('#extra_fields_'+efid).removeClass('required').addClass('required_tmp');
      }                
       
    });
    
    if(extra_fields_per_group[id]!='set_off_extra_fields')
    {
      list = extra_fields_per_group[id].split(',');
      
      for(i=0;i<list.length;i++)
      {        
        $('#extra_field_row_'+list[i]).css('display','');        
        
        if($('#extra_fields_'+list[i]).hasClass('required_tmp'))
        {
          $('#extra_fields_'+list[i]).removeClass('required_tmp').addClass('required');
        }
      }       
    } 
  }
  else
  {
    $( ".extra_field_row" ).each(function() { 
      $(this).css('display','')
      
      efid = $(this).attr('id').replace('extra_field_row_','')
      
      if($('#extra_fields_'+efid).hasClass('required_tmp'))
      {
        $('#extra_fields_'+efid).removeClass('required_tmp').addClass('required');
      }
         
    });
  }
  
  jQuery(window).resize();
}

function addAttachment()
{
  $('.attachedFile').clone().appendTo('#attachmentsList').removeClass('attachedFile');
  
  bindDeleteLinkToAttachments();
}

function deleteAttachments(id,url)
{
  if(confirm(I18NText('Are you sure?')))
  {
    $('#attachedFile'+id).fadeOut();
    
    $.ajax({url: url});
  }
  
  return false;
}

function bindDeleteLinkToAttachments()
{
  $('.attachmentBlock .delete_attachment_link').bind('click', function() {           
      p = $(this).parent().parent(); 
      p.fadeOut()
      $('input',p).val('');        
      $('textarea',p).val('');
  });
}

function updateUserRoles(field)
{
  id = field.attr('id').replace('projects_team_','');
  
  if(field.attr('checked'))
  {
   $('#project_roles_'+id).css('display','');
  }
  else
  {
   $('#project_roles_'+id).css('display','none');
   $('#project_roles_'+id).val('');
  }
}

function checkAllInContainer(id)
{
  $("#"+id+" input[type=checkbox]").each(function() { 
    $(this).attr('checked',true)
    $('#uniform-'+ $(this).attr('id')+' span').addClass('checked');  
  });
  
  return false;    
}

function hasCheckedInContainer(id)
{
  is_checked = false;
  
  $("#"+id+" input[type=checkbox]").each(function() {     
    if($(this).is(':checked'))
    {    
      is_checked = true;
    }  
  });
  
  
  if(!is_checked)
  {
    alert(I18NText('Please Select Items'));
    return false;
  }
  else
  {
    return true;
  }
  
      
}

function load_form_by_projects_id(container,url,projects_id)
{
  $('#'+container).html(I18NText('Loading...'));
  
  if(projects_id>0)
  {    
    $('#'+container).load(url,{projects_id:projects_id},
      function(response, status, xhr) {
        if (status == "success") {
          jQuery(window).resize();  
        }
      }
    );  
  }
  else
  {
    $('#'+container).html('');
  }
}

function load_form_by_report_type(container,url,report_type)
{
  $('#'+container).html(I18NText('Loading...'));
      
  $('#'+container).load(url,{report_type:report_type},
    function(response, status, xhr) {
      if (status == "success") {
        jQuery(window).resize();  
      }
    }
  );  

}

function userPattern(id,field_id)
{
  name = $('#pattern_name_'+id).val(); 
  desc = $('#pattern_desc_'+id).val();
  
  if(desc.length>0)
  {    
    $('#'+field_id).val($('#'+field_id+'_nicEditor').html()+desc+'<br>')
    $('#'+field_id+'_nicEditor').focus().html($('#'+field_id+'_nicEditor').html()+desc+'<br>');        
  }
  else
  {
    $('#'+field_id).val($('#'+field_id+'_nicEditor').html()+name+'<br>')
    $('#'+field_id+'_nicEditor').focus().html($('#'+field_id+'_nicEditor').html()+name+'<br>');
  }  
    
  setCursorEndOfContenteditable(document.getElementById(field_id+'_nicEditor'))
}

function setCursorEndOfContenteditable(contentEditableElement)
{
    var range,selection;
    if(document.createRange)//Firefox, Chrome, Opera, Safari, IE 9+
    {
        range = document.createRange();//Create a range (a range is a like the selection but invisible)
        range.selectNodeContents(contentEditableElement);//Select the entire contents of the element with the range
        range.collapse(false);//collapse the range to the end point. false means collapse to end rather than the start
        selection = window.getSelection();//get the selection object (allows you to change selection)
        selection.removeAllRanges();//remove any selections already made
        selection.addRange(range);//make the range you have just created the visible selection
    }
    else if(document.selection)//IE 8 and lower
    { 
        range = document.body.createTextRange();//Create a range (a range is a like the selection but invisible)
        range.moveToElementText(contentEditableElement);//Select the entire contents of the element with the range
        range.collapse(false);//collapse the range to the end point. false means collapse to end rather than the start
        range.select();//Select the range (make it the visible selection
    }
}

function set_off_extra_fields_list()
{
  if($('#extra_fields_list').css('display')=='none')
  {
    $('#extra_fields_list').css('display','block');    
  }
  else
  {
    $('#extra_fields_list').css('display','none');
  }  
  
}

function expand_dashboard_report(report,url)
{  
  if($('#'+report).css('display')=='block')
  {         
    $.ajax({type: "POST",url: url,data: {report:report,type:'hide'}});   
  }
  else
  {    
    $.ajax({type: "POST",url: url,data: {report:report,type:'show'}});
  }
}

function check_event_repeat_type(type)
{
  if(type=='weekly')
  {
    $('#events_repeat_days_tr').css('display','');
  }
  else
  {
    $('#events_repeat_days_tr').css('display','none');
  }
}

function time_report_export(form_id, type)
{
  $('#format','#'+form_id).val(type); 
  $('#'+form_id).submit(); 
  return false;
}

function removeRelated(hide_id,url)
{
  if(confirm(I18NText('Ary you sure?')))
  {
    $('#'+hide_id).fadeOut();
    
    $.ajax({type: "POST",url: url});
  }
}

function copyToRelated(form_name,type,url_copy, url_preview)
{
  if(type=='name')
  {       
    $('#'+form_name+'_name').val($('#item_name').val());  
  }
  
  if(type=='description')
  {           
    field_id =form_name+'_description';
         
    CKEDITOR_holders[field_id].insertHtml($('#item_description').val());       
  }
  
  if(type=='attachments')
  { 
    $.ajax({type: "POST",
      url: url_copy,
      data: {attachments:$('#item_attachments').val()},
      success: function(data) { 
        $("#attachmentsList").load(url_preview);
      } 
    });
  }
}

function show_original_text(id,v)
{
  $(id).val(v);
  
  if($(id+'_nicEditor'))
  {
    $(id+'_nicEditor').html(v);
  }
}

function SelectTextInElement(element) 
{
  var doc = document;
  var text = document.getElementById(element);
  
   if (doc.body.createTextRange) { // ms
      var range = doc.body.createTextRange();
      range.moveToElementText(text);
      range.select();
  } else if (window.getSelection) { // moz, opera, webkit
      var selection = window.getSelection();            
      var range = doc.createRange();
      range.selectNodeContents(text);
      selection.removeAllRanges();
      selection.addRange(range);
  }
}



