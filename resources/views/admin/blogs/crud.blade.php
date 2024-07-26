@extends('admin.layouts.master')

@section('titleadmin')
{{ str_replace("-"," ",ucfirst($type.' '.$nameView)) }}
@endsection

@section('cssadmin')
@endsection

@section('contentadmin')

<div class="content-body">
    <x-admin.route :route="$RouteIndex" name="{{ TranslationHelper::translate($IndexView) }}"></x-admin.route>
    <!-- container starts -->
    <div class="container-fluid">
        <!-- row -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <x-admin.crud name="{{ $type??'' }} {{ TranslationHelper::translate('Form '.$nameView) }}">
                </x-admin.crud>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="post" action="{{$action}}" enctype="multipart/form-data">
                            @include('components.admin.csrf')
                            <div class="row">
                                @foreach ($translation as $item)
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first 
                                        name="title {{ ucfirst(TranslationHelper::translate($item->name))  }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.input old="{{ 'title.'.$item->key }}"
                                        name="{{ 'title'.'['.$item->key.']' }}" type="text"
                                        placeholder="title {{ ucfirst($item->name)  }}"
                                        :value="$Blogs->translate('title', $item->key)"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter {{ ucfirst($item->name) }} Admin Name">
                                    </x-admin.form.label-end>
                                </div>
                                @endforeach


                                @foreach ($translation as $item)
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first 
                                        name="sub title {{ ucfirst(TranslationHelper::translate($item->name))  }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.input old="{{ 'sub_title.'.$item->key }}"
                                        name="{{ 'sub_title'.'['.$item->key.']' }}" type="text"
                                        placeholder="Sub title {{ ucfirst($item->name)  }}"
                                        :value="$Blogs->translate('sub_title', $item->key)"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter {{ ucfirst($item->name) }} Admin Name">
                                    </x-admin.form.label-end>
                                </div>
                                @endforeach


                                @foreach ($translation as $item)
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first 
                                        name="Title Two {{ ucfirst(TranslationHelper::translate($item->name))  }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.input old="{{ 'title_tow.'.$item->key }}"
                                        name="{{ 'title_tow'.'['.$item->key.']' }}" type="text"
                                        placeholder="Title Two {{ ucfirst($item->name)  }}"
                                        :value="$Blogs->translate('title_tow', $item->key)"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter {{ ucfirst($item->name) }} Admin Name">
                                    </x-admin.form.label-end>
                                </div>
                                @endforeach
                                @foreach ($translation as $item)
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first 
                                        name="Sub Title Two {{ ucfirst(TranslationHelper::translate($item->name))  }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.input old="{{ 'sub_title_tow.'.$item->key }}"
                                        name="{{ 'sub_title_tow'.'['.$item->key.']' }}" type="text"
                                        placeholder="Sub Title Two {{ ucfirst($item->name)  }}"
                                        :value="$Blogs->translate('sub_title_tow', $item->key)"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter {{ ucfirst($item->name) }} Admin Name">
                                    </x-admin.form.label-end>
                                </div>
                                @endforeach
                                @foreach ($translation as $item)
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first 
                                        name="Title Three {{ ucfirst(TranslationHelper::translate($item->name))  }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.input old="{{ 'title_three.'.$item->key }}"
                                        name="{{ 'title_three'.'['.$item->key.']' }}" type="text"
                                        placeholder="Title Three {{ ucfirst($item->name)  }}"
                                        :value="$Blogs->translate('title_three', $item->key)"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter {{ ucfirst($item->name) }} Admin Name">
                                    </x-admin.form.label-end>
                                </div>
                                @endforeach

                                @foreach ($translation as $item)
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first 
                                        name="Sub Title Three {{ ucfirst(TranslationHelper::translate($item->name))  }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.input old="{{ 'sub_title_three.'.$item->key }}"
                                        name="{{ 'sub_title_three'.'['.$item->key.']' }}" type="text"
                                        placeholder="Sub Title Three {{ ucfirst($item->name)  }}"
                                        :value="$Blogs->translate('sub_title_three', $item->key)"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter {{ ucfirst($item->name) }} Admin Name">
                                    </x-admin.form.label-end>
                                </div>
                                @endforeach
                                @foreach ($translation as $item)
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first 
                                        name="Title Four {{ ucfirst(TranslationHelper::translate($item->name))  }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.input old="{{ 'title_four.'.$item->key }}"
                                        name="{{ 'title_four'.'['.$item->key.']' }}" type="text"
                                        placeholder="Title Four {{ ucfirst($item->name)  }}"
                                        :value="$Blogs->translate('title_four', $item->key)"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter {{ ucfirst($item->name) }} Admin Name">
                                    </x-admin.form.label-end>
                                </div>
                                @endforeach

                                @foreach ($translation as $item)
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first 
                                        name="Sub Title Four {{ ucfirst(TranslationHelper::translate($item->name))  }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.input old="{{ 'sub_title_four.'.$item->key }}"
                                        name="{{ 'sub_title_four'.'['.$item->key.']' }}" type="text"
                                        placeholder="Sub Title Four {{ ucfirst($item->name)  }}"
                                        :value="$Blogs->translate('sub_title_four', $item->key)"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter {{ ucfirst($item->name) }} Admin Name">
                                    </x-admin.form.label-end>
                                </div>
                                @endforeach

                   

                                @foreach ($translation as $item)
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first 
                                        name="Description {{ ucfirst(TranslationHelper::translate($item->name))  }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.text old="{{ 'description.'.$item->key }}"
                                        name="{{ 'description'.'['.$item->key.']' }}" type="text"
                                        placeholder="Description {{ ucfirst($item->name)  }}"
                                        :value="$Blogs->translate('description', $item->key)"></x-admin.form.text>
                                    <x-admin.form.label-end name="Please Enter {{ ucfirst($item->name) }} Description">
                                    </x-admin.form.label-end>
                                </div>
                                @endforeach
                                @foreach ($translation as $item)
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first 
                                        name="Sub Description {{ ucfirst(TranslationHelper::translate($item->name))  }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.text old="{{ 'description.'.$item->key }}"
                                        name="{{ 'sub_description'.'['.$item->key.']' }}" type="text"
                                        placeholder="Sub Description {{ ucfirst($item->name)  }}"
                                        :value="$Blogs->translate('sub_description', $item->key)"></x-admin.form.text>
                                    <x-admin.form.label-end name="Please Enter {{ ucfirst($item->name) }} Description">
                                    </x-admin.form.label-end>
                                </div>
                                @endforeach


                                @foreach ($translation as $item)
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first 
                                        name="Date {{ ucfirst(TranslationHelper::translate($item->name))  }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.input old="{{ 'date.'.$item->key }}"
                                        name="{{ 'date'.'['.$item->key.']' }}" type="text"
                                        placeholder="Date {{ ucfirst($item->name)  }}"
                                        :value="$Blogs->translate('date', $item->key)"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter {{ ucfirst($item->name) }} Admin Name">
                                    </x-admin.form.label-end>
                                </div>
                                @endforeach

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first  name="button"></x-admin.form.label-first>
                                    <x-admin.form.input old="button" :value="$Blogs->button" name="button" type="text"
                                        placeholder="Button"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter button">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first  name="sub_button"></x-admin.form.label-first>
                                    <x-admin.form.input old="sub_button" :value="$Blogs->sub_button" name="sub_button" type="text"
                                        placeholder="Sub Button"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter sub_button">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first  name="Map"></x-admin.form.label-first>
                                    <x-admin.form.input old="map" :value="$Blogs->map" name="map" type="number"
                                        placeholder="map"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter Map">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first  name="Route"></x-admin.form.label-first>
                                    <x-admin.form.input old="route" :value="$Blogs->route" name="route" type="number"
                                        placeholder="route"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter Route">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first  name="sort"></x-admin.form.label-first>
                                    <x-admin.form.input old="sort" :value="$Blogs->sort" name="sort" type="number"
                                        placeholder="sort"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter Sort">
                                    </x-admin.form.label-end>
                                </div>


                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first  name="facebook"></x-admin.form.label-first>
                                    <x-admin.form.input old="facebook" :value="$Blogs->facebook" name="facebook" type="text"
                                        placeholder="facebook"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter facebook">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first  name="twitter"></x-admin.form.label-first>
                                    <x-admin.form.input old="twitter" :value="$Blogs->twitter" name="twitter" type="text"
                                        placeholder="twitter"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter twitter">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first  name="instagram"></x-admin.form.label-first>
                                    <x-admin.form.input old="instagram" :value="$Blogs->instagram" name="instagram" type="text"
                                        placeholder="instagram"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter instagram">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first 
                                        name="{{ TranslationHelper::translate('State') }}"></x-admin.form.label-first>
                                    <x-admin.form.state :foreach="App\Models\StaticConst::STATUS" :model="$Blogs"
                                        name="status"></x-admin.form.state>
                                    <x-admin.form.label-end
                                        name="{{ TranslationHelper::translate('Please Choose State') }}">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first
                                        name="{{ TranslationHelper::translate('Default file input Image') }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.image  name="image" oldname="image" type="file"
                                        placeholder="{{ TranslationHelper::translate('Default file input Image') }}">
                                    </x-admin.form.image>
                                    <x-admin.form.label-end
                                        name="{{ TranslationHelper::translate('Please Upload file Image') }}">
                                    </x-admin.form.label-end>
                                    <img src="" id="mainThmb">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first
                                        name="{{ TranslationHelper::translate('Default file input Image Two') }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.image id="image2"  name="image2" oldname="image2" type="file"
                                        placeholder="{{ TranslationHelper::translate('Default file input Image Two') }}">
                                    </x-admin.form.image>
                                    <x-admin.form.label-end
                                        name="{{ TranslationHelper::translate('Please Upload file Image Two') }}">
                                    </x-admin.form.label-end>
                                    <img src="" id="mainThmb2">
                                </div>

                            </div>
                            <x-admin.form.submit :route="$RouteIndex"></x-admin.form.submit>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('jsadmin')
@endsection