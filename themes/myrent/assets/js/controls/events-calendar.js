;(function(){

    oc.registerControl('events-calendar', class extends oc.ControlBase {
        init() {
            this.lang = document.documentElement.lang;

        }

        connect() {

          var request = new XMLHttpRequest();

          request.open('GET', '/' + this.lang +'/api/events', true);

          request.onload = function() {

              var response = JSON.parse(request.responseText)[0];

              // Book Calendar
              var flatpickrConfig = {
                  locale: this.lang,
                  minDate: new Date(response.firstDate),
                  showMonths: 1,
                  inline: true,
                  defaultDate: new Date(response.firstDate),
                  static: false,
                  disableMobile: "true",
                  dateFormat: "Y-m-d",
                  onChange: function(date) {
                      date = new Date(date).yyyymmdd();
                      loadEvents(date);
                  },
                  onDayCreate: function(dObj, dStr, fp, dayElem) {

                      var day = new Date(dayElem.dateObj).yyyymmdd();

                      if (response.dates != 0) {
                        Object.entries(response.dates).forEach((item) => {
                          if (item[0] == day) {
                              dayElem.classList.add('has-events');
                              dayElem.setAttribute('data-events', item[1].length );
                          }
                        });
                      }


                  },
                  locale: {
                      firstDayOfWeek: 1
                  }
              };

              if (response.firstDate) {
                var $calendar = flatpickr("#events-calendar", flatpickrConfig);

                loadEvents(response.firstDate);
              }


              function loadEvents(date) {
                oc.ajax('onAjaxEvents', {
                  data: {event_date: date},
                  update: { 'builder/events/_list': '#events-wrap' }
                });
              }

          }

          request.send();


        }

        disconnect() {

        }



    });

})();
