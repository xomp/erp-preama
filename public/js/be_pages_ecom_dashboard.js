/*!
 * dashmix - v5.8.0
 * @author pixelcave - https://pixelcave.com
 * Copyright (c) 2023
 */
!function() {
    class t {
        static initOverviewChart() {
            Chart.defaults.color = "#818d96",
            Chart.defaults.scale.grid.color = "transparent",
            Chart.defaults.scale.grid.zeroLineColor = "transparent",
            Chart.defaults.scale.beginAtZero = !0,
            Chart.defaults.elements.point.radius = 0,
            Chart.defaults.elements.point.hoverRadius = 0,
            Chart.defaults.plugins.tooltip.radius = 3,
            Chart.defaults.plugins.legend.labels.boxWidth = 12;
            let t, r, e, o = document.getElementById("js-chartjs-overview");
            r = {
                responsive: !0,
                maintainAspectRatio: !1,
                tension: .4,
                scales: {
                    y: {
                        suggestedMin: 0,
                        suggestedMax: 600
                    }
                },
                interaction: {
                    intersect: !1
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(t) {
                                return t.parsed.y
                            }
                        }
                    }
                }
            },
            e = {
                labels: ["пн", "вт", "ср", "чт", "пт", "сб", "вс"],
                datasets: [{
                    label: "Лиды",
                    fill: !0,
                    backgroundColor: "rgba(6, 101, 208, .5)",
                    borderColor: "transparent",
                    pointBackgroundColor: "rgba(6, 101, 208, 1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(6, 101, 208, 1)",
                    data: [369, 255, 420, 330, 460, 160, 350]
                }, {
                    label: "Соискатели",
                    fill: !0,
                    backgroundColor: "rgba(6, 101, 208, .2)",
                    borderColor: "transparent",
                    pointBackgroundColor: "rgba(6, 101, 208, .2)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(6, 101, 208, .2)",
                    data: [270, 460, 290, 231, 419, 450, 280]
                }]
            },
            null !== o && (t = new Chart(o,{
                type: "line",
                data: e,
                options: r
            }))
        }
        static init() {
            this.initOverviewChart()
        }
    }
    Dashmix.onLoad((()=>t.init()))
}();
