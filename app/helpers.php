<?php

if (! function_exists('url_path_array')) {
    function url_path_array() {
        return explode("/", request()->path());
    }
}

if (! function_exists('paginate_collection')) {
    function paginate_collection($items, $perPage = 15, $page = null, $options = [])
	{
		$page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

		$items = $items instanceof Collection ? $items : Collection::make($items);

		return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
	}
}