<html>
    <head>
      <title>Display Visits</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
      <div class="container mt-3">
        <h2>Patient Visits</h2>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Visit Date</th>
                <th>Visit Time</th>
                <th>Patient ID</th>
              </tr>
            </thead>
            <tbody>
              <?php include("visitList.php");?>
            </tbody>
          </table>
       </div>
    </body>
</html>