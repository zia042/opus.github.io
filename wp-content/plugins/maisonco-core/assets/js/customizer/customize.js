"use strict";function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var _typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},_createClass=function(){function e(e,t){for(var o=0;o<t.length;o++){var n=t[o];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}return function(t,o,n){return o&&e(t.prototype,o),n&&e(t,n),t}}();!function(e){e(document).ready(function(){new o,new c,new i,new a,new l,new t,new s,new r,wp.customize.previewer.bind("refresh-frame",function(){wp.customize.previewer.refresh()}),wp.customize.previewer.bind("opal-save-and-reload",function(){wp.customize.previewer.save().then(function(){wp.customize.previewer.refresh();var t=e("#customize-preview iframe").get(0);t.src=t.src})})});var t=function(){function t(){var o=this;_classCallCheck(this,t),this.button="[otf-button-move]",e(this.button).on("click",function(e){var t=e.target.getAttribute("data-id"),n=e.target.getAttribute("data-type");"section"===n?wp.customize.section(t).expand():"control"===n&&o.moveControl(t,n)}),wp.customize.previewer.bind("preview-move",function(e){"section"===e.type?wp.customize.section(e.id)&&wp.customize.section(e.id).expand():"control"===e.type&&o.moveControl(e.id,e.trigger)})}return _createClass(t,[{key:"moveControl",value:function(t,o){var n=wp.customize.control(t);n.expand(),setTimeout(function(){if(o)o=o.split("|"),o.length>1&&e(n.selector+" "+o[0]).trigger(o[1]);else{var t=e("input,select, button, textarea",n.selector).first(),a=t.val();t.focus(),t.val(""),t.val(a)}},550)}}]),t}(),o=function t(){_classCallCheck(this,t),e("input.alpha-color-control").alphaColorPicker()},n=function(){function e(){_classCallCheck(this,e)}return _createClass(e,null,[{key:"getId",value:function(e){return e.data("id")}},{key:"setValue",value:function(e,t){wp.customize.control(this.getId(e)).setting.set(t)}}]),e}();wp.customize.bind("ready",function(){wp.customize("osf_colors_buttons_enable_custom",function(t){var o=function(){var o={osf_colors_title_buttons_primary:{value:"true",equal:"="},osf_colors_buttons_primary_bg:{value:"true",equal:"="},osf_colors_buttons_primary_border:{value:"true",equal:"="},osf_colors_buttons_primary_color:{value:"true",equal:"="},osf_colors_buttons_primary_color_outline:{value:"true",equal:"="},osf_colors_title_buttons_secondary:{value:"true",equal:"="},osf_colors_buttons_secondary_bg:{value:"true",equal:"="},osf_colors_buttons_secondary_border:{value:"true",equal:"="},osf_colors_buttons_secondary_color:{value:"true",equal:"="},osf_colors_buttons_secondary_color_outline:{value:"true",equal:"="},osf_colors_title_buttons_primary_hover:{value:"true",equal:"="},osf_colors_buttons_primary_hover_bg:{value:"true",equal:"="},osf_colors_buttons_primary_hover_border:{value:"true",equal:"="},osf_colors_buttons_primary_hover_color:{value:"true",equal:"="},osf_colors_title_buttons_secondary_hover:{value:"true",equal:"="},osf_colors_buttons_secondary_hover_bg:{value:"true",equal:"="},osf_colors_buttons_secondary_hover_border:{value:"true",equal:"="},osf_colors_buttons_secondary_hover_color:{value:"true",equal:"="}},n=""+t.get();for(var a in o)e("#customize-control-"+a).hide(),"!="===o[a].equal?o[a].value!==n&&e("#customize-control-"+a).show():o[a].value===n&&e("#customize-control-"+a).show()};o(),t.bind(o)}),wp.customize("osf_layout_general_layout_mode",function(t){var o=function(){var o={osf_layout_general_layout_boxed_width:{value:"boxed",equal:"="},osf_layout_general_layout_boxed_offset:{value:"boxed",equal:"="}},n=""+t.get();for(var a in o)e("#customize-control-"+a).hide(),"!="===o[a].equal?o[a].value!==n&&e("#customize-control-"+a).show():o[a].value===n&&e("#customize-control-"+a).show()};o(),t.bind(o)}),wp.customize("osf_layout_general_content_width_type",function(t){var o=function(){var o={osf_layout_general_content_width_px:{value:"px",equal:"="},osf_layout_general_content_width_percent:{value:"%",equal:"="}},n=""+t.get();for(var a in o)e("#customize-control-"+a).hide(),"!="===o[a].equal?o[a].value!==n&&e("#customize-control-"+a).show():o[a].value===n&&e("#customize-control-"+a).show()};o(),t.bind(o)}),wp.customize("osf_page_404_page_enable",function(t){var o=function(){var o={osf_page_404_bg_image:{value:"default",equal:"="},osf_page_404_bg_position:{value:"default",equal:"="},osf_page_404_bg_repeat:{value:"default",equal:"="},osf_page_404_bg:{value:"default",equal:"="},osf_page_404_page_custom:{value:"custom",equal:"="}},n=""+t.get();for(var a in o)e("#customize-control-"+a).hide(),"!="===o[a].equal?o[a].value!==n&&e("#customize-control-"+a).show():o[a].value===n&&e("#customize-control-"+a).show()};o(),t.bind(o)}),wp.customize("osf_header_enable_builder",function(t){var o=function(){var o={osf_header_builder:{value:"true",equal:"="},osf_header_width:{value:"true",equal:"!="}},n=""+t.get();for(var a in o)e("#customize-control-"+a).hide(),"!="===o[a].equal?o[a].value!==n&&e("#customize-control-"+a).show():o[a].value===n&&e("#customize-control-"+a).show()};o(),t.bind(o)}),wp.customize("osf_footer_layout",function(t){var o=function(){var o={osf_footer_copyright:{value:"0",equal:"="}},n=""+t.get();for(var a in o)e("#customize-control-"+a).hide(),"!="===o[a].equal?o[a].value!==n&&e("#customize-control-"+a).show():o[a].value===n&&e("#customize-control-"+a).show()};o(),t.bind(o)})}),function(e,t){e(window).load(function(){e("textarea.wp-editor-area").each(function(){var t,o,n=e(this),a=n.attr("id"),i=e('input[data-customize-setting-link="'+a+'"]'),l=tinyMCE.get(a);l&&l.on("change",function(e){l.save(),o=l.getContent(),clearTimeout(t),t=setTimeout(function(){i.val(o).trigger("change")},500)}),n.css("visibility","visible").on("keyup",function(){o=n.val(),clearTimeout(t),t=setTimeout(function(){i.val(o).trigger("change")},500)})})})}(jQuery,wp.customize);var a=function(){function t(){var o=this;_classCallCheck(this,t),this.container="[otf-font-style-control]",this.italic=".otf-italic",this.fontWeight=".otf-font-weight",this.underline=".otf-underline",this.uppercase=".otf-uppercase",e("#customize-theme-controls "+this.container).each(function(t,n){e(o.italic+", "+o.fontWeight+", "+o.underline+", "+o.uppercase,n).on("change",function(t){o.setValue(e(t.currentTarget).closest(o.container))})})}return _createClass(t,[{key:"setValue",value:function(e){var t={italic:e.find(this.italic).prop("checked"),underline:e.find(this.underline).prop("checked"),fontWeight:e.find(this.fontWeight).prop("checked"),uppercase:e.find(this.uppercase).prop("checked")};n.setValue(e,t)}}]),t}(),i=function(){function t(){var o=this;_classCallCheck(this,t),this.container="[otf-fonts-control]",this.googleFont=".otf-customize-google-fonts",this.googleFontWeight=".otf-font-weight select",this.googleFontSubsets=".otf-font-subsets select",e("#customize-theme-controls "+this.container).each(function(t,n){var a=e(n);o.initSelect2(a.find(o.googleFont)),o.initFontExtend(a.find(o.googleFontWeight)),o.initFontExtend(a.find(o.googleFontSubsets))})}return _createClass(t,[{key:"initFontExtend",value:function(e){var t=this;e.val(e.data("value")),e.on("change",function(){t.setValue(e.closest(t.container))})}},{key:"initSelect2",value:function(e){var t=this;this.initFontStyleHtml(e),e.select2_custom({templateResult:this.renderTemplate,templateSelection:this.renderTemplate}).on("change",function(){t.initFontStyleHtml(e),t.setValue(e.closest(t.container))})}},{key:"setValue",value:function(e){var t={family:e.find(this.googleFont+" option:selected").attr("value"),subsets:e.find(this.googleFontSubsets+" option:selected").attr("value"),fontWeight:e.find(this.googleFontWeight+" option:selected").attr("value")};n.setValue(e,t)}},{key:"initFontStyleHtml",value:function(e){var t=e.closest(this.container),o=e.children("option:selected").data("info"),n="",a="";if("object"===(void 0===o?"undefined":_typeof(o))){if(o.variants){n+='<option value="400">400</option>';var i=!0,l=!1,s=void 0;try{for(var r,c=o.variants[Symbol.iterator]();!(i=(r=c.next()).done);i=!0){var u=r.value;n+='<option value="'+u+'">'+u+"</option>"}}catch(e){l=!0,s=e}finally{try{!i&&c.return&&c.return()}finally{if(l)throw s}}}if(o.subsets){var f=!0,v=!1,d=void 0;try{for(var h,_=o.subsets[Symbol.iterator]();!(f=(h=_.next()).done);f=!0){var m=h.value;a+='<option value="'+m+'">'+m+"</option>"}}catch(e){v=!0,d=e}finally{try{!f&&_.return&&_.return()}finally{if(v)throw d}}}}t.find(".otf-font-weight select").html(n),t.find(".otf-font-subsets select").html(a)}},{key:"renderTemplate",value:function(t){if(!t.id)return t.text;var o=t.id.toLocaleLowerCase().replace(/\s+/,"-");return e("<span>"+t.text+'</span><span class="otf-font '+o+'"></span>')}}]),t}(),l=function(){function t(){var o=this;_classCallCheck(this,t),this.container="[otf-select-image-control]",this.listImage=".select-list-image",this.settingId="",this.$container="",this.createImageSelectLayout(),e("body").on("click",function(t){e(t.currentTarget).hasClass("changing-image")&&o.closePanel()}),e("#customize-theme-controls "+this.container+" "+this.listImage+" li").on("click",function(t){var a=e(t.currentTarget);if(!a.hasClass("active")){var i=a.closest(o.listImage),l=a.closest(o.container);i.children("li").removeClass("active"),a.addClass("active"),n.setValue(l,a.find("img").attr("alt"))}}),e(document).on("click",".button-change-image",function(t){t.preventDefault();var n=e("body");if(n.hasClass("changing-image"))o.closePanel();else{o.$container=e(t.currentTarget).closest(".opal-control-image-select");var a=o.$container.children(".image-select"),i=a.html();o.settingId=o.$container.data("id"),o.setPanelContent(i.trim()),n.addClass("changing-image")}}).on("click",".image-select-tpl",function(t){t.stopPropagation();var a=e(t.currentTarget);if(!a.hasClass("active")&&o.$container){var i=e("#customize-control-"+o.settingId),l=a.children("img").attr("alt");i.find(".image-select-tpl").removeClass("active"),i.find('.image-select-tpl[data-value="'+l+'"]').addClass("active"),n.setValue(o.$container,l)}o.closePanel()})}return _createClass(t,[{key:"createImageSelectLayout",value:function(){e("body .wp-full-overlay").append('<div id="select-image-left">\x3c!-- compatibility with JS which looks for widget templates here --\x3e\n    <div id="available-select-image">\n        <div id="available-images-list">\n                \n        </div>\x3c!-- #available-images-list --\x3e\n    </div>\x3c!-- #available-select-image --\x3e\n</div>')}},{key:"setPanelContent",value:function(t){e("#available-images-list").html(t)}},{key:"closePanel",value:function(){e("body").removeClass("changing-image")}}]),t}();e(document).ready(function(){e(".otf-select-group-button").each(function(t,o){var n=e(o),a=n.find(">select"),i=n.find(">.button"),l=a.val();if(""!==l){var s=n.find('option[value="'+l+'"]').data("id");s&&(i.attr("href",i.data("link")+"&post="+s),i.show())}})});var s=function(){function t(){_classCallCheck(this,t),this.container="#otf-customize-quick-search",e("#customize-header-actions").length>0&&this.init()}return _createClass(t,[{key:"init",value:function(){}},{key:"renderHtml",value:function(){return'<div id="'+this.container.replace("#","")+'">\n    <input class="search-for" type="text" value="" placeholder="Search...">\n    <div class="search-results hidden"></div>\n</div>'}}]),t}(),r=function t(){_classCallCheck(this,t),e("#customize-theme-controls .osf-switch-sidebar").on("change",function(t){e(t.currentTarget).next().find("button").attr("data-id","sidebar-widgets-"+t.currentTarget.value)})},c=function(){function t(){var o=this;_classCallCheck(this,t),e(".otf-customize-slider .otf-slider").each(function(e,t){o.initSlider(t)})}return _createClass(t,[{key:"initSlider",value:function(t){var o=e(t),n=o.data("id"),a=o.data("unit")?o.data("unit"):"";o.slider({range:"min",min:o.data("min"),max:o.data("max"),step:o.data("step"),value:o.data("value"),create:function(e,t){o.children(".ui-slider-handle").html("<span>"+o.slider("value")+a+"</span>")},slide:function(e,t){o.children(".ui-slider-handle").html("<span>"+t.value+a+"</span>"),wp.customize.control(n).setting.set(t.value)},change:function(e,t){o.children(".ui-slider-handle").html("<span>"+t.value+a+"</span>"),wp.customize.control(n).setting.set(t.value)}}),o.next().on("click",function(){o.slider("value",o.data("default-value"))})}}]),t}()}(jQuery);
//# sourceMappingURL=customize.js.map