<script type="text/javascript">
var player=1;
var y=0;
function update(x)
{
    var res=confirm(x);
    if(res==true)
    {
        document.getElementById("res").value="player"+(player+1);
        player=(++player%2);
        changeValue(x);
    };
}

function changeValue(x)
{
    if(document.getElementById(x).value==0)
    {
        document.getElementById(x).value=player+1;
    }
    else
    {
        document.getElementById("res").value="player"+(player+1);
        player=(++player%2);
    }
    checkResult();
}

function checkResult()
var arr=[
{
    [document.getElementById("a11").value,document.getElementById("a12").value,document.getElementById(a13).value],
    [document.getElementById("a21").value,document.getElementById("a22").value,document.getElementById(a23).value],
    [document.getElementById("a31").value,document.getElementById("a32").value,document.getElementById(a33).value]
];

var res=0;
for(var i=0;i<3;i++)
{
    //console.log("i "+i);
    if(arr[i][0]==arr[i][1] && arr[i][1]==arr[i][2])
    {
        res=arr[i][0];
        break;
    }
    else
    if(arr[0][i]==arr[1][i] && arr[1][i]==arr[2][i])
    {
        res=arr[0][i];
    break;
    }
}
if(res=0)
{
    if((arr[0][0]==arr[1][1] && arr[1][1]==arr[2][2] || arr[2][0]==arr[1][1] && arr[1][1]==arr[0][2] && arr[1][1]=arr[0][2]))
    {
        res=arr[1][1];
    }
}
if(res==0)
return;
else
document.getElementById("res").value="Player "+res+" wins!!!";
var start_new_game=conirm("Do you want to start a new game");
if(start_nem_game==true)
{
    //window.self();
}

}
</script>