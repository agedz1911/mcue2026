<div>
    <div class="table-responsive">
        <table class="table table-hover table-light">
            <tbody>
                @foreach ($importantDates as $date)
                <tr>
                    <td><i class="uil uil-angle-right align-middle h4 mb-0"></i> {{$date->title}}: {{
                            $date->date_end
                            ? \Carbon\Carbon::parse($date->date)->format('d') . ' - ' .
                            \Carbon\Carbon::parse($date->date_end)->format('d F, Y')
                            : \Carbon\Carbon::parse($date->date)->format('d F, Y')
                            }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>