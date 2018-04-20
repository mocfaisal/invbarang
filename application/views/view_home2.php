  <?php 
$this->load->view('parts/top');
$this->load->view('parts/sidebar');
   ?>

        <!-- page content -->
        
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-calculator"></i> Total Barang</span>
              <div class="count"><?php echo $jmlbarang; ?></div>
              <span class="count_bottom"><i class="green">Item </i> Barang</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total Peminjaman</span>
              <div class="count"><?php echo $pinjam; ?></div>
              <span class="count_bottom"><i class="green"><i class="green"></i>Total </i> Transaksi</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-calculator"></i> Total Pengembalian</span>
              <div class="count"><?php echo $kembali; ?></div>
              <span class="count_bottom"><i class="green"><i class="green"></i>Total </i> Transaksi</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-calculator"></i> Total Barang</span>
              <div class="count"><?php echo $jmlbarang1; ?></div>
              <span class="count_bottom"><i class="green">Kondisi </i> Baik</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-calculator"></i> Total Barang</span>
              <div class="count"><?php echo $jmlbarang2; ?></div>
              <span class="count_bottom"><i class="green">Kondisi </i> Rusak, <br>Bisa Diperbaiki</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-calculator"></i> Total Barang</span>
              <div class="count"><?php echo $jmlbarang3; ?></div>
              <span class="count_bottom"><i class="green">Kondisi </i> Rusak Parah</span>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">           
             <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Grafik Batang</h2>

                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li> -->
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="maingrafikbar" style="height:350px;"></div>

                  </div>
                </div>
              </div>
</div>
          <br />

          <div class="row">
            <?php 

// echo "<pre>";
//         print_r($_SESSION);
//         echo "</pre>";
             ?>

          </div>


          <div class="row">
            
          </div>
        
        <!-- /page content -->

        <!-- footer content -->
       <?php 
$this->load->view('parts/bottom');

        ?>

<script type="text/javascript">
  var theme = {
          color: [
            '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
            '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
          ],

          title: {
            itemGap: 8,
            textStyle: {
              fontWeight: 'normal',
              color: '#408829'
            }
          },

          dataRange: {
            color: ['#1f610a', '#97b58d']
          },

          toolbox: {
            color: ['#408829', '#408829', '#408829', '#408829']
          },

          tooltip: {
            backgroundColor: 'rgba(0,0,0,0.5)',
            axisPointer: {
              type: 'line',
              lineStyle: {
                color: '#408829',
                type: 'dashed'
              },
              crossStyle: {
                color: '#408829'
              },
              shadowStyle: {
                color: 'rgba(200,200,200,0.3)'
              }
            }
          },

          dataZoom: {
            dataBackgroundColor: '#eee',
            fillerColor: 'rgba(64,136,41,0.2)',
            handleColor: '#408829'
          },
          grid: {
            borderWidth: 0
          },

          categoryAxis: {
            axisLine: {
              lineStyle: {
                color: '#408829'
              }
            },
            splitLine: {
              lineStyle: {
                color: ['#eee']
              }
            }
          },

          valueAxis: {
            axisLine: {
              lineStyle: {
                color: '#408829'
              }
            },
            splitArea: {
              show: true,
              areaStyle: {
                color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
              }
            },
            splitLine: {
              lineStyle: {
                color: ['#eee']
              }
            }
          },
          timeline: {
            lineStyle: {
              color: '#408829'
            },
            controlStyle: {
              normal: {color: '#408829'},
              emphasis: {color: '#408829'}
            }
          },

          k: {
            itemStyle: {
              normal: {
                color: '#68a54a',
                color0: '#a9cba2',
                lineStyle: {
                  width: 1,
                  color: '#408829',
                  color0: '#86b379'
                }
              }
            }
          },
          map: {
            itemStyle: {
              normal: {
                areaStyle: {
                  color: '#ddd'
                },
                label: {
                  textStyle: {
                    color: '#c12e34'
                  }
                }
              },
              emphasis: {
                areaStyle: {
                  color: '#99d2dd'
                },
                label: {
                  textStyle: {
                    color: '#c12e34'
                  }
                }
              }
            }
          },
          force: {
            itemStyle: {
              normal: {
                linkStyle: {
                  strokeColor: '#408829'
                }
              }
            }
          },
          chord: {
            padding: 4,
            itemStyle: {
              normal: {
                lineStyle: {
                  width: 1,
                  color: 'rgba(128, 128, 128, 0.5)'
                },
                chordStyle: {
                  lineStyle: {
                    width: 1,
                    color: 'rgba(128, 128, 128, 0.5)'
                  }
                }
              },
              emphasis: {
                lineStyle: {
                  width: 1,
                  color: 'rgba(128, 128, 128, 0.5)'
                },
                chordStyle: {
                  lineStyle: {
                    width: 1,
                    color: 'rgba(128, 128, 128, 0.5)'
                  }
                }
              }
            }
          },
          gauge: {
            startAngle: 225,
            endAngle: -45,
            axisLine: {
              show: true,
              lineStyle: {
                color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                width: 8
              }
            },
            axisTick: {
              splitNumber: 10,
              length: 12,
              lineStyle: {
                color: 'auto'
              }
            },
            axisLabel: {
              textStyle: {
                color: 'auto'
              }
            },
            splitLine: {
              length: 18,
              lineStyle: {
                color: 'auto'
              }
            },
            pointer: {
              length: '90%',
              color: 'auto'
            },
            title: {
              textStyle: {
                color: '#333'
              }
            },
            detail: {
              textStyle: {
                color: 'auto'
              }
            }
          },
          textStyle: {
            fontFamily: 'Arial, Verdana, sans-serif'
          }
        };
          var echartBar = echarts.init(document.getElementById('maingrafikbar'), theme);

          echartBar.setOption({
          title: {
            text: 'Grafik Transaksi',
            subtext: 'Peminjaman & Pengembalian'
          },
          tooltip: {
            trigger: 'axis'
          },
          legend: {
            data: ['Peminjaman', 'Pengembalian']
          },
          toolbox: {
            show: false
          },
          calculable: false,
          xAxis: [{
            type: 'category',
            data: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]
          }],
          yAxis: [{
            type: 'value'
          }],
          series: [{
            name: 'Peminjaman',
            type: 'bar',
            data: <?php echo $_SESSION['datapinjam']; ?>,
            markPoint: {
            data: [{
              type: 'max',
              name: <?php echo $pinjam+$kembali; ?>
            }, {
              type: 'min',
              name: '0'
            }]
            },
            markLine: {
            data: [{
              type: 'average',
              name: <?php echo $ratapinjam; ?>
            }]
            }
          }, {
            name: 'Pengembalian',
            type: 'bar',
            data: <?php echo $_SESSION['datakembali']; ?>, 
            markPoint: {
            data: [{
              name: 'Peminjaman',
              value: <?php echo $pinjam; ?>,
              xAxis: 7,
              yAxis: <?php echo $pinjam; ?>,
            }, {
              name: 'Pengembalian',
              value: <?php echo $kembali; ?>,
              xAxis: 11,
              yAxis: <?php echo $kembali; ?>
            }]
            },
            markLine: {
            data: [{
              type: 'average',
              name: <?php echo $ratakembali; ?>
            }]
            }
          }]
          });


</script>