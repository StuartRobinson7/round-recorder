/*!
 * Datepicker for Bootstrap v1.6.4 (https://github.com/eternicode/bootstrap-datepicker)
 *
 * Copyright 2012 Stefan Petre
 * Improvements by Andrew Rowls
 * Licensed under the Apache License v2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a,b){function c(){return new Date(Date.UTC.apply(Date,arguments))}function d(){var a=new Date;return c(a.getFullYear(),a.getMonth(),a.getDate())}function e(a,b){return a.getUTCFullYear()===b.getUTCFullYear()&&a.getUTCMonth()===b.getUTCMonth()&&a.getUTCDate()===b.getUTCDate()}function f(a){return function(){return this[a].apply(this,arguments)}}function g(a){return a&&!isNaN(a.getTime())}function h(b,c){function d(a,b){return b.toLowerCase()}var e,f=a(b).data(),g={},h=new RegExp("^"+c.toLowerCase()+"([A-Z])");c=new RegExp("^"+c.toLowerCase());for(var i in f)c.test(i)&&(e=i.replace(h,d),g[e]=f[i]);return g}function i(b){var c={};if(q[b]||(b=b.split("-")[0],q[b])){var d=q[b];return a.each(p,function(a,b){b in d&&(c[b]=d[b])}),c}}var j=function(){var b={get:function(a){return this.slice(a)[0]},contains:function(a){for(var b=a&&a.valueOf(),c=0,d=this.length;d>c;c++)if(this[c].valueOf()===b)return c;return-1},remove:function(a){this.splice(a,1)},replace:function(b){b&&(a.isArray(b)||(b=[b]),this.clear(),this.push.apply(this,b))},clear:function(){this.length=0},copy:function(){var a=new j;return a.replace(this),a}};return function(){var c=[];return c.push.apply(c,arguments),a.extend(c,b),c}}(),k=function(b,c){a(b).data("datepicker",this),this._process_options(c),this.dates=new j,this.viewDate=this.o.defaultViewDate,this.focusDate=null,this.element=a(b),this.isInput=this.element.is("input"),this.inputField=this.isInput?this.element:this.element.find("input"),this.component=this.element.hasClass("date")?this.element.find(".add-on, .input-group-addon, .btn"):!1,this.hasInput=this.component&&this.inputField.length,this.component&&0===this.component.length&&(this.component=!1),this.isInline=!this.component&&this.element.is("div"),this.picker=a(r.template),this._check_template(this.o.templates.leftArrow)&&this.picker.find(".prev").html(this.o.templates.leftArrow),this._check_template(this.o.templates.rightArrow)&&this.picker.find(".next").html(this.o.templates.rightArrow),this._buildEvents(),this._attachEvents(),this.isInline?this.picker.addClass("datepicker-inline").appendTo(this.element):this.picker.addClass("datepicker-dropdown dropdown-menu"),this.o.rtl&&this.picker.addClass("datepicker-rtl"),this.viewMode=this.o.startView,this.o.calendarWeeks&&this.picker.find("thead .datepicker-title, tfoot .today, tfoot .clear").attr("colspan",function(a,b){return parseInt(b)+1}),this._allow_update=!1,this.setStartDate(this._o.startDate),this.setEndDate(this._o.endDate),this.setDaysOfWeekDisabled(this.o.daysOfWeekDisabled),this.setDaysOfWeekHighlighted(this.o.daysOfWeekHighlighted),this.setDatesDisabled(this.o.datesDisabled),this.fillDow(),this.fillMonths(),this._allow_update=!0,this.update(),this.showMode(),this.isInline&&this.show()};k.prototype={constructor:k,_resolveViewName:function(a,c){return 0===a||"days"===a||"month"===a?0:1===a||"months"===a||"year"===a?1:2===a||"years"===a||"decade"===a?2:3===a||"decades"===a||"century"===a?3:4===a||"centuries"===a||"millennium"===a?4:c===b?!1:c},_check_template:function(c){try{if(c===b||""===c)return!1;if((c.match(/[<>]/g)||[]).length<=0)return!0;var d=a(c);return d.length>0}catch(e){return!1}},_process_options:function(b){this._o=a.extend({},this._o,b);var e=this.o=a.extend({},this._o),f=e.language;q[f]||(f=f.split("-")[0],q[f]||(f=o.language)),e.language=f,e.startView=this._resolveViewName(e.startView,0),e.minViewMode=this._resolveViewName(e.minViewMode,0),e.maxViewMode=this._resolveViewName(e.maxViewMode,4),e.startView=Math.min(e.startView,e.maxViewMode),e.startView=Math.max(e.startView,e.minViewMode),e.multidate!==!0&&(e.multidate=Number(e.multidate)||!1,e.multidate!==!1&&(e.multidate=Math.max(0,e.multidate))),e.multidateSeparator=String(e.multidateSeparator),e.weekStart%=7,e.weekEnd=(e.weekStart+6)%7;var g=r.parseFormat(e.format);e.startDate!==-(1/0)&&(e.startDate?e.startDate instanceof Date?e.startDate=this._local_to_utc(this._zero_time(e.startDate)):e.startDate=r.parseDate(e.startDate,g,e.language,e.assumeNearbyYear):e.startDate=-(1/0)),e.endDate!==1/0&&(e.endDate?e.endDate instanceof Date?e.endDate=this._local_to_utc(this._zero_time(e.endDate)):e.endDate=r.parseDate(e.endDate,g,e.language,e.assumeNearbyYear):e.endDate=1/0),e.daysOfWeekDisabled=e.daysOfWeekDisabled||[],a.isArray(e.daysOfWeekDisabled)||(e.daysOfWeekDisabled=e.daysOfWeekDisabled.split(/[,\s]*/)),e.daysOfWeekDisabled=a.map(e.daysOfWeekDisabled,function(a){return parseInt(a,10)}),e.daysOfWeekHighlighted=e.daysOfWeekHighlighted||[],a.isArray(e.daysOfWeekHighlighted)||(e.daysOfWeekHighlighted=e.daysOfWeekHighlighted.split(/[,\s]*/)),e.daysOfWeekHighlighted=a.map(e.daysOfWeekHighlighted,function(a){return parseInt(a,10)}),e.datesDisabled=e.datesDisabled||[],a.isArray(e.datesDisabled)||(e.datesDisabled=[e.datesDisabled]),e.datesDisabled=a.map(e.datesDisabled,function(a){return r.parseDate(a,g,e.language,e.assumeNearbyYear)});var h=String(e.orientation).toLowerCase().split(/\s+/g),i=e.orientation.toLowerCase();if(h=a.grep(h,function(a){return/^auto|left|right|top|bottom$/.test(a)}),e.orientation={x:"auto",y:"auto"},i&&"auto"!==i)if(1===h.length)switch(h[0]){case"top":case"bottom":e.orientation.y=h[0];break;case"left":case"right":e.orientation.x=h[0]}else i=a.grep(h,function(a){return/^left|right$/.test(a)}),e.orientation.x=i[0]||"auto",i=a.grep(h,function(a){return/^top|bottom$/.test(a)}),e.orientation.y=i[0]||"auto";else;if(e.defaultViewDate){var j=e.defaultViewDate.year||(new Date).getFullYear(),k=e.defaultViewDate.month||0,l=e.defaultViewDate.day||1;e.defaultViewDate=c(j,k,l)}else e.defaultViewDate=d()},_events:[],_secondaryEvents:[],_applyEvents:function(a){for(var c,d,e,f=0;f<a.length;f++)c=a[f][0],2===a[f].length?(d=b,e=a[f][1]):3===a[f].length&&(d=a[f][1],e=a[f][2]),c.on(e,d)},_unapplyEvents:function(a){for(var c,d,e,f=0;f<a.length;f++)c=a[f][0],2===a[f].length?(e=b,d=a[f][1]):3===a[f].length&&(e=a[f][1],d=a[f][2]),c.off(d,e)},_buildEvents:function(){var b={keyup:a.proxy(function(b){-1===a.inArray(b.keyCode,[27,37,39,38,40,32,13,9])&&this.update()},this),keydown:a.proxy(this.keydown,this),paste:a.proxy(this.paste,this)};this.o.showOnFocus===!0&&(b.focus=a.proxy(this.show,this)),this.isInput?this._events=[[this.element,b]]:this.component&&this.hasInput?this._events=[[this.inputField,b],[this.component,{click:a.proxy(this.show,this)}]]:this._events=[[this.element,{click:a.proxy(this.show,this),keydown:a.proxy(this.keydown,this)}]],this._events.push([this.element,"*",{blur:a.proxy(function(a){this._focused_from=a.target},this)}],[this.element,{blur:a.proxy(function(a){this._focused_from=a.target},this)}]),this.o.immediateUpdates&&this._events.push([this.element,{"changeYear changeMonth":a.proxy(function(a){this.update(a.date)},this)}]),this._secondaryEvents=[[this.picker,{click:a.proxy(this.click,this)}],[a(window),{resize:a.proxy(this.place,this)}],[a(document),{mousedown:a.proxy(function(a){this.element.is(a.target)||this.element.find(a.target).length||this.picker.is(a.target)||this.picker.find(a.target).length||this.isInline||this.hide()},this)}]]},_attachEvents:function(){this._detachEvents(),this._applyEvents(this._events)},_detachEvents:function(){this._unapplyEvents(this._events)},_attachSecondaryEvents:function(){this._detachSecondaryEvents(),this._applyEvents(this._secondaryEvents)},_detachSecondaryEvents:function(){this._unapplyEvents(this._secondaryEvents)},_trigger:function(b,c){var d=c||this.dates.get(-1),e=this._utc_to_local(d);this.element.trigger({type:b,date:e,dates:a.map(this.dates,this._utc_to_local),format:a.proxy(function(a,b){0===arguments.length?(a=this.dates.length-1,b=this.o.format):"string"==typeof a&&(b=a,a=this.dates.length-1),b=b||this.o.format;var c=this.dates.get(a);return r.formatDate(c,b,this.o.language)},this)})},show:function(){return this.inputField.prop("disabled")||this.inputField.prop("readonly")&&this.o.enableOnReadonly===!1?void 0:(this.isInline||this.picker.appendTo(this.o.container),this.place(),this.picker.show(),this._attachSecondaryEvents(),this._trigger("show"),(window.navigator.msMaxTouchPoints||"ontouchstart"in document)&&this.o.disableTouchKeyboard&&a(this.element).blur(),this)},hide:function(){return this.isInline||!this.picker.is(":visible")?this:(this.focusDate=null,this.picker.hide().detach(),this._detachSecondaryEvents(),this.viewMode=this.o.startView,this.showMode(),this.o.forceParse&&this.inputField.val()&&this.setValue(),this._trigger("hide"),this)},destroy:function(){return this.hide(),this._detachEvents(),this._detachSecondaryEvents(),this.picker.remove(),delete this.element.data().datepicker,this.isInput||delete this.element.data().date,this},paste:function(b){var c;if(b.originalEvent.clipboardData&&b.originalEvent.clipboardData.types&&-1!==a.inArray("text/plain",b.originalEvent.clipboardData.types))c=b.originalEvent.clipboardData.getData("text/plain");else{if(!window.clipboardData)return;c=window.clipboardData.getData("Text")}this.setDate(c),this.update(),b.preventDefault()},_utc_to_local:function(a){return a&&new Date(a.getTime()+6e4*a.getTimezoneOffset())},_local_to_utc:function(a){return a&&new Date(a.getTime()-6e4*a.getTimezoneOffset())},_zero_time:function(a){return a&&new Date(a.getFullYear(),a.getMonth(),a.getDate())},_zero_utc_time:function(a){return a&&new Date(Date.UTC(a.getUTCFullYear(),a.getUTCMonth(),a.getUTCDate()))},getDates:function(){return a.map(this.dates,this._utc_to_local)},getUTCDates:function(){return a.map(this.dates,function(a){return new Date(a)})},getDate:function(){return this._utc_to_local(this.getUTCDate())},getUTCDate:function(){var a=this.dates.get(-1);return"undefined"!=typeof a?new Date(a):null},clearDates:function(){this.inputField&&this.inputField.val(""),this.update(),this._trigger("changeDate"),this.o.autoclose&&this.hide()},setDates:function(){var b=a.isArray(arguments[0])?arguments[0]:arguments;return this.update.apply(this,b),this._trigger("changeDate"),this.setValue(),this},setUTCDates:function(){var b=a.isArray(arguments[0])?arguments[0]:arguments;return this.update.apply(this,a.map(b,this._utc_to_local)),this._trigger("changeDate"),this.setValue(),this},setDate:f("setDates"),setUTCDate:f("setUTCDates"),remove:f("destroy"),setValue:function(){var a=this.getFormattedDate();return this.inputField.val(a),this},getFormattedDate:function(c){c===b&&(c=this.o.format);var d=this.o.language;return a.map(this.dates,function(a){return r.formatDate(a,c,d)}).join(this.o.multidateSeparator)},getStartDate:function(){return this.o.startDate},setStartDate:function(a){return this._process_options({startDate:a}),this.update(),this.updateNavArrows(),this},getEndDate:function(){return this.o.endDate},setEndDate:function(a){return this._process_options({endDate:a}),this.update(),this.updateNavArrows(),this},setDaysOfWeekDisabled:function(a){return this._process_options({daysOfWeekDisabled:a}),this.update(),this.updateNavArrows(),this},setDaysOfWeekHighlighted:function(a){return this._process_options({daysOfWeekHighlighted:a}),this.update(),this},setDatesDisabled:function(a){this._process_options({datesDisabled:a}),this.update(),this.updateNavArrows()},place:function(){if(this.isInline)return this;var b=this.picker.outerWidth(),c=this.picker.outerHeight(),d=10,e=a(this.o.container),f=e.width(),g="body"===this.o.container?a(document).scrollTop():e.scrollTop(),h=e.offset(),i=[];this.element.parents().each(function(){var b=a(this).css("z-index");"auto"!==b&&0!==b&&i.push(parseInt(b))});var j=Math.max.apply(Math,i)+this.o.zIndexOffset,k=this.component?this.component.parent().offset():this.element.offset(),l=this.component?this.component.outerHeight(!0):this.element.outerHeight(!1),m=this.component?this.component.outerWidth(!0):this.element.outerWidth(!1),n=k.left-h.left,o=k.top-h.top;"body"!==this.o.container&&(o+=g),this.picker.removeClass("datepicker-orient-top datepicker-orient-bottom datepicker-orient-right datepicker-orient-left"),"auto"!==this.o.orientation.x?(this.picker.addClass("datepicker-orient-"+this.o.orientation.x),"right"===this.o.orientation.x&&(n-=b-m)):k.left<0?(this.picker.addClass("datepicker-orient-left"),n-=k.left-d):n+b>f?(this.picker.addClass("datepicker-orient-right"),n+=m-b):this.picker.addClass("datepicker-orient-left");var p,q=this.o.orientation.y;if("auto"===q&&(p=-g+o-c,q=0>p?"bottom":"top"),this.picker.addClass("datepicker-orient-"+q),"top"===q?o-=c+parseInt(this.picker.css("padding-top")):o+=l,this.o.rtl){var r=f-(n+m);this.picker.css({top:o,right:r,zIndex:j})}else this.picker.css({top:o,left:n,zIndex:j});return this},_allow_update:!0,update:function(){if(!this._allow_update)return this;var b=this.dates.copy(),c=[],d=!1;return arguments.length?(a.each(arguments,a.proxy(function(a,b){b instanceof Date&&(b=this._local_to_utc(b)),c.push(b)},this)),d=!0):(c=this.isInput?this.element.val():this.element.data("date")||this.inputField.val(),c=c&&this.o.multidate?c.split(this.o.multidateSeparator):[c],delete this.element.data().date),c=a.map(c,a.proxy(function(a){return r.parseDate(a,this.o.format,this.o.language,this.o.assumeNearbyYear)},this)),c=a.grep(c,a.proxy(function(a){return!this.dateWithinRange(a)||!a},this),!0),this.dates.replace(c),this.dates.length?this.viewDate=new Date(this.dates.get(-1)):this.viewDate<this.o.startDate?this.viewDate=new Date(this.o.startDate):this.viewDate>this.o.endDate?this.viewDate=new Date(this.o.endDate):this.viewDate=this.o.defaultViewDate,d?this.setValue():c.length&&String(b)!==String(this.dates)&&this._trigger("changeDate"),!this.dates.length&&b.length&&this._trigger("clearDate"),this.fill(),this.element.change(),this},fillDow:function(){var b=this.o.weekStart,c="<tr>";for(this.o.calendarWeeks&&(this.picker.find(".datepicker-days .datepicker-switch").attr("colspan",function(a,b){return parseInt(b)+1}),c+='<th class="cw">&#160;</th>');b<this.o.weekStart+7;)c+='<th class="dow',a.inArray(b,this.o.daysOfWeekDisabled)>-1&&(c+=" disabled"),c+='">'+q[this.o.language].daysMin[b++%7]+"</th>";c+="</tr>",this.picker.find(".datepicker-days thead").append(c)},fillMonths:function(){for(var a=this._utc_to_local(this.viewDate),b="",c=0;12>c;){var d=a&&a.getMonth()===c?" focused":"";b+='<span class="month'+d+'">'+q[this.o.language].monthsShort[c++]+"</span>"}this.picker.find(".datepicker-months td").html(b)},setRange:function(b){b&&b.length?this.range=a.map(b,function(a){return a.valueOf()}):delete this.range,this.fill()},getClassNames:function(b){var c=[],d=this.viewDate.getUTCFullYear(),e=this.viewDate.getUTCMonth(),f=new Date;return b.getUTCFullYear()<d||b.getUTCFullYear()===d&&b.getUTCMonth()<e?c.push("old"):(b.getUTCFullYear()>d||b.getUTCFullYear()===d&&b.getUTCMonth()>e)&&c.push("new"),this.focusDate&&b.valueOf()===this.focusDate.valueOf()&&c.push("focused"),this.o.todayHighlight&&b.getUTCFullYear()===f.getFullYear()&&b.getUTCMonth()===f.getMonth()&&b.getUTCDate()===f.getDate()&&c.push("today"),-1!==this.dates.contains(b)&&c.push("active"),this.dateWithinRange(b)||c.push("disabled"),this.dateIsDisabled(b)&&c.push("disabled","disabled-date"),-1!==a.inArray(b.getUTCDay(),this.o.daysOfWeekHighlighted)&&c.push("highlighted"),this.range&&(b>this.range[0]&&b<this.range[this.range.length-1]&&c.push("range"),-1!==a.inArray(b.valueOf(),this.range)&&c.push("selected"),b.valueOf()===this.range[0]&&c.push("range-start"),b.valueOf()===this.range[this.range.length-1]&&c.push("range-end")),c},_fill_yearsView:function(c,d,e,f,g,h,i,j){var k,l,m,n,o,p,q,r,s,t,u;for(k="",l=this.picker.find(c),m=parseInt(g/e,10)*e,o=parseInt(h/f,10)*f,p=parseInt(i/f,10)*f,n=a.map(this.dates,function(a){return parseInt(a.getUTCFullYear()/f,10)*f}),l.find(".datepicker-switch").text(m+"-"+(m+9*f)),q=m-f,r=-1;11>r;r+=1)s=[d],t=null,-1===r?s.push("old"):10===r&&s.push("new"),-1!==a.inArray(q,n)&&s.push("active"),(o>q||q>p)&&s.push("disabled"),q===this.viewDate.getFullYear()&&s.push("focused"),j!==a.noop&&(u=j(new Date(q,0,1)),u===b?u={}:"boolean"==typeof u?u={enabled:u}:"string"==typeof u&&(u={classes:u}),u.enabled===!1&&s.push("disabled"),u.classes&&(s=s.concat(u.classes.split(/\s+/))),u.tooltip&&(t=u.tooltip)),k+='<span class="'+s.join(" ")+'"'+(t?' title="'+t+'"':"")+">"+q+"</span>",q+=f;l.find("td").html(k)},fill:function(){var d,e,f=new Date(this.viewDate),g=f.getUTCFullYear(),h=f.getUTCMonth(),i=this.o.startDate!==-(1/0)?this.o.startDate.getUTCFullYear():-(1/0),j=this.o.startDate!==-(1/0)?this.o.startDate.getUTCMonth():-(1/0),k=this.o.endDate!==1/0?this.o.endDate.getUTCFullYear():1/0,l=this.o.endDate!==1/0?this.o.endDate.getUTCMonth():1/0,m=q[this.o.language].today||q.en.today||"",n=q[this.o.language].clear||q.en.clear||"",o=q[this.o.language].titleFormat||q.en.titleFormat;if(!isNaN(g)&&!isNaN(h)){this.picker.find(".datepicker-days .datepicker-switch").text(r.formatDate(f,o,this.o.language)),this.picker.find("tfoot .today").text(m).toggle(this.o.todayBtn!==!1),this.picker.find("tfoot .clear").text(n).toggle(this.o.clearBtn!==!1),this.picker.find("thead .datepicker-title").text(this.o.title).toggle(""!==this.o.title),this.updateNavArrows(),this.fillMonths();var p=c(g,h-1,28),s=r.getDaysInMonth(p.getUTCFullYear(),p.getUTCMonth());p.setUTCDate(s),p.setUTCDate(s-(p.getUTCDay()-this.o.weekStart+7)%7);var t=new Date(p);p.getUTCFullYear()<100&&t.setUTCFullYear(p.getUTCFullYear()),t.setUTCDate(t.getUTCDate()+42),t=t.valueOf();for(var u,v=[];p.valueOf()<t;){if(p.getUTCDay()===this.o.weekStart&&(v.push("<tr>"),this.o.calendarWeeks)){var w=new Date(+p+(this.o.weekStart-p.getUTCDay()-7)%7*864e5),x=new Date(Number(w)+(11-w.getUTCDay())%7*864e5),y=new Date(Number(y=c(x.getUTCFullYear(),0,1))+(11-y.getUTCDay())%7*864e5),z=(x-y)/864e5/7+1;v.push('<td class="cw">'+z+"</td>")}u=this.getClassNames(p),u.push("day"),this.o.beforeShowDay!==a.noop&&(e=this.o.beforeShowDay(this._utc_to_local(p)),e===b?e={}:"boolean"==typeof e?e={enabled:e}:"string"==typeof e&&(e={classes:e}),e.enabled===!1&&u.push("disabled"),e.classes&&(u=u.concat(e.classes.split(/\s+/))),e.tooltip&&(d=e.tooltip)),u=a.isFunction(a.uniqueSort)?a.uniqueSort(u):a.unique(u),v.push('<td class="'+u.join(" ")+'"'+(d?' title="'+d+'"':"")+">"+p.getUTCDate()+"</td>"),d=null,p.getUTCDay()===this.o.weekEnd&&v.push("</tr>"),p.setUTCDate(p.getUTCDate()+1)}this.picker.find(".datepicker-days tbody").empty().append(v.join(""));var A=q[this.o.language].monthsTitle||q.en.monthsTitle||"Months",B=this.picker.find(".datepicker-months").find(".datepicker-switch").text(this.o.maxViewMode<2?A:g).end().find("span").removeClass("active");if(a.each(this.dates,function(a,b){b.getUTCFullYear()===g&&B.eq(b.getUTCMonth()).addClass("active")}),(i>g||g>k)&&B.addClass("disabled"),g===i&&B.slice(0,j).addClass("disabled"),g===k&&B.slice(l+1).addClass("disabled"),this.o.beforeShowMonth!==a.noop){var C=this;a.each(B,function(c,d){var e=new Date(g,c,1),f=C.o.beforeShowMonth(e);f===b?f={}:"boolean"==typeof f?f={enabled:f}:"string"==typeof f&&(f={classes:f}),f.enabled!==!1||a(d).hasClass("disabled")||a(d).addClass("disabled"),f.classes&&a(d).addClass(f.classes),f.tooltip&&a(d).prop("title",f.tooltip)})}this._fill_yearsView(".datepicker-years","year",10,1,g,i,k,this.o.beforeShowYear),this._fill_yearsView(".datepicker-decades","decade",100,10,g,i,k,this.o.beforeShowDecade),this._fill_yearsView(".datepicker-centuries","century",1e3,100,g,i,k,this.o.beforeShowCentury)}},updateNavArrows:function(){if(this._allow_update){var a=new Date(this.viewDate),b=a.getUTCFullYear(),c=a.getUTCMonth();switch(this.viewMode){case 0:this.o.startDate!==-(1/0)&&b<=this.o.startDate.getUTCFullYear()&&c<=this.o.startDate.getUTCMonth()?this.picker.find(".prev").css({visibility:"hidden"}):this.picker.find(".prev").css({visibility:"visible"}),this.o.endDate!==1/0&&b>=this.o.endDate.getUTCFullYear()&&c>=this.o.endDate.getUTCMonth()?this.picker.find(".next").css({visibility:"hidden"}):this.picker.find(".next").css({visibility:"visible"});break;case 1:case 2:case 3:case 4:this.o.startDate!==-(1/0)&&b<=this.o.startDate.getUTCFullYear()||this.o.maxViewMode<2?this.picker.find(".prev").css({visibility:"hidden"}):this.picker.find(".prev").css({visibility:"visible"}),this.o.endDate!==1/0&&b>=this.o.endDate.getUTCFullYear()||this.o.maxViewMode<2?this.picker.find(".next").css({visibility:"hidden"}):this.picker.find(".next").css({visibility:"visible"})}}},click:function(b){b.preventDefault(),b.stopPropagation();var e,f,g,h,i,j,k;e=a(b.target),e.hasClass("datepicker-switch")&&this.showMode(1);var l=e.closest(".prev, .next");l.length>0&&(f=r.modes[this.viewMode].navStep*(l.hasClass("prev")?-1:1),0===this.viewMode?(this.viewDate=this.moveMonth(this.viewDate,f),this._trigger("changeMonth",this.viewDate)):(this.viewDate=this.moveYear(this.viewDate,f),1===this.viewMode&&this._trigger("changeYear",this.viewDate)),this.fill()),e.hasClass("today")&&!e.hasClass("day")&&(this.showMode(-2),this._setDate(d(),"linked"===this.o.todayBtn?null:"view")),e.hasClass("clear")&&this.clearDates(),e.hasClass("disabled")||(e.hasClass("day")&&(g=parseInt(e.text(),10)||1,h=this.viewDate.getUTCFullYear(),i=this.viewDate.getUTCMonth(),e.hasClass("old")&&(0===i?(i=11,h-=1,j=!0,k=!0):(i-=1,j=!0)),e.hasClass("new")&&(11===i?(i=0,h+=1,j=!0,k=!0):(i+=1,j=!0)),this._setDate(c(h,i,g)),k&&this._trigger("changeYear",this.viewDate),j&&this._trigger("changeMonth",this.viewDate)),e.hasClass("month")&&(this.viewDate.setUTCDate(1),g=1,i=e.parent().find("span").index(e),h=this.viewDate.getUTCFullYear(),this.viewDate.setUTCMonth(i),this._trigger("changeMonth",this.viewDate),1===this.o.minViewMode?(this._setDate(c(h,i,g)),this.showMode()):this.showMode(-1),this.fill()),(e.hasClass("year")||e.hasClass("decade")||e.hasClass("century"))&&(this.viewDate.setUTCDate(1),g=1,i=0,h=parseInt(e.text(),10)||0,this.viewDate.setUTCFullYear(h),e.hasClass("year")&&(this._trigger("changeYear",this.viewDate),2===this.o.minViewMode&&this._setDate(c(h,i,g))),e.hasClass("decade")&&(this._trigger("changeDecade",this.viewDate),3===this.o.minViewMode&&this._setDate(c(h,i,g))),e.hasClass("century")&&(this._trigger("changeCentury",this.viewDate),4===this.o.minViewMode&&this._setDate(c(h,i,g))),this.showMode(-1),this.fill())),this.picker.is(":visible")&&this._focused_from&&a(this._focused_from).focus(),delete this._focused_from},_toggle_multidate:function(a){var b=this.dates.contains(a);if(a||this.dates.clear(),-1!==b?(this.o.multidate===!0||this.o.multidate>1||this.o.toggleActive)&&this.dates.remove(b):this.o.multidate===!1?(this.dates.clear(),this.dates.push(a)):this.dates.push(a),"number"==typeof this.o.multidate)for(;this.dates.length>this.o.multidate;)this.dates.remove(0)},_setDate:function(a,b){b&&"date"!==b||this._toggle_multidate(a&&new Date(a)),b&&"view"!==b||(this.viewDate=a&&new Date(a)),this.fill(),this.setValue(),b&&"view"===b||this._trigger("changeDate"),this.inputField&&this.inputField.change(),!this.o.autoclose||b&&"date"!==b||this.hide()},moveDay:function(a,b){var c=new Date(a);return c.setUTCDate(a.getUTCDate()+b),c},moveWeek:function(a,b){return this.moveDay(a,7*b)},moveMonth:function(a,b){if(!g(a))return this.o.defaultViewDate;if(!b)return a;var c,d,e=new Date(a.valueOf()),f=e.getUTCDate(),h=e.getUTCMonth(),i=Math.abs(b);if(b=b>0?1:-1,1===i)d=-1===b?function(){return e.getUTCMonth()===h}:function(){return e.getUTCMonth()!==c},c=h+b,e.setUTCMonth(c),(0>c||c>11)&&(c=(c+12)%12);else{for(var j=0;i>j;j++)e=this.moveMonth(e,b);c=e.getUTCMonth(),e.setUTCDate(f),d=function(){return c!==e.getUTCMonth()}}for(;d();)e.setUTCDate(--f),e.setUTCMonth(c);return e},moveYear:function(a,b){return this.moveMonth(a,12*b)},moveAvailableDate:function(a,b,c){do{if(a=this[c](a,b),!this.dateWithinRange(a))return!1;c="moveDay"}while(this.dateIsDisabled(a));return a},weekOfDateIsDisabled:function(b){return-1!==a.inArray(b.getUTCDay(),this.o.daysOfWeekDisabled)},dateIsDisabled:function(b){return this.weekOfDateIsDisabled(b)||a.grep(this.o.datesDisabled,function(a){return e(b,a)}).length>0},dateWithinRange:function(a){return a>=this.o.startDate&&a<=this.o.endDate},keydown:function(a){if(!this.picker.is(":visible"))return void((40===a.keyCode||27===a.keyCode)&&(this.show(),a.stopPropagation()));var b,c,d=!1,e=this.focusDate||this.viewDate;switch(a.keyCode){case 27:this.focusDate?(this.focusDate=null,this.viewDate=this.dates.get(-1)||this.viewDate,this.fill()):this.hide(),a.preventDefault(),a.stopPropagation();break;case 37:case 38:case 39:case 40:if(!this.o.keyboardNavigation||7===this.o.daysOfWeekDisabled.length)break;b=37===a.keyCode||38===a.keyCode?-1:1,0===this.viewMode?a.ctrlKey?(c=this.moveAvailableDate(e,b,"moveYear"),c&&this._trigger("changeYear",this.viewDate)):a.shiftKey?(c=this.moveAvailableDate(e,b,"moveMonth"),c&&this._trigger("changeMonth",this.viewDate)):37===a.keyCode||39===a.keyCode?c=this.moveAvailableDate(e,b,"moveDay"):this.weekOfDateIsDisabled(e)||(c=this.moveAvailableDate(e,b,"moveWeek")):1===this.viewMode?((38===a.keyCode||40===a.keyCode)&&(b=4*b),c=this.moveAvailableDate(e,b,"moveMonth")):2===this.viewMode&&((38===a.keyCode||40===a.keyCode)&&(b=4*b),c=this.moveAvailableDate(e,b,"moveYear")),c&&(this.focusDate=this.viewDate=c,this.setValue(),this.fill(),a.preventDefault());break;case 13:if(!this.o.forceParse)break;e=this.focusDate||this.dates.get(-1)||this.viewDate,this.o.keyboardNavigation&&(this._toggle_multidate(e),d=!0),this.focusDate=null,this.viewDate=this.dates.get(-1)||this.viewDate,this.setValue(),this.fill(),this.picker.is(":visible")&&(a.preventDefault(),a.stopPropagation(),this.o.autoclose&&this.hide());break;case 9:this.focusDate=null,this.viewDate=this.dates.get(-1)||this.viewDate,this.fill(),this.hide()}d&&(this.dates.length?this._trigger("changeDate"):this._trigger("clearDate"),this.inputField&&this.inputField.change())},showMode:function(a){a&&(this.viewMode=Math.max(this.o.minViewMode,Math.min(this.o.maxViewMode,this.viewMode+a))),this.picker.children("div").hide().filter(".datepicker-"+r.modes[this.viewMode].clsName).show(),this.updateNavArrows()}};var l=function(b,c){a(b).data("datepicker",this),this.element=a(b),this.inputs=a.map(c.inputs,function(a){return a.jquery?a[0]:a}),delete c.inputs,n.call(a(this.inputs),c).on("changeDate",a.proxy(this.dateUpdated,this)),this.pickers=a.map(this.inputs,function(b){return a(b).data("datepicker")}),this.updateDates()};l.prototype={updateDates:function(){this.dates=a.map(this.pickers,function(a){return a.getUTCDate()}),this.updateRanges()},updateRanges:function(){var b=a.map(this.dates,function(a){return a.valueOf()});a.each(this.pickers,function(a,c){c.setRange(b)})},dateUpdated:function(b){if(!this.updating){this.updating=!0;var c=a(b.target).data("datepicker");if("undefined"!=typeof c){var d=c.getUTCDate(),e=a.inArray(b.target,this.inputs),f=e-1,g=e+1,h=this.inputs.length;if(-1!==e){if(a.each(this.pickers,function(a,b){b.getUTCDate()||b.setUTCDate(d)}),d<this.dates[f])for(;f>=0&&d<this.dates[f];)this.pickers[f--].setUTCDate(d);else if(d>this.dates[g])for(;h>g&&d>this.dates[g];)this.pickers[g++].setUTCDate(d);this.updateDates(),delete this.updating}}}},remove:function(){a.map(this.pickers,function(a){a.remove()}),delete this.element.data().datepicker}};var m=a.fn.datepicker,n=function(c){var d=Array.apply(null,arguments);d.shift();var e;if(this.each(function(){var b=a(this),f=b.data("datepicker"),g="object"==typeof c&&c;if(!f){var j=h(this,"date"),m=a.extend({},o,j,g),n=i(m.language),p=a.extend({},o,n,j,g);b.hasClass("input-daterange")||p.inputs?(a.extend(p,{inputs:p.inputs||b.find("input").toArray()}),f=new l(this,p)):f=new k(this,p),b.data("datepicker",f)}"string"==typeof c&&"function"==typeof f[c]&&(e=f[c].apply(f,d))}),e===b||e instanceof k||e instanceof l)return this;if(this.length>1)throw new Error("Using only allowed for the collection of a single element ("+c+" function)");return e};a.fn.datepicker=n;var o=a.fn.datepicker.defaults={assumeNearbyYear:!1,autoclose:!1,beforeShowDay:a.noop,beforeShowMonth:a.noop,beforeShowYear:a.noop,beforeShowDecade:a.noop,beforeShowCentury:a.noop,calendarWeeks:!1,clearBtn:!1,toggleActive:!1,daysOfWeekDisabled:[],daysOfWeekHighlighted:[],datesDisabled:[],endDate:1/0,forceParse:!0,format:"mm/dd/yyyy",keyboardNavigation:!0,language:"en",minViewMode:0,maxViewMode:4,multidate:!1,multidateSeparator:",",orientation:"auto",rtl:!1,startDate:-(1/0),startView:0,todayBtn:!1,todayHighlight:!1,weekStart:0,disableTouchKeyboard:!1,enableOnReadonly:!0,showOnFocus:!0,zIndexOffset:10,container:"body",immediateUpdates:!1,title:"",templates:{leftArrow:"&laquo;",rightArrow:"&raquo;"}},p=a.fn.datepicker.locale_opts=["format","rtl","weekStart"];a.fn.datepicker.Constructor=k;var q=a.fn.datepicker.dates={en:{days:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],daysShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],daysMin:["Su","Mo","Tu","We","Th","Fr","Sa"],months:["January","February","March","April","May","June","July","August","September","October","November","December"],monthsShort:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],today:"Today",clear:"Clear",titleFormat:"MM yyyy"}},r={modes:[{clsName:"days",navFnc:"Month",navStep:1},{clsName:"months",navFnc:"FullYear",navStep:1},{clsName:"years",navFnc:"FullYear",navStep:10},{clsName:"decades",navFnc:"FullDecade",navStep:100},{clsName:"centuries",navFnc:"FullCentury",navStep:1e3}],isLeapYear:function(a){return a%4===0&&a%100!==0||a%400===0},getDaysInMonth:function(a,b){return[31,r.isLeapYear(a)?29:28,31,30,31,30,31,31,30,31,30,31][b]},validParts:/dd?|DD?|mm?|MM?|yy(?:yy)?/g,nonpunctuation:/[^ -\/:-@\u5e74\u6708\u65e5\[-`{-~\t\n\r]+/g,parseFormat:function(a){if("function"==typeof a.toValue&&"function"==typeof a.toDisplay)return a;var b=a.replace(this.validParts,"\x00").split("\x00"),c=a.match(this.validParts);if(!b||!b.length||!c||0===c.length)throw new Error("Invalid date format.");return{separators:b,parts:c}},parseDate:function(e,f,g,h){function i(a,b){return b===!0&&(b=10),100>a&&(a+=2e3,a>(new Date).getFullYear()+b&&(a-=100)),a}function j(){var a=this.slice(0,s[n].length),b=s[n].slice(0,a.length);return a.toLowerCase()===b.toLowerCase()}if(!e)return b;if(e instanceof Date)return e;if("string"==typeof f&&(f=r.parseFormat(f)),f.toValue)return f.toValue(e,f,g);var l,m,n,o,p=/([\-+]\d+)([dmwy])/,s=e.match(/([\-+]\d+)([dmwy])/g),t={d:"moveDay",m:"moveMonth",w:"moveWeek",y:"moveYear"},u={yesterday:"-1d",today:"+0d",tomorrow:"+1d"};if(/^[\-+]\d+[dmwy]([\s,]+[\-+]\d+[dmwy])*$/.test(e)){for(e=new Date,n=0;n<s.length;n++)l=p.exec(s[n]),m=parseInt(l[1]),o=t[l[2]],e=k.prototype[o](e,m);return c(e.getUTCFullYear(),e.getUTCMonth(),e.getUTCDate())}if("undefined"!=typeof u[e]&&(e=u[e],s=e.match(/([\-+]\d+)([dmwy])/g),/^[\-+]\d+[dmwy]([\s,]+[\-+]\d+[dmwy])*$/.test(e))){for(e=new Date,n=0;n<s.length;n++)l=p.exec(s[n]),m=parseInt(l[1]),o=t[l[2]],e=k.prototype[o](e,m);return c(e.getUTCFullYear(),e.getUTCMonth(),e.getUTCDate())}s=e&&e.match(this.nonpunctuation)||[],e=new Date;var v,w,x={},y=["yyyy","yy","M","MM","m","mm","d","dd"],z={yyyy:function(a,b){return a.setUTCFullYear(h?i(b,h):b)},yy:function(a,b){return a.setUTCFullYear(h?i(b,h):b)},m:function(a,b){if(isNaN(a))return a;for(b-=1;0>b;)b+=12;for(b%=12,a.setUTCMonth(b);a.getUTCMonth()!==b;)a.setUTCDate(a.getUTCDate()-1);return a},d:function(a,b){return a.setUTCDate(b)}};z.M=z.MM=z.mm=z.m,z.dd=z.d,e=d();var A=f.parts.slice();if(s.length!==A.length&&(A=a(A).filter(function(b,c){return-1!==a.inArray(c,y)}).toArray()),s.length===A.length){var B;for(n=0,B=A.length;B>n;n++){if(v=parseInt(s[n],10),l=A[n],isNaN(v))switch(l){case"MM":w=a(q[g].months).filter(j),v=a.inArray(w[0],q[g].months)+1;break;case"M":w=a(q[g].monthsShort).filter(j),v=a.inArray(w[0],q[g].monthsShort)+1}x[l]=v}var C,D;for(n=0;n<y.length;n++)D=y[n],D in x&&!isNaN(x[D])&&(C=new Date(e),z[D](C,x[D]),isNaN(C)||(e=C))}return e},formatDate:function(b,c,d){if(!b)return"";if("string"==typeof c&&(c=r.parseFormat(c)),
c.toDisplay)return c.toDisplay(b,c,d);var e={d:b.getUTCDate(),D:q[d].daysShort[b.getUTCDay()],DD:q[d].days[b.getUTCDay()],m:b.getUTCMonth()+1,M:q[d].monthsShort[b.getUTCMonth()],MM:q[d].months[b.getUTCMonth()],yy:b.getUTCFullYear().toString().substring(2),yyyy:b.getUTCFullYear()};e.dd=(e.d<10?"0":"")+e.d,e.mm=(e.m<10?"0":"")+e.m,b=[];for(var f=a.extend([],c.separators),g=0,h=c.parts.length;h>=g;g++)f.length&&b.push(f.shift()),b.push(e[c.parts[g]]);return b.join("")},headTemplate:'<thead><tr><th colspan="7" class="datepicker-title"></th></tr><tr><th class="prev">&laquo;</th><th colspan="5" class="datepicker-switch"></th><th class="next">&raquo;</th></tr></thead>',contTemplate:'<tbody><tr><td colspan="7"></td></tr></tbody>',footTemplate:'<tfoot><tr><th colspan="7" class="today"></th></tr><tr><th colspan="7" class="clear"></th></tr></tfoot>'};r.template='<div class="datepicker"><div class="datepicker-days"><table class="table-condensed">'+r.headTemplate+"<tbody></tbody>"+r.footTemplate+'</table></div><div class="datepicker-months"><table class="table-condensed">'+r.headTemplate+r.contTemplate+r.footTemplate+'</table></div><div class="datepicker-years"><table class="table-condensed">'+r.headTemplate+r.contTemplate+r.footTemplate+'</table></div><div class="datepicker-decades"><table class="table-condensed">'+r.headTemplate+r.contTemplate+r.footTemplate+'</table></div><div class="datepicker-centuries"><table class="table-condensed">'+r.headTemplate+r.contTemplate+r.footTemplate+"</table></div></div>",a.fn.datepicker.DPGlobal=r,a.fn.datepicker.noConflict=function(){return a.fn.datepicker=m,this},a.fn.datepicker.version="1.6.4",a(document).on("focus.datepicker.data-api click.datepicker.data-api",'[data-provide="datepicker"]',function(b){var c=a(this);c.data("datepicker")||(b.preventDefault(),n.call(c,"show"))}),a(function(){n.call(a('[data-provide="datepicker-inline"]'))})});
"use strict";

(function ($) {

    $.fn.circliful = function (options, callback) {

        var settings = $.extend({
            // These are the defaults.
            foregroundColor: "#3498DB",
            backgroundColor: "#ccc",
            pointColor: "none",
            fillColor: 'none',
            foregroundBorderWidth: 15,
            backgroundBorderWidth: 15,
            pointSize: 28.5,
            fontColor: '#aaa',
            percent: 75,
            animation: 1,
            animationStep: 5,
            icon: 'none',
            iconSize: '30',
            iconColor: '#ccc',
            iconPosition: 'top',
            iconDecoration: true,
            target: 0,
            start: 0,
            showPercent: 1,
            percentageTextSize: 22,
            percentageX: 100,
            percentageY: 113,
            textAdditionalCss: '',
            targetPercent: 0,
            targetTextSize: 17,
            targetColor: '#2980B9',
            text: null,
            textStyle: null,
            textColor: '#666',
            textY: null,
            textX: null,
            multiPercentage: 0,
            percentages: [],
            multiPercentageLegend: 0,
            textBelow: false,
            noPercentageSign: false,
            replacePercentageByText: null,
            halfCircle: false,
            animateInView: false,
            decimals: 0,
            alwaysDecimals: false,
            title: 'Circle Chart',
            description: '',
            progressColor: null
        }, options);

        return this.each(function () {
            var circleContainer = $(this);

            mergeDataAttributes(settings, circleContainer.data());

            var percent = settings.percent;
            var iconY = 83;
            var iconX = 100;
            var percentageY = settings.percentageY;
            var percentageX = settings.percentageX;
            var additionalCss;
            var elements;
            var icon;
            var backgroundBorderWidth = settings.backgroundBorderWidth;
            var progressColor = settings.progressColor

            if (settings.halfCircle) {
                if (settings.iconPosition === 'left') {
                    iconX = 80;
                    iconY = 100;
                    percentageX = 117;
                    percentageY = 100;
                } else if (settings.halfCircle) {
                    iconY = 80;
                    percentageY = 100;
                }
            } else {
                if (settings.iconPosition === 'bottom') {
                    iconY = 124;
                    percentageY = 95;
                } else if (settings.iconPosition === 'left') {
                    iconX = 80;
                    iconY = 110;
                    percentageX = 117;
                } else if (settings.iconPosition === 'middle') {
                    if (settings.multiPercentage !== 1) {
                        if (settings.iconDecoration) {
                          elements = '<g stroke="' + (settings.backgroundColor !== 'none' ? settings.backgroundColor : '#ccc') + '" ><line x1="133" y1="50" x2="140" y2="40" stroke-width="2"  /></g>';
                          elements += '<g stroke="' + (settings.backgroundColor !== 'none' ? settings.backgroundColor : '#ccc') + '" ><line x1="140" y1="40" x2="200" y2="40" stroke-width="2"  /></g>';
                        }
                        percentageX = 170; // To center the percentage exactly in the center.
                        percentageY = 35;
                    }
                    iconY = 110;
                } else if (settings.iconPosition === 'right') {
                    iconX = 120;
                    iconY = 110;
                    percentageX = 80;
                } else if (settings.iconPosition === 'top' && settings.icon !== 'none') {
                    percentageY = 120;
                }
            }

            if (settings.targetPercent > 0 && settings.halfCircle !== true) {
                percentageY = 95;
                elements = '<g stroke="' + (settings.backgroundColor !== 'none' ? settings.backgroundColor : '#ccc') + '" ><line x1="75" y1="101" x2="125" y2="101" stroke-width="1"  /></g>';
                elements += '<text text-anchor="middle" x="' + percentageX + '" y="120" style="font-size: ' + settings.targetTextSize + 'px;" fill="' + settings.targetColor + '">' + settings.targetPercent + (settings.noPercentageSign && settings.replacePercentageByText === null ? '' : '%') + '</text>';
                elements += '<circle cx="100" cy="100" r="69" fill="none" stroke="' + settings.backgroundColor + '" stroke-width="3" stroke-dasharray="450" transform="rotate(-90,100,100)" />';
                elements += '<circle cx="100" cy="100" r="69" fill="none" stroke="' + settings.targetColor + '" stroke-width="3" stroke-dasharray="' + (435 / 100 * settings.targetPercent) + ', 20000" transform="rotate(-90,100,100)" />';
            }

            if (settings.text !== null) {
                if (settings.halfCircle) {
                    if (settings.textBelow) {
                        elements += '<text text-anchor="middle" x="' + (settings.textX !== null ? settings.textX : '100') + '" y="' + (settings.textY !== null ? settings.textY : '64%') + '" style="' + settings.textStyle + '" fill="' + settings.textColor + '">' + settings.text + '</text>';
                    }
                    else {
                        elements += '<text text-anchor="middle" x="' + (settings.textX !== null ? settings.textX : '100' ) + '" y="' + (settings.textY !== null ? settings.textY : '115') + '" style="' + settings.textStyle + '" fill="' + settings.textColor + '">' + settings.text + '</text>';
                    }
                } else {
                    if (settings.textBelow) {
                        elements += '<text text-anchor="middle" x="' + (settings.textX !== null ? settings.textX : '100' ) + '" y="' + (settings.textY !== null ? settings.textY : '99%') + '" style="' + settings.textStyle + '" fill="' + settings.textColor + '">' + settings.text + '</text>';
                    }
                    else {
                        elements += '<text text-anchor="middle" x="' + (settings.textX !== null ? settings.textX : '100' ) + '" y="' + (settings.textY !== null ? settings.textY : '115') + '" style="' + settings.textStyle + '" fill="' + settings.textColor + '">' + settings.text + '</text>';
                    }
                }
            }

            if (settings.icon !== 'none') {
                icon = '<text text-anchor="middle" x="' + iconX + '" y="' + iconY + '" class="icon" style="font-size: ' + settings.iconSize + 'px" fill="' + settings.iconColor + '">&#x' + settings.icon + '</text>';
            }

            if (settings.halfCircle) {
                var rotate = 'transform="rotate(-180,100,100)"';
                circleContainer
                    .addClass('svg-container')
                    .append(
                        $('<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 194 186" class="circliful">' +
                            (typeof elements !== 'undefined' ? elements : '') +
                            '<clipPath id="cut-off-bottom"> <rect x="100" y="0" width="100" height="200" /> </clipPath>' +
                            '<circle cx="100" cy="100" r="57" class="border" fill="' + settings.fillColor + '" stroke="' + settings.backgroundColor + '" stroke-width="' + backgroundBorderWidth + '" stroke-dasharray="360" clip-path="url(#cut-off-bottom)" transform="rotate(-90,100,100)" />' +
                            '<circle class="circle" cx="100" cy="100" r="57" class="border" fill="none" stroke="' + settings.foregroundColor + '" stroke-width="' + settings.foregroundBorderWidth + '" stroke-dasharray="0,20000" ' + rotate + ' />' +
                            '<circle cx="100" cy="100" r="' + settings.pointSize + '" fill="' + settings.pointColor + '" clip-path="url(#cut-off-bottom)" transform="rotate(-90,100,100)" />' +
                            icon +
                            '<text class="timer" text-anchor="middle" x="' + percentageX + '" y="' + percentageY + '" style="font-size: ' + settings.percentageTextSize + 'px; ' + additionalCss + ';' + settings.textAdditionalCss + '" fill="' + settings.fontColor + '"><tspan class="number">' + (settings.replacePercentageByText === null ? 0 : settings.replacePercentageByText) + '</tspan><tspan class="percent">' + (settings.noPercentageSign || settings.replacePercentageByText !== null ? '' : '%') + '</tspan></text>')
                    );
            } else {
                drawCircles();
            }

            var circle = circleContainer.find('.circle');
            var myTimer = circleContainer.find('.timer');
            var interval = 30;
            var angle = 0;
            var angleIncrement = settings.animationStep;
            var last = 0;
            var summary = 0;
            var oneStep = 0;
            var text = percent;
            var calculateFill = (360 / 100 * percent);

            if (settings.halfCircle) {
                calculateFill = (360 / 100 * percent) / 2;
            }

            if (settings.replacePercentageByText !== null) {
                text = settings.replacePercentageByText;
            }

            if (settings.start > 0 && settings.target > 0) {
                percent = settings.start / (settings.target / 100);
                oneStep = settings.target / 100;
            }

            if (settings.animation === 1) {
                if (settings.animateInView) {
                    $(window).scroll(function () {
                        checkAnimation();
                    });
                } else {
                    animate();
                }
            } else {
                if (settings.multiPercentage !== 1) {
                    circle
                        .attr("stroke-dasharray", calculateFill + ", 20000");

                    if (settings.showPercent === 1) {
                        myTimer
                            .find('.number')
                            .text(text);
                    } else {
                        myTimer
                            .find('.number')
                            .text(settings.target);
                        myTimer
                            .find('.percent')
                            .text('');
                    }
                } else {
                    if (settings.replacePercentageByText !== null) {
                        myTimer
                            .find('.number')
                            .text(settings.replacePercentageByText);
                        myTimer
                            .find('.percent')
                            .text('');
                    }
                }
            }

            function animate() {
                var currentCircle = circle;
                var currentCalculateFill = calculateFill;

                if (settings.multiPercentage === 1) {
                    var index;
                    var percentages = settings.percentages;
                    var circleRadius = 360;
                    for (index = 0; index < percentages.length; ++index) {
                        percent = percentages[index].percent;
                        currentCalculateFill = (circleRadius / 100 * percent);
                        currentCircle = circleContainer.find('#circle' + (index + 1));

                        if (index > 0) {
                            circleRadius = circleRadius + 62.5;
                            currentCalculateFill = (circleRadius / 100 * percent);
                        }

                        animateCircle(currentCircle, currentCalculateFill, circleRadius, percent);
                    }
                } else {
                    animateCircle(currentCircle, currentCalculateFill, 360, percent);
                }
            }

            function animateCircle(currentCircle, currentCalculateFill, circleRadius, percent) {
                var timer = window.setInterval(function () {
                    if ((angle) >= currentCalculateFill) {
                        window.clearInterval(timer);
                        last = 1;
                        if (typeof callback === 'function') {
                            callback.call(this);
                        }
                    } else {
                        angle += angleIncrement;
                        summary += oneStep;
                    }
                    if (settings.halfCircle) {
                        if (angle * 2 / (circleRadius / 100) >= percent && last === 1) {
                            angle = ((circleRadius / 100) * percent) / 2
                        }
                    } else {
                        if (angle / (circleRadius / 100) >= percent && last === 1) {
                            angle = (circleRadius / 100) * percent;
                        }
                    }

                    if (summary > settings.target && last === 1) {
                        summary = settings.target;
                    }

                    if (settings.replacePercentageByText === null) {
                        if (settings.halfCircle) {
                            text = parseFloat((100 * angle / circleRadius) * 2);
                        } else {
                            text = parseFloat((100 * angle / circleRadius));
                        }
                        text = Math.floor(text);
                        if (!settings.alwaysDecimals && (percent === 0 || (percent > 1 && last !== 1))) {
                            text = parseInt(text);
                        }
                    }

                    currentCircle
                        .attr("stroke-dasharray", angle + ", 20000");

                    if (settings.multiPercentage !== 1) {
                        if (settings.showPercent === 1) {
                            myTimer
                                .find('.number')
                                .text(text);
                        } else {

                            myTimer
                                .find('.number')
                                .text(summary);
                            myTimer
                                .find('.percent')
                                .text('');
                        }
                    } else {
                        myTimer
                            .find('.number')
                            .text('');
                        myTimer
                            .find('.percent')
                            .text('');
                    }

                    if (progressColor !== null) {
                        $.each(progressColor, function (key, color) {
                            if (settings.halfCircle) {
                                key /= 2
                            }
                            if (angle >= key * (circleRadius / 100)) {
                                currentCircle.css({
                                    stroke: color,
                                    transition: 'stroke 0.1s linear'
                                });
                            }
                        });
                    }
                }.bind(currentCircle), interval);
            }

            function isElementInViewport() {
                // Get the scroll position of the page.
                var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') !== -1) ? 'body' : 'html');
                var viewportTop = $(scrollElem).scrollTop();
                var viewportBottom = viewportTop + $(window).height();

                // Get the position of the element on the page.
                var elemTop = Math.round(circle.offset().top);
                var elemBottom = elemTop + circle.height();

                return ((elemTop < viewportBottom) && (elemBottom > viewportTop));
            }

            function checkAnimation() {
                // If the animation has already been started
                if (circle.hasClass('start')) return;

                if (isElementInViewport(circle)) {
                    // Start the animation
                    circle.addClass('start');
                    setTimeout(animate, 250)
                }
            }

            function mergeDataAttributes(settings, dataAttributes) {
                $.each(settings, function (key, value) {
                    if (key.toLowerCase() in dataAttributes) {
                        settings[key] = dataAttributes[key.toLowerCase()];
                    }
                });
            }

            /**
             * Draws the initial circles before animate gets called
             */
            function drawCircles() {
                if (settings.multiPercentage === 1) {
                    var index, calculateFillMulti, percent, color, circles;
                    var percentages = settings.percentages;
                    var radius = 47;
                    var circleRadius = 360;
                    var rotate = -90;
                    for (index = 0; index < percentages.length; ++index) {
                        percent = percentages[index].percent;
                        color = percentages[index].color;
                        calculateFillMulti = (circleRadius / 100 * percent);
                        if (index > 0) {
                            circleRadius = circleRadius + 62.5;
                            calculateFillMulti = (circleRadius / 100 * percent);
                        }
                        radius += 10;
                        circles += '<circle cx="100" cy="100" r="' + radius + '" class="border" fill="' + settings.fillColor + '" stroke="' + settings.backgroundColor + '" stroke-width="' + backgroundBorderWidth + '" stroke-dasharray="' + circleRadius + '" transform="rotate(' + rotate + ',100,100)" />' +
                            '<circle class="circle" id="circle' + (index + 1) + '" data-percent="' + percent + '" cx="100" cy="100" r="' + radius + '" class="border" fill="none" stroke="' + color + '" stroke-width="' + settings.foregroundBorderWidth + '" stroke-dasharray="' + calculateFillMulti + ',20000" transform="rotate(' + rotate + ',100,100)" />';
                    }

                    circleContainer
                        .addClass('svg-container')
                        .append(
                            $('<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 194 186" class="circliful">' +
                                (typeof elements !== 'undefined' ? elements : '') +
                                circles +
                                icon +
                                '<text class="timer" text-anchor="middle" x="' + percentageX + '" y="' + percentageY + '" style="font-size: ' + settings.percentageTextSize + 'px; ' + additionalCss + ';' + settings.textAdditionalCss + '" fill="' + settings.fontColor + '">' +
                                '<tspan class="number">' + (settings.replacePercentageByText === null ? 0 : settings.replacePercentageByText) + '</tspan>' +
                                '<tspan class="percent">' + (settings.noPercentageSign || settings.replacePercentageByText !== null ? '' : '%') + '</tspan>' +
                                '</text>')
                        );

                    if (settings.multiPercentageLegend === 1) {
                        showLegend();
                    }
                } else {
                    circleContainer
                        .addClass('svg-container')
                        .append(
                            $('<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 194 186" class="circliful">' +
                                (typeof elements !== 'undefined' ? elements : '') +
                                '<circle cx="100" cy="100" r="57" class="border" fill="' + settings.fillColor + '" stroke="' + settings.backgroundColor + '" stroke-width="' + backgroundBorderWidth + '" stroke-dasharray="360" transform="rotate(-90,100,100)" />' +
                                '<circle class="circle" cx="100" cy="100" r="57" class="border" fill="none" stroke="' + settings.foregroundColor + '" stroke-width="' + settings.foregroundBorderWidth + '" stroke-dasharray="0,20000" transform="rotate(-90,100,100)" />' +
                                '<circle cx="100" cy="100" r="' + settings.pointSize + '" fill="' + settings.pointColor + '" />' +
                                icon +
                                '<text class="timer" text-anchor="middle" x="' + percentageX + '" y="' + percentageY + '" style="font-size: ' + settings.percentageTextSize + 'px; ' + additionalCss + ';' + settings.textAdditionalCss + '" fill="' + settings.fontColor + '">' +
                                '<tspan class="number">' + (settings.replacePercentageByText === null ? 0 : settings.replacePercentageByText) + '</tspan>' +
                                '<tspan class="percent">' + (settings.noPercentageSign || settings.replacePercentageByText !== null ? '' : '%') + '</tspan>' +
                                '</text>')
                        );
                }
            }

            /**
             * Show the legend only for multi percentage circles
             */
            function showLegend() {
                var height = circleContainer.height();
                var width = circleContainer.width();
                var percentages = settings.percentages;
                var index;
                var lines = '';
                for (index = 0; index < percentages.length; ++index) {
                    var title = percentages[index].title;
                    var color = percentages[index].color;
                    var percent = percentages[index].percent;

                    lines += '<div><span class="color-box" style="background: ' + color + '"></span>' + title + ', ' + percent + '%</div>';
                }

                circleContainer.append(
                    $('<div/>')
                        .append(lines)
                        .attr('style', 'position:absolute;top:' + height / 3 + 'px;left:' + (width + 20) + 'px')
                        .attr('class', 'legend-line')
                );
            }
        });
    }
}(jQuery));

(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD
        define(['jquery'], factory);
    } else if (typeof exports === 'object') {
        // CommonJS
        factory(require('jquery'));
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function ($) {
    var CountTo = function (element, options) {
        this.$element = $(element);
        this.options = $.extend({}, CountTo.DEFAULTS, this.dataOptions(), options);
        this.init();
    };

    CountTo.DEFAULTS = {
        from: 0,               // the number the element should start at
        to: 0,                 // the number the element should end at
        speed: 1000,           // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,           // the number of decimal places to show
        formatter: formatter,  // handler for formatting the value before rendering
        onUpdate: null,        // callback method for every time the element is updated
        onComplete: null       // callback method for when the element finishes updating
    };

    CountTo.prototype.init = function () {
        this.value = this.options.from;
        this.loops = Math.ceil(this.options.speed / this.options.refreshInterval);
        this.loopCount = 0;
        this.increment = (this.options.to - this.options.from) / this.loops;
    };

    CountTo.prototype.dataOptions = function () {
        var options = {
            from: this.$element.data('from'),
            to: this.$element.data('to'),
            speed: this.$element.data('speed'),
            refreshInterval: this.$element.data('refresh-interval'),
            decimals: this.$element.data('decimals')
        };

        var keys = Object.keys(options);

        for (var i in keys) {
            var key = keys[i];

            if (typeof (options[key]) === 'undefined') {
                delete options[key];
            }
        }

        return options;
    };

    CountTo.prototype.update = function () {
        this.value += this.increment;
        this.loopCount++;

        this.render();

        if (typeof (this.options.onUpdate) == 'function') {
            this.options.onUpdate.call(this.$element, this.value);
        }

        if (this.loopCount >= this.loops) {
            clearInterval(this.interval);
            this.value = this.options.to;

            if (typeof (this.options.onComplete) == 'function') {
                this.options.onComplete.call(this.$element, this.value);
            }
        }
    };

    CountTo.prototype.render = function () {
        var formattedValue = this.options.formatter.call(this.$element, this.value, this.options);
        this.$element.text(formattedValue);
    };

    CountTo.prototype.restart = function () {
        this.stop();
        this.init();
        this.start();
    };

    CountTo.prototype.start = function () {
        this.stop();
        this.render();
        this.interval = setInterval(this.update.bind(this), this.options.refreshInterval);
    };

    CountTo.prototype.stop = function () {
        if (this.interval) {
            clearInterval(this.interval);
        }
    };

    CountTo.prototype.toggle = function () {
        if (this.interval) {
            this.stop();
        } else {
            this.start();
        }
    };

    function formatter(value, options) {
        return value.toFixed(options.decimals);
    }

    $.fn.countTo = function (option) {
        return this.each(function () {
            var $this = $(this);
            var data = $this.data('countTo');
            var init = !data || typeof (option) === 'object';
            var options = typeof (option) === 'object' ? option : {};
            var method = typeof (option) === 'string' ? option : 'start';

            if (init) {
                if (data) data.stop();
                $this.data('countTo', data = new CountTo(this, options));
            }

            data[method].call(data);
        });
    };
}));

!function(global,factory){"object"==typeof exports&&"undefined"!=typeof module?module.exports=factory():"function"==typeof define&&define.amd?define(factory):global.OnScreen=factory()}(this,function(){"use strict";function attach(){var container=this.options.container;if(container instanceof HTMLElement){var style=window.getComputedStyle(container);"static"===style.position&&(container.style.position="relative")}container.addEventListener("scroll",this._scroll),window.addEventListener("resize",this._scroll),this._scroll(),this.attached=!0}function inViewport(el){var options=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{tolerance:0};if(!el)throw new Error("You should specify the element you want to test");"string"==typeof el&&(el=document.querySelector(el));var elRect=el.getBoundingClientRect();return elRect.bottom-options.tolerance>0&&elRect.right-options.tolerance>0&&elRect.left+options.tolerance<(window.innerWidth||document.documentElement.clientWidth)&&elRect.top+options.tolerance<(window.innerHeight||document.documentElement.clientHeight)}function inContainer(el){var options=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{tolerance:0,container:""};if(!el)throw new Error("You should specify the element you want to test");if("string"==typeof el&&(el=document.querySelector(el)),"string"==typeof options&&(options={tolerance:0,container:document.querySelector(options)}),"string"==typeof options.container&&(options.container=document.querySelector(options.container)),options instanceof HTMLElement&&(options={tolerance:0,container:options}),!options.container)throw new Error("You should specify a container element");var containerRect=options.container.getBoundingClientRect();return el.offsetTop+el.clientHeight-options.tolerance>options.container.scrollTop&&el.offsetLeft+el.clientWidth-options.tolerance>options.container.scrollLeft&&el.offsetLeft+options.tolerance<containerRect.width+options.container.scrollLeft&&el.offsetTop+options.tolerance<containerRect.height+options.container.scrollTop}function eventHandler(){var trackedElements=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},options=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{tolerance:0},selectors=Object.keys(trackedElements),testVisibility=void 0;selectors.length&&(testVisibility=options.container===window?inViewport:inContainer,selectors.forEach(function(selector){trackedElements[selector].nodes.forEach(function(item){if(testVisibility(item.node,options)?(item.wasVisible=item.isVisible,item.isVisible=!0):(item.wasVisible=item.isVisible,item.isVisible=!1),item.isVisible===!0&&item.wasVisible===!1){if(!trackedElements[selector].enter)return;Object.keys(trackedElements[selector].enter).forEach(function(callback){"function"==typeof trackedElements[selector].enter[callback]&&trackedElements[selector].enter[callback](item.node,"enter")})}if(item.isVisible===!1&&item.wasVisible===!0){if(!trackedElements[selector].leave)return;Object.keys(trackedElements[selector].leave).forEach(function(callback){"function"==typeof trackedElements[selector].leave[callback]&&trackedElements[selector].leave[callback](item.node,"leave")})}})}))}function debouncedScroll(){var _this=this,timeout=void 0;return function(){clearTimeout(timeout),timeout=setTimeout(function(){eventHandler(_this.trackedElements,_this.options)},_this.options.debounce)}}function destroy(){this.options.container.removeEventListener("scroll",this._scroll),window.removeEventListener("resize",this._scroll),this.attached=!1}function off(event,selector,handler){var enterCallbacks=Object.keys(this.trackedElements[selector].enter||{}),leaveCallbacks=Object.keys(this.trackedElements[selector].leave||{});if({}.hasOwnProperty.call(this.trackedElements,selector))if(handler){if(this.trackedElements[selector][event]){var callbackName="function"==typeof handler?handler.name:handler;delete this.trackedElements[selector][event][callbackName]}}else delete this.trackedElements[selector][event];enterCallbacks.length||leaveCallbacks.length||delete this.trackedElements[selector]}function on(event,selector,callback){var allowed=["enter","leave"];if(!event)throw new Error("No event given. Choose either enter or leave");if(!selector)throw new Error("No selector to track");if(allowed.indexOf(event)<0)throw new Error(event+" event is not supported");({}).hasOwnProperty.call(this.trackedElements,selector)||(this.trackedElements[selector]={}),this.trackedElements[selector].nodes=[];for(var i=0,elems=document.querySelectorAll(selector);i<elems.length;i++){var item={isVisible:!1,wasVisible:!1,node:elems[i]};this.trackedElements[selector].nodes.push(item)}"function"==typeof callback&&(this.trackedElements[selector][event]||(this.trackedElements[selector][event]={}),this.trackedElements[selector][event][callback.name||"anonymous"]=callback)}function observeDOM(obj,callback){var MutationObserver=window.MutationObserver||window.WebKitMutationObserver;if(MutationObserver){var obs=new MutationObserver(callback);obs.observe(obj,{childList:!0,subtree:!0})}else obj.addEventListener("DOMNodeInserted",callback,!1),obj.addEventListener("DOMNodeRemoved",callback,!1)}function OnScreen(){var _this=this,options=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{tolerance:0,debounce:100,container:window};this.options={},this.trackedElements={},Object.defineProperties(this.options,{container:{configurable:!1,enumerable:!1,get:function(){var container=void 0;return"string"==typeof options.container?container=document.querySelector(options.container):options.container instanceof HTMLElement&&(container=options.container),container||window},set:function(value){options.container=value}},debounce:{get:function(){return parseInt(options.debounce,10)||100},set:function(value){options.debounce=value}},tolerance:{get:function(){return parseInt(options.tolerance,10)||0},set:function(value){options.tolerance=value}}}),Object.defineProperty(this,"_scroll",{enumerable:!1,configurable:!1,writable:!1,value:this._debouncedScroll.call(this)}),observeDOM(document.querySelector("body"),function(){Object.keys(_this.trackedElements).forEach(function(element){_this.on("enter",element),_this.on("leave",element)})}),this.attach()}return Object.defineProperties(OnScreen.prototype,{_debouncedScroll:{configurable:!1,writable:!1,enumerable:!1,value:debouncedScroll},attach:{configurable:!1,writable:!1,enumerable:!1,value:attach},destroy:{configurable:!1,writable:!1,enumerable:!1,value:destroy},off:{configurable:!1,writable:!1,enumerable:!1,value:off},on:{configurable:!1,writable:!1,enumerable:!1,value:on}}),OnScreen.check=inViewport,OnScreen});
//# sourceMappingURL=dist/on-screen.umd.min.map