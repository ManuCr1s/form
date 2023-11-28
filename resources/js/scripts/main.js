import bsCustomFileInput from 'bs-custom-file-input';
import {dependency,changeInput,officeAll} from '../scripts/functions';
import route from '../scripts/route';
import './dates.js';
$(document).ready(function(){
    bsCustomFileInput.init();
    dependency($('#region'),route.provincia,$('#province'),0);
    dependency($('#province'),route.distrito,$('#district'),1);
    changeInput($('#type'),$('#razon'),$('#all'),$('#number'));
    officeAll(route.oficina, $('#dependency'));
})