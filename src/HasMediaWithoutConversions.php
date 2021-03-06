<?php

namespace Spatie\MediaLibrary;

interface HasMediaWithoutConversions
{
    /**
     * Set the polymorphic relation.
     *
     * @return mixed
     */
    public function media();

    /**
     * Add media to media collection from a given file.
     *
     * @param string $file
     * @param string $collectionName
     * @param bool   $preserveOriginal
     * @param bool   $addAsTemporary
     *
     * @return Media
     */
    public function addMedia($file, $collectionName = 'default', $preserveOriginal = false, $addAsTemporary = false);

    /**
     * Get media collection by its collectionName.
     *
     * @param string $collectionName
     * @param array  $filters
     *
     * @return \Spatie\MediaLibrary\Media
     */
    public function getMedia($collectionName = 'default', $filters = []);

    /**
     * Remove all media in the given collection.
     *
     * @param string $collectionName
     */
    public function clearMediaCollection($collectionName = 'default');
}
