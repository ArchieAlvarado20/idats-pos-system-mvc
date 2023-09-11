$(document).ready(function(){
    $('#myTable1').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu":[
        [15, 25, 50, -1],
        [15, 25, 50, "All"],
      ],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search here...",
      },
    })
  });