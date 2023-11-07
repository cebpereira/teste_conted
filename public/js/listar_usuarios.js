$(function ($) {
    var table = $("#table").DataTable({
        ajax: "show_users",
        scrollCollapse: true,
        responsive: true,
        paging: true,
        processing: true,
        serverSide: true,
        deferRender: true,
        searching: true,
        order: [0, "ASC"],
        columns: [
            { width: "3%", data: "id", name: "id" },
            { width: "25%", data: "nome", name: "nome" },
            { width: "15%", data: "cpf", name: "cpf" },
            { width: "15%", data: "telefone", name: "telefone" },
            { width: "20%", data: "email", name: "email" },
            { width: "23%", data: "acao", name: "acao" },
            { data: "created_at", name: "created_at", visible: false },
        ],
        language: { url: "//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-BR.json" },
    });
});
