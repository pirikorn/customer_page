<form method="POST" action="{{ route('post.delete') }}" class="inline-block align-middle">
	@csrf
	<input type="hidden" name="id" value="{{ $post['_id'] }}" />
	<button type="submit" class="border-0 bg-transparent text-red-400">
		@component('components.delete')
		@endcomponent
	</button>
</form>
