$(document).ready(
    function(){
        $("#order").click(function(){
            //gets all div children of the main div, this returns a jQuery array with the elements
            var divs = $('#main');
            //sorts the divs based on the id attribute
            var ordered = divs.sort(function(a, b) {
            return $(a).attr('id') - $(b).attr('id');
            alert(ordered);
        });
            //empty the main div and re-append the ordered divs
            //$('#main').empty().append(ordered);
        });
    }
  );