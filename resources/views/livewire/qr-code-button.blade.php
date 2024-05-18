<button onclick="Livewire.dispatch('openModal', { component: 'qr-code', arguments: { url: '{{ url('/question/' . $code) }}'  }})">{{$code}}</button>
