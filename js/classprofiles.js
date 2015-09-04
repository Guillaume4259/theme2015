 		<!-- DONUT 2014 MIB Class profile -->



//redraw graph when window resize is completed  

      google.load("visualization", "1", {packages:["corechart","geochart"]});

			 
			  google.setOnLoadCallback(drawChart);
			  function drawChart() {
				var mibdata = google.visualization.arrayToDataTable([
				  ['label', 'Percentage'],
				  ['Business Administration & Management',     36],
				  ['Humanities & Social Sciences',      29],
				  ['Finance & Accounting',  11],
				  ['Engineering', 7],
				  ['Marketing & Communication',    8],
				  ['Economics ',    4],
				  ['Other',    5]
				]);
		
				var options = {
				  pieHole: 0.6,
				  pieSliceText: 'percentage',
				  slices: {0: {offset: 0.02, color: '#018990'}, 1: {offset: 0.06, color: '#f36f21'}, 2: {offset: 0.0, color: '#00b1cd'}, 3: {offset: 0.1, color: '#f7941e'}, 4: {offset: 0.05, color: '#264967'}, 5: {color: '#e04c3c'}, 6: {offset: 0.07, color: '#939598'}},
				  pieSliceTextStyle: {color: '#fff', fontSize: '12px', fontName: 'foundrysterling-boldregular'},
				  titleTextStyle: {color: 'black', fontName: 'foundrysterling-lightregular', fontSize: '20px'},
				  tooltip: {textStyle: {color: '#636466'}, showColorCode: true, fontName: 'foundrysterling-lightregular', fontSize: '14px', text: 'percentage'},
				  legend: {textStyle: {color: 'black', fontName: 'foundrysterling-lightregular', fontSize: 16}, position: 'right', maxLines: 10},
				  chartArea: {height: '300px', width:'100%'},
				  fontSize: 14,
				  fontName: 'foundrysterling-lightregular',
				  backgroundColor: 'none'
				};
				
				var chartmibdonut = new google.visualization.PieChart(document.getElementById('donutchart_mib'));
				chartmibdonut.draw(mibdata, options);
			  }

    
         <!-- MAP 2014 MIB Class profile -->


		
			 google.setOnLoadCallback(drawMarkersMap);
		
			  function drawMarkersMap() {
			  var mibgeodata = google.visualization.arrayToDataTable([
				['Region', '%', '% of students from this area'],
				['North & South America', 'North & South America 5%', 5],
				['Europe', 'Europe 23%', 23],
				['Central Asia', 'Central Asia 2%',  2],
				['East Asia', 'East Asia 41%',  41],
				['South Asia', 'South Asia 21%',  21],
				['South East Asia', 'South East Asia 2%',  2],
				['Africa & Middle East', 'Africa & Middle East 7%',  7]
			  ]);
		
			  var options = {
				displayMode: 'text',
				magnifyingGlass: {enable: true, zoomFactor: 7.5},
				sizeAxis: {minValue: 2,  maxSize: 18, minSize: 12},
				colorAxis: {colors:['#018990','#01595d']},
				datalessRegionColor: '#FFEEBC',
				legend: {textStyle: {color: 'black', fontName: 'foundrysterling-boldregular'}},
				fontSize: 14,
				fontName: 'foundrysterling-boldregular',
				tooltip: {textStyle: {color: '#636466'}, showColorCode: true, text: 'percentage'},
				backgroundColor: 'none'
			  };
		
			  var mibgeochart = new google.visualization.GeoChart(document.getElementById('mib_chart_div'));
			  mibgeochart.draw(mibgeodata, options);
			};
			
	
	 		<!-- DONUT 2014 MFM Student Profiles -->



			  google.setOnLoadCallback(drawChart2);
			  function drawChart2() {
				var mfmdata = google.visualization.arrayToDataTable([
				  ['label', 'Percentage'],
				  ['Business Administration & Management',     48.5],
				  ['Humanities & Social Sciences',      16.7],
				  ['Finance & Accounting',  5.1],
				  ['Marketing & Communication',    12.2],
				  ['Economics ',    7.6],
				  ['Fashion',    10.1]
				]);
		
				var options = {
				  pieHole: 0.6,
				  pieSliceText: 'percentage',
				  slices: {0: {offset: 0.02, color: '#018990'}, 1: {offset: 0.06, color: '#f36f21'}, 2: {offset: 0.0, color: '#00b1cd'}, 3: {offset: 0.05, color: '#264967'}, 4: {color: '#e04c3c'}, 5: {offset: 0.07, color: '#939598'}},
				  pieSliceTextStyle: {color: '#fff', fontSize: '12px', fontName: 'foundrysterling-boldregular'},
				  titleTextStyle: {color: 'black', fontName: 'foundrysterling-lightregular', fontSize: '20px'},
				  tooltip: {textStyle: {color: '#636466'}, showColorCode: true, fontName: 'foundrysterling-lightregular', fontSize: '14px', text: 'percentage'},
				  legend: {textStyle: {color: 'black', fontName: 'foundrysterling-lightregular', fontSize: 16}, position: 'right', maxLines: 10},
				  chartArea: {height: '300px', width:'100%'},
				  fontSize: 14,
				  fontName: 'foundrysterling-lightregular',
				  backgroundColor: 'none'
				};
		
				var chartmfmdonut = new google.visualization.PieChart(document.getElementById('donutchart_mfm'));
				chartmfmdonut.draw(mfmdata, options);
			  }


         <!-- MAP 2014 MFM Student Profiles -->

			 google.setOnLoadCallback(drawMarkersMap2);
		
			  function drawMarkersMap2() {
			  var mydata = google.visualization.arrayToDataTable([
				['Region', '%', '% of students from this area'],
				['North & South America', 'North & South America 9.7%' , 9.7],
				['Europe', 'Europe 29%', 29],
				['Central Asia', 'Central Asia 3.2%', 3.2],
				['East Asia', 'East Asia 42%',  42],
				['South Asia', 'South Asia 5%', 5],
				['South East Asia', 'South East Asia 5%', 5],
				['Africa & Middle East', 'Africa & Middle East 6.5%', 6.5]
			  ]);
		
			  var options = {
				displayMode: 'text',
				magnifyingGlass: {enable: true, zoomFactor: 10.5},
				sizeAxis: {minValue: 2,  maxSize: 18, minSize: 12},
				colorAxis: {colors:['#018990','#018990']},
				datalessRegionColor: '#FFEEBC',
				legend: {textStyle: {color: 'black', fontName: 'foundrysterling-boldregular'}},
				fontSize: 14,
				fontName: 'foundrysterling-boldregular',
				tooltip: {textStyle: {color: '#636466'}, showColorCode: true, text: 'percentage'},
				backgroundColor: 'none'
			  };
		
			  var chartmfm = new google.visualization.GeoChart(document.getElementById('geochart_mfm'));
			  chartmfm.draw(mydata, options);
			};


<!-- DONUT 2014 Msc Student Profiles -->


			  google.setOnLoadCallback(drawChart3);
			  function drawChart3() {
				var data = google.visualization.arrayToDataTable([
				  ['label', 'Percentage'],
				  ['Business Administration & Management',     37],
				  ['Humanities & Social Sciences',      20],
				  ['Finance & Accounting',  17],
				  ['Engineering', 8],
				  ['Marketing & Communication',    8],
				  ['Economics ',    7],
				  ['Other',    3]
				]);
		
				var options = {
				  pieHole: 0.6,
				  pieSliceText: 'percentage',
				  slices: {0: {offset: 0.02, color: '#018990'}, 1: {offset: 0.06, color: '#f36f21'}, 2: {offset: 0.0, color: '#00b1cd'}, 3: {offset: 0.07, color: '#f7941e'}, 4: {offset: 0.05, color: '#264967'}, 5: {color: '#e04c3c'}, 6: {offset: 0.07, color: '#939598'}},
				  pieSliceTextStyle: {color: '#fff', fontSize: '12px', fontName: 'foundrysterling-boldregular'},
				  titleTextStyle: {color: 'black', fontName: 'foundrysterling-lightregular', fontSize: '20px'},
				  tooltip: {textStyle: {color: '#636466'}, showColorCode: true, fontName: 'foundrysterling-lightregular', fontSize: '14px', text: 'percentage'},
				  legend: {textStyle: {color: 'black', fontName: 'foundrysterling-lightregular', fontSize: 16}, position: 'right', maxLines: 10},
				  chartArea: {height: '300px', width:'100%'},
				  fontSize: 14,
				  fontName: 'foundrysterling-lightregular',
				  backgroundColor: 'none'
				};
		
				var chartmscdonut = new google.visualization.PieChart(document.getElementById('donutchart_msc'));
				chartmscdonut.draw(data, options);
			  }
	  
	   <!-- MAP 2014 MSc Student Profiles -->

			 google.setOnLoadCallback(drawMarkersMap3);
		
			  function drawMarkersMap3() {
			  var mscmapdata = google.visualization.arrayToDataTable([
				['Region', '%', '% of students from this area'],
				['North & South America', 'North & South America 5%', 5],
				['Europe', 'Europe 24%', 24],
				['Central Asia', 'Central Asia 2%', 2],
				['East Asia', 'East Asia 41%', 41],
				['South Asia', 'South Asia 16%',  16],
				['South East Asia', 'South East Asia 3%', 3],
				['Africa & Middle East', 'Africa & Middle East 9%', 9]
			  ]);
		
			  var options = {
				displayMode: 'text',
				magnifyingGlass: {enable: true, zoomFactor: 10.5},
				sizeAxis: {minValue: 2,  maxSize: 18, minSize: 12},
				colorAxis: {colors:['#018990','#018990']},
				datalessRegionColor: '#FFEEBC',
				legend: {textStyle: {color: 'black', fontName: 'foundrysterling-boldregular'}},
				fontSize: 14,
				fontName: 'foundrysterling-boldregular',
				tooltip: {textStyle: {color: '#636466'}, showColorCode: true, text: 'percentage'},
				backgroundColor: 'none',
			  };
		
			  var chartmsc = new google.visualization.GeoChart(document.getElementById('geochart_msc'));
			  chartmsc.draw(mscmapdata, options);
			};

<!-- IMBA Class profiles -->

	<!-- DONUT IMBA -->

      google.load("visualization", "1", {packages:["corechart","geochart"]});
			 
			  google.setOnLoadCallback(drawChart4);
			  function drawChart4() {
				var imbadonutdata = google.visualization.arrayToDataTable([
				  ['label', 'Percentage'],
				  ['Economics',     5],
				  ['Business Administration & Management',      15],
				  ['Humanities & Languages',  20],
				  ['Finance', 5],
				  ['Engineering & IT',    35],
				  ['Marketing & Communication ',    20],
				]);
		 
				var options = {
				  pieHole: 0.6,
				  pieSliceText: 'percentage',
				  slices: {0: {offset: 0.02, color: '#de4d3b'}, 1: {offset: 0.06, color: '#00878f'}, 2: {offset: 0.0, color: '#f36f21'}, 3: {offset: 0.1, color: '#00b1cd'}, 4: {offset: 0.05, color: '#f7941e'}, 5: {offset: 0.05, color: '#284967'}},
				  pieSliceTextStyle: {color: '#fff', fontSize: '12px', fontName: 'foundrysterling-boldregular'},
				  titleTextStyle: {color: 'black', fontName: 'foundrysterling-lightregular', fontSize: '20px'},
				  tooltip: {textStyle: {color: '#636466'}, showColorCode: true, fontName: 'foundrysterling-lightregular', fontSize: '14px', text: 'percentage'},
				  legend: {textStyle: {color: 'black', fontName: 'foundrysterling-lightregular', fontSize: 16}, position: 'right', maxLines: 10},
				  chartArea: {height: '300px', width:'100%'},
				  fontSize: 14,
				  fontName: 'foundrysterling-lightregular',
				  backgroundColor: 'none'
				};
		
				var chartimbadonut = new google.visualization.PieChart(document.getElementById('imba_donut'));
				chartimbadonut.draw(imbadonutdata, options);
			  }

    
         <!-- MAP IMBA -->


	google.setOnLoadCallback(drawMarkersMap4);
		
			  function drawMarkersMap4() {
			  var imbamapdata = google.visualization.arrayToDataTable([
				['Country', '%'],
				['United States', 'USA'],
				['France', 'France'],
				['Mexico', 'Mexico'],
				['China', 'China'],
				['India', 'India'],
				['Japan', 'Japan'],
				['Taiwan', 'Taiwan'],
				['Cook Islands', 'Cook Islands']
			  ]);
		
			  var options = {
				displayMode: 'text',
				magnifyingGlass: {enable: true, zoomFactor: 10.5},
				sizeAxis: {minValue: 2,  maxSize: 18, minSize: 12},
				colorAxis: {colors:['#018990','#018990']},
				datalessRegionColor: '#FFEEBC',
				legend: {textStyle: {color: 'black', fontName: 'foundrysterling-boldregular'}},
				fontSize: 14,
				fontName: 'foundrysterling-boldregular',
				tooltip: {textStyle: {color: '#636466'}, showColorCode: true, text: 'percentage'},
				backgroundColor: 'none'
			  };
		
			  var chartimbamap = new google.visualization.GeoChart(document.getElementById('imba_chart_div'));
			  chartimbamap.draw(imbamapdata, options);
			};
			
			
			
		<!-- MIB Alumni Sectors Donut -->
		
		
			
	google.setOnLoadCallback(drawChart5);

      function drawChart5() {

          var mibpiedata = google.visualization.arrayToDataTable([
              ['secteur', 'number of students'],
              ['Administration / Public Service / Army', 3],
              ['Communication Agency / Advertising', 1],
              ['Agriculture / Fisheries', 2],
              ['Automotive / Aerospace / Navy / Railway', 2],
              ['Trade / Distribution / Export', 4],
              ['Energy / Water', 1],
              ['Teaching / Research / Training', 1],
              ['Chemical / Pharmaceutical / Cosmetic', 1],
              ['Financial institution / Bank / Insurance', 4],
              ['Media / Publishing / Culture', 3],
              ['Health / Medical / Social / NGO', 3],
              ['Consulting Firm', 9],
              ['SSII / IT', 10],
              ['Textile / Fashion / Luxury', 1],
              ['Tourism / Leisure / Hospitality / Restaurant', 1],
              ['Transport / Logistics / Public Building Works / Construction', 1],
              ['Other Sectors', 7]
          ]);

          var options = {
               pieHole: 0.0,
				  pieSliceText: 'percentage',
				  slices: {0: {offset: 0.0, color: '#018990'}, 1: {offset: 0.0, color: '#f36f21'}, 2: {offset: 0.0, color: '#00b1cd'}, 3: {offset: 0.0, color: '#f7941e'}, 4: {offset: 0.0, color: '#264967'}, 5: {color: '#e04c3c'}, 6: {offset: 0.0, color: '#939598'}},
				  pieSliceTextStyle: {color: '#fff', fontSize: '12px', fontName: 'foundrysterling-boldregular'},
				  titleTextStyle: {color: 'black', fontName: 'foundrysterling-lightregular', fontSize: '20px'},
				  tooltip: {textStyle: {color: '#636466'}, showColorCode: true, fontName: 'foundrysterling-lightregular', fontSize: '14px', text: 'percentage'},
				  legend: {textStyle: {color: 'black', fontName: 'foundrysterling-lightregular', fontSize: 16}, position: 'right', maxLines: 10},
				  chartArea: {height: '3000', width:'100%'},
				  fontSize: 14,
				  fontName: 'foundrysterling-lightregular',
				  backgroundColor: 'none'
				
          };

          var chartmibpie = new google.visualization.PieChart(document.getElementById('mib-piechart'));

          chartmibpie.draw(mibpiedata, options);
      }


    <!-- MIB Alumni Functions Donut -->
		
		
		      google.setOnLoadCallback(drawChart6);

      function drawChart6() {

          var mibfunctiondata = google.visualization.arrayToDataTable([
              ['Function', 'number of students'],
              ['Purchasing / Procurement / Logistics', 4],
              ['Commercial / International Negotiation', 7],
              ['Communication', 2],
              ['Consulting', 1],
              ['Head Management', 2],
              ['Education / Training', 1],
              ['Management / Finance / Accounting', 14],
              ['IT / Information Systems', 4],
              ['Marketing', 13],
              ['Production / Operation / Maintenance', 2],
              ['Quality / Safety / Sustainable Development', 1],
              ['Public Relations / Corporate', 1],
              ['Human Resources / Legal', 1],
              ['Other Functions', 2],
          ]);

          var options = {
                pieHole: 0.0,
				  pieSliceText: 'percentage',
				  slices: {0: {offset: 0.0, color: '#018990'}, 1: {offset: 0.0, color: '#f36f21'}, 2: {offset: 0.0, color: '#00b1cd'}, 3: {offset: 0.0, color: '#f7941e'}, 4: {offset: 0.0, color: '#264967'}, 5: {color: '#e04c3c'}, 6: {offset: 0.0, color: '#939598'}},
				  pieSliceTextStyle: {color: '#fff', fontSize: '12px', fontName: 'foundrysterling-boldregular'},
				  titleTextStyle: {color: 'black', fontName: 'foundrysterling-lightregular', fontSize: '20px'},
				  tooltip: {textStyle: {color: '#636466'}, showColorCode: true, fontName: 'foundrysterling-lightregular', fontSize: '14px', text: 'percentage'},
				  legend: {textStyle: {color: 'black', fontName: 'foundrysterling-lightregular', fontSize: 16}, position: 'right'},
				  chartArea: {height: '1000', width:'100%'},
				  fontSize: 14,
				  fontName: 'foundrysterling-lightregular',
				  backgroundColor: 'none'
			
             };
          var chart6 = new google.visualization.PieChart(document.getElementById('mib-function-donut'));

          chart6.draw(mibfunctiondata, options);
      }

<!-- MIB Company Size donut -->

    google.setOnLoadCallback(drawChart7);

      function drawChart7() {

          var data7 = google.visualization.arrayToDataTable([
              ['Company size', 'number of students'],
              ['Less than 50', 10],
              ['Between 50 and 250', 11],
              ['Between 250 and 500', 6],
              ['Between 500 and 2000', 5],
              ['Between 2000 and 5000', 3],
              ['Between 5000 and 10000', 1],
              ['More than 10000 people', 16],
          ]);

          var options = {
              pieSliceText: 'percentage',
              legend: {textStyle: {color: 'black', fontName: 'foundrysterling-lightregular', fontSize: 16}, position: 'right'},
              slices: {  
                    0: {offset: 0.0, color: '#f7941e' },
                    1: {offset: 0.0, color: '#f36f21' },
                    2: {offset: 0.0, color: '#018990' },
                    3: {offset: 0.0, color: '#014C50' },
                    4: {offset: 0.0, color: '#939598' },
                    5: {offset: 0.0, color: '#02D2DC' },
                    6: {offset: 0.0, color: '#e04c3c' },
              },
              pieHole: 0.0,
			  chartArea: {height: '800', width:'95%'},
			  pieSliceTextStyle: {color: '#fff', fontSize: '12px', fontName: 'foundrysterling-boldregular'},
			  tooltip: {textStyle: {color: '#636466'}, showColorCode: true, fontName: 'foundrysterling-lightregular', fontSize: '14px', text: 'percentage'},
             };
          var chart7 = new google.visualization.PieChart(document.getElementById('company-size-donut'));

          chart7.draw(data7, options);
      }



 <!-- Chart Débouchés Home PGE -->


 google.setOnLoadCallback(drawChart8);
      function drawChart8() {
        var data8 = google.visualization.arrayToDataTable([
          ['Field', 'Students'],
          ['Marketing',  15.1],
          ['Commerce',  22.7],
          ['Audit', 22.7],
        ]);

      var options = {
        legend: {position: 'labeled', fontName: 'foundrysterling-lightregular', textStyle: {color: 'black', fontSize: 20}},
        pieSliceText: 'none',
        pieStartAngle: 100,
        pieSliceBorderColor: 'black',
        backgroundColor: 'none',
        slices: {  0: {offset: 0.05, color: 'none'},
                   1: {offset: 0.05, color: 'none'},
                   2: {offset: 0.05, color: 'none'},
               }
      };

        var chart8 = new google.visualization.PieChart(document.getElementById('debouches-pge'));
        chart8.draw(data8, options);
      }
      