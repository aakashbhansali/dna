<script>
$(function() {
    var setID = $('#index_set');
    var i7ID = $('#i7_index_id');
    var i5ID = $('#i5_index_id');

    function i7Init() {
        i5ID.hide();
        i7ID.empty();
        @foreach ($iAll->find(1)->I7Indexes as $x)
            i7ID.append("<option value={{ $x['id'] }}>{{ $x['index'] }} {{ $x['sequence'] }}</option>");
        @endforeach
    }

    @if (! old())
        i7Init();
    @endif

    setID.change(function() {
        i7ID.empty();

        @for ($i=1; $i<=$iSet->count(); $i++)
            if (setID.prop('selectedIndex') == {{ $i-1 }}) {
                @foreach ($iAll->find($i)->I7Indexes as $x)
                    i7ID.append("<option value={{ $x['id'] }}>{{ $x['index'] }} {{ $x['sequence'] }}</option>");
                @endforeach

                @if (count($iAll->find($i)->i5Indexes))
                    i5ID.empty();
                    i5ID.show();
                    @foreach ($iAll->find($i)->I5Indexes as $y)
                        i5ID.append("<option value={{ $y['id'] }}>{{ $y['index'] }} {{ $y['sequence'] }}</option>");
                    @endforeach
                @else
                    i5ID.hide();
                @endif
            }
        @endfor
    })
})
</script>
