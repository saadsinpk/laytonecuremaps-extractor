@extends('layouts.master')
@section('mainContent')
<div class="container">
    <div class="card">
        <div class="card-header"><h3 class="card-title">Add New Data</h3></div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="engine_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id='engine_name' name='engine_name'>
                </div>

                <div class="form-group border my-3">
                    <h3 class="border-bottom p-2">Power</h3>
                    <div class="row p-3">
                        <div class="col-md-4">
                            <label for="power_oem" class="form-label">Power Oem:</label>
                            <input type="text" class="form-control" id='power_oem' name='power_oem'>
                        </div>
                        <div class="col-md-4">
                            <label for="power_stage1" class="form-label">Power Stage 1:</label>
                            <input type="text" class="form-control" id='power_stage1' name='power_stage1'>
                        </div>
                        <div class="col-md-4">
                            <label for="power_stage2" class="form-label">Power Stage 2:</label>
                            <input type="text" class="form-control" id='power_stage2' name='power_stage2'>
                        </div>
                    </div>
                </div>
                <div class="form-group border my-3">
                    <h3 class="border-bottom p-2">Torque</h3>
                    <div class="row p-3">
                        <div class="col-md-4">
                            <label for="torque_oem" class="form-label">Torque Oem:</label>
                            <input type="text" class="form-control" id='torque_oem' name='torque_oem'>
                        </div>
                        <div class="col-md-4">
                            <label for="torque_stage1" class="form-label">Torque Stage 1:</label>
                            <input type="text" class="form-control" id='torque_stage1' name='torque_stage1'>
                        </div>
                        <div class="col-md-4">
                            <label for="torque_stage2" class="form-label">Torque Stage 2:</label>
                            <input type="text" class="form-control" id='torque_stage2' name='torque_stage2'>
                        </div>
                    </div>
                </div>
                <div class="form-group border my-3">
                    <h3 class="border-bottom p-2">Chart</h3>
                    <div class="row p-3">
                        <div class="col-md-12 mb-2">
                            <label for="chart_rpm" class="form-label">RPM:</label>
                            <input type="text" class="form-control" id='chart_rpm' name='chart_rpm'>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="chart_power_oem" class="form-label">Power Oem:</label>
                            <input type="text" class="form-control" id='chart_power_oem' name='chart_power_oem'>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="chart_power_stage1" class="form-label">Power Stage 1:</label>
                            <input type="text" class="form-control" id='chart_power_stage1' name='chart_power_stage1'>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="chart_power_stage2" class="form-label">Power Stage 2:</label>
                            <input type="text" class="form-control" id='chart_power_stage2' name='chart_power_stage2'>
                        </div>
                        <div class="col-md-4">
                            <label for="chart_torque_oem" class="form-label">Torque Oem:</label>
                            <input type="text" class="form-control" id='chart_torque_oem' name='chart_torque_oem'>
                        </div>
                        <div class="col-md-4">
                            <label for="chart_torque_stage1" class="form-label">Torque Stage 1:</label>
                            <input type="text" class="form-control" id='chart_torque_stage1' name='chart_torque_stage1'>
                        </div>
                        <div class="col-md-4">
                            <label for="chart_torque_stage2" class="form-label">Torque Stage 2:</label>
                            <input type="text" class="form-control" id='chart_torque_stage2' name='chart_torque_stage2'>
                        </div>
                    </div>
                </div>
                <div class="form-group border my-3">
                    <h3 class="border-bottom p-2">Vehicle</h3>
                    <div class="row p-3">
                        <div class="col-md-4 mb-2">
                            <label for="vehicle_type" class="form-label">Vehicle Type:</label>
                            <input type="text" class="form-control" id='vehicle_type' name='vehicle_type'>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="vehicle_make" class="form-label">Make:</label>
                            <input type="text" class="form-control" id='vehicle_make' name='vehicle_make'>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="vehicle_make_img" class="form-label">Upload Vehicle Image:</label>
                            <input type="file" class="form-control" id='vehicle_make_img' name='vehicle_make_img'>
                        </div>
                        <div class="col-md-4">
                            <label for="vehicle_model" class="form-label">Model:</label>
                            <input type="text" class="form-control" id='vehicle_model' name='vehicle_model'>
                        </div>
                        <div class="col-md-4">
                            <label for="vehicle_generation" class="form-label">Generation:</label>
                            <input type="text" class="form-control" id='vehicle_generation' name='vehicle_generation'>
                        </div>
                        <div class="col-md-4">
                            <label for="vehicle_fuel_type" class="form-label">Fuel Type:</label>
                            <input type="text" class="form-control" id='vehicle_fuel_type' name='vehicle_fuel_type'>
                        </div>
                        <div class="col-md-4">
                            <label for="vehicle_engine" class="form-label">Engine:</label>
                            <input type="text" class="form-control" id='vehicle_engine' name='vehicle_engine'>
                        </div>
                        <div class="col-md-4">
                            <label for="vehiclegearbox" class="form-label">Gearbox:</label>
                            <input type="text" class="form-control" id='vehiclegearbox' name='vehiclegearbox'>
                        </div>
                        <div class="col-md-4">
                            <label for="vehicle_engine_code" class="form-label">Engine Code:</label>
                            <input type="text" class="form-control" id='vehicle_engine_code' name='vehicle_engine_code'>
                        </div>
                    </div>
                </div>
                <div class="form-group border my-3">
                    <h3 class="border-bottom p-2">Selected</h3>
                    <div class="row p-3">
                        <div class="col-md-4 mb-2">
                            <label for="selected_type" class="form-label">Type:</label>
                            <input type="text" class="form-control" id='selected_type' name='selected_type'>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="selected_make" class="form-label">Make:</label>
                            <input type="text" class="form-control" id='selected_make' name='selected_make'>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="selcted_model" class="form-label">Model:</label>
                            <input type="text" class="form-control" id='selcted_model' name='selcted_model'>
                        </div>
                        <div class="col-md-4">
                            <label for="selected_generation" class="form-label">Generation:</label>
                            <input type="text" class="form-control" id='selected_generation' name='selected_generation'>
                        </div>
                        <div class="col-md-4">
                            <label for="selected_engine" class="form-label">Engine:</label>
                            <input type="text" class="form-control" id='selected_engine' name='selected_engine'>
                        </div>
                        <div class="col-md-4">
                            <label for="selected_ecu" class="form-label">ECU:</label>
                            <input type="text" class="form-control" id='selected_ecu' name='selected_ecu'>
                        </div>
                    </div>
                </div>
                <div class="form-group border my-3">
                    <h3 class="border-bottom p-2">ECU</h3>
                    <div class="row p-3">
                        <div class="col-md-4 mb-2">
                            <label for="ecu_name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id='ecu_name' name='ecu_name'>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="ecu_location" class="form-label">ECU Location:</label>
                            <input type="text" class="form-control" id='ecu_location' name='ecu_location'>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="ecu_location_img" class="form-label">ECU Location Image:</label>
                            <input type="file" class="form-control" id='ecu_location_img' name='ecu_location_img'>
                        </div>
                        <div class="col-md-4">
                            <label for="ecu_obd_locatin" class="form-label">OBD Location:</label>
                            <input type="text" class="form-control" id='ecu_obd_locatin' name='ecu_obd_locatin'>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="ecu_obd_location_img" class="form-label">OBD Location Image:</label>
                            <input type="file" class="form-control" id='ecu_obd_location_img' name='ecu_obd_location_img'>
                        </div>
                        <div class="col-md-4">
                            <label for="ecu_" class="form-label">Adblue Location:</label>
                            <input type="text" class="form-control" id='ecu_' name='ecu_adblue_location'>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="ecu_adbule_location_img" class="form-label">Adbule Location Image:</label>
                            <input type="file" class="form-control" id='ecu_adbule_location_img' name='ecu_adbule_location_img'>
                        </div>
                    </div>
                </div>
                <div class="form-group border my-3">
                    <h3 class="border-bottom p-2">Files</h3>
                    <div class="row p-3">
                        <div class="col-md-4 mb-2">
                            <label for="files_obd_help" class="form-label">OBD Help:</label>
                            <input type="text" class="form-control" id='files_obd_help' name='files_obd_help'>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="files_kessv2_help" class="form-label">Kessv2 Help:</label>
                            <input type="text" class="form-control" id='files_kessv2_help' name='files_kessv2_help'>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="files_ktag_help" class="form-label">Ktag Help:</label>
                            <input type="text" class="form-control" id='files_ktag_help' name='files_ktag_help'>
                        </div>
                    </div>
                </div>
                <div class="form-group border my-3">
                    <h3 class="border-bottom p-2">Checked Option</h3>
                    <div class="row p-3">
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16341" value="ADBLUE/SCR OFF | 16341" name="checked_options_16341" type="checkbox" class="form-check-input">
                            <label for="checked_options_16341" class="form-label"> ADBLUE/SCR OFF</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_18611" value="AGS OFF (Active Grill Shutter) | 18611" name="checked_options_18611" type="checkbox" class="form-check-input">
                            <label for="checked_options_18611" class="form-label"> AGS OFF (Active Grill Shutter)</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16351" value="BMW SPORTS DISPLAY | 16351" name="checked_options_16351" type="checkbox" class="form-check-input">
                            <label for="checked_options_16351" class="form-label"> BMW SPORTS DISPLAY</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_17828" value="COLD START NOISE | 17828" name="checked_options_17828" type="checkbox" class="form-check-input">
                            <label for="checked_options_17828" class="form-label"> COLD START NOISE</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16346" value="DPF/FAP OFF | 16346" name="checked_options_16346" type="checkbox" class="form-check-input">
                            <label for="checked_options_16346" class="form-label"> DPF/FAP OFF</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16339" value="DTC OFF | 16339" name="checked_options_16339" type="checkbox" class="form-check-input">
                            <label for="checked_options_16339" class="form-label"> DTC OFF</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16345" value="EGR OFF | 16345" name="checked_options_16345" type="checkbox" class="form-check-input">
                            <label for="checked_options_16345" class="form-label"> EGR OFF</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_18259" value="ENCRYPT/DECRYPT | 18259" name="checked_options_18259" type="checkbox" class="form-check-input">
                            <label for="checked_options_18259" class="form-label"> ENCRYPT/DECRYPT</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16353" value="EVAP REMOVAL | 16353" name="checked_options_16353" type="checkbox" class="form-check-input">
                            <label for="checked_options_16353" class="form-label"> EVAP REMOVAL</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16354" value="EXHAUST FLAP REMOVAL | 16354" name="checked_options_16354" type="checkbox" class="form-check-input">
                            <label for="checked_options_16354" class="form-label"> EXHAUST FLAP REMOVAL</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16355" value="GPF/OPF OFF | 16355" name="checked_options_16355" type="checkbox" class="form-check-input">
                            <label for="checked_options_16355" class="form-label"> GPF/OPF OFF</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16349" value="HARDCUT POPCORN LIMITER (DIESEL ONLY) | 16349" name="checked_options_16349" type="checkbox" class="form-check-input">
                            <label for="checked_options_16349" class="form-label"> HARDCUT POPCORN LIMITER (DIESEL ONLY)</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16343" value="HOT START | 16343" name="checked_options_16343" type="checkbox" class="form-check-input">
                            <label for="checked_options_16343" class="form-label"> HOT START</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_17841" value="IMMO OFF | 17841" name="checked_options_17841" type="checkbox" class="form-check-input">
                            <label for="checked_options_17841" class="form-label"> IMMO OFF</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16347" value="MAF OFF | 16347" name="checked_options_16347" type="checkbox" class="form-check-input">
                            <label for="checked_options_16347" class="form-label"> MAF OFF</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16344" value="O2/LAMBA OFF | 16344" name="checked_options_16344" type="checkbox" class="form-check-input">
                            <label for="checked_options_16344" class="form-label"> O2/LAMBA OFF</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16357" value="ORIGINAL FILE REQUEST | 16357" name="checked_options_16357" type="checkbox" class="form-check-input">
                            <label for="checked_options_16357" class="form-label"> ORIGINAL FILE REQUEST</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16352" value="POP & BANG (PETROL ONLY) | 16352" name="checked_options_16352" type="checkbox" class="form-check-input">
                            <label for="checked_options_16352" class="form-label"> POP & BANG (PETROL ONLY)</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_17842" value="READINESS CALIBRATION | 17842" name="checked_options_17842" type="checkbox" class="form-check-input">
                            <label for="checked_options_17842" class="form-label"> READINESS CALIBRATION</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16358" value="SAP DELETE (Secondry Air Pump) | 16358" name="checked_options_16358" type="checkbox" class="form-check-input">
                            <label for="checked_options_16358" class="form-label"> SAP DELETE (Secondry Air Pump)</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16340" value="SPEED LIMIT OFF | 16340" name="checked_options_16340" type="checkbox" class="form-check-input">
                            <label for="checked_options_16340" class="form-label"> SPEED LIMIT OFF</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16338" value="START STOP DISABLE | 16338" name="checked_options_16338" type="checkbox" class="form-check-input">
                            <label for="checked_options_16338" class="form-label"> START STOP DISABLE</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16342" value="SWIRL FLAPS OFF | 16342" name="checked_options_16342" type="checkbox" class="form-check-input">
                            <label for="checked_options_16342" class="form-label"> SWIRL FLAPS OFF</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16350" value="TQ MONITORING OFF | 16350" name="checked_options_16350" type="checkbox" class="form-check-input">
                            <label for="checked_options_16350" class="form-label"> TQ MONITORING OFF</label>
                        </div>
                        <div class="form-group p-3 col-md-6 col-lg-4">
                            <input id="checked_options_16348" value="TVA OFF | 16348" name="checked_options_16348" type="checkbox" class="form-check-input">
                            <label for="checked_options_16348" class="form-label"> TVA OFF</label>
                        </div>
                    </div>
                </div>
                <div class="form-group border my-3">
                    <h3 class="border-bottom p-2">Notes</h3>
                    <div class="row p-3">
                        <div class="col-md-12 mb-2">
                            <label for="primary_notes" class="form-label">Primary:</label>
                            <input type="text" class="form-control" id='primary_notes' name='primary_notes'>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="secondary_notes" class="form-label">Secondary:</label>
                            <input type="text" class="form-control" id='secondary_notes' name='secondary_notes'>
                        </div>
                    </div>
                </div>
                <div class="form-group border my-3">
                    <h3 class="border-bottom p-2">ECUS</h3>
                    <div class="row p-3">
                        <div class="col-md-12 mb-2">
                            <label for="ecus_id" class="form-label">Id:</label>
                            <input type="text" class="form-control" id='ecus_id' name='ecus_id'>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="ecus_name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id='ecus_name' name='ecus_name'>
                        </div>
                    </div>
                </div>
                <hr>
                <br>
                <h3>Users Access Control</h3>
                <div class="form-group border my-3">
                    <h3 class="border-bottom border-top p-2">Upload</h3>
                    <div class="row p-3">
                        <div class="col-md-4 mb-2">
                            <label for="ac_upload_service" class="form-label">Service:</label>
                            <input type="text" class="form-control" id='ac_upload_service' name='ac_upload_service' value="upload">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="ac_upload_status" class="form-label">Status:</label>
                            <select class="form-select" name="ac_upload_status" id="ac_upload_status">
                                <option value="true">True</option>
                                <option value="false">False</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="ac_upload_limit" class="form-label">Limit:</label>
                            <input type="text" class="form-control" id='ac_upload_limit' name='ac_upload_limit'>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="ac_upload_usage" class="form-label">Usages:</label>
                            <input type="text" class="form-control" id='ac_upload_usage' name='ac_upload_usage'>
                        </div>
                    </div>
                    <h3 class="border-bottom border-top p-2">VSearch</h3>
                    <div class="row p-3">
                        <div class="col-md-4 mb-2">
                            <label for="ac_vsearch_service" class="form-label">Service:</label>
                            <input type="text" class="form-control" id='ac_vsearch_service' name='ac_vsearch_service' value="vsearch">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="ac_vsearch_status" class="form-label">Status:</label>
                            <select class="form-select" name="ac_vsearch_status" id="ac_vsearch_status">
                                <option value="true">True</option>
                                <option value="false">False</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="ac_vsearch_limit" class="form-label">Limit:</label>
                            <input type="text" class="form-control" id='ac_vsearch_limit' name='ac_vsearch_limit'>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="ac_vsearch_usage" class="form-label">Usages:</label>
                            <input type="text" class="form-control" id='ac_vsearch_usage' name='ac_vsearch_usage'>
                        </div>
                    </div>
                    <h3 class="border-bottom border-top p-2">VRM</h3>
                    <div class="row p-3">
                        <div class="col-md-4 mb-2">
                            <label for="ac_vrm_service" class="form-label">Service:</label>
                            <input type="text" class="form-control" id='ac_vrm_service' name='ac_vrm_service' value="vrm">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="ac_vrm_status" class="form-label">Status:</label>
                            <select class="form-select" name="ac_vrm_status" id="ac_vrm_status">
                                <option value="true">True</option>
                                <option value="false">False</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="ac_vrm_limit" class="form-label">Limit:</label>
                            <input type="text" class="form-control" id='ac_vrm_limit' name='ac_vrm_limit'>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="ac_vrm_usage" class="form-label">Usages:</label>
                            <input type="text" class="form-control" id='ac_vrm_usage' name='ac_vrm_usage'>
                        </div>
                    </div>
                    <h3 class="border-bottom border-top p-2">Ticket</h3>
                    <div class="row p-3">
                        <div class="col-md-4 mb-2">
                            <label for="ac_ticket_service" class="form-label">Service:</label>
                            <input type="text" class="form-control" id='ac_ticket_service' name='ac_ticket_service' value="ticket">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="ac_ticket_status" class="form-label">Status:</label>
                            <select class="form-select" name="ac_ticket_status" id="ac_ticket_status">
                                <option value="true">True</option>
                                <option value="false">False</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="ac_ticket_limit" class="form-label">Limit:</label>
                            <input type="text" class="form-control" id='ac_ticket_limit' name='ac_ticket_limit'>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="ac_ticket_usage" class="form-label">Usages:</label>
                            <input type="text" class="form-control" id='ac_ticket_usage' name='ac_ticket_usage'>
                        </div>
                    </div>
                </div>
                




                <br>
                <button class="btn btn-primary" type="submit">Add New</button>
            </form>
        </div>
    </div>
</div>
@endsection