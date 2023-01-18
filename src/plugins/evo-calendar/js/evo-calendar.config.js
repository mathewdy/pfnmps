$(document).ready(function() {
    const start = $('.dateStart').html();
    const day2 = $('.day2').html();
    const day3 = $('.day3').html();
    const day4 = $('.day4').html();
    const day5 = $('.day5').html();
    const day6 = $('.day6').html();
    const day7 = $('.day7').html();
    const day8 = $('.day8').html();
    const day9 = $('.day9').html();
    const day10 = $('.day10').html();
    const day11 = $('.day11').html();
    const day12 = $('.day12').html();
    const day13 = $('.day13').html();
    const day14 = $('.day14').html();
    const day15 = $('.day15').html();
    const day16 = $('.day16').html();
    const day17 = $('.day17').html();
    const day18 = $('.day18').html();
    const day19 = $('.day19').html();
    const day20 = $('.day20').html();
    const day21 = $('.day21').html();
    const day22 = $('.day22').html();
    const day23 = $('.day23').html();
    const day24 = $('.day24').html();
    const day25 = $('.day25').html();
    const day26 = $('.day26').html();
    const day27 = $('.day27').html();
    const day28 = $('.day28').html();
    const day29 = $('.day29').html();
    const day30 = $('.day30').html();
    let food = $('.food').html();
    let act = $('.act').html();

    if (food == 1){
        food = 'Completed'
    }
    if (food == 0){
        food = 'On-going'
    }
    if (act == 1){
        act = 'Completed'
    }
    if (act == 0){
        act = 'On-going'
    }

    console.log(act);
    $('#calendar').evoCalendar({
        sidebarDisplayDefault: false,
        language: 'en',
        calendarEvents: [
            {
                id: 'day-1',
                name: "Daily Meal",
                badge: food,
                date: start,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-1',
                name: "Daily Activities",
                badge: act,
                date: start,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-2',
                name: "Daily Meal",
                badge: food,
                date: day2,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-2',
                name: "Daily Activities",
                badge: act,
                date: day2,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-3',
                name: "Daily Meal",
                badge: food,
                date: day3,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-3',
                name: "Daily Activities",
                badge: act,
                date: day3,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-4',
                name: "Daily Meal",
                badge: food,
                date: day4,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-4',
                name: "Daily Activities",
                badge: act,
                date: day4,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-5',
                name: "Daily Meal",
                badge: food,
                date: day5,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-5',
                name: "Daily Activities",
                badge: act,
                date: day5,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-6',
                name: "Daily Meal",
                badge: food,
                date: day6,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-6',
                name: "Daily Activities",
                badge: act,
                date: day6,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-7',
                name: "Daily Meal",
                badge: food,
                date: day7,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-7',
                name: "Daily Activities",
                badge: act,
                date: day7,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-8',
                name: "Daily Meal",
                badge: food,
                date: day8,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-8',
                name: "Daily Activities",
                badge: act,
                date: day8,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-9',
                name: "Daily Meal",
                badge: food,
                date: day9,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-9',
                name: "Daily Activities",
                badge: act,
                date: day9,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-10',
                name: "Daily Meal",
                badge: food,
                date: day10,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-10',
                name: "Daily Activities",
                badge: act,
                date: day10,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-11',
                name: "Daily Meal",
                badge: food,
                date: day11,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-11',
                name: "Daily Activities",
                badge: act,
                date: day11,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-12',
                name: "Daily Meal",
                badge: food,
                date: day12,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-12',
                name: "Daily Activities",
                badge: act,
                date: day12,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-13',
                name: "Daily Meal",
                badge: food,
                date: day13,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-13',
                name: "Daily Activities",
                badge: act,
                date: day13,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-14',
                name: "Daily Meal",
                badge: food,
                date: day14,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-14',
                name: "Daily Activities",
                badge: act,
                date: day14,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-15',
                name: "Daily Meal",
                badge: food,
                date: day15,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-15',
                name: "Daily Activities",
                badge: act,
                date: day15,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-16',
                name: "Daily Meal",
                badge: food,
                date: day16,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-16',
                name: "Daily Activities",
                badge: act,
                date: day16,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-17',
                name: "Daily Meal",
                badge: food,
                date: day17,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-17',
                name: "Daily Activities",
                badge: act,
                date: day17,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-18',
                name: "Daily Meal",
                badge: food,
                date: day18,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-18',
                name: "Daily Activities",
                badge: act,
                date: day18,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-19',
                name: "Daily Meal",
                badge: food,
                date: day19,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-19',
                name: "Daily Activities",
                badge: act,
                date: day19,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-20',
                name: "Daily Meal",
                badge: food,
                date: day20,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-20',
                name: "Daily Activities",
                badge: act,
                date: day20,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-21',
                name: "Daily Meal",
                badge: food,
                date: day21,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-21',
                name: "Daily Activities",
                badge: act,
                date: day21,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-22',
                name: "Daily Meal",
                badge: food,
                date: day22,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-22',
                name: "Daily Activities",
                badge: act,
                date: day22,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-23',
                name: "Daily Meal",
                badge: food,
                date: day23,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-23',
                name: "Daily Activities",
                badge: act,
                date: day23,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-24',
                name: "Daily Meal",
                badge: food,
                date: day24,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-24',
                name: "Daily Activities",
                badge: act,
                date: day24,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-25',
                name: "Daily Meal",
                badge: food,
                date: day25,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-25',
                name: "Daily Activities",
                badge: act,
                date: day25,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-26',
                name: "Daily Meal",
                badge: food,
                date: day26,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-26',
                name: "Daily Activities",
                badge: act,
                date: day26,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-27',
                name: "Daily Meal",
                badge: food,
                date: day27,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-27',
                name: "Daily Activities",
                badge: act,
                date: day27,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-28',
                name: "Daily Meal",
                badge: food,
                date: day28,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-28',
                name: "Daily Activities",
                badge: act,
                date: day28,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-29',
                name: "Daily Meal",
                badge: food,
                date: day29,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-29',
                name: "Daily Activities",
                badge: act,
                date: day29,
                type: "event",
                color: 'orange'
            },
            {
                id: 'day-30',
                name: "Daily Meal",
                badge: food,
                date: day30,
                type: "event",
                color: '#00bbcc'
            },
            {
                id: 'day-30',
                name: "Daily Activities",
                badge: act,
                date: day20,
                type: "event",
                color: 'orange'
            },
        ]
    })
})