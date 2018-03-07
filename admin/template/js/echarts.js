var data;
var item;
$.ajax({
    url:"../getdata.php",
    async:false,
    dataType:"json",
    success:function(data){
        window.data = data["user"];
        item = data["data"];
    }
});
var op = {
    title: {
        text: '用户发布统计表',
        subtextStyle:{
            color:'red',
            fontStyle:'oblique',
        },
        x:100,
        y:'',
        backgroundColor:'#ccc',
    },
    tooltip: {
        trigger:'axis',
        axisPointer:{
            type:'shadow',
        },
        formatter:'{a}:{c}'
    },
    legend: {
        data:['数量'],
        x:'right',
        orient:'vertical',
        align:'right'
    },

    xAxis: {
        data: data
    },
    yAxis: {},
    series: [{
        name: '数量',
        type: 'bar',
        barWidth:"40%",
        data: item,
        label:{
            normal:{
                show:true,
                position:'top',
                formatter:'{a}:{c}'
            }
        }
    }]
};