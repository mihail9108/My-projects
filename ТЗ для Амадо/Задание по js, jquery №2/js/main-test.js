console.clear();
let d = document, container = d.querySelector('#result'), arr = [], box = [], list = [];

// схораненный json ответ 'http://test1.web-gu.ru/'
let obj = [
    {id: '3', parent_id: '100', name: 'Диваны'},
    {id: '4', parent_id: '100', name: 'Столы'},
    {id: '5', parent_id: '2', name: 'Стул Сакура'},
    {id: '6', parent_id: '2', name: 'Стул Бистро'},
    {id: '7', parent_id: '2', name: 'Стул Лайт'},
    {id: '8', parent_id: '2', name: 'Стул Блюз'},
    {id: '9', parent_id: '4', name: 'Стол Византия'},
    {id: '10', parent_id: '4', name: 'Стол Прайм'},
    {id: '11', parent_id: '4', name: 'Стол Айсберг'},
    {id: '12', parent_id: '3', name: 'Диван София'},
    {id: '13', parent_id: '3', name: 'Диван Адам'},
    {id: '14', parent_id: '-1', name: 'Электроприборы'},
    {id: '15', parent_id: '14', name: 'Светильники'},
    {id: '2', parent_id: '100', name: 'Стулья'},
    {id: '16', parent_id: '14', name: 'Вентиляторы'},
    {id: '17', parent_id: '15', name: 'Светильник Луна'},
    {id: '18', parent_id: '15', name: 'Светильник Янтарь'},
    {id: '100', parent_id: '-1', name: 'Мебель'},
];
for(let i in obj) arr[obj[i].id] = {'parent_id':obj[i].parent_id, 'name':obj[i].name};


createTreeDom(arr);

let xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        let data = JSON.parse(this.responseText);
        JSON.stringify(data);
        console.log(data);
    }
};

function createTreeDom(data) {
    // super
    for(let x in data){
        if(typeof data[data[x].parent_id] == 'undefined'){
            let ul = d.createElement('ul'), li = d.createElement('li');
            li.innerHTML = data[x].name;
            container.appendChild(ul);
            ul.appendChild(li);
            box[x] = ul;
        }else{
            list[x] = {'parent_id':data[x].parent_id, 'name':data[x].name};
        }
    }
    data = [];
    arr = [];
    // category
    for(let x in list){
        if(typeof box[list[x].parent_id] != 'undefined'){
            let ul = d.createElement('ul'),  li = d.createElement('ul');
            li.innerHTML = list[x].name;
            box[list[x].parent_id].appendChild(li);
            li.appendChild(ul);
            data[x] = ul;
        }else{
            arr[x] = {'parent_id':list[x].parent_id, 'name':list[x].name};
        }
    }
    // items
    for(let x in arr){
        let li = d.createElement('li');
        li.innerHTML = list[x].name;
        data[arr[x].parent_id].appendChild(li);
    }
}