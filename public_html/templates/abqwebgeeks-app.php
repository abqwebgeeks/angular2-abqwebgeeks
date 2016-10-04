<div class="sfooter">
	<div class="sfooter-content">
		<header>
			<nav class="navbar navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" aria-expanded="false" (click)="toggleCollapse();">
							<span class="sr-only">Main Menu</span>
							<i class="fa fa-bars fa-lg"></i>
						</button>
						<a class="navbar-brand" routerLink="/">
							<img id="navLogo" src="images/angular2.svg" alt="Angular 2" />
						</a>
					</div>
					<div class="navbar-collapse" [ngClass]="{collapse: navCollapse}">
						<ul class="nav navbar-nav navbar-right" (click)="toggleCollapse();">
							<li><a routerLink="/"><i class="fa fa-home fa-lg"></i></a></li>
							<li><a routerLink="/introduction">Introduction</a></li>
							<li><a routerLink="/new-in-two">New in 2</a></li>
							<li><a routerLink="/one-vs-two">1 vs 2</a></li>
							<li><a routerLink="/wat">WAT</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<main class="container">
			<router-outlet></router-outlet>
		</main>
	</div>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					&copy; 2016 by <a href="https://www.deepdivedylan.com/">Deep Dive Dylan</a>. All content and code is released under the terms of the <a href="https://www.apache.org/licenses/LICENSE-2.0">Apache 2.0 License</a>.
				</div>
				<div class="col-md-3">
					<a href="https://github.com/dylan-mcdonald/angular2-abqwebgeeks/"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>
					<a href="https://twitter.com/deepdivedylan"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</footer>
</div>
