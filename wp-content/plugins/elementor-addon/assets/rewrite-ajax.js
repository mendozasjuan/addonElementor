
fetch('https://jsonplaceholder.typicode.com/users').then(response => {

  return response.json();

}).then(jsonResponse => {
  let tableData = document.getElementById('table-data');
  let htmlData = '';
  jsonResponse.forEach((value,index) => {
     htmlData +=
         `<tr>
            <td>${value.id}</td>
            <td>${value.name}</td>
            <td>${value.phone}</td>
            <td>${value.email}</td>
            <td>${value.username}</td>
            <td>${value.website}</td>
        </tr>`
  })
  tableData.querySelector('tbody').innerHTML = htmlData;

});
