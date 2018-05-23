jQuery(document).ready(function($) {
	
	
	jQuery(document).on("click", ".ubp-appo-change-status", function(e) {
			
			e.preventDefault();	
			jQuery("#bup-spinner").show();	
			
			
			var appointment_id = jQuery(this).attr("appointment-id");			
			var appointment_status =  jQuery(this).attr("appointment-status");
			var bup_type =  jQuery(this).attr("bup-type");	
			var bup_status = jQuery(this).attr("bup-status");		
			
    		jQuery.ajax({
					type: 'POST',
					url: ajaxurl,
					data: {"action": "bup_update_appointment_status",
					"appointment_id": appointment_id,
					"appointment_status": appointment_status},
					
					success: function(data){					
												
						//reload appointment list						
						
						jQuery.ajax({
								type: 'POST',
								url: ajaxurl,
								data: {"action": "bup_get_appointments_quick",
								"status": bup_status,
								"type": bup_type},
								
								success: function(data){					
															
									jQuery("#bup-appointment-list" ).html( data );
									$fullCalendar.fullCalendar( 'refetchEvents' );													
															
									
								}
							});
						
												
						
						}
				});
			
			
			 // Cancel the default action
			
    		e.preventDefault();
			 
				
    });
	
	
	
	
	
	jQuery(document).on("click", ".bup-appointment-edit-module", function(e) {
			
			e.preventDefault();	
			jQuery("#bup-spinner").show();				
			
			var appointment_id = jQuery(this).attr("appointment-id");		
			bup_edit_appointment_inline(appointment_id,null,'no');		
			
    		e.preventDefault();
			 
				
    });
	
	jQuery(document).on("click", ".bup-appointment-delete-module", function(e) {
			
			e.preventDefault();	
			
			
			if (confirm(BuproL10n.are_you_sure)) {
				
				jQuery("#bup-spinner").show();				
				
				var appointment_id = jQuery(this).attr("appointment-id");	
					
				jQuery.ajax({
						type: 'POST',
						url: ajaxurl,
						data: {"action": "bup_delete_appointment",
						"appointment_id": appointment_id},
						
						success: function(data){	
						
						window.location.reload();				
													
												
													
							
							}
					});	
				
				
				}	
			
    		e.preventDefault();
			 
				
    });
	
	
	jQuery(document).on("click", ".ubp-payment-change-status", function(e) {
			
			e.preventDefault();	
			jQuery("#bup-spinner").show();				
			
			var payment_id = jQuery(this).attr("payment-id");			
			var order_status =  jQuery(this).attr("order-status");
			var bup_type =  jQuery(this).attr("bup-type");	
			var bup_status = jQuery(this).attr("bup-status");		
			
    		jQuery.ajax({
					type: 'POST',
					url: ajaxurl,
					data: {"action": "bup_update_payment_status_inline",
					"payment_id": payment_id,
					"order_status": order_status},
					
					success: function(data){					
												
						jQuery.ajax({
								type: 'POST',
								url: ajaxurl,
								data: {"action": "bup_get_appointments_quick",
								"status": bup_status,
								"type": bup_type},
								
								success: function(data){				
															
									jQuery("#bup-appointment-list" ).html( data );
									$fullCalendar.fullCalendar( 'refetchEvents' );								
									
								}
							});
						
												
						
						}
				});
			
			
    		e.preventDefault();
			 
				
    });
	
	
	jQuery(document).on("click", ".bup-adm-see-appoint-list-quick", function(e) {
			
			e.preventDefault();	
			jQuery("#bup-spinner").show();	
			
			
			var bup_status = jQuery(this).attr("bup-status");			
			var bup_type =  jQuery(this).attr("bup-type");	
			
			if(bup_type=='bystatus' && bup_status==0){jQuery('#bup-appointment-list').dialog('option', 'title', BuproL10n.msg_quick_list_pending_appointments);}
			
			if(bup_type=='bystatus' && bup_status==2){jQuery('#bup-appointment-list').dialog('option', 'title', BuproL10n.msg_quick_list_cancelled_appointments);}
			
			if(bup_type=='bystatus' && bup_status==3){jQuery('#bup-appointment-list').dialog('option', 'title', BuproL10n.msg_quick_list_noshow_appointments);}
			
			if(bup_type=='byunpaid'){jQuery('#bup-appointment-list').dialog('option', 'title', BuproL10n.msg_quick_list_unpaid_appointments);}
			
    		jQuery.ajax({
					type: 'POST',
					url: ajaxurl,
					data: {"action": "bup_get_appointments_quick",
					"status": bup_status,
					"type": bup_type},
					
					success: function(data){					
												
						jQuery("#bup-appointment-list" ).html( data );	
						jQuery("#bup-appointment-list" ).dialog( "open" );	
						jQuery("#bup-spinner").hide();	
						
												
						
						}
				});
			
			
			
    		e.preventDefault();
			 
				
    });
	
		
	/* check appointments */	
	jQuery( "#bup-appointment-list" ).dialog({
			autoOpen: false,			
			width: '400', //   			
			responsive: true,
			fluid: true, //new option
			modal: true,
			buttons: {			
			
			"Ok": function() {				
				
				jQuery( this ).dialog( "close" );
			}
			
			
			},
			close: function() {
			
			
			}
	});
	
	jQuery(document).on("click", "#bup-adm-confirm-reschedule-btn", function(e) {
			
			e.stopPropagation();	
			
			var date_to_book =  jQuery("#bup_booking_date").val();
			var notify_client =  jQuery("#bup_notify_client_reschedule").val();
			var service_and_staff_id =  jQuery("#bup_service_staff").val();
			var time_slot =  jQuery("#bup_time_slot").val();
			var booking_id =  jQuery("#bup_appointment_id").val();		
			
			if(time_slot==''){alert(err_message_time_slot); return;}			
			if(jQuery("#bup-category").val()==''){alert(err_message_service); return;}
			if(jQuery("#bup-start-date").val()==''){alert(err_message_start_date); return;}
			
			jQuery("#bup-steps-cont-res").html(message_wait_availability);
					
				
			jQuery.ajax({
					type: 'POST',
					url: ajaxurl,
					data: {"action": "bup_appointment_confirm_reschedule", 
						   "bup_booking_date": date_to_book,
						   "bup_service_staff": service_and_staff_id,
						   "bup_time_slot": time_slot,
						   "booking_id": booking_id,
						   "notify_client": notify_client},
					
					success: function(data){						
						
						var res = data;							
						jQuery("#bup-steps-cont-res-edit").html(res);						
						$fullCalendar.fullCalendar( 'refetchEvents' );
						
						jQuery("#bup-confirmation-cont" ).html( gen_message_rescheduled_conf );
						jQuery("#bup-confirmation-cont" ).dialog( "open" );
						
										
											

						}
				});				
			
				
			
    		e.stopPropagation(); 
				
    });
	
	jQuery(document).on("click", "#bup-adm-update-appoint-status-btn", function(e) {
			
			e.preventDefault();		
				
			var appointment_id =  jQuery(this).attr("appointment-id");
			jQuery("#bup-spinner").show();						
				
			jQuery.ajax({
					type: 'POST',
					url: ajaxurl,
					data: {"action": "bup_appointment_status_options", 
						   "appointment_id": appointment_id
						  },
					
					success: function(data){						
						
												
						jQuery("#bup-appointment-change-status" ).html( data );
						jQuery("#bup-appointment-change-status" ).dialog( "open" );						
						jQuery("#bup-spinner").hide();
						
										
											

						}
				});				
			
				
			
    		e.stopPropagation(); 
				
    });
	
	jQuery(document).on("click", "#bup-btn-calendar-filter", function(e) {
			
			e.preventDefault();		
			jQuery("#bup-spinner").show();
			$fullCalendar.fullCalendar( 'refetchEvents' );	
			
    		
				
    });	
	
	
	jQuery(document).on("click", ".bup-adm-change-appoint-status-opt", function(e) {
			
			e.preventDefault();		
				
			var appointment_id =  jQuery(this).attr("appointment-id");
			var appointment_status =  jQuery(this).attr("appointment-status");
			
			jQuery("#bup-spinner").show();						
				
			jQuery.ajax({
					type: 'POST',
					url: ajaxurl,
					data: {"action": "bup_update_appo_status_ed", 
						   "appointment_id": appointment_id,
						   "appointment_status": appointment_status
						  },
					
					success: function(data){			
							
					    jQuery("#bup-app-status" ).html( data );
						jQuery("#bup-spinner").hide();	
						$fullCalendar.fullCalendar( 'refetchEvents' );	
						jQuery("#bup-appointment-change-status" ).dialog( "close" );											
										
										
											

						}
				});				
			
				
			
    		e.stopPropagation(); 
				
    });	
	/* open new appointment */	
	jQuery( "#bup-appointment-new-box" ).dialog({
			autoOpen: false,			
			width: '780', // overcomes width:'auto' and maxWidth bug
   			
			responsive: true,
			fluid: true, //new option
			modal: true,
			buttons: {			
			
			"Cancel": function() {	
			
				jQuery("#bup-appointment-new-box" ).html( '' );								
				jQuery( this ).dialog( "close" );
			},
			
			"Create": function() {				
				
				var bup_time_slot=   jQuery("#bup_time_slot").val();
				var bup_booking_date=   jQuery("#bup_booking_date").val();
				var bup_client_id=   jQuery("#bup_client_id").val();
				var bup_service_staff=   jQuery("#bup_service_staff").val();
				var bup_notify_client=   jQuery("#bup_notify_client").val();
				
				
				if(jQuery("#bup-category").val()==''){alert(err_message_service); return;}
				if(jQuery("#bup-start-date").val()==''){alert(err_message_start_date); return;}
				if(bup_client_id==''){alert(err_message_client); return;}	
				if(bup_time_slot==''){alert(err_message_time_slot); return;}					
				
				jQuery.ajax({
						type: 'POST',
						url: ajaxurl,
						data: {"action": "bup_admin_new_appointment_confirm", 
						       "bup_time_slot": bup_time_slot,
							   "bup_booking_date": bup_booking_date,
							   "bup_client_id": bup_client_id,
							   "bup_service_staff": bup_service_staff,
							   "bup_notify_client": bup_notify_client },
						
						success: function(data){
							
							$fullCalendar.fullCalendar( 'refetchEvents' );
							
							jQuery("#bup-appointment-new-box" ).html( '' );													
							jQuery("#bup-appointment-new-box" ).dialog( "close" );
							
							//edit 
							
							var res =jQuery.parseJSON(data);				
							
							bup_edit_appointment_inline(res.booking_id, res.content, 'yes');
							
					
							}
					});
					
					
				
			
			}
			
			
			},
			close: function() {
				
				jQuery("#bup-appointment-new-box" ).html( '' );	
			
			
			}
	});
	
	
	/* appointment status */	
	jQuery( "#bup-appointment-change-status" ).dialog({
			autoOpen: false,			
			width: '400', // overcomes width:'auto' and maxWidth bug
   			
			responsive: true,
			fluid: true, //new option
			modal: true,
			buttons: {			
			
			"Cancel": function() {	
			
				jQuery("#bup-appointment-change-status" ).html( '' );								
				jQuery( this ).dialog( "close" );
			}			
			
			},
			close: function() {
				
				jQuery("#bup-appointment-new-box" ).html( '' );	
			
			
			}
	});

//jQuery(function ($) {

    var $fullCalendar = $('#full_calendar_wrapper .bup-calendar-element'),
        $tabs         = $('li.ab-calendar-tab'),
        $staff        = $('input.ab-staff-filter'),
        $showAll      = $('input#ab-filter-all-staff'),
        firstHour     = new Date().getHours(),
        $staffButton  = $('#ab-staff-button'),
        staffMembers  = [],
        staffIds      = getCookie('bup_cal_st_ids'),
        tabId         = getCookie('bup_cal_tab_id'),
        lastView      = getCookie('bup_cal_view'),
        views         = 'month,agendaWeek,agendaDay,multiStaffDay';

    if (views.indexOf(lastView) == -1) {
        lastView = 'agendaWeek';
    }
    // Init tabs and staff member filters.
    if (staffIds === null) {
        $staff.each(function(index, value){
            this.checked = true;
            $tabs.filter('[data-staff_id=' + this.value + ']').show();
        });
    } else if (staffIds != '') {
        $.each(staffIds.split(','), function (index, value){
            $staff.filter('[value=' + value + ']').prop('checked', true);
            $tabs.filter('[data-staff_id=' + value + ']').show();
        });
    } else {
       // $('.dropdown-toggle').dropdown('toggle');
    }

    $tabs.filter('[data-staff_id=' + tabId + ']').addClass('active');
    if ($tabs.filter('li.active').length == 0) {
        $tabs.eq(0).addClass('active').show();
        $staff.filter('[value=' + $tabs.eq(0).data('staff_id') + ']').prop('checked', true);
    }
   // updateStaffButton();

    // Init FullCalendar.
    $fullCalendar.fullCalendar({
        // General Display.
        firstDay: BuproL10n.startOfWeek,
        header: {
            left: 'prev,next today',
            center: 'title',
            right: views
        },
        height: heightFC(),
        // Views.
        defaultView: lastView,
        scrollTime: firstHour+':00:00',
        views: {
            agendaWeek: {
                columnFormat: 'ddd, D'
            },
            multiStaffDay: {
                staffMembers: staffMembers
            }
        },
        eventBackgroundColor: 'white',
        // Agenda Options.
        allDaySlot:   false,
        allDayText:   BuproL10n.allDay,
        axisFormat:   BuproL10n.mjsTimeFormat,
        slotDuration: BuproL10n.slotDuration,
        // Text/Time Customization.
        timeFormat:   BuproL10n.mjsTimeFormat,
        displayEventEnd: true,
        buttonText : {
            today: BuproL10n.today,
            month: BuproL10n.month,
            week:  BuproL10n.week,
            day:   BuproL10n.day
        },
        monthNames:      BuproL10n.longMonths,
        monthNamesShort: BuproL10n.shortMonths,
        dayNames:        BuproL10n.longDays,
        dayNamesShort:   BuproL10n.shortDays,
        // Event Dragging & Resizing.
        editable: false,
        // Event Data.
        eventSources: [{
            url: ajaxurl,
            data: {
                action    : 'get_all_staff_appointments',
                staff_id : function() {
                         return jQuery("#bup-staff-calendar").val();
                },
				
				location_id :  function() {
                         return jQuery("#bup-location-calendar").val();
                }
            }
        }],
		
        // Event Rendering.
        eventRender : function(calEvent, $event) {
            var body = '<div class="fc-service-name">' + calEvent.title + '<i class="delete-event icon-rt-bp fa fa-trash-o"></i></div>';

            if (calEvent.desc) {
                body += calEvent.desc;
            }

            $event.find('.fc-title').html(body);

            $event.find('i.delete-event').on('click', function(e) {
                e.stopPropagation();
                if (confirm(BuproL10n.are_you_sure)) {
                    $.post(ajaxurl, {'action' : 'bup_delete_appointment', 'appointment_id' : calEvent.id }, function () {
                        $fullCalendar.fullCalendar('removeEvents', calEvent.id);
						
                    });
                }
            });
        },
		
        eventAfterRender : function(calEvent, $calEventList, calendar) {
            $calEventList.each(function () {
                var $calEvent   = $(this);
                var titleHeight = $calEvent.find('.fc-title').height();
                var origHeight  = $calEvent.height();

                if ( origHeight < titleHeight ) {
                    var $info   = $('<i class="icon-rt fa fa-trash-o"></i>');
                    var $delete = $('.delete-event', $calEvent);

                    $delete.hide();
                    $('.fc-content', $calEvent).append($info);
                    $('.fc-content', $calEvent).append($delete);

                    var z_index = $calEvent.zIndex();
                    // Mouse handlers.
                    $info.on('mouseenter', function () {
                        $calEvent.css({height: (titleHeight + 30), 'z-index': 64});
                        $info.hide();
                        $delete.show();
                        $calEvent.removeClass('fc-short');
                    });
                    $calEvent.on('mouseleave', function () {
                        $calEvent.css({height: origHeight, 'z-index': z_index});
                        $delete.hide();
                        $info.show();
                        $calEvent.addClass('fc-short');
                    });
                }
            });
        },
		
        // Clicking & Hovering.
        dayClick: function(date, jsEvent, view) 
		{
            var staff_id, visible_staff_id;
			
            if (view.type == 'multiStaffDay') 
			{
                var cell = view.coordMap.getCell(jsEvent.pageX, jsEvent.pageY);
                var staffMembers = view.opt('staffMembers');
                staff_id = staffMembers[cell.col].id;
                visible_staff_id = 0;
            } else {
                staff_id = visible_staff_id = $tabs.filter('.active').data('staff_id');
            }
			
			//alert(date);

            		
			
        },
		
        eventClick: function(calEvent, jsEvent, view) {
			
            var visible_staff_id;
            if (view.type == 'multiStaffDay') 
			{
                visible_staff_id = 0;
            } else {
                visible_staff_id = calEvent.staffId;
            }
			
			//alert(calEvent.id);
			
			bup_edit_appointment_inline(calEvent.id,null,'no');

            /*showAppointmentDialog(
                calEvent.id,
                calEvent.staffId,
                calEvent.start,
                calEvent.end,
				
                function(event) {
                    if (visible_staff_id == event.staffId || visible_staff_id == 0) {
                        // Update event in calendar.
                        jQuery.extend(calEvent, event);
                        $fullCalendar.fullCalendar('updateEvent', calEvent); 
                    } else {
                        // Switch to the event owner tab.
                        jQuery('li[data-staff_id=' + event.staffId + ']').click();
                    }
                }
            );*/
        },
        loading: function (bool) {
            bool ? jQuery("#bup-spinner").show() : jQuery("#bup-spinner").hide();
        },
        viewRender: function(view, element){
            setCookie('bup_cal_view',view.type);
        }
    });

    $('.fc-agendaDay-button').addClass('fc-corner-right');
    if ($tabs.filter('.active').data('staff_id') == 0) {
        $('.fc-agendaDay-button').hide();
    } else {
        $('.fc-multiStaffDay-button').hide();
    }

    // Init date picker for fast navigation in FullCalendar.
    var $fcDatePicker = $('<input type=hidden />');
    $('.fc-toolbar .fc-center h2').before($fcDatePicker).on('click', function() {
        $fcDatePicker.datepicker('setDate', $fullCalendar.fullCalendar('getDate').toDate()).datepicker('show');
    });
	
    $fcDatePicker.datepicker({
        dayNamesMin     : BuproL10n.shortDays,
        monthNames      : BuproL10n.longMonths,
        monthNamesShort : BuproL10n.shortMonths,
        firstDay        : BuproL10n.startOfWeek,
        beforeShow: function(input, inst){
            inst.dpDiv.queue(function() {
                inst.dpDiv.css({marginTop: '35px'});
                inst.dpDiv.dequeue();
            });
        },
        onSelect: function(dateText, inst) {
            var d = new Date(dateText);
            $fullCalendar.fullCalendar('gotoDate', d);
            if( $fullCalendar.fullCalendar('getView').type != 'agendaDay' &&
                $fullCalendar.fullCalendar('getView').type != 'multiStaffDay' ){
                $fullCalendar.find('.fc-day').removeClass('ab-fcday-active');
                $fullCalendar.find('.fc-day[data-date="' + moment(d).format('YYYY-MM-DD') + '"]').addClass('ab-fcday-active');
            }
        },
        onClose: function(dateText, inst) {
            inst.dpDiv.queue(function() {
                inst.dpDiv.css({marginTop: '0'});
                inst.dpDiv.dequeue();
            });
        }
    });

    $(window).on('resize', function() {
        $fullCalendar.fullCalendar('option', 'height', heightFC());
    });

    

    $('.dropdown-menu').on('click', function (e) {
        e.stopPropagation();
    });

    /**
     * On show all staff checkbox click.
     */
    $showAll.on('change', function () {
        $tabs.filter('[data-staff_id!=0]').toggle(this.checked);
        $staff
            .prop('checked', this.checked)
            .filter(':first').triggerHandler('change');
    });

    /**
     * On staff checkbox click.
     */
    $staff.on('change', function (e) {
        updateStaffButton();

        $tabs.filter('[data-staff_id=' + this.value + ']').toggle(this.checked);
        if ($tabs.filter(':visible.active').length == 0 ) {
            $tabs.filter(':visible:first').triggerHandler('click');
        } else if ($tabs.filter('.active').data('staff_id') == 0) {
            var view = $fullCalendar.fullCalendar('getView');
            if (view.type == 'multiStaffDay') {
                view.displayView($fullCalendar.fullCalendar('getDate'));
            }
            $fullCalendar.fullCalendar('refetchEvents');
        }
    });

    function updateStaffButton() {
        $showAll.prop('checked', $staff.filter(':not(:checked)').length == 0);

        // Update staffMembers array.
        var ids = [];
        staffMembers.length = 0;
        $staff.filter(':checked').each(function() {
            staffMembers.push({id: this.value, name: this.getAttribute('data-staff_name')});
            ids.push(this.value);
        });
        setCookie('bup_cal_st_ids', ids);

        // Update button text.
        var number = $staff.filter(':checked').length;
        if (number == 0) {
            $staffButton.text(BuproL10n.noStaffSelected);
        } else if (number == 1) {
            $staffButton.text($staff.filter(':checked').data('staff_name'));
        } else {
            $staffButton.text(number + '/' + $staff.length);
        }
    }

    /**
     * Set cookie.
     *
     * @param key
     * @param value
     */
    function setCookie(key, value) {
        var expires = new Date();
        expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
        document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
    }

    /**
     * Get cookie.
     *
     * @param key
     * @return {*}
     */
    function getCookie(key) {
        var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
        return keyValue ? keyValue[2] : null;
    }

    /**
     * Calculate height of FullCalendar.
     *
     * @return {number}
     */
    function heightFC() {
        var window_height           = $(window).height(),
            wp_admin_bar_height     = $('#wpadminbar').height(),
            ab_calendar_tabs_height = $('#full_calendar_wrapper .tabbable').outerHeight(true),
            height_to_reduce        = wp_admin_bar_height + ab_calendar_tabs_height,
            $wrap                   = $('#wpbody-content .wrap');

        if ($wrap.css('margin-top')) {
            height_to_reduce += parseInt($wrap.css('margin-top').replace('px', ''), 10);
        }

        if ($wrap.css('margin-bottom')) {
            height_to_reduce += parseInt($wrap.css('margin-bottom').replace('px', ''), 10);
        }

        var res = window_height - height_to_reduce - 130;

        return res > 620 ? res : 620;
    }
	
	

});