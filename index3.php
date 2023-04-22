<?php
session_start();
require 'dbcon.php';
?>



<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <title>Console</title>
</head>
<style>
  @font-face {
    font-family: 'sbold';
    src: url('https://hcurvecdn.com/fonts/cardium-bold.woff2?v=3') format("truetype");
  }

  .abc {
    transition: all 1s ease-in;
  }

  .abc:hover {
    background-image: linear-gradient(to bottom right, white, #3497e2);
    backdrop-filter: blur(550px);
  }

  .abc:hover .xx {
    display: block;
    color: white;
    font-size: 16px;
    bottom: 10%;
    position: absolute;
    text-align: center;
    width: 100%;
  }

  .abc:hover .yy {
    display: block;
    color: black;
    font-size: 30px;
    bottom: 50%;
    position: absolute;
    text-align: center;
    width: 100%;
  }

  .xx,
  .yy {
    display: none;
  }


  #pagination ul {
    display: flex;
    margin-left: 5%;
    width: 90%;
    justify-content: center;
  }

  #pagination li {
    list-style-type: none;
    margin: 10px 0px;
    padding: 6px 10px;
    font-size: 20px;
  }

  .current {
    color: black;
    pointer-events: none;
  }

  .input-box {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
  }
</style>
<div id="pagination">
  <ul id="pages"></ul>
</div>
<table id="table">
  <tr>
    <!--<th>Date</th>-->
    <th>id</th>
    <th>ad_format</th>
    <th>template</th>
    <th>average_ctr</th>
    <th>dimensions</th>
    <th>duration</th>
    <th>functionality</th>
    <th>reviews</th>
    <th>description</th>
    <th>demo_link</th>
    <th>meta_keywords</th>
    <th>Action</th>
  </tr>

</table>


<script>


  var count = 0;
  fetch('https://publisherplex.io/webpresentation/console/api.php')
    .then(response => response.json())
    .then(data => {
      const tableBody = document.getElementById("table");

      <?php
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
      } else {
        $page = 1;
      }
      $limit = 30;
      $start = ($page - 1) * $limit;
      $end = $page * $limit;
      ?>

      var start = <?= $start; ?>;
      var end = <?= $end; ?>;
      console.log(end);

      for (let i = start; i <= end; i++) {

        const tr = document.createElement("tr");
        tr.classList.add('mainDiv');
        const id = document.createElement("td");
        const ad_format = document.createElement("td");
        const template = document.createElement("td");
        const average_ctr = document.createElement("td");
        const dimensions = document.createElement("td");
        const duration = document.createElement("td");
        const functionality = document.createElement("td");
        const reviews = document.createElement("td");
        const description = document.createElement("td");
        const demo_link = document.createElement("td");
        const meta_keywords = document.createElement("td");

        const view = document.createElement("button");
        const edit = document.createElement("button");

        id.textContent = data[i].id;
        ad_format.textContent = data[i].ad_format;
        template.textContent = data[i].template;
        average_ctr.textContent = data[i].average_ctr;
        dimensions.textContent = data[i].dimensions;
        duration.textContent = data[i].duration;
        functionality.textContent = data[i].functionality;
        reviews.textContent = data[i].reviews;
        description.textContent = data[i].description;
        demo_link.textContent = data[i].demo_link;
        meta_keywords.textContent = data[i].meta_keywords;


        tr.appendChild(id);
        tr.appendChild(ad_format);
        tr.appendChild(template);
        tr.appendChild(average_ctr);
        tr.appendChild(dimensions);
        tr.appendChild(duration);
        tr.appendChild(functionality);
        tr.appendChild(reviews);
        tr.appendChild(description);
        tr.appendChild(demo_link);
        tr.appendChild(meta_keywords);
        tr.appendChild(view).innerHTML = `<a class="viewpage">View</a>`;
        tr.appendChild(edit).innerHTML = `<a class="editpage">Edit</a>`;

        tr.appendChild(edit);



        tableBody.appendChild(tr);
        count++;



      }
      console.log(count)
      const adddata = document.createElement("button");

      adddata.setAttribute("class", "addbtn")

      var table = document.getElementById("table");

      table.parentNode.insertBefore(adddata, table);

      adddata.innerHTML = `<a href="https://publisherplex.io/webpresentation/console/presentation_create.php">Add Data</a>`

      for (let m = 0; m < document.querySelectorAll(".viewpage").length; m++) {
        var viewpage = document.querySelectorAll(".viewpage")[m];
        viewpage.setAttribute("href", `https://publisherplex.io/webpresentation/console/data_view.php?id=${m + 1}`)
      }

      for (let m = 0; m < document.querySelectorAll(".editpage").length; m++) {
        var editpage = document.querySelectorAll(".editpage")[m];
        editpage.setAttribute("href", `https://publisherplex.io/webpresentation/console/data_edit.php?id=${m + 1}`)
      }


    });

  setTimeout(() => {
    let alldata = count;
    var pageno = Math.ceil(alldata / 7);
    var dmate = document.getElementById('pages');
    if (alldata > 7) {
      for (let i = 1; i <= pageno; i++) {
        let query = `page=${i}`;
        var pagecrop = `<li><a href="?${query}">${i}</a></li>`;
        dmate.innerHTML += pagecrop;
      }
    }
    console.log(alldata)
    console.log(pageno)
  }, 1000);

</script>
<?php require('footer.php'); ?>