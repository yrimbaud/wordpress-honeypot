# WordPress Installation Honeypot

## Presentation
This project simulates a WordPress installation page to help detect and log potential attackers trying to exploit unconfigured WordPress installations. It replicates the familiar WordPress setup interface while recording attempted configurations for security analysis.

The threat this tool addresses is known as "automated WordPress exploitation." Malicious actors often scan the internet for WordPress installations in their setup phase, attempting to hijack them before proper configuration. This honeypot helps monitor these attempts by logging the attackers' information and their intended configurations.

## How It Works
1. The honeypot presents itself as a standard WordPress installation page
2. It allows attackers to go through the typical installation steps:
   - Language selection
   - Database configuration information
3. All submitted data is logged along with the attacker's information:
   - IP address
   - User agent
   - Timestamp
   - Selected language
   - Database configuration details

## Installation
1. Clone this repository into your web server
2. Create a `logs` directory with write permissions
3. Ensure PHP is configured on your server
4. Access the setup page through your web browser

## Code Structure
The project consists of a single PHP file that handles:
- Language selection interface
- Database configuration form
- Data logging functionality
- Error page simulation

The logging system captures all attempts in JSON format, storing them in the `logs` directory.

## Security Considerations
- Ensure the `logs` directory is not publicly accessible
- Monitor log files regularly for disk space management
- Consider implementing IP rate limiting
- Keep your web server and PHP installation up to date

## Troubleshooting
If you encounter any issues:
- Verify write permissions on the `logs` directory
- Check PHP error logs for potential issues
- Ensure all required PHP extensions are enabled
- Verify your server meets the minimum PHP version requirements

## Contributing
Contributions are welcome! Please feel free to submit pull requests or open issues for:
- Enhanced logging capabilities
- Additional security features
- UI improvements
- Documentation updates

## Supporting The Project
If you find this project beneficial and appreciate its contributions, you might consider offering your support. One of the ways you can do this is through a Bitcoin donation!

Here is the Bitcoin address:
`bc1q3pc0ftvdew3e87k07d00k8tqj7ll924hgy69n6`

By donating Bitcoin, you are not only providing tangible assistance, but also endorsing the use of decentralized digital currencies. This encourages further innovation and freedom in the financial sector, aligning with the open source principles that guide this project.

Every donation, big or small, is deeply appreciated and will be used to further improve and maintain this project. Your support helps dedicate more time and resources, ensuring the project's continuity and enhancement!

## Author
This project is maintained by Yann Rimbaud ([yrimbaud](https://github.com/yrimbaud)).

## License
This project is licensed under the MIT License.

## Disclaimer
This tool is for educational and research purposes only. Use responsibly and in compliance with applicable laws and regulations.
