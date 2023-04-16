<div id="sidebar">
    <div class="navigation p-4">
        <p class="d-flex font-weight-bold d-flex pb-2" style="font-size:20px;">
            <span>Navigation</span>
        </p>
        <ul class="d-flex flex-column w-100 px-1">
            <li>
                <p><span class="material-symbols-outlined">home</span></p>
                <span ><a href="{{ route('adminHome') }}">Home</a>  </span>
                <p><span class="material-icons">chevron_right</span></p>
            </li>
            <li>
                <p><span class="material-icons" style="font-size:20px;">content_paste</span></p>
                <span ><a href="{{ route('produits') }}"> Products </a></span>
                <p><span class="material-icons md-inactive">chevron_right</span></p>
            </li>
            <li>
                <p><span class="material-icons" style="font-size:20px;">event_note</span></p>
                <span ><a href="{{ route('historiques') }}"> Historique cell</a></span>
                <p><span class="material-icons md-inactive">chevron_right</span></p>
            </li>
            <li>
                <p><span class="material-icons" style="font-size:20px;">question_answer</span></p>
                <span ><a href="{{ route('chats') }}"> Chats </a></span>
                <p><span class="material-icons md-inactive">chevron_right</span></p>
            </li>
        </ul>
    </div>
</div>
