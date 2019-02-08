@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left"><i class="fa fa-tag"></i> Items</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('items.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('items.table')
            </div>
        </div>
        <div class="text-center"></div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#check_all').on('click', function(e) {
                if($(this).is(':checked',true))
                {
                    $(".checkbox").prop('checked', true);
                } else {
                    $(".checkbox").prop('checked',false);
                }
            });

            $('.checkbox').on('click',function(){
                if($('.checkbox:checked').length == $('.checkbox').length){
                    $('#check_all').prop('checked',true);
                }else{
                    $('#check_all').prop('checked',false);
                }
            });

            $('.delete-all').on('click', function(e) {
                var idsArr = [];
                $(".checkbox:checked").each(function() {
                    idsArr.push($(this).attr('data-id'));
                });

                if(idsArr.length <=0)
                {
                    alert("Please select at least one record to delete.");
                }  else {
                    if(confirm("Are you sure, you want to delete the selected categories?")){
                        var strIds = idsArr.join(",");
                        $.ajax({
                            url: "{{ route('item.multiple-delete') }}",
                            type: 'DELETE',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: 'ids='+strIds,
                            success: function (data) {
                                if (data['status']==true) {
                                    $(".checkbox:checked").each(function() {
                                        $(this).parents("tr").remove();
                                    });
                                    alert(data['message']);
                                } else {
                                    alert('Whoops Something went wrong!!');
                                }
                            },

                            error: function (data) {
                                alert(data.responseText);
                            }
                        });
                    }
                }
            });

            $('[data-toggle=confirmation]').confirmation({
                rootSelector: '[data-toggle=confirmation]',
                onConfirm: function (event, element) {
                    element.closest('form').submit();
                }
            });
        });
    </script>
@endsection
