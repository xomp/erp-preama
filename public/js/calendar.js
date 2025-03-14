/*!
 * dashmix - v5.8.0
 * @author pixelcave - https://pixelcave.com
 * Copyright (c) 2023
 */
!function() {
    class e {
        static addEvent() {
            let e = document.querySelector(".js-add-event")
              , t = "";
            document.querySelector(".js-form-add-event").addEventListener("submit", (a=>{
                if (a.preventDefault(),
                t = e.value,
                t) {
                    let a = document.getElementById("js-events")
                      , n = document.createElement("li")
                      , l = document.createElement("div");
                    l.classList.add("js-event"),
                    l.classList.add("p-2"),
                    l.classList.add("fs-sm"),
                    l.classList.add("fw-medium"),
                    l.classList.add("rounded"),
                    l.classList.add("bg-info-light"),
                    l.classList.add("text-info"),
                    l.textContent = t,
                    n.appendChild(l),
                    a.insertBefore(n, a.firstChild),
                    e.value = ""
                }
            }
            ))
        }
        static initEvents() {
            new FullCalendar.Draggable(document.getElementById("js-events"),{
                itemSelector: ".js-event",
                eventData: function(e) {
                    return {
                        title: e.textContent,
                        backgroundColor: getComputedStyle(e).color,
                        borderColor: getComputedStyle(e).color
                    }
                }
            })
        }
        static initCalendar() {
            let e = new Date
              , t = e.getDate()
              , a = e.getMonth()
              , n = e.getFullYear();
            new FullCalendar.Calendar(document.getElementById("js-calendar"),{
                themeSystem: "standard",
                firstDay: 1,
                editable: !0,
                locale: 'ru',
                droppable: !0,
                headerToolbar: {
                    left: "title",
                    right: "prev,next today dayGridMonth,timeGridWeek,timeGridDay" // ,listWeek
                },
                drop: function(e) {
                    e.draggedEl.parentNode.remove()
                },
                events: [{
                    title: "Михаил - Золотое Яблоко",
                    start: new Date(n,a,1),
                    allDay: !0
                }, {
                    title: "Мадина",
                    start: new Date(n,a,3),
                    color: "#82b54b"
                }, {
                    title: "Ахмед - Биохимпласт",
                    start: new Date(n,a,9),
                    end: new Date(n,a,12),
                    allDay: !0,
                    color: "#e04f1a"
                }, /* {
                    title: "Work",
                    start: new Date(n,a,17),
                    end: new Date(n,a,19),
                    allDay: !0,
                    color: "#82b54b"
                }, {
                    id: 999,
                    title: "Hiking (repeated)",
                    start: new Date(n,a,t - 1,15,0)
                }, {
                    id: 999,
                    title: "Hiking (repeated)",
                    start: new Date(n,a,t + 3,15,0)
                }, {
                    title: "Landing Template",
                    start: new Date(n,a,t - 3),
                    end: new Date(n,a,t - 3),
                    allDay: !0,
                    color: "#ffb119"
                }, {
                    title: "Lunch",
                    start: new Date(n,a,t + 7,15,0),
                    color: "#82b54b"
                }, {
                    title: "Coding",
                    start: new Date(n,a,t,8,0),
                    end: new Date(n,a,t,14,0)
                }, {
                    title: "Trip",
                    start: new Date(n,a,25),
                    end: new Date(n,a,27),
                    allDay: !0,
                    color: "#ffb119"
                }, {
                    title: "Reading",
                    start: new Date(n,a,t + 8,20,0),
                    end: new Date(n,a,t + 8,22,0)
                }, {
                    title: "Follow us on Twitter",
                    start: new Date(n,a,22),
                    allDay: !0,
                    url: "http://twitter.com/pixelcave",
                    color: "#3c90df"
                } */]
            }).render()
        }
        static init() {
            this.addEvent(),
            this.initEvents(),
            this.initCalendar()
        }
    }
    Dashmix.onLoad((()=>e.init()))
}();
