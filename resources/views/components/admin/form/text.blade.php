{{-- start editor  --}}
        <textarea id="{{ $id??'' }}" class="form-control" placeholder="{{ $placeholder??'' }}"  {{ $required ?? ''}} name="{{ ($name)??'' }}" />{{isset($value) ? $value : old($old??'')}}</textarea>
{{-- end editor  --}}