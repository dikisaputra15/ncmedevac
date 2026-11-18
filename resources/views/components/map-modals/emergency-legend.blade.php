                <div class="classification emergency-legend" role="region" aria-label="Map legend" tabindex="0">
                    <!-- Airfield Classification -->
                    <div class="classification">
                      <!-- Airport -->
                      <div class="class-column">
                        <div class="class-header class-airport-category">Airfield Classification</div>
                        <div class="airport-list" style="align-items:start;">
                          <div class="hospital-row legend-grid">

                              <button class="btn p-1 legend-grid-item" data-bs-toggle="modal" data-bs-target="#level6Modal">
                                  <img src="https://pg.concordreview.com/wp-content/uploads/2024/10/International-Airport.png" style="width:18px; height:18px;">
                                  <small>International</small>
                              </button>

                              <button class="btn p-1 legend-grid-item" data-bs-toggle="modal" data-bs-target="#level5Modal">
                                  <img src="https://pg.concordreview.com/wp-content/uploads/2025/01/regional-airport.png" style="width:18px; height:18px;">
                                  <small>Domestic</small>
                              </button>

                              <button class="btn p-1 legend-grid-item" data-bs-toggle="modal" data-bs-target="#level4Modal">
                                  <img src="https://pg.concordreview.com/wp-content/uploads/2025/01/regional-domestic-airport.png" style="width:18px; height:18px;">
                                  <small>Regional</small>
                              </button>

                              <button class="btn p-1 legend-grid-item" data-bs-toggle="modal" data-bs-target="#level2Modal">
                                  <img src="https://pg.concordreview.com/wp-content/uploads/2024/10/civil-military-airport.png" style="width:18px; height:18px;">
                                  <small>Civil-Military</small>
                              </button>

                              <button class="btn p-1 legend-grid-item" data-bs-toggle="modal" data-bs-target="#level3Modal">
                                  <img src="https://pg.concordreview.com/wp-content/uploads/2024/10/military-airport-red.png" style="width:18px; height:18px;">
                                  <small>Military</small>
                              </button>

                              <button class="btn p-1 legend-grid-item" data-bs-toggle="modal" data-bs-target="#level1Modal">
                                  <img src="https://pg.concordreview.com/wp-content/uploads/2025/01/private-airport.png" style="width:18px; height:18px;">
                                  <small>Private</small>
                              </button>

                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Hospital Classification -->
                    <div class="classification emergency-legend-medical flex-column">
                      <div class="class-header class-medical-classification" style="text-align:left;">Medical Facility Classification</div>
                      <div class="classification">
                        <!-- Advanced -->
                        <div class="class-column" style="align-items: flex-start; text-align: left;">
                          <div class="class-header class-advanced">Advanced</div>
                          <div class="classification">
                              <button class="btn p-1 legend-grid-item" style="padding-left: 0 !important;" data-bs-toggle="modal" data-bs-target="#level66Modal">
                                <img src="https://pg.concordreview.com/wp-content/uploads/2025/01/hospital-pin-red.png" style="width:24px; height:24px;">
                                <small>Territorial Hospital</small>
                              </button>
                          </div>
                        </div>

                        <!-- Intermediate -->
                        <div class="class-column" style="align-items: flex-start; text-align: left;">
                          <div class="class-header class-intermediate">Intermediate</div>
                          <div class="classification">
                              <button class="btn p-1 legend-grid-item" style="padding-left: 0 !important;" data-bs-toggle="modal" data-bs-target="#level55Modal">
                                <img src="https://pg.concordreview.com/wp-content/uploads/2025/01/hospital_pin-blue.png" style="width:24px; height:24px;">
                                <small>Provincial Hospital</small>
                              </button>
                          </div>
                        </div>

                        <!-- Basic -->
                        <div class="class-column" style="align-items: flex-start; text-align: left;">
                          <div class="class-header class-basic">Basic</div>
                          <div class="classification">
                              <button class="btn p-1 legend-grid-item" style="padding-left: 0 !important;" data-bs-toggle="modal" data-bs-target="#level33Modal">
                                <img src="https://pg.concordreview.com/wp-content/uploads/2025/01/hospital_pin-green.png" style="width:24px; height:24px;">
                                <small>Local / Communal Hospital</small>
                              </button>
                              <button class="btn p-1 legend-grid-item" style="padding-left: 0 !important;" data-bs-toggle="modal" data-bs-target="#level11Modal">
                                  <img src="https://pg.concordreview.com/wp-content/uploads/2025/01/hospital_pin-tosca.png" style="width:24px; height:24px;">
                                  <small>Clinic / Health Centre</small>
                              </button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="class-column emergency-legend-police">
                        <div class="class-header class-airport-category">POLICE CLASSIFICATION</div>

                        <div class="airport-list" style="align-items:start;">
                            <div class="hospital-row legend-grid">

                                <button class="btn p-1 legend-grid-item" data-bs-toggle="modal" data-bs-target="#police6Modal">
                                    <img src="{{ asset('images/Layer1.png') }}" style="width:12px; height:12px;">
                                    <small>National Police HQ</small>
                                </button>

                                <button class="btn p-1 legend-grid-item" data-bs-toggle="modal" data-bs-target="#police5Modal">
                                    <img src="{{ asset('images/Layer2.png') }}" style="width:12px; height:12px;">
                                    <small>Gendarmerie National</small>
                                </button>

                                <button class="btn p-1 legend-grid-item" data-bs-toggle="modal" data-bs-target="#police4Modal">
                                    <img src="{{ asset('images/Layer3.png') }}" style="width:12px; height:12px;">
                                    <small>Municipality Police</small>
                                </button>

                            </div>
                        </div>

                    </div>
                  </div>
