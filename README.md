# Elementor Slider Models Plugin

This plugin adds a custom Elementor widget to display a carousel slider for showcasing car models. It includes various customization options, allowing users to set titles, images, prices, and call-to-action (CTA) links for each slide.

## Features

- **Carousel Slider**: Integrates with the Swiper.js library for smooth and responsive sliding functionality.
- **Customizable Slides**: Add car models with:
  - Images
  - Titles
  - Prices
  - Descriptions
  - Two distinct call-to-action buttons (supporting external links or Elementor popups).
- **Elementor Integration**: Fully compatible with Elementor, appearing under a custom "Dalton Widgets" category.
- **Styling and Scripts**: Includes pre-registered scripts and styles for Swiper.js and custom widget styles.

## Installation

1. Download the plugin or clone the repository into your WordPress `wp-content/plugins` directory.
2. Activate the plugin through the WordPress admin dashboard.
3. Ensure Elementor is installed and activated (Elementor Pro is optional for popup functionality).

## Usage

1. Go to the Elementor editor.
2. Search for the **"Modelos"** widget under the "Dalton Widgets" category.
3. Drag and drop the widget onto your page.
4. Configure the widget settings:
   - Add slides with car models.
   - Configure titles, images, and prices.
   - Add and customize CTA links.
   - Optionally link to Elementor popups.
5. Publish your page to display the slider.

## Dependencies

- **Elementor**: Core plugin for page building.
- **Swiper.js**: Used for creating the carousel slider.

## Developer Notes

### Registering Styles and Scripts
The plugin automatically registers and enqueues the following:

- Swiper.js (via CDN)
- Custom widget scripts and styles located in the `dist` folder.

### Repeater Controls
The widget uses Elementor's Repeater for creating multiple slides. Each slide includes the following:

- Image
- Title
- Price
- Description
- Two CTA links (supporting external URLs or Elementor popups).

### Popup Integration
If Elementor Pro is installed, the plugin supports linking CTA buttons to Elementor popups.

## File Structure

```plaintext
├── includes
│   └── frontend.php  # HTML structure for rendering the widget.
├── dist
│   ├── css
│   │   └── styles.min.css
│   └── js
│       └── main.min.js
├── widget-class.php  # Main plugin class.
```

## Contributing

Contributions are welcome! Feel free to submit pull requests or issues on the repository.

## License

This plugin is licensed under the [GPL-3.0 License](https://opensource.org/licenses/GPL-3.0).
