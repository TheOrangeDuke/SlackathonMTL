function load(){
  jQuery.ajax({
    type: "POST",
    url: 'canvas.php/getAll',
    dataType: 'json',
    data: {functionname: 'add', arguments: [1, 2]},

    success: function (obj, textstatus) {
                  if( !('error' in obj) ) {
                      insert(obj.result);
                  }
                  else {
                      console.log(obj.error);
                  }
            }
          });

}

function insert(plan){
  document.getElementById("get-prob").innerHTML = plan.ideaMap.PROBLEM;
  document.getElementById("get-alt").innerHTML = plan.ideaMap.ALTERNATIVES;
  document.getElementById("get-sol").innerHTML = plan.ideaMap.SOLUTION;
  document.getElementById("get-met").innerHTML = plan.ideaMap.KEY_METRICS;
  document.getElementById("get-prop").innerHTML = plan.ideaMap.UNIQUE_VALUE;
  document.getElementById("get-con").innerHTML = plan.ideaMap.TAGLINE;
  document.getElementById("get-adv").innerHTML = plan.ideaMap.UNFAIR_ADVANTAGE;
  document.getElementById("get-chan").innerHTML = plan.ideaMap.CHANNELS;
  document.getElementById("get-seg").innerHTML = plan.ideaMap.CUSTOMER_SEGMENTS;
  document.getElementById("get-adop").innerHTML = plan.ideaMap.EARLY_ADOPTERS;
  document.getElementById("get-cost").innerHTML = plan.ideaMap.COST;
  document.getElementById("get-rev").innerHTML = plan.ideaMap.REVENEUS;
}
