
   <img src="/images/cover.png" alt="Cover Image"/>
   
   @foreach ($situations as $situation)
        <h1>{{$situation['name']}}</h1>
        @endforeach
<style>
        img {
            max-width: 50%;
            height: auto;
          }
</style>