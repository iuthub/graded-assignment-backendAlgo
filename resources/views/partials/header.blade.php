<form action="{{route('postAdd')}}" method="POST">
    @csrf
    <div id="myDIV" class="header">
      <h2>My To Do List</h2>
      <input type="text" name="name" class="@error('email') is-invalid @enderror" placeholder="Title...">
      
      <button type="submit" class="addBtn">Add</button>
    </div>
</form> 


                                