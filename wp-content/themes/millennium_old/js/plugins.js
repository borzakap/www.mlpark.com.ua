$(document).ready(function() {
  /*фильтр area*/
  $('#form-area').each(function() {
    var areaLow = $('#form-area_low').data('value');
    var areaUp = $('#form-area_up').data('value');
    var areaLowNow = $('#form-area_low').data('value-now');
    var areaUpNow = $('#form-area_up').data('value-now');
 var snapSlider = document.getElementById('form-area');
 noUiSlider.create(snapSlider, {
  start: [areaLowNow, areaUpNow],
  step: 1,
  connect: true,
  range: {
   'min': areaLow,
   'max': areaUp
  },
  format: {
   to: (v) => parseFloat(v).toFixed(0),
   from: (v) => parseFloat(v).toFixed(0)
  },
 });
 var snapValues = [
  document.getElementById('form-area_low'),
  document.getElementById('form-area_up')
 ];
 snapSlider.noUiSlider.on('update', function(values, handle) {
  snapValues[handle].innerHTML = values[handle];
  $('input[name=filter-area-from]').val(values[0]);
  $('input[name=filter-area-to]').val(values[1]);
 });
});
$('select[name=sort-select]').change(function(e) {
    var sort,
        selectedOption = $(this).find("option:selected").val();
    console.log(selectedOption);
    if ( selectedOption === 'price-low-to-high') {
      sort = 'ASC';
    } else if ( selectedOption === 'price-high-to-low') {
      sort = 'DESC';
    }
    location.href = URL_add_parameter(location.href, 'order', sort);
});

   function URL_add_parameter(url, param, value){
       var hash       = {};
       var parser     = document.createElement('a');

       parser.href    = url;

       var parameters = parser.search.split(/\?|&/);

       for(var i=0; i < parameters.length; i++) {
           if(!parameters[i])
               continue;

           var ary      = parameters[i].split('=');
           hash[ary[0]] = ary[1];
       }

       hash[param] = value;

       var list = [];
       Object.keys(hash).forEach(function (key) {
           list.push(key + '=' + hash[key]);
       });

       parser.search = '?' + list.join('&');
       return parser.href;
   }
});