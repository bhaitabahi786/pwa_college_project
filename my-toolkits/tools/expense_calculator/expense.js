// initialize on load
$(document).ready(function() {
    $(".datepicker").datepicker();
    $("select").formSelect();
  });

// Ass for custome category
$("#catagory").change(event => {
  if ($("#catagory").val() == "type") {
    $("#typemo").css("display", "block");
  } else {
    $("#typemo").css("display", "none");
  }
});


var showTable = () => {
  var table = [];
  data.expense.forEach(exp => {
    let i = 0;
    let getdate = new Date(exp.date);
    let fulldate =
      getdate.getDate() +
      "/" +
      parseInt(getdate.getMonth() + 1) +
      "/" +
      getdate.getFullYear();
    var list = {
      date: fulldate,
      amount: parseInt(exp.amount),
      category: exp.category
    };
    table.push(list);

    table.forEach(t => {
      $("#addrows").append(
        "<tr><td>" +
          ++i +
          "</td><td>" +
          t.date +
          "</td><td>" +
          "₹" +
          t.amount +
          "</td><td>" +
          t.category +
          "</td></tr>"
      );
    });
  });
};
