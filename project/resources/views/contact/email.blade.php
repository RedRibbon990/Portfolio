<style>
    .red {
        color: red;
    }
    .blue {
        color: blue;
    }
</style>
<div>Email di test inviata da <span class="red">{{$content['name'] ?? 'Test'}}</span> con email <span class="red">{{$content['email'] ?? 'Test'}}</span></div>

Ha scritto: <br>
<p class="blue">{{$content['message'] ?? 'Test'}}</p>