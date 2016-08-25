/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$("form input.date").datepicker({
    dateFormat: 'dd/mm/yy', 
    firstDay:1
}).attr("readonly","readonly");