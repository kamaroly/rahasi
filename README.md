## rahasi

If you want a popup, Declare a route in the application that should return the view then add anchor html tag with modal id like below:
```html 
<!-- HTML THAT WILL TRIGGER A POPUP FORM THE form URL -->
<a href="/form.html" id="modal">Open form</a>
```

### Todo
1. Need to fix the bug that is causing the modal to close it self
