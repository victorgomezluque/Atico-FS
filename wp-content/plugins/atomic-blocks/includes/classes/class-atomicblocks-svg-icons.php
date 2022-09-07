<?php
/**
 * Custom icons for this theme.
 *
 * @package AtomicBlocks
 */

if ( ! class_exists( 'AtomicBlocks_SVG_Icons' ) ) {
	/**
	 * SVG ICONS CLASS
	 * Retrieve the SVG code for the specified icon.
	 */
	class AtomicBlocks_SVG_Icons {
		/**
		 * GET SVG CODE
		 * Get the SVG code for the specified icon
		 *
		 * @param string $icon Icon name.
		 * @param string $group Icon group.
		 * @param string $color Color.
		 */
		public static function get_svg( $icon, $group = 'ui', $color = '#1A1A1B' ) {

			$arr = self::$ui_icons;

			if ( array_key_exists( $icon, $arr ) ) {
				$repl = '<svg class="svg-icon" aria-hidden="true" role="img" focusable="false" ';
				$svg  = preg_replace( '/^<svg /', $repl, trim( $arr[ $icon ] ) ); // Add extra attributes to SVG code.
				$svg  = str_replace( '#1A1A1B', $color, $svg ); // Replace the color.
				$svg  = str_replace( '#', '%23', $svg ); // Urlencode hashes.
				$svg  = preg_replace( "/([\n\t]+)/", ' ', $svg ); // Remove newlines & tabs.
				$svg  = preg_replace( '/>\s*</', '><', $svg ); // Remove white space between SVG tags.
				return $svg;
			}
			return null;
		}


		/**
		 * ICON STORAGE
		 * Store the code for all SVGs in an array.
		 *
		 * @var array
		 */
		public static $ui_icons = array(
			'plug'            => '<svg width="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"> <path d="M312,24a24,24,0,0,0-48,0v88h48ZM120,24a24,24,0,0,0-48,0v88h48ZM368,144H16A16,16,0,0,0,0,160v16a16,16,0,0,0,16,16H32v64c0,80.14,59.11,145.92,136,157.58V512h48V413.58C292.89,401.92,352,336.14,352,256V192h16a16,16,0,0,0,16-16V160A16,16,0,0,0,368,144ZM304,256a112,112,0,0,1-224,0V192H304Z" /> </svg>',
			'check-circle'    => '<svg width="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"> <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z" /> </svg>',
			'question-circle' => '<svg fill="currentColor" width="35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z"/></svg>',
			'bullhorn'        => '<svg fill="currentColor" width="35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M544 184.88V32.01C544 23.26 537.02 0 512.01 0H512c-7.12 0-14.19 2.38-19.98 7.02l-85.03 68.03C364.28 109.19 310.66 128 256 128H64c-35.35 0-64 28.65-64 64v96c0 35.35 28.65 64 64 64l-.48 32c0 39.77 9.26 77.35 25.56 110.94 5.19 10.69 16.52 17.06 28.4 17.06h106.28c26.05 0 41.69-29.84 25.9-50.56-16.4-21.52-26.15-48.36-26.15-77.44 0-11.11 1.62-21.79 4.41-32H256c54.66 0 108.28 18.81 150.98 52.95l85.03 68.03a32.023 32.023 0 0 0 19.98 7.02c24.92 0 32-22.78 32-32V295.13c19.05-11.09 32-31.49 32-55.12.01-23.64-12.94-44.04-31.99-55.13zM127.73 464c-10.76-25.45-16.21-52.31-16.21-80 0-14.22 1.72-25.34 2.6-32h64.91c-2.09 10.7-3.52 21.41-3.52 32 0 28.22 6.58 55.4 19.21 80h-66.99zM240 304H64c-8.82 0-16-7.18-16-16v-96c0-8.82 7.18-16 16-16h176v128zm256 110.7l-59.04-47.24c-42.8-34.22-94.79-55.37-148.96-61.45V173.99c54.17-6.08 106.16-27.23 148.97-61.46L496 65.3v349.4z"/></svg>',
			'layer-group'     => '<svg fill="currentColor" width="35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M512 256.01c0-12.86-7.53-24.42-19.12-29.44l-79.69-34.58 79.66-34.57c11.62-5.03 19.16-16.59 19.16-29.44s-7.53-24.41-19.12-29.42L274.66 3.89c-11.84-5.17-25.44-5.19-37.28-.02L19.16 98.55C7.53 103.58 0 115.14 0 127.99s7.53 24.41 19.12 29.42l79.7 34.58-79.67 34.57C7.53 231.58 0 243.15 0 256.01c0 12.84 7.53 24.41 19.12 29.42L98.81 320l-79.65 34.56C7.53 359.59 0 371.15 0 384.01c0 12.84 7.53 24.41 19.12 29.42l218.28 94.69a46.488 46.488 0 0 0 18.59 3.88c6.34-.02 12.69-1.3 18.59-3.86l218.25-94.69c11.62-5.03 19.16-16.59 19.16-29.44 0-12.86-7.53-24.42-19.12-29.44L413.19 320l79.65-34.56c11.63-5.03 19.16-16.59 19.16-29.43zM255.47 47.89l.03.02h-.06l.03-.02zm.53.23l184.16 79.89-183.63 80.09-184.62-80.11L256 48.12zm184.19 335.92l-183.66 80.07L71.91 384l87.21-37.84 78.29 33.96A46.488 46.488 0 0 0 256 384c6.34-.02 12.69-1.3 18.59-3.86l78.29-33.97 87.31 37.87zM256.53 336.1L71.91 255.99l87.22-37.84 78.28 33.96a46.488 46.488 0 0 0 18.59 3.88c6.34-.02 12.69-1.3 18.59-3.86l78.29-33.97 87.31 37.88-183.66 80.06z"/></svg>',
		);

	}
}
