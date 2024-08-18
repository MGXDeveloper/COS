@extends('Operation.layouts.navbar')
    @section('second_title')
    {{ __('Dashboard') }}
    @endsection
    @section('contain')
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <style>
            * {
                box-sizing: border-box;
            }
    
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }
    
            .container {
                display: flex;
            }
    
            .sidebar {
                width: 250px;
                background-color: #333;
                color: #fff;
                padding: 20px;
            }
    
            .content {
                flex: 1;
                padding: 20px;
            }
    
            .logo {
                text-align: center;
                margin-bottom: 20px;
            }
    
            .logo h1 {
                font-size: 24px;
                color: #fff;
                margin: 0;
            }
    
            .menu {
                list-style: none;
                padding: 0;
                margin: 0;
            }
    
            .menu li {
                margin-bottom: 10px;
            }
    
            .menu li a {
                color: #fff;
                text-decoration: none;
                display: block;
                padding: 8px;
                border-radius: 4px;
                transition: background-color 0.3s;
            }
    
            .menu li a:hover {
                background-color: #555;
            }
    
            .header {
                background-color: #007bff;
                color: #fff;
                padding: 20px;
                text-align: right;
            }
    
            .header h2 {
                margin: 0;
            }
    
            .content-section {
                margin-top: 20px;
            }
    
            .card {
                background-color: #f5f5f5;
                border-radius: 4px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                padding: 20px;
                margin-bottom: 20px;
            }
    
            .card h3 {
                margin: 0;
            }
    
            .card p {
                margin: 10px 0;
            }
    
            .footer {
                background-color: #333;
                color: #fff;
                padding: 20px;
                text-align: center;
            }
        </style>
    </head>
    
    <body>
        <div class="container">
            <div class="sidebar">
                <div class="logo">
                    <h1>Dashboard</h1>
                </div>
                <ul class="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
            <div class="content">
                <div class="header">
                    <h2>Welcome, User</h2>
                </div>
                <div class="content-section">
                    <div class="card">
                        <h3>Statistics</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus justo at lacus
                            pulvinar, vitae lobortis tortor mattis. Fusce vel iaculis enim. Donec convallis eleifend
                            mauris, in consequat elit vestibulum vel.</p>
                    </div>
                    <div class="card">
                        <h3>Recent Activities</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus justo at lacus
                            pulvinar, vitae lobortis tortor mattis. Fusce vel iaculis enim. Donec convallis eleifend
                            mauris, in consequat elit vestibulum vel.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            &copy; 2023 Dashboard. All rights reserved.
        </div>
    </body>
    
    </html>
    
    @endsection

