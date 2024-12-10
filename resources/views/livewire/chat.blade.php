<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <div class="chat chat-start">
                            <div class="chat-image avatar">
                                <div class="w-10 rounded-full">
                                    <img alt="Tailwind CSS chat bubble component"
                                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                                </div>
                            </div>
                            <div class="chat-header">
                                Obi-Wan Kenobi
                                <time class="text-xs opacity-50">12:45</time>
                            </div>
                            <div class="chat-bubble">You were the Chosen One!</div>
                            <div class="chat-footer opacity-50">Delivered</div>
                        </div>
                        <div class="chat chat-end">
                            <div class="chat-image avatar">
                                <div class="w-10 rounded-full">
                                    <img alt="Tailwind CSS chat bubble component"
                                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                                </div>
                            </div>
                            <div class="chat-header">
                                Anakin
                                <time class="text-xs opacity-50">12:46</time>
                            </div>
                            <div class="chat-bubble">I hate you!</div>
                            <div class="chat-footer opacity-50">Seen at 12:46</div>
                        </div>
                    </div>

                    <div class="form-control">
                        <form action="" wire:submit.prevent="sendMessage">
                            <textarea class="textarea textarea-bordered w-full" id="message" wire:model="message"
                                placeholder="Send your message..."></textarea>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
