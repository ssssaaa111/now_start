<option value="">Choose...</option>

<option value="elenentary"
        @if($info['lang_level'] == 'elenentary')
        selected
        @endif
>Beginner (A1)
</option>

<option value="pre"
        @if($info['lang_level'] == 'pre')
        selected
        @endif
>Pre-Intermediate (A2)
</option>

<option value="inter"
        @if($info['lang_level'] == 'inter')
        selected
        @endif

>Intermediate (B1)
</option>

<option value="upper"
        @if($info['lang_level'] == 'upper')
        selected
        @endif
>Upper-Intermediate (B2)
</option>

<option value="advanced"
        @if($info['lang_level'] == 'advanced')
        selected
        @endif

>Advanced (C1)
</option>

<option value="profi"
        @if($info['lang_level'] == 'profi')
        selected
        @endif
>Proficient (C2)
</option>

<option value="native"
        @if($info['lang_level'] == 'native')
        selected
        @endif
>Native
</option>

