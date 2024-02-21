<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mobile First Page</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }

            .container {
                max-width: 100%;
                padding: 20px;
            }

            .category {
                background-color: #f2f2f2;
                padding: 20px;
                margin-bottom: 20px;
                border-radius: 8px;
                text-align: center;
            }

            .category-title {
                font-size: 24px;
                margin-bottom: 10px;
            }

            .category-links {
                display: flex;
                justify-content: center;
            }

            .category-link {
                margin: 0 10px;
                text-decoration: none;
                color: #333;
                padding: 10px 20px;
                border: 1px solid #ccc;
                border-radius: 4px;
                transition: all 0.3s ease;
            }

            .category-link:hover {
                background-color: #eaeaea;
            }

            @media(min-width: 768px) {
                .container {
                    max-width: 768px;
                    margin: 0 auto;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="category">
                <h2 class="category-title">Category 1</h2>
                <div class="category-links">
                    <a href="#" class="category-link">Link 1</a>
                    <a href="#" class="category-link">Link 2</a>
                    <a href="#" class="category-link">Link 3</a>
                </div>
            </div>

            <div class="category">
                <h2 class="category-title">Category 2</h2>
                <div class="category-links">
                    <a href="#" class="category-link">Link 1</a>
                    <a href="#" class="category-link">Link 2</a>
                    <a href="#" class="category-link">Link 3</a>
                </div>
            </div>

            <div class="category">
                <h2 class="category-title">Category 3</h2>
                <div class="category-links">
                    <a href="#" class="category-link">Link 1</a>
                    <a href="#" class="category-link">Link 2</a>
                    <a href="#" class="category-link">Link 3</a>
                </div>
            </div>
        </div>
    </body>
    </html>
