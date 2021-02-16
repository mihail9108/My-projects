let xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        let data = JSON.parse(this.responseText);
        JSON.stringify(data);
        console.log(data);
    }
};

xmlhttp.open("GET", 'http://test1.web-gu.ru/', true);
xmlhttp.send();

// схораненный json ответ 'http://test1.web-gu.ru/'
const obj = [
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

const createTreeObj = (data, idField, parentField, rootParent) => {
    const tree = { [rootParent]: { children: [] } };

    data.forEach(n => tree[n[idField]] = { ...n, children: [] });
    data.forEach(n => tree[n[parentField]].children.push(tree[n[idField]]));

    return tree[rootParent].children;
};

const createTreeHTML = (data) => `
  <ul>${data.map(n => `
    <li>
      ${n.name}
      ${n.children ? createTreeHTML(n.children) : ''}
    </li>`).join('')}
  </ul>`;

const treeObj = createTreeObj(obj, 'id', 'parent_id', -1);
document.querySelector('#result').innerHTML = createTreeHTML(treeObj);


