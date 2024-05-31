window.cfields = [];
window._show_thank_you = function(id, message, trackcmp_url, email) {
    var form = document.getElementById('_form_' + id + '_'), thank_you = form.querySelector('._form-thank-you');
    form.querySelector('._form-content').style.display = 'none';
    thank_you.innerHTML = message;
    thank_you.style.display = 'block';
    const vgoAlias = typeof visitorGlobalObjectAlias === 'undefined' ? 'vgo' : visitorGlobalObjectAlias;
    var visitorObject = window[vgoAlias];
    if (email && typeof visitorObject !== 'undefined') {
        visitorObject('setEmail', email);
        visitorObject('update');
    } else if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
        // Site tracking URL to use after inline form submission.
        _load_script(trackcmp_url);
    }
    if (typeof window._form_callback !== 'undefined') window._form_callback(id);
};
window._show_unsubscribe = function(id, message, trackcmp_url, email) {
    var form = document.getElementById('_form_' + id + '_'), unsub = form.querySelector('._form-thank-you');
    var branding = form.querySelector('._form-branding');
    if (branding) {
        branding.style.display = 'none';
    }
    form.querySelector('._form-content').style.display = 'none';
    unsub.style.display = 'block';
    form.insertAdjacentHTML('afterend', message)
    const vgoAlias = typeof visitorGlobalObjectAlias === 'undefined' ? 'vgo' : visitorGlobalObjectAlias;
    var visitorObject = window[vgoAlias];
    if (email && typeof visitorObject !== 'undefined') {
        visitorObject('setEmail', email);
        visitorObject('update');
    } else if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
        // Site tracking URL to use after inline form submission.
        _load_script(trackcmp_url);
    }
    if (typeof window._form_callback !== 'undefined') window._form_callback(id);
};
window._show_error = function(id, message, html) {
    var form = document.getElementById('_form_' + id + '_'),
        err = document.createElement('div'),
        button = form.querySelector('button'),
        old_error = form.querySelector('._form_error');
    if (old_error) old_error.parentNode.removeChild(old_error);
    err.innerHTML = message;
    err.className = '_error-inner _form_error _no_arrow';
    var wrapper = document.createElement('div');
    wrapper.className = '_form-inner';
    wrapper.appendChild(err);
    button.parentNode.insertBefore(wrapper, button);
    var submitButton = form.querySelector('[id^="_form"][id$="_submit"]');
    submitButton.disabled = false;
    submitButton.classList.remove('processing');
    if (html) {
        var div = document.createElement('div');
        div.className = '_error-html';
        div.innerHTML = html;
        err.appendChild(div);
    }
};
window._load_script = function(url, callback, isSubmit) {
    var head = document.querySelector('head'), script = document.createElement('script'), r = false;
    var submitButton = document.querySelector('#_form_9_submit');
    script.charset = 'utf-8';
    script.src = url;
    if (callback) {
        script.onload = script.onreadystatechange = function() {
            if (!r && (!this.readyState || this.readyState == 'complete')) {
                r = true;
                callback();
            }
        };
    }
    script.onerror = function() {
        if (isSubmit) {
            if (script.src.length > 10000) {
                _show_error("6656C1BD5CDB0", "Sorry, your submission failed. Please shorten your responses and try again.");
            } else {
                _show_error("6656C1BD5CDB0", "Sorry, your submission failed. Please try again.");
            }
            submitButton.disabled = false;
            submitButton.classList.remove('processing');
        }
    }

    head.appendChild(script);
};
(function() {
    if (window.location.search.search("excludeform") !== -1) return false;
    var getCookie = function(name) {
        var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
        return match ? match[2] : null;
    }
    var setCookie = function(name, value) {
        var now = new Date();
        var time = now.getTime();
        var expireTime = time + 1000 * 60 * 60 * 24 * 365;
        now.setTime(expireTime);
        document.cookie = name + '=' + value + '; expires=' + now + ';path=/; Secure; SameSite=Lax;';
    }
            var addEvent = function(element, event, func) {
        if (element.addEventListener) {
            element.addEventListener(event, func);
        } else {
            var oldFunc = element['on' + event];
            element['on' + event] = function() {
                oldFunc.apply(this, arguments);
                func.apply(this, arguments);
            };
        }
    }
    var _removed = false;
    var _form_output = '\<style\>\n#_form_6656C1BD5CDB0_{font-size:14px;line-height:1.6;font-family:arial, helvetica, sans-serif;margin:0}#_form_6656C1BD5CDB0_ *{outline:0}._form_hide{display:none;visibility:hidden}._form_show{display:block;visibility:visible}#_form_6656C1BD5CDB0_._form-top{top:0}#_form_6656C1BD5CDB0_._form-bottom{bottom:0}#_form_6656C1BD5CDB0_._form-left{left:0}#_form_6656C1BD5CDB0_._form-right{right:0}#_form_6656C1BD5CDB0_ input[type=\"text\"],#_form_6656C1BD5CDB0_ input[type=\"tel\"],#_form_6656C1BD5CDB0_ input[type=\"date\"],#_form_6656C1BD5CDB0_ textarea{padding:6px;height:auto;border:#979797 1px solid;border-radius:4px;color:#000000 !important;font-size:14px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}#_form_6656C1BD5CDB0_ textarea{resize:none}#_form_6656C1BD5CDB0_ ._submit{-webkit-appearance:none;cursor:pointer;font-family:arial, sans-serif;font-size:14px;text-align:center;background:#62A744 !important;border:0 !important;-moz-border-radius:4px !important;-webkit-border-radius:4px !important;border-radius:4px !important;color:#FFFFFF !important;padding:6px !important}#_form_6656C1BD5CDB0_ ._submit:disabled{cursor:not-allowed;opacity:0.4}#_form_6656C1BD5CDB0_ ._submit.processing{position:relative}#_form_6656C1BD5CDB0_ ._submit.processing::before{content:\"\";width:1em;height:1em;position:absolute;z-index:1;top:50%;left:50%;border:double 3px transparent;border-radius:50%;background-image:linear-gradient(#62A744, #62A744), conic-gradient(#62A744, #FFFFFF);background-origin:border-box;background-clip:content-box, border-box;animation:1200ms ease 0s infinite normal none running _spin}#_form_6656C1BD5CDB0_ ._submit.processing::after{content:\"\";position:absolute;top:0;bottom:0;left:0;right:0;background:#62A744 !important;border:0 !important;-moz-border-radius:4px !important;-webkit-border-radius:4px !important;border-radius:4px !important;color:#FFFFFF !important;padding:6px !important}@keyframes _spin{0%{transform:translate(-50%, -50%) rotate(90deg)}100%{transform:translate(-50%, -50%) rotate(450deg)}}#_form_6656C1BD5CDB0_ ._close-icon{cursor:pointer;background-image:url(\"https:\/\/d226aj4ao1t61q.cloudfront.net\/esfkyjh1u_forms-close-dark.png\");background-repeat:no-repeat;background-size:14.2px 14.2px;position:absolute;display:block;top:11px;right:9px;overflow:hidden;width:16.2px;height:16.2px}#_form_6656C1BD5CDB0_ ._close-icon:before{position:relative}#_form_6656C1BD5CDB0_ ._form-body{margin-bottom:30px}#_form_6656C1BD5CDB0_ ._form-image-left{width:150px;float:left}#_form_6656C1BD5CDB0_ ._form-content-right{margin-left:164px}#_form_6656C1BD5CDB0_ ._form-branding{color:#fff;font-size:10px;clear:both;text-align:left;margin-top:30px;font-weight:100}#_form_6656C1BD5CDB0_ ._form-branding ._logo{display:block;width:130px;height:14px;margin-top:6px;background-image:url(\"https:\/\/d226aj4ao1t61q.cloudfront.net\/hh9ujqgv5_aclogo_li.png\");background-size:130px auto;background-repeat:no-repeat}#_form_6656C1BD5CDB0_ .form-sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}#_form_6656C1BD5CDB0_ ._form-label,#_form_6656C1BD5CDB0_ ._form_element ._form-label{font-weight:bold;margin-bottom:5px;display:block}#_form_6656C1BD5CDB0_._dark ._form-branding{color:#333}#_form_6656C1BD5CDB0_._dark ._form-branding ._logo{background-image:url(\"https:\/\/d226aj4ao1t61q.cloudfront.net\/jftq2c8s_aclogo_dk.png\")}#_form_6656C1BD5CDB0_ ._form_element{position:relative;margin-bottom:10px;font-size:0;max-width:100%}#_form_6656C1BD5CDB0_ ._form_element *{font-size:14px}#_form_6656C1BD5CDB0_ ._form_element._clear{clear:both;width:100%;float:none}#_form_6656C1BD5CDB0_ ._form_element._clear:after{clear:left}#_form_6656C1BD5CDB0_ ._form_element input[type=\"text\"],#_form_6656C1BD5CDB0_ ._form_element input[type=\"date\"],#_form_6656C1BD5CDB0_ ._form_element select,#_form_6656C1BD5CDB0_ ._form_element textarea:not(.g-recaptcha-response){display:block;width:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;font-family:inherit}#_form_6656C1BD5CDB0_ ._field-wrapper{position:relative}#_form_6656C1BD5CDB0_ ._inline-style{float:left}#_form_6656C1BD5CDB0_ ._inline-style input[type=\"text\"]{width:150px}#_form_6656C1BD5CDB0_ ._inline-style:not(._clear)+._inline-style:not(._clear){margin-left:20px}#_form_6656C1BD5CDB0_ ._form_element img._form-image{max-width:100%}#_form_6656C1BD5CDB0_ ._form_element ._form-fieldset{border:0;padding:0.01em 0 0 0;margin:0;min-width:0}#_form_6656C1BD5CDB0_ ._clear-element{clear:left}#_form_6656C1BD5CDB0_ ._full_width{width:100%}#_form_6656C1BD5CDB0_ ._form_full_field{display:block;width:100%;margin-bottom:10px}#_form_6656C1BD5CDB0_ input[type=\"text\"]._has_error,#_form_6656C1BD5CDB0_ textarea._has_error{border:#F37C7B 1px solid}#_form_6656C1BD5CDB0_ input[type=\"checkbox\"]._has_error{outline:#F37C7B 1px solid}#_form_6656C1BD5CDB0_ ._error{display:block;position:absolute;font-size:14px;z-index:10000001}#_form_6656C1BD5CDB0_ ._error._above{padding-bottom:4px;bottom:39px;right:0}#_form_6656C1BD5CDB0_ ._error._below{padding-top:8px;top:100%;right:0}#_form_6656C1BD5CDB0_ ._error._above ._error-arrow{bottom:-4px;right:15px;border-left:8px solid transparent;border-right:8px solid transparent;border-top:8px solid #FFDDDD}#_form_6656C1BD5CDB0_ ._error._below ._error-arrow{top:0;right:15px;border-left:8px solid transparent;border-right:8px solid transparent;border-bottom:8px solid #FFDDDD}#_form_6656C1BD5CDB0_ ._error-inner{padding:12px 12px 12px 36px;background-color:#FFDDDD;background-image:url(\"data:image\/svg+xml,%3Csvg width=\'16\' height=\'16\' viewBox=\'0 0 16 16\' fill=\'none\' xmlns=\'http:\/\/www.w3.org\/2000\/svg\'%3E%3Cpath fill-rule=\'evenodd\' clip-rule=\'evenodd\' d=\'M16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8ZM9 3V9H7V3H9ZM9 13V11H7V13H9Z\' fill=\'%23CA0000\'\/%3E%3C\/svg%3E\");background-repeat:no-repeat;background-position:12px center;font-size:14px;font-family:arial, sans-serif;font-weight:600;line-height:16px;color:#000;text-align:center;text-decoration:none;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;box-shadow:0px 1px 4px rgba(31, 33, 41, 0.298295)}#_form_6656C1BD5CDB0_ ._error-inner._form_error{margin-bottom:5px;text-align:left}#_form_6656C1BD5CDB0_ ._button-wrapper ._error-inner._form_error{position:static}#_form_6656C1BD5CDB0_ ._error-inner._no_arrow{margin-bottom:10px}#_form_6656C1BD5CDB0_ ._error-arrow{position:absolute;width:0;height:0}#_form_6656C1BD5CDB0_ ._error-html{margin-bottom:10px}.pika-single{z-index:10000001 !important}#_form_6656C1BD5CDB0_ input[type=\"text\"].datetime_date{width:69%;display:inline}#_form_6656C1BD5CDB0_ select.datetime_time{width:29%;display:inline;height:32px}#_form_6656C1BD5CDB0_ input[type=\"date\"].datetime_date{width:69%;display:inline-flex}#_form_6656C1BD5CDB0_ input[type=\"time\"].datetime_time{width:29%;display:inline-flex}@media (min-width:320px) and (max-width:667px){::-webkit-scrollbar{display:none}#_form_6656C1BD5CDB0_{margin:0;width:100%;min-width:100%;max-width:100%;box-sizing:border-box}#_form_6656C1BD5CDB0_ *{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;font-size:1em}#_form_6656C1BD5CDB0_ ._form-content{margin:0;width:100%}#_form_6656C1BD5CDB0_ ._form-inner{display:block;min-width:100%}#_form_6656C1BD5CDB0_ ._form-title,#_form_6656C1BD5CDB0_ ._inline-style{margin-top:0;margin-right:0;margin-left:0}#_form_6656C1BD5CDB0_ ._form-title{font-size:1.2em}#_form_6656C1BD5CDB0_ ._form_element{margin:0 0 20px;padding:0;width:100%}#_form_6656C1BD5CDB0_ ._form-element,#_form_6656C1BD5CDB0_ ._inline-style,#_form_6656C1BD5CDB0_ input[type=\"text\"],#_form_6656C1BD5CDB0_ label,#_form_6656C1BD5CDB0_ p,#_form_6656C1BD5CDB0_ textarea:not(.g-recaptcha-response){float:none;display:block;width:100%}#_form_6656C1BD5CDB0_ ._row._checkbox-radio label{display:inline}#_form_6656C1BD5CDB0_ ._row,#_form_6656C1BD5CDB0_ p,#_form_6656C1BD5CDB0_ label{margin-bottom:0.7em;width:100%}#_form_6656C1BD5CDB0_ ._row input[type=\"checkbox\"],#_form_6656C1BD5CDB0_ ._row input[type=\"radio\"]{margin:0 !important;vertical-align:middle !important}#_form_6656C1BD5CDB0_ ._row input[type=\"checkbox\"]+span label{display:inline}#_form_6656C1BD5CDB0_ ._row span label{margin:0 !important;width:initial !important;vertical-align:middle !important}#_form_6656C1BD5CDB0_ ._form-image{max-width:100%;height:auto !important}#_form_6656C1BD5CDB0_ input[type=\"text\"]{padding-left:10px;padding-right:10px;font-size:16px;line-height:1.3em;-webkit-appearance:none}#_form_6656C1BD5CDB0_ input[type=\"radio\"],#_form_6656C1BD5CDB0_ input[type=\"checkbox\"]{display:inline-block;width:1.3em;height:1.3em;font-size:1em;margin:0 0.3em 0 0;vertical-align:baseline}#_form_6656C1BD5CDB0_ button[type=\"submit\"]{padding:20px;font-size:1.5em}#_form_6656C1BD5CDB0_ ._inline-style{margin:20px 0 0 !important}}#_form_6656C1BD5CDB0_{position:relative;text-align:left;margin:25px auto 0;padding:20px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;background:transparent !important;border:0px solid #CCCCCC !important;max-width:600px;-moz-border-radius:0px !important;-webkit-border-radius:0px !important;border-radius:0px !important;color:#000000}#_form_6656C1BD5CDB0_._inline-form,#_form_6656C1BD5CDB0_._inline-form ._form-content{font-family:Helvetica, Arial, sans-serif}#_form_6656C1BD5CDB0_._inline-form ._row span,#_form_6656C1BD5CDB0_._inline-form ._row label{font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:1.6em}#_form_6656C1BD5CDB0__inlineform input[type=\"text\"],#_form_6656C1BD5CDB0__inlineform input[type=\"date\"],#_form_6656C1BD5CDB0__inlineform input[type=\"tel\"],#_form_6656C1BD5CDB0__inlineform select,#_form_6656C1BD5CDB0__inlineform textarea:not(.g-recaptcha-response){font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;font-color:#000000;line-height:1.6em}#_form_6656C1BD5CDB0_._inline-form ._html-code *,#_form_6656C1BD5CDB0_._inline-form ._form-thank-you{font-family:Helvetica, Arial, sans-serif}#_form_6656C1BD5CDB0_._inline-form ._form-label,#_form_6656C1BD5CDB0_._inline-form ._form-checkbox-option-label,#_form_6656C1BD5CDB0_._inline-form ._form-checkbox-option-description{font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:700;line-height:1.6em}#_form_6656C1BD5CDB0_._inline-form ._submit{font-family:Helvetica, Arial, sans-serif}#_form_6656C1BD5CDB0_._inline-form ._form-title{font-size:22px;line-height:normal;font-weight:600;margin-bottom:0}#_form_6656C1BD5CDB0_._inline-form ._form-branding{font-family:\"IBM Plex Sans\", Helvetica, sans-serif;font-size:13px;font-weight:100;font-style:normal;text-decoration:none}#_form_6656C1BD5CDB0_:before,#_form_6656C1BD5CDB0_:after{content:\" \";display:table}#_form_6656C1BD5CDB0_:after{clear:both}#_form_6656C1BD5CDB0_._inline-style{width:auto;display:inline-block}#_form_6656C1BD5CDB0_._inline-style input[type=\"text\"],#_form_6656C1BD5CDB0_._inline-style input[type=\"date\"]{padding:10px 12px}#_form_6656C1BD5CDB0_._inline-style button._inline-style{position:relative;top:27px}#_form_6656C1BD5CDB0_._inline-style p{margin:0}#_form_6656C1BD5CDB0_._inline-style ._button-wrapper{position:relative;margin:27px 12.5px 0 20px}#_form_6656C1BD5CDB0_ ._form-thank-you{position:relative;left:0;right:0;text-align:center;font-size:18px}@media (min-width:320px) and (max-width:667px){#_form_6656C1BD5CDB0_._inline-form._inline-style ._inline-style._button-wrapper{margin-top:20px !important;margin-left:0 !important}}#_form_6656C1BD5CDB0_ .iti.iti--allow-dropdown.iti--separate-dial-code{width:100%}#_form_6656C1BD5CDB0_ .iti input{width:100%;height:32px;border:#979797 1px solid;border-radius:4px}#_form_6656C1BD5CDB0_ .iti--separate-dial-code .iti__selected-flag{background-color:#FFFFFF;border-radius:4px}#_form_6656C1BD5CDB0_ .iti--separate-dial-code .iti__selected-flag:hover{background-color:rgba(0, 0, 0, 0.05)}#_form_6656C1BD5CDB0_ .iti__country-list{border-radius:4px;margin-top:4px;min-width:460px}#_form_6656C1BD5CDB0_ .iti__country-list--dropup{margin-bottom:4px}#_form_6656C1BD5CDB0_ .phone-error-hidden{display:none}#_form_6656C1BD5CDB0_ .phone-error{color:#E40E49}#_form_6656C1BD5CDB0_ .phone-input-error{border:1px solid #E40E49 !important}#_form_6656C1BD5CDB0_._inline-form ._form-content ._form-list-subscriptions-field fieldset{margin:0;margin-bottom:1.1428571429em;border:none;padding:0}#_form_6656C1BD5CDB0_._inline-form ._form-content ._form-list-subscriptions-field fieldset:last-child{margin-bottom:0}#_form_6656C1BD5CDB0_._inline-form ._form-content ._form-list-subscriptions-field legend{margin-bottom:1.1428571429em}#_form_6656C1BD5CDB0_._inline-form ._form-content ._form-list-subscriptions-field label{display:flex;align-items:flex-start;justify-content:flex-start;margin-bottom:0.8571428571em}#_form_6656C1BD5CDB0_._inline-form ._form-content ._form-list-subscriptions-field label:last-child{margin-bottom:0}#_form_6656C1BD5CDB0_._inline-form ._form-content ._form-list-subscriptions-field input{margin:0;margin-right:8px}#_form_6656C1BD5CDB0_._inline-form ._form-content ._form-list-subscriptions-field ._form-checkbox-option-label{line-height:1;display:block;font-weight:700}#_form_6656C1BD5CDB0_._inline-form ._form-content ._form-list-subscriptions-field ._form-checkbox-option-description{margin:0;margin-top:0.3333333333em;font-size:0.8571428571em}\n#_form_6656C1BD5CDB0_._form_9{padding:0px !important}#_form_6656C1BD5CDB0_._form_9 label{margin:0px !important}#_form_6656C1BD5CDB0_._form_9 ._submit{width:100%;font-family:\"azo-sans-web\" !important}#_form_6656C1BD5CDB0_._form_9 ._submit,#_form_6656C1BD5CDB0_._form_9 input{font-size:14px !important}#_form_6656C1BD5CDB0_._form_9 input{font-family:\"soleil\" !important;border-color:#cccccc !important}\<\/style\>\n\n\<form method=\"POST\" action=\"//ac.digilent.com\/proc.php\" id=\"_form_6656C1BD5CDB0_\" class=\"_form _form_9 _inline-form  _dark\" novalidate data-styles-version=\"5\"\>\n    \<input type=\"hidden\" name=\"u\" value=\"6656C1BD5CDB0\" \/\>\n    \<input type=\"hidden\" name=\"f\" value=\"9\" \/\>\n    \<input type=\"hidden\" name=\"s\" \/\>\n    \<input type=\"hidden\" name=\"c\" value=\"0\" \/\>\n    \<input type=\"hidden\" name=\"m\" value=\"0\" \/\>\n    \<input type=\"hidden\" name=\"act\" value=\"sub\" \/\>\n    \<input type=\"hidden\" name=\"v\" value=\"2\" \/\>\n    \<input type=\"hidden\" name=\"or\" value=\"45f0736892168e1ae2dc77957d8a0303\" \/\>\n    \<div class=\"_form-content\"\>\n                            \<div class=\"_form_element _x00495126 _full_width \" \>\n                        \<label for=\"email\" class=\"_form-label\"\>\<\/label\>\n            \<div class=\"_field-wrapper\"\>\n                \<input type=\"text\" id=\"email\" name=\"email\" placeholder=\"Your email address\" required\/\>\n            \<\/div\>\n\n                    \<\/div\>\n                \<div class=\"_button-wrapper _full_width\"\>\<button id=\"_form_9_submit\" class=\"_submit\" type=\"submit\"\>Submit\<\/button\>\<\/div\>        \<div class=\"_clear-element\"\>\<\/div\>\n    \<\/div\>\n    \<div class=\"_form-thank-you\" style=\"display:none;\"\>\<\/div\>\n    \<\/form\>\n';
        var _form_element = null, _form_elements = document.querySelectorAll('._form_9');
    for (var fe = 0; fe < _form_elements.length; fe++) {
        _form_element = _form_elements[fe];
        if (_form_element.innerHTML.trim() === '') break;
        _form_element = null;
    }
    if (!_form_element) {
        _form_element = document.createElement('div');
        if (!document.body) { document.firstChild.appendChild(document.createElement('body')); }
        document.body.appendChild(_form_element);
    }
    _form_element.innerHTML = _form_output;
        var form_to_submit = document.getElementById('_form_6656C1BD5CDB0_');
    var allInputs = form_to_submit.querySelectorAll('input, select, textarea'), tooltips = [], submitted = false;

    var getUrlParam = function(name) {
        if (name.toLowerCase() !== 'email') {
            var params = new URLSearchParams(window.location.search);
            return params.get(name) || false;
        }
        // email is a special case because a plus is valid in the email address
        var qString = window.location.search;
        if (!qString) {
            return false;
        }
        var parameters = qString.substr(1).split('&');
        for (var i = 0; i < parameters.length; i++) {
            var parameter = parameters[i].split('=');
            if (parameter[0].toLowerCase() === 'email') {
                return parameter[1] === undefined ? true : decodeURIComponent(parameter[1]);
            }
        }
        return false;
    };

    var acctDateFormat = "%m/%d/%Y";
    var getNormalizedDate = function(date, acctFormat) {
        var decodedDate = decodeURIComponent(date);
        if (acctFormat && acctFormat.match(/(%d|%e).*%m/gi) !== null) {
            return decodedDate.replace(/(\d{2}).*(\d{2}).*(\d{4})/g, '$3-$2-$1');
        } else if (Date.parse(decodedDate)) {
            var dateObj = new Date(decodedDate);
            var year = dateObj.getFullYear();
            var month = dateObj.getMonth() + 1;
            var day = dateObj.getDate();
            return `${year}-${month < 10 ? `0${month}` : month}-${day < 10 ? `0${day}` : day}`;
        }
        return false;
    };

    var getNormalizedTime = function(time) {
        var hour, minutes;
        var decodedTime = decodeURIComponent(time);
        var timeParts = Array.from(decodedTime.matchAll(/(\d{1,2}):(\d{1,2})\W*([AaPp][Mm])?/gm))[0];
        if (timeParts[3]) { // 12 hour format
            var isPM = timeParts[3].toLowerCase() === 'pm';
            if (isPM) {
                hour = parseInt(timeParts[1]) === 12 ? '12' : `${parseInt(timeParts[1]) + 12}`;
            } else {
                hour = parseInt(timeParts[1]) === 12 ? '0' : timeParts[1];
            }
        } else { // 24 hour format
            hour = timeParts[1];
        }
        var normalizedHour = parseInt(hour) < 10 ? `0${parseInt(hour)}` : hour;
        var minutes = timeParts[2];
        return `${normalizedHour}:${minutes}`;
    };

    for (var i = 0; i < allInputs.length; i++) {
        var regexStr = "field\\[(\\d+)\\]";
        var results = new RegExp(regexStr).exec(allInputs[i].name);
        if (results != undefined) {
            allInputs[i].dataset.name = allInputs[i].name.match(/\[time\]$/)
                ? `${window.cfields[results[1]]}_time`
                : window.cfields[results[1]];
        } else {
            allInputs[i].dataset.name = allInputs[i].name;
        }
        var fieldVal = getUrlParam(allInputs[i].dataset.name);

        if (fieldVal) {
            if (allInputs[i].dataset.autofill === "false") {
                continue;
            }
            if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
                if (allInputs[i].value == fieldVal) {
                    allInputs[i].checked = true;
                }
            } else if (allInputs[i].type == "date") {
                allInputs[i].value = getNormalizedDate(fieldVal, acctDateFormat);
            } else if (allInputs[i].type == "time") {
                allInputs[i].value = getNormalizedTime(fieldVal);
            } else {
                allInputs[i].value = fieldVal;
            }
        }
    }

    var remove_tooltips = function() {
        for (var i = 0; i < tooltips.length; i++) {
            tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
        }
        tooltips = [];
    };
    var remove_tooltip = function(elem) {
        for (var i = 0; i < tooltips.length; i++) {
            if (tooltips[i].elem === elem) {
                tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
                tooltips.splice(i, 1);
                return;
            }
        }
    };
    var create_tooltip = function(elem, text) {
        var tooltip = document.createElement('div'),
            arrow = document.createElement('div'),
            inner = document.createElement('div'), new_tooltip = {};
        if (elem.type != 'radio' && elem.type != 'checkbox') {
            tooltip.className = '_error';
            arrow.className = '_error-arrow';
            inner.className = '_error-inner';
            inner.innerHTML = text;
            tooltip.appendChild(arrow);
            tooltip.appendChild(inner);
            elem.parentNode.appendChild(tooltip);
        } else {
            tooltip.className = '_error-inner _no_arrow';
            tooltip.innerHTML = text;
            elem.parentNode.insertBefore(tooltip, elem);
            new_tooltip.no_arrow = true;
        }
        new_tooltip.tip = tooltip;
        new_tooltip.elem = elem;
        tooltips.push(new_tooltip);
        return new_tooltip;
    };
    var resize_tooltip = function(tooltip) {
        var rect = tooltip.elem.getBoundingClientRect();
        var doc = document.documentElement,
            scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));
        if (scrollPosition < 40) {
            tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
        } else {
            tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
        }
    };
    var resize_tooltips = function() {
        if (_removed) return;
        for (var i = 0; i < tooltips.length; i++) {
            if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
        }
    };
    var validate_field = function(elem, remove) {
        var tooltip = null, value = elem.value, no_error = true;
        remove ? remove_tooltip(elem) : false;
        if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');
        if (elem.getAttribute('required') !== null) {
            if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {
                var elems = form_to_submit.elements[elem.name];
                if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
                    no_error = elem.checked;
                }
                else {
                    no_error = false;
                    for (var i = 0; i < elems.length; i++) {
                        if (elems[i].checked) no_error = true;
                    }
                }
                if (!no_error) {
                    tooltip = create_tooltip(elem, "Please select an option.");
                }
            } else if (elem.type =='checkbox') {
                var elems = form_to_submit.elements[elem.name], found = false, err = [];
                no_error = true;
                for (var i = 0; i < elems.length; i++) {
                    if (elems[i].getAttribute('required') === null) continue;
                    if (!found && elems[i] !== elem) return true;
                    found = true;
                    elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
                    if (!elems[i].checked) {
                        no_error = false;
                        elems[i].className = elems[i].className + ' _has_error';
                        err.push("Checking %s is required".replace("%s", elems[i].value));
                    }
                }
                if (!no_error) {
                    tooltip = create_tooltip(elem, err.join('<br/>'));
                }
            } else if (elem.tagName == 'SELECT') {
                var selected = true;
                if (elem.multiple) {
                    selected = false;
                    for (var i = 0; i < elem.options.length; i++) {
                        if (elem.options[i].selected) {
                            selected = true;
                            break;
                        }
                    }
                } else {
                    for (var i = 0; i < elem.options.length; i++) {
                        if (elem.options[i].selected
                            && (!elem.options[i].value
                            || (elem.options[i].value.match(/\n/g)))
                        ) {
                            selected = false;
                        }
                    }
                }
                if (!selected) {
                    elem.className = elem.className + ' _has_error';
                    no_error = false;
                    tooltip = create_tooltip(elem, "Please select an option.");
                }
            } else if (value === undefined || value === null || value === '') {
                elem.className = elem.className + ' _has_error';
                no_error = false;
                tooltip = create_tooltip(elem, "This field is required.");
            }
        }
        if (no_error && (elem.id == 'field[]' || elem.id == 'ca[11][v]')) {
            if (elem.className.includes('phone-input-error')) {
                elem.className = elem.className + ' _has_error';
                no_error = false;
            }
        }
        if (no_error && elem.name == 'email') {
            if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
                elem.className = elem.className + ' _has_error';
                no_error = false;
                tooltip = create_tooltip(elem, "Enter a valid email address.");
            }
        }
        if (no_error && /date_field/.test(elem.className)) {
            if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
                elem.className = elem.className + ' _has_error';
                no_error = false;
                tooltip = create_tooltip(elem, "Enter a valid date.");
            }
        }
        tooltip ? resize_tooltip(tooltip) : false;
        return no_error;
    };
    var needs_validate = function(el) {
        if(el.getAttribute('required') !== null){
            return true
        }
        if(el.name === 'email' && el.value !== ""){
            return true
        }

        if((el.id == 'field[]' || el.id == 'ca[11][v]') && el.className.includes('phone-input-error')){
            return true
        }

        return false
    };
    var validate_form = function(e) {
        var err = form_to_submit.querySelector('._form_error'), no_error = true;
        if (!submitted) {
            submitted = true;
            for (var i = 0, len = allInputs.length; i < len; i++) {
                var input = allInputs[i];
                if (needs_validate(input)) {
                    if (input.type == 'tel') {
                        addEvent(input, 'blur', function() {
                            this.value = this.value.trim();
                            validate_field(this, true);
                        });
                    }
                    if (input.type == 'text' || input.type == 'number' || input.type == 'time') {
                        addEvent(input, 'blur', function() {
                            this.value = this.value.trim();
                            validate_field(this, true);
                        });
                        addEvent(input, 'input', function() {
                            validate_field(this, true);
                        });
                    } else if (input.type == 'radio' || input.type == 'checkbox') {
                        (function(el) {
                            var radios = form_to_submit.elements[el.name];
                            for (var i = 0; i < radios.length; i++) {
                                addEvent(radios[i], 'click', function() {
                                    validate_field(el, true);
                                });
                            }
                        })(input);
                    } else if (input.tagName == 'SELECT') {
                        addEvent(input, 'change', function() {
                            validate_field(this, true);
                        });
                    } else if (input.type == 'textarea'){
                        addEvent(input, 'input', function() {
                            validate_field(this, true);
                        });
                    }
                }
            }
        }
        remove_tooltips();
        for (var i = 0, len = allInputs.length; i < len; i++) {
            var elem = allInputs[i];
            if (needs_validate(elem)) {
                if (elem.tagName.toLowerCase() !== "select") {
                    elem.value = elem.value.trim();
                }
                validate_field(elem) ? true : no_error = false;
            }
        }
        if (!no_error && e) {
            e.preventDefault();
        }
        resize_tooltips();
        return no_error;
    };
    addEvent(window, 'resize', resize_tooltips);
    addEvent(window, 'scroll', resize_tooltips);

    var hidePhoneInputError = function(inputId) {
        var errorMessage =  document.getElementById("error-msg-" + inputId);
        var input = document.getElementById(inputId);
        errorMessage.classList.remove("phone-error");
        errorMessage.classList.add("phone-error-hidden");
        input.classList.remove("phone-input-error");
    };

    var initializePhoneInput = function(input, defaultCountry) {
        return window.intlTelInput(input, {
            utilsScript: "https://unpkg.com/intl-tel-input@17.0.18/build/js/utils.js",
            autoHideDialCode: false,
            separateDialCode: true,
            initialCountry: defaultCountry,
            preferredCountries: []
        });
    }

    var setPhoneInputEventListeners = function(inputId, input, iti) {
        input.addEventListener('blur', function() {
            var errorMessage = document.getElementById("error-msg-" + inputId);
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    iti.setNumber(iti.getNumber());
                    if (errorMessage.classList.contains("phone-error")){
                        hidePhoneInputError(inputId);
                    }
                } else {
                    showPhoneInputError(inputId)
                }
            } else {
                if (errorMessage.classList.contains("phone-error")){
                    hidePhoneInputError(inputId);
                }
            }
        });

        input.addEventListener("countrychange", function() {
            iti.setNumber('');
        });

        input.addEventListener("keydown", function(e) {
            var charCode = (e.which) ? e.which : e.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode !== 8) {
                e.preventDefault();
            }
        });
    };

    var showPhoneInputError = function(inputId) {
        var errorMessage =  document.getElementById("error-msg-" + inputId);
        var input = document.getElementById(inputId);
        errorMessage.classList.add("phone-error");
        errorMessage.classList.remove("phone-error-hidden");
        input.classList.add("phone-input-error");
    };


    var _form_serialize = function(form){if(!form||form.nodeName!=="FORM"){return }var i,j,q=[];for(i=0;i<form.elements.length;i++){if(form.elements[i].name===""){continue}switch(form.elements[i].nodeName){case"INPUT":switch(form.elements[i].type){case"tel":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].previousSibling.querySelector('div.iti__selected-dial-code').innerText)+encodeURIComponent(" ")+encodeURIComponent(form.elements[i].value));break;case"text":case"number":case"date":case"time":case"hidden":case"password":case"button":case"reset":case"submit":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"checkbox":case"radio":if(form.elements[i].checked){q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value))}break;case"file":break}break;case"TEXTAREA":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"SELECT":switch(form.elements[i].type){case"select-one":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"select-multiple":for(j=0;j<form.elements[i].options.length;j++){if(form.elements[i].options[j].selected){q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].options[j].value))}}break}break;case"BUTTON":switch(form.elements[i].type){case"reset":case"submit":case"button":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break}break}}return q.join("&")};

    const formSupportsPost = false;
          var form_submit = function(e) {
        e.preventDefault();
        if (validate_form()) {
            // use this trick to get the submit button & disable it using plain javascript
            var submitButton = e.target.querySelector('#_form_9_submit');
            submitButton.disabled = true;
            submitButton.classList.add('processing');
                        var serialized = _form_serialize(
                document.getElementById('_form_6656C1BD5CDB0_')
            ).replace(/%0A/g, '\\n');
            var err = form_to_submit.querySelector('._form_error');
            err ? err.parentNode.removeChild(err) : false;
            async function submitForm() {
              var formData = new FormData();
              const searchParams = new URLSearchParams(serialized);
              searchParams.forEach((value, key) => {
                formData.append(key, value);
              });
                            let request = {
                                headers: {
                                    "Accept": "application/json"
                                },
                                body: formData,
                                method: "POST"
                            };

                            let pageUrlParams = new URLSearchParams(window.location.search);
                            if (pageUrlParams.has('t')) {
                                request.headers.Authorization = 'Bearer ' + pageUrlParams.get('t');
                            }
              const response = await fetch('//ac.digilent.com/proc.php?jsonp=true', request);
              return response.json();
            }
                if (formSupportsPost) {
                  submitForm().then((data) => {
                    eval(data.js);
                  });
                } else {
                  _load_script('//ac.digilent.com/proc.php?' + serialized + '&jsonp=true', null, true);
                }
        }
        return false;
    };
    addEvent(form_to_submit, 'submit', form_submit);
})();
