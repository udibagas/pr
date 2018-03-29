<script type="text/javascript">
$(document).on("click", ".open-email-form", function () {
    var doc_no = $(this).data('id');
    $("#modal-email #doc_no").val(doc_no);
    // As pointed out in comments,
    // it is superfluous to have to manually call the modal.
    // $('#addBookDialog').modal('show');
});
</script>
