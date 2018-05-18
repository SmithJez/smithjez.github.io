<!DOCTYPE html>
<html>
<title>MSL Astroguide</title>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="css/jquery.dynatable.css"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

  <script
    src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
    crossorigin="anonymous"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tabulator/3.4.4/css/tabulator.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tabulator/3.4.4/js/tabulator.min.js"></script>
    <!-- <link rel="stylesheet" href="css/tabulator_midnight.min.css"> -->

    <style>
      .tabulator-col-title, .tabulator-col-content, .tabulator-col-title {
        text-align: center;
        vertical-align: middle;
        /* height: 100%; */
      }
      .tabulator-cell {
        line-height: "90px";


      }
      .tabulator-cell img {
        vertical-align: middle;

      }

    </style>

<script>



<?php
include "vendor/autoload.php";
?>
var lang = "en";

$( document ).ready(function() {
      // console.log( "ready!" );

      var table = $('#my-table').tabulator({
        // height:"400",
        pagination:"local",
        // columnMinWidth:100,
        responsiveLayout:false,
        layout:"fitDataFill",
        // layoutColumnsOnNewData:true,

        rowFormatter:function(row){
          var data = row.getData();

          row.getElement().css(
            {
              "height":"95px",
              "line-height": "90px",
              // "text-align": "center",
            }) ;
        },
        columns:[ //Define Table Columns
            // {title:"#", field:"id", frozen:true},
            {title:"Icon", field:"icon", formatter:"image", width:95, frozen:true, align:"center"},

            {title:"Name", field:"name", width:100, headerFilter:true, frozen:true},
            {
              title:"General Info",
              columns:[
                {title:"Element", field:"element", align:"center", headerFilter:true},
                {title:"Grade", field:"grade", align:"center", headerFilter:true},
                {title:"Evo", field:"evo", align:"center",  headerFilter:true},
                {title:"Type", field:"type", align:"center", headerFilter:true},
                {title:"Gender", field:"gender", align:"center", headerFilter:true},
                {title:"Has Skillbook", field:"skillbook", align:"center", headerFilter:true},
              ],
            },

            {
              title:"Stat",
              columns:[
                {title:"Hp", field:"hp", sorter:"number", align:"center"},
                {title:"Attack", field:"atk", sorter:"number", align:"center"},
                {title:"Defence", field:"def", sorter:"number", align:"center"},
                {title:"Recovery", field:"heal", sorter:"number", align:"center"},
                {title:"Crit Dmg", field:"crit_dmg", sorter:"number", align:"center"},
                {title:"Crit Rate", field:"crit_rate", sorter:"number", align:"center"},
                {title:"Resist", field:"resist", sorter:"number", align:"center"},
                {title:"Sp", field:"sp", sorter:"number", align:"center"},
                {title:"Sp Rec", field:"sp_recovery", sorter:"number", align:"center"},
              ],
            },
            {
              title:"Leader Skill",
              columns:[
                {title:"Icon", field:"leader_icon", formatter:"image", align:"center", width:72, headerSort:false},
                {title:"Name", field:"leader_name", align:"center", headerFilter:true},
                {title:"Desc", field:"leader_desc", formatter:"html", headerFilter:true},
              ],
            },
            {
              title:"Passive Skill",
              columns:[
                {title:"Icon", field:"passive_icon", formatter:"image", align:"center", width:72, headerSort:false},
                {title:"Name", field:"passive_name", align:"center", headerFilter:true},
                {title:"Desc", field:"passive_desc", headerFilter:true},
                {title:"Type", field:"passive_type", align:"center", headerFilter:true},
                {title:"Multiplier", field:"passive_multiplier", sorter:"number", align:"center", headerFilter:true},
                {title:"Orb Size", field:"passive_orb_size", sorter:"number", align:"center", headerFilter:true},
                {title:"Target", field:"passive_target", align:"center", headerFilter:true},


              ]
            },
            {
              title:"Passive Effect",
              columns:[
                {title:"Icon", field:"passive_effect_icon", formatter:"image", align:"center", width:72, headerSort:false},
                {title:"Name", field:"passive_effect_name", align:"center", headerFilter:true},
                {title:"Desc", field:"passive_effect_desc", formatter:"html", headerFilter:true},
                {title:"Duration", field:"passive_effect_duration", sorter:"number", align:"center", headerFilter:true},
                {title:"Chance", field:"passive_effect_chance", sorter:"number", align:"center", headerFilter:true},
                {title:"Multiplier", field:"passive_effect_multiplier", sorter:"number", align:"center", headerFilter:true},
                {title:"Value", field:"passive_effect_value", sorter:"number", align:"center", headerFilter:true},
                {title:"Upgrade 1", field:"passive_upgrade_1", sorter:"number", align:"center", headerFilter:true},
                {title:"Upgrade 2", field:"passive_upgrade_2", sorter:"number", align:"center", headerFilter:true},
                {title:"Upgrade 3", field:"passive_upgrade_3", sorter:"number", align:"center", headerFilter:true},
                {title:"Upgrade 4", field:"passive_upgrade_4", sorter:"number", align:"center", headerFilter:true},

              ]
            },

            {
              title:"Active Skill",
              columns:[
                {title:"Icon", field:"active_icon", formatter:"image", align:"center", width:72, headerSort:false},
                {title:"Name", field:"active_name", align:"center", headerFilter:true},
                {title:"Desc", field:"active_desc", headerFilter:true},
                {title:"Type", field:"active_type", align:"center", headerFilter:true},
                {title:"Multiplier", field:"active_multiplier", sorter:"number", align:"center", headerFilter:true},
                {title:"Orb Size", field:"active_orb_size", sorter:"number", align:"center", headerFilter:true},
                {title:"Target", field:"active_target", align:"center", headerFilter:true},


              ]
            },

            {
              title:"Active Effect",
              columns:[
                {title:"Icon", field:"active_effect_icon", formatter:"image", align:"center", width:72, headerSort:false},
                {title:"Name", field:"active_effect_name", align:"center", headerFilter:true},
                {title:"Desc", field:"active_effect_desc", formatter:"html", headerFilter:true},
                {title:"Duration", field:"active_effect_duration", sorter:"number", align:"center", headerFilter:true},
                {title:"Chance", field:"active_effect_chance", sorter:"number", align:"center", headerFilter:true},
                {title:"Multiplier", field:"active_effect_multiplier", sorter:"number", align:"center", headerFilter:true},
                {title:"Value", field:"active_effect_value", sorter:"number", align:"center", headerFilter:true},
                {title:"Upgrade 1", field:"active_upgrade_1", sorter:"number", align:"center", headerFilter:true},
                {title:"Upgrade 2", field:"active_upgrade_2", sorter:"number", align:"center", headerFilter:true},
                {title:"Upgrade 3", field:"active_upgrade_3", sorter:"number", align:"center", headerFilter:true},
                {title:"Upgrade 4", field:"active_upgrade_4", sorter:"number", align:"center", headerFilter:true},

              ]
            },

            {
              title:"Super Skill",
              columns:[
                {title:"Icon", field:"con_active_icon", formatter:"image", align:"center", width:72, headerSort:false},
                {title:"Name", field:"con_active_name", align:"center", headerFilter:true},
                {title:"Desc", field:"con_active_desc", headerFilter:true},
                {title:"Type", field:"con_active_type", align:"center", headerFilter:true},
                {title:"Multiplier", field:"con_active_multiplier", sorter:"number", align:"center", headerFilter:true},
                {title:"Orb Size", field:"con_active_orb_size", sorter:"number", align:"center", headerFilter:true},
                {title:"Target", field:"con_active_target", align:"center", headerFilter:true},
              ]
            },

            {
              title:"Super Effect",
              columns:[
                {title:"Icon", field:"con_active_effect_icon", formatter:"image", align:"center", width:72, headerSort:false},
                {title:"Name", field:"con_active_effect_name", align:"center", headerFilter:true},
                {title:"Desc", field:"con_active_effect_desc", formatter:"html", headerFilter:true},
                {title:"Duration", field:"con_active_effect_duration", sorter:"number", align:"center", headerFilter:true},
                {title:"Chance", field:"con_active_effect_chance", sorter:"number", align:"center", headerFilter:true},
                {title:"Multiplier", field:"con_active_effect_multiplier", sorter:"number", align:"center", headerFilter:true},
                {title:"Value", field:"con_active_effect_value", sorter:"number", align:"center", headerFilter:true},
              ]
            }


            // {title:"Age", field:"age", align:"left", formatter:"progress"},
            // {title:"Favourite Color", field:"col"},
            // {title:"Date Of Birth", field:"dob", sorter:"date", align:"center"},
        ],
        // rowClick:function(e, row){ //trigger an alert message when the row is clicked
        //     alert("Row " + row.getData().id + " Clicked!!!!");
        // },
      });

      var mydata = null;
      $.ajax({
         url: 'scripts/astroguide.php', //This is the current doc
         type: "POST",
         dataType:'json', // add json datatype to get json
         data: ({lang: $("#lang").val() }),
         success: function(data){
           $("#my-table").tabulator("setData", data);
           $("#my-table").tabulator("setPageSize", 5);

              // mydata = data;
             // console.log(data);
         }
      });


      $('#lang').change(function() {
        lang = $(this).val();
        $.ajax({
           url: 'scripts/astroguide.php', //This is the current doc
           type: "POST",
           dataType:'json', // add json datatype to get json
           data: ({lang: $("#lang").val() }),
           success: function(data){
             $("#my-table").tabulator("setData", data);
                // mydata = data;
               // console.log(data);
           }
        });
      });

});


</script>

</head>
<body>



<div class="table-responsive">
<table>
  <tbody>
  <tr>
    <td>Language</td>
    <td>
      <select id="lang" name="lang">
        <option value="en">English</option>
        <option value="th">ภาษาไทย</option>
        <option value="de">Deutsch</option>
        <option value="es">Español</option>
        <option value="fr">Français</option>
        <option value="it">Italiano</option>
        <option value="ja">日本語</option>
        <option value="ko">한국어</option>
        <option value="pt">Português</option>
        <option value="zh-cn">简体中文</option>
        <option value="zh-tw">繁體中文</option>



      </select>
  </tr>
  </tbody>
</table>

<table id="my-table">

</table>
</div>

</body>
</html>
