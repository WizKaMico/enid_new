// Initialize AG-Grid
var gridOptionsSchoolYear = {
    columnDefs: [
      {
        headerName: 'SCHOOL YEAR INFORMATION',
        children: [
          {
                headerName: 'SYCODE',
                field: 'sycode',
                cellRenderer: function(params) {
                  const link = document.createElement('a');
                  link.setAttribute('href', 'home.php?view=school_year_detail&sycode=' + params.value);
                  link.innerText = params.value;
                  link.addEventListener('click', function(event) {
                    event.stopPropagation();
                  });
                  return link;
                },
          } ,
          { headerName: 'START', field: 'year_from' },
          { headerName: 'END', field: 'year_to' },
          { headerName: 'CREATION', field: 'date_created' },
          { headerName: 'STATUS', field: 'status' },
                 
        ],
      },
    ],
    defaultColDef: {
      resizable: true,
      suppressSizeToFit: true,
      width: 200,
      enableRowGroup: true,
      enablePivot: true,
      enableValue: true,
      sortable: true,
    },
    rowData: []
  };
  
  // Fetch data from the server and populate the grid
  function fetchAndPopulateDataYear() {
    fetch('api/get_school_year.php') // Replace with your server-side endpoint
      .then(response => response.json())
      .then(data => {
        gridOptionsSchoolYear.api.setRowData(data);
      })
      .catch(error => {
        console.error('Error fetching data:', error);
      });
  }
  
  // Reference to the search input field
  var searchInput = document.querySelector('#search-input');
  
  // Function to filter the grid data based on the search input
  function filterData(searchText) {
    gridOptionsSchoolYear.api.setQuickFilter(searchText);
  }
  
 
  
  // Call the function to fetch and populate data when the page loads
  document.addEventListener('DOMContentLoaded', function() {
    var gridDivYear = document.querySelector('#gridYear');
    new agGrid.Grid(gridDivYear, gridOptionsSchoolYear);
  
    // Fetch and populate data
    fetchAndPopulateDataYear();
  });
  