<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('home'); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <div class="table-responsive">
            <h1>Biodata Saya dari Array</h1>
            <table class="table table-hover">
              <tbody>
                <?php foreach ($biodata_array as $key) { ?>
                <tr>
                  <td><?php echo $key['id'] ?></td>
                </tr>
                <tr>
                  <td><?php echo $key['nama'] ?></td>
                </tr>
                <tr>
                  <td><?php echo $key['nim'] ?></td>
                </tr>
                <tr>
                  <td><?php echo $key['alamat'] ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="table-responsive">
              <h1>Biodata Saya dari Object</h1>
              <table class="table table-hover">
                <tbody>
                  <?php foreach ($biodata_object as $key) { ?>
                  <tr>
                    <td><?php echo $key->id ?></td>
                  </tr>
                  <tr>
                    <td><?php echo $key->nama ?></td>
                  </tr>
                  <tr>
                    <td><?php echo $key->nim ?></td>
                  </tr>
                  <tr>
                    <td><?php echo $key->alamat ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="table-responsive">
              <h1>Biodata Saya dari Array</h1>
              <table class="table table-hover">
                <tbody>
                  <?php foreach ($biodataBuilder_array as $key) { ?>
                  <tr>
                    <td><?php echo $key['id'] ?></td>
                  </tr>
                  <tr>
                    <td><?php echo $key['nama'] ?></td>
                  </tr>
                  <tr>
                    <td><?php echo $key['nim'] ?></td>
                  </tr>
                  <tr>
                    <td><?php echo $key['alamat'] ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="table-responsive">
                <h1>Biodata Saya dari Object</h1>
                <table class="table table-hover">
                  <tbody>
                    <?php foreach ($biodataBuilder_object as $key) { ?>
                    <tr>
                      <td><?php echo $key->id ?></td>
                    </tr>
                    <tr>
                      <td><?php echo $key->nama ?></td>
                    </tr>
                    <tr>
                      <td><?php echo $key->nim ?></td>
                    </tr>
                    <tr>
                      <td><?php echo $key->alamat ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </body>
    </html>