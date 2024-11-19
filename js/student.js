document.addEventListener('DOMContentLoaded', () => {
    const schedule = document.getElementById('student-schedule');

    // Voorbeelddata
    const weekData = generateWeekData();

    // Vullen van de planner
    weekData.forEach(slot => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${slot.time}</td>
            ${generateCells(slot.days, 'student')}
        `;
        schedule.appendChild(row);
    });

    function generateWeekData() {
        const times = generateTimes('08:00', '18:00', 15);
        return times.map(time => ({
            time,
            days: {
                monday: 'available',
                tuesday: 'available',
                wednesday: 'available',
                thursday: 'available',
                friday: 'available',
                saturday: 'blocked',
                sunday: 'blocked',
            }
        }));
    }

    function generateTimes(start, end, interval) {
        const times = [];
        let current = start;
        while (current !== end) {
            times.push(current);
            current = addMinutes(current, interval);
        }
        return times;
    }

    function addMinutes(time, minutes) {
        const [hours, mins] = time.split(':').map(Number);
        const date = new Date();
        date.setHours(hours, mins + minutes);
        return date.toTimeString().substring(0, 5);
    }

    function generateCells(days, user) {
        return Object.keys(days).map(day => {
            const status = days[day];
            return `<td data-status="${status}" class="${user}-slot">${status === 'available' ? 'Vrij' : status === 'booked' ? 'Bezet' : 'Geblokkeerd'}</td>`;
        }).join('');
    }
});
