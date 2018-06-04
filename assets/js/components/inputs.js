function initInput(){
    $( ".text" ).focusin(function() {
        if(this.className.indexOf('active') == -1)
        {
            this.className = this.className+" active";
        }
    });
    $( ".text" ).focusout(function() {
        if(this.value == "")
        {

            var start = this.className.indexOf('active');
            if( start != -1)
            {
                this.className = this.className.replace("active", "");
            }
        }
    });
    $(".text").each(function(){
        if(this.value != "")
        {
            this.className = this.className+" active";
        }
    });
}

//Enter key moves to next input item
$('body').on('keydown', 'input, select', function(e) {
    var self = $(this)
    , form = self.parents('form:eq(0)')
    , focusable
    , next
    ;
    if (e.keyCode == 13) {
        focusable = form.find('input,a,select,button').filter(':visible');
        next = focusable.eq(focusable.index(this)+1);
        if (next.length) {
            next.focus();
        } else {
            form.submit();
        }
        return false;
    }
});
