import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    connect() {
        this.element.addEventListener('chartjs:pre-connect', this._onPreConnect);
        this.element.addEventListener('chartjs:connect', this._onConnect);
    }

    disconnect() {
        // You should always remove listeners when the controller is disconnected to avoid side effects
        this.element.removeEventListener('chartjs:pre-connect', this._onPreConnect);
        this.element.removeEventListener('chartjs:connect', this._onConnect);
    }

    _onPreConnect(event) {
        // The chart is not yet created
        // You can access the config that will be passed to "new Chart()"
        // console.log(event.detail.config);

        event.detail.config.options.scales = {
            y: {
                'suggestedMin': 0,
                'suggestedMax': 100,

                ticks: {
                    callback: function(value) {
                        return value + '%';
                    },

                    stepSize: 25
                }

            },
        };
    }

    _onConnect(event) {
        // The chart was just created
        // console.log(event.detail.chart); // You can access the chart instance using the event details

        /*
        // For instance you can listen to additional events
        event.detail.chart.options.onHover = (mouseEvent) => {

        };
        event.detail.chart.options.onClick = (mouseEvent) => {

        };
        */
    }
}