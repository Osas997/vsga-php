  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <style>
      .sidebar {
          background-color: #f8f9fa;
          border-right: 1px solid #dee2e6;
          height: calc(100vh - 130px);
          overflow-y: auto;
      }

      .sidebar .nav-link {
          color: #495057;
          padding: 0.5rem 1rem;
          border-radius: 0.25rem;
          margin-bottom: 0.5rem;
          transition: all 0.3s;
      }

      .sidebar .nav-link:hover,
      .sidebar .nav-link.active {
          background-color: #e9ecef;
          color: #007bff;
      }

      .sidebar .nav-link i {
          margin-right: 0.5rem;
          width: 20px;
          text-align: center;
      }

      .content {
          padding: 1rem;
      }
  </style>