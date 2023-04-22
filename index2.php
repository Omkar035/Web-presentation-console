<?php
session_start();
require 'dbcon.php';
?>


<?php require('header.php'); ?>
<div class="container mt-4">

    <?php require('message.php'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Web Presentation Details
                        <a href="presentation_create.php" class="btn btn-primary float-end"> Add Data</a>

                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-striped text-wrap">
                            <thead class=" w-25">
                                <tr>
                                    <th>ID</th>
                                    <th>Ad Format</th>
                                    <th>Template</th>
                                    <th>Category</th>
                                    <th>Average CTR</th>
                                    <th>Dimensions</th>
                                    <th>Duration</th>
                                    <th>Functionality</th>
                                    <th>Reviews</th>
                                    <th>Description</th>
                                    <th>Demo Link</th>
                                    <th>Meta Key</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM present";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $presentation) {
                                        // echo $student['name'];
                                        ?>
                                        <tr class="overflow-auto">

                                            <td class="text-wrap">
                                                <?= $presentation['id']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['ad_format']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['template']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['category']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['average_ctr']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['dimensions']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['duration']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['functionality']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['reviews']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['description']; ?>
                                            </td>
                                            <td class="text-wrap" style="">
                                                <?= $presentation['demo_link']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['meta_keywords']; ?>
                                            </td>

                                            <td>
                                                <a href="data_view.php?id=<?= $presentation['id']; ?> "
                                                    class="btn btn-info btn-sm">View</a>
                                                <a href="data_edit.php?id=<?= $presentation['id']; ?> "
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <!--<button type="submit" name="delete_data" value="<?= $presentation['id']; ?>"-->
                                                    <!--    class="btn btn-danger btn-sm" disabled >Delete</button>-->
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "<h5> No records Found </h5>";
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    fetch('https://publisherplex.io/webpresentation/console/api.php')
  .then(response => response.json())
  .then(data => {
    //   for(let i=0; i<data.data.length; i++){
    //      let tr = document.createElement("tr");
    //      tr.className="t2"
    //     //  let td_date = document.createElement("td");
    //      let td_<?php echo $cohart?> = document.createElement("td");
    //      let td_impressions = document.createElement("td");
    //      let td_clicks = document.createElement("td");
    //      let td_ctr = document.createElement("td");
    //      let td_id = document.createElement("td");
         
    //         //distribution percent
    //         var abc=(Number(data.data[i].impressions)/Number(data.ID))*100;console.log(abc);
    //         //impression of cohorts 
    //         var imp = (Number(data.data[i].impressions)) * var2;
    //         //clicks of cohorts 
    //         var click = Number(data.data[i].clicks);
    //         //ctr of cohorts 
    //         var ctr = Number((click/imp)*100).toFixed(2);
    //         //cohorts dynamic 
    //         var dyn = data.data[i].<?php echo $cohart?>;
    //         console.log(dyn);
    //         console.log(imp);
    //         console.log(main_imp);
            
         
    //     //  td_date.innerText = data.data[i].date;
        
    //   // td_<?php echo $cohart?>.innerText = data.data[i].<?php echo $cohart?>;
       
        
    //     if(dyn == 0 && imp == main_imp){
    //         document.getElementById("nodata").innerText = "NO DATA FOR THIS COHORT";
    //         document.getElementById("table").style.display="none";
    //         document.getElementById("swiper").style.display="none";
    //     }
    //     else{
    //         td_<?php echo $cohart?>.innerText = data.data[i].<?php echo $cohart?>;
    //     }
        
         
    //     let roundedImp = Math.round(imp);
    //     td_impressions.innerText = roundedImp.toLocaleString("en-US");
    //     //  td_impressions.innerText = imp.toLocaleString("en-US");;
    //      td_clicks.innerText = click.toLocaleString("en-US");
    //      td_ctr.innerText = ctr + "%";
    //     //  td_id.innerText = Number(data.data[i].impression)/Number(data.ID); 
    //      td_id.innerText =abc.toFixed(2) + '%';
         
         

    //     //  tr.appendChild(td_date);
    //      tr.appendChild(td_<?php echo $cohart?>);
    //      tr.appendChild(td_impressions);
    //      tr.appendChild(td_clicks);
    //      tr.appendChild(td_ctr);
    //      tr.appendChild(td_id); 
         
    //      document.getElementById("table").appendChild(tr);
         
    //     if(Number(abc) < 5 && Number(ctr) == Number(main_ctr)){
            
    //             var el = document.createElement('div');
    //             el.className = "swiper-slide";
    //             el.id = "swiper-slide"+i;
                
    //             el.style = "outline:4px solid green"
    //             document.getElementById("wrapper").appendChild(el)
    //             var e3 = document.createElement('div');
    //             e3.className = "swip_card";
    //             e3.style="padding-top:-20px";
    //             e3.innerHTML = "<span style='font-size:15px'> ID is very low on <span style='color:#24b2be;font-family: 'RobotoB;'> " +dyn+ "</span> and CTR is equal to Avg CTR.<br> HC Recommends : <span style='color:#24b2be;font-family: 'RobotoB';>  Increase</span> the ID on <span style='color:#24b2be;font-family: 'RobotoB';>  " +dyn+ "</span>.</span>";
    //           document.getElementById("swiper-slide"+i).appendChild(e3);
    //         }
            
    //         else if(Number(abc) >=15  &&( Number(ctr) > Number(main_ctr - 0.04) && (Number(ctr< Number(main_ctr))))){

    //             var el = document.createElement('div');
    //             el.className = "swiper-slide";
    //             el.id = "swiper-slide"+i;
                
    //             var percent =Math.abs(Math.floor((Number(main_ctr)-Number(ctr))/((Number(main_ctr)+Number(ctr))/2)*100));
               
                
    //             el.style = "outline:4px solid green"
    //             document.getElementById("wrapper").appendChild(el)
    //             var e3 = document.createElement('div');
    //             e3.className = "swip_card";
    //             e3.style="padding-top:-20px";
    //             e3.innerHTML = "<span style='font-size:15px'> ID is high on <span style='color:#24b2be;font-family: 'RobotoB;'> " +dyn+ "</span> and CTR is <span style='color:#24b2be;font-family: 'RobotoB';>  "+percent+"% </span> lower Which is close to Avg CTR.<br> HC Recommends : <span style='color:#24b2be;font-family: 'RobotoB';>  Increase</span> the ID on <span style='color:#24b2be;font-family: 'RobotoB';>  " +dyn+ "</span>.</span>";
              
    //           document.getElementById("swiper-slide"+i).appendChild(e3);
    //         }
            
    //          else if(Number(abc) <= 0.09 && Number(ctr) > Number(main_ctr)){

    //             var el = document.createElement('div');
    //             el.className = "swiper-slide";
    //             el.id = "swiper-slide"+i;
                
    //             var percent =Math.abs(Math.floor((Number(main_ctr)-Number(ctr))/((Number(main_ctr)+Number(ctr))/2)*100));
               
                
    //             el.style = "outline:4px solid red"
    //             document.getElementById("wrapper").appendChild(el)
    //             var e3 = document.createElement('div');
    //             e3.className = "swip_card";
    //             e3.style="padding-top:-20px";
    //             e3.innerHTML = "<span style='font-size:15px'> ID is very low on <span style='color:red;font-family: 'RobotoB;'> " +dyn+ "</span> and CTR is higher than Avg CTR.<br> HC Recommends : Please check the set up on <span style='color:red;font-family: 'RobotoB';>  " +dyn+ "</span>.</span>";
              
    //           document.getElementById("swiper-slide"+i).appendChild(e3);
    //         }
            
    //          else if(Number(abc) <= 10 && Number(ctr) >= Number(main_ctr)){

    //             var el = document.createElement('div');
    //             el.className = "swiper-slide";
    //             el.id = "swiper-slide"+i;
                
    //             var percent =Math.abs(Math.floor((Number(main_ctr)-Number(ctr))/((Number(main_ctr)+Number(ctr))/2)*100));
               
                
    //             el.style = "outline:4px solid green"
    //             document.getElementById("wrapper").appendChild(el)
    //             var e3 = document.createElement('div');
    //             e3.className = "swip_card";
    //             e3.style="padding-top:-20px";
    //             e3.innerHTML = "<span style='font-size:15px'> ID is very low on <span style='color:#24b2be;font-family: 'RobotoB';> " +dyn+ "</span> but CTR is <span style='color:#24b2be;font-family: 'RobotoB';>  "+percent+"% </span> high as compared to Avg CTR. <br> HC Recommends :<span style='color:#24b2be;font-family: 'RobotoB';>   Increase</span> the ID on <span style='color:#24b2be;font-family: 'RobotoB';> " +dyn+ "</span>.</span>";
              
    //           document.getElementById("swiper-slide"+i).appendChild(e3);
    //         }
            
    //         else if(Number(abc) >= 13 && Number(ctr) == Number(main_ctr)){
            
    //             var el = document.createElement('div');
    //             el.className = "swiper-slide";
    //             el.id = "swiper-slide"+i;
                
    //             el.style = "outline:4px solid green"
    //             document.getElementById("wrapper").appendChild(el)
    //             var e3 = document.createElement('div');
    //             e3.className = "swip_card";
    //             e3.style="padding-top:-20px";
    //             e3.innerHTML = "<span style='font-size:15px'> ID is high and CTR is equal to Avg CTR.<br> HC Recommends:<span style='color:#24b2be;font-family: 'RobotoB';> SPEND MORE ON  " +dyn+ "</span>&#128077</span>";
    //           document.getElementById("swiper-slide"+i).appendChild(e3);
    //         }
            
    //         else if(Number(abc) <= 15 && Number(ctr) >= 10 && Number(main_ctr) >= Number(main_ctr)){
            
    //             var el = document.createElement('div');
    //             el.className = "swiper-slide";
    //             el.id = "swiper-slide"+i;
                
    //             var percent =Math.abs(Math.floor((Number(main_ctr)-Number(ctr))/((Number(main_ctr)+Number(ctr))/2)*100));
                
    //             el.style = "outline:4px solid green"
    //             document.getElementById("wrapper").appendChild(el)
    //             var e3 = document.createElement('div');
    //             e3.className = "swip_card";
    //             e3.style="padding-top:-20px";
                
    //             e3.innerHTML = "<span style='font-size:15px'> ID is Avg on<span style='color:#24b2be;font-family: 'RobotoB;'> " +dyn+ "</span> and CTR is <span style='color:#24b2be;font-family: 'RobotoB';>  "+percent+"% </span> high as compared to Avg CTR.<br> HC Recommends : <span style='color:#24b2be;font-family: 'RobotoB';>  Increase</span> the ID on<span style='color:#24b2be;font-family: 'RobotoB';>  " +dyn+ "</span>.</span>";
              
    //           document.getElementById("swiper-slide"+i).appendChild(e3);
    //         }
            
    //         else if(Number(abc) >= 15 && Number(ctr) <= Number(main_ctr)){
            
    //             var el = document.createElement('div');
    //             el.className = "swiper-slide";
    //             el.id = "swiper-slide"+i;
    //             var percent =Math.abs(Math.floor((Number(main_ctr)-Number(ctr))/((Number(main_ctr)+Number(ctr))/2)*100));
                
                
    //             el.style = "outline:4px solid red"
    //             document.getElementById("wrapper").appendChild(el)
    //             var e3 = document.createElement('div');
    //             e3.className = "swip_card";
    //             e3.style="padding-top:-20px";
    //             e3.innerHTML = "<span style='font-size:15px'> ID is high on <span style='color:red;font-family: 'RobotoB;'> " +dyn+ "</span> and CTR is <span style='color:red;font-family: 'RobotoB';>  "+percent+"% </span> lower as compared to Avg CTR.<br> HC Recommends : <span style='color:red;font-family: 'RobotoB';>  Decrease</span> the ID on <span style='color:red;font-family: 'RobotoB';>  " +dyn+ "</span>.</span>";
              
    //           document.getElementById("swiper-slide"+i).appendChild(e3);
    //         }
            
    //           else if(Number(abc) >= 15 && Number(ctr) > Number(main_ctr)){
            
    //             var el = document.createElement('div');
    //             el.className = "swiper-slide";
    //             el.id = "swiper-slide"+i;
    //             var percent =Math.abs(Math.floor((Number(main_ctr)-Number(ctr))/((Number(main_ctr)+Number(ctr))/2)*100));
                
                
    //             el.style = "outline:4px solid green"
    //             document.getElementById("wrapper").appendChild(el)
    //             var e3 = document.createElement('div');
    //             e3.className = "swip_card";
    //             e3.style="padding-top:-20px";
    //             e3.innerHTML = "<span style='font-size:15px'> ID is high on <span style='color:#24b2be;font-family: 'RobotoB;'> " +dyn+ "</span> and CTR is <span style='color:#24b2be;font-family: 'RobotoB';>  "+percent+"% </span> higher as compared to Avg CTR.<br> HC Recommends : SPEND MORE ON <span style='color:#24b2be;font-family: 'RobotoB';>  " +dyn+ "</span>.</span>";
              
    //           document.getElementById("swiper-slide"+i).appendChild(e3);
    //         }
    //           else if(Number(abc) < 10 && Number(ctr) < Number(main_ctr)){
            
    //             var el = document.createElement('div');
    //             el.className = "swiper-slide";
    //             el.id = "swiper-slide"+i;
    //             var percent =Math.abs(Math.floor((Number(main_ctr)-Number(ctr))/((Number(main_ctr)+Number(ctr))/2)*100));
                
                
    //             el.style = "outline:4px solid red"
    //             document.getElementById("wrapper").appendChild(el)
    //             var e3 = document.createElement('div');
    //             e3.className = "swip_card";
    //             e3.style="padding-top:-20px";
    //             e3.innerHTML = "<span style='font-size:15px'> ID is very low on <span style='color:red;font-family: 'RobotoB;'> " +dyn+ "</span> and CTR is <span style='color:red;font-family: 'RobotoB';>  "+percent+"% </span> low as compared to Avg CTR.<br> HC Recommends :<span style='color:red;font-family: 'RobotoB;'> Decrease</span> the ID on  <span style='color:red;font-family: 'RobotoB';>  " +dyn+ "</span>.</span>";
              
    //           document.getElementById("swiper-slide"+i).appendChild(e3);
    //         }
    //         else{
    //               var el = document.createElement('div');
    //             el.className = "swiper-slide";
    //             el.id = "swiper-slide"+i;
    //             var percent =Math.abs(Math.floor((Number(main_ctr)-Number(ctr))/((Number(main_ctr)+Number(ctr))/2)*100));
                
                
    //             el.style = "outline:4px solid green"
    //             document.getElementById("wrapper").appendChild(el)
    //             var e3 = document.createElement('div');
    //             e3.className = "swip_card";
    //             e3.style="padding-top:-20px";
    //             e3.innerHTML = "<span style='font-size:15px'> Performance on <span style='color:#24b2be;font-family: 'RobotoB;'> " +dyn+ " </span>is <span style='color:#24b2be;font-family: 'RobotoB';>VERY GOOD </span><span style='font-size:50px;'>&#128077;</span></span>";
              
    //           document.getElementById("swiper-slide"+i).appendChild(e3);
    //         }
        
    //  }
  });
</script>
<?php require('footer.php'); ?>
