// set image properties, for Highlight effect added when click
var imgProp = {
  'padding': '1px',
  'backgroundColor': 'transparent',
  'borderSize': '10ps',
  'borderStyle': 'dashed',
  'borderColor': 'white',
};
//Used to select Primary Category.
var imgPropPrim = {
  'padding': '1px',
  'backgroundColor': 'transparent',
  'borderSize': '10ps',
  'borderStyle': 'solid',
  'borderColor': 'orange',
};

// function to highlight IMGs on click - from: http://coursesweb.net/
function highlightImg() {
  // gets all <img> tags, and their number
  var allimgs = document.getElementsByTagName('img');
  var primset = $('#exhgt').attr('primaryselected');
  var nrallimgs = allimgs.length;

  // traverses the <img> elements, and register onclick to each one
  // else, apply the properties defined in $imgProp
  for(i=0; i<nrallimgs; i++) {
    allimgs[i].onclick=function() {
      // if borderStyle is already applied, anulates the 'padding', 'background' and 'border' properties
      //Primary Category is already chosen and clicked again.
      if(this.style.borderStyle == imgPropPrim.borderStyle && primset === 'true') {
        this.style.padding = 'auto';
        this.style.background = 'none'; 
        this.style.border = 'none';
        primset = 'false';
        $('#exhgt').attr('primaryselected', false);
        this.setAttribute("primary", false);
      }
      //Primary Category is not chosen but category is clicked again.
      else if(this.style.borderStyle == imgProp.borderStyle && primset === 'false') {
        this.style.padding = imgPropPrim.padding;
        this.style.backgroundColor = imgPropPrim.backgroundColor;
        this.style.borderSize = imgPropPrim.borderSize;
        this.style.borderStyle = imgPropPrim.borderStyle;
        this.style.borderColor = imgPropPrim.borderColor;
        primset = 'true';
        $('#exhgt').attr('primaryselected', true);
        this.setAttribute("primary", true);
        //$("#i"+i).prop('checked', true);
      }
      //Primary is another category and this is clicked again, Set to unchecked.
      else if(this.style.borderStyle == imgProp.borderStyle && primset === 'true') {
          this.style.padding = 'auto';
          this.style.background = 'none';
          this.style.border = 'none';
      }
      //When this is not checked, check it.
      else {
        this.style.padding = imgProp.padding;
        this.style.backgroundColor = imgProp.backgroundColor;
        this.style.borderSize = imgProp.borderSize;
        this.style.borderStyle = imgProp.borderStyle;
        this.style.borderColor = imgProp.borderColor;
      }
    }
  }
}

// calls the highlightImg() function to apply the effect
highlightImg();