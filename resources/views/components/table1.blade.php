<!-- table -->
<article class="table-responsive">
    <table class="table table-light table-striped table-hover">
        <thead>
            <tr class="text-center">
                {{ $thead }}
            </tr>
        </thead>
        <tbody>
            @for ($i=1;$i<=5;$i++) 
            <tr class="text-center">
                {{ $tbody }}
            </tr>
            @endfor
        </tbody>
    </table>
</article>