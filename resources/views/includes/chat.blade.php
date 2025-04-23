<div class="chatbot-popup">
    <!-- Toggle Button -->
    <form action="#chatCollapse" method="GET">
        <button type="submit" class="btn btn-primary chatbot-toggle-btn">
            💬
        </button>
    </form>

    <!-- Chat Box -->
    <div class="collapse mt-2 show" id="chatCollapse">
        <div class="card shadow">
            <div class="card-header bg-primary text-white py-2 px-3">
                <strong>LearnsoftBot</strong>
            </div>
            <div class="card-body" style="max-height: 250px; overflow-y: auto;">
                @if(session('history'))
                    @foreach(session('history') as $entry)
                        <div class="mb-2">
                            <div class="text-end"><span class="badge bg-primary">You</span></div>
                            <p class="text-end">{{ $entry['question'] }}</p>
                            <div class="text-start"><span class="badge bg-secondary">Bot</span></div>
                            <p class="text-start">{{ $entry['answer'] }}</p>
                        </div>
                        <hr>
                    @endforeach
                @else
                    <p class="text-muted">Ask me anything 👋</p>
                @endif
            </div>
            <div class="card-footer">
                <form method="POST" action="{{ route('chat.send') }}">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" name="message" placeholder="Type a message" required>
                        <button class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>