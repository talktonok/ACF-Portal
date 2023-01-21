
<div class="top-nav-search search-form-outer" >
<form method='get' action='{{route("binshopsblog.search", app()->getLocale())}}' class='text-center'>
        <input type='text' name='s' placeholder='Search...' class='form-control' value='{{\Request::get("s")}}'>
        <button type='submit' value='Search' class='btn btn-primary'><i class="fas fa-search"></i></button>
    </form>
</div>

