Dashmix.helpersOnLoad(['jq-easy-pie-chart', 'jq-sparkline']);

/*!
 * dashmix - v5.8.0
 * @author pixelcave - https://pixelcave.com
 * Copyright (c) 2023
 */
!function() {
    class t {
        static initChartsChartJS() {
            Chart.defaults.color = "#818d96",
            Chart.defaults.scale.grid.color = "rgba(0,0,0,.04)",
            Chart.defaults.scale.grid.zeroLineColor = "rgba(0,0,0,.1)",
            Chart.defaults.scale.beginAtZero = !0,
            Chart.defaults.elements.line.borderWidth = 2,
            Chart.defaults.elements.point.radius = 5,
            Chart.defaults.elements.point.hoverRadius = 7,
            Chart.defaults.plugins.tooltip.radius = 3,
            Chart.defaults.plugins.legend.labels.boxWidth = 12;
            let t, a, e, r, o, n, i, s, l = document.getElementById("js-chartjs-lines"), d = document.getElementById("js-chartjs-bars"), c = document.getElementById("js-chartjs-radar"), p = document.getElementById("js-chartjs-polar"), u = document.getElementById("js-chartjs-pie"), h = document.getElementById("js-chartjs-donut");
            i = {
                labels: ["пн", "вт", "ср", "чт", "пт", "сб", "вс"],
                datasets: [{
                    label: "Просмотры",
                    fill: !0,
                    backgroundColor: "rgba(6, 101, 208, .75)",
                    borderColor: "rgba(6, 101, 208, 1)",
                    pointBackgroundColor: "rgba(6, 101, 208, 1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(6, 101, 208, 1)",
                    data: [34, 42, 62, 78, 39, 83, 98]
                }, {
                    label: "Посетители",
                    fill: !0,
                    backgroundColor: "rgba(108, 117, 125, .25)",
                    borderColor: "rgba(108, 117, 125, .75)",
                    pointBackgroundColor: "rgba(108, 117, 125, 1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(108, 117, 125, 1)",
                    data: [130, 95, 125, 160, 187, 110, 143]
                }]
            },
            s = {
                labels: ["Мобильные", "Десктоп", "Планшеты"],
                datasets: [{
                    data: [65, 15, 20],
                    backgroundColor: ["rgba(141, 196, 81, 1)", "rgba(255, 177, 25, 1)", "rgba(224, 79, 26, 1)"],
                    hoverBackgroundColor: ["rgba(141, 196, 81, .5)", "rgba(255, 177, 25, .5)", "rgba(224, 79, 26, .5)"]
                }]
            },
            null !== l && (t = new Chart(l,{
                type: "line",
                data: i,
                options: {
                    responsive: !0,
                    maintainAspectRatio: !1,
                    tension: .4
                }
            })),
            null !== d && (a = new Chart(d,{
                type: "bar",
                data: i,
                options: {
                    responsive: !0,
                    maintainAspectRatio: !1
                }
            })),
            null !== c && (e = new Chart(c,{
                type: "radar",
                data: i,
                options: {
                    responsive: !0,
                    maintainAspectRatio: !1
                }
            })),
            null !== p && (r = new Chart(p,{
                type: "polarArea",
                data: s,
                options: {
                    responsive: !0,
                    maintainAspectRatio: !1
                }
            })),
            null !== u && (o = new Chart(u,{
                type: "pie",
                data: s,
                options: {
                    responsive: !0,
                    maintainAspectRatio: !1
                }
            })),
            null !== h && (n = new Chart(h,{
                type: "doughnut",
                data: s,
                options: {
                    responsive: !0,
                    maintainAspectRatio: !1
                }
            }))
        }
        static initRandomEasyPieChart() {
            document.querySelectorAll(".js-pie-randomize").forEach((t=>{
                t.addEventListener("click", (a=>{
                    t.closest(".block").querySelectorAll(".pie-chart").forEach((t=>{
                        jQuery(t).data("easyPieChart").update(Math.floor(100 * Math.random() + 1))
                    }
                    ))
                }
                ))
            }
            ))
        }
        static init() {
            this.initChartsChartJS(),
            this.initRandomEasyPieChart()
        }
    }
    Dashmix.onLoad((()=>t.init()))
}();
