Een nieuwe collectie:

1. een nieuwe view COLLECTIES ITEM aanmaken
        !NIET VERGETEN: velden>thumb>link aan te passen
        bij 'uitgebreid' class aanmaken, vb,  view-void-paintings
2. een nieuwe view PAINTINGS COLLECTIES aanmaken
3. In taxonomy Paintings
            url alias: paintings/...
            url omleidingen: van: paintings/... (=alias)
                            naar: works/paintings/.... (link view paintings collecties)
                            !NIET VERGETEN: 'ingeschakeld' aan te klikken
4. in MY_SCRIPT.JS :if ... addClass active

