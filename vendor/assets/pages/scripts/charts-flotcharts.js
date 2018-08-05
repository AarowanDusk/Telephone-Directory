var data = [{
    label: "Pause",
    data: 150
}, {
    label: "No Pause",
    data: 100
}, {
    label: "Sleeping",
    data: 250
}];

var options = {
    series: {
        pie: {
            show: true,
            innerRadius: 0.5,
            radius: 1
        }
    },
    grid: {
        hoverable: true
    },
    tooltip: true,
    tooltipOpts: {
        cssClass: "flotTip",
        content: "%s: %p.0%",
        defaultTheme: false
    }
};

$.plot($("#donut"), data, options);
