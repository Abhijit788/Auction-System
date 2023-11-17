# Auction System in PHP

This is a simple Auction System implemented in PHP. The system allows users to create auctions, place bids, and view auction details.

## Features

- User authentication: Users can sign up, log in, and log out.
- Create auction: Authenticated users can create new auctions by providing details such as item name, description, starting price, and end time.
- Place bid: Authenticated users can place bids on active auctions.
- View auction details: Users can view details of each auction, including current highest bid and remaining time.

## Installation

1. Clone the repository: `git clone https://github.com/yourusername/auction-system.git`
2. Navigate to the project directory.
3. Import the database schema from `database/schema.sql`.
4. Update the database configuration in `config.php` with your database credentials.
5. Start the PHP server.

```bash
php -S localhost:8000
```

6. Open the application in your web browser: `http://localhost:8000`

## Technologies Used

- PHP
- MySQL
- HTML/CSS
- JavaScript

## Contributing

We welcome contributions from the community. If you'd like to contribute to this project, please fork the repository and submit a pull request with your changes.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
