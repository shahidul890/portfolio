<?php 

/**
 * Get Meta Information
 * 
 * @param string $key
 * @return string
 */
function MetaInfo(string $key): string
{
    $basicInfo = \App\Models\BasicInfo::all();
    return $basicInfo->meta->$key ?? '';
}

/**
 * Get Basic Information
 * 
 * @param string $key
 * @return string
 */
function BasicInfo(string $key): string
{
    $basicInfo = \App\Models\BasicInfo::all();
    return $basicInfo->$key ?? '';
}

/**
 * Get Social Media Link
 * 
 * @param string $key
 * @return string
 */
function SocialMedia(string $key): string
{
    $basicInfo = \App\Models\BasicInfo::all();
    return $basicInfo->social_media->$key ?? '';
}