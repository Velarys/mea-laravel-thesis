var symptoms;


retrieveData(slug, 'pain', 1);
retrieveData(slug, 'tiredness', 1);
retrieveData(slug, 'nausea', 1);
retrieveData(slug, 'depression', 1);
retrieveData(slug, 'anxiety', 1);
retrieveData(slug, 'drowsiness', 1);
retrieveData(slug, 'appetite', 1);
retrieveData(slug, 'wellbeing', 1);
retrieveData(slug, 'sob', 1);

retrieveData(slug, 'other_name', 3);

setTimeout(6000,retrieveData(slug, 'completed_by', 2)); 

function retrieveData(slug, tableType, control) {
    // Slug for concatenated patient name, tableType for table, control for display qualifications
    $.ajax({
        
        type: "POST",
        url: "../symptomsData",
        data: {user_id: slug, table: tableType},
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        success: function(postData) {
            //console.log('yey ' + postData);
            //console.log(postData);
            if (control == 1)            
                constructChart(postData, tableType);
            else if (control == 2){
                constructCompletedByChart(postData);
            }
            else {
                constructOthersChart(postData, tableType);
            }
        },        
        error: function(a, b, err) {   
            console.log(a);
            console.log(b);
            console.log(err);
        } 
    });
}

function constructChart(chartData, chartID) {
    var label;
    
    if (chartID == 'sob') {
        label = 'SHORTNESS OF BREATH';  
    } else {
         label = chartID.toUpperCase();
    }
    
     $('#symptoms-data').append($('<br><br><br><strong>' + label + '<strong><div id="' + chartID 
                                  + '" class="row" style="width	: 100%; height : 300px;">'));
    
    var chart = AmCharts.makeChart(chartID, {
            "dataProvider": JSON.parse(chartData),
            "type": "serial",
            "theme": "light",
            "marginRight": 80,
            "autoMarginOffset": 20,
            "dataDateFormat": "YYYY-MM-DD",
            "valueAxes": [{
                "id": "v1",
                "axisAlpha": 0,
                "position": "left",
                "minimum" : 0,
                "maximum" : 10
            }],
            "balloon": {
                "borderThickness": 1,
                "shadowAlpha": 0
            },
            "graphs": [{
                "id": "g1",
                "bullet": "round",
                "bulletBorderAlpha": 1,
                "bulletColor": "#FFFFFF",
                "bulletSize": 5,
                "hideBulletsCount": 50,
                "lineThickness": 2,
                "title": "red line",
                "useLineColorForBulletBorder": true,
                "valueField": "value",
                "balloonText": "<div style='margin:5px; font-size:19px;'><span style='font-size:13px;'>[[category]]</span><br>[[value]]</div>"
            }],
            "chartScrollbar": {
                "graph": "g1",
                "oppositeAxis":false,
                "offset":20,
                "scrollbarHeight": 20,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount":true,
                "color ":"#AAAAAA"
            }, // */
            "chartCursor": {
                "pan": true,
                "valueLineEnabled": true,
                "valueLineBalloonEnabled": true,
                "cursorAlpha":0,
                "valueLineAlpha":0.2
            },
            "categoryField": "date",
            "categoryAxis": {
                "parseDates": true,
                "dashLength": 1,
                "minorGridEnabled": true
            },
            "export": {
                "enabled": true
            }
        });  // */
   
    chart.addListener("rendered", zoomChart);

    zoomChart();


    function zoomChart() {
        chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
    } 
    
}

function constructOthersChart(chartData, chartID) {
    
    var label;
    
    if (chartID == 'sob') {
        
        label = 'SHORTNESS OF BREATH';
        
    }else {
         label = chartID.toUpperCase();
    }
    
     $('#symptoms-data').append($('<br><br><br><strong> OTHER SYMPTOMS <strong><div id="' + chartID +'" class="row" style="width	: 100%; height : 300px;">'));
    
    var chart = AmCharts.makeChart(chartID, {
            "dataProvider": JSON.parse(chartData),
            "type": "serial",
            "theme": "light",
            "marginRight": 80,
            "autoMarginOffset": 20,
            "dataDateFormat": "YYYY-MM-DD",
            "valueAxes": [{
                "id": "v1",
                "axisAlpha": 0,
                "position": "left",
                "minimum" : 0,
                "maximum" : 10
            }],
            "balloon": {
                "borderThickness": 1,
                "shadowAlpha": 0
            },
            "graphs": [{
                "id": "g1",
                "bullet": "round",
                "bulletBorderAlpha": 1,
                "bulletColor": "#FFFFFF",
                "bulletSize": 5,
                "hideBulletsCount": 50,
                "lineThickness": 2,
                "title": "red line",
                "useLineColorForBulletBorder": true,
                "valueField": "value",
                "balloonText": "<div style='margin:5px; font-size:19px;'><span style='font-size:13px;'>[[customLabel]]</span><br>[[value]]</div>"
            }],
            "chartScrollbar": {
                "graph": "g1",
                "oppositeAxis":false,
                "offset":20,
                "scrollbarHeight": 20,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount":true,
                "color ":"#AAAAAA"
            }, // */
            "chartCursor": {
                "pan": true,
                "valueLineEnabled": true,
                "valueLineBalloonEnabled": true,
                "cursorAlpha":0,
                "valueLineAlpha":0.2
            },
            "categoryField": "date",
            "categoryAxis": {
                "parseDates": true,
                "dashLength": 1,
                "minorGridEnabled": true
            },
            "export": {
                "enabled": true
            }
        });
   
    chart.addListener("rendered", zoomChart);

    zoomChart();

    function zoomChart() {
        chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
    }
}

function constructCompletedByChart(chartData) {
    
    $('#symptoms-data').append($('<br><br><br><strong> COMPLETED BY <strong><div id="completed_by" class="row" style="width	: 100%; height : 300px;">'));
    
    var chart = AmCharts.makeChart('completed_by', {
            "dataProvider": JSON.parse(chartData),
            "type": "serial",
            "theme": "light",
            "marginRight": 80,
            "autoMarginOffset": 20,
            "dataDateFormat": "YYYY-MM-DD",
            "valueAxes": [{
                "id": "v1",
                "labelFunction": formatValue,
                "axisAlpha": 0,
                "position": "left",
                "minimum" : -1,
                "maximum" : 2
            }],
            "balloon": {
                "borderThickness": 1,
                "shadowAlpha": 0
            },
            "graphs": [{
                "id": "g1",
                "bullet": "round",
                "bulletBorderAlpha": 1,
                "bulletColor": "#FFFFFF",
                "bulletSize": 5,
                "hideBulletsCount": 50,
                "lineThickness": 2,
                "title": "red line",
                "useLineColorForBulletBorder": true,
                "valueField": "value",
                "balloonText": "<div style='margin:5px; font-size:19px;'><span style='font-size:13px;'>[[category]]</span><br>[[value]]</div>"
            }],
            "chartScrollbar": {
                "graph": "g1",
                "oppositeAxis":false,
                "offset":20,
                "scrollbarHeight": 20,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount":true,
                "color ":"#AAAAAA"
            }, // */
            "chartCursor": {
                "pan": true,
                "valueLineEnabled": true,
                "valueLineBalloonEnabled": true,
                "cursorAlpha":0,
                "valueLineAlpha":0.2
            },
            "categoryField": "date",
            "categoryAxis": {
                "parseDates": true,
                "dashLength": 1,
                "minorGridEnabled": true
            },
            "export": {
                "enabled": true
            }
        });
    
    chart.addListener("rendered", zoomChart);

    zoomChart();

    function zoomChart() {
        chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
    }
    
    function formatValue(value, formattedValue, valueAxis){
        if (value == 0) {
            return "Patient";
        } else if(value == 1){
            return "Caregiver";
        }  else if (value == 2){
            return "Caregier-Assisted";
        } else {
            return '';
        }
    }
}