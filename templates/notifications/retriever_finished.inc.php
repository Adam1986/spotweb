New retrieved spots

There <?php
echo ($newSpotCount == 1) ? "is " . $newSpotCount . " spot" : "are " . $newSpotCount . " spots";
if ($newCommentCount > 0) {
	echo ($newReportCount > 0) ? ", " : " and ";
	echo $newCommentCount;
	echo ($newCommentCount == 1) ? " comment" : " comments";
} # if
if ($newReportCount > 0) {
	echo " and " . $newReportCount;
	echo ($newCommentCount == 1) ? " reports" : " reports";
} # if
?> retrieving.
