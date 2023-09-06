const url = 'https://opendata.cwb.gov.tw/api/v1/rest/datastore/F-C0032-001?Authorization=CWB-F2D5F57B-D574-471F-8911-3EA1207559C0'
const Cities = [
    ['基隆市', '新北市', '臺北市', '桃園市', '新竹市', '新竹縣', '苗栗縣', '臺中市', '南投縣', '彰化縣', '雲林縣', '嘉義市', '嘉義縣', '臺南市', '高雄市', '屏東縣', '宜蘭縣', '花蓮縣', '臺東縣', '澎湖縣', '金門縣', '連江縣'],
    ['基隆市', '新北市', '臺北市', '桃園市', '新竹市', '新竹縣', '苗栗縣'],
    ['臺中市', '南投縣', '彰化縣', '雲林縣', '嘉義市', '嘉義縣'],
    ['臺南市', '高雄市', '屏東縣'],
    ['宜蘭縣', '花蓮縣', '臺東縣'],
    ['澎湖縣', '金門縣', '連江縣'],
]
let orgData = [];

fetch(url).then(response => response.json()).then(result => organizationData(result));

function organizationData(data) {
    const locationAll = data.records.location;
    locationAll.forEach((location) => {
        const locationName = location.locationName;
        const loactionWE = location.weatherElement[0].time[0];

        const wxCondition = loactionWE.parameter.parameterName;
        const startTime = loactionWE.startTime;
        const endTime = loactionWE.endTime;
        
        const locationMi = location.weatherElement[2].time[0].parameter;
        const loactionMinT = locationMi.parameterName;
        const locationMt = location.weatherElement[4].time[0].parameter;
        const loactionMaxT = locationMt.parameterName;

        orgData[locationName] = {
            'wxCondition': wxCondition,
            'startTime': startTime,
            'endTime': endTime,
            'minT': loactionMinT,
            'maxT': loactionMaxT,
        };
    });
}

const cardRegion = document.querySelector('.card-region');
function findWeather(part) {
    cardRegion.innerHTML = '';
    Cities[part].forEach((city, index) => {
        const cityData = orgData[city];
        cardRegion.innerHTML += `
        <div class='card'>
        <img src='./img/${Cities[part][index]}.jpg'>
        <div><h4>${Cities[part][index]}<h4><div>
        <hr>
        <div>${cityData.wxCondition}</div>
        <hr>
        <div>${cityData.startTime}</div>
        <br>
        <div>至</div>
        <br>
        <div>${cityData.endTime}</div>
        <hr>
        <div>${cityData.minT}度C</div>
        <br>
        <div>${cityData.maxT}度C</div>`;
    });
}
document.querySelector('#all-btn').addEventListener('click', () => findWeather(0));
document.querySelector('#north-btn').addEventListener('click', () => findWeather(1));
document.querySelector('#midth-btn').addEventListener('click', () => findWeather(2));
document.querySelector('#south-btn').addEventListener('click', () => findWeather(3));
document.querySelector('#east-btn').addEventListener('click', () => findWeather(4));
document.querySelector('#outside-btn').addEventListener('click', () => findWeather(5));