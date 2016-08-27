jQuery(function($) {
	var active_class = 'active';
	$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
		var th_checked = this.checked;//checkbox inside "TH" table header
		
		$(this).closest('table').find('tbody > tr').each(function(){
			var row = this;
			if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
			else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
		});
	});
});

function assigntask(company_id, fl, source, assessor_id)
{
	document.frm.company_id.value = company_id;
	document.frm.id.value = assessor_id;
//	document.frm.source.value = source;
	document.frm.action = fl;
	document.frm.target = '_self';
	document.frm.submit();
}

function edit(id, fl)
{
	document.frm.id.value = id;
	document.frm.action = fl;
	document.frm.target = '_self';
	document.frm.submit();
}

function filldata(id, pid, fl)
{
	document.frm.id.value = id;
	document.frm.pid.value = pid;
	document.frm.action = fl;
	document.frm.target = '_self';
	document.frm.submit();	
}

function report(id, fl)
{
	document.frm.id.value = id;
	document.frm.action = fl;
	document.frm.target = '_self';
	document.frm.submit();
}

function cancel(_script)
{
	document.frm.action = _script;
	document.frm.submit();
}

function dochkall(frm)
{
	for (i=0; i<frm.elements.length; i++)
	{
		var e = frm.elements[i];
		if ( e.name == "removeid[]" ) { e.checked = frm.chkall.checked; }
	}
}

function dochkact(frm)
{
	for (i=0; i<frm.elements.length; i++)
	{
		var e = frm.elements[i];
		if ( e.name == "actvid[]" ) { e.checked = frm.chkact.checked; }
	}
}

function delconfirm(frm)
{
	delno = 0;
	for (i=0; i<frm.elements.length; i++)
	{
		var e = frm.elements[i];
		if ( e.name == "removeid[]" && e.checked ) { delno++; }
	}
	if ( delno == 0 ) { alert("You must select atleast one item to delete"); }
	else
	{
		if ( confirm("Are you sure delete selected item(s)") ) { frm.task.value = 'delete'; frm.submit(); }
	}
}

function sortit(fld, seq)
{
	document.frm.ob.value = fld;
	document.frm.ot.value = seq;
	document.frm.submit();
}
/*function added on date 17-3-15 to link group members page from groups listing page*/
function list_group_members(id, user_group_name, company_id){
	document.frm.user_group_id.value = id;
	document.frm.company_id.value = company_id;
	document.frm.user_group_name.value = user_group_name;
	document.frm.action = 'users.php';
	document.frm.target = '_self';
	document.frm.submit();
}
function edit_user(id, user_group_id, user_group_name, editscript){
	document.frm.id.value = id;
	document.frm.user_group_id.value = user_group_id;
	document.frm.user_group_name.value = user_group_name;
	document.frm.company_id.value = company_id;
	document.frm.action = editscript;
	document.frm.target = '_self';
	document.frm.submit();
}
function edit_view(id, fl)
{
	if( document.getElementById("show_"+id) ){
		document.frm.show_type.value = $("#show_"+id).val();
	}
	document.frm.id.value = id;
	document.frm.action = fl;
	document.frm.target = '_self';
	document.frm.submit();
}
function edit_subsidiary(parent_id, id, fl)
{
	document.frm.parent_id.value = parent_id;
	document.frm.id.value = id;
	document.frm.action = fl;
	document.frm.target = '_self';
	document.frm.submita
}
function startwizard(company_id, f2){
	if(f2 == 'v31_'){
		var form_action = '/execsumm/assessment-timeframe.php';
	}
	if(f2 == 'v32_'){
		var form_action = '/execsummv32/assessment-timeframe.php';
	}
	document.frm.id.value 		= company_id;
	document.frm.action 		= form_action;
	document.frm.target 		= '_self';
	document.frm.submit();
}
