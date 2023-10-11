
//variables 
const get=(param)=>document.getElementById(`${param}`);

const url = "https://pomber.github.io/covid19/timeseries.json";
const cnf =get("cnf");
const rec=get("rec");
const deth=get("deth");
const dataBody= get("dataBody")

let data =null;
let totalConfirmed = 0;
let totalDeaths = 0;
let totalRecovered = 0;
const actual =[];

//Api Call

function getData()
{
    fetch(url)
    .then((response)=>response.json()) // fetch an convert responce in json fomat
    .then((data)=>{
        for (const country in data) {
            const countryData = data[country];

            let c=0;
            let r=0;
            let d=0;

            countryData.forEach(item => {
                c+=item.confirmed;
                r+=item.recovered;
                d+=item.deaths;
                totalConfirmed += item.confirmed;
                totalDeaths += item.deaths;
                totalRecovered += item.recovered;

            });
            const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${country}</td>
                            
                            <td>${c}</td>
                            <td>${r}</td>
                            <td>${d}</td>
                        `;
        dataBody.appendChild(row);




        }
        cnf.innerText=`${totalConfirmed}`;
        rec.innerText=`${ totalRecovered}`;
        deth.innerText=`${  totalDeaths}`;

    })
    .catch((error)=>{
        throw error;
    });

};


getData();
