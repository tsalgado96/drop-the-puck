var expressionList = ['Drop The Puck', 'What The Puck', 'Holy Puck', 'Puck', 'Puck You', 'Go Puck Yourself',
'Puck Yeah', 'Puck Me', 'That\'s Pucked Up', 'Puck Off'];

$(document).ready(function(){
  
  var count = 1;
  $(".navbar-brand").on("click", function(){
    let randExpression = expressionList[count];
    switch(count) {
      case 0:
        $(".navbar-brand").html('<h3>' + randExpression + ' <span class="blue">.</span></h3>');
        break;
      case 1:
        $(".navbar-brand").html('<h3>' + randExpression + ' <span class="blue">?!</span></h3>');
        break;
      case 2:
        $(".navbar-brand").html('<h3>' + randExpression + ' <span class="blue">!</span></h3>');
        break;
      case 3:
        $(".navbar-brand").html('<h3>' + randExpression + ' <span class="blue">.</span></h3>');
        break;
      case 4:
        $(".navbar-brand").html('<h3>' + randExpression + ' <span class="blue">!</span></h3>');
        break;
      case 5:
        $(".navbar-brand").html('<h3>' + randExpression + ' <span class="blue">!</span></h3>');
        break;
      case 6:
        $(".navbar-brand").html('<h3>' + randExpression + ' <span class="blue">!</span></h3>');
        break;
      case 7:
        $(".navbar-brand").html('<h3>' + randExpression + ' <span class="blue">.</span></h3>');
        break;
      case 8:
        $(".navbar-brand").html('<h3>' + randExpression + ' <span class="blue">!</span></h3>');
        break;
      case 9:
        $(".navbar-brand").html('<h3>' + randExpression + ' <span class="blue">!</span></h3>');
        break;
    }
    count++;
    if(count >= expressionList.length-1){
      count = 0;
    }
  });

});
