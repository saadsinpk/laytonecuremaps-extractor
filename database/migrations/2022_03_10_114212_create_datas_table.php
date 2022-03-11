<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datas', function (Blueprint $table) {
            $table->id();
            $table->integer('data_id')->nullable();
            $table->text('data_name')->nullable();
            $table->text('data_power_oem')->nullable();
            $table->text('data_power_stage1')->nullable();
            $table->text('data_power_stage2')->nullable();
            $table->text('data_torque_oem')->nullable();
            $table->text('data_torque_stage1')->nullable();
            $table->text('data_torque_stage2')->nullable();
            $table->text('data_chart_rpm')->nullable();
            $table->text('data_chart_power_oem')->nullable();
            $table->text('data_chart_power_stage1')->nullable();
            $table->text('data_chart_power_stage2')->nullable();
            $table->text('data_chart_torque_oem')->nullable();
            $table->text('data_chart_torque_stage1')->nullable();
            $table->text('data_chart_torque_stage2')->nullable();
            $table->text('data_vehicle_type')->nullable();
            $table->text('data_vehicle_make')->nullable();
            $table->text('data_vehicle_make_image')->nullable();
            $table->text('data_vehicle_model')->nullable();
            $table->text('data_vehicle_generation')->nullable();
            $table->text('data_vehicle_fuel_type')->nullable();
            $table->text('data_vehicle_engine')->nullable();
            $table->text('data_vehicle_gearbox')->nullable();
            $table->text('data_vehicle_engine_code')->nullable();
            $table->integer('data_selected_type_id')->nullable();
            $table->text('data_selected_type_name')->nullable();
            $table->integer('data_selected_make_id')->nullable();
            $table->text('data_selected_make_name')->nullable();
            $table->integer('data_selected_model_id')->nullable();
            $table->text('data_selected_model_name')->nullable();
            $table->integer('data_selected_generation_id')->nullable();
            $table->text('data_selected_generation_name')->nullable();
            $table->text('data_selected_generation_yearStart')->nullable();
            $table->text('data_selected_generation_yearEnd')->nullable();
            $table->integer('data_selected_engine_fuelTypeId')->nullable();
            $table->text('data_selected_engine_fuelTypeName')->nullable();
            $table->integer('data_selected_engine_id')->nullable();
            $table->text('data_selected_engine_name')->nullable();
            $table->integer('data_selected_ecu_id')->nullable();
            $table->text('data_selected_ecu_name')->nullable();
            $table->text('data_ecu_name')->nullable();
            $table->text('data_ecu_location')->nullable();
            $table->text('data_ecu_locationImg')->nullable();
            $table->text('data_ecu_obdLocation')->nullable();
            $table->text('data_ecu_obdLocationImg')->nullable();
            $table->text('data_ecu_adbulueLocation')->nullable();
            $table->text('data_ecu_adbulueLocationImg')->nullable();
            $table->text('data_files_obdHelp')->nullable();
            $table->text('data_files_kessv2Help')->nullable();
            $table->text('data_files_ktagHelp')->nullable();
            $table->text('data_tools_jobType')->nullable();
            $table->text('data_tools_kessv2Protocol')->nullable();
            $table->text('data_tools_ktagProtocol')->nullable();
            $table->text('data_tools_ktagProcessor')->nullable();
            $table->text('data_tools_autotuner')->nullable();
            $table->text('data_tools_x17')->nullable();
            $table->text('data_tools_cmd')->nullable();
            $table->text('data_tools_ktagTsm')->nullable();
            $table->text('data_tools_ktagClone')->nullable();
            $table->text('data_checkedOptions_idNameAvailableComment')->nullable();
            $table->text('data_notes_primary')->nullable();
            $table->text('data_notes_secondary')->nullable();
            $table->integer('ecus_id')->nullable();
            $table->text('ecus_name')->nullable();
            $table->text('full')->nullable();
            $table->text('user_access_control')->nullable();
            $table->json('raw_json_format')->nullable();
            $table->timestamp('insert_time')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datas');
    }
};
