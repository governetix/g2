<pre {{ $attributes->merge(['class' => $class, 'style' => $style]) }}><code @if($language) class="language-{{ $language }}" @endif>{{ $slot }}</code></pre>
