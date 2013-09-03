<?php

require_once("IDProvider.conf.php.new");

$DEBUG=false;
$ERRORS=0;

foreach ($IDProviders as $key => $arrayValue) {

    if ($DEBUG) print ("KEY: ".$key."\n");

    if (array_key_exists ('Type', $arrayValue)) {
	if ($DEBUG) print ("Type found\n");

	if ($arrayValue['Type'] == "category") {
	    if (array_key_exists('Name', $arrayValue)) {
		if ($DEBUG) print ("Category has a name\n");
	    }
	    else {
		print ("ERROR: Category has no name ".$key."\n");
		$ERRORS++;
	    }
	}
	else {
	    if (array_key_exists('Name', $arrayValue)) {
                if ($DEBUG) print ("IDP has a name\n");
	    }
            else {
                print ("ERROR: IDP has no name ".$key."\n");
		$ERRORS++;
	    }

	    if (array_key_exists('SSO', $arrayValue)) {
                if ($DEBUG) print ("IDP has an SSO end point defined\n");
	    }
            else {
                print ("ERROR: IDP has no SSO end point defined ".$key."\n");
		$ERRORS++;
	    }

	    if (array_key_exists ($arrayValue['Type'], $IDProviders)) {
		if ($IDProviders[$arrayValue['Type']]['Type'] == "category") {
		    if ($DEBUG) print ("IDP Category exists\n");
		}
		else {
		    print ("ERROR: Invalid Category found for IDP ".$key." - ".$IDProviders[$arrayValue['Type']]['Type']."\n"); 
		    $ERRORS++;
		}
	    }
	    else {
		print ("ERROR: No Category found for IDP ".$key." looking for ".$arrayValue['Type']."\n");
		$ERRORS++;
	    }
	}
    }
    else {
	print ("ERROR: No type found for ".$key."\n");
	$ERRORS++;
    }
}

if ($ERRORS > 0)
    print ("\n".$ERRORS." Errors found\n");

exit($ERRORS);

?>
