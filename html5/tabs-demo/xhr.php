<?php sleep(1) ?>
<?php $page = $_GET['page']; ?>

<?php if ($page == 'extends') {?>
<h1>Extends</h1>
<p>
	MooTools classes can extend other classes to create sub classes.  This class Extends Tab.js.  It adds a little code to the <code>show</code> method to include some AJAX functionality but just inherits everything else!
</p>
<p>
	If we fix a bug in Tab.js, we automatically fix the bug in Tab.Ajax.js.
</p>
<p>
	If we add a feature to Tab.js, we automatically add a feature to Tab.Ajax.js.
</p>
<?php } ?>

<?php if ($page == 'parent') {?>
<h1>Parent</h1>
<p>
	You always have access to the parent class methods with <code>this.parent(args)</code>.  Call that within any method and you'll call the parent method with the same name as the method from which it's called. Yes, I'm aware I said method a lot.
</p>
<?php } ?>

<?php if ($page == 'implements') {?>
<h1>Implements</h1>
<p>
	Implements sort of feels like Extends but it's different.  Implements simply copies over the methods of class into another class.  In the other box we talked about Options and Events.  Tabs.js implements two classes named Options and Events.  There is no <code>this.parent()</code> when you Implement another class.
</p>
<?php } ?>