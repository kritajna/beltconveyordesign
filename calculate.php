<!DOCTYPE HTML>
<html>
<head>
    <title>Belt conveyor design</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="front/library/validator.js"></script>
    <script type="application/javascript" src="front/form.js"></script>
</head>
<body>
<form role="form" data-toggle="validator" class="form-horizontal" method="post" action="result.php">
<fieldset style="margin:10px 10px">

<!-- Form Name -->
<legend style="text-align: center">Belt Conveyor design</legend>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="discharge">Discharge (in TPH)</label>
    <div class="col-md-2">
        <input id="discharge" name="discharge" type="number" min="1" max="3500" placeholder="0" class="form-control input-md"

               required="" >
        <span class="help-block with-errors"><span>

    </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="lump_size">Maximum Lump Size (in mm)</label>
    <div class="col-md-2">
        <input id="lump_size" name="lump_size" type="number" min="1" max="300" placeholder="0" class="form-control input-md"

               required="" >
        <p class="help-block with-errors">(300 mm maximum)</p>
    </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
    <label class="col-md-4 control-label" for="type_of_lump">Type of Lump</label>
    <div class="col-md-4">
        <label class="radio-inline" for="type_of_lump-0">
            <input type="radio" name="type_of_lump" id="type_of_lump-0" value="sized" checked="checked">
            Sized
        </label>
        <label class="radio-inline" for="type_of_lump-1">
            <input type="radio" name="type_of_lump" id="type_of_lump-1" value="unsized">
            Unsized
        </label>
    </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
    <label class="col-md-4 control-label" for="type_of_material">Type of Material Carried</label>
    <div class="col-md-4">
        <div class="radio">
            <label for="type_of_material-0">
                <input type="radio" name="type_of_material" id="type_of_material-0" value="lumpy_coal"

                       checked="checked">
                Lumpy Coal
            </label>
        </div>
        <div class="radio">
            <label for="type_of_material-1">
                <input type="radio" name="type_of_material" id="type_of_material-1" value="rock_and_stone_chips">
                Rock and Stone Chips
            </label>
        </div>
        <div class="radio">
            <label for="type_of_material-2">
                <input type="radio" name="type_of_material" id="type_of_material-2" value="dry_sand">
                Dry Sand
            </label>
        </div>
        <div class="radio">
            <label for="type_of_material-3">
                <input type="radio" name="type_of_material" id="type_of_material-3" value="wet_sand">
                Wet Sand
            </label>
        </div>
        <div class="radio">
            <label for="type_of_material-4">
                <input type="radio" name="type_of_material" id="type_of_material-4" value="others">
                Others
            </label>
        </div>
    </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="bulk_density">Bulk Density (in ton/cubic meter)</label>
    <div class="col-md-2">
        <input id="bulk_density" name="bulk_density" type="text" pattern="^\d\.?\d*$" data-error="Value must be decimal number" placeholder="0" class="form-control input-md"

               required="" disabled="true">
        <span class="help-block with-errors">(Upto 6)</span>
    </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="fill_factor">Fill Factor</label>
    <div class="col-md-2">
        <input id="fill_factor" name="fill_factor" type="text" pattern="^0?\.[6,7,8,9]\d*$" data-error="Value must be decimal number between 0.6 and 0.9" placeholder="0" class="form-control input-md"

               required="">
        <span class="help-block with-errors">(0.6-0.9)</span>
    </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
    <label class="col-md-4 control-label" for="type_of_belt">Type of Belt Conveyor</label>
    <div class="col-md-4">
        <div class="radio">
            <label for="type_of_belt-0">
                <input type="radio" name="type_of_belt" id="type_of_belt-0" value="troughed" checked="checked">
                Troughed
            </label>
        </div>
        <div class="radio">
            <label for="type_of_belt-1">
                <input type="radio" name="type_of_belt" id="type_of_belt-1" value="flat_belt">
                Flat Belt
            </label>
        </div>
    </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="troughing_angle">Troughing Angle</label>
    <div class="col-md-2">
        <input id="troughing_angle" name="troughing_angle" type="number" min="0" max="45" placeholder="0" class="form-control

input-md" required="">
        <span class="help-block with-errors"></span>

    </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="avg_inclin">Average Inclination</label>
    <div class="col-md-2">
        <input id="total_length" name="avg_inclin" type="number" min="-15" max="25" placeholder="0" class="form-control input-md"

               required="">
        <span class="help-block with-errors">(-15 - 25)</span>
    </div>
</div>

<!-- Select Basic -->
<div class="form-group">
    <label class="col-md-4 control-label" for="no_of_section">No. of Sections</label>
    <div class="col-md-2">
        <select id="no_of_section" name="no_of_section" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
    </div>
</div>

<div>
    <!-- Input Title-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="length"></label>
        <div class="col-md-2">
            <p style="font-weight: bold">Enter Length For Each section</p>
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="length1">Section-1</label>
        <div class="col-md-2">
            <input id="length1" name="length1" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="length2">Section-2</label>
        <div class="col-md-2">
            <input id="length2" name="length2" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="length3">Section-3</label>
        <div class="col-md-2">
            <input id="length3" name="length3" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="length4">Section-4</label>
        <div class="col-md-2">
            <input id="length4" name="length4" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="length5">Section-5</label>
        <div class="col-md-2">
            <input id="length5" name="length5" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="length6">Section-6</label>
        <div class="col-md-2">
            <input id="length6" name="length6" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="length7">Section-7</label>
        <div class="col-md-2">
            <input id="length7" name="length7" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="length8">Section-8</label>
        <div class="col-md-2">
            <input id="length8" name="length8" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="length9">Section-9</label>
        <div class="col-md-2">
            <input id="length9" name="length9" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="length10">Section-10</label>
        <div class="col-md-2">
            <input id="length10" name="length10" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>
</div>

<div>

    <!-- Input Title-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="angle"></label>
        <div class="col-md-2">
            <p style="font-weight: bold">Enter Angle of Inclination For Each section</p>
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="angle1">Section-1</label>
        <div class="col-md-2">
            <input id="angle1" name="angle1" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="angle2">Section-2</label>
        <div class="col-md-2">
            <input id="angle2" name="angle2" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="angle3">Section-3</label>
        <div class="col-md-2">
            <input id="angle3" name="angle3" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="angle4">Section-4</label>
        <div class="col-md-2">
            <input id="angle4" name="angle4" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="angle5">Section-5</label>
        <div class="col-md-2">
            <input id="angle5" name="angle5" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="angle6">Section-6</label>
        <div class="col-md-2">
            <input id="angle6" name="angle6" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="angle7">Section-7</label>
        <div class="col-md-2">
            <input id="angle7" name="angle7" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="angle8">Section-8</label>
        <div class="col-md-2">
            <input id="angle8" name="angle8" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="angle9">Section-9</label>
        <div class="col-md-2">
            <input id="angle9" name="angle9" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="angle10">Section-10</label>
        <div class="col-md-2">
            <input id="angle10" name="angle10" type="text" placeholder="0" class="form-control input-md"
                   required="">
        </div>
    </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
    <label class="col-md-4 control-label" for="types_of_belt">Type of Belt</label>
    <div class="col-md-4">
        <div class="radio">
            <label for="types_of_belt-0">
                <input type="radio" name="types_of_belt" id="types_of_belt-0" value="ordinary_cotton" checked="checked">
                Ordinary Cotton Belting
            </label>
        </div>
        <div class="radio">
            <label for="types_of_belt-1">
                <input type="radio" name="types_of_belt" id="types_of_belt-1" value="cotton_duck_fabric">
                Cotton Duck Fabric
            </label>
        </div>
        <div class="radio">
            <label for="types_of_belt-2">
                <input type="radio" name="types_of_belt" id="types_of_belt-2" value="synthetic_fabric">
                Synthetic Fabric
            </label>
        </div>
        <div class="radio">
            <label for="types_of_belt-3">
                <input type="radio" name="types_of_belt" id="types_of_belt-3" value="high_strength">
                High Strength Belting
            </label>
        </div>
        <div class="radio">
            <label for="types_of_belt-4">
                <input type="radio" name="types_of_belt" id="types_of_belt-4" value="steel_cord">
                Steel Cord Belting
            </label>
        </div>
    </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="friction_idler_belt">Coefficient of Friction between Idler and Belt</label>
    <div class="col-md-2">
        <input id="friction_idler_belt" name="friction_idler_belt" type="text" pattern="^0?\.0[2,3,4]\d*$" data-error="Value must be decimal number between 0.02 and 0.04" placeholder="1" class="form-control input-md" required="">
        <span class="help-block with-errors">(0.02-0.04)</span>
    </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="friction_coeff">Coefficient of Friction between Pulley and Belt</label>
    <div class="col-md-2">
        <input id="friction_coeff" name="friction_coeff" type="text" pattern="^0?\.[2,3][1,2,3,4,5]\d*$" data-error="Value must be decimal number between 0.2 and 0.35" placeholder="1" class="form-control input-md" required="">
        <span class="help-block with-errors">(0.2-0.35)</span>
    </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="lap_angle">Angle of Lap</label>
    <div class="col-md-2">
        <input id="lap_angle" name="lap_angle" type="text" placeholder="1" class="form-control input-md" required="">
        <span class="help-block with-errors">(120-450)</span>
    </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="poles_motor">No. of poles of induction motor</label>
    <div class="col-md-2">
        <input id="poles_motor" name="poles_motor" type="text" pattern="[2,4,6,8]$" data-error="Value must be even and between 2 and 8"placeholder="1" class="form-control input-md" required="">
        <span class="help-block with-errors">(2-8)</span>
    </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="combined_efficiency">Combined Efficiency of Motor and Drive</label>
    <div class="col-md-2">
        <input id="combined_efficiency" name="combined_efficiency" type="number" min="50" max="75" placeholder="1" class="form-control input-md" required="">
        <span class="help-block with-errors">(50%-75%)</span>
    </div>
</div>

<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="submit"></label>
    <div class="col-md-2">
        <input id="submit" name="submit" type="submit" value="Calculate" class="btn btn-primary">
    </div>
</div>

</fieldset>
</form>
</body>
</html>
