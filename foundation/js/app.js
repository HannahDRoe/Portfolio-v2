$(document).foundation();

Foundation.Abide.defaults.patterns['alpha_numeric'] = /^[a-zA-Z0-9 \s.!?-]*$/;
Foundation.Abide.defaults.patterns['alpha'] =/^[a-zA-Z \s]+$/;
$("#contact-form").on("formvalid.zf.abide", function(ev,frm) {
    ev.preventDefault();
  alert("Form is valid, finally!");
});
