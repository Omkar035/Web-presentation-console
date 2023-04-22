// Define constants
const PAGE_SIZE = 10; // Number of rows per page
const API_URL = 'https://jsonplaceholder.typicode.com/posts'; // API endpoint

// Select the table element
const table = document.querySelector('table');

// Fetch the data from the API
fetch(API_URL)
    .then(response => response.json())
    .then(data => {
        // Create an empty string for the table rows
        let tableRows = '';

        // Loop through the data and create table rows
        data.forEach((item, index) => {
            // Calculate the row number and page number
            const rowNumber = index + 1;
            const pageNumber = Math.ceil(rowNumber / PAGE_SIZE);

            // If this row belongs to the first page, add it to the table rows
            if (pageNumber === 1) {
                tableRows += `
          <tr>
            <td>${item.id}</td>
            <td>${item.title}</td>
            <td>${item.body}</td>
          </tr>
        `;
            }
        });

        // Insert the table rows into the table
        table.querySelector('tbody').innerHTML = tableRows;

        // Create an empty string for the pagination links
        let paginationLinks = '';

        // Calculate the number of pages
        const totalPages = Math.ceil(data.length / PAGE_SIZE);

        // Loop through the pages and create pagination links
        for (let i = 1; i <= totalPages; i++) {
            paginationLinks += `
        <a href="#" data-page="${i}">${i}</a>
      `;
        }

        // Insert the pagination links into the table footer
        table.querySelector('tfoot').innerHTML = `
      <tr>
        <td colspan="3">
          ${paginationLinks}
        </td>
      </tr>
    `;

        // Add a click event listener to the pagination links
        const paginationLinksEl = table.querySelectorAll('tfoot a');
        paginationLinksEl.forEach(link => {
            link.addEventListener('click', e => {
                e.preventDefault();

                // Get the page number from the data-page attribute
                const pageNumber = parseInt(link.dataset.page);

                // Create an empty string for the table rows
                let tableRows = '';

                // Loop through the data and create table rows for the selected page
                data.forEach((item, index) => {
                    // Calculate the row number and page number
                    const rowNumber = index + 1;
                    const currentPageNumber = Math.ceil(rowNumber / PAGE_SIZE);

                    // If this row belongs to the selected page, add it to the table rows
                    if (currentPageNumber === pageNumber) {
                        tableRows += `
              <tr>
                <td>${item.id}</td>
                <td>${item.title}</td>
                <td>${item.body}</td>
              </tr>
            `;
                    }
                });

                // Insert the table rows into the table
                table.querySelector('tbody').innerHTML = tableRows;
            });
        });
    });
