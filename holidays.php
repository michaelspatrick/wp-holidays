<?php
	function dsi_multi_assoc_array_sort_cmp($a, $b) {
		if ($a['date'] == $b['date']) {
			return 0;
		}
		return ($a['date'] < $b['date']) ? -1 : 1;
	}

	function get_holidays_and_important_events($curYear) {
		$holidays['Test']['name'] = "Test";
		$holidays['Test']['date'] = date('Y-m-d', strtotime("January 20 $curYear"));
		$holidays['Test']['type'] = "static";

		$holidays['New_Years_Day']['name'] = "New Years Day";
		$holidays['New_Years_Day']['date'] = date('Y-m-d', strtotime("January 1 $curYear"));
		$holidays['New_Years_Day']['type'] = "static";
  
		$holidays['Law_Enforcement_Appreciation_Day']['name'] = "Law Enforcement Appreciation";  
		$holidays['Law_Enforcement_Appreciation_Day']['date'] = date('Y-m-d', strtotime("January 9 $curYear"));
		$holidays['Law_Enforcement_Appreciation_Day']['type'] = "static";

		$holidays['Isshinryu_Birthday']['name'] = "Isshinryu Birthday";  
		$holidays['Isshinryu_Birthday']['date'] = date('Y-m-d', strtotime("January 15 $curYear"));
		$holidays['Isshinryu_Birthday']['type'] = "static";

		$holidays['MLK_Day']['name'] = "Martin Luther King Jr. Day"; 
		$holidays['MLK_Day']['date'] = date('Y-m-d', strtotime("january $curYear third monday"));
		$holidays['MLK_Day']['type'] = "dynamic";
 
		$holidays['Groundhog_Day']['name'] = "Groundhog Day"; 
		$holidays['Groundhog_Day']['date'] = date('Y-m-d', strtotime("February 2 $curYear"));
		$holidays['Groundhog_Day']['type'] = "static";
 
		$holidays['Valentines_Day']['name'] = "Valentine's Day"; 
		$holidays['Valentines_Day']['date'] = date('Y-m-d', strtotime("February 14 $curYear"));
		$holidays['Valentines_Day']['type'] = "static";
 
		$holidays['Allen_Wheeler_Death']['name'] = "Allen Wheeler's Death"; 
		$holidays['Allen_Wheeler_Death']['date'] = date('Y-m-d', strtotime("February 14 $curYear"));
		$holidays['Allen_Wheeler_Death']['type'] = "static";
 
		$holidays['Presidents_Day']['name'] = "Presidents Day"; 
		$holidays['Presidents_Day']['date'] = date('Y-m-d', strtotime("third monday of February $curYear"));
		$holidays['Presidents_Day']['type'] = "dynamic";
 
		$holidays['Rick_Moneymaker_Birthday']['name'] = "Rick Moneymaker's Birthday";
		$holidays['Rick_Moneymaker_Birthday']['date'] = date('Y-m-d', strtotime("March 1 $curYear"));
		$holidays['Rick_Moneymaker_Birthday']['type'] = "static";

		$holidays['International_Womens_Day']['name'] = "International Women's Day"; 
		$holidays['International_Womens_Day']['date'] = date('Y-m-d', strtotime("March 8 $curYear")); 
		$holidays['International_Womens_Day']['type'] = "static";

		$holidays['Chuck_Norris_Birthday']['name'] = "Chuck Norris' Birthday";
		$holidays['Chuck_Norris_Birthday']['date'] = date('Y-m-d', strtotime("March 10 $curYear"));
		$holidays['Chuck_Norris_Birthday']['type'] = "static";

		$holidays['Saint_Patricks_Day']['name'] = "Saint Patrick's Day";
		$holidays['Saint_Patricks_Day']['date'] = date('Y-m-d', strtotime("March 17 $curYear")); 
		$holidays['Saint_Patricks_Day']['type'] = "static";

		$holidays['Mike_Patrick_Birthday']['name'] = "Mike Patrick's Birthday";
		$holidays['Mike_Patrick_Birthday']['date'] = date('Y-m-d', strtotime("March 19 $curYear"));
		$holidays['Mike_Patrick_Birthday']['type'] = "static";
		
		$holidays['First_Day_of_Spring']['name'] = "First Day of Spring";
		$holidays['First_Day_of_Spring']['date'] = date('Y-m-d', strtotime("March 20 $curYear"));
		$holidays['First_Day_of_Spring']['type'] = "static";

		$holidays['Spring_Equinox']['name'] = "Spring Equinox";
		$holidays['Spring_Equinox']['date'] = date('Y-m-d', strtotime("March 20 $curYear"));
		$holidays['Spring_Equinox']['type'] = "static";

		$holidays['April_Fools_Day']['name'] = "April Fool's Day";
		$holidays['April_Fools_Day']['date'] = date('Y-m-d', strtotime("April 1 $curYear")); 
		$holidays['April_Fools_Day']['type'] = "static";

		$holidays['Good_Friday']['name'] = "Good Friday";
		$holidays['Good_Friday']['date'] = date('Y-m-d', strtotime('-2 days', strtotime(date('Y-m-d', easter_date($curYear)))));
		$holidays['Good_Friday']['type'] = "dynamic";

		$holidays['Easter_Day']['name'] = "Easter Day";
		$holidays['Easter_Day']['date'] = date('Y-m-d', easter_date($curYear));
		$holidays['Easter_Day']['type'] = "dynamic";

		$holidays['Pi_Day']['name'] = "Pi Day";
		$holidays['Pi_Day']['date'] = date('Y-m-d', strtotime("March 14 $curYear")); 
		$holidays['Pi_Day']['type'] = "static";

		$holidays['Earth_Day']['name'] = "Earth Day";
		$holidays['Earth_Day']['date'] = date('Y-m-d', strtotime("April 22 $curYear")); 
		$holidays['Earth_Day']['type'] = "static";

		$holidays['Star_Wars_Day']['name'] = "Star Wars Day";
		$holidays['Star_Wars_Day']['date'] = date('Y-m-d', strtotime("may 4 $curYear"));
		$holidays['Star_Wars_Day']['type'] = "static";

		$holidays['Cinco_De_Mayo_Day']['name'] = "Cinco De Mayo";
		$holidays['Cinco_De_Mayo_Day']['date'] = date('Y-m-d', strtotime("may 5 $curYear"));
		$holidays['Cinco_De_Mayo_Day']['type'] = "static";

		$holidays['Peace_Officers_Day']['name'] = "Peace Officer's Day";
		$holidays['Peace_Officers_Day']['date'] = date('Y-m-d', strtotime("May 15 $curYear")); 
		$holidays['Peace_Officers_Day']['type'] = "static";

		$holidays['Mothers_Day']['name'] = "Mother's Day";
		$holidays['Mothers_Day']['date'] = date('Y-m-d', strtotime("second Sunday of May $curYear")); 
		$holidays['Mothers_Day']['type'] = "dynamic";

		$holidays['Memorial_Day']['name'] = "Memorial Day";
		$holidays['Memorial_Day']['date'] = date('Y-m-d', strtotime("last monday of may $curYear"));; 
		$holidays['Memorial_Day']['type'] = "dynamic";

		$holidays['Tatsuo_Shimabuku_Death']['name'] = "Tatsuo Shimabuku's Death";
		$holidays['Tatsuo_Shimabuku_Death']['date'] = date('Y-m-d', strtotime("May 30 $curYear")); 
		$holidays['Tatsuo_Shimabuku_Death']['type'] = "static";

		$holidays['D_Day']['name'] = "D Day";
		$holidays['D_Day']['date'] = date('Y-m-d', strtotime("June 6 $curYear"));
		$holidays['D_Day']['type'] = "static";

		$holidays['Flag_Day']['name'] = "Flag Day";
		$holidays['Flag_Day']['date'] = date('Y-m-d', strtotime("June 14 $curYear"));
		$holidays['Flag_Day']['type'] = "static";

		$holidays['First_Day_of_Summer']['name'] = "First Day of Summer";
		$holidays['First_Day_of_Summer']['date'] = date('Y-m-d', strtotime("June 20 $curYear"));
		$holidays['First_Day_of_Summer']['type'] = "static";

		$holidays['Summer_Solstice']['name'] = "Summer Solstice";
		$holidays['Summer_Solstice']['date'] = date('Y-m-d', strtotime("June 20 $curYear"));
		$holidays['Summer_Solstice']['type'] = "static";

		$holidays['Fathers_Day']['name'] = "Father's Day";
		$holidays['Fathers_Day']['date'] = date('Y-m-d', strtotime("third Sunday of June $curYear"));
		$holidays['Fathers_Day']['type'] = "dynamic";

		$holidays['Canada_Day']['name'] = "Canada Day";
		$holidays['Canada_Day']['date'] = date('Y-m-d', strtotime("july 1 $curYear"));  
		$holidays['Canada_Day']['type'] = "dynamic";

		$holidays['Independence_Day']['name'] = "Independence Day";
		$holidays['Independence_Day']['date'] = date('Y-m-d', strtotime("july 4 $curYear"));  
		$holidays['Independence_Day']['type'] = "static";

		$holidays['Book_Lovers_Day']['name'] = "Book Lovers Day";
		$holidays['Book_Lovers_Day']['date'] = date('Y-m-d', strtotime("August 9 $curYear"));  
		$holidays['Book_Lovers_Day']['type'] = "static";

		$holidays['Labor_Day']['name'] = "Labor Day";
		$holidays['Labor_Day']['date'] = date('Y-m-d', strtotime("september $curYear first monday"));  
		$holidays['Labor_Day']['type'] = "dynamic";

		$holidays['First_Day_of_Autumn']['name'] = "First Day of Autumn";
		$holidays['First_Day_of_Autumn']['date'] = date('Y-m-d', strtotime("September 22 $curYear"));
		$holidays['First_Day_of_Autumn']['type'] = "static";

		$holidays['First_Responders_Day']['name'] = "First Responders Day";
		$holidays['First_Responders_Day']['date'] = date('Y-m-d', strtotime("September 11 $curYear"));
		$holidays['First_Responders_Day']['type'] = "static";

		$holidays['Patriot_Day']['name'] = "Patriot Day";
		$holidays['Patriot_Day']['date'] = date('Y-m-d', strtotime("September 11 $curYear"));
		$holidays['Patriot_Day']['type'] = "static";

		$holidays['Tatsuo_Shimabuku_Birthday']['name'] = "Tatsuo Shimabuku's Birthday";
		$holidays['Tatsuo_Shimabuku_Birthday']['date'] = date('Y-m-d', strtotime("September 19 $curYear"));
		$holidays['Tatsuo_Shimabuku_Birthday']['type'] = "static";

		$holidays['Fall_Equinox']['name'] = "Fall Equinox";
		$holidays['Fall_Equinox']['date'] = date('Y-m-d', strtotime("September 22 $curYear"));
		$holidays['Fall_Equinox']['type'] = "static";

		$holidays['Columbus_Day']['name'] = "Columbus Day";
		$holidays['Columbus_Day']['date'] = date('Y-m-d', strtotime("october $curYear second monday")); 
		$holidays['Columbus_Day']['type'] = "dynamic";

		$holidays['Allen_Wheeler_Birthday']['name'] = "Allen Wheeler's Birthday";
		$holidays['Allen_Wheeler_Birthday']['date'] = date('Y-m-d', strtotime("october 11 $curYear"));
		$holidays['Allen_Wheeler_Birthday']['type'] = "static";

		$holidays['World_Karate_Day']['name'] = "World Karate Day";
		$holidays['World_Karate_Day']['date'] = date('Y-m-d', strtotime("october 25 $curYear"));
		$holidays['World_Karate_Day']['type'] = "static";

		$holidays['Halloween']['name'] = "Halloween";
		$holidays['Halloween']['date'] = date('Y-m-d', strtotime("october 31 $curYear"));
		$holidays['Halloween']['type'] = "static";

		$holidays['All_Saints_Day']['name'] = "All Saints Day";
		$holidays['All_Saints_Day']['date'] = date('Y-m-d', strtotime("november 1 $curYear")); 
		$holidays['All_Saints_Day']['type'] = "static";

		$holidays['Election_Day']['name'] = "Election Day";
		$holidays['Election_Day']['date'] = date('Y-m-d', strtotime('+1 day', strtotime("first Monday of November $curYear")));
		$holidays['Election_Day']['type'] = "dynamic";

		$holidays['Marine_Corps_Birthday']['name'] = "Marine Corps Birthday";
		$holidays['Marine_Corps_Birthday']['date'] = date('Y-m-d', strtotime("november 10 $curYear")); 
		$holidays['Marine_Corps_Birthday']['type'] = "static";

		$holidays['Veterans_Day']['name'] = "Veterans Day";
		$holidays['Veterans_Day']['date'] = date('Y-m-d', strtotime("november 11 $curYear")); 
		$holidays['Veterans_Day']['type'] = "static";

		$holidays['Thanksgiving']['name'] = "Thanksgiving";
		$holidays['Thanksgiving']['date'] = date('Y-m-d', strtotime("november $curYear fourth thursday")); 
		$holidays['Thanksgiving']['type'] = "static";

		$holidays['Black_Friday']['name'] = "Black Friday";
		$holidays['Black_Friday']['date'] = date('Y-m-d', strtotime('+1 day', strtotime($holidays['Thanksgiving']['date'])));
		$holidays['Black_Friday']['type'] = "dynamic";

		$holidays['Cyber_Monday']['name'] = "Cyber Monday";
		$holidays['Cyber_Monday']['date'] = date('Y-m-d', strtotime('+4 days', strtotime($holidays['Thanksgiving']['date'])));
		$holidays['Cyber_Monday']['type'] = "dynamic";

		$holidays['Pearl_Harbor_Day']['name'] = "Pearl Harbor Day";
		$holidays['Pearl_Harbor_Day']['date'] = date('Y-m-d', strtotime("December 7 $curYear"));
		$holidays['Pearl_Harbor_Day']['type'] = "static";

		$holidays['Free_Shipping_Day']['name'] = "Free Shipping Day";
		$holidays['Free_Shipping_Day']['date'] = date('Y-m-d', strtotime("december 15 $curYear")); 
		$holidays['Free_Shipping_Day']['type'] = "static";

		$holidays['First_Day_of_Winter']['name'] = "First Day of Winter";
		$holidays['First_Day_of_Winter']['date'] = date('Y-m-d', strtotime("December 21 $curYear"));
		$holidays['First_Day_of_Winter']['type'] = "static";

		$holidays['Winter_Solstice']['name'] = "Winter Solstice";
		$holidays['Winter_Solstice']['date'] = date('Y-m-d', strtotime("December 21 $curYear"));
		$holidays['Winter_Solstice']['type'] = "static";

		$holidays['Christmas_Eve']['name'] = "Christmas Eve";
		$holidays['Christmas_Eve']['date'] = date('Y-m-d', strtotime("december 24 $curYear")); 
		$holidays['Christmas_Eve']['type'] = "static";

		$holidays['Christmas_Day']['name'] = "Christmas Day";
		$holidays['Christmas_Day']['date'] = date('Y-m-d', strtotime("december 25 $curYear")); 
		$holidays['Christmas_Day']['type'] = "static";

		$holidays['Boxing_Day']['name'] = "Boxing Day";
		$holidays['Boxing_Day']['date'] = date('Y-m-d', strtotime("december 26 $curYear")); 
		$holidays['Boxing_Day']['type'] = "static";

		$holidays['New_Years_Eve']['name'] = "New Years Eve";
		$holidays['New_Years_Eve']['date'] = date('Y-m-d', strtotime("last day of december $curYear")); 
		$holidays['New_Years_Eve']['type'] = "static";

		//asort($holidaysstatic);
		uasort($holidays, 'dsi_multi_assoc_array_sort_cmp');
		return $holidays;
	}
?>
