

import 'babel-polyfill';

import './jquery-global';

import 'bootstrap';
import dataTable from 'datatables.net';
import 'typeahead.js';
import libraryTable from './table';
import autoComplete from 'javascript-autocomplete';
import config from './config';



$(document).ready(()=>{
    
    dataTable(window, $);
    libraryTable();

    new autoComplete({
        minChars: 1,
        selector: '#category-id',
        source: function(term, response){
            $.post(config.url+"api/category/search", { query: term }, function(data){ response(data); }, 'json');
        }
    });
});
