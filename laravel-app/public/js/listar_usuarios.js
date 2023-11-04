$(function ($) {
    var table = $("#table").DataTable({
        ajax: base_url + "users/show",
        scrollCollapse: true,
        responsive: true,
        paging: true,
        processing: true,
        serverSide: true,
        deferRender: true,
        searching: true,
        order: [0, "ASC"],
        columns: [
            { width: "5%", data: "id", name: "id" },
            { width: "35%", data: "nome", name: "nome" },
            { width: "15%", data: "cpf", name: "cpf" },
            { width: "15%", data: "telefone", name: "telefone" },
            { width: "20%", data: "email", name: "email" },
            { width: "15%", data: "acao", name: "acao" },
            { data: "criado", name: "criado", visible: false },
        ],
        language: { url: "/plugins/datatables/traducao.json" },
    });
});
