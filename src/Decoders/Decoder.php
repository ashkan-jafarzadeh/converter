<?php

namespace ashkanjafarzadeh\Converter\Decoders;


interface Decoder
{
    /**
     * Decode the data to an entity instance
     *
     * @param string $data
     *
     * @return array
     */
    public function handle($data): array;
}
