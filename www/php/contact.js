document.addEventListener("DOMContentLoaded", function () {
    var ractive = new Ractive({
        el: '#container',
        template: '#template',
        data: {
            flipCard: false
        }
    });

    ractive.on('toggle', function () {
        this.set('flipCard', !this.get('flipCard'));
    });
});