import { Controller } from '@hotwired/stimulus';

import {Chart} from 'chart.js';
import 'chartjs-adapter-luxon';

import 'chartjs-adapter-date-fns';
import {enUS} from 'date-fns/locale';



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
        console.log(event.detail.config);

        /*
        event.detail.config.data = {
            datasets: [{
              data: [{
                  x: '2017-01-06',
                  y: 50
                },
                {
                  x: '2017-01-15',
                  y: 45
                },
                {
                  x: '2017-03-07',
                  y: 35
                },
              ]
            }]
        }

        event.detail.config.options.plugins = {
            title: {
                display: true,
                text: 'Negative'
            }
        }
        */

        event.detail.config.options.scales = {
            y: {
                'suggestedMin': 0,
                'suggestedMax': 100
            },

            x: {
                /*
                adapters: { 
                    date: {
                        locale: enUS, 
                    }
                },
                */

                // type: 'time',
                // unit: 'month',

                /*
                time: {
                    displayFormats: {
                        quarter: 'MMM YYYY'
                    }
                }
                
                
                ticks: {
                    type: 'time',
                time: {
                    unit: 'month'
                },
                // Include a dollar sign in the ticks
                

                callback: function(value, index, ticks) {
                    // return '$' + value + index;
                    // return index % 10 === 0 ? value : '';
                    // return '$' + this.getLabelForValue(index);
                    return this.getLabelForValue(index) % 10 === 0 ? this.getLabelForValue(index) : '*********';
                },
                
                // stepSize: 0.5
                }
                */
            }
        };
    }

    _onConnect(event) {
        // The chart was just created
        console.log(event.detail.chart); // You can access the chart instance using the event details

        // For instance you can listen to additional events
        event.detail.chart.options.onHover = (mouseEvent) => {

        };
        event.detail.chart.options.onClick = (mouseEvent) => {

        };
    }
}