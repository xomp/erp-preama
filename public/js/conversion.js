Dashmix.helpersOnLoad(['jq-easy-pie-chart', 'jq-sparkline']);

/*!
 * dashmix - v5.8.0
 * @author pixelcave - https://pixelcave.com
 * Copyright (c) 2023
 */
!function() {
    class r {
        static initChartsBars() {
            Chart.defaults.color = "#818d96",
            Chart.defaults.scale.grid.color = "transparent",
            Chart.defaults.scale.grid.zeroLineColor = "transparent",
            Chart.defaults.scale.beginAtZero = !0,
            Chart.defaults.elements.line.borderWidth = 1,
            Chart.defaults.plugins.legend.labels.boxWidth = 12;
            let r, a, o = document.getElementById("js-chartjs-analytics-bars");
            a = {
                labels: ["пн", "вт", "ср", "чт", "пт", "сб", "вс"],
                datasets: [{
                    label: "Звонки",
                    fill: !0,
                    backgroundColor: "rgba(6, 101, 208, .6)",
                    borderColor: "transparent",
                    pointBackgroundColor: "rgba(6, 101, 208, 1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(6, 101, 208, 1)",
                    data: [73, 68, 69, 53, 60, 72, 82]
                }, {
                    label: "Заявки",
                    fill: !0,
                    backgroundColor: "rgba(6, 101, 208, .2)",
                    borderColor: "transparent",
                    pointBackgroundColor: "rgba(6, 101, 208, .2)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(6, 101, 208, .2)",
                    data: [62, 32, 59, 55, 52, 56, 73]
                }]
            },
            null !== o && (r = new Chart(o,{
                type: "bar",
                data: a,
                options: {
                    responsive: !0,
                    maintainAspectRatio: !1,
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(r) {
                                    return r.dataset.label + ": " + r.parsed.y + " Customers"
                                }
                            }
                        }
                    }
                }
            }))
        }
        static init() {
            this.initChartsBars()
        }
    }
    Dashmix.onLoad((()=>r.init()))
}();
