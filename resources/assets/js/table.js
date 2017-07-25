import config from "./config";
 export default function(){
     
     $('#books-table').DataTable({
        processing: true,
        serverSide: true,
        scrollY: '800px',
        scrollX: false,
        scrollCollapse: true,
        lengthMenu: [10, 25, 50, "All"],
        ajax: config.url+'/api/book/list',
        columnDefs:[
            {
                targets: [ 0 ],
                visible: false,
                searchable: false
            },{
                targets: [ 5 ],
                searchable: false
            },{
                targets: [ 6 ],
                searchable: false
            }
        ],
        columns: [
            { data: 'id', name: 'books.id' },
            { data: 'name', name: 'books.name' },
            { data: 'autor', name: 'books.autor' },
            { data: 'category.name', name: 'category.name' },
            { data: 'published_date', name: 'books.published_date' },
            { data: 'borrowed' },
            { data: 'actions' }
        ],
        order: [[0, 'asc']]
    });
 }