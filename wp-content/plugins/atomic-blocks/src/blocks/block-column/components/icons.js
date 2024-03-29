/**
 * Column layout icons.
 */

const icons = {};

/* One column - 100. */
icons.oneEqual = (
	<svg
		className="dashicon"
		height="26"
		viewBox="0 0 60 30"
		xmlns="http://www.w3.org/2000/svg"
		fillRule="evenodd"
		clipRule="evenodd"
		strokeLinejoin="round"
		strokeMiterlimit="1.414"
	>
		<rect x="0" y="0" width="60" height="30" fill="#6d6a6f" />
	</svg>
);

/* Two columns - 50/50. */
icons.twoEqual = (
	<svg
		viewBox="0 0 60 30"
		height="26"
		xmlns="http://www.w3.org/2000/svg"
		fillRule="evenodd"
		clipRule="evenodd"
		strokeLinejoin="round"
		strokeMiterlimit="1.414"
	>
		<rect x="33" y="0" width="29" height="30" fill="#6d6a6f" />
		<rect x="0" y="0" width="29" height="30" fill="#6d6a6f" />
	</svg>
);

/* Two columns - 75/25. */
icons.twoLeftWide = (
	<svg
		viewBox="0 0 60 30"
		height="26"
		xmlns="http://www.w3.org/2000/svg"
		fillRule="evenodd"
		clipRule="evenodd"
		strokeLinejoin="round"
		strokeMiterlimit="1.414"
	>
		<rect x="43" y="0" width="16" height="30" fill="#6d6a6f" />
		<rect x="0" y="0" width="39" height="30" fill="#6d6a6f" />
	</svg>
);

/* Two columns - 25/75. */
icons.twoRightWide = (
	<svg
		viewBox="0 0 60 30"
		height="26"
		xmlns="http://www.w3.org/2000/svg"
		fillRule="evenodd"
		clipRule="evenodd"
		strokeLinejoin="round"
		strokeMiterlimit="1.414"
	>
		<rect x="20" y="0" width="39" height="30" fill="#6d6a6f" />
		<rect x="0" y="0" width="16" height="30" fill="#6d6a6f" />
	</svg>
);

/* Three columns - 33/33/33. */
icons.threeEqual = (
	<svg
		viewBox="0 0 60 30"
		height="26"
		xmlns="http://www.w3.org/2000/svg"
		fillRule="evenodd"
		clipRule="evenodd"
		strokeLinejoin="round"
		strokeMiterlimit="1.414"
	>
		<rect x="0" y="0" width="17.500" height="30" fill="#6d6a6f" />
		<rect x="21.500" y="0" width="17.500" height="30" fill="#6d6a6f" />
		<rect x="43" y="0" width="17.500" height="30" fill="#6d6a6f" />
	</svg>
);

/* Three column - 25/50/25. */
icons.threeWideCenter = (
	<svg
		viewBox="0 0 60 30"
		height="26"
		xmlns="http://www.w3.org/2000/svg"
		fillRule="evenodd"
		clipRule="evenodd"
		strokeLinejoin="round"
		strokeMiterlimit="1.414"
	>
		<rect x="0" y="0" width="11" height="30" fill="#6d6a6f" />
		<rect x="15" y="0" width="31" height="30" fill="#6d6a6f" />
		<rect x="50" y="0" width="11" height="30" fill="#6d6a6f" />
	</svg>
);

/* Three column - 50/25/25. */
icons.threeWideLeft = (
	<svg
		viewBox="0 0 60 30"
		height="26"
		xmlns="http://www.w3.org/2000/svg"
		fillRule="evenodd"
		clipRule="evenodd"
		strokeLinejoin="round"
		strokeMiterlimit="1.414"
	>
		<rect x="0" y="0" width="30" height="30" fill="#6d6a6f" />
		<rect x="34" y="0" width="11" height="30" fill="#6d6a6f" />
		<rect x="49" y="0" width="11" height="30" fill="#6d6a6f" />
	</svg>
);

/* Three column - 25/25/50. */
icons.threeWideRight = (
	<svg
		viewBox="0 0 60 30"
		height="26"
		xmlns="http://www.w3.org/2000/svg"
		fillRule="evenodd"
		clipRule="evenodd"
		strokeLinejoin="round"
		strokeMiterlimit="1.414"
	>
		<rect x="0" y="0" width="11" height="30" fill="#6d6a6f" />
		<rect x="15" y="0" width="11" height="30" fill="#6d6a6f" />
		<rect x="30" y="0" width="30" height="30" fill="#6d6a6f" />
	</svg>
);

/* Four column - 25/25/25/25. */
icons.fourEqual = (
	<svg
		viewBox="0 0 60 30"
		height="26"
		xmlns="http://www.w3.org/2000/svg"
		fillRule="evenodd"
		clipRule="evenodd"
		strokeLinejoin="round"
		strokeMiterlimit="1.414"
	>
		<rect x="0" y="0" width="12" height="30" fill="#6d6a6f" />
		<rect x="16" y="0" width="12" height="30" fill="#6d6a6f" />
		<rect x="32" y="0" width="12" height="30" fill="#6d6a6f" />
		<rect x="48" y="0" width="12" height="30" fill="#6d6a6f" />
	</svg>
);

/* Four column - 40/20/20/20. */
icons.fourLeft = (
	<svg
		viewBox="0 0 60 30"
		height="26"
		xmlns="http://www.w3.org/2000/svg"
		fillRule="evenodd"
		clipRule="evenodd"
		strokeLinejoin="round"
		strokeMiterlimit="1.414"
	>
		<rect x="0" y="0" width="21" height="30" fill="#6d6a6f" />
		<rect x="25" y="0" width="9" height="30" fill="#6d6a6f" />
		<rect x="38" y="0" width="9" height="30" fill="#6d6a6f" />
		<rect x="51" y="0" width="9" height="30" fill="#6d6a6f" />
	</svg>
);

/* Four column - 20/20/20/40. */
icons.fourRight = (
	<svg
		viewBox="0 0 60 30"
		height="26"
		xmlns="http://www.w3.org/2000/svg"
		fillRule="evenodd"
		clipRule="evenodd"
		strokeLinejoin="round"
		strokeMiterlimit="1.414"
	>
		<rect x="0" y="0" width="9" height="30" fill="#6d6a6f" />
		<rect x="12.800" y="0" width="9" height="30" fill="#6d6a6f" />
		<rect x="25.600" y="0" width="9" height="30" fill="#6d6a6f" />
		<rect x="38.400" y="0" width="21" height="30" fill="#6d6a6f" />
	</svg>
);

/* Five columns - 20/20/20/20/20. */
icons.fiveEqual = (
	<svg
		viewBox="0 0 60 30"
		height="26"
		xmlns="http://www.w3.org/2000/svg"
		fillRule="evenodd"
		clipRule="evenodd"
		strokeLinejoin="round"
		strokeMiterlimit="1.414"
	>
		<rect x="0" y="0" width="9" height="30" fill="#6d6a6f" />
		<rect x="12.400" y="0" width="9" height="30" fill="#6d6a6f" />
		<rect x="24.800" y="0" width="9" height="30" fill="#6d6a6f" />
		<rect x="37.200" y="0" width="9" height="30" fill="#6d6a6f" />
		<rect x="49.600" y="0" width="9" height="30" fill="#6d6a6f" />
	</svg>
);

/* Five columns - 16/16/16/16/16. */
icons.sixEqual = (
	<svg
		viewBox="0 0 60 30"
		height="26"
		xmlns="http://www.w3.org/2000/svg"
		fillRule="evenodd"
		clipRule="evenodd"
		strokeLinejoin="round"
		strokeMiterlimit="1.414"
	>
		<rect x="0" y="0" width="7" height="30" fill="#6d6a6f" />
		<rect x="10.330" y="0" width="7" height="30" fill="#6d6a6f" />
		<rect x="20.660" y="0" width="7" height="30" fill="#6d6a6f" />
		<rect x="30.990" y="0" width="7" height="30" fill="#6d6a6f" />
		<rect x="41.320" y="0" width="7" height="30" fill="#6d6a6f" />
		<rect x="51.650" y="0" width="7" height="30" fill="#6d6a6f" />
	</svg>
);

/* Block icon. */
icons.blockIcon = (
	<svg
		viewBox="0 0 60 34"
		height="34"
		xmlns="http://www.w3.org/2000/svg"
		fillRule="evenodd"
		clipRule="evenodd"
		strokeLinejoin="round"
		strokeMiterlimit="1.414"
	>
		<rect x="38" y="0" width="12" height="34" fill="#6d6a6f" />
		<rect x="22" y="0" width="12" height="34" fill="#6d6a6f" />
		<rect x="6" y="0" width="12" height="34" fill="#6d6a6f" />
	</svg>
);

export default icons;
