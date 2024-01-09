import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import "pikaday/css/pikaday.css";
import Pikaday from 'pikaday';

window.Pikaday = Pikaday;

const date = moment().subtract(18, 'years');

new Pikaday({
    field: document.getElementById('datepicker'),
    format: 'YYYY-MM-DD',
    toString(date, format) {
        return moment(date).format('YYYY-MM-DD');
    },
    yearRange: [1950, date.year()],
    minDate: moment('1950-01-01').toDate(),
    maxDate: date.toDate(),
    showMonthAfterYear: true,
});