Vue.filter('dateFormatFilter', function (value) {
    return value && moment(value).format('DD MMMM yyyy'); 
})
VueBus.resourceReady(() => {
    const components = Array.from(document.getElementsByClassName('ln-container'));
    components.forEach(component => {
        if (component.__vue__) {
            return;
        }
        new Vue({
            el: component
        });
    });
});
