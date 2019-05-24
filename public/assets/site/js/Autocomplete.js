if (s < 0) {
        s = 0;
      }
      var q;
      if (l <= 0.5) {
        q = l * (1 + s);
      } else {
        q = l + s - (l * s);
      }

      var p = 2 * l - q;

      var tr = h + (1 / 3);
      var tg = h;
      var tb = h - (1 / 3);

      var r = Math.round(this.HueToRGB(p, q, tr) * 255);
      var g = Math.round(this.HueToRGB(p, q, tg) * 255);
      var b = Math.round(this.HueToRGB(p, q, tb) * 255);
      return [r, g, b, this._sanitizeNumber(a)];
    },
    /**
     * @param {String} strVal
     * @returns {Object} Object containing h,s,b,a,format properties or FALSE if failed to parse
     */
    parse: function(strVal) {
      if (arguments.length === 0) {
        return false;
      }

      var that = this,
        result = false,
        isAlias = (typeof this.colors[strVal] !== 'undefined'),
        values, format;

      if (isAlias) {
        strVal = this.colors[strVal].toLowerCase().trim();
      }

      $.each(this.stringParsers, function(i, parser) {
        var match = parser.re.exec(strVal);
        values = match && parser.parse.apply(that, [match]);
        if (values) {
          result = {};
          format = (isAlias ? 'alias' : (parser.format ? parser.format : that.getValidFallbackFormat()));
          if (format.match(/hsla?/)) {
            result = that.RGBtoHSB.apply(that, that.HSLtoRGB.apply(that, values));
          } else {
            result = that.RGBtoHSB.apply(that, values);
          }
          i