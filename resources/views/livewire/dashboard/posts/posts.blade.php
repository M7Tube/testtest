<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">{{ __('Posts') }}</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Main Title') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Title') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Body') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Picture') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('KeyWords') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('User') }}</th>
                                    <th class=""> <a
                                            href="{{ route('CreatePost', app()->getLocale()) }}"
                                            class="text-white btn-success btn font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            {{ __('Create') }}
                                        </a></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($P as $data)
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $data->main_title }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $data->title }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ substr($data->body, 0, 25) . '...' }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $data->picture)) !!}" alt="picture" width="150px"></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $data->keywords }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $data->user->name ?? '' }}
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('EditPost', [app()->getLocale(), 'id' => $data->post_id]) }}"
                                                class="btn-outline-success font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                {{ __('Edit') }}
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>{{ __('Empty') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{ $P->links() }}
        </div>
    </div>
</div>
