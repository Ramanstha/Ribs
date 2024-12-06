$(function () {
    $('.video').change(function () {
        var videostatus = $(this).prop('checked') == true ? 1 : 0;
        var video_id = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/video-status',
            data: { 'videostatus': videostatus, 'video_id': video_id },
            success: function (data) {
                window.location.reload();
            }
        });
    })
})

$(function () {
    $('.notice').change(function () {
        var noticestatus = $(this).prop('checked') == true ? 1 : 0;
        var notice_id = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/notice-status',
            data: { 'noticestatus': noticestatus, 'notice_id': notice_id },
            success: function (data) {
                window.location.reload();
            }
        });
    })
})

$(function () {
    $('.governance').change(function () {
        var governancestatus = $(this).prop('checked') == true ? 1 : 0;
        var governance_id = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/governance-status',
            data: { 'governancestatus': governancestatus, 'governance_id': governance_id },
            success: function (data) {
                window.location.reload();
            }
        });
    })
})

$(function () {
    $('.iqac').change(function () {
        var iqacstatus = $(this).prop('checked') == true ? 1 : 0;
        var iqac_id = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/iqac-status',
            data: { 'iqacstatus': iqacstatus, 'iqac_id': iqac_id },
            success: function (data) {
                window.location.reload();
            }
        });
    })
})

$(function () {
    $('.rmc').change(function () {
        var rmcstatus = $(this).prop('checked') == true ? 1 : 0;
        var rmc_id = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/rmc-status',
            data: { 'rmcstatus': rmcstatus, 'rmc_id': rmc_id },
            success: function (data) {
                window.location.reload();
            }
        });
    })
})

$(function () {
    $('.affiliation').change(function () {
        var affiliationstatus = $(this).prop('checked') == true ? 1 : 0;
        var affiliation_id = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/affiliations-status',
            data: { 'affiliationstatus': affiliationstatus, 'affiliation_id': affiliation_id },
            success: function (data) {
                window.location.reload();
            }
        });
    })
})

$(function () {
    $('.category').change(function () {
        var categorystatus = $(this).prop('checked') == true ? 1 : 0;
        var category_id = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/category-status',
            data: { 'categorystatus': categorystatus, 'category_id': category_id },
            success: function (data) {
                window.location.reload();
            }
        });
    })
})

$(function () {
    $('.publication').change(function () {
        var publicationstatus = $(this).prop('checked') == true ? 1 : 0;
        var publication_id = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/publication-status',
            data: { 'publicationstatus': publicationstatus, 'publication_id': publication_id },
            success: function (data) {
                window.location.reload();
            }
        });
    })
})

$(function () {
    $('.resource').change(function () {
        var resourcestatus = $(this).prop('checked') == true ? 1 : 0;
        var resource_id = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/resource-status',
            data: { 'resourcestatus': resourcestatus, 'resource_id': resource_id },
            success: function (data) {
                window.location.reload();
            }
        });
    })
})

$(function () {
    $('.programcategory').change(function () {
        var categorystatus = $(this).prop('checked') == true ? 1 : 0;
        var category_id = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/programcategory-status',
            data: { 'categorystatus': categorystatus, 'category_id': category_id },
            success: function (data) {
                window.location.reload();
            }
        });
    })
})

$(function () {
    $('.programsubcategory').change(function () {
        var categorystatus = $(this).prop('checked') == true ? 1 : 0;
        var category_id = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/programsubcategory-status',
            data: { 'categorystatus': categorystatus, 'category_id': category_id },
            success: function (data) {
                window.location.reload();
            }
        });
    })
})

$(function () {
    $('.aboutcategory').change(function () {
        var categorystatus = $(this).prop('checked') == true ? 1 : 0;
        var category_id = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/aboutcategory-status',
            data: { 'categorystatus': categorystatus, 'category_id': category_id },
            success: function (data) {
                window.location.reload();
            }
        });
    })
})

$(function () {
    $('.testimonial').change(function () {
        var categorystatus = $(this).prop('checked') == true ? 1 : 0;
        var category_id = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/testimonial-status',
            data: { 'categorystatus': categorystatus, 'category_id': category_id },
            success: function (data) {
                window.location.reload();
            }
        });
    })
})