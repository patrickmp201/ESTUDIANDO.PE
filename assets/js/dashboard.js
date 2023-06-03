$(document).ready(function() {
	function e() {
		var a = ["#00acc1", "#f1556c"],
			e = $("#lifetime-sales").data("colors");
		e && (a = e.split(",")), $("#lifetime-sales").sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40], {
			type: "line",
			width: "100%",
			height: "220",
			chartRangeMax: 50,
			lineColor: a[0],
			fillColor: hexToRGB(a[0], .3),
			highlightLineColor: "rgba(0,0,0,.1)",
			highlightSpotColor: "rgba(0,0,0,.2)",
			maxSpotColor: !1,
			minSpotColor: !1,
			spotColor: !1,
			lineWidth: 1
		}), $("#lifetime-sales").sparkline([25, 23, 26, 24, 25, 32, 30, 24, 19], {
			type: "line",
			width: "100%",
			height: "220",
			chartRangeMax: 40,
			lineColor: a[1],
			fillColor: hexToRGB(a[1], .3),
			composite: !0,
			highlightLineColor: "rgba(0,0,0,.1)",
			highlightSpotColor: "rgba(0,0,0,.2)",
			maxSpotColor: !1,
			minSpotColor: !1,
			spotColor: !1,
			lineWidth: 1
		}), a = ["#00acc1"], (e = $("#income-amounts").data("colors")) && (a = e.split(",")), $("#income-amounts").sparkline([3, 6, 7, 8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {
			type: "bar",
			height: "220",
			barWidth: "10",
			barSpacing: "3",
			barColor: a
		}), a = ["#00acc1", "#4b88e4", "#e3eaef", "#fd7e14"], (e = $("#total-users").data("colors")) && (a = e.split(",")), $("#total-users").sparkline([20, 40, 30, 10], {
			type: "pie",
			width: "220",
			height: "220",
			sliceColors: a
		})
	}
	var t;
	e(), $(window).resize(function(a) {
		clearTimeout(t), t = setTimeout(function() {
			e()
		}, 300)
	})
});

var colors = ["#6658dd"],
	dataColors = $("#world-map-markers").data("colors");

function hexToRGB(a, e) {
	var t = parseInt(a.slice(1, 3), 16),
		o = parseInt(a.slice(3, 5), 16),
		n = parseInt(a.slice(5, 7), 16);
	return e ? "rgba(" + t + ", " + o + ", " + n + ", " + e + ")" : "rgb(" + t + ", " + o + ", " + n + ")"
}
dataColors && (colors = dataColors.split(",")), $("#world-map-markers").vectorMap({
	map: "world_mill_en",
	normalizeFunction: "polynomial",
	hoverOpacity: .7,
	hoverColor: !1,
	regionStyle: {
		initial: {
			fill: "#ced4da"
		}
	},
	
	markerStyle: {
		initial: {
			r: 9,
			fill: colors[0],
			"fill-opacity": .9,
			stroke: "#fff",
			"stroke-width": 7,
			"stroke-opacity": .4
		},
		
		hover: {
			stroke: "#fff",
			"fill-opacity": 1,
			"stroke-width": 1.5
		}
	},
	
	backgroundColor: "transparent",
	markers: [{
		latLng: [41.9, 12.45],
		name: "Vatican City"
	},
	{
		latLng: [43.73, 7.41],
		name: "Monaco"
	},
	{
		latLng: [-.52, 166.93],
		name: "Nauru"
	},
	{
		latLng: [-8.51, 179.21],
		name: "Tuvalu"
	},
	{
		latLng: [43.93, 12.46],
		name: "San Marino"
	},
	{
		latLng: [47.14, 9.52],
		name: "Liechtenstein"
	},
	{
		latLng: [7.11, 171.06],
		name: "Marshall Islands"
	},
	{
		latLng: [17.3, -62.73],
		name: "Saint Kitts and Nevis"
	},
	{
		latLng: [3.2, 73.22],
		name: "Maldives"
	},
	{
		latLng: [35.88, 14.5],
		name: "Malta"
	},
	{
		latLng: [12.05, -61.75],
		name: "Grenada"
	},
	{
		latLng: [13.16, -61.23],
		name: "Saint Vincent and the Grenadines"
	},
	{
		latLng: [13.16, -59.55],
		name: "Barbados"
	},
	{
		latLng: [17.11, -61.85],
		name: "Antigua and Barbuda"
	},
	{
		latLng: [-4.61, 55.45],
		name: "Seychelles"
	},
	{
		latLng: [7.35, 134.46],
		name: "Palau"
	},
	{
		latLng: [42.5, 1.51],
		name: "Andorra"
	},
	{
		latLng: [14.01, -60.98],
		name: "Saint Lucia"
	},
	{
		latLng: [6.91, 158.18],
		name: "Federated States of Micronesia"
	},
	{
		latLng: [1.3, 103.8],
		name: "Singapore"
	},
	{
		latLng: [.33, 6.73],
		name: "SÃ£o TomÃ© and PrÃ­ncipe"
	}]
});