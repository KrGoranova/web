const player = document.querySelector('.player')
//videoplayer = document.getElementsByTagName('video');

/*
function parseTime(t) {
    var segments = t.split(':');
    var ms = parseInt(segments[2].split('.')[1]);
    var h = parseInt(segments[0]);
    var m = parseInt(segments[1]);
    var s = parseInt(segments[2]);
    return h * 60 * 60 * 1000 + m * 60 * 1000 + s * 1000 + ms;
}


function convertToMs(arr) {
    for (var i = 0; i < arr.length; i++) {
        arr[i].start = parseTime(arr[i].start);
        arr[i].end = parseTime(arr[i].end);    
    }
    return arr;
}

var Data = [
    { "end": "00:00:0.225","start": "00:00:0.125","text": "There" },
    {"end": "00:00:0.485","start": "00:00:0.225","text": "were" },
    {"end": "00:00:1.085","start": "00:00:0.485","text": "10 in" },
    {"end": "00:00:1.325","start": "00:00:1.085","text": "his" },
    {"end": "00:00:1.685","start": "00:00:1.325","text": "bed" },
    {"end": "00:00:1.965","start": "00:00:1.685","text": "and the" },
    {"end": "00:00:2.245","start": "00:00:1.965","text": "little" },
    {"end": "00:00:2.565","start": "00:00:2.245","text": "one" },
    {"end": "00:00:2.985","start": "00:00:2.565","text": "said" },
    {"end": "00:00:3.485","start": "00:00:2.985","text": "Roll" },
    {"end": "00:00:3.965","start": "00:00:3.485","text": "over!" },
    {"end": "00:00:4.805","start": "00:00:3.965","text": "Roll" },
    {"end": "00:00:5.405","start": "00:00:4.805","text": "over!" }
  ];

Data = convertToMs(Data);

player.addEventListener('timeupdate', () => {
    Data.forEach((item) => {
        if (player.currentTime*1000 >= item.start)  document.getElementById("txt").innerHTML= item.text ;
    })
})
*/
