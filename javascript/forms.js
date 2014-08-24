(function() {
    var oldOnload = typeof window.onload == "function" ? window.onload : function() {};

    window.onload = function() {
        // Don't overwrite the old onload event, that's just rude
        oldOnload();
        var labels = document.getElementsByTagName("label");

        for ( var i in labels ) {
            if (
                // Not a real part of the container
                !labels.hasOwnProperty(i) ||
                // Not marked as a magic label
                !labels[i].className.match(/\bmagiclabel\b/i) ||
                // Doesn't have an associated element
                !labels[i].getAttribute("for")
            ) { continue; }

            var associated = document.getElementById( labels[i].getAttribute("for") );
            if ( associated ) {
                new MagicLabel(labels[i], associated);
            }
        }
    };
})();

var MagicLabel = function(label, input) {
    this.label = label;
    this.input = input;

    this.hide = function() {
        this.label.className += " hidden";
    };

    this.show = function() {
        this.label.className = this.label.className.replace(/\bhidden\b/ig, "");
    };

    // If the field has something in it already, hide the label
    if ( this.input.value ) {
        this.hide();
    }

    var self = this;

    // Hide label when input receives focuse
    this.input.onfocus = function() {
        self.hide();
    };

    // Show label when input loses focus and doesn't have a value
    this.input.onblur = function() {
        if ( self.input.value === "" ) {
            self.show();
        }
    };

    // Clicking on the label should cause input to be focused on since the `for` 
    // attribute is defined. This is just a safe guard for non-compliant browsers.
    this.label.onclick = function() {
        self.hide();
    };
};
