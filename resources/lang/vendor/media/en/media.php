<?php

return [
    'filter' => 'Filter',
    'everything' => 'Everything',
    'image' => 'Image',
    'video' => 'Video',
    'document' => 'Document',
    'view_in' => 'View in',
    'all_media' => 'All media',
    'trash' => 'Trash',
    'recent' => 'Recent',
    'favorites' => 'Favorites',
    'upload' => 'Upload',
    'add_from' => 'Add from',
    'youtube' => 'Youtube',
    'vimeo' => 'Vimeo',
    'vine' => 'Vine',
    'daily_motion' => 'Dailymotion',
    'create_folder' => 'Create folder',
    'refresh' => 'Refresh',
    'empty_trash' => 'Empty trash',
    'search_file_and_folder' => 'Search file and folder',
    'sort' => 'Sort',
    'file_name_asc' => 'File name - ASC',
    'file_name_desc' => 'File name - DESC',
    'created_date_asc' => 'Created date - ASC',
    'created_date_desc' => 'Created_date - DESC',
    'uploaded_date_asc' => 'Uploaed date - ASC',
    'uploaded_date_desc' => 'Uploaded date - DESC',
    'size_asc' => 'Size - ASC',
    'size_desc' => 'Size - DESC',
    'actions' => 'Actions',
    'nothing_is_selected' => 'Nothing is selected',
    'insert' => 'Insert',
    'coming_soon' => 'Coming soon',
    'add_from_youtube' => 'Add from youtube',
    'playlist' => 'Playlist',
    'add_url' => 'Add URL',
    'folder_name' => 'Folder name',
    'create' => 'Create',
    'rename' => 'Rename',
    'close' => 'Close',
    'save_changes' => 'Save changes',
    'move_to_trash' => 'Move items to trash',
    'confirm_trash' => 'Are you sure you wanna move these items to trash?',
    'confirm' => 'Confirm',
    'confirm_delete' => 'Delete item(s)',
    'confirm_delete_description' => 'Your request cannot rollback. Are you sure you wanna delete these items?',
    'empty_trash_title' => 'Empty trash',
    'empty_trash_description' => 'Your request cannot rollback.Are you sure you wanna remove all items in trash?',
    'up_level' => 'Up one level',
    'upload_progress' => 'Upload progress',

    'name_reserved' => 'The name is reserved',
    'folder_created' => 'Folder is created successfully!',
    'gallery' => 'Media gallery',

    'trash_error' => 'Error when delete selected item(s)',
    'trash_success' => 'Moved selected item(s) to trash successfully!',
    'restore_error' => 'Error when restore selected item(s)',
    'restore_success' => 'Restore selected item(s) successfully!',
    'copy_success' => 'Copied selected item(s) successfully!',
    'delete_success' => 'Deleted selected item(s) successfully!',
    'favorite_success' => 'Favorite selected item(s) successfully!',
    'remove_favorite_success' => 'Remove selected item(s) from favorites successfully!',
    'is_reserved_name' => ':name is reserved name!',
    'rename_error' => 'Error when rename item(s)',
    'rename_success' => 'Rename selected item(s) successfully!',
    'emty_trash_success' => 'Empty trash successfully!',
    'invalid_action' => 'Invalid action!',
    'file_not_exists' => 'File is not exists!',
    'download_file_error' => 'Error when downloading files!',
    'missing_zip_archive_extension' => 'Please enable ZipArchive extension to download file!',
    'can_not_download_file' => 'Can not download this file!',
    'invalid_request' => 'Invalid request!',
    'add_success' => 'Add item successfully!',
    'file_too_big' => 'File too big. Max file upload is :size bytes',
    'can_not_detect_file_type' => 'File type is not allowed or can not detect file type!',
    'upload_failed' => 'The file is NOT uploaded completely. The server allows max upload file size is :size . Please check your file size OR try to upload again in case of having network errors',

    'menu_name' => 'Media',
    'add' => 'Add media',

    'javascript' => [
        'name' => 'Name',
        'url' => 'Url',
        'full_url' => 'Full url',
        'size' => 'Size',
        'mime_type' => 'Type',
        'created_at' => 'Uploaded at',
        'updated_at' => 'Modified at',
        'nothing_selected' => 'Nothing is selected',
        'visit_link' => 'Open link',

        'add_from' => [
            'youtube' => [
                'original_msg' => 'Please input Youtube URL',
                'no_api_key_msg' => 'Please specify the Youtube API key',
                'invalid_url_msg' => 'Your link is not belongs to Youtube',
                'error_msg' => 'Some error occurred...',
            ],
        ],

        'no_item' => [
            'all_media' => [
                'icon' => 'fa fa-cloud-upload',
                'title' => 'Drop files and folders here',
                'message' => 'Or use the upload button above',
            ],
            'trash' => [
                'icon' => 'fa fa-trash',
                'title' => 'There is nothing in your trash currently',
                'message' => 'Delete files to move them to trash automatically. Delete files from trash to remove them permanently',
            ],
            'favorites' => [
                'icon' => 'fa fa-star',
                'title' => 'You have not added anything to your favorites yet',
                'message' => 'Add files to favorites to easily find them later',
            ],
            'recent' => [
                'icon' => 'fa fa-clock-o',
                'title' => 'You did not opened anything yet',
                'message' => 'All recent files that you opened will be appeared here',
            ],
            'default' => [
                'icon' => 'fa fa-refresh',
                'title' => 'No items',
                'message' => 'This directory has no item',
            ],
        ],

        'clipboard' => [
            'success' => 'These file links has been copied to clipboard',
        ],

        'message' => [
            'error_header' => 'Error',
            'success_header' => 'Success',
        ],

        'download' => [
            'error' => 'No files selected or cannot download these files',
        ],

        'actions_list' => [
            'basic' => [
                'preview' => 'Preview',
            ],
            'file' => [
                'copy_link' => 'Copy link',
                'rename' => 'Rename',
                'make_copy' => 'Make a copy',
            ],
            'user' => [
                'favorite' => 'Add to favorite',
                'remove_favorite' => 'Remove favorite',
            ],
            'other' => [
                'download' => 'Download',
                'trash' => 'Move to trash',
                'delete' => 'Delete permanently',
                'restore' => 'Restore',
            ],
        ],
    ],
];
