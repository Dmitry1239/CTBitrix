{"version":3,"file":"widget.min.js","sources":["widget.js"],"names":["BX","namespace","Tasks","ui","widget","opts","merge","this","scope","useSpawn","messages","controls","bindEvents","removeTemplates","initializeByGlobalEvent","globalEventScope","vars","ctrls","tmpls","sys","stack","init","code","initialized","pushFuncStack","isuiWidget","prototype","preInit","ctx","so","sc","document","Error","match","k","type","isNotEmptyString","isElementNode","outerHTML","templates","querySelectorAll","length","id","data","search","replace","innerHTML","remove","isFunction","bindEvent","isDomNode","unbindAll","getControlClassName","getControl","notRequired","getAll","node","sScope","checkFound","result","e","setOption","name","value","getOption","getSysCode","getHTMLByTemplate","templateId","replacements","html","hasOwnProperty","replaceWith","toString","indexOf","substr","util","htmlspecialchars","placeHolder","toLowerCase","createNodesByTemplate","onlyTags","template","isTableRow","isTableCell","keeper","createElement","childNodes","children","push","Array","slice","call","replaceTemplate","parentConstruct","owner","c","superclass","constructor","apply","handleInitStack","nf","resolveFuncStack","i","fireEvent","isString","window","addCustomEvent","proxy","fName","f","disableInFuncStack","DoNothing","fire","eventName","args","onCustomEvent","callback","setCSSState","statName","changeCSSState","dropCSSState","way","spawn","onSpawn","clone","getRandom","Math","floor","random","networkIOWidget","source","pageSize","paginatedRequest","lastPage","loader","show","hide","extend","downloadBundle","parameters","sv","options","ajax","url","method","dataType","async","processData","emulateOnload","start","refineRequest","request","getNavParams","onsuccess","refineResponce","callbacks","onLoad","showError","errors","onComplete","onfailure","message","exception","onError","PAGE_SIZE","PAGE","debug","query","responce"],"mappings":"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"}