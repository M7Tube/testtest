<!DOCTYPE html>

@if (app()->getLocale() == 'ar')
    <html lang="ar" dir="rtl">
@else
    <html lang="en" dir="ltr">
@endif

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/maherLogo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/maherLogo.png') }}">
    <title>{{ __('Maher Shehadie') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{-- <link href="{{ asset('/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

    <link href="{{ asset('vendor2/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto");

        @-webkit-keyframes come-in {
            0% {
                -webkit-transform: translatey(100px);
                transform: translatey(100px);
                opacity: 0;
            }

            30% {
                -webkit-transform: translateX(-50px) scale(0.4);
                transform: translateX(-50px) scale(0.4);
            }

            70% {
                -webkit-transform: translateX(0px) scale(1.2);
                transform: translateX(0px) scale(1.2);
            }

            100% {
                -webkit-transform: translatey(0px) scale(1);
                transform: translatey(0px) scale(1);
                opacity: 1;
            }
        }

        @keyframes come-in {
            0% {
                -webkit-transform: translatey(100px);
                transform: translatey(100px);
                opacity: 0;
            }

            30% {
                -webkit-transform: translateX(-50px) scale(0.4);
                transform: translateX(-50px) scale(0.4);
            }

            70% {
                -webkit-transform: translateX(0px) scale(1.2);
                transform: translateX(0px) scale(1.2);
            }

            100% {
                -webkit-transform: translatey(0px) scale(1);
                transform: translatey(0px) scale(1);
                opacity: 1;
            }
        }

        * {
            margin: 0;
            padding: 0;
        }

        html,
        body {
            /* font-family: 'Roboto', sans-serif; */
        }

        .floating-container {
            position: fixed;
            width: 75px;
            height: 100px;
            bottom: 0;
            right: 0;
            margin: 0px 0px 65px 0px;
            /* margin-top: 25px; */
            z-index: 99;
        }

        .floating-container:hover {
            height: 300px;
        }

        .floating-container:hover .floating-button {
            box-shadow: 0 10px 25px rgba(44, 179, 240, 0.6);
            -webkit-transform: translatey(5px);
            transform: translatey(5px);
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .floating-container:hover .element-container .float-element:nth-child(1) {
            -webkit-animation: come-in 0.4s forwards 0.2s;
            animation: come-in 0.4s forwards 0.2s;
        }

        .floating-container:hover .element-container .float-element:nth-child(2) {
            -webkit-animation: come-in 0.4s forwards 0.4s;
            animation: come-in 0.4s forwards 0.4s;
        }

        .floating-container:hover .element-container .float-element:nth-child(3) {
            -webkit-animation: come-in 0.4s forwards 0.6s;
            animation: come-in 0.4s forwards 0.6s;
        }

        .floating-container .floating-button {
            position: absolute;
            width: 65px;
            height: 65px;
            background: #2cb3f0;
            bottom: 0;
            border-radius: 50%;
            left: 0;
            right: 0;
            margin: auto;
            color: white;
            line-height: 65px;
            text-align: center;
            font-size: 23px;
            z-index: 100;
            box-shadow: 0 10px 25px -5px rgba(44, 179, 240, 0.6);
            cursor: pointer;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .floating-container .float-element {
            position: relative;
            display: block;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin: 15px auto;
            color: white;
            font-weight: 500;
            text-align: center;
            line-height: 50px;
            z-index: 0;
            opacity: 0;
            -webkit-transform: translateY(100px);
            transform: translateY(100px);
        }

        .floating-container .float-element .material-icons {
            vertical-align: middle;
            font-size: 16px;
        }

        .floating-container .float-element:nth-child(1) {
            background: #42A5F5;
            box-shadow: 0 20px 20px -10px rgba(66, 165, 245, 0.5);
        }

        .floating-container .float-element:nth-child(2) {
            background: #4CAF50;
            box-shadow: 0 20px 20px -10px rgba(76, 175, 80, 0.5);
        }

        .floating-container .float-element:nth-child(3) {
            background: #FF9800;
            box-shadow: 0 20px 20px -10px rgba(255, 152, 0, 0.5);
        }
    </style>
    <!-- Mobiscroll JS and CSS Includes -->
    {{-- <link rel="stylesheet" href="{{ asset('css/mobiscroll.javascript.min.css') }}">
    <script src="{{ asset('js/mobiscroll.javascript.min.js') }}"></script>

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }

        body,
        html {
            height: 100%;
        }

        .md-calendar-booking .mbsc-calendar-text {
            text-align: center;
        }

        .md-calendar-booking .booking-datetime .mbsc-datepicker-tab-calendar {
            flex: 1 1 0;
            min-width: 300px;
        }

        .md-calendar-booking .mbsc-timegrid-item {
            margin-top: 1.5em;
            margin-bottom: 1.5em;
        }

        .md-calendar-booking .mbsc-timegrid-container {
            top: 30px;
        }

    </style> --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/CalendarPicker.style.css') }}">
    <style>
        /* body {
            display: grid;
            justify-items: center;
            align-content: center;
            min-height: 100vh;
            padding: 0;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
                'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
                sans-serif;
        } */

        #github {
            position: absolute;
            right: -5rem;
            top: 0.6rem;
            background-color: black;
            transform: rotate(25deg);

        }

        #github a,
        #github a:link,
        #github a:visited {
            display: inline-block;
            padding: 1rem 8rem;
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: transform 300ms;
        }

        #github a:hover {
            text-decoration: underline;
            transform: translateX(0.4rem);
        }

        #download-options {
            margin-bottom: 2rem;
        }

        #download-options h3:last-of-type {
            margin-top: 2rem;
        }

        #download-options code {
            font-size: 1.2rem;
        }

        #myCalendarWrapper {
            width: 40em;
            border: 1px dashed black;
            padding: 2em 4em;
            position: relative;
            font-size: 1rem;
            margin: 2rem auto 5rem;
        }

        #myCalendarWrapper:before {
            content: '#myCalendarWrapper';
            position: absolute;
            font-family: source-code-pro, Menlo, Monaco, Consolas, 'Courier New', monospace;
            bottom: 0;
            left: 50%;
            transform: translate(-50%, 2.4rem);
            font-size: 1.2rem;
            background-color: rgba(93, 93, 93, 0.2);
            padding: 0.5rem 1rem 0.4rem;
            color: rgb(233, 72, 99);
        }

        code {
            font-size: 0.7rem;
            background-color: rgb(249, 249, 249);
            padding: 0.5rem;
            margin: 1rem 0 3rem;
            border-radius: 5px;
            box-shadow: 2px 2px 0.2rem rgba(0, 0, 0, 0.2);
        }

        code h3 {
            padding: 0;
            margin: 0;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
                'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
                sans-serif;
        }

        code pre {
            font-family: source-code-pro, Menlo, Monaco, Consolas, 'Courier New', monospace;
        }

        .pink {
            color: rgb(233, 72, 99);
        }

        #example {
            margin: 0 auto;
            text-align: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
                'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
                sans-serif;
        }

        #example h3:not(:first-of-type) {
            margin-top: 3rem;
        }

        #example p {
            font-size: 0.9rem;
        }

        #download-options {
            margin-bottom: 5rem;
        }

        #download-options h2:last-of-type {
            margin-top: 2rem;
        }

        #download-options code {
            font-size: 1.2rem;
        }
    </style>
    @livewireStyles
</head>

<body>

    @livewire('home-page.home-page')

    <!-- ======= Footer ======= -->
    <footer>
        {{-- <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
                        <div class="credits">
                            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background-color: #2cb3f0;"><i
            class="bi bi-arrow-up-short"></i></a>
    {{-- <script>
        mobiscroll.setOptions({
            locale: mobiscroll
                .localeAr, // Specify language like: locale: mobiscroll.localePl or omit setting to use default
            theme: 'ios', // Specify theme like: theme: 'ios' or omit setting to use default
            themeVariant: 'light' // More info about themeVariant: https://docs.mobiscroll.com/5-16-1/javascript/calendar#opt-themeVariant
        });

        var min = '2022-05-20T00:00';
        var max = '2022-11-20T00:00';



        mobiscroll.datepicker('#demo-booking-datetime', {
            display: 'inline', // Specify display mode like: display: 'bottom' or omit setting to use default
            controls: ['calendar',
                'timegrid'
            ], // More info about controls: https://docs.mobiscroll.com/5-16-1/javascript/calendar#opt-controls
            min: min, // More info about min: https://docs.mobiscroll.com/5-16-1/javascript/calendar#opt-min
            max: max, // More info about max: https://docs.mobiscroll.com/5-16-1/javascript/calendar#opt-max
            minTime: '08:00',
            maxTime: '20:00',
            stepMinute: 720,
            width: null, // More info about width: https://docs.mobiscroll.com/5-16-1/javascript/calendar#opt-width
            onPageLoading: function(event,
                inst
            ) { // More info about onPageLoading: https://docs.mobiscroll.com/5-16-1/javascript/calendar#event-onPageLoading
                getDatetimes(event.firstDay, function callback(bookings) {
                    inst.setOptions({
                        labels: bookings
                            .labels, // More info about labels: https://docs.mobiscroll.com/5-16-1/javascript/calendar#opt-labels
                        invalid: bookings
                            .invalid // More info about invalid: https://docs.mobiscroll.com/5-16-1/javascript/calendar#opt-invalid
                    });
                });
            }
        });

        function getDatetimes(day, callback) {
            var invalid = [];
            var labels = [];

            mobiscroll.util.http.getJson('https://trial.mobiscroll.com/getbookingtime/?year=' + day.getFullYear() +
                '&month=' + day.getMonth(),
                function(bookings) {
                    for (var i = 0; i < bookings.length; ++i) {
                        var booking = bookings[i];
                        var bDate = new Date(booking.d);

                        if (booking.nr > 0) {
                            labels.push({
                                start: bDate,
                                title: booking.nr + ' SPOTS',
                                textColor: '#e1528f'
                            });
                            $.merge(invalid, booking.invalid);
                        } else {
                            invalid.push(bDate);
                        }
                    }
                    callback({
                        labels: labels,
                        invalid: invalid
                    });
                }, 'jsonp');
        }
    </script> --}}

    <!-- Vendor2 JS Files -->
    <script src="{{ asset('vendor2/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('vendor2/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor2/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor2/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor2/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('vendor2/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        // Polyfill for Element.prototype.closest (for IE 9+)
        if (!Element.prototype.matches) {
            Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
        }
        if (!Element.prototype.closest) {
            Element.prototype.closest = function(s) {
                var el = this;
                do {
                    if (Element.prototype.matches.call(el, s)) return el;
                    el = el.parentElement || el.parentNode;
                } while (el !== null && el.nodeType === 1);
                return null;
            };
        }

        /**
         * @class CalendarPicker.
         * @description Provides a simple way to get a minimalistic calender in your DOM.
         * @author Mathias Picker - 29 July 2020.
         */
        function CalendarPicker(element, options) {
            // Core variables.
            this.date = new Date();
            this._formatDateToInit(this.date);

            this.day = this.date.getDay()
            this.month = this.date.getMonth();
            this.year = this.date.getFullYear();

            // Storing the todays date for practical reasons.
            this.today = this.date;

            // The calendars value should always be the current date.
            this.value = this.date;

            // Ranges for the calendar (optional).
            this.min = options.min;
            this.max = options.max;
            this._formatDateToInit(this.min);
            this._formatDateToInit(this.max);

            // Element to insert calendar in.
            this.userElement = document.querySelector(element);

            // Setting current date as readable text.
            this._setDateText();

            // The elements used to build the calendar.
            this.calendarWrapper = document.createElement('div');
            this.calendarElement = document.createElement('div')
            this.calendarHeader = document.createElement('header');
            this.calendarHeaderTitle = document.createElement('h4');
            this.navigationWrapper = document.createElement('section')
            this.previousMonthArrow = document.createElement('button');
            this.nextMonthArrow = document.createElement('button');
            this.calendarGridDays = document.createElement('section')
            this.calendarGrid = document.createElement('section');
            this.calendarDayElementType = 'time';

            var beginningOfYearOnMonday = new Date('2018-01-01');
            var locale = options.locale || 'en-US';
            this.listOfAllDaysAsText = [...Array(7).keys()].map(this._toTranslatedWeekday(beginningOfYearOnMonday, locale,
                options.showShortWeekdays))
            this.listOfAllMonthsAsText = [...Array(12).keys()].map(this._toTranslatedMonth(beginningOfYearOnMonday, locale))

            // Creating the calendar
            this.calendarWrapper.id = 'calendar-wrapper';
            this.calendarElement.id = 'calendar';
            this.calendarGridDays.id = 'calendar-days';
            this.calendarGrid.id = 'calendar-grid';
            this.navigationWrapper.id = 'navigation-wrapper';
            this.previousMonthArrow.id = 'previous-month';
            this.nextMonthArrow.id = 'next-month';

            this._insertHeaderIntoCalendarWrapper();
            this._insertCalendarGridDaysHeader();
            this._insertDaysIntoGrid();
            this._insertNavigationButtons();
            this._insertCalendarIntoWrapper();

            this.userElement.appendChild(this.calendarWrapper);
        }

        CalendarPicker.prototype._toTranslatedWeekday = function(beginningOfYearOnMonday, locale, showShortWeekdays) {
            var weekdayFormat = showShortWeekdays ? 'short' : 'long'
            return function(dayOfWeekIndex) {
                return new Intl.DateTimeFormat(locale, {
                        weekday: weekdayFormat
                    })
                    .format(new Date(beginningOfYearOnMonday.getFullYear(), beginningOfYearOnMonday.getMonth(),
                        beginningOfYearOnMonday.getDate() + dayOfWeekIndex))
            }
        }

        CalendarPicker.prototype._toTranslatedMonth = function(beginningOfYearOnMonday, locale) {
            return function(monthIndex) {
                return new Intl.DateTimeFormat(locale, {
                        month: 'long'
                    })
                    .format(new Date(beginningOfYearOnMonday.getFullYear(), beginningOfYearOnMonday.getMonth() +
                        monthIndex, beginningOfYearOnMonday.getDate()))
            }
        }

        /**
         * @param {Number} The month number, 0 based.
         * @param {Number} The year, not zero based, required to account for leap years.
         * @return {Array<Date>} List with date objects for each day of the month.
         * @author Juan Mendes - 30th October 2012.
         */
        CalendarPicker.prototype._getDaysInMonth = function(month, year) {
            if ((!month && month !== 0) || (!year && year !== 0)) return;

            var date = new Date(year, month, 1);
            var days = [];

            while (date.getMonth() === month) {
                days.push(new Date(date));
                date.setDate(date.getDate() + 1);
            }
            return days;
        }

        /**
         * @param {DateObject} date.
         * @description Sets the clock of a date to 00:00:00 to be consistent.
         */
        CalendarPicker.prototype._formatDateToInit = function(date) {
            if (!date) return;
            date.setHours(0, 0, 0);
        }

        /**
         * @description Sets the current date as readable text in their own variables
         */
        CalendarPicker.prototype._setDateText = function() {
            // Setting current date as readable text.
            var dateData = this.date.toString().split(' ');
            this.dayAsText = dateData[0];
            this.monthAsText = dateData[1];
            this.dateAsText = dateData[2];
            this.yearAsText = dateData[3];
        }

        /**
         * @description Inserts the calendar into the wrapper and adds eventListeners for the calendar-grid.
         */
        CalendarPicker.prototype._insertCalendarIntoWrapper = function() {
            this.calendarWrapper.appendChild(this.calendarElement);

            /**
             * @param {Event} event An event from an eventListener.
             */
            var handleSelectedElement = (event) => {
                if (event.target.nodeName.toLowerCase() === this.calendarDayElementType && !event.target.classList
                    .contains('disabled')) {

                    // Removes the 'selected' class from all elements that have it.
                    Array.from(this.calendarGrid.querySelectorAll('.selected')).forEach(element => element.classList
                        .remove('selected'));

                    // Adds the 'selected'-class to the selected date.
                    event.target.classList.add('selected');

                    this.value = event.target.value;
                    // document.getElementById("dateValue").value = this.value;
                    // Fires the onValueChange function with the provided callback.
                    this.onValueChange(this.callback);
                    // alert(this.value);
                    Livewire.emit('getData', this.value);
                }
            }

            this.calendarGrid.addEventListener('click', handleSelectedElement, false);

            this.calendarGrid.addEventListener('keydown', (keyEvent) => {
                if (keyEvent.key !== 'Enter') return;

                handleSelectedElement(keyEvent);
            }, false);
        }

        /**
         * @description Adds the "main" calendar-header.
         */
        CalendarPicker.prototype._insertHeaderIntoCalendarWrapper = function() {
            this.calendarHeaderTitle.textContent = this.listOfAllMonthsAsText[this.month] + ' - ' + this.year;
            this.calendarHeader.appendChild(this.calendarHeaderTitle);
            this.calendarWrapper.appendChild(this.calendarHeader);
        }

        /**
         * @description Inserts the calendar-grid header with all the weekdays.
         */
        CalendarPicker.prototype._insertCalendarGridDaysHeader = function() {
            this.listOfAllDaysAsText.forEach(day => {
                var dayElement = document.createElement('span');
                dayElement.textContent = day;
                this.calendarGridDays.appendChild(dayElement);
            })

            this.calendarElement.appendChild(this.calendarGridDays);
        }

        /**
         * @description Adds the "Previous" and "Next" arrows on the side-navigation.
         * Also inits the click-events used to navigating.
         */
        CalendarPicker.prototype._insertNavigationButtons = function() {
            // Ugly long string, but at least the svg is pretty.
            var arrowSvg =
                '<svg enable-background="new 0 0 386.257 386.257" viewBox="0 0 386.257 386.257" xmlns="http://www.w3.org/2000/svg"><path d="m0 96.879 193.129 192.5 193.128-192.5z"/></svg>';

            this.previousMonthArrow.innerHTML = arrowSvg;
            this.nextMonthArrow.innerHTML = arrowSvg;

            this.previousMonthArrow.setAttribute('aria-label', 'Go to previous month');
            this.nextMonthArrow.setAttribute('aria-label', 'Go to next month');

            this._toggleNavigationButtons();

            this.navigationWrapper.appendChild(this.previousMonthArrow);
            this.navigationWrapper.appendChild(this.nextMonthArrow);

            // Cannot use arrow-functions for IE support :(
            var that = this;
            this.navigationWrapper.addEventListener('click', function(clickEvent) {
                if (clickEvent.target.closest('#' + that.previousMonthArrow.id)) {
                    if (that.month === 0) {
                        that.month = 11;
                        that.year -= 1;
                    } else {
                        that.month -= 1;
                    }
                    that._updateCalendar();
                }

                if (clickEvent.target.closest('#' + that.nextMonthArrow.id)) {
                    if (that.month === 11) {
                        that.month = 0;
                        that.year += 1;
                    } else {
                        that.month += 1;
                    }
                    that._updateCalendar();
                }
            }, false)

            that.calendarElement.appendChild(that.navigationWrapper);
        }

        CalendarPicker.prototype._beginningOfMonth = function(date) {
            return new Date(date.getFullYear(), date.getMonth())
        }

        CalendarPicker.prototype._endOfMonth = function(date) {
            return new Date(date.getFullYear(), date.getMonth() + 1);
        }

        CalendarPicker.prototype._toggleNavigationButtons = function() {
            this.previousMonthArrow.toggleAttribute('disabled', !!this.min && this._beginningOfMonth(this.date) <= this
                .min);
            this.nextMonthArrow.toggleAttribute('disabled', !!this.max && this._endOfMonth(this.date) >= this.max);
        }

        /**
         * @description Adds all the days for current month into the calendar-grid.
         * Takes into account which day the month starts on, so that "empty/placeholder" days can be added
         * in case the month for example starts on a Thursday.
         * Also disables the days that are not within the provided.
         */
        CalendarPicker.prototype._insertDaysIntoGrid = function() {
            this.calendarGrid.innerHTML = '';

            var arrayOfDays = this._getDaysInMonth(this.month, this.year);
            var firstDayOfMonth = arrayOfDays[0].getDay();

            // Converting Sunday (0 when using getDay()) to 7 to make it easier to work with.
            firstDayOfMonth = firstDayOfMonth === 0 ? 7 : firstDayOfMonth;

            if (1 < firstDayOfMonth) {
                arrayOfDays = Array(firstDayOfMonth - 1).fill(false, 0).concat(arrayOfDays);
            }

            arrayOfDays.forEach(date => {
                var dateElement = document.createElement(date ? this.calendarDayElementType : 'span');
                var Date = date.toString().split(' ')[2];

                var dateIsTheCurrentValue = this.value.toString() === date.toString();
                if (dateIsTheCurrentValue) this.activeDateElement = dateElement;

                var dateIsBetweenAllowedRange = (this.min || this.max) && (date.toString() !== this.today
                    .toString() && (date < this.min || date > this.max))
                if (dateIsBetweenAllowedRange) {
                    dateElement.classList.add('disabled');
                } else {
                    dateElement.tabIndex = 0;
                    dateElement.value = date;
                }

                dateElement.textContent = date ? Date : '';
                this.calendarGrid.appendChild(dateElement);
            })

            this.calendarElement.appendChild(this.calendarGrid);
            this.activeDateElement.classList.add('selected');
        }

        /**
         * @description Updates the core-values for the calendar based on the new month and year
         * given by the navigation. Also updates the UI with the new values.
         */
        CalendarPicker.prototype._updateCalendar = function() {
            this.date = new Date(this.year, this.month);

            this._setDateText();

            this.day = this.date.getDay();
            this.month = this.date.getMonth();
            this.year = this.date.getFullYear();
            this._toggleNavigationButtons();

            // Cannot use arrow-functions for IE support :(
            var that = this;
            window.requestAnimationFrame(function() {
                that.calendarHeaderTitle.textContent = that.listOfAllMonthsAsText[that.month] + ' - ' + that
                    .year;
                that._insertDaysIntoGrid();
            })
        }

        /**
         * @param {Function} callback
         * @description A "listener" that lets the user do something everytime the value changes.
         */
        CalendarPicker.prototype.onValueChange = function(callback) {
            if (this.callback) return this.callback(this.value);
            this.callback = callback;
        }
        console.log(this.value);
    </script>
    <script>
        const nextYear = new Date().getFullYear() + 1;
        const myCalender = new CalendarPicker('#test', {
            // If max < min or min > max then the only available day will be today.
            min: new Date(),
            max: new Date(nextYear, 10), // NOTE: new Date(nextYear, 10) is "Nov 01 <nextYear>"
            locale: 'en-US', // Can be any locale or language code supported by Intl.DateTimeFormat, defaults to 'en-US'
            showShortWeekdays: true // Can be used to fit calendar onto smaller (mobile) screens, defaults to false
        });

        const currentDateElement = document.getElementById('current-date');
        currentDateElement.textContent = myCalender.value;

        const currentDayElement = document.getElementById('current-day');
        currentDayElement.textContent = myCalender.value.getDay();

        const currentToDateString = document.getElementById('current-datestring');
        currentToDateString.textContent = myCalender.value.toDateString();

        myCalender.onValueChange((currentValue) => {
            currentDateElement.textContent = currentValue;
            currentDayElement.textContent = currentValue.getDay();
            currentToDateString.textContent = currentValue.toDateString();

            console.log(`The current value of the calendar is: ${currentValue}`);
        });
    </script>
    @livewireScripts
</body>

</html>
