<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PropKorner</title>
    </head>
    <body>
        <form>
            <h3 class="addlisting-title">Add new property listing</h3>
            <br>
            <label class="radio-inline">
                <input type="radio" name="rent-sale" class="for-rent" value="rent" checked>For Rent
            </label>
            <label class="radio-inline">
                <input type="radio" name="rent-sale" class="for-sale" value="sell" >For Sell
            </label>
            <br>
            <label><span class="prop_mandatory">* </span>Property Type</label>
            <select>
                <option disabled selected value> -- Select an option -- </option>
                <option value="apt_flat">Apartments/Flats</option>
                <option value="independant_house">Independent Floor/House</option>
                <option value="villa_duplex">Villa/Duplex</option>
                <option value="penthouse">Penthouse</option>
            </select>
            <br>
            <label><span class="prop_mandatory">* </span>BHK Type</label><br>
            <select name="bhk_type">
                <option disabled selected value> -- Select an option -- </option>
                <option value="1rk">1RK</option>
                <option value="1bhk">1BHK</option>
                <option value="2bhk">2BHK</option>
                <option value="3bhk">3BHK</option>
                <option value="4+bhk">4+ BHK</option>
            </select><br>
            <label hidden>Built Up Area<input type="text" name="built_area" id="user_id"></label><br>
            <label>Property Status</label><br>
            <select name="ready_to_move">
                <option disabled selected value> -- select an option -- </option>
                <option value="1">Ready to move</option>
                <option value="0">Under Construction</option>
            </select><br>
            <label><span class="prop_mandatory">* </span>Built Up Area<input type="text" name="built_up_area"></label><br>
            <label><span class="prop_mandatory">* </span>No. of Bedroom<input type="text" name="bedrooms"></label><br>
            <label><span class="prop_mandatory">* </span>monthly rent <input name="rent" type="number"></label><br>
            <label><span class="prop_mandatory">* </span>security deposit<input name="deposit" type="number"></label><br>
            <label for="store_room">Negotiable<input  name="negotiable" type="checkbox" id="store_room"></label><br>
            <label for="store_room">Including maintainance charges <input name="maintenance_charges" type="checkbox" id="store_room"></label><br>
            <label><span class="prop_mandatory">* </span>Carpet Area <input type="text" name="carpet_area"></label><br>
            <label><span class="prop_mandatory">* </span>No. of Balcony<input type="text" name="balconies"></label><br>
            <span><span class="prop_mandatory">* </span>Available From : </span><input name="available_from" id="prop_available_from" type="date" name="bday"><br>
            <h3>Address Details</h3>
            <label><span class="prop_mandatory">* </span>Building Name / No.<input type="text" name="building_name"></label><br>
            <label><span class="prop_mandatory">* </span>Address <input type="text" name="address"></label><br>
            <label><span class="prop_mandatory">* </span>Pincode<input type="number" name="pincode"></label><br>
            <label><span class="prop_mandatory">* </span>Locality<input type="text" name="locality"></label><br>
            <label><span class="prop_mandatory">* </span>City<input type="text" name="city"></label><br>
            <label><span class="prop_mandatory">* </span>State<input type="text" name="state"></label>
            <h3>Amenities</h3>
            <input type="checkbox" id="amn_parking_no" name="parking" value="1">Parking<br>
            <input type="checkbox" id="amn_gym_no" name="gym" value="1">Gym<br>
            <input type="checkbox" id="amn_cctv_guildelines_no" name="cctv">CCTV Guildelines<br>
            <input type="checkbox" id="amn_club_house_no" name="clubhouse" value="1">Club House<br>
            <input type="checkbox" id="amn_indoor_games_no" name="indoor_games" value="1">Indoor Games<br>
            <input type="checkbox" id="amn_kids_area_no" name="kids_area" value="1">Kids Area<br>
            <input type="checkbox" id="amn_lift_no" name="lift" value="1">Lift<br>
            <input type="checkbox" id="amn_swimming_no" name="swimming_pool" value="1">Swimming<br>
            <input type="checkbox" id="amn_water_harvesting_no" name="water_harvesting" value="1">Water Harvesting<br>
            <input type="checkbox" id="amn_power_backup_no" name="power_backup" value="1">Power Backup<br>
            <input type="checkbox" id="amn_water_sewage_no" name="water_sewage" value="1">Water Sewage<br>
            <input type="checkbox" id="amn_party_hall_no" name="party_hall" value="1">Party Hall<br>
            <h3>Additional Information</h3>
            <h4>*Facing</h4>
            <label for="prop_north"><input type="radio" id="prop_north" name="facing" value="north">North</label><br>
            <label for="prop_south"><input type="radio" id="prop_south" name="facing" value="south">South</label><br>
            <label for="prop_east"><input type="radio" id="prop_east" name="facing" value="east">East</label><br>
            <label for="prop_west"><input type="radio" id="prop_west" name="facing" value="west">West</label>
            <label for="prop_northeast"><input type="radio" id="prop_northeast" name="facing" value="north_east">North-East</label><br>
            <label for="prop_northwest"><input type="radio" id="prop_northwest" name="facing" value="north_west">North-West </label><br>
            <label for="prop_southeast"><input type="radio" id="prop_southeast" name="facing" value="south_east">South East</label><br>
            <label for="prop_southwest"><input type="radio" id="prop_southwest" name="facing" value="south_west">South West</label>
            <h4>*Preferred Tennats</h4>
            <label for="family"><input type="checkbox" id="family" name="preferred_family">Family</label>
            <label for="bachelor"><input type="checkbox" id="bachelor" name="preferred_bachelor">Bachelor</label>
            <label for="commercial"><input type="checkbox" id="commercial" name="preferred_commercial">Commercial</label>
            <h4>Property Feature</h4>
            <label for="prop_unfurnished"><input type="radio" id="prop_unfurnished" name="furnished" value="none">Unfurnished</label><br>
            <label for="prop_semifurnished"><input type="radio" id="prop_semifurnished" name="furnished" value="semi">Semi Furnished</label><br> 
            <label for="prop_fullyfurnished"><input type="radio" id="prop_fullyfurnished" name="furnished" value="full">Fully Furnished</label><br>
            <h4>Extras</h4>
            <label for="store_room"><input type="checkbox" id="store_room" name="store_room" value="1">Has store room.</label>
            <label for="prayer_room"><input type="checkbox" id="prayer_room" name="prayer_room" value="1">Has prayer room </label>
            <label>Floor no.<input type="text" name="floor_number"></label><br>
            <label>Total Floors<input type="text" name="total_floors"></label><br>
            <h3><label class="addlisting-subtitles" for="file">Choose Images to Upload</label></h3><br>
            <!--<input type="file" id="file" name="featured_image" multiple><br><br>-->
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
