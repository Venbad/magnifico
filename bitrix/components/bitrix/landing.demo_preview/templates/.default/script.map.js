{"version":3,"sources":["script.js"],"names":["BX","namespace","slice","Landing","Utils","proxy","bind","unbind","addClass","removeClass","isNumber","style","data","addQueryParams","getDeltaFromEvent","TemplatePreview","this","closeButton","document","querySelector","createButton","palette","imageContainer","loaderContainer","previewFrame","loader","Loader","onCreateButtonClick","onCancelButtonClick","init","getInstance","instance","prototype","children","forEach","initSelectableItem","onMouseOver","onMouseLeave","showPreview","window","onwheel","browser","IsFirefox","onMouseWheel","event","stopPropagation","preventDefault","delta","scrollTop","contentWindow","scrollY","requestAnimationFrame","scrollTo","y","src","showLoader","then","createFrameIfNeeded","loadPreview","delay","hideLoader","Promise","resolve","width","containerWidth","clientWidth","height","transform","transform-origin","border","onload","show","iframe","hide","image","setTimeout","getValue","result","getCreateUrl","getAttribute","top","SidePanel","Instance","close","location","item","onSelectableItemClick","currentTarget","parentElement"],"mappings":"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","file":""}