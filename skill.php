<style type="text/css">
	#spn1{
		color: #2F4F4F;
		font-size: 15px;
		padding:10px;
		font-weight: bold;
		background-color: #F0FFF0;
		
	}
</style>
<h2 style="color: brown">Technical Skills</h2><br>
<p ng-init="skill=['DSA','C++','Python','HTML','CSS','Bootstrap','JavaScript','JQuery','AngularJS','PHP','MySQL','Django','CodeIgnitor']">
	<pre ng-repeat="x in skill" class="col-md-3" id="spn1">{{x}}</pre>
	<!-- <span>C++</span>
	<span>Python</span>
	<span>HTML</span>
	<span>CSS</span>
	<span>Bootstrap</span><br><br>
	<span>JavaScript</span>
	<span>JQuery</span>
	<span>AngularJS</span>
	<span>PHP</span>
	<span>MySQL</span>
	<span>Django(Basic)</span> -->

</p>