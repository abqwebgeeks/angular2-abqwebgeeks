<h1>One vs Two</h1>
<p class="embed-responsive embed-responsive-16by9">
	<iframe src="https://www.youtube.com/embed/gNmWybAyBHI" allowfullscreen></iframe>
</p>
<hr />
<h2>Promises vs Observables</h2>
<h3>Promises</h3>
<div [innerHTML]="promise"></div>
<h3>Observables</h3>
<div [innerHTML]="observable"></div>
<hr />
<p>Here, we have an Angular 1 controller completing a promise and an Angular 2 component subscribing to an observable. In my experience, the idea of making the promise behavior a single method to make it more dry was always was a tantalizing concept: I always wanted to write a method but then ran into a myriad of customizations required by every teensy weensy use case. The increased flexibility of observables finally enabled me to have a generic method in my services and make the customizations of the use case in the component's methods. In other words, the finer separation of concerns in observables enabled me to easily accomplish this laudable goal.</p>
<p>Here, the promise and observable are doing exactly the same thing. This is good for a direct head-to-head comparison. However, this discounts observable's enhanced capabilities. For instance, suppose we want to get all todos and then filter only the ones that are still incomplete.</p>
<p>Another point to be made with this code sample is the cleaner <code>ngOnInit</code> mechanism to automatically consume the data from the RESTful instead of the hacky <code>if</code> block in the Angular 1 code. Angular 2 finally has granted access to the component's life cycle.</p>
