<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PropKorner</title>
    </head>
    <body>
        <h3 class="addlisting-title">Add new property listing</h3>
        <br>
        <label class="radio-inline">
            <input type="radio" name="rent-sale" class="for-rent" checked>For Rent
        </label>
        <label class="radio-inline">
            <input type="radio" name="rent-sale" class="for-sale">For Sell
        </label>
        <br>
        <label><span class="prop_mandatory">* </span>Property Type</label>
        <select>
            <option disabled selected value> -- select an option -- </option>
            <option value="apt_flat">Apartments/Flats</option>
            <option value="ind_house">Independent Floor/House</option>
            <option value="villa_duplex">Villa/Duplex</option>
            <option value="penthouse">Penthouse</option>
        </select>
        <br>
        <label><span class="prop_mandatory">* </span>BHK Type</label>
        <select>
            <option disabled selected value> -- select an option -- </option>
            <option value="1rk">1RK</option>
            <option value="1bhk">1BHK</option>
            <option value="2bhk">2BHK</option>
            <option value="3bhk">3BHK</option>
            <option value="4+bhk">4+ BHK</option>
        </select><br>
        <label><span class="prop_mandatory">* </span>Built Up Area<input type="text" name="built_area"></label><br>
        <label><span class="prop_mandatory">* </span>No. of Bedroom<input type="text" name="total_bedroom"></label><br>
        <label><span class="prop_mandatory">* </span>monthly rent <input type="number"></label><br>
        <label><span class="prop_mandatory">* </span>security deposit<input type="number"></label><br>
        <label for="store_room">Negotiable<input type="checkbox" id="store_room"></label><br>
        <label for="store_room">Including maintainance charges <input type="checkbox" id="store_room"></label><br>
        <label><span class="prop_mandatory">* </span>Carpet Area <input type="text" name="carpet_area"></label><br>
        <label><span class="prop_mandatory">* </span>No. of Balcony<input type="text" name="total_balcony"></label><br>
        <span><span class="prop_mandatory">* </span>Available From : </span><input id="prop_available_from" type="date" name="bday"><br>
        <h3>Address Details</h3>
        <label><span class="prop_mandatory">* </span>Building Name / No.<input type="text" name="prop_name"></label><br>
        <label><span class="prop_mandatory">* </span>Address <input type="text" name="addr_ln1"></label><br>
        <label><span class="prop_mandatory">* </span>Pincode<input type="number" name="prop_pincode"></label><br>
        <label><span class="prop_mandatory">* </span>Locality<input type="text" name="prop_locality"></label><br>
        <label><span class="prop_mandatory">* </span>City<input type="text" name="prop_city"></label><br>
        <label><span class="prop_mandatory">* </span>State<input type="text" name="prop_state"></label>
        <h3>Amenities</h3>
        <input type="checkbox" id="amn_parking_no" name="amn_parking" value="1">Parking<br>
        <input type="checkbox" id="amn_gym_no" name="amn_gym" value="1">Gym<br>
        <input type="checkbox" id="amn_cctv_guildelines_no" name="amn_cctv_guildelines">CCTV Guildelines<br>
        <input type="checkbox" id="amn_club_house_no" name="amn_club_house" value="1">Club House<br>
        <input type="checkbox" id="amn_indoor_games_no" name="amn_indoor_games" value="1">Indoor Games<br>
        <input type="checkbox" id="amn_kids_area_no" name="amn_kids_area" value="1">Kids Area<br>
        <input type="checkbox" id="amn_lift_no" name="amn_lift" value="1">Lift<br>
        <input type="checkbox" id="amn_swimming_no" name="amn_swimming" value="1">Swimming<br>
        <input type="checkbox" id="amn_water_harvesting_no" name="amn_water_harvesting" value="1">Water Harvesting<br>
        <input type="checkbox" id="amn_power_backup_no" name="amn_power_backup" value="1">Power Backup<br>
        <input type="checkbox" id="amn_water_sewage_no" name="amn_Water_Sewage" value="1">Water Sewage<br>
        <input type="checkbox" id="amn_party_hall_no" name="amn_party_hall" value="1">Party Hall<br>
        <h3>Additional Information</h3>
        <h4>*Facing</h4>
        <label for="prop_north"><input type="radio" id="prop_north" name="prop_facing">North</label><br>
        <label for="prop_south"><input type="radio" id="prop_south" name="prop_facing">South</label><br>
        <label for="prop_east"><input type="radio" id="prop_east" name="prop_facing">East</label><br>
        <label for="prop_west"><input type="radio" id="prop_west" name="prop_facing">West</label>
        <label for="prop_northeast"><input type="radio" id="prop_northeast" name="prop_facing">North-East</label><br>
        <label for="prop_northwest"><input type="radio" id="prop_northwest" name="prop_facing">North-West </label><br>
        <label for="prop_southeast"><input type="radio" id="prop_southeast" name="prop_facing">South East</label><br>
        <label for="prop_southwest"><input type="radio" id="prop_southwest" name="prop_facing">South West</label>
        <h4>*Preferred Tennats</h4>
        <label for="family"><input type="checkbox" id="family">Family</label>
        <label for="bachelor"><input type="checkbox" id="bachelor">Bachelor</label>
        <label for="commercial"><input type="checkbox" id="commercial">Commercial</label>
        <h4>Property Feature</h4>
        <label for="prop_unfurnished"><input type="radio" id="prop_unfurnished" name="prop_furnished">Unfurnished</label><br>
        <label for="prop_semifurnished"><input type="radio" id="prop_semifurnished" name="prop_furnished">Semi Furnished</label><br> 
        <label for="prop_fullyfurnished"><input type="radio" id="prop_fullyfurnished" name="prop_furnished">Fully Furnished</label><br>
        <h4>Extras</h4>
        <label for="store_room"><input type="checkbox" id="store_room">Has store room.</label>
        <label for="prayer_room"><input type="checkbox" id="prayer_room">Has prayer room </label>
        <label for="power_backup"><input type="checkbox" id="power_backup">Has power backup</label><br>
        <label>Floor no.<input type="text" name="prop_floorno"></label><br>
        <label>Total Floors<input type="text" name="prop_totalfloor"></label><br>
        <h3><label class="addlisting-subtitles" for="file">Choose Images to Upload</label></h3><br>
        <input type="file" id="file" name="file" multiple><br><br>
        <input type="submit" value="Submit">
    </body>
</html>
