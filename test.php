<?php

# Use only one of the following requires:
require('vendor/autoload.php');   # For Composer
#require('PHPCap/autoloader.php'); # For Git

use IU\PHPCap\RedCapProject;

$apiUrl = 'https://redcap.hes-so.ch/api/';  # replace this URL with your institution's
# REDCap API URL.

$apiToken = '607F2068FA415C0FA16FEC713AABAE66';    # replace with your actual API token

$project = new RedCapProject($apiUrl, $apiToken);
$projectInfo = $project->exportMetadata();


print_r($projectInfo);