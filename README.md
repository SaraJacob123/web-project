#Codename One CKeditor Component

A WYSIWYG HTML Editor component for Codename One

![CKeditor Widget in CodenameOne Simulator](https://github.com/shannah/cn1-ckeditor/raw/master/screenshots/ckeditor-iphone4.png)

##Synopsis

The CKeditor widget wraps the Javascript [CKeditor](http://ckeditor.com/) widget inside a [BrowserComponent](https://codenameone.googlecode.com/svn/trunk/CodenameOne/javadoc/com/codename1/ui/BrowserComponent.html) and exposes
a subset of the functionality as a Java API.  It can easily be improved to add additional
functionality also, but just putting up the bare-bones necessary features right now to
get it working.

##Requirements

1. [Codename One 1.0](http://www.codenameone.com) or higher
2. [Codename One Javascript Bridge](https://github.com/shannah/CodenameOneJS)
3. Tested to work for the Simulator and Android (using the Build server).  Currently only works on iOS using an [offline build](http://sjhannah.com/blog/?p=228).  Windows Phone not tested, and won't work on Blackberry or JME since they don't support native browser components.

Note:  When/if the Codename One build server is updated to support directory structures for resources rather than a flat structure, it will work on iOS using the build server also.  In the mean time, it will work with offline builds only.  See [this issue](https://code.google.com/p/codenameone/issues/detail?can=2&start=0&num=100&q=&colspec=ID%20Type%20Status%20Priority%20Milestone%20Owner%20Summary&groupby=&sort=&id=809) to track the progress of this.

##License

[LGPL](http://www.gnu.org/licenses/lgpl.html)

##Installation Instructions (Using Netbeans)

1. Add the [CN1JSLib.cn1lib](https://github.com/shannah/CodenameOneJS/raw/master/dist/CN1JSLib.cn1lib) (i.e. the Codename One Javascript bridge) library to your project's lib directory.
2. Add the [CodenameOneCKeditorComponent.cnlib](https://github.com/shannah/cn1-ckeditor/blob/master/dist/CodenameOneCKeditorComponent.cn1lib?raw=true) library to your project's lib directory.
3. Right click on your project in the netbeans project explorer, and select "Refresh Libs" (so that Netbeans will recognize your libs).


##Usage

1. Create a new CKeditor object:
    
        CKeditor editor = new CKeditor();
    
2. Initialize the editor.  You can either do this asynchronously with initLater(), or synchronously with initAndWait().  Your choice will
depend on whether you want to start interacting with it right away.

        editor.initLater();
        
        // or editor.initAndWait();
    
3. Add editor to your form.

        form.setLayout(new BorderLayout());
        form.addComponent(BorderLayout.CENTER, editor);
    
###Getting current contents:

    String content = editor.getData();
    
###Setting current contents:

    editor.setData("<p>Some HTML to set as the content</p>");
    
    // or set content as text
    editor.setText("Hello world\n This is a new line\n another new line");
        // This will be converted to appropriate HTML.
        
##To Do:

Lots of things to do.  This is basically just a quick and dirty proof of concept right now.  One of the most important things that needs to be done is to add the ability to
set [configuration options](http://docs.ckeditor.com/#!/api/CKEDITOR.config) so that you can, e.g. change the options in the toolbar.

Potentially, wrappers can be created for any [property, method, or event](http://docs.ckeditor.com/#!/api/CKEDITOR.editor) in CKeditor.

##Contact:

[@shannah78](http://www.twitter.com/shannah78)
