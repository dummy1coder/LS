<div class="chatbot-popup">
    <!-- Toggle Button -->
    <button type="button" class="btn btn-primary chatbot-toggle-btn" onclick="openChat()">
        💬
    </button>

    <!-- Chat Box -->
    <div class="chatbox-container mt-2 d-none" id="chatCollapse">
        <div class="card shadow">
        <div class="card-header bg-primary text-white py-2 px-3 d-flex justify-content-between align-items-center">
                <strong>LearnsoftBot</strong>
                <button type="button" class="btn-close btn-close-white" aria-label="Close" onclick="closeChat()"></button>
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
<script>
    function openChat() {
        document.getElementById('chatCollapse').classList.remove('d-none');
    }

    function closeChat() {
        document.getElementById('chatCollapse').classList.add('d-none');
    }
</script>
