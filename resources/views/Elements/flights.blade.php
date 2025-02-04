<div class="theme-hero-area front">
    <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg theme-hero-area-bg-blur" style="background-image:url(./img/1500x800.png);"></div>
        <div class="theme-hero-area-mask theme-hero-area-mask-half"></div>
    </div>
    <div class="theme-hero-area-body">
        <div class="container">
            <div class="_pb-50 _pt-100 _pv-mob-50">
                <div class="theme-search-area _mob-h theme-search-area-white">
                    <div class="theme-search-area-header _mb-20">
                        <h1 class="theme-search-area-title theme-search-area-title-sm">265 Flights to Lodon</h1>
                    </div>
                    <div class="theme-search-area-form" id="hero-search-form">
                        <div class="row" data-gutter="10">
                            <div class="col-md-5 ">
                                <div class="row" data-gutter="10">
                                    <div class="col-md-6 ">
                                        <div
                                            class="theme-search-area-section first theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                                            <label class="theme-search-area-section-label _op-06">From</label>
                                            <div class="theme-search-area-section-inner">
                                                <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                                <input class="theme-search-area-section-input typeahead"
                                                       value="{{$location_from}}" type="text"
                                                       placeholder="Departure" data-provide="typeahead"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div
                                            class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                                            <label class="theme-search-area-section-label _op-06">To</label>
                                            <div class="theme-search-area-section-inner">
                                                <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                                <input class="theme-search-area-section-input typeahead"
                                                       value="{{$location_to}}" type="text" placeholder="Arrival"
                                                       data-provide="typeahead"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="row" data-gutter="10">
                                    <div class="col-md-5 ">
                                        <div
                                            class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                                            <label class="theme-search-area-section-label _op-06">Depart</label>
                                            <div class="theme-search-area-section-inner">
                                                <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                                <input class="theme-search-area-section-input datePickerStart _mob-h"
                                                       value="2020-02-15" type="text" placeholder="Check-in"/>
                                                <input class="theme-search-area-section-input _desk-h mobile-picker"
                                                       value="2018-06-27" type="date"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 ">
                                        <div
                                            class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border quantity-selector"
                                            data-increment="Passengers">
                                            <label class="theme-search-area-section-label _op-06">Passengers</label>
                                            <div class="theme-search-area-section-inner">
                                                <i class="theme-search-area-section-icon lin lin-people"></i>
                                                <input class="theme-search-area-section-input" value="1 Passenger"
                                                       type="text"/>
                                                <div class="quantity-selector-box" id="FlySearchPassengers">
                                                    <div class="quantity-selector-inner">
                                                        <p class="quantity-selector-title">Passengers</p>
                                                        <ul class="quantity-selector-controls">
                                                            <li class="quantity-selector-decrement">
                                                                <a href="#">&#45;</a>
                                                            </li>
                                                            <li class="quantity-selector-current">1</li>
                                                            <li class="quantity-selector-increment">
                                                                <a href="#">&#43;</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 ">
                                <button
                                    class="theme-search-area-submit _tt-uc theme-search-area-submit-curved theme-search-area-submit-sm theme-search-area-submit-no-border theme-search-area-submit-primary">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="theme-search-area-options clearfix">
                        <div class="btn-group theme-search-area-options-list" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="flight-options" id="flight-option-1" checked/>Round Trip
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="flight-options" id="flight-option-2"/>One Way
                            </label>
                        </div>
                    </div>
                </div>
                <div class="theme-search-area-inline _desk-h theme-search-area-inline-white">
                    <h4 class="theme-search-area-inline-title">Lodon Flights</h4>
                    <p class="theme-search-area-inline-details">June 27 &rarr; July 02, 1 Passnger</p>
                    <a class="theme-search-area-inline-link magnific-inline" href="#searchEditModal">
                        <i class="fa fa-pencil"></i>Edit
                    </a>
                    <div class="magnific-popup magnific-popup-sm mfp-hide" id="searchEditModal">
                        <div class="theme-search-area theme-search-area-vert">
                            <div class="theme-search-area-header">
                                <h1 class="theme-search-area-title theme-search-area-title-sm">Edit your Search</h1>
                                <p class="theme-search-area-subtitle">Prices might be different from current results</p>
                            </div>
                            <div class="theme-search-area-form">
                                <div class="theme-search-area-section first theme-search-area-section-curved">
                                    <label class="theme-search-area-section-label">From</label>
                                    <div class="theme-search-area-section-inner">
                                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                        <input class="theme-search-area-section-input typeahead" value="New York"
                                               type="text" placeholder="Departure" data-provide="typeahead"/>
                                    </div>
                                </div>
                                <div class="theme-search-area-section theme-search-area-section-curved">
                                    <label class="theme-search-area-section-label">To</label>
                                    <div class="theme-search-area-section-inner">
                                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                        <input class="theme-search-area-section-input typeahead" type="text"
                                               placeholder="Arrival" data-provide="typeahead"/>
                                    </div>
                                </div>
                                <div class="row" data-gutter="10">
                                    <div class="col-md-6 ">
                                        <div class="theme-search-area-section theme-search-area-section-curved">
                                            <label class="theme-search-area-section-label">Depart</label>
                                            <div class="theme-search-area-section-inner">
                                                <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                                <input class="theme-search-area-section-input datePickerStart _mob-h"
                                                       value="Wed 06/27" type="text" placeholder="Check-in"/>
                                                <input class="theme-search-area-section-input _desk-h mobile-picker"
                                                       value="2018-06-27" type="date"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="theme-search-area-section theme-search-area-section-curved">
                                            <label class="theme-search-area-section-label">Arrival</label>
                                            <div class="theme-search-area-section-inner">
                                                <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                                <input class="theme-search-area-section-input datePickerEnd _mob-h"
                                                       value="Mon 07/02" type="text" placeholder="Check-out"/>
                                                <input class="theme-search-area-section-input _desk-h mobile-picker"
                                                       value="2018-07-02" type="date"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="theme-search-area-section theme-search-area-section-curved quantity-selector"
                                    data-increment="Passengers">
                                    <label class="theme-search-area-section-label">Passengers</label>
                                    <div class="theme-search-area-section-inner">
                                        <i class="theme-search-area-section-icon lin lin-people"></i>
                                        <input class="theme-search-area-section-input" value="1 Passenger" type="text"/>
                                        <div class="quantity-selector-box" id="mobile-FlySearchPassengers">
                                            <div class="quantity-selector-inner">
                                                <p class="quantity-selector-title">Passengers</p>
                                                <ul class="quantity-selector-controls">
                                                    <li class="quantity-selector-decrement">
                                                        <a href="#">&#45;</a>
                                                    </li>
                                                    <li class="quantity-selector-current">1</li>
                                                    <li class="quantity-selector-increment">
                                                        <a href="#">&#43;</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-curved">
                                    Change
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="theme-page-section theme-page-section-gray">
    <div class="container">
        <div class="row row-col-static" id="sticky-parent" data-gutter="20">
            <div class="col-md-2-5 ">
                <div class="sticky-col _mob-h">
                    <div class="theme-search-results-sidebar">
                        <div class="theme-search-results-sidebar-sections _mb-20 _br-2">
                            <div class="theme-search-results-sidebar-section">
                                <h5 class="theme-search-results-sidebar-section-title">Stops</h5>
                                <div class="theme-search-results-sidebar-section-checkbox-list">
                                    <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">nonstop</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$305</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">1 stop</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$349</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">2 stops</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$154</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-search-results-sidebar-section">
                                <h5 class="theme-search-results-sidebar-section-title">Flight Class</h5>
                                <div class="theme-search-results-sidebar-section-checkbox-list">
                                    <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Economy</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$375</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Business</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$292</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">First</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$332</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-search-results-sidebar-section">
                                <h5 class="theme-search-results-sidebar-section-title">Price</h5>
                                <div class="theme-search-results-sidebar-section-price">
                                    <input id="price-slider" name="price-slider" data-min="100" data-max="500"/>
                                </div>
                            </div>
                            <div class="theme-search-results-sidebar-section">
                                <h5 class="theme-search-results-sidebar-section-title">Take-off London</h5>
                                <div class="theme-search-results-sidebar-section-checkbox-list">
                                    <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Morning
                              <span class="icheck-sub-title">05:00am - 11:59am</span>
                            </span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$466</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Afternoon
                              <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                            </span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$256</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Evening
                              <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                            </span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$257</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-search-results-sidebar-section">
                                <h5 class="theme-search-results-sidebar-section-title">Landing New York</h5>
                                <div class="theme-search-results-sidebar-section-checkbox-list">
                                    <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Morning
                              <span class="icheck-sub-title">05:00am - 11:59am</span>
                            </span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$404</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Afternoon
                              <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                            </span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$216</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Evening
                              <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                            </span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$286</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-search-results-sidebar-section">
                                <h5 class="theme-search-results-sidebar-section-title">Take-off New York</h5>
                                <div class="theme-search-results-sidebar-section-checkbox-list">
                                    <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Morning
                              <span class="icheck-sub-title">05:00am - 11:59am</span>
                            </span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$411</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Afternoon
                              <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                            </span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$386</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Evening
                              <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                            </span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$285</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-search-results-sidebar-section">
                                <h5 class="theme-search-results-sidebar-section-title">Landing London</h5>
                                <div class="theme-search-results-sidebar-section-checkbox-list">
                                    <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Morning
                              <span class="icheck-sub-title">05:00am - 11:59am</span>
                            </span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$469</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Afternoon
                              <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                            </span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$248</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Evening
                              <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                            </span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$190</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-search-results-sidebar-section">
                                <h5 class="theme-search-results-sidebar-section-title">London Airport</h5>
                                <div class="theme-search-results-sidebar-section-checkbox-list">
                                    <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">CLY: City</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$336</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">LHR: Heathrow</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$229</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">LCW: Gatwich</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$403</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">STN: Stansed</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$405</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">SEN: Southend</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$319</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-search-results-sidebar-section">
                                <h5 class="theme-search-results-sidebar-section-title">New York Airport</h5>
                                <div class="theme-search-results-sidebar-section-checkbox-list">
                                    <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">JFK: John F. Kennedy</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$366</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">LGA: LaGuardia</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$257</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">EWR: Newark Liberty</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$424</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-search-results-sidebar-section">
                                <h5 class="theme-search-results-sidebar-section-title">Airlines</h5>
                                <div class="theme-search-results-sidebar-section-checkbox-list">
                                    <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">KLM Royal Dutch...</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$127</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">LOT Polish Airlines</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$261</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Wow Airlines</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$423</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Virgin Atlantic...</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$268</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Delta Airlines</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$425</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">SWISS Airlines</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$403</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Lufthansa</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$469</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">American Airlines</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$319</span>
                                        </div>
                                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                            <label class="icheck-label">
                                                <input class="icheck" type="checkbox"/>
                                                <span class="icheck-title">Fly Emirates</span>
                                            </label>
                                            <span
                                                class="theme-search-results-sidebar-section-checkbox-list-amount">$105</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="theme-ad">
                        <a class="theme-ad-link" href="#"></a>
                        <p class="theme-ad-sign">Advertisement</p>
                        <img class="theme-ad-img" src="./img/300x500.png" alt="Image Alternative text"
                             title="Image Title"/>
                    </div>
                </div>
            </div>
            <div class="col-md-7 ">
                <div class="theme-search-results-sort _mob-h clearfix">
                    <h5 class="theme-search-results-sort-title">Sort by:</h5>
                    <ul class="theme-search-results-sort-list">
                        <li>
                            <a href="#">Price
                                <span>Low &rarr; High</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#">Duration
                                <span>Long &rarr; Short</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Recommended
                                <span>High &rarr; Low</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Airline Name
                                <span>Name &nbsp; A &rarr; Z</span>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown theme-search-results-sort-alt">
                        <a id="dropdownMenu" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false" href="#">More
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                            <li>
                                <a href="#">Departure take-off</a>
                            </li>
                            <li>
                                <a href="#">Departure landing</a>
                            </li>
                            <li>
                                <a href="#">Return take-off</a>
                            </li>
                            <li>
                                <a href="#">Return landing</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="theme-search-results-sort-select _desk-h">
                    <select>
                        <option>Price</option>
                        <option>Duration</option>
                        <option>Recommended</option>
                        <option>Airline Name</option>
                        <option>Departure take-off</option>
                        <option>Departure landing</option>
                        <option>Return take-off</option>
                        <option>Return landing</option>
                    </select>
                </div>
                <div class="theme-search-results-sign-in _mob-h bg-grad">
                    <i class="theme-search-results-sign-in-icon fa fa-unlock-alt"></i>
                    <h5 class="theme-search-results-sign-in-title">Sign in to unlock our secret delas. Save up to
                        <b>50%</b>
                    </h5>
                    @if(!Session::has('user_id')):
                    <a class="btn theme-search-results-sign-in-btn btn-ghost btn-white" href="#">Sign in now</a>
                    @endif
                </div>
                <div class="theme-search-results">
                    @if(sizeof($flights)>=1)
                        @foreach($flights as $flight)
                            <div
                                class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                                <div class="theme-search-results-item-preview">
                                    <a class="theme-search-results-item-mask-link" href="#searchResultsItem-1"
                                       role="button"
                                       data-toggle="collapse" aria-expanded="false"
                                       aria-controls="searchResultsItem-1"></a>
                                    <div class="row" data-gutter="20">
                                        <div class="col-md-10 ">
                                            <div class="theme-search-results-item-flight-sections">
                                                <div class="theme-search-results-item-flight-section">
                                                    <div class="row row-no-gutter row-eq-height">
                                                        <div class="col-md-2 ">
                                                            <div
                                                                class="theme-search-results-item-flight-section-airline-logo-wrap">
                                                                <img
                                                                    class="theme-search-results-item-flight-section-airline-logo"
                                                                    src="./img/351x253.png" alt="Image Alternative text"
                                                                    title="Image Title"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10 ">
                                                            <div class="theme-search-results-item-flight-section-item">
                                                                <div class="row">
                                                                    <div class="col-md-3 ">
                                                                        <div
                                                                            class="theme-search-results-item-flight-section-meta">
                                                                            <p class="theme-search-results-item-flight-section-meta-time">
                                                                                07:30
                                                                                <span>pm</span>
                                                                            </p>
                                                                            <p class="theme-search-results-item-flight-section-meta-city">
                                                                                London</p>
                                                                            <p class="theme-search-results-item-flight-section-meta-date">
                                                                                May 17, 2018</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 ">
                                                                        <div
                                                                            class="theme-search-results-item-flight-section-path">
                                                                            <div
                                                                                class="theme-search-results-item-flight-section-path-fly-time">
                                                                                <p>17h 50m</p>
                                                                            </div>
                                                                            <div
                                                                                class="theme-search-results-item-flight-section-path-line"></div>
                                                                            <div
                                                                                class="theme-search-results-item-flight-section-path-line-start">
                                                                                <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                                                                <div
                                                                                    class="theme-search-results-item-flight-section-path-line-dot"></div>
                                                                                <div
                                                                                    class="theme-search-results-item-flight-section-path-line-title">
                                                                                    CLY
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="theme-search-results-item-flight-section-path-line-end">
                                                                                <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                                                                <div
                                                                                    class="theme-search-results-item-flight-section-path-line-dot"></div>
                                                                                <div
                                                                                    class="theme-search-results-item-flight-section-path-line-title">
                                                                                    EWR
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 ">
                                                                        <div
                                                                            class="theme-search-results-item-flight-section-meta">
                                                                            <p class="theme-search-results-item-flight-section-meta-time">
                                                                                01:20
                                                                                <span>pm</span>
                                                                            </p>
                                                                            <p class="theme-search-results-item-flight-section-meta-city">
                                                                                New York</p>
                                                                            <p class="theme-search-results-item-flight-section-meta-date">
                                                                                May 18, 2018</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5 class="theme-search-results-item-flight-section-airline-title">
                                                        Operated by {{$flight['carrier_name']}}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <div class="theme-search-results-item-book">
                                                <div class="theme-search-results-item-price">
                                                    <p class="theme-search-results-item-price-tag">
                                                        {{$flight['currency']}} {{$flight['price']}}
                                                    </p>
                                                    <p class="theme-search-results-item-price-sign">economy</p>
                                                </div>
                                                <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn"
                                                   href="#">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-warning">We did not find any flights to your destination.</div>
                    @endif

                </div>
                <a class="btn _tt-uc _fs-sm btn-dark btn-block btn-lg" href="#">Load More Results</a>
            </div>
            <div class="col-md-2-5 ">
                <div class="sticky-col _mob-h">
                    <div class="theme-ad _mb-20">
                        <a class="theme-ad-link" href="#"></a>
                        <p class="theme-ad-sign">Advertisement</p>
                        <img class="theme-ad-img" src="./img/300x800.png" alt="Image Alternative text"
                             title="Image Title"/>
                    </div>
                    <div class="theme-ad">
                        <a class="theme-ad-link" href="#"></a>
                        <p class="theme-ad-sign">Advertisement</p>
                        <img class="theme-ad-img" src="./img/300x500.png" alt="Image Alternative text"
                             title="Image Title"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
