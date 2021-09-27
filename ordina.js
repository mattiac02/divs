$(document).ready(
  function() {
    $("#main")[0].style.display = "flex";
    $("#main")[0].style.flexDirection = "column";
    $("#order").click(function() {
      [...$("#main div")].forEach(div => {
        div.style.order = div.id;
      });
    });
    $("#ord").on("change", e => {
      const direction = e.target.value == ">" ? "column" : "column-reverse";
      $("#main")[0].style.flexDirection = direction;
    });

    //});  //Why is this here?
  }
);
