<?php

namespace ashkanjafarzadeh\Converter\Decoders;


class JsonDecoder implements Decoder
{
    /**
     * @inheritDoc
     */
    public function handle($data): array
    {
        return json_decode($data, true);
    }
}
