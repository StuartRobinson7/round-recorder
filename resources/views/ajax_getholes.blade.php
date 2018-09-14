                
@if($selected_size === '27')

<br />

        <p>27 hole courses often name each set of nine holes to easily differentiate between them, if this is the case please enter the names below, if not feel free to leave them blank.</p>

        <div class="row">
            <div class="col-12 col-lg">
                <div class="form-group">
                    <label>First Nine Name</label>
                    <input id="first_nine_name" type="text" class="form-control {{ $errors->has('first_nine_name') ? ' is-invalid' : '' }}" name="first_nine_name" value="" >
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="form-group">
                    <label>Second Nine Name</label>
                    <input id="second_nine_name" type="text" class="form-control {{ $errors->has('second_nine_name') ? ' is-invalid' : '' }}" name="second_nine_name" value="" >
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="form-group">
                    <label>Third Nine Name</label>
                    <input id="third_nine_name" type="text" class="form-control {{ $errors->has('third_nine_name') ? ' is-invalid' : '' }}" name="third_nine_name" value="" >
                </div>
            </div>                                        
        </div>
        <!--/.row -->     


<br />

@endif


                <div class="add-tee-box white-tees">                   
                    
                    <button class="btn btn-block btn-collapse collapsed" type="button" data-toggle="collapse" data-target="#whiteTees" aria-expanded="false" aria-controls="whiteTees">
                        <i class="far"></i> White Tees
                    </button>

                    <div class="collapse" id="whiteTees">

                        @if($selected_size === '9')
                            <div class="form-group">
                                <label>SSS</label>
                                <input id="white_half_sss" type="text" class="form-control {{ $errors->has('white_half_sss') ? ' is-invalid' : '' }}" name="white_half_sss" value=""> 
                            </div>                                              
                        @elseif($selected_size === '18')
                            <div class="form-group">
                                <label>SSS</label>
                                <input id="white_sss" type="text" class="form-control {{ $errors->has('white_sss') ? ' is-invalid' : '' }}" name="white_sss" value=""> 
                            </div>                      
                        @endif

                        @if($selected_size === '27')

                            <h3>First Nine</h3>
                               
                        @elseif($selected_size === '18') 

                            <h3>Front Nine</h3>
                        
                        @else

                        @endif

                        <div class="row add-course-row add-course-hole">

                            <div class="col col-lg-2">
                                <h4>Hole</h4>
                            </div>

                            <div class="col">
                                <span>1</span>
                            </div>

                            <div class="col">
                                <span>2</span>
                            </div>

                            <div class="col">
                                <span>3</span>
                            </div>

                            <div class="col">
                                <span>4</span>
                            </div>

                            <div class="col">
                                <span>5</span>
                            </div>

                            <div class="col">
                                <span>6</span>
                            </div>

                            <div class="col">
                                <span>7</span>
                            </div>

                            <div class="col">
                                <span>8</span>
                            </div>

                            <div class="col">
                                <span>9</span>
                            </div> 

                            <div class="col">
                                <span>Total</span>
                            </div>                                                                                                                                                                                                                                                         


                        </div>
                        <!-- /.row -->

                        <div class="row add-course-row ">

                            <div class="col col-lg-2">
                                <h4>Yards</h4>
                            </div>

                            <div class="col">
                                <input id="hole_1_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_1_white') ? ' is-invalid' : '' }}" name="hole_1_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_2_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_2_white') ? ' is-invalid' : '' }}" name="hole_2_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_3_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_3_white') ? ' is-invalid' : '' }}" name="hole_3_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_4_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_4_white') ? ' is-invalid' : '' }}" name="hole_4_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_5_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_5_white') ? ' is-invalid' : '' }}" name="hole_5_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_6_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_6_white') ? ' is-invalid' : '' }}" name="hole_6_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_7_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_7_white') ? ' is-invalid' : '' }}" name="hole_7_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_8_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_8_white') ? ' is-invalid' : '' }}" name="hole_8_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_9_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_9_white') ? ' is-invalid' : '' }}" name="hole_9_white" value="">
                            </div>  

                            <div class="col">
                                <span id="firstWhiteYards"></span>
                            </div>                                                                                                                                                                                                                                                                                      


                        </div>
                        <!-- /.row --> 

                        <div class="row add-course-row ">

                            <div class="col col-lg-2">
                                <h4>Par</h4>
                            </div>

                            <div class="col">
                                <input id="hole_1_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_1_white_par') ? ' is-invalid' : '' }}" name="hole_1_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_2_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_2_white_par') ? ' is-invalid' : '' }}" name="hole_2_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_3_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_3_white_par') ? ' is-invalid' : '' }}" name="hole_3_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_4_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_4_white_par') ? ' is-invalid' : '' }}" name="hole_4_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_5_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_5_white_par') ? ' is-invalid' : '' }}" name="hole_5_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_6_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_6_white_par') ? ' is-invalid' : '' }}" name="hole_6_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_7_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_7_white_par') ? ' is-invalid' : '' }}" name="hole_7_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_8_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_8_white_par') ? ' is-invalid' : '' }}" name="hole_8_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_9_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_9_white_par') ? ' is-invalid' : '' }}" name="hole_9_white_par" value="">
                            </div>   

                            <div class="col">
                                <span id="firstWhitePar"></span>
                            </div>                                                                                                                                                                                                                                                                                     


                        </div>
                        <!-- /.row -->       

                        <div class="row add-course-row ">

                            <div class="col col-lg-2">
                                <h4>Stroke Index</h4>
                            </div>

                            <div class="col">
                                <input id="hole_1_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_1_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_1_white_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_2_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_2_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_2_white_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_3_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_3_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_3_white_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_4_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_4_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_4_white_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_5_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_5_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_5_white_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_6_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_6_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_6_white_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_7_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_7_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_7_white_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_8_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_8_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_8_white_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_9_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_9_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_9_white_stroke_index" value="">
                            </div>                                                                                                                                                                                                                                                          

                            <div class="col">
                                <span>-</span>
                            </div> 

                        </div>
                        <!-- /.row -->                                                                   

                    <br />

@if($selected_size === '18' || $selected_size === '27') 

                        @if($selected_size === '27')

                            <h3>Second Nine</h3>
                        
                        @elseif($selected_size === '18') 

                            <h3>Back Nine</h3>

                        @else

                        @endif

                    <div class="row add-course-row add-course-hole">

                        <div class="col col-lg-2">
                            <h4>Hole</h4>
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>1</span>
                            @else
                                <span>10</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>2</span>
                            @else
                                <span>11</span>
                            @endif

                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>3</span>
                            @else
                                <span>12</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>4</span>
                            @else
                                <span>13</span>
                            @endif                           

                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>5</span>
                            @else
                                <span>14</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>6</span>
                            @else
                                <span>15</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>7</span>
                            @else
                                <span>16</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>8</span>
                            @else
                                <span>17</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>9</span>
                            @else
                                <span>18</span>
                            @endif
                            
                        </div>  

                        <div class="col">
                            <span>Total</span>
                        </div>                                                                                                                                                                                                                                                                                 


                        </div>
                        <!-- /.row -->

                        <div class="row add-course-row ">

                            <div class="col col-lg-2">
                                <h4>Yards</h4>
                            </div>

                            <div class="col">
                                <input id="hole_10_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_10_white') ? ' is-invalid' : '' }}" name="hole_10_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_11_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_11_white') ? ' is-invalid' : '' }}" name="hole_11_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_12_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_12_white') ? ' is-invalid' : '' }}" name="hole_12_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_13_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_13_white') ? ' is-invalid' : '' }}" name="hole_13_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_14_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_14_white') ? ' is-invalid' : '' }}" name="hole_14_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_15_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_15_white') ? ' is-invalid' : '' }}" name="hole_15_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_16_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_16_white') ? ' is-invalid' : '' }}" name="hole_16_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_17_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_17_white') ? ' is-invalid' : '' }}" name="hole_17_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_18_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_18_white') ? ' is-invalid' : '' }}" name="hole_18_white" value="">
                            </div> 

                            <div class="col">
                                <span id="secondWhiteYards"></span>
                            </div>                                                                                                                                                                                                                                                                                      


                        </div>
                        <!-- /.row --> 

                        <div class="row add-course-row ">

                            <div class="col col-lg-2">
                                <h4>Par</h4>
                            </div>

                            <div class="col">
                                <input id="hole_10_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_10_white_par') ? ' is-invalid' : '' }}" name="hole_10_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_11_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_11_white_par') ? ' is-invalid' : '' }}" name="hole_11_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_12_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_12_white_par') ? ' is-invalid' : '' }}" name="hole_12_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_13_white_par" type="text" class="form-control second-white-par second-white-par {{ $errors->has('hole_13_white_par') ? ' is-invalid' : '' }}" name="hole_13_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_14_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_14_white_par') ? ' is-invalid' : '' }}" name="hole_14_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_15_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_15_white_par') ? ' is-invalid' : '' }}" name="hole_15_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_16_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_16_white_par') ? ' is-invalid' : '' }}" name="hole_16_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_17_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_17_white_par') ? ' is-invalid' : '' }}" name="hole_17_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_18_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_18_white_par') ? ' is-invalid' : '' }}" name="hole_18_white_par" value="">
                            </div>                                                                                                                                                                                                                                                          

                            <div class="col">
                                <span id="secondWhitePar"></span>
                            </div>   

                        </div>
                        <!-- /.row -->       

                        <div class="row add-course-row ">

                            <div class="col col-lg-2">
                                <h4>Stroke Index</h4>
                            </div>

                            <div class="col">
                                <input id="hole_10_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_10_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_10_white_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_11_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_11_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_11_white_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_12_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_12_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_12_white_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_13_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_13_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_13_white_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_14_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_14_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_14_white_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_15_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_15_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_15_white_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_16_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_16_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_16_white_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_17_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_17_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_17_white_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_18_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_18_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_18_white_stroke_index" value="">
                            </div>                                                                                                                                                                                                                                                          

                            <div class="col">
                                <span>-</span>
                            </div>   

                        </div>
                        <!-- /.row -->

                    <br />
@endif                    
                                 
@if($selected_size === '27')   


                        <h3>Third Nine</h3>  


                        <div class="row add-course-row add-course-hole">

                            <div class="col col-lg-2">
                                <h4>Hole</h4>
                            </div>

                            <div class="col">
                                <span>1</span>
                            </div>

                            <div class="col">
                                <span>2</span>
                            </div>

                            <div class="col">
                                <span>3</span>
                            </div>

                            <div class="col">
                                <span>4</span>
                            </div>

                            <div class="col">
                                <span>5</span>
                            </div>

                            <div class="col">
                                <span>6</span>
                            </div>

                            <div class="col">
                                <span>7</span>
                            </div>

                            <div class="col">
                                <span>8</span>
                            </div>

                            <div class="col">
                                <span>9</span>
                            </div>  

                            <div class="col">
                                <span>Total</span>
                            </div>                                                                                                                                                                                                                                                                                     


                        </div>
                        <!-- /.row -->

                        <div class="row add-course-row ">

                            <div class="col col-lg-2">
                                <h4>Yards</h4>
                            </div>

                            <div class="col">
                                <input id="hole_19_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_19_white') ? ' is-invalid' : '' }}" name="hole_19_white" value="">
                            </div>                              

                            <div class="col">
                                <input id="hole_20_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_20_white') ? ' is-invalid' : '' }}" name="hole_20_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_22_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_22_white') ? ' is-invalid' : '' }}" name="hole_22_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_22_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_22_white') ? ' is-invalid' : '' }}" name="hole_22_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_23_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_23_white') ? ' is-invalid' : '' }}" name="hole_23_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_24_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_24_white') ? ' is-invalid' : '' }}" name="hole_24_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_25_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_25_white') ? ' is-invalid' : '' }}" name="hole_25_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_26_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_26_white') ? ' is-invalid' : '' }}" name="hole_26_white" value="">
                            </div>

                            <div class="col">
                                <input id="hole_27_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_27_white') ? ' is-invalid' : '' }}" name="hole_27_white" value="">
                            </div>

                            <div class="col">
                                <span id="thirdWhiteYards"></span>
                            </div>                                                                                                                                                                                                                                                        


                        </div>
                        <!-- /.row --> 

                        <div class="row add-course-row ">

                            <div class="col col-lg-2">
                                <h4>Par</h4>
                            </div>

                            <div class="col">
                                <input id="hole_19_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_19_white_par') ? ' is-invalid' : '' }}" name="hole_19_white_par" value="">
                            </div>                              

                            <div class="col">
                                <input id="hole_20_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_20_white_par') ? ' is-invalid' : '' }}" name="hole_20_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_22_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_22_white_par') ? ' is-invalid' : '' }}" name="hole_22_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_22_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_22_white_par') ? ' is-invalid' : '' }}" name="hole_22_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_23_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_23_white_par') ? ' is-invalid' : '' }}" name="hole_23_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_24_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_24_white_par') ? ' is-invalid' : '' }}" name="hole_24_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_25_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_25_white_par') ? ' is-invalid' : '' }}" name="hole_25_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_26_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_26_white_par') ? ' is-invalid' : '' }}" name="hole_26_white_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_27_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_27_white_par') ? ' is-invalid' : '' }}" name="hole_27_white_par" value="">
                            </div>

                            <div class="col">
                                <span id="thirdWhitePar"></span>
                            </div>                                                                                                                                                                                                                                                         


                        </div>
                        <!-- /.row -->       

                        <div class="row add-course-row ">

                            <div class="col col-lg-2">
                                <h4>Stroke Index Front</h4>
                            </div>

                            <div class="col">
                                <input id="hole_19_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_19_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_19_white_stroke_index_front" value="">
                            </div>     

                            <div class="col">
                                <input id="hole_20_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_20_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_20_white_stroke_index_front" value="">
                            </div>

                            <div class="col">
                                <input id="hole_22_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_22_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_22_white_stroke_index_front" value="">
                            </div>

                            <div class="col">
                                <input id="hole_22_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_22_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_22_white_stroke_index_front" value="">
                            </div>

                            <div class="col">
                                <input id="hole_23_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_23_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_23_white_stroke_index_front" value="">
                            </div>

                            <div class="col">
                                <input id="hole_24_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_24_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_24_white_stroke_index_front" value="">
                            </div>

                            <div class="col">
                                <input id="hole_25_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_25_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_25_white_stroke_index_front" value="">
                            </div>

                            <div class="col">
                                <input id="hole_26_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_26_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_26_white_stroke_index_front" value="">
                            </div>

                            <div class="col">
                                <input id="hole_27_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_27_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_27_white_stroke_index_front" value="">
                            </div>                                                                                                                                                                                                                                                     

                            <div class="col">
                                <span>-</span>
                            </div> 

                        </div>
                        <!-- /.row -->  

                        <div class="row add-course-row ">

                            <div class="col col-lg-2">
                                <h4>Stroke Index Back</h4>
                            </div>

                            <div class="col">
                                <input id="hole_19_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_19_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_19_white_stroke_index_back" value="">
                            </div>     

                            <div class="col">
                                <input id="hole_20_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_20_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_20_white_stroke_index_back" value="">

                            </div>

                            <div class="col">
                                <input id="hole_22_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_22_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_22_white_stroke_index_back" value="">
                            </div>

                            <div class="col">
                                <input id="hole_22_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_22_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_22_white_stroke_index_back" value="">
                            </div>

                            <div class="col">
                                <input id="hole_23_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_23_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_23_white_stroke_index_back" value="">
                            </div>

                            <div class="col">
                                <input id="hole_24_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_24_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_24_white_stroke_index_back" value="">
                            </div>

                            <div class="col">
                                <input id="hole_25_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_25_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_25_white_stroke_index_back" value="">
                            </div>

                            <div class="col">
                                <input id="hole_26_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_26_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_26_white_stroke_index_back" value="">
                            </div>

                            <div class="col">
                                <input id="hole_27_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_27_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_27_white_stroke_index_back" value="">
                            </div>                                                                                                                                                                                                                                                     

                            <div class="col">
                                <span>-</span>
                            </div> 

                        </div>
                        <!-- /.row -->                                             

@endif

                    </div>                    
                
                </div>
                <!--/.dropdown -->



                <div class="add-tee-box yellow-tees">
                
                
                    <button class="btn btn-block btn-collapse" type="button" data-toggle="collapse" data-target="#yellowTees" aria-expanded="true" aria-controls="yellowTees">
                        <i class="far"></i> Yellow Tees
                    </button>

                    <div class="collapse show" id="yellowTees">

                        @if($selected_size === '9')
                            <div class="form-group">
                                <label>SSS</label>
                                <input id="yellow_half_sss" type="text" class="form-control {{ $errors->has('yellow_half_sss') ? ' is-invalid' : '' }}" name="yellow_half_sss" value=""> 
                            </div>                                              
                        @elseif($selected_size === '18')
                            <div class="form-group">
                                <label>SSS</label>
                                <input id="yellow_sss" type="text" class="form-control {{ $errors->has('yellow_sss') ? ' is-invalid' : '' }}" name="yellow_sss" value=""> 
                            </div>                     
                        @endif

                        @if($selected_size === '27')

                            <h3>First Nine</h3>
                        
                        @elseif($selected_size === '18') 

                            <h3>Front Nine</h3>

                        @else

                        @endif                   

                        <div class="row add-course-row add-course-hole">

                            <div class="col col-lg-2">
                                <h4>Hole</h4>
                            </div>

                            <div class="col">
                                <span>1</span>
                            </div>

                            <div class="col">
                                <span>2</span>
                            </div>

                            <div class="col">
                                <span>3</span>
                            </div>

                            <div class="col">
                                <span>4</span>
                            </div>

                            <div class="col">
                                <span>5</span>
                            </div>

                            <div class="col">
                                <span>6</span>
                            </div>

                            <div class="col">
                                <span>7</span>
                            </div>

                            <div class="col">
                                <span>8</span>
                            </div>

                            <div class="col">
                                <span>9</span>
                            </div>                                                                                                                                                                                                                                                          

                            <div class="col">
                                <span>Total</span>
                            </div>   

                        </div>
                        <!-- /.row -->

                        <div class="row add-course-row ">

                            <div class="col col-lg-2">
                                <h4>Yards</h4>
                            </div>

                            <div class="col">
                                <input id="hole_1_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_1_yellow') ? ' is-invalid' : '' }}" name="hole_1_yellow" value="">
                            </div>

                            <div class="col">
                                <input id="hole_2_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_2_yellow') ? ' is-invalid' : '' }}" name="hole_2_yellow" value="">
                            </div>

                            <div class="col">
                                <input id="hole_3_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_3_yellow') ? ' is-invalid' : '' }}" name="hole_3_yellow" value="">
                            </div>

                            <div class="col">
                                <input id="hole_4_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_4_yellow') ? ' is-invalid' : '' }}" name="hole_4_yellow" value="">
                            </div>

                            <div class="col">
                                <input id="hole_5_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_5_yellow') ? ' is-invalid' : '' }}" name="hole_5_yellow" value="">
                            </div>

                            <div class="col">
                                <input id="hole_6_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_6_yellow') ? ' is-invalid' : '' }}" name="hole_6_yellow" value="">
                            </div>

                            <div class="col">
                                <input id="hole_7_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_7_yellow') ? ' is-invalid' : '' }}" name="hole_7_yellow" value="">
                            </div>

                            <div class="col">
                                <input id="hole_8_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_8_yellow') ? ' is-invalid' : '' }}" name="hole_8_yellow" value="">
                            </div>

                            <div class="col">
                                <input id="hole_9_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_9_yellow') ? ' is-invalid' : '' }}" name="hole_9_yellow" value="">
                            </div>                                                                                                                                                                                                                                                          

                            <div class="col">
                                <span id="firstYellowYards"></span>
                            </div>  

                        </div>
                        <!-- /.row --> 

                        <div class="row add-course-row ">

                            <div class="col col-lg-2">
                                <h4>Par</h4>
                            </div>

                            <div class="col">
                                <input id="hole_1_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_1_yellow_par') ? ' is-invalid' : '' }}" name="hole_1_yellow_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_2_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_2_yellow_par') ? ' is-invalid' : '' }}" name="hole_2_yellow_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_3_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_3_yellow_par') ? ' is-invalid' : '' }}" name="hole_3_yellow_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_4_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_4_yellow_par') ? ' is-invalid' : '' }}" name="hole_4_yellow_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_5_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_5_yellow_par') ? ' is-invalid' : '' }}" name="hole_5_yellow_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_6_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_6_yellow_par') ? ' is-invalid' : '' }}" name="hole_6_yellow_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_7_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_7_yellow_par') ? ' is-invalid' : '' }}" name="hole_7_yellow_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_8_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_8_yellow_par') ? ' is-invalid' : '' }}" name="hole_8_yellow_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_9_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_9_yellow_par') ? ' is-invalid' : '' }}" name="hole_9_yellow_par" value="">
                            </div>                                                                                                                                                                                                                                                          

                            <div class="col">
                                <span id="firstYellowPar"></span>
                            </div>  

                        </div>
                        <!-- /.row -->       

                        <div class="row add-course-row ">

                            <div class="col col-lg-2">
                                <h4>Stroke Index</h4>
                            </div>

                            <div class="col">
                                <input id="hole_1_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_1_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_1_yellow_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_2_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_2_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_2_yellow_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_3_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_3_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_3_yellow_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_4_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_4_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_4_yellow_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_5_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_5_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_5_yellow_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_6_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_6_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_6_yellow_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_7_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_7_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_7_yellow_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_8_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_8_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_8_yellow_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_9_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_9_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_9_yellow_stroke_index" value="">
                            </div>                                                                                                                                                                                                                                                          

                            <div class="col">
                                <span>-</span>
                            </div>   

                        </div>
                        <!-- /.row -->                                                                   
                                    

                    <br />

@if($selected_size === '18' || $selected_size === '27') 

                        @if($selected_size === '27')

                            <h3>Second Nine</h3>
                        
                        @elseif($selected_size === '18') 

                            <h3>Back Nine</h3>

                        @else

                        @endif

                    <div class="row add-course-row add-course-hole">

                        <div class="col col-lg-2">
                            <h4>Hole</h4>
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>1</span>
                            @else
                                <span>10</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>2</span>
                            @else
                                <span>11</span>
                            @endif

                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>3</span>
                            @else
                                <span>12</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>4</span>
                            @else
                                <span>13</span>
                            @endif                           

                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>5</span>
                            @else
                                <span>14</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>6</span>
                            @else
                                <span>15</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>7</span>
                            @else
                                <span>16</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>8</span>
                            @else
                                <span>17</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>9</span>
                            @else
                                <span>18</span>
                            @endif
                            
                        </div>  

                        <div class="col">
                            <span>Total</span>
                        </div>                                                                                                                                                                                                                                                                                 


                        </div>
                        <!-- /.row -->

                        <div class="row add-course-row ">

                            <div class="col col-lg-2">
                                <h4>Yards</h4>
                            </div>

                            <div class="col">
                                <input id="hole_10_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_10_yellow') ? ' is-invalid' : '' }}" name="hole_10_yellow" value="">
                            </div>

                            <div class="col">
                                <input id="hole_11_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_11_yellow') ? ' is-invalid' : '' }}" name="hole_11_yellow" value="">
                            </div>

                            <div class="col">
                                <input id="hole_12_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_12_yellow') ? ' is-invalid' : '' }}" name="hole_12_yellow" value="">
                            </div>

                            <div class="col">
                                <input id="hole_13_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_13_yellow') ? ' is-invalid' : '' }}" name="hole_13_yellow" value="">
                            </div>

                            <div class="col">
                                <input id="hole_14_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_14_yellow') ? ' is-invalid' : '' }}" name="hole_14_yellow" value="">
                            </div>

                            <div class="col">
                                <input id="hole_15_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_15_yellow') ? ' is-invalid' : '' }}" name="hole_15_yellow" value="">
                            </div>

                            <div class="col">
                                <input id="hole_16_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_16_yellow') ? ' is-invalid' : '' }}" name="hole_16_yellow" value="">
                            </div>

                            <div class="col">
                                <input id="hole_17_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_17_yellow') ? ' is-invalid' : '' }}" name="hole_17_yellow" value="">
                            </div>

                            <div class="col">
                                <input id="hole_18_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_18_yellow') ? ' is-invalid' : '' }}" name="hole_18_yellow" value="">
                            </div>   

                            <div class="col">
                                <span id="secondYellowYards"></span>               
                            </div>                                                                                                                                                                                                                                                                                       


                        </div>
                        <!-- /.row --> 

                        <div class="row add-course-row ">

                            <div class="col col-lg-2">
                                <h4>Par</h4>
                            </div>

                            <div class="col">
                                <input id="hole_10_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_10_yellow_par') ? ' is-invalid' : '' }}" name="hole_10_yellow_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_11_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_11_yellow_par') ? ' is-invalid' : '' }}" name="hole_11_yellow_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_12_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_12_yellow_par') ? ' is-invalid' : '' }}" name="hole_12_yellow_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_13_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_13_yellow_par') ? ' is-invalid' : '' }}" name="hole_13_yellow_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_14_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_14_yellow_par') ? ' is-invalid' : '' }}" name="hole_14_yellow_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_15_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_15_yellow_par') ? ' is-invalid' : '' }}" name="hole_15_yellow_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_16_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_16_yellow_par') ? ' is-invalid' : '' }}" name="hole_16_yellow_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_17_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_17_yellow_par') ? ' is-invalid' : '' }}" name="hole_17_yellow_par" value="">
                            </div>

                            <div class="col">
                                <input id="hole_18_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_18_yellow_par') ? ' is-invalid' : '' }}" name="hole_18_yellow_par" value="">
                            </div>                                                                                                                                                                                                                                                          

                            <div class="col">
                                <span id="secondYellowPar"></span>               
                            </div>   

                        </div>
                        <!-- /.row -->       

                        <div class="row add-course-row ">

                            <div class="col col-lg-2">
                                <h4>Stroke Index</h4>
                            </div>

                            <div class="col">
                            <input id="hole_10_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_10_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_10_yellow_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_11_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_11_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_11_yellow_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_12_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_12_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_12_yellow_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_13_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_13_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_13_yellow_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_14_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_14_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_14_yellow_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_15_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_15_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_15_yellow_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_16_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_16_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_16_yellow_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_17_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_17_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_17_yellow_stroke_index" value="">
                            </div>

                            <div class="col">
                                <input id="hole_18_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_18_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_18_yellow_stroke_index" value="">
                            </div>                                                                                                                                                                                                                                                          

                            <div class="col">
                                <span>-</span>               
                            </div>   

                        </div>
                        <!-- /.row -->

                    <br />
@endif                    
             
@if($selected_size === '27')

                    <h3>Third Nine</h3>  

                    <div class="row add-course-row add-course-hole">

                        <div class="col col-lg-2">
                            <h4>Hole</h4>
                        </div>

                        <div class="col">
                            <span>1</span>
                        </div>

                        <div class="col">
                            <span>2</span>
                        </div>

                        <div class="col">
                            <span>3</span>
                        </div>

                        <div class="col">
                            <span>4</span>
                        </div>

                        <div class="col">
                            <span>5</span>
                        </div>

                        <div class="col">
                            <span>6</span>
                        </div>

                        <div class="col">
                            <span>7</span>
                        </div>

                        <div class="col">
                            <span>8</span>
                        </div>

                        <div class="col">
                            <span>9</span>
                        </div>  

                        <div class="col">
                            <span>Total</span>
                        </div>                                                                                                                                                                                                                                                                                  


                    </div>
                    <!-- /.row -->

                    <div class="row add-course-row ">

                        <div class="col col-lg-2">
                            <h4>Yards</h4>
                        </div>

                        <div class="col">
                            <input id="hole_19_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_19_yellow') ? ' is-invalid' : '' }}" name="hole_19_yellow" value="">
                        </div>                              

                        <div class="col">
                            <input id="hole_20_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_20_yellow') ? ' is-invalid' : '' }}" name="hole_20_yellow" value="">
                        </div>

                        <div class="col">
                            <input id="hole_22_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_22_yellow') ? ' is-invalid' : '' }}" name="hole_22_yellow" value="">
                        </div>

                        <div class="col">
                            <input id="hole_22_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_22_yellow') ? ' is-invalid' : '' }}" name="hole_22_yellow" value="">
                        </div>

                        <div class="col">
                            <input id="hole_23_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_23_yellow') ? ' is-invalid' : '' }}" name="hole_23_yellow" value="">
                        </div>

                        <div class="col">
                            <input id="hole_24_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_24_yellow') ? ' is-invalid' : '' }}" name="hole_24_yellow" value="">
                        </div>

                        <div class="col">
                            <input id="hole_25_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_25_yellow') ? ' is-invalid' : '' }}" name="hole_25_yellow" value="">
                        </div>

                        <div class="col">
                            <input id="hole_26_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_26_yellow') ? ' is-invalid' : '' }}" name="hole_26_yellow" value="">
                        </div>

                        <div class="col">
                            <input id="hole_27_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_27_yellow') ? ' is-invalid' : '' }}" name="hole_27_yellow" value="">
                        </div>

                        <div class="col">
                            <span id="thirdYellowYards"></span>
                        </div>                                                                                                                                                                                                                                                    


                    </div>
                    <!-- /.row --> 

                    <div class="row add-course-row ">

                        <div class="col col-lg-2">
                            <h4>Par</h4>
                        </div>

                        <div class="col">
                            <input id="hole_19_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_19_yellow_par') ? ' is-invalid' : '' }}" name="hole_19_yellow_par" value="">
                        </div>                              

                        <div class="col">
                            <input id="hole_20_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_20_yellow_par') ? ' is-invalid' : '' }}" name="hole_20_yellow_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_22_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_22_yellow_par') ? ' is-invalid' : '' }}" name="hole_22_yellow_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_22_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_22_yellow_par') ? ' is-invalid' : '' }}" name="hole_22_yellow_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_23_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_23_yellow_par') ? ' is-invalid' : '' }}" name="hole_23_yellow_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_24_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_24_yellow_par') ? ' is-invalid' : '' }}" name="hole_24_yellow_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_25_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_25_yellow_par') ? ' is-invalid' : '' }}" name="hole_25_yellow_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_26_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_26_yellow_par') ? ' is-invalid' : '' }}" name="hole_26_yellow_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_27_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_27_yellow_par') ? ' is-invalid' : '' }}" name="hole_27_yellow_par" value="">
                        </div>

                        <div class="col">
                            <span id="thirdYellowPar"></span>
                        </div>                                                                                                                                                                                                                                                       


                    </div>
                    <!-- /.row -->       

                    <div class="row add-course-row ">

                        <div class="col col-lg-2">
                            <h4>Stroke Index Front</h4>
                        </div>

                        <div class="col">
                            <input id="hole_19_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_19_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_19_yellow_stroke_index_front" value="">
                        </div>     

                        <div class="col">
                            <input id="hole_20_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_20_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_20_yellow_stroke_index_front" value="">
                        </div>

                        <div class="col">
                            <input id="hole_22_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_22_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_22_yellow_stroke_index_front" value="">
                        </div>

                        <div class="col">
                            <input id="hole_22_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_22_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_22_yellow_stroke_index_front" value="">
                        </div>

                        <div class="col">
                            <input id="hole_23_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_23_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_23_yellow_stroke_index_front" value="">
                        </div>

                        <div class="col">
                            <input id="hole_24_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_24_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_24_yellow_stroke_index_front" value="">
                        </div>

                        <div class="col">
                            <input id="hole_25_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_25_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_25_yellow_stroke_index_front" value="">
                        </div>

                        <div class="col">
                            <input id="hole_26_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_26_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_26_yellow_stroke_index_front" value="">
                        </div>

                        <div class="col">
                            <input id="hole_27_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_27_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_27_yellow_stroke_index_front" value="">
                        </div>                                                                                                                                                                                                                                                     

                        <div class="col">
                            <span>-</span>
                        </div> 

                    </div>
                    <!-- /.row -->  

                    <div class="row add-course-row ">

                        <div class="col col-lg-2">
                            <h4>Stroke Index Back</h4>
                        </div>

                        <div class="col">
                            <input id="hole_19_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_19_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_19_yellow_stroke_index_back" value="">
                        </div>     

                        <div class="col">
                            <input id="hole_20_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_20_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_20_yellow_stroke_index_back" value="">

                        </div>

                        <div class="col">
                            <input id="hole_22_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_22_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_22_yellow_stroke_index_back" value="">
                        </div>

                        <div class="col">
                            <input id="hole_22_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_22_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_22_yellow_stroke_index_back" value="">
                        </div>

                        <div class="col">
                            <input id="hole_23_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_23_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_23_yellow_stroke_index_back" value="">
                        </div>

                        <div class="col">
                            <input id="hole_24_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_24_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_24_yellow_stroke_index_back" value="">
                        </div>

                        <div class="col">
                            <input id="hole_25_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_25_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_25_yellow_stroke_index_back" value="">
                        </div>

                        <div class="col">
                            <input id="hole_26_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_26_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_26_yellow_stroke_index_back" value="">
                        </div>

                        <div class="col">
                            <input id="hole_27_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_27_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_27_yellow_stroke_index_back" value="">
                        </div>                                                                                                                                                                                                                                                     

                        <div class="col">
                            <span>-</span>
                        </div> 

                    </div>
                    <!-- /.row -->                                             
@endif
                    </div>                    
                        
                </div>
                <!--/.dropdown -->

                    
                <div class="add-tee-box red-tees">
                
                
                    <button class="btn btn-block btn-collapse collapsed" type="button" data-toggle="collapse" data-target="#redTees" aria-expanded="true" aria-controls="redTees">
                        <i class="far"></i> Red Tees
                    </button>

                    <div class="collapse" id="redTees">

                        @if($selected_size === '9')
                            <div class="form-group">
                                <label>SSS</label>
                                <input id="red_half_sss" type="text" class="form-control {{ $errors->has('red_half_sss') ? ' is-invalid' : '' }}" name="red_half_sss" value=""> 
                            </div>                                              
                        @elseif($selected_size === '18')
                            <div class="form-group">
                                <label>SSS</label>
                                <input id="red_sss" type="text" class="form-control {{ $errors->has('red_sss') ? ' is-invalid' : '' }}" name="red_sss" value=""> 
                            </div>    
                        @endif

                        @if($selected_size === '27')

                            <h3>First Nine</h3>
                        
                        @elseif($selected_size === '18') 

                            <h3>Front Nine</h3>

                        @else

                        @endif

                    <div class="row add-course-row add-course-hole">

                        <div class="col col-lg-2">
                            <h4>Hole</h4>
                        </div>

                        <div class="col">
                            <span>1</span>
                        </div>

                        <div class="col">
                            <span>2</span>
                        </div>

                        <div class="col">
                            <span>3</span>
                        </div>

                        <div class="col">
                            <span>4</span>
                        </div>

                        <div class="col">
                            <span>5</span>
                        </div>

                        <div class="col">
                            <span>6</span>
                        </div>

                        <div class="col">
                            <span>7</span>
                        </div>

                        <div class="col">
                            <span>8</span>
                        </div>

                        <div class="col">
                            <span>9</span>
                        </div>                                                                                                                                                                                                                                                          

                        <div class="col">
                            <span>Total</span>
                        </div>   

                    </div>
                    <!-- /.row -->

                    <div class="row add-course-row ">

                        <div class="col col-lg-2">
                            <h4>Yards</h4>
                        </div>

                        <div class="col">
                            <input id="hole_1_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_1_red') ? ' is-invalid' : '' }}" name="hole_1_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_2_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_2_red') ? ' is-invalid' : '' }}" name="hole_2_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_3_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_3_red') ? ' is-invalid' : '' }}" name="hole_3_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_4_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_4_red') ? ' is-invalid' : '' }}" name="hole_4_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_5_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_5_red') ? ' is-invalid' : '' }}" name="hole_5_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_6_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_6_red') ? ' is-invalid' : '' }}" name="hole_6_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_7_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_7_red') ? ' is-invalid' : '' }}" name="hole_7_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_8_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_8_red') ? ' is-invalid' : '' }}" name="hole_8_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_9_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_9_red') ? ' is-invalid' : '' }}" name="hole_9_red" value="">
                        </div>   

                        <div class="col">
                            <span id="firstRedYards"></span>
                        </div>                                                                                                                                                                                                                                                                                 


                    </div>
                    <!-- /.row --> 

                    <div class="row add-course-row ">

                        <div class="col col-lg-2">
                            <h4>Par</h4>
                        </div>

                        <div class="col">
                            <input id="hole_1_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_1_red_par') ? ' is-invalid' : '' }}" name="hole_1_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_2_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_2_red_par') ? ' is-invalid' : '' }}" name="hole_2_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_3_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_3_red_par') ? ' is-invalid' : '' }}" name="hole_3_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_4_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_4_red_par') ? ' is-invalid' : '' }}" name="hole_4_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_5_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_5_red_par') ? ' is-invalid' : '' }}" name="hole_5_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_6_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_6_red_par') ? ' is-invalid' : '' }}" name="hole_6_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_7_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_7_red_par') ? ' is-invalid' : '' }}" name="hole_7_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_8_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_8_red_par') ? ' is-invalid' : '' }}" name="hole_8_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_9_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_9_red_par') ? ' is-invalid' : '' }}" name="hole_9_red_par" value="">
                        </div>                                                                                                                                                                                                                                                          

                        <div class="col">
                            <span id="firstRedPar"></span>
                        </div>    

                    </div>
                    <!-- /.row -->       

                    <div class="row add-course-row ">

                        <div class="col col-lg-2">
                            <h4>Stroke Index</h4>
                        </div>

                        <div class="col">
                        <td><input id="hole_1_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_1_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_1_red_stroke_index" value="">
                        </div>

                        <div class="col">
                            <input id="hole_2_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_2_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_2_red_stroke_index" value="">
                        </div>

                        <div class="col">
                            <input id="hole_3_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_3_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_3_red_stroke_index" value="">
                        </div>

                        <div class="col">
                            <input id="hole_4_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_4_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_4_red_stroke_index" value="">
                        </div>

                        <div class="col">
                            <input id="hole_5_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_5_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_5_red_stroke_index" value="">
                        </div>

                        <div class="col">
                            <input id="hole_6_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_6_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_6_red_stroke_index" value="">
                        </div>

                        <div class="col">
                            <input id="hole_7_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_7_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_7_red_stroke_index" value="">
                        </div>

                        <div class="col">
                            <input id="hole_8_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_8_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_8_red_stroke_index" value="">
                        </div>

                        <div class="col">
                            <input id="hole_9_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_9_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_9_red_stroke_index" value="">
                        </div>                                                                                                                                                                                                                                                          

                        <div class="col">
                            <span>-</span>
                        </div>   

                    </div>
                    <!-- /.row -->                                                                       

                    <br />

@if($selected_size === '18' || $selected_size === '27') 

                        @if($selected_size === '27')

                            <h3>Second Nine</h3>
                        
                        @elseif($selected_size === '18') 

                            <h3>Back Nine</h3>

                        @else

                        @endif

                    <div class="row add-course-row add-course-hole">

                        <div class="col col-lg-2">
                            <h4>Hole</h4>
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>1</span>
                            @else
                                <span>10</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>2</span>
                            @else
                                <span>11</span>
                            @endif

                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>3</span>
                            @else
                                <span>12</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>4</span>
                            @else
                                <span>13</span>
                            @endif                           

                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>5</span>
                            @else
                                <span>14</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>6</span>
                            @else
                                <span>15</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>7</span>
                            @else
                                <span>16</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>8</span>
                            @else
                                <span>17</span>
                            @endif
                            
                        </div>

                        <div class="col">

                            @if($selected_size === '27') 
                                <span>9</span>
                            @else
                                <span>18</span>
                            @endif
                            
                        </div>  

                        <div class="col">
                            <span>Total</span>
                        </div>                                                                                                                                                                                                                                                                                 


                    </div>
                    <!-- /.row -->

                    <div class="row add-course-row ">

                        <div class="col col-lg-2">
                            <h4>Yards</h4>
                        </div>

                        <div class="col">
                            <input id="hole_10_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_10_red') ? ' is-invalid' : '' }}" name="hole_10_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_11_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_11_red') ? ' is-invalid' : '' }}" name="hole_11_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_12_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_12_red') ? ' is-invalid' : '' }}" name="hole_12_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_13_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_13_red') ? ' is-invalid' : '' }}" name="hole_13_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_14_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_14_red') ? ' is-invalid' : '' }}" name="hole_14_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_15_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_15_red') ? ' is-invalid' : '' }}" name="hole_15_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_16_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_16_red') ? ' is-invalid' : '' }}" name="hole_16_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_17_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_17_red') ? ' is-invalid' : '' }}" name="hole_17_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_18_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_18_red') ? ' is-invalid' : '' }}" name="hole_18_red" value="">
                        </div>   

                        <div class="col">
                            <span id="secondRedYards"></span>
                        </div>                                                                                                                                                                                                                                                                                


                    </div>
                    <!-- /.row --> 

                    <div class="row add-course-row ">

                        <div class="col col-lg-2">
                            <h4>Par</h4>
                        </div>

                        <div class="col">
                            <input id="hole_10_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_10_red_par') ? ' is-invalid' : '' }}" name="hole_10_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_11_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_11_red_par') ? ' is-invalid' : '' }}" name="hole_11_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_12_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_12_red_par') ? ' is-invalid' : '' }}" name="hole_12_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_13_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_13_red_par') ? ' is-invalid' : '' }}" name="hole_13_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_14_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_14_red_par') ? ' is-invalid' : '' }}" name="hole_14_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_15_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_15_red_par') ? ' is-invalid' : '' }}" name="hole_15_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_16_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_16_red_par') ? ' is-invalid' : '' }}" name="hole_16_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_17_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_17_red_par') ? ' is-invalid' : '' }}" name="hole_17_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_18_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_18_red_par') ? ' is-invalid' : '' }}" name="hole_18_red_par" value="">
                        </div>   

                        <div class="col">
                            <span id="secondRedPar"></span>
                        </div>                                                                                                                                                                                                                                                                                    


                    </div>
                    <!-- /.row -->       

                    <div class="row add-course-row ">

                        <div class="col col-lg-2">
                            <h4>Stroke Index</h4>
                        </div>

                        <div class="col">
                        <input id="hole_10_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_10_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_10_red_stroke_index" value="">
                        </div>

                        <div class="col">
                            <input id="hole_11_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_11_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_11_red_stroke_index" value="">
                        </div>

                        <div class="col">
                            <input id="hole_12_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_12_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_12_red_stroke_index" value="">
                        </div>

                        <div class="col">
                            <input id="hole_13_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_13_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_13_red_stroke_index" value="">
                        </div>

                        <div class="col">
                            <input id="hole_14_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_14_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_14_red_stroke_index" value="">
                        </div>

                        <div class="col">
                            <input id="hole_15_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_15_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_15_red_stroke_index" value="">
                        </div>

                        <div class="col">
                            <input id="hole_16_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_16_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_16_red_stroke_index" value="">
                        </div>

                        <div class="col">
                            <input id="hole_17_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_17_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_17_red_stroke_index" value="">
                        </div>

                        <div class="col">
                            <input id="hole_18_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_18_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_18_red_stroke_index" value="">
                        </div>                                                                                                                                                                                                                                                          

                        <div class="col">
                            <span>-</span>
                        </div>    

                    </div>
                    <!-- /.row -->                  

                    <br />
@endif                    

@if($selected_size === '27')  

                        <h3>Third Nine</h3>  

                    <div class="row add-course-row add-course-hole">

                        <div class="col col-lg-2">
                            <h4>Hole</h4>
                        </div>

                        <div class="col">
                            <span>1</span>
                        </div>

                        <div class="col">
                            <span>2</span>
                        </div>

                        <div class="col">
                            <span>3</span>
                        </div>

                        <div class="col">
                            <span>4</span>
                        </div>

                        <div class="col">
                            <span>5</span>
                        </div>

                        <div class="col">
                            <span>6</span>
                        </div>

                        <div class="col">
                            <span>7</span>
                        </div>

                        <div class="col">
                            <span>8</span>
                        </div>

                        <div class="col">
                            <span>9</span>
                        </div>   

                        <div class="col">
                            <span>Total</span>
                        </div>                                                                                                                                                                                                                                                                                


                    </div>
                    <!-- /.row -->

                    <div class="row add-course-row ">

                        <div class="col col-lg-2">
                            <h4>Yards</h4>
                        </div>

                        <div class="col">
                            <input id="hole_19_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_19_red') ? ' is-invalid' : '' }}" name="hole_19_red" value="">
                        </div>                              

                        <div class="col">
                            <input id="hole_20_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_20_red') ? ' is-invalid' : '' }}" name="hole_20_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_22_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_22_red') ? ' is-invalid' : '' }}" name="hole_22_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_22_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_22_red') ? ' is-invalid' : '' }}" name="hole_22_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_23_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_23_red') ? ' is-invalid' : '' }}" name="hole_23_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_24_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_24_red') ? ' is-invalid' : '' }}" name="hole_24_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_25_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_25_red') ? ' is-invalid' : '' }}" name="hole_25_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_26_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_26_red') ? ' is-invalid' : '' }}" name="hole_26_red" value="">
                        </div>

                        <div class="col">
                            <input id="hole_27_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_27_red') ? ' is-invalid' : '' }}" name="hole_27_red" value="">
                        </div>

                        <div class="col">
                            <span id="thirdRedYards"></span>
                        </div>                                                                                                                                                                                                                                                   


                    </div>
                    <!-- /.row --> 

                    <div class="row add-course-row ">

                        <div class="col col-lg-2">
                            <h4>Par</h4>
                        </div>

                        <div class="col">
                            <input id="hole_19_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_19_red_par') ? ' is-invalid' : '' }}" name="hole_19_red_par" value="">
                        </div>                              

                        <div class="col">
                            <input id="hole_20_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_20_red_par') ? ' is-invalid' : '' }}" name="hole_20_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_22_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_22_red_par') ? ' is-invalid' : '' }}" name="hole_22_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_22_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_22_red_par') ? ' is-invalid' : '' }}" name="hole_22_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_23_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_23_red_par') ? ' is-invalid' : '' }}" name="hole_23_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_24_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_24_red_par') ? ' is-invalid' : '' }}" name="hole_24_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_25_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_25_red_par') ? ' is-invalid' : '' }}" name="hole_25_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_26_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_26_red_par') ? ' is-invalid' : '' }}" name="hole_26_red_par" value="">
                        </div>

                        <div class="col">
                            <input id="hole_27_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_27_red_par') ? ' is-invalid' : '' }}" name="hole_27_red_par" value="">
                        </div>

                        <div class="col">
                            <span id="thirdRedPar"></span>
                        </div>                                                                                                                                                                                                                                                     


                    </div>
                    <!-- /.row -->       

                    <div class="row add-course-row ">

                        <div class="col col-lg-2">
                            <h4>Stroke Index Front</h4>
                        </div>

                        <div class="col">
                            <input id="hole_19_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_19_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_19_red_stroke_index_front" value="">
                        </div>     

                        <div class="col">
                            <input id="hole_20_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_20_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_20_red_stroke_index_front" value="">
                        </div>

                        <div class="col">
                            <input id="hole_22_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_22_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_22_red_stroke_index_front" value="">
                        </div>

                        <div class="col">
                            <input id="hole_22_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_22_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_22_red_stroke_index_front" value="">
                        </div>

                        <div class="col">
                            <input id="hole_23_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_23_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_23_red_stroke_index_front" value="">
                        </div>

                        <div class="col">
                            <input id="hole_24_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_24_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_24_red_stroke_index_front" value="">
                        </div>

                        <div class="col">
                            <input id="hole_25_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_25_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_25_red_stroke_index_front" value="">
                        </div>

                        <div class="col">
                            <input id="hole_26_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_26_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_26_red_stroke_index_front" value="">
                        </div>

                        <div class="col">
                            <input id="hole_27_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_27_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_27_red_stroke_index_front" value="">
                        </div>                                                                                                                                                                                                                                                     

                        <div class="col">
                            <span>-</span>
                        </div> 

                    </div>
                    <!-- /.row -->  

                    <div class="row add-course-row ">

                        <div class="col col-lg-2">
                            <h4>Stroke Index Back</h4>
                        </div>

                        <div class="col">
                            <input id="hole_19_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_19_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_19_red_stroke_index_back" value="">
                        </div>     

                        <div class="col">
                            <input id="hole_20_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_20_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_20_red_stroke_index_back" value="">

                        </div>

                        <div class="col">
                            <input id="hole_22_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_22_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_22_red_stroke_index_back" value="">
                        </div>

                        <div class="col">
                            <input id="hole_22_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_22_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_22_red_stroke_index_back" value="">
                        </div>

                        <div class="col">
                            <input id="hole_23_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_23_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_23_red_stroke_index_back" value="">
                        </div>

                        <div class="col">
                            <input id="hole_24_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_24_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_24_red_stroke_index_back" value="">
                        </div>

                        <div class="col">
                            <input id="hole_25_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_25_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_25_red_stroke_index_back" value="">
                        </div>

                        <div class="col">
                            <input id="hole_26_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_26_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_26_red_stroke_index_back" value="">
                        </div>

                        <div class="col">
                            <input id="hole_27_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_27_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_27_red_stroke_index_back" value="">
                        </div>                                                                                                                                                                                                                                                     

                        <div class="col">
                            <span>-</span>
                        </div>

                    </div>
                    <!-- /.row -->    

@endif

                    </div>                    

                </div>

@if($selected_size === '27')
<hr />
<br />
        <p>As 27 hole courses allow you to play different sets of nine they also provide an SSS for each combination of nine holes, and for each set of tee's in those combinations. They are usually found on the courses scorecard in the top right hand corner.</p>
        <br />                

        <div class="row text-center">

            <div class="col-12 col-lg">

                <div class="form-group">

                    <label>First Nine & Second Nine SSS</label>

                    <div class="row sm-gutters sss-yards-row">
                    
                        <div class="col white">
                            <label>White</label>
                            <input id="white_first_second_sss" type="text" class="form-control {{ $errors->has('white_first_second_sss') ? ' is-invalid' : '' }}" name="white_first_second_sss" value=""> 
                        </div>

                        <div class="col yellow">
                            <label>Yellow</label>
                            <input id="yellow_first_second_sss" type="text" class="form-control {{ $errors->has('yellow_first_second_sss') ? ' is-invalid' : '' }}" name="yellow_first_second_sss" value=""> 
                        </div>

                        <div class="col red">
                            <label>Red</label>
                            <input id="red_first_second_sss" type="text" class="form-control {{ $errors->has('red_first_second_sss') ? ' is-invalid' : '' }}" name="red_first_second_sss" value=""> 
                        </div>                                                                

                    </div>
                    <!--/.row -->

                    
                </div> 

            </div>

            <div class="col-12 col-lg">

                <div class="form-group">

                    <label>Second Nine & Third Nine SSS</label>

                    <div class="row sm-gutters sss-yards-row">
                        
                        <div class="col white">
                            <label>White</label>
                            <input id="white_second_third_sss" type="text" class="form-control {{ $errors->has('white_second_third_sss') ? ' is-invalid' : '' }}" name="white_second_third_sss" value=""> 
                        </div>

                        <div class="col yellow">
                            <label>Yellow</label>                                
                            <input id="yellow_second_third_sss" type="text" class="form-control {{ $errors->has('yellow_second_third_sss') ? ' is-invalid' : '' }}" name="yellow_second_third_sss" value=""> 
                        </div>

                        <div class="col red">
                            <label>Red</label>
                            <input id="red_second_third_sss" type="text" class="form-control {{ $errors->has('red_second_third_sss') ? ' is-invalid' : '' }}" name="red_second_third_sss" value=""> 
                        </div>                                                                

                    </div>
                    <!--/.row -->

                </div> 

            </div>

            <div class="col-12 col-lg">

                <div class="form-group">
                    <label>First Nine & Third Nine SSS</label>


                    <div class="row sm-gutters sss-yards-row">
                        
                        <div class="col white">
                            <label>White</label>                                
                            <input id="white_first_third_sss" type="text" class="form-control {{ $errors->has('white_first_third_sss') ? ' is-invalid' : '' }}" name="white_first_third_sss" value=""> 
                        </div>

                        <div class="col yellow">
                            <label>Yellow</label>                                
                            <input id="yellow_first_third_sss" type="text" class="form-control {{ $errors->has('yellow_first_third_sss') ? ' is-invalid' : '' }}" name="yellow_first_third_sss" value=""> 
                        </div>

                        <div class="col red">
                            <label>Red</label>
                            <input id="red_first_third_sss" type="text" class="form-control {{ $errors->has('red_first_third_sss') ? ' is-invalid' : '' }}" name="red_first_third_sss" value=""> 
                        </div>                                                                

                    </div>
                    <!--/.row -->

                </div> 

            </div>  

        </div>
        <!--/.row -->   
                                            
                
@endif                
                 