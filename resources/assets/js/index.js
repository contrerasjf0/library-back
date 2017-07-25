
/*window.$ = window.jQuery = require('jquery');
require('tether');
require('bootstrap');
const dataTable = require('datatables.net');*/
import 'babel-polyfill';
//import $ from "jquery";
/*import {$,jQuery} from 'jquery';

window.jQuery = window.$ = $;
window.$ = $;
window.jQuery = jQuery;*/

//window.jQuery = window.$ = $;
import './jquery-global';

import 'bootstrap';
import dataTable from 'datatables.net';
import 'typeahead.js';
import libraryTable from './table';



$(document).ready(()=>{
   
    dataTable(window, $);
    libraryTable();
    $('#category-id').typeahead({
  minLength: 0,
  highlight: true
},{
            source: function (query, result) {
                
                $.ajax({
                    url: "http://library.app/api/category/search",
					data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						result($.map(data, function (item) {
							return item;
                        }))
                    }
                });
            }
    });
});
