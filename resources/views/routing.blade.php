{{ $id }}
{{ $data }}

<form action="/api/post" method="post" >
  {{-- 통행증이라 생각하면 됩니다. --}}
  @csrf
  <input type="text" name="name">
  <input type="submit" value="테스트해보기">
</form>
