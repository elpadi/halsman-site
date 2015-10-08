'use strict';

var _get = function get(_x, _x2, _x3) { var _again = true; _function: while (_again) { var object = _x, property = _x2, receiver = _x3; desc = parent = getter = undefined; _again = false; if (object === null) object = Function.prototype; var desc = Object.getOwnPropertyDescriptor(object, property); if (desc === undefined) { var parent = Object.getPrototypeOf(object); if (parent === null) { return undefined; } else { _x = parent; _x2 = property; _x3 = receiver; _again = true; continue _function; } } else if ('value' in desc) { return desc.value; } else { var getter = desc.get; if (getter === undefined) { return undefined; } return getter.call(receiver); } } };

var _createClass = (function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ('value' in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; })();

function _inherits(subClass, superClass) { if (typeof superClass !== 'function' && superClass !== null) { throw new TypeError('Super expression must either be null or a function, not ' + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError('Cannot call a class as a function'); } }

var Slideshow = (function () {
	function Slideshow(container) {
		_classCallCheck(this, Slideshow);

		this.container = container;
		this.images = Array.prototype.filter.call(container.children, function (el) {
			return el.nodeName === 'IMG';
		});
		this.currentIndex = -1;
	}

	_createClass(Slideshow, [{
		key: 'showImage',
		value: function showImage(index) {
			this.images[index].classList.add('selected');
		}
	}, {
		key: 'hideImage',
		value: function hideImage(index) {
			this.images[index].classList.remove('selected');
		}
	}, {
		key: 'next',
		value: function next() {
			this.selectByIndex((this.currentIndex + 1) % this.images.length);
		}
	}, {
		key: 'selectByIndex',
		value: function selectByIndex(index) {
			if (index < 0 || index >= this.images.length) {
				throw new RangeError("Bad index.");
			}
			if (index !== this.currentIndex) {
				try {
					if (this.currentIndex >= 0) this.hideImage(this.currentIndex);
					this.showImage(index);
				} catch (e) {
					console.error(e);
					return false;
				}
				this.currentIndex = index;
			}
		}
	}]);

	return Slideshow;
})();

