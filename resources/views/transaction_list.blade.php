@extends('layouts.main')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-info" style="background-color: #0c83e2">
                <h4 class="card-title ">Transactions</h4>
                <p class="card-category"> </p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <th>
                            Rounds
                        </th>
                        <th>
                            DATE
                        </th>
                        <th>
                            ATM
                        </th>
                        <th>
                            STAN
                        </th>
                        <th>
                            AMOUNT
                        </th>
                        <th>
                            STATUS
                        </th>
                        <th>

                        </th>

                        </thead>
                        <tbody>
                      <a href="{{'/'}}"> <tr>
                              <td>
                                  1
                              </td>
                              <td>
                                  27.05.2021
                              </td>
                              <td>
                                  MKCB
                              </td>
                              <td>
                                  7718
                              </td>
                              <td>
                                  500,000.00
                              </td>
                              <td><span class="label bg-blue">done</span></td>
                              <td class="text-center">
                                  <ul class="icons-list">
                                      <li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                          <ul class="dropdown-menu">
                                              <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
                                              <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
                                              <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                          </ul>
                                      </li>
                                  </ul>
                              </td>
                          </tr> </a>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
